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
                    <li class="list-inline-item navigation-path-name">
                      <a href="/">Home</a>
                      <span class="navigation-path"> ></span>
                    </li>
                    <li class="list-inline-item navigation-path-name">
                      <a href="/typical-apartment">Our Typical Apartments</a>
                      <span class="navigation-path"> ></span>
                    </li>
                    <li class="list-inline-item">
                      <span class="current-page">One Bedroom Apartments</span>
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
            <div class="head-stud-apart">
              <h2 class="main-heading">One Bedroom Apartments</h2>
            </div>
            <div class="sub-head-stud-apart">
              <p class="paraf">
                Our Furnished One Bedroom Apartments are located across
                Melbourne’s CBD, East Melbourne, South Yarra and Carlton.<br />
                Typically furnished one bedroom apartments range from 45 square
                meters to 65 square meters in size
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="swipeslider">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div
                    class="swiper-slide onebed-one-build"
                    style="background-image: url(../images/onebed-apartment/onebed-1.jpg);"
                  ></div>
                  <div
                    class="swiper-slide onebed-one-build"
                    style="background-image: url(../images/onebed-apartment/onebed-2.jpg);"
                  ></div>
                  <div
                    class="swiper-slide onebed-one-build"
                    style="background-image: url(../images/onebed-apartment/onebed-3.jpg);"
                  ></div>
                  <div
                    class="swiper-slide onebed-one-build"
                    style="background-image: url(../images/onebed-apartment/onebed-4.jpg);"
                  ></div>
                  <div
                    class="swiper-slide onebed-one-build"
                    style="background-image: url(../images/onebed-apartment/onebed-5.jpg);"
                  ></div>
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
              <h2 class="main-heading">
                Check the availability of Studio Apartments
              </h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <div class="dropdown filter-widget">
                  <button
                    class="btn dropdown-toggle flter-button"
                    type="button"
                    id="dropdownMenuButton"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="ti-location-pin"></i><span> Check-In/Out</span>
                  </button>
                  <div
                    class="dropdown-menu filter-widget-dropdown"
                    aria-labelledby="dropdownMenuButton"
                  >
                    <div class="filter-widget-inner">
                      <div class="row">
                        <div class="col-md-6 filter-widget-col">
                          <div class="form-group">
                            <label for="checkin" class="filter-widget-sublabel"
                              >Check-In</label
                            >
                            <Datepicker
                              v-model="filter.checkIn"
                              placeholder="Check In"
                              class="form-control asm-input"
                            ></Datepicker>
                          </div>
                        </div>
                        <div class="col-md-6 filter-widget-col">
                          <div class="form-group">
                            <label for="checkout" class="filter-widget-sublabel"
                              >Check-Out</label
                            >
                            <Datepicker
                              v-model="filter.checkOut"
                              placeholder="Check Out"
                              class="form-control asm-input"
                            ></Datepicker>
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
                  <button
                    class="btn dropdown-toggle flter-button"
                    type="button"
                    id="dropdownMenuButton"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="ti-location-pin"></i><span> Guest Number</span>
                  </button>
                  <div
                    class="dropdown-menu filter-widget-dropdown"
                    aria-labelledby="dropdownMenuButton"
                  >
                    <div class="filter-widget-inner">
                      <div class="row">
                        <div class="col-md-6 filter-widget-col">
                          <div class="form-group">
                            <label
                              for="min_occupants"
                              class="filter-widget-sublabel"
                              >Adults</label
                            >
                            <input
                              id="min_occupants"
                              type="number"
                              class="form-control asm-input"
                              placeholder="Adults"
                              v-model="filter.adults"
                              min="1"
                            />
                          </div>
                        </div>
                        <div class="col-md-6 filter-widget-col">
                          <div class="form-group">
                            <label
                              for="max_occupants"
                              class="filter-widget-sublabel"
                              >Children</label
                            >
                            <input
                              id="max_occupants"
                              type="number"
                              class="form-control asm-input"
                              placeholder="Children"
                              v-model="filter.children"
                              min="1"
                            />
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
                  <button
                    class="btn dropdown-toggle flter-button"
                    type="button"
                    id="dropdownMenuButton"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="ti-money"></i><span>Price Min/Max</span>
                  </button>
                  <div
                    class="dropdown-menu filter-widget-dropdown"
                    aria-labelledby="dropdownMenuButton"
                  >
                    <div class="filter-widget-inner">
                      <div class="row">
                        <div class="col-md-6 filter-widget-col">
                          <div class="form-group">
                            <label for="checkin" class="filter-widget-sublabel"
                              >Price Min</label
                            >
                            <input
                              id="checkin"
                              type="text"
                              class="form-control asm-input"
                              placeholder="Price Min"
                              v-model="filter.price_min"
                              min="0"
                            />
                          </div>
                        </div>
                        <div class="col-md-6 filter-widget-col">
                          <div class="form-group">
                            <label for="checkout" class="filter-widget-sublabel"
                              >Price Max</label
                            >
                            <input
                              id="checkout"
                              type="text"
                              class="form-control asm-input"
                              placeholder="Price Max"
                              v-model="filter.price_max"
                              min="0"
                            />
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
                  <a class="btn booking-btn" v-on:click="search">Search</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="studio-apartment-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="studio-bottom-wrap">
              <div class="studio-bottom-view-apartment">
                <a class="btn colorles-btn">View Apartments</a>
              </div>

              <div class="studio-bottom-sub-heading1">
                <p class="paraf">
                  Apartment Stays Melbourne, 1 bedroom furnished apartments
                  provide separate living rooms and bedrooms for an optimal home
                  environment. A variety of fully furnished 1 bedroom apartments
                  are available in an assortment of locations around central
                  Melbourne CBD and the immediate fringes.
                </p>
              </div>
              <div class="studio-bottom-sub-heading1">
                <p class="paraf">
                  We let you choose between self-catered or serviced 1 bedroom
                  furnished apartments. We offer housekeeping as an option. You
                  may choose to have a weekly, fortnightly or monthly service
                  (extra charge). Alternatively you may choose to service your
                  furnished 1 bedroom apartment yourself and save on cost.
                </p>
              </div>
              <div class="studio-bottom-sub-heading1">
                <p class="paraf">
                  Some of our furnished 1 bedroom apartments have balconies
                  allowing for great views of the city skyline, Yarra river or
                  the city’s beautiful parks and gardens, whilst others give all
                  the convenience and thrill of being in that perfect location.
                </p>
              </div>
              <div class="studio-bottom-sub-heading1">
                <p class="paraf">
                  Our furnished 1 bedroom apartments feature a kitchen which is
                  fully equipped and provide everything you need to prepare your
                  own meals from scratch, but you will also never find yourself
                  far from Melbourne’s world class cafés and restaurants.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="studio-middle-sec class-section">
      <div class="container-fluid">
        <div class="container">
          <div class="class-top-text-wrap studio-middle-panel-wrap">
            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-default superior-panel">
                  <div class="panel-heading">
                    <h3 class="sub-heading">Benefits &amp; Inclusions:</h3>
                  </div>
                  <div class="panel-body">
                    <div
                      class="include-list-wrap superior-list studio-benifit-list"
                    >
                      <ul>
                        <li>Fully furnished</li>
                        <li>All utilities connection and usage charges</li>
                        <li>All homewares</li>
                        <li>Fully equipped modern kitchen</li>

                        <li>Linen and towels</li>
                        <li>Widescreen LCD television</li>
                        <li>Heating</li>
                        <li>Air-conditioning (in most cases)</li>
                        <li>Ensuite bathroom</li>
                        <li>Laundry facilities</li>
                        <li>Unlimited Wi-Fi (extra charge)</li>
                        <li>
                          • Optional housekeeping service available, weekly,
                          fortnightly or monthly (extra charge)
                        </li>
                      </ul>
                    </div>
                    <div class="divider"></div>
                    <div class="bottom-after-border-wrap">
                      <div class="bottom-para-wrap">
                        <p class="paraf">
                          Comfortably, our one bedroom apartments sleep 1 – 2
                          people, making it ideal for a single or two friends /
                          one couple. Maximum guests depends on the 1 bedroom
                          furnished apartment. Some of our one bedroom furnished
                          apartments can accommodate 3 or 4 guests also because
                          of their larger size.
                        </p>
                      </div>
                      <div class="bedding-config-wrap">
                        <div class="bedding-config-heading available-head">
                          <h3>Bedding can be configured as:</h3>
                        </div>
                        <div class="config-label-wrap ">
                          <div class="row">
                            <div class="col">
                              <button type="button" class="btn colorles-btn">
                                <i class="ti-check"></i> 1 x king bed
                              </button>
                            </div>
                            <div class="col">
                              <button type="button" class="btn colorles-btn">
                                <i class="ti-check"></i> 2 x singles
                              </button>
                            </div>
                            <div class="col">
                              <button type="button" class="btn colorles-btn">
                                <i class="ti-check"></i> 3 x singles
                              </button>
                            </div>
                            <div class="col">
                              <button type="button" class="btn colorles-btn">
                                <i class="ti-check"></i> 1 x queen + 1 x single
                              </button>
                            </div>
                            <div class="col">
                              <button type="button" class="btn colorles-btn">
                                <i class="ti-check"></i> 1 x king + 1 x single
                              </button>
                            </div>
                            <div class="col">
                              <button type="button" class="btn colorles-btn">
                                <i class="ti-check"></i> 1 x single + 1 x bunk
                                bed
                              </button>
                            </div>
                            <div class="col">
                              <button type="button" class="btn colorles-btn">
                                <i class="ti-check"></i> 2 x bunk beds
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <br />
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="studio-bottom-furnish-wrap">
            <div class="row">
              <div class="col-md-12">
                <div class="studio-furnish-head">
                  <h3>
                    Why are furnished one bedroom apartments in Melbourne the
                    ideal choice?
                  </h3>
                </div>
                <div class="studio-furnish-para text-center">
                  <p class="paraf">
                    A furnished one bedroom apartment rental in Melbourne is the
                    perfect choice for corporates, business people, our public
                    servants, medical interns or specialists on hospital
                    rotation, academics and researches, discerning international
                    students wanting something more than what a student
                    apartment can offer. Travellers, recently separated trying
                    to find their feet… the list is really endless.
                  </p>
                  <p class="paraf">
                    Our furnished studios are in some of Melbourne’s best
                    locations close to all the action and opportunities of the
                    city yet private and comfortable, these furnished apartments
                    can’t be beaten for the busy and the budget-conscious
                    guests.
                  </p>
                  <p class="paraf">
                    Apartment Stays serviced apartments offer a flexible,
                    affordable place to base yourself while you achieve your
                    goals. We offer flexibility with leases ranging from 1-24
                    months and of course the potential to extend a stay under a
                    new agreement.
                  </p>
                  <p class="paraf">
                    These one bedroom furnished apartments are in some of
                    Melbourne's best locations close to all the action and
                    opportunities of the city yet private and comfortable. Our
                    furnished one bedroom apartments can't be beaten for the
                    busy and astute guest.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="studio-bottom-furnish-image-wrap">
            <div class="row">
              <div class="col-md-12">
                <img
                  src="images/onebed-apartment/aprt-bottom-img-1bed.jpg"
                  width="100%"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
import Datepicker from 'vuejs-datepicker';
import moment from 'moment';

export default {
  name: 'one-bed-room-apartments',
  data() {
    return {
      filter: {
        checkIn: '',
        checkOut: '',
        type: 'one-bed-room-apartments',
        adults: 1,
        children: 0,
        price_min: 0,
        price_max: 0
      }
    };
  },
  mounted() {
    console.log('Component mounted.');
  },
  methods: {
    search() {
      if (
        this.filter.type != '' &&
        this.filter.checkIn != '' &&
        this.filter.checkOut != ''
      ) {
        window.location =
          './apartment-listing?type=' +
          this.filter.type +
          '&start=' +
          moment(this.filter.checkIn).format('YYYY-MM-DD') +
          '&end=' +
          moment(this.filter.checkOut).format('YYYY-MM-DD') +
          '&adults=' +
          this.filter.adults +
          '&children=' +
          this.filter.children +
          '&price_min=' +
          this.filter.price_min +
          '&price_max=' +
          this.filter.price_max;
      }
    }
  },
  components: {
    Datepicker
  }
};
</script>
