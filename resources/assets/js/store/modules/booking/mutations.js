import {
  UPDATE_BOOKING_STORE,
  SELECTED_BOOKING
} from './types.js';
import {GET_APARTMENTS_LIST} from "../ratesAndAvailability/types";

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
  }
};
