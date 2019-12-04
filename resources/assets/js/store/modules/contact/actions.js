import moment from 'moment';
import {
    CONTACT_RESPONSE
} from './types.js';
import {isLoading} from "../../helpers";

/**
 * update occupants list
 *
 * @param commit
 * @param payload
 */
export const contact = ({commit, dispatch}, payload) => {
    isLoading(dispatch, true)
    Vue.axios
        .post('/contact', payload)
        .then(res => {

            commit(CONTACT_RESPONSE, res.data);
            isLoading(dispatch, false)
        })
        .catch(err => {
            console.log('---err----', err);
            isLoading(dispatch, false)
        });
};
