<template>
  <div>
    <section class="shortlist-section contact-section padding-tb-60">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="bottom-full-width-border">
                <div class="head-name">
                  <h3>联络我们</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="container">
          <div class="row contact-form-wrap flex-column-reverse flex-md-row">
            <div class="col-md-8">
              <div class="contact-form-left-wrap">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="dropdown filter-widget">
                        <label for="checkin" class="filter-widget-sublabel"
                          >名字</label
                        >
                        <input
                          class="form-control flter-button"
                          type="text"
                          v-model="contactData.first_name"
                        />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="dropdown filter-widget">
                        <label for="checkin" class="filter-widget-sublabel"
                          >电邮</label
                        >
                        <input
                          class="form-control flter-button"
                          type="email"
                          v-model="contactData.email"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="dropdown filter-widget">
                        <label for="checkin" class="filter-widget-sublabel"
                          >姓氏</label
                        >
                        <input
                          class="form-control flter-button"
                          type="text"
                          v-model="contactData.last_name"
                        />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="dropdown filter-widget">
                        <label for="checkin" class="filter-widget-sublabel">
                          手机号码
                        </label>
                        <input
                          class="form-control flter-button input-numbersonly"
                          id="numbersonly"
                          type="tel"
                          v-model="contactData.phone"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <div
                        class="dropdown filter-widget general-boking-inqure-wrap"
                      >
                        <label for="checkin" class="filter-widget-sublabel"
                          >查询类型</label
                        >

                        <button
                          class="btn dropdown-toggle flter-button enqury-svg-button"
                          type="button"
                          id="dropdownMenuButtonEnquiry"
                          data-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="true"
                        >
                          <span>普通查询</span>
                        </button>
                        <div
                          class="dropdown-menu filter-widget-dropdown general-boking-inqure"
                          aria-labelledby="dropdownMenuButtonEnquiry"
                          x-placement="bottom-start"
                          style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 70px, 0px);"
                        >
                          <div class="filter-widget-inner">
                            <a
                              class="dropdown-item"
                              href="#."
                              value="General Enquiry"
                              v-on:click="selectEnquiryType('general')"
                            >
                              普通查询
                            </a>
                            <a
                              class="dropdown-item"
                              href="#."
                              value="Booking Enquiry"
                              v-on:click="selectEnquiryType('booking')"
                            >
                             预订查询
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="accommondation-wrap">
                      <div class="accomond-head head-name">
                        <h4>住宿要求</h4>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="checkin" class="filter-widget-sublabel">
                              选择州*
                            </label>
                            <div class="dropdown filter-widget">
                              <button
                                class="btn dropdown-toggle location-svg-button before-svg flter-button apartment-states"
                                type="button"
                                id="dropdownMenuButtonState"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <span>州</span>
                              </button>
                              <div
                                class="dropdown-menu filter-widget-dropdown"
                                aria-labelledby="dropdownMenuButtonState"
                              >
                                <div
                                  class="filter-widget-inner filter-widget-inner-drop-list"
                                >
                                  <a
                                    v-for="(state, i) in states"
                                    v-bind:key="i"
                                    class="dropdown-item"
                                    href="#."
                                    v-on:click="selectState(state)"
                                    >{{ state }}</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="dropdown filter-widget">
                              <label
                                for="checkin"
                                class="filter-widget-sublabel"
                                >公寓类型*</label
                              >
                              <button
                                class="btn dropdown-toggle apart-type-svg-button flter-button"
                                type="button"
                                id="dropdownMenuButtonSuburb"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="true"
                              >
                                <span>请选择</span>
                              </button>
                              <div
                                class="dropdown-menu filter-widget-dropdown"
                                aria-labelledby="dropdownMenuButtonSuburb"
                                x-placement="bottom-start"
                                style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 70px, 0px);"
                              >
                                <div
                                  class="filter-widget-inner filter-widget-inner-drop-list"
                                >
                                <a
                          class="dropdown-item Any"
                          href="#."
                          v-on:click="selectType('Any')"
                        >任何</a>
                                  <a
                                    class="dropdown-item studio-apartments"
                                    href="#.."
                                    v-on:click="selectType('Studio Apartments')"
                                    >开放式公寓</a
                                  >
                                  <a
                                    class="dropdown-item one-bed-room-apartments"
                                    href="#.."
                                    v-on:click="
                                      selectType('One Bedroom Apartments')
                                    "
                                    >一室公寓</a
                                  >
                                  <a
                                    class="dropdown-item two-bed-room-apartments"
                                    href="#.."
                                    v-on:click="
                                      selectType('Two Bedroom Apartments')
                                    "
                                    >两室公寓</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="dropdown filter-widget">
                              <label
                                for="checkin"
                                class="filter-widget-sublabel"
                                >来宾号码*</label
                              >
                              <button
                                class="btn dropdown-toggle guest-button-svg flter-button"
                                type="button"
                                id="dropdownMenuButton"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="true"
                              >
                                <span>请选择</span>
                              </button>
                              <div
                                class="dropdown-menu filter-widget-dropdown"
                                aria-labelledby="dropdownMenuButton"
                                x-placement="bottom-start"
                              >
                                <div class="filter-widget-inner">
                                  <div class="row">
                                    <div class="col-md-6 filter-widget-col">
                                      <div class="form-group">
                                        <label
                                          for="min_occupants"
                                          class="filter-widget-sublabel"
                                          >大人</label
                                        >
                                        <div class="quantity">
                                          <input
                                          v-model="contactData.adults"
                                          type="number"
                                          min="1"
                                          max="6"
                                          step="1"
                                          value="1"
                                        />
                                        <div class="quantity-nav">
    <div class="quantity-button quantity-up" v-on:click="qtyIncrease('adults', 1, 6)">
        +
    </div>
    <div class="quantity-button quantity-down" v-on:click="qtyDecrease('adults', 1, 6)">
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
                                          >小孩儿</label
                                        >
                                        <div class="quantity">
                                          <input
                                          type="number"
                                          v-model="contactData.children"
                                          min="0"
                                          max="6"
                                          step="1"
                                          value="0"
                                        />

