import * as actions from './actions'

const state = {
    title : "this is the title"
};
const getters = {};
const mutations = {};
//const actions = {};

const home = {
    namespaced: true,
    state,
    getters,
    mutations,
    actions
};
export default home;
