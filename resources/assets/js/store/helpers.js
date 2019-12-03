/**
 * wrap is loading to make abstract
 * @param dispatch
 * @param payload
 */
export const isLoading = (dispatch, payload) => {
    dispatch('isLoading',  payload, {root: true} );
};