<template>
  <div>
    <section class="top-search-wrap padding-tb-60">
      <div class="container-fluid">
        <div class="row nav-top-path-wrap bottom-full-width-border">
          <div class="container">
            <div class="row">
              <div class="nav-top-path">
                <ul class="list-inline">
                  <li class="list-inline-item">
                    Home
                    <span>></span>
                  </li>
                  <li class="list-inline-item">{{ selectedApartment && selectedApartment.name }}</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="listing-inner listing-details-wrap">
      <div class="container-fluid container-fluid-white-background mobile-padding-0">
        <div class="container">
          <div class="row listing-wrap">
            <div class="col-md-8 p-0">
              <div class="listing-swipe-slider inner">
                <div class="swipeslider">
                  <div class="swiper-container">
                    <div class="swiper-wrapper">
                      <div
                        class="swiper-slide slide"
                        v-for="(file, i) in selectedApartment.files"
                        v-bind:key="file.id + i"
                        :style="{
                          backgroundImage: 'url(\'' + file.url + '\')'
                        }"
                      ></div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                  </div>
                </div>
              </div>
              <div class="bottom-desc-behind-wrap">
                <h3>{{ selectedApartment && selectedApartment.name }}</h3>
                <p>
                  <span class="ti-location-pin"></span>
                  {{ selectedApartment.address }}
                </p>
              </div>
             <div class="listing-bottom-icons-wrap modile-hide tab-view">
                <ul class="list-inline">
                  <li class="list-inline-item apart-type">{{ selectedApartment.type && selectedApartment.type.name }}</li>
                  <li
                    class="list-inline-item apart-type"
                    v-if="selectedApartment.test && selectedApartment.test.name"
                  >{{ selectedApartment.test && selectedApartment.test.name }}</li>
                  <li class="list-inline-item apart-options" v-if="selectedApartment.beds">
                    <i class="option-bed"></i>
                    {{ selectedApartment.beds }}
                  </li>
                  <li class="list-inline-item apart-options" v-if="selectedApartment.parking_slots">
                    <i class="option-car"></i>
                    {{ selectedApartment.parking_slots }}
                  </li>
                  <li class="list-inline-item apart-options inner-other">&#124;</li>
                  <li class="list-inline-item apart-options inner-other">Available now</li>
                  <li class="list-inline-item apart-options inner-other">&#124;</li>
                  <li class="list-inline-item apart-options inner-other">A$405 per week</li>
                  <li class="list-inline-item apart-options inner-other">&#124;</li>
                  <li class="list-inline-item apart-options inner-other"><i class="ti-email"></i> Email
                 </li>
                </ul>
              </div>

              <div class="listing-bottom-icons-wrap mobile-list-mobile desktop-hide">
                <ul class="list-inline">
                  <li class="list-inline-item apart-type">{{ selectedApartment.type && selectedApartment.type.name }}</li>
                  <li
                    class="list-inline-item apart-type"
                    v-if="selectedApartment.test && selectedApartment.test.name"
                  >{{ selectedApartment.test && selectedApartment.test.name }}</li>
                  <li class="list-inline-item apart-options" v-if="selectedApartment.beds">
                    <i class="option-bed"></i>
                    {{ selectedApartment.beds }}
                  </li>
                  <li class="list-inline-item apart-options" v-if="selectedApartment.parking_slots">
                    <i class="option-car"></i>
                    {{ selectedApartment.parking_slots }}
                  </li>
                </ul>

                <ul class="list-inline">
                  <li class="list-inline-item apart-options inner-other">Available now</li>
                  <li class="list-inline-item apart-options inner-other">&#124;</li>
                  <li class="list-inline-item apart-options inner-other">A$405 per week</li>
                  <li class="list-inline-item apart-options inner-other">&#124;</li>
                  <li class="list-inline-item apart-options inner-other"><i class="ti-email"></i> Email</li>
                </ul>
              </div>
            </div>
            <div class="col-md-4 modile-hide">
              <div class="apartment-inner-left-wrap">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="checkin" class="filter-widget-sublabel">Check-In/Out</label>
                      <HotelDatePicker
                        format="DD/MM/YYYY"
                        
                        @check-in-changed="setCheckinDate"
                        @check-out-changed="setCheckoutDate"
                      ></HotelDatePicker>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                          <div class="dropdown filter-widget">
                            <button
                              class="btn dropdown-toggle guest-button-svg flter-button"
                              type="button"
                              id="dropdownMenuButton"
                              data-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                            >
                              <span>Guest Number</span>
                            </button>
                            <div
                              class="dropdown-menu filter-widget-dropdown"
                              aria-labelledby="dropdownMenuButton"
                            >
                              <div class="filter-widget-inner">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label
                                        for="min_occupants"
                                        class="filter-widget-sublabel"
                                      >Adults</label>
                                      <div class="quantity">
                                        <input
                                                @change="onAdultsChange"
                                          id="min_occupants"
                                          v-model="filter.adults"
                                          type="number"
                                          min="1"
                                          max="6"
                                          step="1"
                                          value="1"
                                        />
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label
                                        for="max_occupants"
                                        class="filter-widget-sublabel"
                                      >Children</label>
                                      <div class="quantity">
                                        <input
                                                @change="onChildrenChange"
                                          id="max_occupants"
                                          type="number"
                                          v-model="filter.children"
                                          min="1"
                                          max="6"
                                          step="1"
                                          value="1"
                                        />
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="checkin" class="filter-widget-sublabel">Total Price</label>
                      <p class="amount">$1,620.00</p>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="filter-widget">
                        <a :disabled="!(filter.checkIn && filter.checkOut && filter.adults>0)" class="btn booking-btn" v-on:click="bookNow">Book Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="mobile-filter-inner-sect desktop-hide tab-view">
      <div class="container-fluid mobile-filter-inner">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <HotelDatePicker
                  format="DD/MM/YYYY"
                 
                  @check-in-changed="setCheckinDate"
                  @check-out-changed="setCheckoutDate"
                ></HotelDatePicker>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                  <div class="dropdown filter-widget">
                    <button
                      class="btn dropdown-toggle guest-button-svg before-svg flter-button filter-border-none-btn"
                      type="button"
                      id="dropdownMenuButton"
                      data-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <span>Guest Number</span>
                    </button>
                    <div
                      class="dropdown-menu filter-widget-dropdown"
                      aria-labelledby="dropdownMenuButton"
                    >
                      <div class="filter-widget-inner">
                        <div class="row">
                          <div class="col-md-6 filter-widget-col">
                            <div class="form-group">
                              <label for="min_occupants" class="filter-widget-sublabel">Adults</label>
                              <div class="quantity">
                                <input
                                        @change="onAdultsChange"
                                  id="min_occupants"
                                  v-model="filter.adults"
                                  type="number"
                                  min="1"
                                  max="6"
                                  step="1"
                                  value="1"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 filter-widget-col">
                            <div class="form-group">
                              <label for="max_occupants" class="filter-widget-sublabel">Children</label>
                              <div class="quantity">
                                <input
                                        @change="onAdultsChange"
                                  id="max_occupants"
                                  type="number"
                                  v-model="filter.children"
                                  min="1"
                                  max="6"
                                  step="1"
                                  value="1"
                                />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--map section-->
    <section class="location-section">
      <div class="container">
        <div class="row">
          <div class="location-wrap" v-html="selectedApartment.map_url"></div>
        </div>
      </div>
    </section>
    <section class="apart-full-description-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6" v-html="getContentBySubType('DETAILS')"></div>
          <div class="col-md-6" v-html="getContentBySubType('HOW_MUCH')"></div>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
