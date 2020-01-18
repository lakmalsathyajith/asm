<template>
    <section class="shortlist-section faq-section padding-tb-60">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class=""><div class="head-name">
                            <h3>{{selectedBlog.name}}</h3>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row myentry-shortlist">
                    <div class="col-md-12">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12 col-lg-8">
                        <div>
                            <article>
                                <div :style="{ backgroundImage: `url(${(selectedBlog.files && selectedBlog.files.length>0 ) ? selectedBlog.files[0].url : 'images/Image 15.png'})` }" class="news-main-image" >
                                </div>
                                <div class="item-full-text">
                                    <div v-html="content"></div>
                                </div>
                            </article>
                        </div>
                        <div class="row share-links">
                            <div class="col-md-1">
                                Share:
                            </div>
                            <div class="col-md-11">
                                <a class="fa fa-facebook" :href="'https://www.facebook.com/sharer/sharer.php?u='+postUrl" target="_blank" title="share on facebook"></a>
                                <a class="fa fa-twitter" :href="'http://twitter.com/share?url='+encodeURIComponent(postUrl)" target="_blank" title="share on twitter"></a>
                                <a class="fa fa-linkedin" :href="'http://www.linkedin.com/shareArticle?mini=true&url='+encodeURIComponent(postUrl)" target="_blank" title="Share on LinkedIn"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 col-lg-4">
                        <a v-for="(obj, i) in oddArray"
                           :key="i"
                           :href="'./'+obj.slug" class="news-item-cover mini-news-item">
                            <div class="news-item">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div :style="{  backgroundImage: `url(${(obj.files[0]) ? obj.files[0].url : '/images/home/onebed-thumb.jpg'})` }" class="news-image">
                                        </div>
                                    </div>
                                    <div class="col-md-7 pl-0">
                                        <h6>{{obj.name}}</h6>
                                       <div class="date">Date :  {{obj.date}}</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>

    import {mapState, mapActions} from 'vuex';
    import moment from "moment";

    export default {
        name: "blog-detail",
        data() {
            return {
                postUrl : window.location.href
            };
        },
        created() {
        },
        mounted() {
            const payload = {
                nextUrl : this.nextUrl,
                lazy : false
            }
            this.getBlogs(payload);
            this.getBlog(this.$attrs.id);
        },
        methods: {
            ...mapActions('blog', ['getBlog','getBlogs'])
        },
        computed: {
            oddArray() {
                let tempArr = [];
                this.blogList.length > 0 && this.blogList.some((e, i) => {
                        if(i < 5){
                            e.date = moment(e.date, "YYYY-MMM-DD").format("DD MMM YYYY");
                            tempArr.push(e);
                        }else{
                            return true
                        }
                });
                return tempArr;
            },
            content() {
                return (this.selectedBlog.contents) ? this.selectedBlog.contents[0].content : "";
            },
            ...mapState("blog", ["selectedBlog", "blogList"])
        }
    };
</script>
