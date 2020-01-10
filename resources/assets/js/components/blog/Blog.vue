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
                            <a v-for="(obj, i) in evenArray"
                               :key="i"
                               :href="'./blog/'+obj.slug">
                                <div class="text">
                                    <div :style="{ width:'100px', height:'100px', backgroundImage: `url(${(obj.files[0]) ? obj.files[0].url : 'images/home/onebed-thumb.jpg'})` }">
                                    </div>
                                    <h4>{{obj.name}}</h4>
                                    <p>{{obj.description}}</p>
                                </div>
                            </a>
                            <br>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <a v-for="(obj, i) in oddArray"
                               :key="i"
                               class="text" :href="'./blog/'+obj.slug">
                                <div class="text">
                                    <div :style="{width:'100px', height:'100px', backgroundImage: `url(${(obj.files[0]) ? obj.files[0].url : 'images/home/onebed-thumb.jpg'})` }">
                                    </div>
                                    <h4>{{obj.name}}</h4>
                                    <p>{{obj.description}}</p>
                                </div>
                            </a>
                            <br>
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
                bottom: false
            };
        },
        watch: {
            bottom(bottom) {
                if (bottom && (!this.currentPage || (!!this.currentPage && (this.currentPage !== this.lastPage)))) {
                    this.getBlogs(this.nextUrl);
                }
            }
        },
        created() {
            window.addEventListener('scroll', () => {
                this.bottom = this.bottomVisible();
            });
        },
        mounted() {
            this.getBlogs(this.nextUrl);
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
        },
        computed: {
            oddArray() {
                let tempArr = [];
                this.blogList.length > 0 && this.blogList.forEach((e, i) => {
                    if (i % 2 !== 0)
                        tempArr.push(e);
                });
                return tempArr;
            },
            evenArray() {
                let tempArr = [];
                this.blogList.length > 0 && this.blogList.forEach((e, i) => {
                    if (i % 2 === 0)
                        tempArr.push(e);
                });
                return tempArr;
            },
            ...mapState("blog", ["blogList", "nextUrl", "currentPage", "lastPage"])
        }
    };
</script>