import { mapState, mapActions } from "vuex";
import moment from "moment";
import HotelDatePicker from "vue-hotel-datepicker";
import Swiper from 'swiper';

export default {
  name: "apartmentDetails",
  data() {
    return {
      slide: 0,
      sliding: null,
      filter: {
        checkIn: false,
        checkOut: false,
        type: "",
        adults: 0,
        children: 0,
        price_min: 'Any',
        price_max: 'Any'
      }
    };
  },
  mounted() {
    this.getApartment(this.$attrs.id);
  },
  updated() {
    let swiper = new Swiper('.swiper-container', {
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
  },
  methods: {
    bookNow() {

      let {checkIn, checkOut, adults} = this.filter;
      if((checkIn && checkOut && adults>0)){
        this.booking(this.filter);
      }

      //window.location = "../booking-first";
    },
    onAdultsChange(e){
      this.filter.adults = parseInt(e.target.value)
      console.log(e)
    },
    onChildrenChange(e){
      this.filter.children = parseInt(e.target.value)
    },

    setCheckinDate(newDate) {
      this.filter.checkIn = newDate;
    },
    setCheckoutDate(newDate) {
      this.filter.checkOut = newDate;
    },

    log(message) {
      console.log("-----", message);
    },
    getContentBySubType(subType) {
      let contentObj =
        this.selectedApartment &&
        this.selectedApartment.contents &&
        this.selectedApartment.contents.filter(c => {
          return c.sub_type === subType;
        });
      return contentObj && contentObj[0] ? contentObj[0].content : "";
    },
    onSlideStart(slide) {
      this.sliding = true;
    },
    onSlideEnd(slide) {
      this.sliding = false;
    },
    ...mapActions("ratesAndAvailability", ["getApartment"]),
    ...mapActions("booking", ["booking"])
  },
  computed: {
    ...mapState("ratesAndAvailability", ["selectedApartment"])
  },
  components: {
    HotelDatePicker
  }
};
</script>