<div class="quantity-nav">
    <div class="quantity-button quantity-up" v-on:click="
                                          qtyIncrease('children', 0, 6)
                                        ">
        +
    </div>
    <div class="quantity-button quantity-down" v-on:click="
                                          qtyDecrease('children', 0, 6)
                                        ">
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
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="checkin" class="filter-widget-sublabel">
                              选择郊区*
                            </label>
                            <div class="dropdown filter-widget">
                              <button
                                class="btn dropdown-toggle location-svg-button before-svg flter-button apartment-suburb"
                                type="button"
                                id="dropdownMenuButton"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <span>市郊</span>
                              </button>
                              <div
                                class="dropdown-menu filter-widget-dropdown"
                                aria-labelledby="dropdownMenuButton"
                              >
                                <div
                                  class="filter-widget-inner filter-widget-inner-drop-list"
                                >
                                  <a
                                    v-for="(suburb, i) in suburbs"
                                    v-bind:key="i"
                                    class="dropdown-item"
                                    href="#."
                                    v-on:click="selectSuburb(suburb)"
                                    >{{ suburb }}</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="checkin" class="filter-widget-sublabel"
                              >入住/退房*</label
                            >
                             <HotelDatePicker
                            format="DD/MM/YYYY"
                            :showYear="true"
                            :starting-date-value="contactData.checkIn"
                            :ending-date-value="contactData.checkOut"
                            @check-in-changed="setCheckinDate"
                            @check-out-changed="setCheckoutDate"
                          ></HotelDatePicker>
                          </div>

                          <div class="form-group">
                            <div class="dropdown filter-widget">
                              <label
                                for="checkin"
                                class="filter-widget-sublabel"
                                >价格最小-最大*</label
                              >
                              <button
                                class="btn dropdown-toggle price-svg-button flter-button"
                                type="button"
                                id="dropdownMenuButton"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="true"
                              >
                                <span>请选择</span>
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
                                          for="checkin"
                                          class="filter-widget-sublabel"
                                          >价格最低</label
                                        >
                                        <v-select
                                          :options="options"
                                          :clearable="false"
                                          v-model="contactData.price_min"
                                        ></v-select>
                                      </div>
                                    </div>
                                    <div class="col-md-6 filter-widget-col">
                                      <div class="form-group">
                                        <label
                                          for="checkout"
                                          class="filter-widget-sublabel"
                                          >最高价格</label
                                        >
                                        <v-select
                                          :options="options"
                                          :clearable="false"
                                          v-model="contactData.price_max"
                                        ></v-select>
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
                      <div class="dropdown filter-widget">
                        <label for="checkin" class="filter-widget-sublabel"
                          >讯息</label
                        >
                        <textarea
                          class="form-control flter-button"
                          id="exampleFormControlTextarea1"
                          rows="5"
                          v-model="contactData.message"
                        ></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8"></div>
                  <div class="col-md-4">
                    <div class="send-inquery-wrap">
                      <div class="form-group">
                        <div class="filter-widget">
                          <a v-if="noErrors===2" disabled="true" class="btn booking-btn" @click="sendinquiry">Send Message</a>
                          <a v-else class="btn booking-btn" @click="sendinquiry">发送讯息</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div v-if="noErrors===2" class="alert alert-success alert-dismissible fade show">
                  <strong>Success!</strong> Your message has been sent successfully.
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
                <div v-if="noErrors===1" class="alert alert-danger alert-dismissible fade show">
                  <strong>Error!</strong> A problem has been occurred while submitting your data.
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="contact-form-right-wrap">
                <div class="main-head-name">
                  <div class="head-name">
                    <h4>Apartment Stays Melbourne Pty Ltd</h4>
                  </div>
                </div>
                <div class="contact-office-wrap">
                  <div class="head-name">
                    <h4>办公室地址</h4>
                  </div>
                  <div class="content contact-address">
                    <p>10 St Andrews Place East Melbourne 3002 Australia</p>
                  </div>
                </div>
                <div class="contact-mail-wrap">
                  <div class="head-name">
                    <h4>邮寄地址</h4>
                  </div>
                  <div class="content contact-address">
                    <p>Po Box 1205 Carton, Victoria, 3053 Australia.</p>
                  </div>
                </div>
                <div class="contact-phone-wrap">
                  <div class="head-name">
                    <h4>电话号码</h4>
                  </div>
                  <div class="content">
                    <a href="tel:+61 3 9242 0468">
                      <p>03 9242 0468 (int.+61 3 9242 0468)</p>
                    </a>
                  </div>
                </div>
                <div class="contact-mobile-wrap">
                  <div class="head-name">
                    <h4>手机号码</h4>
                  </div>
                  <div class="content">
                    <a href="tel:+61 405 780 780">
                      <p>0405 780 780 (int. +61 405 780 780)</p>
                    </a>
                  </div>
                </div>
                <div class="contact-email-wrap">
                  <div class="head-name">
                    <h4>电邮</h4>
                  </div>
                  <div class="content">
                    <a href="mailto:reservations@asmelb.com.au" class="emial">
                      <p>reservations@asmelb.com.au</p>
                    </a>
                  </div>
                </div>
                <div class="contact-ABN-wrap">
                  <div class="head-name">
                    <h4>公司注册号</h4>
                  </div>
                  <div class="content">
                    <p>31 615 764 362</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br />
  </div>
