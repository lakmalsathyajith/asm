<template>
  <div>
    <section class="studio-apartment-section background-img padding-tb-60">
      <div class="container-fluid p-0">
        <div class="nav-top-path-wrap bottom-full-width-border">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="nav-top-path">
                  <ul class="list-inline">
                    <li class="list-inline-item navigation-path-name">
                      <a href="/">家</a>
                      <span class="navigation-path">></span>
                    </li>
                    <li class="list-inline-item navigation-path-name">
                      <a href="/typical-apartment">我们的典型公寓</a>
                      <span class="navigation-path">></span>
                    </li>
                    <li class="list-inline-item">
                      <span class="current-page">一室公寓</span>
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
              <h2 class="main-heading">一室公寓</h2>
            </div>
            <div class="sub-head-stud-apart">
              <p class="paraf">
                我们设备齐全的一室公寓位于墨尔本的中心商业地区，墨尔本东，South Yarra 及Carlton.
              </p>
              <p class="paraf">
               一般的一室公寓面积由４５平方米到６５平方米。
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
              <h2 class="main-heading">查看一卧室公寓的空房情况</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 col-prec-50">
              <div class="form-group">
                <div class="flter-button">
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

            <div class="col-md-3 col-prec-50">
              <div class="form-group">
                <div class="dropdown filter-widget">
                  <button
                    class="btn dropdown-toggle guest-button-svg before-svg flter-button"
                    type="button"
                    id="dropdownMenuButton"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <span>来宾号码</span>
                  </button>
                  <div
                    class="dropdown-menu filter-widget-dropdown"
                    aria-labelledby="dropdownMenuButton"
                  >
                    <div class="filter-widget-inner">
                      <div class="row">
                        <div class="col-md-6 filter-widget-col">
                          <div class="form-group">
                            <label for="min_occupants" class="filter-widget-sublabel">大人</label>
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
    <div class="quantity-button quantity-up" v-on:click="qtyIncrease('adults', 1, 6)">
        +
    </div>
    <div class="quantity-button quantity-down" v-on:click="qtyDecrease('adults', 1, 6)">
        -
    </div>
