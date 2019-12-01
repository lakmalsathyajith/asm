import moment from 'moment';
import {
    UPDATE_BOOKING_STORE,
    SELECTED_BOOKING
} from './types.js';
import {IS_LOADING, SELECTED_APARTMENT} from "../ratesAndAvailability/types";

/**
 * get all the apartments saved
 * @param commit
 */
export const updateBookingStore = ({ commit }, payload) => {
    commit(UPDATE_BOOKING_STORE, payload);
};



/**
 * get booking data
 * @param commit
 * @param payload
 */
export const booking = ({ commit }, payload) => {

    console.log('-------booking-------', payload);
    let params = {
        //"rms_reference": 1234,
        "apartment_id": 1,
        "adults": 4,
        "children": 5,
        "check_in": "2019-12-25 00:00:00",
        "check_out": "2019-12-26 00:00:00",
        "rent": 2500
    };
    commit(IS_LOADING, true);
    Vue.axios
        .post('/booking', params)
        .then(res => {
            console.log('-------booking2-------', res.data.data.uuid);
            window.location = "../booking/step-one?id="+res.data.data.uuid;
            //commit(SELECTED_BOOKING, res);
        })
        .catch(err => {
            console.log('---err----', err);
            commit(IS_LOADING, false);
        });
};
/**
 * get booking data
 * @param commit
 * @param payload
 */
export const getBooking = ({ commit }, payload) => {
    //commit(IS_LOADING, true);
    Vue.axios
        .get('/booking/' + payload)
        .then(res => {
            commit(SELECTED_BOOKING, res.data);
            //commit(IS_LOADING, false);
        })
        .catch(err => {
            console.log('---err----', err);
            commit(IS_LOADING, false);
        });
};

