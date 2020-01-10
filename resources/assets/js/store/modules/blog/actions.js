import moment from 'moment';
import {
    LOAD_BLOGS
} from './types.js';
import {isLoading} from "../../helpers";

/**
 * update occupants list
 *
 * @param commit
 * @param payload
 */
export const getBlogs = ({commit, dispatch}, payload) => {
    isLoading(dispatch, true)
    Vue.axios
        .post('/blogs', payload)
        .then(res => {

            commit(LOAD_BLOGS, res.data);
            isLoading(dispatch, false)
        })
        .catch(err => {
            console.log('---err----', err);
            isLoading(dispatch, false)
        });
};
