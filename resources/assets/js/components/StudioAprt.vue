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
                      <span class="current-page">Studio Apartments</span>
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
              <h2 class="main-heading">Studio Apartments</h2>
            </div>
            <div class="sub-head-stud-apart">
              <P
                >We offer quality fully furnished, centrally located and
                affordable apartments for medium<br />or long term stays in
                Melbourne.</P
              >
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="swipeslider">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div
                    class="swiper-slide slide-studio"
                    style="background-image: url(../images/studio-apartment/studio-1.jpg);"
                  ></div>
                  <div
                    class="swiper-slide slide-studio"
                    style="background-image: url(../images/studio-apartment/studio-2.jpg);"
                  ></div>
                  <div
                    class="swiper-slide slide-studio"
                    style="background-image: url(../images/studio-apartment/studio-3.jpg);"
                  ></div>
                  <div
                    class="swiper-slide slide-studio"
                    style="background-image: url(../images/studio-apartment/studio-4.jpg);"
                  ></div>
                  <div
                    class="swiper-slide slide-studio"
                    style="background-image: url(../images/studio-apartment/studio-5.jpg);"
                  ></div>
                  <div
                    class="swiper-slide slide-studio"
                    style="background-image: url(../images/studio-apartment/studio-6.jpg);"
                  ></div>
                  <div
                    class="swiper-slide slide-studio"
                    style="background-image: url(../images/studio-apartment/studio-7.jpg);"
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
              <!-- <h3>Check the availability of Studio Apartments</h3> -->
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
                  Apartment Stays Melbourne lets you choose between self catered
                  studio apartments or serviced studio apartments. We offer
                  housekeeping as an option. You may choose to have a weekly,
                  fortnightly or monthly service (extra charge). Alternatively
                  you may choose to service your furnished studio apartment
                  yourself and save on cost.
                </p>
              </div>
              <div class="studio-bottom-sub-heading1">
                <p class="paraf">
                  Some of our furnished studio apartments have balconies
                  allowing for great views of the city skyline, Yarra river or
                  the city’s beautiful parks and gardens, whilst others give all
                  the convenience and thrill of being in that perfect location.
                  Our furnished studios feature a kitchen or kitchenette which
                  is fully equipped and provide everything you need to prepare
                  your own meals from scratch, but you will also never find
                  yourself far from Melbourne’s world class cafés and
                  restaurants.
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
                        <li>Fully equipped modern kitchen / kitchenette</li>
                        <li>All linen and towels</li>
                        <li>Heating</li>
                        <li>Widescreen LCD television</li>
                        <li>Heating</li>
                        <li>Air-conditioning (in most cases)</li>
                        <li>Ensuite bathroom</li>
                        <li>Laundry facilities</li>
                        <li>Unlimited Wi-Fi (extra charge)</li>
                        <li>
                          Optional housekeeping service available, weekly,
                          fortnightly or monthly (extra charge)
                        </li>
                      </ul>
                    </div>
                    <div class="divider"></div>
                    <div class="bottom-after-border-wrap">
                      <div class="bottom-para-wrap">
                        <p class="paraf">
                          Maximum guests depends on the studio apartment. Mostly
                          the maximum guests is two. Some of our furnished
                          studio apartments can accommodate 3 or 4 guests also
                          because of their larger size.
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
                                <i class="ti-check"></i> 1 x queen + 1 x single
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
                    Why are furnished studio apartments in Melbourne the ideal
                    choice?
                  </h3>
                </div>
                <div class="studio-furnish-para text-center">
                  <p class="paraf">
                    A furnished studio apartment rental in Melbourne is the
                    perfect affordable choice for a solo student or perhaps up
                    to four students that are working to a tight budget.
                    Travellers, business people, medical interns or specialists
                    on hospitalrotation, academics and researches, recently
                    separated trying to find their feet… the list is really
                    endless.
                  </p>
                  <p class="paraf">
                    Our furnished studios are in some of Melbourne’s best
                    locations close to all the action and opportunities of the
                    city yet private and comfortable, these furnished apartments
                    can’t be beaten for the busy and the budget-conscious
                    guests.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="studio-bottom-furnish-image-wrap">
            <div class="row">
              <div class="col-md-12">
                <img
                  src="images/studio-apartment/aprt-bottom-img-studio.jpg"
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
  name: 'studio-apartments',
  data() {
    return {
      filter: {
        checkIn: '',
        checkOut: '',
        type: 'studio-apartments',
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
