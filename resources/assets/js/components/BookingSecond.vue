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
            <div class="row">
                <div class="full-row wizard-row">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav nav-wizard">

                                   <li><a href="/booking-first"> Step 1</a></li>
                                    <li class="active"><a href="/booking-second">Step 2</a></li>
                                    <li><a href="/booking-third">Step 3</a></li>


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
                                <h2 class="main-heading">Extra Features</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="booking-form-step2-wrap">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="step2-top-wrap booking-head-tittle">
                                            <h4>
                                                Bedroom Configuration
                                            </h4>
                                            <div class="form-group">
                                                <div class="dropdown filter-widget general-boking-inqure-wrap">
                                                    <label for="checkin" class="filter-widget-sublabel">Bedding Conﬁguration*</label>

                                                    <button class="btn dropdown-toggle flter-button enqury-svg-button" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                                                   <span> Choose</span> 
                                                                                            </button>
                                                    <div class="dropdown-menu filter-widget-dropdown general-boking-inqure" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 70px, 0px);">
                                                        <div class="filter-widget-inner">
                                                            <a class="dropdown-item" href="#" value="General Enquiry">General Enquiry</a>
                                                            <a class="dropdown-item" href="#" value="Booking Enquiry">Booking Enquiry</a>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="step2-middle-wrap booking-head-tittle">
                                            <h4>
                                                Extra Features
                                            </h4>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="checkin" class="filter-widget-sublabel">Choose Certain Extras</label>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="extras-wrap">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <div class="form-group">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 p-0">
                                                            <div class="form-group">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label inputradio-check-lable step2-extras-lbl-head" for="inlineCheckbox1">Unlimited Internet</label>
                                                                </div>
                                                                <p class="extras-p">$12 per week</p>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-1">
                                                            <div class="form-group">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 p-0">
                                                            <div class="form-group">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label inputradio-check-lable step2-extras-lbl-head" for="inlineCheckbox1">Housekeeping</label>
                                                                </div>
                                                                <p class="extras-p">$24 per week</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="agreement-wrap">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                <label class="form-check-label inputradio-check-lable" for="inlineCheckbox1">I have read and agree with the <a href="#"><span class="agreement-path">Rental Agreement</span></a></label>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <div class="filter-widget">
                                                    <a class="btn booking-btn"  v-on:click="nextStep">Proceed</a>
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
                                        <img src="images/booking/Image-35.png" width="100%">

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
                                                <p><i class="ti-location-pin"></i> Melbourne - Northern Region</p>
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
                                            <div class="short-description">
                                                Check-In
                                            </div>
                                            <div class="long-description">
                                                18, September 2019
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="short-description">
                                                Occupants
                                            </div>
                                            <div class="long-description">
                                                2 Adults + 1 Child
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="short-description">
                                                Check-Out
                                            </div>
                                            <div class="long-description">
                                                18, October 2019
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="short-description">
                                                Beds
                                            </div>
                                            <div class="long-description">
                                                1-2 Beds
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="divider"></div>
                                        </div>

                                    </div>
                                </div>

                                <div class="bottom-rent-details-wrap">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="rent-wrap short-description ">
                                                Rent
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="rent-wrap-detail pull-right">
                                                $405 per week
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="days-wrap short-description">
                                                Total Days
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="days-wrap-detail pull-right">
                                                30 Days
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="total-wrap">
                                                Total
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="total-wrap-detail pull-right">
                                                $1,620
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





      </div>
       </template>
       <script>
    export default {
        name: "booking-second",
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            nextStep() {
               window.location = './booking-third';
            },
        }
    }
</script>