</template>
<script>
import HotelDatePicker from 'vue-hotel-datepicker';
import { mapState, mapActions } from "vuex";

export default {
  name: 'contact',
  mounted() {},
  data() {
    const today = new Date()
    let tomorrow = new Date()
    tomorrow.setDate(new Date().getDate()+1);

    return {
      states: [],
      suburbs: [],
      startDate: new Date(),
      contactData: {
        first_name: '',
        last_name: '',
        email: '',
        phone: '',
        message:'',
        enquiry_type:"general",
        apartment_type: '',
        suburb: '',
        state: '',
        checkIn: today,
        checkOut: tomorrow,
        adults: 1,
        children: 0,
        price_min: 'Any',
        price_max: 'Any'
      },
      options: [
        'Any',
        '$50',
        '$100',
        '$150',
        '$200',
        '$250',
        '$300',
        '$350',
        '$400',
        '$450',
        '$500',
        '$550',
        '$600',
        '$650',
        '$700',
        '$750',
        '$800',
        '$850',
        '$900',
        '$950',
        '$1000',
        '$1050',
        '$1100',
        '$1150',
        '$1200',
        '$1250',
        '$1300',
        '$1350',
        '$1400',
        '$1450',
        '$1500'
      ]
    };
  },
  created() {
    this.getStates();
  },
  methods: {
    qtyIncrease(type, min, max) {
      if (type == 'adults') {
        if (this.contactData.adults < max) {
          this.contactData.adults++;
        }
      } else if (type == 'children') {
        if (this.contactData.children < max) {
          this.contactData.children++;
        }
      }
    },
    qtyDecrease(type, min, max) {
      if (type == 'adults') {
        if (this.contactData.adults > min) {
          this.contactData.adults--;
        }
      } else if (type == 'children') {
        if (this.contactData.children > min) {
          this.contactData.children--;
        }
      }
    },
    getStates() {
      Vue.axios
        .get('/get-states')
        .then(res => {
          this.states = res.data.data;
        })
        .catch(err => {
          console.log('---err----', err);
        });
    },
    setCheckinDate(newDate) {
      this.contactData.checkIn = newDate;
    },
    setCheckoutDate(newDate) {
      this.contactData.checkOut = newDate;
    },
    selectType(type) {
      this.contactData.apartment_type = type;

    },
    selectEnquiryType(type) {
      this.contactData.enquiry_type = type;
       $("#dropdownMenuButtonEnquiry").dropdown('toggle');
    },
    selectSuburb(suburb) {
      this.contactData.suburb = suburb;
      $('.apartment-suburb').html('<span>' + suburb + '</span>');
    },
    selectState(state) {
      this.contactData.state = state;
      $('.apartment-states').html('<span>' + state + '</span>');
      Vue.axios
        .get('/get-suburb?state=' + state)
        .then(res => {
          this.suburbs = res.data.data;
          $('.apartment-suburb').html('<span>Suburb</span>');
        })
        .catch(err => {
          console.log('---err----', err);
        });
    },
    sendinquiry(){
      this.contact(this.contactData);
    },
    ...mapActions("contact", ["contact"])
  },
  computed: {
    ...mapState("contact", ["contactResponse"]),
    noErrors(){
      if(this.contactResponse && this.contactResponse.errors && this.contactResponse.errors.length>0){
        return 1
      }
      if(this.contactResponse && this.contactResponse.errors && this.contactResponse.errors.length===0){
        return 2
      }
    }
  },
  components: {
    HotelDatePicker
  }
};
</script>

<style scoped="">
.filter-widget-inner {
    max-height: 250px;
    overflow-y: auto;
}
</style>