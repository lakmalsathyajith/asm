import {
    LOAD_BLOGS, SET_NEXT_PAGE, SET_LAST_PAGE, SET_CURRENT_PAGE, LOAD_BLOG
} from './types.js';

export default {

    [LOAD_BLOGS](state, payload) {
        state.blogList = [...state.blogList, ...payload];
    },
    [SET_NEXT_PAGE](state, payload) {
        state.nextUrl = payload;
    },
    [SET_CURRENT_PAGE](state, payload) {
        state.currentPage = payload;
    },
    [SET_LAST_PAGE](state, payload) {
        state.lastPage = payload;
    },
    [LOAD_BLOG](state, payload) {
        state.selectedBlog = payload;
    }
};
