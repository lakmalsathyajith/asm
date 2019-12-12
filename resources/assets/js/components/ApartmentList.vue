<template>
  <div>
    <section class="top-search-wrap padding-tb-60 modile-hide tab-landscape-view">
      <div class="container-fluid">
        <div class="row nav-top-path-wrap bottom-full-width-border">
          <div class="container">
            <div class="row">
              <div class="nav-top-path">
                <ul class="list-inline">
                  <li class="list-inline-item">
                    Home
                    <span>></span>
                  </li>
                  <li class="list-inline-item">Rates & Availability</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row bottom-full-width-border filter-middle">
          <div class="col-md-12">
            <div class="container">
              <div class="row">
                <div class="col-md-6 p-0 filter-left-border">
                
                    <div class="filter-widget">
                      <!-- <button
                        class="btn dropdown-toggle location-svg-button before-svg flter-button filter-border-none-btn apartment-states"
                        type="button"
                        id="dropdownMenuButton"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <span>State</span>
                      </button> -->
                      <v-select :options="states" 
                            :clearable="false" 
                            label="State"
                             class="btn location-svg-button before-svg filter-border-none-btn"
                             v-model="filter.state"
                             @input="selectState(filter.state)"
                             placeholder="Select State"
                             ></v-select>
                    </div>
                  
                </div>
                <div class="col-md-6 p-0 filter-left-border">
                  <div class="form-group">
                    <div class="filter-widget">
                       <v-select :options="suburbs" 
                            :clearable="false" 
                            label="Suburb"
                             class="btn location-svg-button before-svg filter-border-none-btn"
                             v-model="filter.suburbs"
                             placeholder="Select Suburb"
                             ></v-select>
                      
                      
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
              <div class="col p-0 filter-top-widget filter-left-border">
                <div class="form-group">
                  <div class="dropdown filter-widget apartment-type-wrap" >
                    <button
                      class="btn dropdown-toggle apart-type-svg-button before-svg flter-button filter-border-none-btn apartment-type"
                      type="button"
                      id="dropdownMenuButton"
                      data-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <span>Apartment Type</span>
                    </button>
                    <div
                      class="dropdown-menu filter-widget-dropdown"
                      aria-labelledby="dropdownMenuButton"
                    >
                      <div class="filter-widget-inner filter-widget-inner-drop-list">
                        <a
                          class="dropdown-item Any"
                          href="#."
                          v-on:click="selectType('Any')"
                        >Any</a>
                        <a
                          class="dropdown-item studio-apartments"
                          href="#.."
                          v-on:click="selectType('studio-apartments')"
                        >Studio Apartments</a>
                        <a
                          class="dropdown-item one-bed-room-apartments"
                          href="#.."
                          v-on:click="selectType('one-bed-room-apartments')"
                        >One Bedroom Apartments</a>
                        <a
                          class="dropdown-item two-bed-room-apartments"
                          href="#.."
                          v-on:click="selectType('two-bed-room-apartments')"
                        >Two Bedroom Apartments</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col p-0 filter-top-widget filter-left-border">
                <div class="form-group">
                  <HotelDatePicker
                    format="DD/MM/YYYY"
                    :showYear="true"
                    :starting-date-value="filter.checkIn"
                    :ending-date-value="filter.checkOut"
                    @check-in-changed="setCheckinDate"
                    @check-out-changed="setCheckoutDate"
                  ></HotelDatePicker>
                </div>
              </div>

              <div class="col p-0 filter-top-widget filter-left-border">
                <div class="form-group">
                  <div class="dropdown filter-widget">
                    <button
                      class="btn dropdown-toggle guest-button-svg before-svg flter-button filter-border-none-btn"
                      type="button"
                      id="dropdownMenuButton"
                      data-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <span>Guest Number</span>
                    </button>
                    <div
                      class="dropdown-menu filter-widget-dropdown"
                      aria-labelledby="dropdownMenuButton"
                    >
                      <div class="filter-widget-inner">
                        <div class="row">
                          <div class="col-md-6 filter-widget-col">
                            <div class="form-group">
                              <label for="min_occupants" class="filter-widget-sublabel">Adults</label>
                              <div class="quantity">
                                <input
                                  v-model="filter.adults"
                                  type="number"
                                  min="1"
                                  max="6"
                                  step="1"
                                  value="1"
                                />
                                <div class="quantity-nav">
                                  <div
                                    class="quantity-button quantity-up"
                                    v-on:click="qtyIncrease('adults', 1, 6)"
                                  >
                                    +
                                  </div>
                                  <div
                                    class="quantity-button quantity-down"
                                    v-on:click="qtyDecrease('adults', 1, 6)"
                                  >
                                    -
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 filter-widget-col">
                            <div class="form-group">
                              <label for="max_occupants" class="filter-widget-sublabel">Children</label>
                              <div class="quantity">
                                <input
                                  type="number"
                                  v-model="filter.children"
                                  min="0"
                                  max="6"
                                  step="1"
                                  value="0"
                                />
                                <div class="quantity-nav">
                                  <div
                                    class="quantity-button quantity-up"
                                    v-on:click="qtyIncrease('children', 0, 6)"
                                  >
                                    +
                                  </div>
                                  <div
                                    class="quantity-button quantity-down"
                                    v-on:click="qtyDecrease('children', 0, 6)"
                                  >
                                    -
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

              <div class="col p-0 filter-top-widget filter-left-border">
                <div class="form-group">
                  <div class="dropdown filter-widget">
                    <button
                      class="btn dropdown-toggle price-svg-button before-svg flter-button filter-border-none-btn"
                      type="button"
                      id="dropdownMenuButton"
                      data-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <span>Price Min/Max</span>
                    </button>
                    <div class="dropdown-menu filter-widget-dropdown" aria-labelledby="dropdownMenuButton">
                      <div class="filter-widget-inner">
                        <div class="row">
                          <div class="col-md-6 filter-widget-col">
                            <div class="form-group">
                              <label for="checkin" class="filter-widget-sublabel">Price Min</label>
                              <v-select :options="options" :clearable="false" v-model="filter.price_min"></v-select>
                              
                            </div>
                          </div>
                          <div class="col-md-6 filter-widget-col">
                            <div class="form-group">
                              <label for="checkout" class="filter-widget-sublabel">Price Max</label>
                              <v-select :options="options" :clearable="false" v-model="filter.price_max"></v-select>
                              
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- <div class="col p-0 filter-top-widget filter-left-border">
                <div class="form-group">
                  <div class="dropdown filter-widget">
                    <button
                      class="btn dropdown-toggle flter-button filter-border-none-btn"
                      type="button"
                      id="dropdownMenuButton"
                      data-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="ti-location-pin"></i><span>Location</span>
                    </button>
                    <div
                      class="dropdown-menu filter-widget-dropdown"
                      aria-labelledby="dropdownMenuButton"
                    >
                      <div class="filter-widget-inner">
                        <div class="row">
                          <div class="col-md-12 filter-widget-col">
                            <div class="form-group">
                              <label
                                for="Location"
                                class="filter-widget-sublabel"
                                >Building</label
                              >
                              <select
                                class="form-control asm-input"
                                id="Building"
                              >
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
                              <label
                                for="Location"
                                class="filter-widget-sublabel"
                                >More Features</label
                              >
                              <div class="row">
                                <div class="class col-md-12">
                                  <div class="form-check form-check-inline">
                                    <input
                                      class="form-check-input"
                                      type="checkbox"
                                      id="inlineCheckbox1"
                                      value="Balcony"
                                    />
                                    <label
                                      class="form-check-label"
                                      for="Balcony"
                                      >Balcony</label
                                    >
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input
                                      class="form-check-input"
                                      type="checkbox"
                                      id="inlineCheckbox1"
                                      value="Parking"
                                    />
                                    <label
                                      class="form-check-label"
                                      for="Parking"
                                      >Parking</label
                                    >
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
              </div>-->
              <div class="col p-0 filter-top-widget">
                <div class="form-group">
                  <div class="filter-widget">
                    <a
                      class="btn booking-btn filter-border-none-btn top-filter-search-btn"
                      @click="submitFilter"
                    >Search</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="mobile-aprt-list-section desktop-hide">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="nav-top-path">
              <ul class="list-inline">
                <li class="list-inline-item">
                  Home
                  <span>&gt;</span>
                </li>
                <li class="list-inline-item">Melbourne - Northern Region</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!--mobile nav -->
      <div class="desktop-hide mobi-nav filter-mobi-nav">
        <div
          class="collapse navbar-collapse bg-inverse mobile-nav-wrap filter-mob-nav-wrap"
          id="filterCollapse"
        >
          <div class="container">
            <div class="top-mob-nav">
              <div class="top-nav-wrap">
                <div class="row">
                  <div class="col-6">
                    <div class="filrer-name-wrap">
                      <span>Search by filters</span>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="filter-close-wrap">
                      <i class="ti-close" id="mobile-filter-close"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="filer-option-wrap">
                <div class="row">
                  <div class="col-6 separate-col">
                    <div class="form-group">
                     <div class="filter-widget">
                      <!-- <button
                        class="btn dropdown-toggle location-svg-button before-svg flter-button filter-border-none-btn apartment-states"
                        type="button"
                        id="dropdownMenuButton"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <span>State</span>
                      </button> -->
                      <v-select :options="states" 
                            :clearable="false" 
                            label="State"
                             class="btn location-svg-button before-svg filter-border-none-btn"
                             v-model="filter.state"
                             @input="selectState(filter.state)"
                             placeholder="Select State"
                             ></v-select>
                    </div>
                    </div>
                  </div>
                  <div class="col-6 separate-col">
                    <div class="form-group">
                      <div class="dropdown filter-widget">
                       <v-select :options="suburbs" 
                            :clearable="false" 
                            label="Suburb"
                             class="btn location-svg-button before-svg filter-border-none-btn"
                             v-model="filter.suburbs"
                             placeholder="Select Suburb"
                             ></v-select>
                      
                      
                    </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <div class="dropdown filter-widget">
                        <label for="checkin" class="filter-widget-sublabel">Apartment Type</label>
                        <button
                          class="btn dropdown-toggle apart-type-svg-button before-svg flter-button apartment-type"
                          type="button"
                          id="dropdownMenuButton"
                          data-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <span>Apartment Type</span>
                        </button>
                        <div
                          class="dropdown-menu filter-widget-dropdown"
                          aria-labelledby="dropdownMenuButton"
                        >
                          <div class="filter-widget-inner filter-widget-inner-drop-list">
                            <a
                              class="dropdown-item Any"
                              href="#."
                              v-on:click="selectType('Any')"
                              >Any
                            </a>
                            <a
                              class="dropdown-item studio-apartments"
                              href="#.."
                              v-on:click="selectType('studio-apartments')"
                            >Studio Apartments</a>
                            <a
                              class="dropdown-item one-bed-room-apartments"
                              href="#.."
                              v-on:click="selectType('one-bed-room-apartments')"
                            >One Bedroom Apartments</a>
                            <a
                              class="dropdown-item two-bed-room-apartments"
                              href="#.."
                              v-on:click="selectType('two-bed-room-apartments')"
                            >Two Bedroom Apartments</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="checkin" class="filter-widget-sublabel">Check-in/Out</label>

                      <HotelDatePicker
                    format="DD/MM/YYYY"
                    :showYear="true"
                    :starting-date-value="filter.checkIn"
                            :ending-date-value="filter.checkOut"
                    @check-in-changed="setCheckinDate"
                    @check-out-changed="setCheckoutDate"
                  ></HotelDatePicker>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <div class="dropdown filter-widget">
                        <label for="checkin" class="filter-widget-sublabel">Guest Number</label>
                        <button
                          class="btn dropdown-toggle guest-button-svg before-svg flter-button"
                          type="button"
                          id="dropdownMenuButton"
                          data-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <span>Guest Number</span>
                        </button>
                        <div
                          class="dropdown-menu filter-widget-dropdown"
                          aria-labelledby="dropdownMenuButton"
                        >
                          <div class="filter-widget-inner">
                            <div class="row">
                              <div class="col-md-6 filter-widget-col">
                                <div class="form-group">
                                  <label for="min_occupants" class="filter-widget-sublabel">Adults</label>
                                  <div class="quantity">
                                    <input
                                  v-model="filter.adults"
                                  type="number"
                                  min="1"
                                  max="6"
                                  step="1"
                                  value="1"
                                />
                                <div class="quantity-nav">
                                  <div
                                    class="quantity-button quantity-up"
                                    v-on:click="qtyIncrease('adults', 1, 6)"
                                  >
                                    +
                                  </div>
                                  <div
                                    class="quantity-button quantity-down"
                                    v-on:click="qtyDecrease('adults', 1, 6)"
                                  >
                                    -
                                  </div>
                                </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 filter-widget-col">
                                <div class="form-group">
                                  <label for="max_occupants" class="filter-widget-sublabel">Children</label>
                                  <div class="quantity">
                                    <input
                                  type="number"
                                  v-model="filter.children"
                                  min="0"
                                  max="6"
                                  step="1"
                                  value="0"
                                />
                                <div class="quantity-nav">
                                  <div
                                    class="quantity-button quantity-up"
                                    v-on:click="qtyIncrease('children', 0, 6)"
                                  >
                                    +
                                  </div>
                                  <div
                                    class="quantity-button quantity-down"
                                    v-on:click="qtyDecrease('children', 0, 6)"
                                  >
                                    -
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
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="checkin" class="filter-widget-sublabel">Price Min/Max</label>
                      <div class="dropdown filter-widget">
                        <button
                          class="btn dropdown-toggle price-svg-button before-svg flter-button"
                          type="button"
                          id="dropdownMenuButton"
                          data-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <span>Price Min/Max</span>
                        </button>
                        <div
                          class="dropdown-menu filter-widget-dropdown"
                          aria-labelledby="dropdownMenuButton"
                        >
                          <div class="filter-widget-inner">
                            <div class="row">
                              <div class="col-md-6 filter-widget-col">
                                <div class="form-group">
                                  <label for="checkin" class="filter-widget-sublabel">Price Min</label>
                                   <v-select :options="options" :clearable="false" v-model="filter.price_min"></v-select>
                                </div>
                              </div>
                              <div class="col-md-6 filter-widget-col">
                                <div class="form-group">
                                  <label for="checkout" class="filter-widget-sublabel">Price Max</label>
                                  <v-select :options="options" :clearable="false" v-model="filter.price_max"></v-select>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- <div class="row">
                  <div class="col-12">
                    <div class="divider mobile-filter-divider"></div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-12">
                    <label for="checkin" class="filter-widget-sublabel">More Features</label>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <div class="form-check form-check-inline">
                        <input
                          type="checkbox"
                          id="inlineCheckbox1"
                          value="option1"
                          class="form-check-input"
                        />
                        <label
                          for="inlineCheckbox1"
                          class="form-check-label inputradio-check-lable"
                        >Passport Details</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input
                          type="checkbox"
                          id="inlineCheckbox2"
                          value="option2"
                          class="form-check-input"
                        />
                        <label
                          for="inlineCheckbox2"
                          class="form-check-label inputradio-check-lable"
                        >Driver’s License</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <div class="filter-widget">
                        <a class="btn clear-filter-btn form-control flter-button">Clear Filters</a>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
              <nav class="navbar navbar-expand-sm bg-light fixed-bottom">
                <div class="container-fluid">
                  <div class="container">
                    <div class="row">
                      <div class="col-12 p-0">
                        <div class="form-group">
                          <div class="filter-widget">
                            <a class="btn booking-btn">Search</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid mobile-filter-top-wrap-full">
        <div class="mobile-filter-top-wrap">
          <div class="container">
            <div class="row">
              <!-- <div class="col-8 p-0 filter-right-border">
                <div class="form-group has-search">
                  <span class="fa fa-search form-control-feedback"></span>
                  <input type="text" class="form-control" placeholder="Search" />
                </div>
              </div> -->
              <div class="col-12 p-0">
                <div class="form-group">
                  <div class="dropdown filter-widget">
                    <button
                      type="button"
                      id="filter-toggle"
                      data-toggle="collapse"
                      data-target="#.filterCollapse"
                      aria-controls="navbarCollapse"
                      aria-expanded="false"
                      aria-label="Toggle navigation"
                      class="btn flter-button filter-border-none-btn"
                    >
                      <i class="ti-layout-list-thumb"></i>
                      <span>Filters</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid mobile-apart-sort-sec">
        <div class="container">
          <div class="row">
            <div class="col-12 p-0">
              <div class="second-result-head">
                <p>Showing 1 - 6 of 18 total results</p>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <div class="divider"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12 p-0">
              <!-- <div class="mobile-sort-wrap">
                <ul class="list-inline">
                  <li class="list-inline-item your-entry">Sort by</li>
                  <li class="list-inline-item">
                    <div class="dropdown">
                      <button
                        class="btn dropdown-toggle sort-btn sort-mobile-btn"
                        type="button"
                        id="dropdownMenuButton"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >Default</button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#.">A-Z Apartment Price</a>
                        <a class="dropdown-item" href="#.">Z-A Apartment Price</a>
                        <a class="dropdown-item" href="#.">A-Z Apartment Name</a>
                        <a class="dropdown-item" href="#.">Z-A Apartment Name</a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="listing-result">
      <div class="container-fluid mobile-padding-0">
        <div class="container">
          <div class="row modile-hide">
            <div class="col-md-12">
              <div class="listing-result-head">
                <div class="first-result-head modile-hide">
                  <h3 class="bold-700" v-if="searchText !== ''">Results for {{searchText}}</h3>
                </div>
                <div class="second-result-head modile-hide">
                  <p>
                    Showing {{ currentPage * pageSize - pageSize + 1 }} -
                    {{ currentPage * pageSize }} of
                    {{ apartmentsList ? apartmentsList.length : 0 }} total
                    results
                  </p>
                </div>
              </div>
              <hr />
            </div>
          </div>
          <div class="sorting-top-wrap modile-hide">
            <div class="row">
              <div class="col-md-6">
                <!-- <div class="form-group form-inline order-select modile-hide">
                  <ul class="list-inline">
                    <li class="list-inline-item your-entry">Sort by</li>
                    <li class="list-inline-item">
                      <div class="dropdown">
                        <button
                          class="btn dropdown-toggle sort-btn"
                          type="button"
                          id="dropdownMenuButton"
                          data-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >Default</button>
                        <div
                          class="dropdown-menu top-filter-sort-button"
                          aria-labelledby="dropdownMenuButton top-filter-sort-button"
                        >
                          <a class="dropdown-item" href="#.">A-Z Apartment Price</a>
                          <a class="dropdown-item" href="#.">Z-A Apartment Price</a>
                          <a class="dropdown-item" href="#.">A-Z Apartment Name</a>
                          <a class="dropdown-item" href="#.">Z-A Apartment Name</a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div> -->
              </div>
              <div class="col-md-6">
                <div class="pagination-listing-wrap">
                  <nav aria-label="Page navigation example pagination-listing">
                    <ul class="pagination">
                      <template
                        v-if="apartmentsList"
                        v-for="i in Math.ceil(apartmentsList.length / pageSize)"
                      >
                        <li
                          class="page-item active"
                          v-if="i === currentPage"
                          @click="setCurrentPage(i)"
                        >
                          <a class="page-link" href="#.">{{ i }}</a>
                        </li>
                        <li class="page-item" @click="setCurrentPage(i)" v-else>
                          <a class="page-link" href="#.">{{ i }}</a>
                        </li>
                      </template>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
          <template v-for="(apartment, i) in apartmentsList">
            <div
              class="row"
              v-if="
                i >= (currentPage - 1) * pageSize && i < currentPage * pageSize
              "
              v-bind:key="i"
            >
              <div class="col-md-12 mobile-padding-0">
                <div class="listing-wrap">
                  <a :href="'./apartment/' + apartment.id + '?start=' + getFormatedDate(filter.checkIn) + '&end=' + 
                        getFormatedDate(filter.checkOut) + '&adults=' + filter.adults + '&children=' + filter.children">
                    <div class="row">
                      <div class="col-md-7 apartment-listing-widget-left-col">
                        <div class="listing-swipe-slider">
                          <div class="swipeslider">
                            <div class="swiper-container">
                              <div class="swiper-wrapper">
                                <div
                                  class="swiper-slide slide"
                                  v-for="(file, i) in apartment.files"
                                  v-bind:key="file.id + i"
                                  :style="{ backgroundImage: `url(${file.url})` }"
                                ></div>
                              </div>
                              <div class="swiper-button-prev"></div>
                              <div class="swiper-button-next"></div>
                            </div>
                          </div>
                          <div class="price-tag bold-700">
                            A${{ apartment.price }}
                            <sup>pw</sup>
                          </div>
                        </div>

                        <div class="bottom-desc-behind-wrap">
                          <h3 class="bold-700">{{ apartment.name }}</h3>
                          <p class="paraf">
                            <span class="ti-location-pin"></span>
                            {{ apartment.address }}
                          </p>
                        </div>

                        <div class="listing-bottom-icons-wrap">
                          <ul class="list-inline">
                            <li class="list-inline-item apart-type">{{ apartment.type.name }}</li>
                            <li class="list-inline-item apart-options">
                              <i class="option-bed"></i>
                              {{ apartment.beds }}
                            </li>
                            <li class="list-inline-item apart-options">
                              <i class="option-car"></i>
                              {{ apartment.parking_slots }}
                            </li>
                            <li class="list-inline-item apart-options">
                              <i class="option-bath-room"></i>
                              {{ apartment.bath_rooms }}
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-5 apartment-listing-widget-right-col modile-hide tab-view">
                        <a :href="'./apartment/' + apartment.id+ '?start=' + getFormatedDate(filter.checkIn) + '&end=' + 
                        getFormatedDate(filter.checkOut) + '&adults=' + filter.adults + '&children=' + filter.children">
                          <div class="facility-wrap">
                            <div class="row">
                              <div
                                class="col-md-4"
                                v-for="(option, i) in apartment.options"
                                v-bind:key="i"
                              >
                                <div :class="'facility icon '+ option.class_name"></div>
                                <div class="facility-name">
                                  <p>{{ option.name }}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </template>
          <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6">
              <div class="row pagination-listing-wrap">
                <nav
                  aria-label="Page navigation example pagination-listing "
                  id="bottom-pagination"
                >
                  <ul class="pagination">
                    <template v-for="i in Math.ceil(apartmentsList.length / pageSize)">
                      <li
                        class="page-item active"
                        v-if="i === currentPage"
                        @click="setCurrentPage(i)"
                      >
                        <a class="page-link" href="#.">{{ i }}</a>
                      </li>
                      <li class="page-item" @click="setCurrentPage(i)" v-else>
                        <a class="page-link" href="#.">{{ i }}</a>
                      </li>
                    </template>
                  </ul>
                </nav>
              </div>
              <div class="row desktop-hide">
                <div class="col-md-12">
                  <div class="list-bottom-count-wrap second-result-head">
                    <p>Showing 1 - 6 of 18 total results</p>
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
import { mapState, mapActions } from "vuex";
import moment from "moment";
import HotelDatePicker from "vue-hotel-datepicker";
import Swiper from "swiper";

