import * as actions from './actions';
import mutations from './mutations';

const state = {
    contactData : [],
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
