<template>
    <div>
        <section class="shortlist-section faq-section padding-tb-60">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="bottom-full-width-border">
                                <div class="head-name">
                                    <h3>Latest Property News</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row myentry-shortlist">
                        <div class="col-md-12">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="icon-left">
                                <i class="fa fa-thumbs-o-up fa-3x"></i>
                            </div>
                            <div class="text">
                                <h4> Lorem Ipsum is simply dummy </h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                            <br>
                            <div class="icon-left">
                                <i class="fa fa-codepen fa-3x"></i>
                            </div>
                            <div class="text">
                                <h4> Lorem Ipsum is simply dummy </h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                            <br>
                            <div class="icon-left">
                                <i class="fa fa-ioxhost fa-3x"></i>
                            </div>
                            <div class="text">
                                <h4> Lorem Ipsum is simply dummy </h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="icon-left">
                                <i class="fa fa-money fa-3x"></i>
                            </div>
                            <div class="text">
                                <h4> Lorem Ipsum is simply dummy </h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                            <br>
                            <div class="icon-left">
                                <i class="fa fa-taxi fa-3x"></i>
                            </div>
                            <div class="text">
                                <h4> Lorem Ipsum is simply dummy </h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                            <br>
                            <div class="icon-left">
                                <i class="fa fa-leaf fa-3x"></i>
                            </div>
                            <div class="text">
                                <h4> Lorem Ipsum is simply dummy </h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
</template>
<script>

    import {mapState, mapActions} from 'vuex';
    export default {
        name: "blog",
        data() {
            return {
                bottom: false,
                beers: []
            };

        },
        watch: {
            bottom(bottom) {
                if (bottom) {
                    this.getBlogs();
                }
            }
        },

        created() {
            window.addEventListener('scroll', () => {
                this.bottom = this.bottomVisible();
            });
        },
        mounted() {
        },
        methods: {
            bottomVisible() {
                const scrollY = window.scrollY;
                const visible = document.documentElement.clientHeight;
                const pageHeight = document.documentElement.scrollHeight;
                const bottomOfPage = visible + scrollY >= pageHeight;
                return bottomOfPage || pageHeight < visible;
            },
            ...mapActions('blog', ['getBlogs'])
        }
    };
</script>
