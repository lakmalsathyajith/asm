import moment from 'moment';
import {
    LOAD_BLOGS,SET_NEXT_PAGE, SET_LAST_PAGE, SET_CURRENT_PAGE, LOAD_BLOG
} from './types.js';
import {isLoading} from "../../helpers";

/**
 * update occupants list
 *
 * @param commit
 * @param payload
 */
export const getBlogs = ({commit, dispatch}, payload) => {
    isLoading(dispatch, true);
    let params = {
        "per-page":10
    };
    let splittedUrl = (payload) ? payload.split('/blogs') : [];
    let url = (splittedUrl[1]) ? `/blogs${splittedUrl[1]}` : `/blogs`;
    Vue.axios
        .get(url, { params })
        .then(res => {
            commit(SET_NEXT_PAGE, res.data.data.next_page_url);
            commit(SET_CURRENT_PAGE, res.data.data.current_page);
            commit(SET_LAST_PAGE, res.data.data.last_page);
            commit(LOAD_BLOGS, res.data.data.data);
            isLoading(dispatch, false)
        })
        .catch(err => {
            console.log('---err----', err);
            isLoading(dispatch, false)
        });
};

/**
 * get single blog item using slug
 * @param commit
 * @param dispatch
 * @param payload
 */
export const getBlog = ({commit, dispatch}, payload) => {
    isLoading(dispatch, true);
    let params = {

    };
    Vue.axios
        .get(`/blogs/${payload}`, { params })
        .then(res => {
            commit(LOAD_BLOG, res.data.data[0]);
            isLoading(dispatch, false)
        })
        .catch(err => {
            console.log('---err----', err);
            isLoading(dispatch, false)
        });
};
