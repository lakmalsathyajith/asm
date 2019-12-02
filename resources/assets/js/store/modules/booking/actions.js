import moment from 'moment';
import {
    UPDATE_BOOKING_STORE,
    SELECTED_BOOKING,
    ERRORS
} from './types.js';
import {IS_LOADING, SELECTED_APARTMENT} from "../ratesAndAvailability/types";

/**
 * get all the apartments saved
 * @param commit
 */
export const updateBookingStore = ({commit}, payload) => {
    commit(UPDATE_BOOKING_STORE, payload);
};


/**
 * get booking data
 * @param commit
 * @param payload
 */
export const booking = ({commit}, payload) => {


    console.log('-------payload-------', payload);
    let params = {
        apartment_id: 1,
        adults: payload.adults,
        children: payload.children,
        check_in: moment(payload.checkIn).format('YYYY-MM-DD'),
        check_out: moment(payload.checkOut).format('YYYY-MM-DD'),
        rent: 2500
    };
    commit(IS_LOADING, true);
    Vue.axios
        .post('/booking', params)
        .then(res => {
            console.log('-------booking2-------', res);
            let bookingId = res.data.data.uuid;
            let errorArr = Object.keys(res.data.errors);
            if(!errorArr.length>0){
                window.location = "../booking/" + bookingId + "/step-one";
            }else{
                // commit errors
            }

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
export const getBooking = ({commit}, payload) => {
    commit(IS_LOADING, true);
    Vue.axios
        .get('/booking/' + payload)
        .then(res => {

            console.log('-------getBooking-------', res.data.data);
            commit(SELECTED_BOOKING, res.data);
            commit(IS_LOADING, false);
        })
        .catch(err => {
            console.log('---err----', err);
            commit(IS_LOADING, false);
        });
};

export const updateOccupants = ({commit}, payload) => {
    //commit(IS_LOADING, true);
    let params = {
        "booking_id": 1,
        "occupants": [

        ]
    };
    /*let params = {
        "booking_id": 1,
        "occupants": [
            {
                "is_primary": true,
                "first_name": "occ first",
                "last_name": "occ_last",
                "date_of_birth":"2010-11-10",
                "type": "ADULT",

                "email": "1email@asd.com",
                "land_phone": "0123456789",
                "mobile_phone": "0123456789",
                "address": "1 address",
                "emp_status": "EMPLOYEE/STUDENT",
                "emp_phone": "0123456789",
                "emp_address": "1 emp address",
                "emp_personal_address": "1 emp_personal_address",
                "emp_department": "1 emp department",

                "identity_type": "PASSPORT",
                "identity_number": "12345689",
                "identity_issued_by": "Sri Lanka",
                "next_of_kin": "somme one",
                "kin_relationship": "Brother",
                "kin_email": "1kin@asd.com",
                "kin_address": "kin address",
                "kin_land_phone": "0123456789",
                "kin_mobile_phone": "0123456789"
            },
            {
                "is_primary": false,
                "first_name": "occ first",
                "last_name": "occ last",
                //"date_of_birth":"2010-11-10",
                "type": "ADULT",

                "email": "1email@asd.com",
                "land_phone": "0123456789",
                "mobile_phone": "0123456789",
                "address": "1 address",
                "emp_status": "EMPLOYEE/STUDENT",
                "emp_phone": "0123456789",
                "emp_address": "1 emp address",
                "emp_personal_address": "1 emp_personal_address",
                "emp_department": "1 emp department"
            },
            {
                "is_primary": false,
                "first_name": "occ first",
                "last_name": "occ last",
                //"date_of_birth":"2010-11-10",
                "type": "CHILD"
            }
        ]
    };*/
   // commit(IS_LOADING, true);
    Vue.axios
        .post('/occupant', payload)
        .then(res => {
            let bookingId = payload;
            let errorArr = Object.keys(res.data.errors);
            if(!errorArr.length>0){
                window.location = "../booking/" + bookingId + "/step-two";
            }else{
                //console.log('---err----', res.data);
                commit(ERRORS, res.data.errors);
            }
            //
            //commit(SELECTED_BOOKING, res);
        })
        .catch(err => {
            console.log('---err----', err);
            //commit(IS_LOADING, false);
        });
};



