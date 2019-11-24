import {
  IS_LOADING,
  GET_APARTMENTS_LIST,
  SELECTED_APARTMENT
} from './types.js';

export default {
  [IS_LOADING](state, payload) {
    state.isLoading = payload;
  },
  [GET_APARTMENTS_LIST](state, payload) {
    state.apartmentsList = payload.data;
    setTimeout(() => {
      if ($('.swiper-container').length) {
        var swiper = new Swiper('.swiper-container', {
          effect: 'fade',
          fadeEffect: {
            crossFade: true
          },
          loop: true,
          speed: 1000,
          centeredSlides: true,
          autoplay: {
            delay: 3000,
            disableOnInteraction: false
          },
          pagination: {
            el: '.swiper-pagination',
            clickable: true
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
          }
        });
      }
    }, 1000);
  },
  [SELECTED_APARTMENT](state, payload) {
    state.selectedApartment = payload;
    setTimeout(() => {
        if ($('.swiper-container').length) {
          var swiper = new Swiper('.swiper-container', {
            effect: 'fade',
            fadeEffect: {
              crossFade: true
            },
            loop: true,
            speed: 1000,
            centeredSlides: true,
            autoplay: {
              delay: 3000,
              disableOnInteraction: false
            },
            pagination: {
              el: '.swiper-pagination',
              clickable: true
            },
            navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev'
            }
          });
        }
      }, 1000);
  }
};
