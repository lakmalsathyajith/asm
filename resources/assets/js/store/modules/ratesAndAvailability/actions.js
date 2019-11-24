import moment from 'moment';
import {
  GET_APARTMENTS_LIST,
  SELECTED_APARTMENT,
  IS_LOADING
} from './types.js';

/**
 * get all the apartments saved
 * @param commit
 */
export const getApartmentsList = ({ commit }) => {
  // some API call here
  commit(IS_LOADING, true);
  Vue.axios
    .get('/apartments')
    .then(res => {
      commit(GET_APARTMENTS_LIST, res.data);
      commit(IS_LOADING, false);
    })
    .catch(err => {
      console.log('---err----', err);
      commit(IS_LOADING, false);
    });
};

/**
 * get given apartment details
 * @param commit
 * @param payload
 */
export const getApartment = ({ commit }, payload) => {
  commit(IS_LOADING, true);
  Vue.axios
    .get('/apartments/' + payload)
    .then(res => {
      commit(SELECTED_APARTMENT, res.data);
      commit(IS_LOADING, false);
    })
    .catch(err => {
      console.log('---err----', err);
      commit(IS_LOADING, false);
    });
};

/**
 * get available room types for the given filter criteria
 * RMS API call included
 * @param commit
 * @param payload
 */
export const getFilteredApartments = ({ commit }, payload) => {
  let params = {
    postFields: {
      start: moment(payload.checkIn).format('YYYY-MM-DD'),
      end: moment(payload.checkOut).format('YYYY-MM-DD'),
      adults: payload.adults,
      children: payload.children,
      AvailOnly: true
    }
  };
  commit(IS_LOADING, true);
  Vue.axios
    .post('/get-available-room-types', params)
    .then(res => {
      var ramRefIds = [];

      res.data.data.RoomTypes.RoomType.forEach(function(obj, index, array) {
        if (obj.BookingRangeAvailable && obj.BookingRangeAvailable == 'true') {
          ramRefIds.push(obj.RoomTypeId);
        }
      });
      Vue.axios
        .post('/apartments/filter', { rms_ids: ramRefIds , ...payload})
        .then(res => {
          commit(GET_APARTMENTS_LIST, res);
          commit(IS_LOADING, false);
        })
        .catch(err => {
          console.log('---err----', err);
          commit(IS_LOADING, false);
        });
    })
    .catch(err => {
      console.log('---err----', err);
      commit(IS_LOADING, false);
    });
};
