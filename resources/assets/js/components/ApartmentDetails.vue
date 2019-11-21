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
                                       {{selectedApartment.name}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="listing-inner">
            <div class="container-fluid container-fluid-white-background">
                <div class="container">
                    <div class="row listing-wrap">
                        <div class="col-md-8 p-0">
                            <div class="listing-swipe-slider">
                                <div class="swipeslider">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide slide" v-for="(file,i) in selectedApartment.files" v-bind:key="file.id+i"
                                                        :style="{ backgroundImage: 'url(\'' + file.url + '\')' }"></div>
                                        </div>
                                        <!-- Add Arrows -->
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-desc-behind-wrap">
                                <h3>{{selectedApartment.name}}</h3>
                                <p><span class="ti-location-pin"></span> {{selectedApartment.address}}</p>
                            </div>
                            <div class="listing-bottom-icons-wrap">
                                <ul class="list-inline">
                                    <li class="list-inline-item apart-type">Studio</li>
                                    <li class="list-inline-item apart-options"><i class="ti-envelope"></i> 2</li>
                                    <li class="list-inline-item apart-options"><i class="ti-envelope"></i> 2</li>
                                    <li class="list-inline-item apart-options"><i class="ti-envelope"></i> 1</li>
                                    <li class="list-inline-item apart-options"> &#124; </li>
                                    <li class="list-inline-item apart-options">Available now</li>
                                    <li class="list-inline-item apart-options"> &#124; </li>
                                    <li class="list-inline-item apart-options">A$405 per week</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartment-inner-left-wrap">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="dropdown filter-widget">
                                                <label for="checkin" class="filter-widget-sublabel">Check-In</label>
                                                <button class="btn btn-secondary dropdown-toggle flter-button" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ti-location-pin"></i><span> Check-In/Out</span>
                                                </button>
                                                <div class="dropdown-menu filter-widget-dropdown" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
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
                                        <div class="form-group">
                                            <div class="dropdown filter-widget">
                                                <label for="checkin" class="filter-widget-sublabel">Check-In</label>
                                                <button class="btn btn-secondary dropdown-toggle flter-button" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ti-location-pin"></i><span> Check-In/Out</span>
                                                </button>
                                                <div class="dropdown-menu filter-widget-dropdown" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="dropdown filter-widget">
                                                <label for="checkin" class="filter-widget-sublabel">Check-In</label>
                                                <button class="btn btn-secondary dropdown-toggle flter-button" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ti-location-pin"></i><span> Check-In/Out</span>
                                                </button>
                                                <div class="dropdown-menu filter-widget-dropdown" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="dropdown filter-widget">
                                                <label for="checkin" class="filter-widget-sublabel"></label>
                                                <button class="btn btn-secondary dropdown-toggle flter-button" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ti-location-pin"></i><span> </span>
                                                </button>
                                                <div class="dropdown-menu filter-widget-dropdown" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
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
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="dropdown filter-widget">
                                                <label for="checkin" class="filter-widget-sublabel">Check-In</label>
                                                <button class="btn btn-secondary dropdown-toggle flter-button" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ti-location-pin"></i><span> Check-In/Out</span>
                                                </button>
                                                <div class="dropdown-menu filter-widget-dropdown" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
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
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="checkin" class="filter-widget-sublabel">Check-In</label>
                                            <p class="amount">$1,620.00</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="filter-widget">
                                                <a class="btn booking-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="save-shortlist">
                                        <a class="btn shortlist"><i class="ti-tag"></i> Save to shortlist</a>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="send-email">
                                        <a class="btn email-btn"><i class="ti-email"></i> Email</a>
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
                    <div class="location-wrap" v-html="selectedApartment.map_url"></div>
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
        <br>
    </div>
</template>
<script>

    import {mapState, mapActions} from 'vuex';
    export default {

        name: "apartmentDetails",
        data() {
            return {
                slide: 0,
                sliding: null
            }
        },
        mounted() {
            this.getApartment(this.$attrs.id);
        },
        methods:{
            log(message){
                console.log('-----',message)
            },
            getContentBySubType(subType){
                let contentObj = this.selectedApartment && this.selectedApartment.contents && this.selectedApartment.contents.filter((c)=>{
                    return c.sub_type===subType
                });
                return contentObj && contentObj[0] ? contentObj[0].content : "";
            },
            onSlideStart(slide) {
                this.sliding = true
            },
            onSlideEnd(slide) {
                this.sliding = false
            },
            ...mapActions('ratesAndAvailability', ['getApartment'])
        },
        computed:{
            ...mapState('ratesAndAvailability', ['selectedApartment'])
        }
    }
</script>
