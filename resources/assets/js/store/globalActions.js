import {GLOBAL_LOADER} from "./globalTypes";

/**
 * set global loader
 * @param commit
 * @param payload
 */
export const isLoading = ({commit}, payload) => {
    commit(GLOBAL_LOADER, payload);
};