export default {
  name: "apartments",
  data() {
    const today = new Date()
    let tomorrow = new Date()
    tomorrow.setDate(new Date().getDate()+1);

    return {
      slide: 0,
      sliding: null,
      pageSize: 10,
      currentPage: 1,
      states: [],
      suburbs: [],
      searchText: "",
      filter: {
        checkIn: today,
        checkOut: tomorrow,
        state: "",
        suburb: "",
        type: "",
        adults: 1,
        children: 0,
        price_min: 'Any',
        price_max: 'Any'
      },
      options: [
        'Any',
        '$50',
        '$100',
        '$150',
        '$200',
        '$250',
        '$300',
        '$350',
        '$400',
        '$450',
        '$500',
        '$550',
        '$600',
        '$650',
        '$700',
        '$750',
        '$800',
        '$850',
        '$900',
        '$950',
        '$1000',
        '$1050',
        '$1100',
        '$1150',
        '$1200',
        '$1250',
        '$1300',
        '$1350',
        '$1400',
        '$1450',
        '$1500'
      ]
    };
  },
  created() {
    this.getStates();
    if (this.$route.query.start) {
      var from = this.$route.query.start;
      var fromdate = moment(from, 'YYYY-MM-DD').toDate();
      this.filter.checkIn = fromdate;
    }
    if (this.$route.query.end) {
      var to = this.$route.query.end;
      var todate = moment(to, 'YYYY-MM-DD').toDate();
      this.filter.checkOut = todate;
    }
    
  },
  updated() {
    let swiper = new Swiper(".swiper-container", {
      effect: "fade",
      fadeEffect: {
        crossFade: true
      },
      loop: true,
      speed: 1000,
      centeredSlides: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      }
    });
  },
  mounted() {
    if (this.$route.query.type) {
        this.filter.type = this.$route.query.type;
        let text = $(".apartment-type-wrap .dropdown-item." + this.$route.query.type).text();
     
        $(".apartment-type").html("<span>" + text + "</span>");
    }
    if (this.$route.query.adults) {
      this.filter.adults = this.$route.query.adults;
    }
    if (this.$route.query.children) {
      this.filter.children = this.$route.query.children;
    }
    if (this.$route.query.price_min) {
      this.filter.price_min = this.$route.query.price_min;
    }
    if (this.$route.query.price_max) {
        this.filter.price_max = this.$route.query.price_max;
    }

    if (this.filter.checkIn != "" && this.filter.checkOut != "" && this.filter.adults != "") {
          this.getFilteredApartments(this.filter);
    }
  },
  methods: {
    qtyIncrease(type, min, max) {
      if (type == 'adults') {
        if (this.filter.adults < max) {
          this.filter.adults++;
        }
      } else if (type == 'children') {
        if (this.filter.children < max) {
          this.filter.children++;
        }
      }
    },
    qtyDecrease(type, min, max) {
      if (type == 'adults') {
        if (this.filter.adults > min) {
          this.filter.adults--;
        }
      } else if (type == 'children') {
        if (this.filter.children > min) {
          this.filter.children--;
        }
      }
    },
    setCheckinDate(newDate) {
      this.filter.checkIn = newDate;
    },
    setCheckoutDate(newDate) {
      this.filter.checkOut = newDate;
    },

    selectType(type) {
      this.filter.type = type;
    },
    selectSuburb(suburb) {
      this.filter.suburb = suburb;
      $(".apartment-suburb").html("<span>" + suburb + "</span>");
    },
    selectState(state) {
      this.filter.state = state;
      Vue.axios
        .get("/get-suburb?state=" + state)
        .then(res => {
          this.suburbs = res.data.data;
          $(".apartment-suburb").html("<span>Suburb</span>");
        })
        .catch(err => {
          console.log("---err----", err);
        });
    },
    getFormatedDate(date) {
     return moment(date).format('YYYY-MM-DD');
    },
    onSlideEnd(slide) {
      this.sliding = false;
    },
    onSlideStart(slide) {
      this.sliding = true;
    },
    onSlideEnd(slide) {
      this.sliding = false;
    },
    setCurrentPage(pageNo) {
      this.currentPage = pageNo;
    },
    submitFilter() {
      if (this.filter.state !== "" && this.filter.suburb !== "") {
        this.searchText = this.filter.state + " - " + this.filter.suburb;
      } else if (this.filter.type !== "") {
        let text = $(".apartment-type-wrap .dropdown-item." + this.filter.type).text();
        this.searchText = text;
      }
      this.getFilteredApartments(this.filter);
    },
    getStates() {
      Vue.axios
        .get("/get-states")
        .then(res => {
          this.states = res.data.data;
        })
        .catch(err => {
          console.log("---err----", err);
        });
    },
    slugify(text) {
      return text
        .toLowerCase()
        .replace(/[^\w ]+/g, "")
        .replace(/ +/g, "-");
    },
    ...mapActions("ratesAndAvailability", [
      "getApartmentsList",
      "getFilteredApartments"
    ])
  },
  computed: {
    ...mapState("ratesAndAvailability", ["apartmentsList", "isLoading"])
  },
  components: {
    HotelDatePicker
  }
};
</script>


<style>
.filter-widget-inner.filter-widget-inner-drop-list {
  max-height: 250px;
  overflow-y: auto;
}
</style>