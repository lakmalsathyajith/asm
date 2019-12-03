import {GLOBAL_LOADER} from "./globalTypes";

export default {
    [GLOBAL_LOADER](state, payload) {
        state.isLoading = payload;
    }
};