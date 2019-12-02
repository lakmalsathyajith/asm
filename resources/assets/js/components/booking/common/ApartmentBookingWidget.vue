<template>
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
                            <h3>{{selectedBooking.apartment && selectedBooking.apartment.name}}</h3>
                            <p>
                                <i class="ti-location-pin"></i> {{selectedBooking.apartment &&
                                selectedBooking.apartment.address}}
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
                        <div class="long-description">{{selectedBooking.check_in}}</div>
                        <!--<div class="long-description">18, September 2019</div>-->
                    </div>
                    <div class="col-md-6">
                        <div class="short-description">Occupants</div>
                        <div class="long-description">{{selectedBooking.adults}} Adults + {{selectedBooking.children}}
                            Child
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="short-description">Check-Out</div>
                        <div class="long-description">{{selectedBooking.check_in}}</div>
                        <!--<div class="long-description">18, October 2019</div>-->
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
                        <div class="rent-wrap-detail pull-right">${{selectedBooking.rent}} per week</div>
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
</template>
<script>
    import {mapState, mapActions} from "vuex";

    export default {
        name: "booking-widget",
        mounted() {
            //this.getBooking(this.$attrs.id);
        },
        methods: {
            ...mapActions("booking", ["getBooking"])
        },
        computed: {
            ...mapState("booking", ["selectedBooking"]),
        },
    }
</script>