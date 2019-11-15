<template>
    <div>

<section class="studio-apartment-section background-img padding-tb-60">
        <div class="container-fluid">
            <div class="nav-top-path-wrap bottom-full-width-border">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">


                            <div class="nav-top-path">
                                <ul class="list-inline">
                                    <li class="list-inline-item">Home
                                        <span> ></span>
                                    </li>
                                    <li class="list-inline-item">
                                        One Bedroom Apartments
                                    </li>
                                </ul>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="main-heading head-stud-apart">
                        <h2>Studio Apartments</h2>
                    </div>
                    <div class="sub-head-stud-apart">
                        <P>We offer quality fully furnished, centrally located and affordable apartments for medium<br>or long term stays in Melbourne.</p>
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="swipeslider">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide slide1"></div>

                            </div>
                            <!-- Add Arrows -->

                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="availabilty">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="available-head modile-hide">
                        <h3>Check the availability of Studio Apartments</h3>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-3">

                        <div class="form-group">
                            <div class="dropdown filter-widget">
                                <button class="btn btn-secondary dropdown-toggle flter-button" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ti-location-pin"></i><span> Location</span> 
                                        </button>
                                <div class="dropdown-menu filter-widget-dropdown" aria-labelledby="dropdownMenuButton">
                                    <div class="filter-widget-inner">

                                        <div class="row">
                                            <div class="col-md-12 filter-widget-col">
                                                <div class="form-group">
                                                    <label for="Location" class="filter-widget-sublabel">Location</label>
                                                    <input id="location" type="text" class="form-control asm-input" placeholder="Select Location">
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="dropdown filter-widget">
                                <button class="btn btn-secondary dropdown-toggle flter-button" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       <i class="ti-location-pin"></i><span> Check-In/Out</span> 
                                                </button>
                                <div class="dropdown-menu filter-widget-dropdown" aria-labelledby="dropdownMenuButton">
                                    <div class="filter-widget-inner">
                                        <div class="row">
                                            <div class="col-md-6 filter-widget-col">
                                                <div class="form-group">
                                                    <label for="checkin" class="filter-widget-sublabel">Check-In</label>
                                                    <input id="checkin" type="text" class="form-control asm-input" placeholder="Check In">
                                                </div>
                                            </div>
                                            <div class="col-md-6 filter-widget-col">
                                                <div class="form-group">
                                                    <label for="checkout" class="filter-widget-sublabel">Check-Out</label>
                                                    <input id="checkout" type="text" class="form-control asm-input" placeholder="Check Out">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="dropdown filter-widget">
                                <button class="btn btn-secondary dropdown-toggle flter-button" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                               <i class="ti-money"></i><span> Price Min/Max</span> 
                                                        </button>
                                <div class="dropdown-menu filter-widget-dropdown" aria-labelledby="dropdownMenuButton">
                                    <div class="filter-widget-inner">
                                        <div class="row">
                                            <div class="col-md-6 filter-widget-col">
                                                <div class="form-group">
                                                    <label for="checkin" class="filter-widget-sublabel">Price Min</label>
                                                    <input id="checkin" type="text" class="form-control asm-input" placeholder="Check In">
                                                </div>
                                            </div>
                                            <div class="col-md-6 filter-widget-col">
                                                <div class="form-group">
                                                    <label for="checkout" class="filter-widget-sublabel">Price Max</label>
                                                    <input id="checkout" type="text" class="form-control asm-input" placeholder="Check Out">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="filter-widget">
                                <a class="btn booking-btn">Search</a>
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
        name: "studio-aprt",
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>