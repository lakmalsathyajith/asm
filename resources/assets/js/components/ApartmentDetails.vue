<template>
  <div>
    <VueEasyLightbox
      :visible="visible"
      :imgs="imgs"
      :index="index"
      @hide="handleHide"
    ></VueEasyLightbox>
    <section class="top-search-wrap padding-tb-60">
      <div class="container-fluid">
        <div class="row nav-top-path-wrap bottom-full-width-border">
          <div class="container">
            <div class="row">
              <div class="nav-top-path">
                <ul class="list-inline">
                  <li class="list-inline-item">
                    {{ lang == 'en' ? 'Home' : '家' }}
                    <span>></span>
                  </li>
                  <li class="list-inline-item">
                    {{ selectedApartment && selectedApartment.name }}
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="listing-inner listing-details-wrap">
      <div
        class="container-fluid container-fluid-white-background mobile-padding-0"
      >
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
                        @click="showMultiple(selectedApartment.files, i)"
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
                  {{ selectedApartment && selectedApartment.address }}
                </p>
              </div>
              <div class="listing-bottom-icons-wrap modile-hide tab-view">
                <ul class="list-inline">
                  <li class="list-inline-item apart-type">
                    {{
                      selectedApartment && selectedApartment.type
                        ? lang == 'en'
                          ? selectedApartment.type.name
                          : selectedApartment.type.description
                        : ''
                    }}
                  </li>
                  <li
                    class="list-inline-item apart-options"
                    v-if="selectedApartment.beds"
                  >
                    <i class="option-bed"></i>
                    {{ selectedApartment.beds }}
                  </li>
                  <li
                    class="list-inline-item apart-options"
                    v-if="selectedApartment.parking_slots"
                  >
                    <i class="option-car"></i>
                    {{ selectedApartment.parking_slots }}
                  </li>
                  <li
                    class="list-inline-item apart-options"
                    v-if="selectedApartment.bath_rooms"
                  >
                    <i class="option-bath-room"></i>
                    {{ selectedApartment.bath_rooms }}
                  </li>
                  <li class="list-inline-item apart-options inner-other">
                    &#124;
                  </li>
                  <li class="list-inline-item apart-options inner-other">
                    {{ lang == 'en' ? 'Available now' : '现在有空' }}
                  </li>
                  <li class="list-inline-item apart-options inner-other">
                    &#124;
                  </li>
                  <li class="list-inline-item apart-options inner-other">
                    A${{
                      selectedApartment && selectedApartment.price
                        ? selectedApartment.price
                        : '0'
                    }}
                    {{
                      lang == 'en'
                        ? 'per week (Rate at 12 months)'
                        : '每周（12个月的费用）'
                    }}
                  </li>
                  <li class="list-inline-item apart-options inner-other">
                    &#124;
                  </li>
                  <li
                    class="list-inline-item apart-options inner-other email-list"
                  >
                    <a href="#" @click="send_email()"
                      ><i class="ti-email"></i>
                      {{ lang == 'en' ? 'Email' : '电子邮件' }}</a
                    >
                  </li>
                </ul>
              </div>
              <div
                class="listing-bottom-icons-wrap mobile-list-mobile desktop-hide tab-hide"
              >
                <ul class="list-inline">
                  <li class="list-inline-item apart-type">
                    {{
                      selectedApartment && selectedApartment.type
                        ? lang == 'en'
                          ? selectedApartment.type.name
                          : selectedApartment.type.description
                        : ''
                    }}
                  </li>
                  <li
                    class="list-inline-item apart-options"
                    v-if="selectedApartment.beds"
                  >
                    <i class="option-bed"></i>
                    {{ selectedApartment.beds }}
                  </li>
                  <li
                    class="list-inline-item apart-options"
                    v-if="selectedApartment.parking_slots"
                  >
                    <i class="option-car"></i>
                    {{ selectedApartment.parking_slots }}
                  </li>
                  <li
                    class="list-inline-item apart-options"
                    v-if="selectedApartment.bath_rooms"
                  >
                    <i class="option-bath-room"></i>
                    {{ selectedApartment.bath_rooms }}
                  </li>
                </ul>

                <ul class="list-inline">
                  <li class="list-inline-item apart-options inner-other">
                    {{ lang == 'en' ? 'Available now' : '现在有空' }}
                  </li>
                  <li class="list-inline-item apart-options inner-other">
                    &#124;
                  </li>
                  <li class="list-inline-item apart-options inner-other">
                    A${{
                      selectedApartment && selectedApartment.price
                        ? selectedApartment.price
                        : '0'
                    }}
                    {{
                      lang == 'en'
                        ? '(Rate at 12 months)'
                        : '（12个月时的费率）'
                    }}
                  </li>
                  <li class="list-inline-item apart-options inner-other">
                    &#124;
                  </li>
                  <li
                    class="list-inline-item apart-options inner-other email-list"
                  >
                    <a href="#" @click="send_email()"
                      ><i class="ti-email"></i>
                      {{ lang == 'en' ? 'Email' : '电子邮件' }}</a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4 modile-hide">
              <div class="apartment-inner-left-wrap">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="checkin" class="filter-widget-sublabel">{{
                        lang == 'en' ? 'Check-In/Out' : '入住/退房'
                      }}</label>
                      <HotelDatePicker
                        format="DD/MM/YYYY"
                        :showYear="true"
                        :startDate="startDate()"
                        :endDate="endDate()"
                        :starting-date-value="filter.checkIn"
                        :ending-date-value="filter.checkOut"
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
                          <span>{{
                            lang == 'en' ? 'Guest Number' : '入住人数'
                          }}</span>
                        </button>
                        <div
                          class="dropdown-menu filter-widget-dropdown"
                          aria-labelledby="dropdownMenuButton"
                        >
                          <div class="filter-widget-inner">
                            <div class="row">
                              <div class="col-md-6 filter-widget-col">
                                <div class="form-group">
                                  <label
                                    for="min_occupants"
                                    class="filter-widget-sublabel"
                                    >{{
                                      lang == 'en' ? 'Adults' : '请选择'
                                    }}</label
                                  >
                                  <div class="quantity">
                                    <input
                                      v-model="filter.adults"
                                      type="number"
                                      min="1"
                                      max="6"
                                      step="1"
                                      value="1"
                                    />
                                    <div class="quantity-nav">
                                      <div
                                        class="quantity-button quantity-up"
                                        v-on:click="qtyIncrease('adults', 1, 6)"
                                      >
                                        +
                                      </div>
                                      <div
                                        class="quantity-button quantity-down"
                                        v-on:click="qtyDecrease('adults', 1, 6)"
                                      >
                                        -
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 filter-widget-col">
                                <div class="form-group">
                                  <label
                                    for="max_occupants"
                                    class="filter-widget-sublabel"
                                    >{{
                                      lang == 'en' ? 'Children' : '小孩儿'
                                    }}</label
                                  >
                                  <div class="quantity">
                                    <input
                                      type="number"
                                      v-model="filter.children"
                                      min="0"
                                      max="6"
                                      step="1"
                                      value="0"
                                    />
                                    <div class="quantity-nav">
                                      <div
                                        class="quantity-button quantity-up"
                                        v-on:click="
                                          qtyIncrease('children', 0, 6)
                                        "
                                      >
                                        +
                                      </div>
                                      <div
                                        class="quantity-button quantity-down"
                                        v-on:click="
                                          qtyDecrease('children', 0, 6)
                                        "
                                      >
                                        -
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
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="checkin" class="filter-widget-sublabel">{{
                        lang == 'en'
                          ? 'Per Week (Rate at 12 Months)'
                          : '每周（12个月的费率）'
                      }}</label>
                      <p class="amount">
                        A${{
                          selectedApartment && selectedApartment.price
                            ? selectedApartment.price
                            : '0'
                        }}
                      </p>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="filter-widget">
                        <a
                          :disabled="
                            !(
                              filter.checkIn &&
                              filter.checkOut &&
                              filter.adults > 0
                            )
                          "
                          class="btn booking-btn"
                          v-on:click="bookNow"
                          >{{ lang == 'en' ? 'Book Now' : '现在预订' }}</a
                        >
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
                  :showYear="true"
                  :starting-date-value="filter.checkIn"
                  :ending-date-value="filter.checkOut"
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
                    <span>{{
                      lang == 'en' ? 'Guest Number' : '入住人数'
                    }}</span>
                  </button>
                  <div
                    class="dropdown-menu filter-widget-dropdown"
                    aria-labelledby="dropdownMenuButton"
                  >
                    <div class="filter-widget-inner">
                      <div class="row">
                        <div class="col-md-6 filter-widget-col">
                          <div class="form-group">
                            <label
                              for="min_occupants"
                              class="filter-widget-sublabel"
                              >{{ lang == 'en' ? 'Adults' : '请选择' }}</label
                            >
                            <div class="quantity">
                              <input
                                v-model="filter.adults"
                                type="number"
                                min="1"
                                max="6"
                                step="1"
                                value="1"
                              />
                              <div class="quantity-nav">
                                <div
                                  class="quantity-button quantity-up"
                                  v-on:click="qtyIncrease('adults', 1, 6)"
                                >
                                  +
                                </div>
                                <div
                                  class="quantity-button quantity-down"
                                  v-on:click="qtyDecrease('adults', 1, 6)"
                                >
                                  -
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 filter-widget-col">
                          <div class="form-group">
                            <label
                              for="max_occupants"
                              class="filter-widget-sublabel"
                              >{{ lang == 'en' ? 'Children' : '小孩儿' }}</label
                            >
                            <div class="quantity">
                              <input
                                type="number"
                                v-model="filter.children"
                                min="0"
                                max="6"
                                step="1"
                                value="0"
                              />
                              <div class="quantity-nav">
                                <div
                                  class="quantity-button quantity-up"
                                  v-on:click="qtyIncrease('children', 0, 6)"
                                >
                                  +
                                </div>
                                <div
                                  class="quantity-button quantity-down"
                                  v-on:click="qtyDecrease('children', 0, 6)"
                                >
                                  -
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
        </div>
      </div>
    </section>
    <!--map section-->
    <section class="location-section">
      <div class="container">
        <div class="row">
          <div class="location-wrap">
            <iframe
              v-if="selectedApartment && selectedApartment.map_url"
              :src="selectedApartment.map_url"
              width="100%"
              height="400"
              frameborder="0"
              style="border:0;"
              allowfullscreen=""
            ></iframe>
          </div>
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
import { mapState, mapActions } from 'vuex';
import moment from 'moment';
import HotelDatePicker from 'vue-hotel-datepicker';
import Swiper from 'swiper';
import VueEasyLightbox from 'vue-easy-lightbox';

