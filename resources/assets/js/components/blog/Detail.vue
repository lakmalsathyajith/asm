<template>
    <section class="shortlist-section faq-section padding-tb-60">

             <div class="container-fluid p-0">
        <div class="nav-top-path-wrap bottom-full-width-border">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="nav-top-path">
                  <ul class="list-inline">
                    <li class="list-inline-item navigation-path-name">
                      <a href="/">{{ lang && lang === 'zh' ? '家' : 'Home' }}</a>
                      <span class="navigation-path">></span>
                    </li>
                    <li class="list-inline-item navigation-path-name">
                      <a href="/blog">{{ lang && lang === 'zh' ? '博客' : 'Blog' }}</a>
                      <span class="navigation-path">></span>
                    </li>
                    <li class="list-inline-item">
                      <span class="current-page">{{selectedBlog.name}}</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class=""><div class="head-name">
                            <h3 class="blog-inner-head">{{selectedBlog.name}}</h3>
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
                            <hr class="blog-article-inner-hr">
                        </div>
                        <div class="col-md-12">
                             <div class="row share-links">
                            <div class="col-md-1 share-text">
                                {{ lang && lang === 'zh' ? '分享:' : 'Share:' }}
                            </div>
                            <div class="col-md-11">
                                <a class="fa fa-facebook share-icon" :href="'https://www.facebook.com/sharer/sharer.php?u='+postUrl" target="_blank" title="share on facebook"></a>
                                <a class="fa fa-twitter share-icon left-margin" :href="'http://twitter.com/share?url='+encodeURIComponent(postUrl)" target="_blank" title="share on twitter"></a>
                                <a class="fa fa-linkedin share-icon left-margin" :href="'http://www.linkedin.com/shareArticle?mini=true&url='+encodeURIComponent(postUrl)" target="_blank" title="Share on LinkedIn"></a>
                            </div>
                        </div>
                        </div>
                       
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 col-lg-4">
                        <div class="more-blog-head-wrap">
                            <div class="row">
                                <div class="col-md-12">
                                     <h4 class="paraf txt-bold">{{ lang && lang === 'zh' ? '更多博客' : 'More Blogs' }}</h4>
                                </div>
                            </div>
                        </div>
                        <a v-for="(obj, i) in oddArray"
                           :key="i"
                           :href="'./'+obj.slug" class="news-item-cover mini-news-item">
                            <div class="news-item">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div :style="{  backgroundImage: `url(${(obj.files[0]) ? obj.files[0].url : '/images/home/onebed-thumb.jpg'})` }" class="news-image">
                                        </div>
                                    </div>
                                    <div class="col-md-7 pl-0 mobile-desc">
                                        <h6 class="paraf txt-bold inner-blog-head">{{obj.name}}</h6>
                                       <date class="paraf-smallest inner-date">Date :  {{obj.date}}</date>
                                    </div>

                                </div>
                                <hr class="blog-inner-hr">
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
                postUrl : window.location.href,
                lang: 'en'
            };
        },
        created() {
        },
        mounted() {
            const payload = {
                nextUrl : this.nextUrl,
                lazy : false
            }
            this.lang = this.$attrs.lang;
            this.getBlogs(payload);
            this.getBlog(this.$attrs.id);
        },
        methods: {
            ...mapActions('blog', ['getBlog','getBlogs'])
        },
        computed: {
            oddArray() {

                const lang = this.$attrs.lang;
                let tempArr = [];
                let count = 0;
                this.blogList.length > 0 && this.blogList.some((e, i) => {
                    let el = {...e};
                    el.name = (lang === 'zh' && el.name_zh) ? el.name_zh : el.name;
                    el.description = (lang === 'zh' && el.description_zh) ? el.description_zh : el.description;
                    if (count > 5)
                        return true;

                    if (el.id !== this.selectedBlog.id) {
                        el.date = moment(el.date, "YYYY-MMM-DD").format("DD MMM YYYY");
                        tempArr.push(el);
                        count++;
                    }
                });
                return tempArr;
            },
            content() {
                const {selectedBlog} = this;
                const lang = this.$attrs.lang;
                selectedBlog.name = (lang === 'zh' && selectedBlog.name_zh) ? selectedBlog.name_zh : selectedBlog.name;
                const contentLang = (selectedBlog.contents && selectedBlog.contents.length) ? selectedBlog.contents.filter((content) => {
                    return content.locale ===  lang
                }) : [];

                return (contentLang.length>0) ? contentLang[0].content : selectedBlog.contents && selectedBlog.contents[0].content;
            },
            ...mapState("blog", ["selectedBlog", "blogList"])
        }
    };
</script>
