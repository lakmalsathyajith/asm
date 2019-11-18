<template>
    <div>
        <section class="top-search-wrap padding-tb-60">
            <div class="container-fluid">
                <div class="row nav-top-path-wrap bottom-full-width-border">
                    <div class="container">
                        <div class="row">


                            <div class="nav-top-path">
                                <ul class="list-inline">
                                    <li class="list-inline-item">Home
                                        <span> ></span>
                                    </li>
                                    <li class="list-inline-item">
                                        Melbourne - Northern Region
                                    </li>
                                </ul>
                            </div>



                        </div>
                    </div>
                </div>

                <div class="row bottom-full-width-border filter-middle">
                    <div class="col-md-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 p-0 filter-left-border ">
                                    <div class="form-group">
                                        <div class="dropdown filter-widget">
                                            <button class="btn dropdown-toggle flter-button filter-border-none-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ti-location-pin"></i><span> City/Region</span>
                                            </button>
                                            <div class="dropdown-menu filter-widget-dropdown" aria-labelledby="dropdownMenuButton">
                                                <div class="filter-widget-inner">

                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>


                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 p-0 filter-left-border">
                                    <div class="form-group">
                                        <div class="dropdown filter-widget">
                                            <button class="btn dropdown-toggle flter-button filter-border-none-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ti-location-pin"></i><span> City/Region</span>
                                            </button>
                                            <div class="dropdown-menu filter-widget-dropdown" aria-labelledby="dropdownMenuButton">
                                                <div class="filter-widget-inner">

                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>


                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bottom-full-width-border filter-bottom-wrap">
                    <div class="container">
                        <div class="row">

                            <div class="col  p-0 filter-top-widget filter-left-border">
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <button class="btn dropdown-toggle flter-button filter-border-none-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ti-location-pin"></i><span> Apartment Type</span>
                                        </button>
                                        <div class="dropdown-menu filter-widget-dropdown" aria-labelledby="dropdownMenuButton">
                                            <div class="filter-widget-inner">

                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col  p-0 filter-top-widget filter-left-border">
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <button class="btn dropdown-toggle flter-button filter-border-none-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

                            <div class="col  p-0 filter-top-widget filter-left-border">
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <button class="btn dropdown-toggle flter-button filter-border-none-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ti-location-pin"></i><span> Guest Number</span>
                                        </button>
                                        <div class="dropdown-menu filter-widget-dropdown" aria-labelledby="dropdownMenuButton">
                                            <div class="filter-widget-inner">
                                                <div class="row">
                                                    <div class="col-md-6 filter-widget-col">
                                                        <div class="form-group">
                                                            <label for="checkin" class="filter-widget-sublabel">Adults</label>
                                                            <select class="form-control asm-input" id="Adults">
                                                                <option>Select</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 filter-widget-col">
                                                        <div class="form-group">
                                                            <label for="checkout" class="filter-widget-sublabel">Children</label>
                                                            <select class="form-control asm-input" id="Children">
                                                                <option>Select</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col  p-0 filter-top-widget filter-left-border">
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <button class="btn dropdown-toggle flter-button filter-border-none-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ti-location-pin"></i><span> Beds Min-Max</span>
                                        </button>
                                        <div class="dropdown-menu filter-widget-dropdown" aria-labelledby="dropdownMenuButton">
                                            <div class="filter-widget-inner">
                                                <div class="row">
                                                    <div class="col-md-6 filter-widget-col">
                                                        <div class="form-group">
                                                            <label for="checkin" class="filter-widget-sublabel">Min. Bed</label>
                                                            <select class="form-control asm-input" id="Min-beds">
                                                                <option>Any</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 filter-widget-col">
                                                        <div class="form-group">
                                                            <label for="checkout" class="filter-widget-sublabel">Max. Bed</label>
                                                            <select class="form-control asm-input" id="Max-beds">
                                                                <option>Any</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col  p-0 filter-top-widget filter-left-border">
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <button class="btn dropdown-toggle flter-button filter-border-none-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

                            <div class="col  p-0 filter-top-widget filter-left-border">
                                <div class="form-group">
                                    <div class="dropdown filter-widget">
                                        <button class="btn dropdown-toggle flter-button filter-border-none-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ti-location-pin"></i><span> Location</span>
                                        </button>
                                        <div class="dropdown-menu filter-widget-dropdown" aria-labelledby="dropdownMenuButton">
                                            <div class="filter-widget-inner">

                                                <div class="row">
                                                    <div class="col-md-12 filter-widget-col">
                                                        <div class="form-group">
                                                            <label for="Location" class="filter-widget-sublabel">Building</label>
                                                            <select class="form-control asm-input" id="Building">
                                                                <option>Any</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 filter-widget-col">
                                                        <div class="form-group">
                                                            <label for="Location" class="filter-widget-sublabel">More Features</label>
                                                            <div class="row">
                                                                <div class="class col-md-12">
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Balcony">
                                                                        <label class="form-check-label" for="Balcony">Balcony</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Parking">
                                                                        <label class="form-check-label" for="Parking">Parking</label>
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
                            <div class="col  p-0 filter-top-widget">
                                <div class="form-group">
                                    <div class="filter-widget">
                                        <a class="btn booking-btn filter-border-none-btn">Search</a>
                                    </div>


                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>


        </section>
        <section class="listing-result">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="listing-result-head">
                                <div class="first-result-head">
                                    <h3>Results for Melbourne - Northern Region</h3>
                                </div>
                                <div class="second-result-head">
                                    <p>Showing 1 - 6 of 18 total results</p>
                                </div>
                            </div>
                            <hr/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-inline order-select">
                                <ul class="list-inline">
                                    <li class="list-inline-item your-entry">Sort by</li>
                                    <li class="list-inline-item">
                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle sort-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Default
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="pagination-listing-wrap">
                                <nav aria-label="Page navigation example pagination-listing">
                                    <ul class="pagination">

                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>

                        </div>
                    </div>


                    <div class="row" v-for="apartment in apartmentsList">
                        <div class="col-md-12">
                            <div class="listing-wrap">
                                <div class="row">
                                    <div class="col-md-6 apartment-listing-widget-left-col">
                                        <div class="listing-swipe-slider">
                                            <div class="swipeslider">
                                                <div class="swiper-container">
                                                    <div class="slide-shortlist"><i class="ti-tag"></i> Save to
                                                        Shortlist
                                                    </div>
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide slide1"></div>
                                                    </div>
                                                    <div class="swiper-button-prev ti-angle-left"></div>
                                                    <div class="swiper-button-next ti-angle-right"></div>
                                                </div>
                                            </div>
                                            <div class="price-tag">
                                                A$305<sup>pw</sup>
                                            </div>
                                            <div class="apartment-owner">
                                                <div class="owner-icon"><i class="ti ti-user"></i></div>
                                                Mathew cahill
                                            </div>
                                        </div>
                                        <a :href="'./apartment/'+ apartment.id">
                                            <div class="bottom-desc-behind-wrap">
                                                <h3>{{apartment.name}}</h3>
                                                <p>{{apartment.address}}</p>
                                            </div>
                                        </a>
                                        <div class="listing-bottom-icons-wrap">
                                            <ul class="list-inline">
                                                <li class="list-inline-item apart-type">Studio</li>
                                                <li class="list-inline-item apart-options"><i class="ti-envelope"></i> 2
                                                </li>
                                                <li class="list-inline-item apart-options"><i class="ti-car"></i> 2</li>
                                                <li class="list-inline-item apart-options"><i class="ti-envelope"></i> 1
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6  apartment-listing-widget-right-col">
                                        <div class="facility-wrap">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="facility">
                                                        <i class="ti-briefcase"></i>
                                                    </div>
                                                    <div class="facility-name">
                                                        <p>Swimming Pool</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="facility">
                                                        <i class="ti-briefcase"></i>
                                                    </div>
                                                    <div class="facility-name">
                                                        <p>Swimming Pool</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="facility">
                                                        <i class="ti-briefcase"></i>
                                                    </div>
                                                    <div class="facility-name">
                                                        <p>Swimming Pool</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="facility">
                                                        <i class="ti-briefcase"></i>
                                                    </div>
                                                    <div class="facility-name">
                                                        <p>Swimming Pool</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="facility">
                                                        <i class="ti-briefcase"></i>
                                                    </div>
                                                    <div class="facility-name">
                                                        <p>Swimming Pool</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="facility">
                                                        <i class="ti-briefcase"></i>
                                                    </div>
                                                    <div class="facility-name">
                                                        <p>Swimming Pool</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="facility">
                                                        <i class="ti-briefcase"></i>
                                                    </div>
                                                    <div class="facility-name">
                                                        <p>Swimming Pool</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="facility">
                                                        <i class="ti-briefcase"></i>
                                                    </div>
                                                    <div class="facility-name">
                                                        <p>Swimming Pool</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="facility">
                                                        <i class="ti-briefcase"></i>
                                                    </div>
                                                    <div class="facility-name">
                                                        <p>Swimming Pool</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <div class="row pagination-listing-wrap">
                                <nav aria-label="Page navigation example pagination-listing " id="bottom-pagination">
                                    <ul class="pagination">

                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
    </div>

</template>
<script>
    import {mapState, mapActions} from 'vuex';

    export default {
        name: "apartments",
        mounted() {
            this.getApartmentsList();
        },
        methods:{
            ...mapActions('ratesAndAvailability', ['getApartmentsList','changeValue'])
        },
        computed:{
            ...mapState('ratesAndAvailability', ['apartmentsList'])
        }
    }
</script>
