import * as actions from './actions';
import mutations from './mutations';

const state = {
    loginResponse : {}
};
const getters = {};

const login = {
    namespaced: true,
    state,
    getters,
    mutations,
    actions
};
export default login;
