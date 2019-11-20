import * as actions from './actions';
import mutations from './mutations';

const state = {
    isLoading : false,
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
