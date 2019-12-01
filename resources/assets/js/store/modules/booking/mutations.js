import {
  UPDATE_BOOKING_STORE
} from './types.js';

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
  }
};
