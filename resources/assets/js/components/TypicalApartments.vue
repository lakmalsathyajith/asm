<template>
    <div>
        <section class="typical-apartment-section background-img padding-tb-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="main-heading head-type-apart">Our Typical Apartments</h2>
                        <P>Apartment Stays Melbourne offers a range of premium Studio, 1 Bedroom and 2 Bedroom<br> apartments to suit different budgets. Our apartments are situated centrally at several locations<br> within Melbourne and the inner suburbs Richmond
                            and South Yarra.</p>
                    </div>
                </div>
                <div class="row apartment-type-row">
                    <div class="col-md-4">

                        <div class="apartment-box">
                            <a href="./studio-apartment.html">
                                <div class="aprtment-img">
                                    <img src="images/aptment-01.png">

                                </div>
                            </a>
                            <div class="apartment-text text-center">
                                <h3 class="sub-heading">Studio Apartments</h3>
                                <p class="paraf-small">Starting from $620pw</p>
                            </div>
                        </div>


                        <hr class="typcl-hr">
                    </div>
                    <div class="col-md-4">

                        <div class="apartment-box">
                            <a href="./one-bedroom-apartment.html">
                                <div class="aprtment-img">
                                    <img src="images/aptment-02.png">

                                </div>
                            </a>
                            <div class="apartment-text text-center">
                                <h3 class="sub-heading">One Bedroom Apartments</h3>
                                <p class="paraf-small">Starting from $700pw</p>
                            </div>
                        </div>

                        <hr class="typcl-hr">
                    </div>
                    <div class="col-md-4">

                        <div class="apartment-box">
                            <a href="./two-bedroom-apartment.html">
                                <div class="aprtment-img">
                                    <img src="images/aptment-01.png">

                                </div>
                            </a>
                            <div class="apartment-text text-center">
                                <h3 class="sub-heading">Two Bedroom Apartments</h3>
                                <p class="paraf-small">Starting from $965pw</p>
                            </div>
                        </div>

                        <hr class="typcl-hr">
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
    export default {
        name: "typicalApartment",
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
