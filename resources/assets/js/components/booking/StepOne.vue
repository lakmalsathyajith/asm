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
                <div class="row">
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
                </div>

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
                                        <primary-booking-form  key="primary"/>
                                        <div v-if="selectedBooking.adults>1">
                                            <adult-booking-form  v-for="index in selectedBooking.adults-1" :key="index" :formId="index+1"></adult-booking-form>
                                        </div>
                                        <child-booking-form v-if="selectedBooking.children>0" v-for="index in selectedBooking.children" :key="'child '+index" :formId="selectedBooking.adults+index"/>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="filter-widget">
                                                        <a class="btn booking-btn" v-on:click="nextStep">Proceed to next step</a>
                                                    </div>
                                                    <span v-if="!allFormsFilled">* Please fill all the forms</span>
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
    </div>
</template>
<script>
    import Datepicker from "vuejs-datepicker";
    import { mapState, mapActions } from "vuex";

    export default {
        name: "booking-step-one",
        data() {
            return {
                //adults: 3,
                //children: 3
            };
        },
        mounted() {
            console.log("Component mounted.",this);
            this.getBooking(this.$attrs.id);
        },
        methods: {
            nextStep() {
                let params = {
                    uuid:this.$attrs.id,
                    booking_id: this.selectedBooking.id,
                    occupants: this.bookingData
                }
                if(this.allFormsFilled){
                    this.updateOccupants(params);
                }
            },
            ...mapActions("booking", ["getBooking", "updateOccupants"]),
        },
        computed: {
            ...mapState("booking", ["selectedBooking","bookingData","errors"]),
            allFormsFilled(){
                return  this.bookingData && this.bookingData.length===(this.selectedBooking.adults+this.selectedBooking.children)
            }
        },
        components: {
            Datepicker
        }
    };
</script>
