<template>
  <div>
    <section class="shortlist-section contact-section padding-tb-60">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="bottom-full-width-border">
                <div class="head-name">
                  <h3>Contact us</h3>
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
                        <label for="checkin" class="filter-widget-sublabel">First Name*</label>
                        <input class="form-control flter-button" type="text" />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="dropdown filter-widget">
                        <label for="checkin" class="filter-widget-sublabel">Email*</label>
                        <input class="form-control flter-button" type="email" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="dropdown filter-widget">
                        <label for="checkin" class="filter-widget-sublabel">Last Name*</label>
                        <input class="form-control flter-button" type="text" />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="dropdown filter-widget">
                        <label for="checkin" class="filter-widget-sublabel">
                          Phone (mobile number
                          preferred)*
                        </label>
                        <input class="form-control flter-button input-numbersonly" id="numbersonly" type="tel" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="dropdown filter-widget general-boking-inqure-wrap">
                        <label for="checkin" class="filter-widget-sublabel">Enquiry Type</label>

                        <button
                          class="btn dropdown-toggle flter-button enqury-svg-button"
                          type="button"
                          id="dropdownMenuButton"
                          data-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="true"
                        >
                          <span>General Enquiry</span>
                        </button>
                        <div
                          class="dropdown-menu filter-widget-dropdown general-boking-inqure"
                          aria-labelledby="dropdownMenuButton"
                          x-placement="bottom-start"
                          style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 70px, 0px);"
                        >
                          <div class="filter-widget-inner">
                            <a class="dropdown-item" href="#." value="General Enquiry">
                              General
                              Enquiry
                            </a>
                            <a class="dropdown-item" href="#." value="Booking Enquiry">
                              Booking
                              Enquiry
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="accommondation-wrap">
                      <div class="accomond-head head-name">
                        <h4>Accommodation Requirements</h4>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="dropdown filter-widget">
                              <label for="checkin" class="filter-widget-sublabel">State*</label>
                              <button
                                class="btn dropdown-toggle location-svg-button flter-button"
                                type="button"
                                id="dropdownMenuButton"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="true"
                              >
                                <span>Please Select</span>
                              </button>
                              <div
                                class="dropdown-menu filter-widget-dropdown"
                                aria-labelledby="dropdownMenuButton"
                                x-placement="bottom-start"
                                style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 70px, 0px);"
                              >
                                <div class="filter-widget-inner filter-widget-inner-drop-list">
                                  <a class="dropdown-item" href="#.">Action</a>
                                  <a class="dropdown-item" href="#.">Another action</a>
                                  <a class="dropdown-item" href="#.">
                                    Something else
                                    here
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="dropdown filter-widget">
                              <label for="checkin" class="filter-widget-sublabel">Apartment Type*</label>
                              <button
                                class="btn dropdown-toggle apart-type-svg-button flter-button"
                                type="button"
                                id="dropdownMenuButton"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="true"
                              >
                                <span>Please Select</span>
                              </button>
                              <div
                                class="dropdown-menu filter-widget-dropdown"
                                aria-labelledby="dropdownMenuButton"
                                x-placement="bottom-start"
                                style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 70px, 0px);"
                              >
                                <div class="filter-widget-inner filter-widget-inner-drop-list">
                                  <a
                                    class="dropdown-item studio-apartments"
                                    href="#.."
                                    v-on:click="selectType('studio-apartments')"
                                  >Studio Apartments</a>
                                  <a
                                    class="dropdown-item one-bed-room-apartments"
                                    href="#.."
                                    v-on:click="selectType('one-bed-room-apartments')"
                                  >One Bedroom Apartments</a>
                                  <a
                                    class="dropdown-item two-bed-room-apartments"
                                    href="#.."
                                    v-on:click="selectType('two-bed-room-apartments')"
                                  >Two Bedroom Apartments</a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="dropdown filter-widget">
                              <label for="checkin" class="filter-widget-sublabel">Guest Number*</label>
                              <button
                                class="btn dropdown-toggle guest-button-svg flter-button"
                                type="button"
                                id="dropdownMenuButton"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="true"
                              >
                                <span>Please Select</span>
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
                                      >Adults</label>
                                      <div class="quantity">
                                        <input
                                          id="min_occupants"
                                          
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
                                      <label
                                        for="max_occupants"
                                        class="filter-widget-sublabel"
                                      >Children</label>
                                      <div class="quantity">
                                        <input
                                          id="max_occupants"
                                          type="number"
                                         
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
                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="dropdown filter-widget">
                              <label for="checkin" class="filter-widget-sublabel">Suburb*</label>
                              <button
                                class="btn dropdown-toggle location-svg-button flter-button"
                                type="button"
                                id="dropdownMenuButton"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="true"
                              >
                                <span>Please Select</span>
                              </button>
                              <div
                                class="dropdown-menu filter-widget-dropdown"
                                aria-labelledby="dropdownMenuButton"
                                x-placement="bottom-start"
                                >
                                <div class="filter-widget-inner filter-widget-inner-drop-list">
                                  <a class="dropdown-item" href="#.">Action</a>
                                  <a class="dropdown-item" href="#.">Another action</a>
                                  <a class="dropdown-item" href="#.">
                                    Something else
                                    here
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="checkin" class="filter-widget-sublabel">Check-In/Out*</label>
                            <HotelDatePicker
                              format="DD/MM/YYYY"
                              :startDate="startDate"
                              @check-in-changed="setCheckinDate"
                              @check-out-changed="setCheckoutDate"
                            ></HotelDatePicker>
                          </div>

                          <div class="form-group">
                            <div class="dropdown filter-widget">
                              <label for="checkin" class="filter-widget-sublabel">Price Min-Max*</label>
                              <button
                                class="btn dropdown-toggle price-svg-button flter-button"
                                type="button"
                                id="dropdownMenuButton"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="true"
                              >
                                <span>Please Select</span>
                              </button>
                              <div class="dropdown-menu filter-widget-dropdown" aria-labelledby="dropdownMenuButton">
                      <div class="filter-widget-inner">
                        <div class="row">
                          <div class="col-md-6 filter-widget-col">
                            <div class="form-group">
                              <label for="checkin" class="filter-widget-sublabel">Price Min</label>
                                 <v-select :options="options" :clearable="false" ></v-select>
                              
                            </div>
                          </div>
                          <div class="col-md-6 filter-widget-col">
                            <div class="form-group">
                              <label for="checkout" class="filter-widget-sublabel">Price Max</label>
                               <v-select :options="options" :clearable="false"></v-select>
                              
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
                        <label for="checkin" class="filter-widget-sublabel">Your Message</label>
                        <textarea
                          class="form-control flter-button"
                          id="exampleFormControlTextarea1"
                          rows="5"
                        ></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8"></div>
                  <div class="col-md-4">
                    <div class="send-inquery-wrap">
                      <div class="form-group">
                        <div class="filter-widget">
                          <a class="btn booking-btn">Send Message</a>
                        </div>
                      </div>
                    </div>
                  </div>
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
                    <h4>OFFICE</h4>
                  </div>
                  <div class="content contact-address">
                    <p>10 St Andrews Place East Melbourne 3002 Australia</p>
                  </div>
                </div>
                <div class="contact-mail-wrap">
                  <div class="head-name">
                    <h4>MAIL</h4>
                  </div>
                  <div class="content contact-address">
                    <p>Po Box 1205 Carton, Victoria, 3053 Australia.</p>
                  </div>
                </div>
                <div class="contact-phone-wrap">
                  <div class="head-name">
                    <h4>PHONE</h4>
                  </div>
                  <div class="content">
                    <a href="tel:+61 3 9242 0468">
                      <p>03 9242 0468 (int.+61 3 9242 0468)</p>
                    </a>
                  </div>
                </div>
                <div class="contact-mobile-wrap">
                  <div class="head-name">
                    <h4>MOBILE</h4>
                  </div>
                  <div class="content">
                    <a href="tel:+61 405 780 780">
                      <p>0405 780 780 (int. +61 405 780 780)</p>
                    </a>
                  </div>
                </div>
                <div class="contact-email-wrap">
                  <div class="head-name">
                    <h4>EMAIL</h4>
                  </div>
                  <div class="content">
                    <a href="mailto:reservations@asmelb.com.au" class="emial">
                      <p>reservations@asmelb.com.au</p>
                    </a>
                  </div>
                </div>
                <div class="contact-ABN-wrap">
                  <div class="head-name">
                    <h4>ABN</h4>
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
import HotelDatePicker from "vue-hotel-datepicker";

export default {
  name: "contact",
  mounted() {
    console.log("Component mounted.");
  },
  data(){
    return {
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
    }
  },
  components: {
    HotelDatePicker
  }
};
</script>
