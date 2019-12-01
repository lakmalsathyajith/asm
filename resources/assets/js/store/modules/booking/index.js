import * as actions from './actions';
import mutations from './mutations';

const state = {
    bookingData : []
};
const getters = {};

const booking = {
    namespaced: true,
    state,
    getters,
    mutations,
    actions
};
export default booking;
