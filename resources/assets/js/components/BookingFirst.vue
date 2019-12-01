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
                    <div class="panel-group booking-panel" id="accordion">
                      <div class="panel panel-default active">
                        <div
                          class="panel-heading accordion-toggle"
                          data-toggle="collapse"
                          data-parent="#accordion"
                          href="#collapseOne"
                          aria-expanded="true"
                        >
                          <h4 class="panel-title">
                            <a
                              class="accordion-toggle faq-content-head active"
                            >Occupant 1* (Primary)</a>
                            <i class="indicator pull-right ti-angle-up"></i>
                          </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse in collapse show">
                          <div class="panel-body booking-section-1">
                            <div class="booking-section-wrap1">
                              <div class="row">
                                <div class="col-md-6 ">
                                  <div class="form-group">
                                    <div class="dropdown filter-widget">
                                      <label
                                        for="checkin"
                                        class="filter-widget-sublabel"
                                      >First Name*</label>
                                      <input class="form-control flter-button" type="text" />
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="dropdown filter-widget">
                                      <label
                                        for="checkin"
                                        class="filter-widget-sublabel"
                                      >Date of Birth*</label>
                                      <datepicker class="form-control flter-button"></datepicker>
                                      <!-- <input class="form-control flter-button" type="email"> -->
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="dropdown filter-widget">
                                      <label for="checkin" class="filter-widget-sublabel">Telephone*</label>
                                      <input class="form-control flter-button" type="email" />
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <div class="dropdown filter-widget">
                                      <label for="checkin" class="filter-widget-sublabel">Last Name*</label>
                                      <input class="form-control flter-button" type="text" />
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="dropdown filter-widget">
                                      <label for="checkin" class="filter-widget-sublabel">Email*</label>
                                      <input class="form-control flter-button" type="text" />
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="dropdown filter-widget">
                                      <label for="checkin" class="filter-widget-sublabel">Mobile*</label>
                                      <input
                                        class="form-control flter-button"
                                        id="numbersonly"
                                        type="text"
                                      />
                                    </div>
                                  </div>
                                </div>

                                <div class="col-md-12">
                                  <div class="form-group">
                                    <div class="dropdown filter-widget">
                                      <label
                                        for="checkin"
                                        class="filter-widget-sublabel"
                                      >Usual / Personal Address*</label>
                                      <input class="form-control flter-button" type="text" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="booking-section-wrap2">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <div class="form-check form-check-inline">
                                      <input
                                        class="form-check-input worker-info-radio"
                                        type="radio"
                                        name="inlineRadioOptions"
                                        id="inlineRadio1"
                                        value="option1"
                                        checked="checked"
                                      />
                                      <label
                                        class="form-check-label radio-label-work inputradio-check-lable"
                                        for="inlineRadio1"
                                      >I’m a Worker</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input
                                        class="form-check-input student-info-radio"
                                        type="radio"
                                        name="inlineRadioOptions"
                                        id="inlineRadio2"
                                        value="option2"
                                      />
                                      <label
                                        class="form-check-label radio-label-student inputradio-check-lable"
                                        for="inlineRadio2"
                                      >I’m a Student</label>
                                    </div>
                                  </div>
                                </div>

                                <div class="col-md-12">
                                  <div class="worker-info">
                                    <div class="worker-info-head-wrap">
                                      <div class="worker-info-head booking-head-tittle">
                                        <h4>Worker Info</h4>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <div class="dropdown filter-widget">
                                            <label
                                              for="checkin"
                                              class="filter-widget-sublabel"
                                            >Usual / Personal Address*</label>
                                            <input class="form-control flter-button" type="text" />
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <div class="dropdown filter-widget">
                                            <label
                                              for="checkin"
                                              class="filter-widget-sublabel"
                                            >Department</label>
                                            <input class="form-control flter-button" type="text" />
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <div class="dropdown filter-widget">
                                            <label
                                              for="checkin"
                                              class="filter-widget-sublabel"
                                            >Work Phone Number</label>
                                            <input class="form-control flter-button" type="text" />
                                          </div>
                                        </div>
                                      </div>

                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <div class="dropdown filter-widget">
                                            <label
                                              for="checkin"
                                              class="filter-widget-sublabel"
                                            >Work Address</label>
                                            <input class="form-control flter-button" type="text" />
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="student-info">
                                    <div class="worker-info-head-wrap">
                                      <div class="worker-info-head booking-head-tittle">
                                        <h4>Student Info</h4>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <div class="dropdown filter-widget">
                                            <label
                                              for="checkin"
                                              class="filter-widget-sublabel"
                                            >Usual / Personal Address*</label>
                                            <input class="form-control flter-button" type="text" />
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <div class="dropdown filter-widget">
                                            <label
                                              for="checkin"
                                              class="filter-widget-sublabel"
                                            >Department</label>
                                            <input class="form-control flter-button" type="text" />
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <div class="dropdown filter-widget">
                                            <label
                                              for="checkin"
                                              class="filter-widget-sublabel"
                                            >Work Phone Number</label>
                                            <input class="form-control flter-button" type="text" />
                                          </div>
                                        </div>
                                      </div>

                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <div class="dropdown filter-widget">
                                            <label
                                              for="checkin"
                                              class="filter-widget-sublabel"
                                            >Work Address</label>
                                            <input class="form-control flter-button" type="text" />
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="booking-section-wrap3">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="worker-info-head-wrap">
                                    <div class="worker-info-head booking-head-tittle">
                                      <h4>Passport / Driver’s License / Australian Visa</h4>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <div class="form-check form-check-inline">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        id="inlineCheckbox1"
                                        value="option1"
                                      />
                                      <label
                                        class="form-check-label inputradio-check-lable"
                                        for="inlineCheckbox1"
                                      >Passport Details</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        id="inlineCheckbox2"
                                        value="option2"
                                      />
                                      <label
                                        class="form-check-label inputradio-check-lable"
                                        for="inlineCheckbox2"
                                      >Driver’s License</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        id="inlineCheckbox2"
                                        value="option2"
                                      />
                                      <label
                                        class="form-check-label inputradio-check-lable"
                                        for="inlineCheckbox2"
                                      >Australian Visa</label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <div class="dropdown filter-widget">
                                      <label
                                        for="checkin"
                                        class="filter-widget-sublabel"
                                      >Passport Number*</label>
                                      <input class="form-control flter-button" type="text" />
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <div class="dropdown filter-widget">
                                      <label
                                        for="checkin"
                                        class="filter-widget-sublabel"
                                      >Passport Country of Issue*</label>
                                      <input class="form-control flter-button" type="text" />
                                    </div>
                                  </div>
                                </div>

                                <div class="col-md-12">
                                  <div class="form-group">
                                    <div class="dropdown filter-widget">
                                      <label
                                        for="checkin"
                                        class="filter-widget-sublabel important-lable"
                                      >(Max file size: 3MB - File accept: jpeg, png)</label>
                                      
                                      
                                        <div class="input-group input-file booking-upload" name="Fichier1">
                                          <input
                                            type="text"
                                            class="form-control upload-val-input"
                                            placeholder="Choose a file..."
                                          />
                                          <span class="input-group-btn">
                                            <button
                                              class="btn btn-default btn-choose "
                                              type="button"
                                            >Upload</button>
                                          </span>
                                        </div>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="booking-section-wrap2">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="worker-info-head-wrap">
                                    <div class="worker-info-head booking-head-tittle">
                                      <h4>Next of Kin</h4>
                                    </div>
                                  </div>
                                </div>

                                <div class="col-md-6">
                                  <div class="form-group">
                                    <div class="dropdown filter-widget">
                                      <label
                                        for="checkin"
                                        class="filter-widget-sublabel"
                                      >Name of Next of Kin*</label>
                                      <input class="form-control flter-button" type="text" />
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="dropdown filter-widget">
                                      <label for="checkin" class="filter-widget-sublabel">Telephone*</label>
                                      <input class="form-control flter-button" type="text" />
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <div class="dropdown filter-widget">
                                      <label
                                        for="checkin"
                                        class="filter-widget-sublabel"
                                      >Relationship to You*</label>
                                      <input class="form-control flter-button" type="text" />
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="dropdown filter-widget">
                                      <label for="checkin" class="filter-widget-sublabel">Mobile*</label>
                                      <input
                                        class="form-control flter-button"
                                        id="numbersonly"
                                        type="text"
                                      />
                                    </div>
                                  </div>
                                </div>

                                <div class="col-md-12">
                                  <div class="form-group">
                                    <div class="dropdown filter-widget">
                                      <label
                                        for="checkin"
                                        class="filter-widget-sublabel"
                                      >Email Address (NOT compulsory)</label>
                                      <input class="form-control flter-button" type="text" />
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <div class="dropdown filter-widget">
                                      <label for="checkin" class="filter-widget-sublabel">Address*</label>
                                      <input class="form-control flter-button" type="text" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!--second panel group-->

                    <div class="panel-group booking-panel" id="accordion">
                      <div class="panel panel-default">
                        <div
                          class="panel-heading accordion-toggle collapsed"
                          data-toggle="collapse"
                          data-parent="#accordion"
                          href="#collapsetwo"
                          aria-expanded="true"
                        >
                          <h4 class="panel-title">
                            <a class="accordion-toggle faq-content-head">Occupant 2*</a>
                            <i class="indicator pull-right ti-angle-up"></i>
                          </h4>
                        </div>
                        <div id="collapsetwo" class="panel-collapse in collapse">
                          <div class="panel-body booking-section-1">
                            <div class="booking-section-wrap1">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <div class="dropdown filter-widget">
                                      <label
                                        for="checkin"
                                        class="filter-widget-sublabel"
                                      >First Name*</label>
                                      <input class="form-control flter-button" type="text" />
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="dropdown filter-widget">
                                      <label
                                        for="checkin"
                                        class="filter-widget-sublabel"
                                      >Date of Birth*</label>
                                      <input class="form-control flter-button" type="text" />
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="dropdown filter-widget">
                                      <label for="checkin" class="filter-widget-sublabel">Telephone*</label>
                                      <input class="form-control flter-button" type="tel" />
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <div class="dropdown filter-widget">
                                      <label for="checkin" class="filter-widget-sublabel">Last Name*</label>
                                      <input class="form-control flter-button" type="text" />
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="dropdown filter-widget">
                                      <label for="checkin" class="filter-widget-sublabel">Email*</label>
                                      <input class="form-control flter-button" type="text" />
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="dropdown filter-widget">
                                      <label for="checkin" class="filter-widget-sublabel">Mobile*</label>
                                      <input
                                        class="form-control flter-button"
                                        id="numbersonly"
                                        type="tel"
                                      />
                                    </div>
                                  </div>
                                </div>

                                <div class="col-md-12">
                                  <div class="form-group">
                                    <div class="dropdown filter-widget">
                                      <label
                                        for="checkin"
                                        class="filter-widget-sublabel"
                                      >Usual / Personal Address*</label>
                                      <input class="form-control flter-button" type="text" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="booking-section-wrap2">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <div class="form-check form-check-inline">
                                      <input
                                        class="form-check-input worker-info-radio"
                                        type="radio"
                                        name="inlineRadioOptions"
                                        id="inlineRadio1"
                                        value="option1"
                                        checked="checked"
                                      />
                                      <label
                                        class="form-check-label inputradio-check-lable"
                                        for="inlineRadio1"
                                      >I’m a Worker</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input
                                        class="form-check-input student-info-radio"
                                        type="radio"
                                        name="inlineRadioOptions"
                                        id="inlineRadio2"
                                        value="option2"
                                      />
                                      <label
                                        class="form-check-label inputradio-check-lable"
                                        for="inlineRadio2"
                                      >I’m a Student</label>
                                    </div>
                                  </div>
                                </div>

                                <div class="col-md-12">
                                  <div class="worker-info">
                                    <div class="worker-info-head-wrap">
                                      <div class="worker-info-head booking-head-tittle">
                                        <h4>Worker Info</h4>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <div class="dropdown filter-widget">
                                            <label
                                              for="checkin"
                                              class="filter-widget-sublabel"
                                            >Usual / Personal Address*</label>
                                            <input class="form-control flter-button" type="text" />
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <div class="dropdown filter-widget">
                                            <label
                                              for="checkin"
                                              class="filter-widget-sublabel"
                                            >Department</label>
                                            <input class="form-control flter-button" type="text" />
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <div class="dropdown filter-widget">
                                            <label
                                              for="checkin"
                                              class="filter-widget-sublabel"
                                            >Work Phone Number</label>
                                            <input class="form-control flter-button" type="text" />
                                          </div>
                                        </div>
                                      </div>

                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <div class="dropdown filter-widget">
                                            <label
                                              for="checkin"
                                              class="filter-widget-sublabel"
                                            >Work Address</label>
                                            <input class="form-control flter-button" type="text" />
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="student-info">
                                    <div class="worker-info-head-wrap">
                                      <div class="worker-info-head booking-head-tittle">
                                        <h4>Student Info</h4>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <div class="dropdown filter-widget">
                                            <label
                                              for="checkin"
                                              class="filter-widget-sublabel"
                                            >Usual / Personal Address*</label>
                                            <input class="form-control flter-button" type="text" />
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <div class="dropdown filter-widget">
                                            <label
                                              for="checkin"
                                              class="filter-widget-sublabel"
                                            >Department</label>
                                            <input class="form-control flter-button" type="text" />
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <div class="dropdown filter-widget">
                                            <label
                                              for="checkin"
                                              class="filter-widget-sublabel"
                                            >Work Phone Number</label>
                                            <input class="form-control flter-button" type="text" />
                                          </div>
                                        </div>
                                      </div>

                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <div class="dropdown filter-widget">
                                            <label
                                              for="checkin"
                                              class="filter-widget-sublabel"
                                            >Work Address</label>
                                            <input class="form-control flter-button" type="text" />
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

                    <!---third panel group-->

                    <div class="panel-group booking-panel" id="accordion">
                      <div class="panel panel-default">
                        <div
                          class="panel-heading accordion-toggle collapsed"
                          data-toggle="collapse"
                          data-parent="#accordion"
                          href="#collapsethird"
                          aria-expanded="true"
                        >
                          <h4 class="panel-title">
                            <a class="accordion-toggle faq-content-head">Occupant 3 (Child)*</a>
                            <i class="indicator pull-right ti-angle-up"></i>
                          </h4>
                        </div>
                        <div id="collapsethird" class="panel-collapse in collapse">
                          <div class="panel-body booking-section-1">
                            <div class="booking-section-wrap1">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <div class="dropdown filter-widget">
                                      <label
                                        for="checkin"
                                        class="filter-widget-sublabel"
                                      >First Name*</label>
                                      <input class="form-control flter-button" type="text" />
                                    </div>
                                  </div>
                                  <div class="dateofbirth-wrap">
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <div class="dropdown filter-widget">
                                            <label
                                              for="checkin"
                                              class="filter-widget-sublabel"
                                            >Date of Birth*</label>
                                            <input class="form-control flter-button" type="text" />
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <div class="dropdown filter-widget">
                                            <label for="checkin" class="filter-widget-sublabel">Age</label>
                                            <input class="form-control flter-button" type="text" />
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <div class="dropdown filter-widget">
                                      <label for="checkin" class="filter-widget-sublabel">Last Name*</label>
                                      <input class="form-control flter-button" type="text" />
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
                      <div class="col-md-12">
                        <div class="form-group">
                          <div class="filter-widget">
                            <a class="btn booking-btn" v-on:click="nextStep">Proceed to next step</a>
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
                      <img src="images/booking/Image-35.png" width="100%" />
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
  name: "BookingFirst",
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
