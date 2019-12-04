<template>
    <div>
        <section class="top-search-wrap padding-tb-60">
            <div class="container-fluid">
                <div class="row nav-top-path-wrap bottom-full-width-border">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="nav-top-path">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="nav-right-lan-wrap pull-right">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <!--<div class="row">
                    <div class="full-row wizard-row">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="nav nav-wizard">
                                        <li><a href="/booking-first"> Step 1</a></li>
                                        <li><a href="/booking-second">Step 2</a></li>
                                        <li class="active"><a href="/booking-third">Step 3</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <booking-nav id=3></booking-nav>
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="booking-heading-wrap">
                                    <h2 class="main-heading">Payment</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="payment-wrap">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input worker-info-radio" type="radio"
                                                           name="inlineRadioOptions" id="inlineRadio1" value="option1"
                                                           checked="checked">
                                                    <label class="form-check-label radio-label-work inputradio-check-lable"
                                                           for="inlineRadio1">Credit Card</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input student-info-radio" type="radio"
                                                           name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                    <label class="form-check-label radio-label-student inputradio-check-lable"
                                                           for="inlineRadio2">Direct bank transfer</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-form-step2-wrap">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin" class="filter-widget-sublabel">Credit Card
                                                        Number* </label>
                                                    <input class="form-control flter-button" type="text">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="dropdown filter-widget">
                                                            <label for="checkin"
                                                                   class="filter-widget-sublabel">Expire* </label>
                                                            <input class="form-control flter-button" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="dropdown filter-widget">
                                                            <label for="checkin"
                                                                   class="filter-widget-sublabel"> </label>
                                                            <input class="form-control flter-button" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin" class="filter-widget-sublabel">Security
                                                        Code* </label>
                                                    <input class="form-control flter-button" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="dropdown filter-widget">
                                                    <label for="checkin" class="filter-widget-sublabel">Cardholder
                                                        Name* </label>
                                                    <input class="form-control flter-button" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="filter-widget">
                                                    <button v-if="bookingSuccess" disabled="true" class="btn booking-btn">Booking confirmed</button>
                                                    <a v-else class="btn booking-btn" @click="booking">Proceed to next step</a>
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
        <div  v-if="bookingSuccess" class="modal fade show" v-bind:style="{ 'display': 'block', 'padding-right': '15px'}" id="agent-modal2" tabindex="-1"
                 role="dialog" aria-labelledby="exampleModalCenterTitle">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="agent-logo-wrap">
                                            <img src="" alt="">
                                        </div>
                                        <div class="agent-tittle">
                                            <h3 class="sub-heading">Booking Confirmed.</h3>
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
                                                    <a class="btn booking-btn agent-login-btn" @click="redirect">OK</a>
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
    import { mapState, mapActions } from "vuex";

    export default {
        name: "booking-third",
        mounted() {
            this.getBooking(this.$attrs.id);
        },
        methods: {
            booking() {
                if(this.selectedBooking.occupants.length>0){
                    this.rmsBooking(this.$attrs.id);
                }else{
                    window.location = '/booking/'+this.$attrs.id+'/step-one';
                }
            },
            redirect(){
                window.location = '/apartment-listing';
            },
            ...mapActions("booking", ["rmsBooking","getBooking"]),
        },
        computed: {
            ...mapState("booking", ["selectedBooking","bookingSuccess"])
        }
    }
</script>
