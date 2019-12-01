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
export const getBooking = ({ commit }, payload) => {
    //commit(IS_LOADING, true);
    Vue.axios
        .get('/apartments/' + payload)
        .then(res => {
            commit(SELECTED_BOOKING, res.data);
            //commit(IS_LOADING, false);
        })
        .catch(err => {
            console.log('---err----', err);
            commit(IS_LOADING, false);
        });
};

