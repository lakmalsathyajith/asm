<template>
    <section class="shortlist-section faq-section padding-tb-60">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="bottom-full-width-border"><div class="head-name">
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
                                <div :style="{width:'500px', height:'500px', backgroundImage: `url(${(selectedBlog.files && selectedBlog.files.length>0 ) ? selectedBlog.files[0].url : '/images/home/onebed-thumb.jpg'})` }">
                                </div>
                                <div>
                                    <div v-html="content"></div>
                                </div>
                            </article>
                        </div>
                        <div class="row">
                            <div class="col-md-1">
                                share:
                            </div>
                            <div class="col-md-11">
                                <a class="fa fa-facebook" :href="'https://www.facebook.com/sharer/sharer.php?u='+postUrl" target="_blank" title="share on facebook"></a>
                                <a class="fa fa-twitter" :href="'http://twitter.com/share?url='+encodeURIComponent(postUrl)" target="_blank" title="share on twitter"></a>
                                <a class="fa fa-linkedin" :href="'http://www.linkedin.com/shareArticle?mini=true&url='+encodeURIComponent(postUrl)" target="_blank" title="Share on LinkedIn"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 col-lg-4">
                        <a v-for="(obj, i) in blogList"
                           :key="i"
                           :href="'./'+obj.slug">
                            <div class="text">
                                <div :style="{ width:'100px', height:'100px', backgroundImage: `url(${(obj.files[0]) ? obj.files[0].url : '/images/home/onebed-thumb.jpg'})` }">
                                </div>
                                <h4>{{obj.name}}</h4>
                                <h6>Date :  {{obj.date}}</h6>

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

            console.log(window.location.href)

            this.getBlogs();
            this.getBlog(this.$attrs.id);
        },
        methods: {
            ...mapActions('blog', ['getBlog','getBlogs'])
        },
        computed: {
            content() {
                return (this.selectedBlog.contents) ? this.selectedBlog.contents[0].content : "";
            },
            ...mapState("blog", ["selectedBlog", "blogList"])
        }
    };
</script>
