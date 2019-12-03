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
      infants: 0,
      additional1: 0,
      additional2: 0,
      additional3: 0,
      additional4: 0,
      additional5: 0,
      test:'',
      ShowAreas:''
    }
  };
  commit(IS_LOADING, true);
  Vue.axios
    .post('/get-available-room-types', params)
    .then(res => {
      var ramRefIds = [];

      res.data.data.RoomTypes.RoomType.forEach(function(obj, index, array) {
        if (obj.BookingRangeAvailable && obj.BookingRangeAvailable == 'true') {
          
          if(obj.Areas.Area && obj.Areas.Area.length>0){
            obj.Areas.Area.forEach(function(area){
              let total =  parseFloat(area.ChargeTypes.ChargeType.TotalPrice);
              let id = area.AreaId;

              if(payload.price_min=='Any' && payload.price_max=='Any'){
                ramRefIds.push({id:id, price: total});
              }else if(payload.price_min=='Any' && payload.price_max!='Any'){
                let pricemax = parseFloat(payload.price_max.substr(1));
                if(total <= pricemax){
                  ramRefIds.push({id:id, price: total});
                }
              }else if(payload.price_min!='Any' && payload.price_max=='Any'){
                let pricemin = parseFloat(payload.price_min.substr(1));
                if(pricemin <= total){
                  ramRefIds.push({id:id, price: total});
                }
              }else if(payload.price_min!='Any' && payload.price_max!='Any'){
                let pricemax = parseFloat(payload.price_max.substr(1));
                let pricemin = parseFloat(payload.price_min.substr(1));
                if(pricemin <= total && total <= pricemax){
                  ramRefIds.push({id:id, price: total});
                }
              }else{
                ramRefIds.push({id:id, price: total});
              }
            });
          }
          
          
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
