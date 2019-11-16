import { GET_APARTMENTS_LIST, SELECTED_APARTMENT} from './types.js'

export default {

    [GET_APARTMENTS_LIST](state, payload) {
        state.apartmentsList = payload.data;
    },
    [SELECTED_APARTMENT](state, payload) {

        state.selectedApartment = payload;
    }

}