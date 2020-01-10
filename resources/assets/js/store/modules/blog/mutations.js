import {
   LOAD_BLOGS
} from './types.js';

export default {

  [LOAD_BLOGS](state, payload) {
    state.contactResponse = payload;
  }

};
