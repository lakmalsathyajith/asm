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
                                        <primary-booking-form/>
                                        <adult-booking-form v-for="index in adults-1" :key="index" :formId="index+1"/>
                                        <child-booking-form v-for="index in children" :key="'child '+index" :formId="adults+index"/>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="filter-widget">
                                                        <a class="btn booking-btn" v-on:click="nextStep">Proceed to next
                                                            step</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="booking-right-side-top-wrap">
                                    <div class="col-md-12 p-0">
                                        <div class="booking-image-wrap">
                                            <img src="images/booking/Image-35.png" width="100%"/>
                                        </div>
                                        <div class="image-option">
                                            <p>One Bed Room</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-right-side-middle-wrap">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="bottom-desc-behind-wrap">
                                                <div class="right-side-middle-content">
                                                    <h3>Apartment 404</h3>
                                                    <p>
                                                        <i class="ti-location-pin"></i> Melbourne - Northern Region
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="divider"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="check-in-details">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="short-description">Check-In</div>
                                                <div class="long-description">18, September 2019</div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="short-description">Occupants</div>
                                                <div class="long-description">2 Adults + 1 Child</div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="short-description">Check-Out</div>
                                                <div class="long-description">18, October 2019</div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="short-description">Beds</div>
                                                <div class="long-description">1-2 Beds</div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="divider"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bottom-rent-details-wrap">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="rent-wrap short-description">Rent</div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="rent-wrap-detail pull-right">$405 per week</div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="days-wrap short-description">Total Days</div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="days-wrap-detail pull-right">30 Days</div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="total-wrap">Total</div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="total-wrap-detail pull-right">$1,620</div>
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
    </div>
</template>
<script>
    import Datepicker from "vuejs-datepicker";

    export default {
        name: "booking-step-one",
        data() {
            return {
                adults: 3,
                children: 3
            };
        },
        mounted() {
            console.log("Component mounted.");
        },
        methods: {
            nextStep() {
                window.location = "./booking-second";
            }
        },
        components: {
            Datepicker
        }
    };
</script>
