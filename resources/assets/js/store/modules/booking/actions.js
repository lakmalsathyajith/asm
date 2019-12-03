import moment from 'moment';
import {
    UPDATE_BOOKING_STORE,
    SELECTED_BOOKING,
    ERRORS
} from './types.js';
import {isLoading} from "../../helpers";

/**
 * get all the apartments saved
 * @param commit
 */
export const updateBookingStore = ({commit}, payload) => {
    payload['date_of_birth'] = moment(payload['date_of_birth']).format('YYYY-MM-DD')
    commit(UPDATE_BOOKING_STORE, payload);
};

/**
 * get booking data
 * @param commit
 * @param payload
 */
export const booking = ({commit,dispatch}, payload) => {
    let params = {
        apartment_id: 1,
        adults: payload.adults,
        children: payload.children,
        check_in: moment(payload.checkIn).format('YYYY-MM-DD'),
        check_out: moment(payload.checkOut).format('YYYY-MM-DD'),
        rent: 2500
    };
    isLoading(dispatch, true)
    Vue.axios
        .post('/booking', params)
        .then(res => {
            let bookingId = res.data.data.uuid;
            let errorArr = Object.keys(res.data.errors);
            if(!errorArr.length>0){
                window.location = "../booking/" + bookingId + "/step-one";
            }else{
                // commit errors
            }
            isLoading(dispatch, false)
        })
        .catch(err => {
            console.log('---err----', err);
            isLoading(dispatch, false)
        });
};
/**
 * get booking data
 * @param commit
 * @param payload
 */
export const getBooking = ({commit,dispatch}, payload) => {
    isLoading(dispatch, true);
    Vue.axios
        .get('/booking/' + payload)
        .then(res => {
            commit(SELECTED_BOOKING, res.data);
            isLoading(dispatch, false)
        })
        .catch(err => {
            console.log('---err----', err);
            isLoading(dispatch, false)
        });
};

/**
 * update occupants list
 *
 * @param commit
 * @param payload
 */
export const updateOccupants = ({commit, dispatch}, payload) => {
    isLoading(dispatch, true)
    Vue.axios
        .post('/occupant', payload)
        .then(res => {
            let bookingId = payload.uuid;
            delete payload.uuid;
            let errorArr = Object.keys(res.data.errors);
            if(!errorArr.length>0){
                window.location = "/booking/" + bookingId + "/step-two";
            }else{
                commit(ERRORS, res.data.errors);
            }
            isLoading(dispatch, false)
        })
        .catch(err => {
            console.log('---err----', err);
            isLoading(dispatch, false)
        });
};

/**
 * send locally created booking instance to RMS
 *
 * @param commit
 * @param payload
 */
export const rmsBooking = ({commit, dispatch}, payload) => {
    isLoading(dispatch, true)
    Vue.axios
        .put('/booking/'+payload, {})
        .then(res => {
            isLoading(dispatch, false)
        })
        .catch(err => {
            console.log('---err----', err);
            isLoading(dispatch, false)
        });
}
