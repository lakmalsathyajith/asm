<template>
  <div>
    <section class="top-search-wrap padding-tb-60">
      <div class="container-fluid">
        <div class="row nav-top-path-wrap bottom-full-width-border">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="nav-top-path"></div>
              </div>
              <div class="col-md-6"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="booking-section">
      <div class="container-fluid">
        <!-- <div class="row">
                    <div class="full-row wizard-row">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="nav nav-wizard">
                                        <li class="active">
                                            <a class="paraf" href="/booking-first">Step 1</a>
                                        </li>
                                        <li>
                                            <a class="paraf" href="/booking-second">Step 2</a>
                                        </li>
                                        <li>
                                            <a class="paraf" href="/booking-third">Step 3</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
        <booking-nav id="1"></booking-nav>
        <div class="row">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="booking-heading-wrap">
                  <h2 class="main-heading">Occupant Details</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <div class="booking-form-wrap">
                  <div class="tab-content booking-form" id="nav-tabContent">
                    <primary-booking-form key="primary" />
                    <div v-if="selectedBooking.adults > 1">
                      <adult-booking-form
                        v-for="index in selectedBooking.adults - 1"
                        :key="index"
                        :formId="index + 1"
                      ></adult-booking-form>
                    </div>
                    <child-booking-form
                      v-if="selectedBooking.children > 0"
                      v-for="index in selectedBooking.children"
                      :key="'child ' + index"
                      :formId="selectedBooking.adults + index"
                    />
                    <div class="row">
                      <div class="col-md-12">
                        <span v-if="!allFormsFilled" class="required_message"
                          >Please fill all the required fields</span
                        >
                        <div class="form-group">
                          <div class="filter-widget">
                            <a
                              class="btn booking-btn"
                              v-on:click="nextStep"
                              :disabled="!allFormsFilled"
                              >Send the booking quote</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <apartment-booking-widget></apartment-booking-widget>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div
      v-if="bookingSuccess"
      class="modal fade show"
      v-bind:style="{ display: 'block', 'padding-right': '15px' }"
      id="confirm-modal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalCenterTitle"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="agent-logo-wrap">
                    <img src="" alt="" />
                  </div>
                  <div class="agent-tittle">
                    <h3 class="sub-heading">Booking Quote Submitted!</h3>
                    <p class="paraf text-center" style="margin-top: 20px;">
                      Thank you for your booking. We'll get back to you soon.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="login-button-wrap">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="filter-widget">
                        <a
                          class="btn booking-btn agent-login-btn"
                          @click="redirect"
                          >Back to Listing Page</a
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
    </div>
  </div>
</template>
<script>
import Datepicker from 'vuejs-datepicker';
import { mapState, mapActions } from 'vuex';

export default {
  name: 'booking-step-one',
  data() {
    return {
      //adults: 3,
      //children: 3
    };
  },
  mounted() {
    
    this.getBooking(this.$attrs.id);
  },
  methods: {
    nextStep() {
      let agent = 0;
      if (this.loginResponse && this.loginResponse.data) {
        agent = this.loginResponse.data;
      let params = {
        uuid: this.$attrs.id,
        booking_id: this.selectedBooking.id,
        occupants: this.bookingData,
        agent: agent
      };
      if (this.allFormsFilled) {
        this.updateOccupants(params);
      }
    },
    redirect() {
      window.location = '/apartment-listing';
    },
    ...mapActions('booking', ['rmsBooking', 'getBooking', 'updateOccupants'])
  },
  computed: {
    ...mapState('booking', [
      'selectedBooking',
      'bookingData',
      'errors',
      'bookingSuccess'
    ]),
    ...mapState('login', ['loginResponse']),
    allFormsFilled() {
      return (
        this.bookingData &&
        this.bookingData.length ===
          this.selectedBooking.adults + this.selectedBooking.children
      );
    }
  },
  components: {
    Datepicker
  }
};
</script>
