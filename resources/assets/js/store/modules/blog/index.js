import * as actions from './actions';
import mutations from './mutations';

const state = {
    nextUrl : null,
    currentPage : null,
    lastPage : null,
    blogList : [],
    selectedBlog : {},
};
const getters = {};

const contact = {
    namespaced: true,
    state,
    getters,
    mutations,
    actions
};
export default contact;
