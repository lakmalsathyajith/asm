import moment from 'moment';
import {
  GET_APARTMENTS_LIST,
  SELECTED_APARTMENT,
  IS_LOADING
} from './types.js';
import { isLoading } from '../../helpers';

/**
 * get all the apartments saved
 * @param commit
 */
export const getApartmentsList = ({ commit, dispatch }) => {
  // some API call here
  isLoading(dispatch, true);
  Vue.axios
    .get('/apartments')
    .then(res => {
      commit(GET_APARTMENTS_LIST, res.data);
      isLoading(dispatch, false);
    })
    .catch(err => {
      console.log('---err----', err);
      isLoading(dispatch, false);
    });
};

/**
 * get given apartment details
 * @param commit
 * @param payload
 */
export const getApartment = ({ commit, dispatch }, payload) => {
  isLoading(dispatch, true);
  Vue.axios
    .get('/apartments/' + payload)
    .then(res => {
      commit(SELECTED_APARTMENT, res.data);
      isLoading(dispatch, false);
    })
    .catch(err => {
      console.log('---err----', err);
      isLoading(dispatch, false);
    });
};

/**
 * get available room types for the given filter criteria
 * RMS API call included
 * @param commit
 * @param payload
 */
export const getFilteredApartments = ({ commit, dispatch }, payload) => {
  let params = {
    postFields: {
      start: moment(payload.checkIn).format('YYYY-MM-DD'),
      end: moment(payload.checkOut).format('YYYY-MM-DD'),
      adults: payload.adults,
      children: payload.children,
      infants: 0,
      additional1: 0,
      additional2: 0,
      additional3: 0,
      additional4: 0,
      additional5: 0,
      test: '',
      ShowAreas: ''
    }
  };
  isLoading(dispatch, true);
  Vue.axios
    .post('/get-available-room-types', params)
    .then(res => {
      var ramRefIds = [];
      res.data.data.RoomTypes.RoomType.forEach(function(obj, index, array) {
        if (obj.BookingRangeAvailable && obj.BookingRangeAvailable == 'true') {
          if (obj.Areas.Area && obj.Areas.Area.length > 0) {
            obj.Areas.Area.forEach(function(area) {
              let total = 0;
              if (
                area.ChargeTypes &&
                area.ChargeTypes.ChargeType &&
                area.ChargeTypes.TotalPrice
              ) {
                total = parseFloat(area.ChargeTypes.ChargeType.TotalPrice);
              }
                let id = area.AreaId;
                ramRefIds.push({ id: id, price: total });
            });
          }
        }
      });
      Vue.axios
        .post('/apartments/filter', { rms_ids: ramRefIds, ...payload })
        .then(res => {
          commit(GET_APARTMENTS_LIST, res);
          isLoading(dispatch, false);
        })
        .catch(err => {
          console.log('---err----', err);
          isLoading(dispatch, false);
        });
    })
    .catch(err => {
      console.log('---err----', err);
      isLoading(dispatch, false);
    });
};
