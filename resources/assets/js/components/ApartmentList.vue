<template>
  <div>
    <div
      class="preloader"
      v-if="isLoading"
      :style="{
        position: 'fixed',
        height: '100%',
        width: '100%',
        top: 0,
        left: 0,
        opacity: 0.5,
        background: '#FFF',
        'z-index': 9999
      }"
    ></div>
    <section class="top-search-wrap padding-tb-60 modile-hide">
      <div class="container-fluid">
        <div class="row nav-top-path-wrap bottom-full-width-border">
          <div class="container">
            <div class="row">
              <div class="nav-top-path">
                <ul class="list-inline">
                  <li class="list-inline-item">
                    Home
                    <span> ></span>
                  </li>
                  <li class="list-inline-item">
                    Rates & Availability
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
                      <button
                        class="btn dropdown-toggle flter-button filter-border-none-btn"
                        type="button"
                        id="dropdownMenuButton"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i class="ti-location-pin"></i><span> City/Region</span>
                      </button>
                      <div
                        class="dropdown-menu filter-widget-dropdown"
                        aria-labelledby="dropdownMenuButton"
                      >
                        <div
                          class="filter-widget-inner filter-widget-inner-drop-list"
                        >
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#"
                            >Something else here</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 p-0 filter-left-border">
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
                        <i class="ti-location-pin"></i>
                        <span>Suburb</span>
                      </button>
                      <div
                        class="dropdown-menu filter-widget-dropdown"
                        aria-labelledby="dropdownMenuButton"
                      >
                        <div
                          class="filter-widget-inner filter-widget-inner-drop-list"
                        >
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#"
                            >Something else here</a
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
        <div class="row bottom-full-width-border filter-bottom-wrap">
          <div class="container">
            <div class="row">
              <div class="col p-0 filter-top-widget filter-left-border">
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
                      <i class="ti-location-pin"></i>
                      <span>Apartment Type</span>
                    </button>
                    <div
                      class="dropdown-menu filter-widget-dropdown"
                      aria-labelledby="dropdownMenuButton"
                    >
                      <div
                        class="filter-widget-inner filter-widget-inner-drop-list"
                      >
                        <a class="dropdown-item" href="#">Studio Apartment</a>
                        <a class="dropdown-item" href="#"
                          >One Bedroom Apartment</a
                        >
                        <a class="dropdown-item" href="#"
                          >Two Bedroom Apartment</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col p-0 filter-top-widget filter-left-border">
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
                              <label
                                for="checkin"
                                class="filter-widget-sublabel"
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
                              <label
                                for="checkout"
                                class="filter-widget-sublabel"
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

              <div class="col p-0 filter-top-widget filter-left-border">
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
                      <i class="ti-location-pin"></i><span> Occupants</span>
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
                                >Min. Occupants</label
                              >
                              <input
                                id="min_occupants"
                                type="number"
                                class="form-control asm-input"
                                placeholder="Check In"
                              />
                            </div>
                          </div>
                          <div class="col-md-6 filter-widget-col">
                            <div class="form-group">
                              <label
                                for="max_occupants"
                                class="filter-widget-sublabel"
                                >Max. Occupants</label
                              >
                              <input
                                id="max_occupants"
                                type="number"
                                class="form-control asm-input"
                                placeholder="Check In"
                              />
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
                      <i class="ti-location-pin"></i><span>Beds Min-Max</span>
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
                                for="checkin"
                                class="filter-widget-sublabel"
                                >Min. Bed</label
                              >
                              <select
                                class="form-control asm-input"
                                id="Min-beds"
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
                          <div class="col-md-6 filter-widget-col">
                            <div class="form-group">
                              <label
                                for="checkout"
                                class="filter-widget-sublabel"
                                >Max. Bed</label
                              >
                              <select
                                class="form-control asm-input"
                                id="Max-beds"
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
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
              <div class="col p-0 filter-top-widget filter-left-border">
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
                              <label
                                for="checkin"
                                class="filter-widget-sublabel"
                                >Price Min</label
                              >
                              <input
                                id="checkin"
                                type="text"
                                class="form-control asm-input"
                                placeholder="Check In"
                              />
                            </div>
                          </div>
                          <div class="col-md-6 filter-widget-col">
                            <div class="form-group">
                              <label
                                for="checkout"
                                class="filter-widget-sublabel"
                                >Price Max</label
                              >
                              <input
                                id="checkout"
                                type="text"
                                class="form-control asm-input"
                                placeholder="Check Out"
                              />
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
              </div> -->
              <div class="col p-0 filter-top-widget">
                <div class="form-group">
                  <div class="filter-widget">
                    <a
                      class="btn booking-btn filter-border-none-btn"
                      @click="submitFilter"
                      >Search</a
                    >
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
                      <div class="dropdown filter-widget">
                        <label for="checkin" class="filter-widget-sublabel"
                          >City/Region</label
                        >
                        <button
                          type="button"
                          id="dropdownMenuButton"
                          data-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                          class="btn dropdown-toggle form-control flter-button"
                        >
                          <i class="ti-location-pin"></i>
                          <span>Any</span>
                        </button>
                        <div
                          aria-labelledby="dropdownMenuButton"
                          class="dropdown-menu filter-widget-dropdown"
                        >
                          <div
                            class="filter-widget-inner filter-widget-inner-drop-list"
                          >
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item"
                              >Something else here</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 separate-col">
                    <div class="form-group">
                      <div class="dropdown filter-widget">
                        <label for="checkin" class="filter-widget-sublabel"
                          >Suburb</label
                        >
                        <button
                          type="button"
                          id="dropdownMenuButton"
                          data-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                          class="btn dropdown-toggle form-control flter-button"
                        >
                          <i class="ti-location-pin"></i>
                          <span>Any</span>
                        </button>
                        <div
                          aria-labelledby="dropdownMenuButton"
                          class="dropdown-menu filter-widget-dropdown"
                        >
                          <div
                            class="filter-widget-inner filter-widget-inner-drop-list"
                          >
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item"
                              >Something else here</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <div class="dropdown filter-widget">
                        <label for="checkin" class="filter-widget-sublabel"
                          >Apartment Type</label
                        >
                        <button
                          type="button"
                          id="dropdownMenuButton"
                          data-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                          class="btn dropdown-toggle form-control flter-button"
                        >
                          <i class="ti-location-pin"></i>
                          <span>Any</span>
                        </button>
                        <div
                          aria-labelledby="dropdownMenuButton"
                          class="dropdown-menu filter-widget-dropdown"
                        >
                          <div
                            class="filter-widget-inner filter-widget-inner-drop-list"
                          >
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item"
                              >Something else here</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-6 separate-col">
                    <div class="form-group">
                      <div class="dropdown filter-widget">
                        <label for="checkin" class="filter-widget-sublabel"
                          >Check-In</label
                        >
                        <div class="dropdown">
                          <button
                            class="btn dropdown-toggle form-control flter-button"
                            type="button"
                            id="dropdownMenuButton"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="ti-calendar"></i> Select
                          </button>
                          <div
                            class="dropdown-menu filter-widget-dropdown"
                            aria-labelledby="dropdownMenuButton"
                          >
                            <div class="filter-widget-inner">
                              <div class="row">
                                <div class="col-12">
                                  <div class="form-group">
                                    <label
                                      for="checkin"
                                      class="filter-widget-sublabel"
                                      >Check-In</label
                                    >
                                    <input
                                      data-date-format="mm-dd-yyyy"
                                      type="text"
                                      class="form-control datepicker asm-input date"
                                      placeholder="Check In"
                                    />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 separate-col">
                    <div class="form-group">
                      <div class="dropdown filter-widget">
                        <label for="checkin" class="filter-widget-sublabel"
                          >Check-Out</label
                        >
                        <div class="dropdown">
                          <button
                            class="btn dropdown-toggle form-control flter-button"
                            type="button"
                            id="dropdownMenuButton"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="ti-calendar"></i> Select
                          </button>
                          <div
                            class="dropdown-menu filter-widget-dropdown"
                            aria-labelledby="dropdownMenuButton"
                          >
                            <div class="filter-widget-inner">
                              <div class="row">
                                <div class="col-12">
                                  <div class="form-group">
                                    <label
                                      for="checkin"
                                      class="filter-widget-sublabel"
                                      >Check-Out</label
                                    >
                                    <input
                                      data-date-format="mm-dd-yyyy"
                                      type="text"
                                      class="form-control datepicker asm-input date"
                                      placeholder="Check In"
                                    />
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
                  <div class="col-6 separate-col">
                    <div class="form-group">
                      <div class="dropdown filter-widget">
                        <label for="checkin" class="filter-widget-sublabel"
                          >Adults</label
                        >
                        <div class="dropdown">
                          <button
                            class="btn dropdown-toggle form-control flter-button"
                            type="button"
                            id="dropdownMenuButton"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="ti-calendar"></i> Select
                          </button>
                          <div
                            aria-labelledby="dropdownMenuButton"
                            class="dropdown-menu filter-widget-dropdown"
                          >
                            <div
                              class="filter-widget-inner filter-widget-inner-drop-list"
                            >
                              <a href="#" class="dropdown-item">Action</a>
                              <a href="#" class="dropdown-item"
                                >Another action</a
                              >
                              <a href="#" class="dropdown-item"
                                >Something else here</a
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 separate-col">
                    <div class="form-group">
                      <div class="dropdown filter-widget">
                        <label for="checkin" class="filter-widget-sublabel"
                          >Childrens</label
                        >
                        <div class="dropdown">
                          <button
                            class="btn dropdown-toggle form-control flter-button"
                            type="button"
                            id="dropdownMenuButton"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="ti-calendar"></i> Select
                          </button>
                          <div
                            aria-labelledby="dropdownMenuButton"
                            class="dropdown-menu filter-widget-dropdown"
                          >
                            <div
                              class="filter-widget-inner filter-widget-inner-drop-list"
                            >
                              <a href="#" class="dropdown-item">Action</a>
                              <a href="#" class="dropdown-item"
                                >Another action</a
                              >
                              <a href="#" class="dropdown-item"
                                >Something else here</a
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6 separate-col">
                    <div class="form-group">
                      <div class="dropdown filter-widget">
                        <label for="checkin" class="filter-widget-sublabel"
                          >Beds Min.</label
                        >
                        <div class="dropdown">
                          <button
                            class="btn dropdown-toggle form-control flter-button"
                            type="button"
                            id="dropdownMenuButton"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="ti-calendar"></i> Select
                          </button>

                          <div
                            aria-labelledby="dropdownMenuButton"
                            class="dropdown-menu filter-widget-dropdown"
                          >
                            <div
                              class="filter-widget-inner filter-widget-inner-drop-list"
                            >
                              <a href="#" class="dropdown-item">Action</a>
                              <a href="#" class="dropdown-item"
                                >Another action</a
                              >
                              <a href="#" class="dropdown-item"
                                >Something else here</a
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 separate-col">
                    <div class="form-group">
                      <div class="dropdown filter-widget">
                        <label for="checkin" class="filter-widget-sublabel"
                          >Beds Max.</label
                        >
                        <div class="dropdown">
                          <button
                            class="btn dropdown-toggle form-control flter-button"
                            type="button"
                            id="dropdownMenuButton"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="ti-calendar"></i> Select
                          </button>

                          <div
                            aria-labelledby="dropdownMenuButton"
                            class="dropdown-menu filter-widget-dropdown"
                          >
                            <div
                              class="filter-widget-inner filter-widget-inner-drop-list"
                            >
                              <a href="#" class="dropdown-item">Action</a>
                              <a href="#" class="dropdown-item"
                                >Another action</a
                              >
                              <a href="#" class="dropdown-item"
                                >Something else here</a
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6 separate-col">
                    <div class="form-group">
                      <div class="dropdown filter-widget">
                        <label for="checkin" class="filter-widget-sublabel"
                          >Price Min.</label
                        >
                        <div class="dropdown">
                          <button
                            class="btn dropdown-toggle form-control flter-button"
                            type="button"
                            id="dropdownMenuButton"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="ti-calendar"></i> Select
                          </button>
                          <div
                            aria-labelledby="dropdownMenuButton"
                            class="dropdown-menu filter-widget-dropdown"
                          >
                            <div
                              class="filter-widget-inner filter-widget-inner-drop-list"
                            >
                              <a href="#" class="dropdown-item">Action</a>
                              <a href="#" class="dropdown-item"
                                >Another action</a
                              >
                              <a href="#" class="dropdown-item"
                                >Something else here</a
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 separate-col">
                    <div class="form-group">
                      <div class="dropdown filter-widget">
                        <label for="checkin" class="filter-widget-sublabel"
                          >Price Max.</label
                        >
                        <div class="dropdown">
                          <button
                            class="btn dropdown-toggle form-control flter-button"
                            type="button"
                            id="dropdownMenuButton"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="ti-calendar"></i> Select
                          </button>
                          <div
                            aria-labelledby="dropdownMenuButton"
                            class="dropdown-menu filter-widget-dropdown"
                          >
                            <div
                              class="filter-widget-inner filter-widget-inner-drop-list"
                            >
                              <a href="#" class="dropdown-item">Action</a>
                              <a href="#" class="dropdown-item"
                                >Another action</a
                              >
                              <a href="#" class="dropdown-item"
                                >Something else here</a
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-12">
                    <div class="divider"></div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-12">
                    <label for="checkin" class="filter-widget-sublabel"
                      >More Features</label
                    >
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
                          >Passport Details</label
                        >
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
                          >Driver’s License</label
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <div class="filter-widget">
                        <a
                          class="btn clear-filter-btn form-control flter-button"
                          >Clear Filters</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
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
              <div class="col-8 p-0 filter-right-border">
                <div class="form-group has-search">
                  <span class="fa fa-search form-control-feedback"></span>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search"
                  />
                </div>
              </div>
              <div class="col-4 p-0">
                <div class="form-group">
                  <div class="dropdown filter-widget">
                    <button
                      type="button"
                      id="filter-toggle"
                      data-toggle="collapse"
                      data-target="#filterCollapse"
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
              <div class="mobile-sort-wrap">
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
                      >
                        Default
                      </button>
                      <div
                        class="dropdown-menu"
                        aria-labelledby="dropdownMenuButton"
                      >
                        <a class="dropdown-item" href="#">A-Z Price</a>
                        <a class="dropdown-item" href="#">Z-A Price</a>
                        <a class="dropdown-item" href="#">A-Z Apartment Name</a>
                        <a class="dropdown-item" href="#">Z-A Apartment Name</a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="listing-result">
      <div class="container-fluid">
        <div class="container">
          <div class="row  modile-hide">
            <div class="col-md-12">
              <div class="listing-result-head">
                <div class="first-result-head  modile-hide">
                  <h3>Results for Melbourne - Northern Region</h3>
                </div>
                <div class="second-result-head  modile-hide">
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
                <div class="form-group form-inline order-select  modile-hide">
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
                        >
                          Default
                        </button>
                        <div
                          class="dropdown-menu"
                          aria-labelledby="dropdownMenuButton"
                        >
                          <a class="dropdown-item" href="#">A-Z Price</a>
                          <a class="dropdown-item" href="#">Z-A Price</a>
                          <a class="dropdown-item" href="#"
                            >A-Z Apartment Name</a
                          >
                          <a class="dropdown-item" href="#"
                            >Z-A Apartment Name</a
                          >
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
                      <template
                        v-if="apartmentsList"
                        v-for="i in Math.ceil(apartmentsList.length / pageSize)"
                      >
                        <li
                          class="page-item active"
                          v-if="i === currentPage"
                          @click="setCurrentPage(i)"
                        >
                          <a class="page-link" href="#">{{ i }}</a>
                        </li>
                        <li class="page-item" @click="setCurrentPage(i)" v-else>
                          <a class="page-link" href="#">{{ i }}</a>
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
              <div class="col-md-12">
                <div class="listing-wrap">
                  <div class="row">
                    <div class="col-md-7 apartment-listing-widget-left-col">
                      <div class="listing-swipe-slider">
                        <div class="swipeslider">
                          <div class="swiper-container">
                            <div class="swiper-wrapper">
                              <div
                                class="swiper-slide slide"
                                v-bind:style="{ color: 'red' }"
                                v-for="(file, i) in apartment.files"
                                v-bind:key="file.id + i"
                                :style="{ backgroundImage: `url(${file.url})` }"
                              ></div>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                          </div>
                        </div>
                        <div class="price-tag">A$305<sup>pw</sup></div>
                        <div class="apartment-owner">
                          <div class="owner-icon">
                            <i class="ti ti-user"></i>
                          </div>
                          Mathew cahill
                        </div>
                      </div>
                      <a :href="'./apartment/' + apartment.id">
                        <div class="bottom-desc-behind-wrap">
                          <h3>{{ apartment.name }}</h3>
                          <p>{{ apartment.address }}</p>
                        </div>
                      </a>
                      <div class="listing-bottom-icons-wrap">
                        <ul class="list-inline">
                          <li class="list-inline-item apart-type">
                            {{ apartment.type.tag }}
                          </li>
                          <li class="list-inline-item apart-options">
                            <i class="ti-envelope"></i> {{ apartment.beds }}
                          </li>
                          <li class="list-inline-item apart-options">
                            <i class="ti-car"></i>
                            {{ apartment.parking_slots }}
                          </li>
                          <li class="list-inline-item apart-options">
                            <i class="ti-envelope"></i> 1
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-5  apartment-listing-widget-right-col">
                      <div class="facility-wrap">
                        <div class="row">
                          <div
                            class="col-md-4"
                            v-for="(option, i) in apartment.options"
                            v-bind:key="i"
                          >
                            <div class="facility">
                              <i class="ti-briefcase"></i>
                            </div>
                            <div class="facility-name">
                              <p>{{ option.name }}</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
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
                    <template
                      v-for="i in Math.ceil(apartmentsList.length / pageSize)"
                    >
                      <li
                        class="page-item active"
                        v-if="i === currentPage"
                        @click="setCurrentPage(i)"
                      >
                        <a class="page-link" href="#">{{ i }}</a>
                      </li>
                      <li class="page-item" @click="setCurrentPage(i)" v-else>
                        <a class="page-link" href="#">{{ i }}</a>
                      </li>
                    </template>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
import { mapState, mapActions } from 'vuex';
import Datepicker from 'vuejs-datepicker';
export default {
  name: 'apartments',
  data() {
    return {
      slide: 0,
      sliding: null,
      pageSize: 6,
      currentPage: 1,
      filter: {
        checkIn: '',
        checkOut: ''
      }
    };
  },
  mounted() {
    this.getApartmentsList();
  },
  methods: {
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
      this.getFilteredApartments(this.filter);
    },
    ...mapActions('ratesAndAvailability', [
      'getApartmentsList',
      'getFilteredApartments'
    ])
  },
  computed: {
    ...mapState('ratesAndAvailability', ['apartmentsList', 'isLoading'])
  },
  components: {
    Datepicker
  }
};
</script>
