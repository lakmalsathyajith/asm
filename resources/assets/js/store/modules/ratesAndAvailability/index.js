import * as actions from './actions';
import mutations from './mutations';

const state = {
    title : "this is the title 1"
};
const getters = {};

const ratesAndAvailability = {
    namespaced: true,
    state,
    getters,
    mutations,
    actions
};
export default ratesAndAvailability;
