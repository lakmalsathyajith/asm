import {
  GET_USER_DETAILS
} from './types.js';

export default {
  [GET_USER_DETAILS](state, payload) {
    state.loginResponse = payload;
  }
};