</div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 filter-widget-col">
                          <div class="form-group">
                            <label for="max_occupants" class="filter-widget-sublabel">小孩儿</label>
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
    <div class="quantity-button quantity-up" v-on:click="
                                          qtyIncrease('children', 0, 6)
                                        ">
        +
    </div>
    <div class="quantity-button quantity-down" v-on:click="
                                          qtyDecrease('children', 0, 6)
                                        ">
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

            <div class="col-md-3 col-prec-50">
              <div class="form-group">
                <div class="dropdown filter-widget">
                  <button
                    class="btn dropdown-toggle price-svg-button before-svg flter-button"
                    type="button"
                    id="dropdownMenuButton"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <span>价格最低/最高</span>
                  </button>
                  <div class="dropdown-menu filter-widget-dropdown" aria-labelledby="dropdownMenuButton">
                    <div class="filter-widget-inner">
                      <div class="row">
                        <div class="col-md-6 filter-widget-col">
                          <div class="form-group">
                            <label for="checkin" class="filter-widget-sublabel">价格最低</label>
                            <v-select :options="options" :clearable="false"  v-model="filter.price_min"></v-select>
                          </div>
                        </div>
                        <div class="col-md-6 filter-widget-col">
                          <div class="form-group">
                            <label for="checkout" class="filter-widget-sublabel">最高价格</label>
                            <v-select :options="options" :clearable="false"  v-model="filter.price_max"></v-select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-prec-50">
              <div class="form-group">
                <div class="filter-widget">
                  <a class="btn booking-btn" v-on:click="search">搜索</a>
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
              <!-- <div class="studio-bottom-view-apartment">
                <a class="btn colorles-btn">View Apartments</a>
              </div>-->

              <div class="studio-bottom-sub-heading1">
                <p class="paraf">
                  公寓住宿墨尔本，设备齐全的一室公寓提供有分隔的起居室和卧室，让您有个舒适的居住环境。我们一系列设备齐全的一室公寓在墨尔本商业地区中心或周边城市为你提供不同选择。 
                </p>
              </div>
              <div class="studio-bottom-sub-heading1">
                <p class="paraf">
                  我们让您选择自助形式或服务式一室公寓。我们提供客房清洁服务为一个额外选项。您可以选择每周，隔周或每月服务（额外收费）。或者您也可以选择自己管理和清洁您的开放式公寓，节省成本。
                </p>
              </div>
              <div class="studio-bottom-sub-heading1">
                <p class="paraf">
                  我们有些设备齐全的一室公寓带有阳台，让您可以享受城市美景，亚拉河或这个城市美丽的公园或花园。其他的公寓也能提供便利和刺激的理想位置。
                </p>
              </div>
              <div class="studio-bottom-sub-heading1">
                <p class="paraf">
                  我们的设备齐全的一室公寓含有厨房，提供所有您所需要做饭的用具。但您也会发现您不会离开墨尔本的世界级咖啡厅和餐厅太远。
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
                    <h3 class="sub-heading">福利及包含：</h3>
                  </div>
                  <div class="panel-body">
                    <div class="include-list-wrap superior-list studio-benifit-list">
                      <ul>
                        <li>所需设备</li>
                        <li>所有水，电，煤气连接和使用费</li>
                        <li>所有家具</li>
                        <li>设备齐全新颖厨房/小厨房 </li>

                        <li>床铺和毛巾</li>
                        <li>宽屏液晶电视</li>
                        <li>暖气</li>
                        <li>空调（大部分公寓）</li>
                        <li>套房卧室</li>
                        <li>洗衣设备</li>
                        <li>无限上网 （额外收费）</li>
                        <li>
                          可选择家居清洁服务。每周，隔周或每月（额外收费）
                        </li>
                      </ul>
                    </div>
                    <div class="divider"></div>
                    <div class="bottom-after-border-wrap">
                      <div class="bottom-para-wrap">
                        <p class="paraf">
                          我们的一室公寓可以很舒适的让１到２人入住，最理想给单人或２个朋友／一对夫妇。最多可入住人数视乎不同的一室公寓。我们有些一室设备齐全公寓，因为公寓的较大面积，最多可以让３到４人入住。
                        </p>
                      </div>
                      <div class="bedding-config-wrap">
                        <div class="bedding-config-heading available-head">
                          <h3>床铺安排可以为：</h3>
                        </div>
                        <div class="config-label-wrap">
                          <div class="row">
                            <div class="col">
                              <button type="button" class="btn colorles-btn">
                                <i class="ti-check"></i> １ｘ双人床
                              </button>
                            </div>
                            <div class="col">
                              <button type="button" class="btn colorles-btn">
                                <i class="ti-check"></i> ２ｘ　单人床
                              </button>
                            </div>
                            <div class="col">
                              <button type="button" class="btn colorles-btn">
                                <i class="ti-check"></i> ３ｘ单人床
                              </button>
                            </div>
                            <div class="col">
                              <button type="button" class="btn colorles-btn">
                                <i class="ti-check"></i> １ｘ大床＋１ｘ单人床
                              </button>
                            </div>
                            <div class="col">
                              <button type="button" class="btn colorles-btn">
                                <i class="ti-check"></i> １ｘ双人床＋１ｘ单人床
                              </button>
                            </div>
                            <div class="col">
                              <button type="button" class="btn colorles-btn">
                                <i class="ti-check"></i> １ｘ单人床＋１ｘ双层床
                              </button>
                            </div>
                            <div class="col">
                              <button type="button" class="btn colorles-btn">
                                <i class="ti-check"></i> ２ｘ双层床
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
                    为什么设备齐全的一室公寓是在墨尔本理想的选择？
                  </h3>
                </div>
                <div class="studio-furnish-para text-center">
                  <p class="paraf">
                    我们的设备齐全的一室公寓是在墨尔本给企业，商务人员，我们的公务员，需要在医院轮班的医学实习或专业人员，学者和研究生，对于住宿有要求，需要比学生公寓能提供多的国际学生的理想的选择。旅客，最近分离需要找个落脚点的。。。。还有很多其他无尽的可能。
                  </p>
                  <p class="paraf">
                    我们的一室公寓提供一个实惠的选择给预算紧张，也不介意和不超过３个朋友分享的。
                  </p>
                  <p class="paraf">
                    公寓住宿服务公寓提供一个灵活，实惠的地点作为实现您的目标的基地。我们提供灵活的租约，由１个月到２４个月，当然也有机会让您以新的租约延长您的住宿。
                  </p>
                  <p class="paraf">
                    这些一室设备齐全公寓位于墨尔本一些最理想的位置，位于这个城市的活动和机会当中，也能提供一个私密和舒适的环境。我们的设备齐全一卧室公寓对于忙碌和精明的客人是一个不能被击败的选择。
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="studio-bottom-furnish-image-wrap">
            <div class="row">
              <div class="col-md-12">
                <img src="images/onebed-apartment/aprt-bottom-img-1bed.jpg" width="100%" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
import moment from "moment";
import HotelDatePicker from "vue-hotel-datepicker";

export default {
  name: "one-bed-room-apartments",
  data() {
    const today = new Date()
    let tomorrow = new Date()
    tomorrow.setDate(new Date().getDate()+1);

    return {
      filter: {
        checkIn: today,
        checkOut: tomorrow,
        type: "one-bed-room-apartments",
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
  mounted() {
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
    search() {
      if (
        this.filter.type != "" &&
        this.filter.checkIn != "" &&
        this.filter.checkOut != ""
      ) {
        window.location =
          "./apartment-listing?type=" +
          this.filter.type +
          "&start=" +
          moment(this.filter.checkIn).format("YYYY-MM-DD") +
          "&end=" +
          moment(this.filter.checkOut).format("YYYY-MM-DD") +
          "&adults=" +
          this.filter.adults +
          "&children=" +
          this.filter.children +
          "&price_min=" +
          this.filter.price_min +
          "&price_max=" +
          this.filter.price_max;
      }
    },
    setCheckinDate(newDate) {
      this.filter.checkIn = newDate;
    },
    setCheckoutDate(newDate) {
      this.filter.checkOut = newDate;
    }
  },
  components: {
    HotelDatePicker
  }
};
</script>
