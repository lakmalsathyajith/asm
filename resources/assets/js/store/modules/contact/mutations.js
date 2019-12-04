import {
  UPDATE_BOOKING_STORE,
  SELECTED_BOOKING,
  ERRORS,
  UPDATE_OCCUPANT,
  BOOKING_CONFIRMATION
} from './types.js';
import {BOOKING_ERRORS} from "./types";

export default {
  [UPDATE_BOOKING_STORE](state, payload) {
    let bookingForms = [...state.bookingData];
    let found = false;
    bookingForms.forEach((form , i)=>{
          if(form.key === payload.key){
            bookingForms[i] = payload;
            found = true;
          }
    });
    if(!found){
      bookingForms.push(payload)
    }
    state.bookingData = [...bookingForms];
  },
  [SELECTED_BOOKING](state, payload) {
    state.selectedBooking = payload.data;
  },
  [ERRORS](state, payload) {
    state.errors = {...payload};
  },
  [UPDATE_OCCUPANT](state, payload) {
    let occupants = [...state.bookingData];
    occupants = occupants.map((el)=>{
        if(el.key === payload.key){
          el.identity_file = payload.data.data.id
        }
        return el;
    });
    state.bookingData = [...occupants];
  },
  [BOOKING_CONFIRMATION](state, payload) {
    state.bookingSuccess = payload;
  },
  [BOOKING_ERRORS](state, payload) {
    state.bookingErrors = payload;
  }

};
