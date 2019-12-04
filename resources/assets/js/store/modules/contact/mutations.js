import {
  CONTACT_RESPONSE
} from './types.js';

export default {

  [CONTACT_RESPONSE](state, payload) {
    state.contactData = payload;
  }

};