export default {
  name: 'apartmentDetails',
  props: ['lang','slug','id', 'type_id', 'area_id'],
  data() {
    const today = new Date();
    let tomorrow = new Date();
    tomorrow.setDate(new Date().getDate() + 1);

    return {
      slide: 0,
      sliding: null,
      filter: {
        apartment_id: this.id,
        checkIn: today,
        checkOut: tomorrow,
        type_id: this.type_id,
        area_id: this.area_id,
        type: '',
        adults: 1,
        children: 0,
        price_min: 'Any',
        price_max: 'Any'
      },
      imgs: [], // Img Url , string or Array
      visible: false,
      index: 0 // default
    };
  },
  created() {
    if (this.$route.query.start) {
      var from = this.$route.query.start;
      var fromdate = moment(from, 'YYYY-MM-DD').toDate();
      this.filter.checkIn = fromdate;
    }
    if (this.$route.query.end) {
      var to = this.$route.query.end;
      var todate = moment(to, 'YYYY-MM-DD').toDate();
      this.filter.checkOut = todate;
    }
    if (this.$route.query.adults) {
      this.filter.adults = this.$route.query.adults;
    }
    if (this.$route.query.children) {
      this.filter.children = this.$route.query.children;
    }
  },
  mounted() {
    let apartMentObj = {
      id: this.slug,
      lang: this.lang
    };
    this.getApartment(apartMentObj);
    setTimeout(() => {
      let swiper = new Swiper('.swiper-container', {
        effect: 'fade',
        fadeEffect: {
          crossFade: true
        },
        loop: true,
        speed: 1000,
        centeredSlides: true,
        preventClicks: false,
        preventClicksPropagation: false,
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
    }, 1000);
  },
  methods: {
    qtyIncrease(type, min, max) {
      if (type == 'adults') {
        if (this.filter.adults < max) {
          this.filter.adults++;
        }
      } else if (type == 'children') {
        if (this.filter.children < max) {
          this.filter.children++;
        }
      }
    },
    qtyDecrease(type, min, max) {
      if (type == 'adults') {
        if (this.filter.adults > min) {
          this.filter.adults--;
        }
      } else if (type == 'children') {
        if (this.filter.children > min) {
          this.filter.children--;
        }
      }
    },
    bookNow() {
      let { checkIn, checkOut, adults } = this.filter;
      if (checkIn && checkOut && adults > 0) {
        this.booking(this.filter);
      }

      //window.location = "../booking-first";
    },
    onAdultsChange(e) {
      this.filter.adults = parseInt(e.target.value);
    },
    onChildrenChange(e) {
      this.filter.children = parseInt(e.target.value);
    },

    setCheckinDate(newDate) {
      this.filter.checkIn = newDate;
    },
    setCheckoutDate(newDate) {
      this.filter.checkOut = newDate;
    },
    showMultiple(files, index) {
      const vm = this;
      vm.imgs = [];
      files.forEach(function(file) {
        vm.imgs.push(file.url);
      });
      this.index = index;
      this.show();
    },
    show() {
      this.visible = true;
    },

    handleHide() {
      this.visible = false;
    },

    log(message) {
      console.log('-----', message);
    },
    getContentBySubType(subType) {
      let contentObj =
        this.selectedApartment &&
        this.selectedApartment.contents &&
        this.selectedApartment.contents.filter(c => {
          return c.sub_type === subType;
        });
      return contentObj && contentObj[0] ? contentObj[0].content : '';
    },
    send_email() {
      var currentUrl = window.location.href;

      window.open('mailto:?body=' + currentUrl);
    },
    onSlideStart(slide) {
      this.sliding = true;
    },
    onSlideEnd(slide) {
      this.sliding = false;
    },
    startDate(){
      return moment(this.filter.checkIn, 'YYYY-MM-DD').toDate();
    },
    endDate(){
      return moment(this.filter.checkOut, 'YYYY-MM-DD').toDate();
    },
    ...mapActions('ratesAndAvailability', ['getApartment']),
    ...mapActions('booking', ['booking'])
  },
  computed: {
    ...mapState('ratesAndAvailability', ['selectedApartment'])
  },
  components: {
    HotelDatePicker,
    VueEasyLightbox
  }
};
</script>
