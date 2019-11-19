<template>
    <div>
        <section class="banner-content background-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-table">
                            <div class="d-table-cell align-middle">
                                <div class="banner_content">
                                    <h1 class="banner-text-content">
                    <span class="slider-green-text">Up to 40% Cheaper</span> than booking a
                    hotel or serviced apartment.
                  </h1>
                                    <div class="banner-small-text-box">
                                        <div class="banner-text-box border-right-white">
                                            <h3 class="sub-heading-white-normal">Studios</h3>
                                            <h4 class="sub-heading-01">
                        from
                        <span class="bold-700">$620</span> per week
                      </h4>
                                        </div>

                                        <span class="devide mobile-only">|</span>
                                        <div class="banner-text-box border-right-white">
                                            <h3 class="sub-heading-white-normal">1 Bedrooms</h3>
                                            <h4 class="sub-heading-01">
                        from
                        <span class="bold-700">$699</span> per week
                      </h4>
                                        </div>
                                        <span class="devide mobile-only">|</span>
                                        <div class="banner-text-box">
                                            <h3 class="sub-heading-white-normal">2 Bedrooms</h3>
                                            <h4 class="sub-heading-01">
                        from
                        <span class="bold-700">$965</span> per week
                      </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="booking-form-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <form>
                                <div class="desktop-home-filter mobile-only modile-hide">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ti-calendar"></i> Check-In/Out
                                                    </button>
                                                    <div class="dropdown-menu filter-widget-dropdown" aria-labelledby="dropdownMenuButton">
                                                        <div class="filter-widget-inner">
                                                            <div class="row">
                                                                <div class="col-md-6 filter-widget-col">
                                                                    <div class="form-group">
                                                                        <label for="checkin" class="filter-widget-sublabel">Check-In</label>
                                                                        <input data-date-format="mm-dd-yyyy" type="text" class="form-control datepicker asm-input date" placeholder="Check In" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 filter-widget-col">
                                                                    <div class="form-group">
                                                                        <label for="checkout" class="filter-widget-sublabel">Check-Out</label>

                                                                        <input data-date-format="mm-dd-yyyy" type="text" class="form-control datepicker asm-input date" placeholder="Check Out" />

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group">
                                                <div class="dropdown">
                                                    <button type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn dropdown-toggle">
                                                        <i class="ti-user"></i> Tenants
                                                    </button>
                                                    <div aria-labelledby="dropdownMenuButton" class="dropdown-menu filter-widget-dropdown" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
                                                        <div class="filter-widget-inner">
                                                            <div class="row">
                                                                <div class="col-md-6 filter-widget-col">
                                                                    <div class="form-group">
                                                                        <label for="checkin" class="filter-widget-sublabel">Adults</label>
                                                                        <select id="Adults" class="form-control asm-input">
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
                                                                        <select id="Children" class="form-control asm-input">
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

                                        <div class="col">
                                            <div class="form-group">
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ti-calendar"></i> Beds: Min/Max
                                                    </button>

                                                    <div class="dropdown-menu filter-widget-dropdown" aria-labelledby="dropdownMenuButton">
                                                        <div class="filter-widget-inner">
                                                            <div class="row">
                                                                <div class="col-md-6 filter-widget-col">
                                                                    <div class="form-group">
                                                                        <label for="checkin" class="filter-widget-sublabel">Beds:Min</label>
                                                                        <input id="checkin" type="text" class="form-control asm-input" placeholder="Beds:Min" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 filter-widget-col">
                                                                    <div class="form-group">
                                                                        <label for="checkout" class="filter-widget-sublabel">Beds:Max</label>
                                                                        <input id="checkout" type="text" class="form-control asm-input" placeholder="Beds:Max" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ti-money"></i>Price: Min/Max
                                                    </button>

                                                    <div class="dropdown-menu filter-widget-dropdown" aria-labelledby="dropdownMenuButton">
                                                        <div class="filter-widget-inner">
                                                            <div class="row">
                                                                <div class="col-md-6 filter-widget-col">
                                                                    <div class="form-group">
                                                                        <label for="checkin" class="filter-widget-sublabel">Price:Min</label>
                                                                        <input id="checkin" type="text" class="form-control asm-input" placeholder="Price:Min" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 filter-widget-col">
                                                                    <div class="form-group">
                                                                        <label for="checkout" class="filter-widget-sublabel">Price:Max</label>
                                                                        <input id="checkout" type="text" class="form-control asm-input" placeholder="Price:Max" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group">
                                                <a class="btn booking-btn">Search</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mobile-home-filter mobile-only">
                                    <div class="row">
                                        <div class="col-6 col-sm-3 col-xs-3 p-0">
                                            <div class="form-group">
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ti-calendar"></i> Check-In/Out
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <div class="datepicker-box">
                                                            <div class="filter-widget-inner">
                                                                <div class="row">
                                                                    <div class="col-md-6 filter-widget-col">
                                                                        <div class="form-group">
                                                                            <label for="checkin" class="filter-widget-sublabel">Check-In</label>
                                                                            <input data-date-format="mm-dd-yyyy" type="text" class="form-control datepicker asm-input date" placeholder="Check In" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 filter-widget-col">
                                                                        <div class="form-group">
                                                                            <label for="checkout" class="filter-widget-sublabel">Check-Out</label>

                                                                            <input data-date-format="mm-dd-yyyy" type="text" class="form-control datepicker asm-input date" placeholder="Check Out" />

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 col-xs-3 p-0">
                                            <div class="form-group">
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ti-calendar"></i> Tenants
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <div class="datepicker-box">
                                                            <div class="filter-widget-inner">
                                                                <div class="row">
                                                                    <div class="col-md-6 filter-widget-col">
                                                                        <div class="form-group">
                                                                            <label for="checkin" class="filter-widget-sublabel">Adults</label>
                                                                            <select id="Adults" class="form-control asm-input">
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
                                                                            <select id="Children" class="form-control asm-input">
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
                                        </div>
                                        <div class="col-6 col-sm-3 col-xs-3 p-0">
                                            <div class="form-group">
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ti-calendar"></i> Beds: Min/Max
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <div class="datepicker-box">
                                                            <div class="filter-widget-inner">
                                                                <div class="row">
                                                                    <div class="col-md-6 filter-widget-col">
                                                                        <div class="form-group">
                                                                            <label for="checkin" class="filter-widget-sublabel">Beds:Min</label>
                                                                            <input id="checkin" type="text" class="form-control asm-input" placeholder="Beds:Min" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 filter-widget-col">
                                                                        <div class="form-group">
                                                                            <label for="checkout" class="filter-widget-sublabel">Beds:Max</label>
                                                                            <input id="checkout" type="text" class="form-control asm-input" placeholder="Beds:Max" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6 col-sm-3 col-xs-3 p-0">
                                            <div class="form-group">
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ti-calendar"></i> Price: Min/Max
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <div class="datepicker-box">
                                                            <div class="filter-widget-inner">
                                                                <div class="row">
                                                                    <div class="col-md-6 filter-widget-col">
                                                                        <div class="form-group">
                                                                            <label for="checkin" class="filter-widget-sublabel">Price:Min</label>
                                                                            <input id="checkin" type="text" class="form-control asm-input" placeholder="Price:Min" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 filter-widget-col">
                                                                        <div class="form-group">
                                                                            <label for="checkout" class="filter-widget-sublabel">Price:Max</label>
                                                                            <input id="checkout" type="text" class="form-control asm-input" placeholder="Price:Max" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12 col-xs-12 p-0">
                                            <div class="form-group">
                                                <div class="filter-widget">
                                                    <a class="btn booking-btn filter-border-none-btn">Search</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <section class="welcome-paraf-box padding-tb-60 background-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content-box text-center">
                            <h2 class="main-heading">Welcome to Apartment Stays Melbourne.</h2>
                            <div class="welcome-para">
                                <div class="welcome-para1">
                                    <p class="paraf">
                                        We offer quality fully furnished, centrally located, secure and affordable apartments for medium or long term stays in Melbourne.
                                    </p>
                                </div>
                                <div class="welcome-para2">
                                    <p class="paraf">
                                        Our apartments are at least 50% larger compared to serviced apartments and hotels and offer residential and corporate living solutions with weekly savings of hundreds of dollars.
                                    </p>
                                </div>
                                <div class="welcome-para3">
                                    <p class="paraf">
                                        For the discerning international student who is seeking style and space our apartments offer everything a student apartment doesn’t. Our apartments are two to three times larger than a typical student apartment, stylishly appointed with everything you will need to make you feel like you have never left home.
                                    </p>
                                    <div class="expand-para collapse" id="para-expand">
                                        <p class="paraf">
                                            For the discerning international student who is seeking style Our apartments are situated in the lively CBD and dynamic suburbs of South Yarra and Richmond.
                                        </p>
                                        <p class="paraf">
                                            All of the apartments are within 200 metres of a tram and or train stop and in close proximity to other public transport, a range of major shopping precincts and multiple dining and entertainment choices in the pulsating heart of Melbourne’s cosmopolitan districts.
                                        </p>
                                        <p>
                                            Apartment Stays Melbourne provides a number of different furnished apartment configurations to suit all needs. Studios, One and Two Bedrooms and are therefore ideally suited for the business traveller, academics, students, professionals, long term travellers, families and others simply in the need for medium to long term accommodation.
                                        </p>
                                        <p>
                                            We offer a variety of solutions to cater for differing needs. Building quality, apartment quality, size, apartment amenities and building facilities all determine the category we attribute to each apartment.
                                        </p>
                                        <p>
                                            To help you compare our apartments and choose the one most suitable for your stay, we have categorized each into the following three classes:
                                            <b>Business</b>,
                                            <b>Premium</b>,
                                            <b>Superior</b>
                                        </p>
                                    </div>
                                    <a class="paraf read-more-link" href="#" data-toggle="collapse" data-target="#para-expand">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="aprtment-details background-img padding-tb-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="content-box">
                            <h2 class="main-heading text-white width-80 mobile-width-100">Why do people choose to book our apartments?</h2>
                            <p class="paraf text-white width-80 mobile-width-100">
                                Our apartments are up to
                                <span class="text-green">50%</span> larger than hotel rooms or services apartments
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="content-img">
                            <img class="modile-hide" src="images/compare.png" width="100%" />
                            <img class="mobile-only mobile-img" src="images/mobile-compare.png" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="typical-apartment-section background-img padding-tb-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="main-heading">Our Typical Apartments</h2>
                    </div>
                </div>
                <div class="row apartment-type-row">
                    <div class="col-md-4">
                        <div class="apartment-box">
                            <a href="/studio-aprt">
                                <div class="aprtment-img">
                                    <img src="images/aptment-01.png" />

                                    <a href="#" class="icon" title="User Profile"></a>
                                </div>
                                <div class="apartment-text text-center">
                                    <h3 class="sub-heading">Studio Apartments</h3>
                                    <p class="paraf-small">Starting from $620pw</p>
                                </div>
                            </a>
                        </div>
                        <hr class="typcl-hr" />
                    </div>
                    <div class="col-md-4">
                        <div class="apartment-box">
                            <a href="/one-bed-aprt">
                                <div class="aprtment-img">
                                    <img src="images/aptment-02.png" />
                                </div>
                                <div class="apartment-text text-center">
                                    <h3 class="sub-heading">One Bedroom Apartments</h3>
                                    <p class="paraf-small">Starting from $699pw</p>
                                </div>
                            </a>
                        </div>
                        <hr class="typcl-hr" />
                    </div>
                    <div class="col-md-4">
                        <div class="apartment-box">
                            <a href="/two-bed-aprt">
                                <div class="aprtment-img">
                                    <img src="images/aptment-01.png" />
                                </div>
                                <div class="apartment-text text-center">
                                    <h3 class="sub-heading">Two Bedroom Apartments</h3>
                                    <p class="paraf-small">Starting from $965pw</p>
                                </div>
                            </a>
                        </div>
                        <hr class="typcl-hr" />
                    </div>
                </div>
            </div>
        </section>
        <section class="reviews padding-tb-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Reviews</h2>
                        <p>“Thousands of satisfied guests have stayed with us since 2006”</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="apartment-review-Indicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                            <div class="person-content-box text-center">
                                                <div class="person-img">
                                                    <img src="images/Group 1396.svg" />
                                                </div>
                                                <div class="person-content">
                                                    <h5>Zac</h5>
                                                    <p>Great place, outstanding location and amazing communication</p>
                                                    <p>14 October</p>
                                                    <p>36/187 Collins Street, Melbourne</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                            <div class="person-content-box text-center">
                                                <div class="person-img">
                                                    <img src="images/Group 1396.svg" />
                                                </div>
                                                <div class="person-content">
                                                    <h5>Emily</h5>
                                                    <p>
                                                        Amazing stay at Apartment Stays and lovely people. You couldn’t get a more perfect location and the apartment was equipped with everything you need, not to forget super clean. This was a last minute booking as we had a terrible experience with an AirBNB before, so bad we were unable to stay there. We booked this apartment and Bill met us straight away and checked us in extremely fast. This was so nice considering it was a public holiday. Would 100% recommend! Thanks again!
                                                    </p>
                                                    <p>6 October</p>
                                                    <p>1104/250 Elizabeth Street, Melbourne</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                            <div class="person-content-box text-center">
                                                <div class="person-img">
                                                    <img src="images/Group 1396.svg" />
                                                </div>
                                                <div class="person-content">
                                                    <h5>Li-Ren</h5>
                                                    <p>
                                                        Great location to wonder around the Melbourne CBD. Clean and comfortable. Easy to check in and super friendly and helpful staff. Would definitely stay again next time.
                                                    </p>
                                                    <p>1 November</p>
                                                    <p>703/10 Saint Andrews Place, Melbourne</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                            <div class="person-content-box text-center">
                                                <div class="person-img">
                                                    <img src="images/Group 1396.svg" />
                                                </div>
                                                <div class="person-content">
                                                    <h5>Rochelle</h5>
                                                    <p>
                                                        Our Apartment Stays apartment gave us the perfect experience to explore the city of Melbourne. One of its most attractive features is the short walk to the South Yarra station (only about 5 minutes away), from which we were easily able to board trains or trams to take us where we wanted to go. The apartment has a lovely kitchen with a handy dishwasher, which made cooking lovely meals and cleaning up afterwards a breeze. We also felt that it is priced very reasonably in comparison to some of the other furnished apartments in the area, so if you’re looking for a place that offers great value for money, this one would be ideal. Over all, I would highly recommend this place to anyone who wants to explore Melbourne on a budget!
                                                    </p>
                                                    <p>15 November</p>
                                                    <p>8/35 Darling Street, South Yarra</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                            <div class="person-content-box text-center">
                                                <div class="person-img">
                                                    <img src="images/Group 1396.svg" />
                                                </div>
                                                <div class="person-content">
                                                    <h5>Joseph</h5>
                                                    <p>
                                                        This apartment is very conveniently located, perfect for downtown Melbourne. We especially appreciated shopping at Queen Victoria Market and being able to cook in the kitchen. The kitchen and laundry made for an easy long stay in Melbourne. Check in was a breeze. Much thanks to the wonderful hosts! Thanks again, we had a great time.
                                                    </p>
                                                    <p>29 November</p>
                                                    <p>1115/250 Elizabeth Street Melbourne</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                            <div class="person-content-box text-center">
                                                <div class="person-img">
                                                    <img src="images/Group 1396.svg" />
                                                </div>
                                                <div class="person-content">
                                                    <h5>Angela</h5>
                                                    <p>
                                                        Location is fabulous. Can get free tram or catch the multitude of transport to anywhere you want. Everything we needed for our 12 month stay was provided. We didn’t need to buy anything for the apartment. Bed was super comfy and our floor was quiet. We slept really well.
                                                    </p>
                                                    <p>28 October</p>
                                                    <p>707/10 Saint Andrews Place, Melbourne</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                            <div class="person-content-box text-center">
                                                <div class="person-img">
                                                    <img src="images/Group 1396.svg" />
                                                </div>
                                                <div class="person-content">
                                                    <h5>Wei</h5>
                                                    <p>
                                                        Spacious and clean, exactly what I was after. Safe building in lovely area and perfect for walking to work and uni. Would definitely stay again next year.
                                                    </p>
                                                    <p>20 September</p>
                                                    <p>52/222 Victoria Street, Melbourne</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                            <div class="person-content-box text-center">
                                                <div class="person-img">
                                                    <img src="images/Group 1396.svg" />
                                                </div>
                                                <div class="person-content">
                                                    <h5>David</h5>
                                                    <p>
                                                        Really nice space in a fantastic location, with appliances, kitchen tools, perfect. The apartment is a great size with lots of Northern light. Just over 7 months in Melbourne, this place was perfect.
                                                    </p>
                                                    <p>26 April</p>
                                                    <p>601/318 Little Lonsdale Street, Melbourne</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                            <div class="person-content-box text-center">
                                                <div class="person-img">
                                                    <img src="images/Group 1396.svg" />
                                                </div>
                                                <div class="person-content">
                                                    <h5>Julie</h5>
                                                    <p>
                                                        Great location, convenient and very easy to check in. We're happy with the amenities and communication. The furniture was so nice and we loved the huge TV. Internet was superfast. The kitchen had more than what we expected. We both enjoy our stay in Melbourne! We would love to come back again.
                                                    </p>
                                                    <p>20 January</p>
                                                    <p>404/65 Elizabeth Street, Melbourne</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                            <div class="person-content-box text-center">
                                                <div class="person-img">
                                                    <img src="images/Group 1396.svg" />
                                                </div>
                                                <div class="person-content">
                                                    <h5>Cherry</h5>
                                                    <p>
                                                        The Apartment Stays team were amazing. Nice and friendly staff, fast response and kind to us. A great place to stay.
                                                    </p>
                                                    <p>12 November</p>
                                                    <p>1104/87 Franklin Street, Melbourne</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                            <div class="person-content-box text-center">
                                                <div class="person-img">
                                                    <img src="images/Group 1396.svg" />
                                                </div>
                                                <div class="person-content">
                                                    <h5>Nicholas</h5>
                                                    <p>
                                                        Stylish and comfortable accommodation right in the middle of South Yarra. Amazing location, close to cafes, restaurants, train station, tram, Botanic Gardens etc 25 minutes to Monash Uni. Would highly recommend compared to living in Clayton – nothing to do there
                                                    </p>
                                                    <p>2 November</p>
                                                    <p>16/35 Darling Street, South Yarra</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                            <div class="person-content-box text-center">
                                                <div class="person-img">
                                                    <img src="images/Group 1396.svg" />
                                                </div>
                                                <div class="person-content">
                                                    <h5>Kylie</h5>
                                                    <p>
                                                        You can expect a beautiful apartment in a fabulous location. All the amenities were stunning and lots of cooking appliances and cooking tools. The bed was soooo comfortable and loved that I couldn't feel it when my hubby moved and vice versa. Shower was great with amazing hot water system. All in all a beautiful apartment, very comfortable and easy access to shops, trams, restaurants, cafes etc. Perfect location. Would definitely stay there again. Nicky went above and beyond to accommodate us as I had just had major surgery and she was so helpful in allowing us easy check-in and check out. This is your place to stay. Superb.
                                                    </p>
                                                    <p>23 August</p>
                                                    <p>104/336 Russell Street, Melbourne</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="person-content-box text-center">
                                                <div class="person-img">
                                                    <img src="images/Group 1396.svg" />
                                                </div>
                                                <div class="person-content">
                                                    <h5>Am</h5>
                                                    <p>
                                                        Perfect location in the city centre. Easy self check-in and check-out, clean apartment, modern supersized interior, big kitchen and small study nook. We made regular use of the huge balcony and the BBQ you provided. We enjoyed this especially. Really enjoyed our stay in Melbourne! 12 months here flew by thanks to the comfortable lodgings. Thanks Anna and Nicky
                                                    </p>
                                                    <p>15 May</p>
                                                    <p>5/5 Davisons Place, Melbourne</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="person-content-box text-center">
                                                <div class="person-img">
                                                    <img src="images/Group 1396.svg" />
                                                </div>
                                                <div class="person-content">
                                                    <h5>Ben</h5>
                                                    <p>
                                                        Myself and three friends really enjoyed our four and a half month stay in this apartment. The apartment itself was really tidy and Nicky provided everything we needed for our stay. I would definitely recommend staying here if in Melbourne. The location in the CBD is ideal and centred around everything you need with transport hubs around Melbourne located only minutes walk away. I walked to Melbourne Uni and my three friends rolled out of bed and across the street to RMIT. We made lots of use of the pool and movie theatre. We even got into the rock climbing. Thanks again Nicky!
                                                    </p>
                                                    <p>2 March</p>
                                                    <p>3004/483 Swanston Street, Melbourne</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="person-content-box text-center">
                                                <div class="person-img">
                                                    <img src="images/Group 1396.svg" />
                                                </div>
                                                <div class="person-content">
                                                    <h5>Aser</h5>
                                                    <p>
                                                        Such a great place in a stunning location, all new/refurbished interiors and utilities. The studio is actually a really great space. The furniture is contemporary and obviously brand new. The hospitality of the hosts is 5 star and I just wish I could stay there forever.
                                                    </p>
                                                    <p>21 April</p>
                                                    <p>404/39 Queen Street, Melbourne</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="person-content-box text-center">
                                                <div class="person-img">
                                                    <img src="images/Group 1396.svg" />
                                                </div>
                                                <div class="person-content">
                                                    <h5>Somasekhar</h5>
                                                    <p>
                                                        Central location on Spring Street. Apartment on ground floor (no lifts or stairs). Large & spacious. I was drawn to the ground floor garden with my own private BBQ. The building facilities are truly resort like. My partner and I even played the odd game of tennis. The Apartment Stays team are responsive attentive hosts. Very happy to recommend this apartment. Thank you.
                                                    </p>
                                                    <p>6 June</p>
                                                    <p>9/283 Spring Street, Melbourne</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="person-content-box text-center">
                                                <div class="person-img">
                                                    <img src="images/Group 1396.svg" />
                                                </div>
                                                <div class="person-content">
                                                    <h5>David</h5>
                                                    <p>
                                                        The best word to define our hosts and the apartment would be "professional". Bill and his team are really professional hosts, they were extremely helpful and definitely demonstrated they have experience in the hospitality business. It was a pleasure to stay with them, and we will probably repeat in the near future! Mackenzie Street is an edgy building, with amazing facilities for the residents. My favourite, the sky gym overlooking Melbourne’s north. We even took advantage of the residents lounge and through a couple of parties to celebrate our birthdays whilst we were here.
                                                    </p>
                                                    <p>February 28</p>
                                                    <p>1306/33 Mackenzie Street, Melbourne</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#apartment-review-Indicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true">
                  <i class="ti-angle-left"></i>
                </span>
                                <!-- <span class="ti-arrow-right"></span> -->
                            </a>
                            <a class="carousel-control-next" href="#apartment-review-Indicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true">
                  <i class="ti-angle-right"></i>
                </span>
                                <!-- <span class="sr-only">Next</span> -->
                            </a>

                            <ol class="carousel-indicators">
                                <li data-target="#apartment-review-Indicators" data-slide-to="0" class="active"></li>
                                <li data-target="#apartment-review-Indicators" data-slide-to="1"></li>
                                <li data-target="#apartment-review-Indicators" data-slide-to="2"></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section class="property-news-section padding-tb-60">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center latst-prpt">
            <h2>Latest Property News</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="news-box inline-flex">
              <div class="news-img">
                <img src="images/Image 15.png" />
              </div>
              <div class="news-content">
                <h3 class="sub-heading">Find your next cheap rental within 10kms of the city</h3>
                <p class="nws-para">
                  Here are the suburbs with the cheapest rent close to 10kms of each
                  major Australian city.
                </p>
                <h6>21 Sep 2019</h6>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="news-box inline-flex">
              <div class="news-img">
                <img src="images/Image 15.png" />
              </div>
              <div class="news-content">
                <h3 class="sub-heading">Find your next cheap rental within 10kms of the city</h3>
                <p
                  class="nws-para"
                >Here are the suburbs with the cheapest rent close to 10kms of each</p>
                <h6>21 Sep 2019</h6>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="news-box inline-flex">
              <div class="news-img">
                <img src="images/Image 15.png" />
              </div>
              <div class="news-content">
                <h3 class="sub-heading">Find your next cheap rental within 10kms of the city</h3>
                <p
                  class="nws-para"
                >Here are the suburbs with the cheapest rent close to 10kms of each</p>
                <h6>21 Sep 2019</h6>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="news-box inline-flex">
              <div class="news-img">
                <img src="images/Image 15.png" />
              </div>
              <div class="news-content">
                <h3 class="sub-heading">Find your next cheap rental within 10kms of the city</h3>
                <p
                  class="nws-para"
                >Here are the suburbs with the cheapest rent close to 10kms of each</p>
                <h6>21 Sep 2019</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="row">
            <div class="nws-read">
              <a href="#">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </section>-->
    </div>
</template>

<script>
    export default {
        name: "home",
        mounted() {
            console.log("Component mounted.");
        }
    };
</script>