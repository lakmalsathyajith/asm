import {GLOBAL_LOADER} from "./globalTypes";

export default {
    [GLOBAL_LOADER](state, payload) {

        console.log(GLOBAL_LOADER)

        state.isLoading = payload;
    }
};