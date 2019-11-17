import * as actions from './actions';
import mutations from './mutations';

const state = {
    apartmentsList : [],
    selectedApartment : {}
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
