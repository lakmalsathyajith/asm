<template>
  <div>
    <section class="shortlist-section faq-section padding-tb-60">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="">
                <div class="head-name">
                  <h3 class="main-heading">
                    {{ lang && lang === 'zh' ? '博客' : 'Blog' }}
                  </h3>
                </div>
              </div>
            </div>
          </div>
          <div class="row myentry-shortlist">
            <div class="col-md-12"></div>
          </div>
          <div class="row">
            <div
              class="col-xs-12 col-sm-6 col-md-6 col-lg-6"
              v-for="(obj, i) in evenArray"
              :key="i"
            >
              <a :href="'./blog/' + obj.slug" class="news-item-cover">
                <div class="news-item">
                  <div class="row">
                    <div class="col-md-5">
                      <div
                        :style="{
                          backgroundImage: `url(${
                            obj.files[0]
                              ? obj.files[0].url
                              : 'images/home/onebed-thumb.jpg'
                          })`
                        }"
                        class="news-image"
                      ></div>
                    </div>

                    <div class="col-md-7 texts">
                      <h5 class="paraf txt-bold blog-head">{{ obj.name }}</h5>
                      <p class="paraf-small">{{ obj.description }}</p>
                      <date class="paraf-smallest">{{ obj.date }}</date>
                    </div>
                  </div>
                </div>
              </a>
              <br />
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
import { mapState, mapActions } from 'vuex';
import moment from 'moment';

export default {
  name: 'blog',
  data() {
    return {
      bottom: false,
      lang: 'en'
    };
  },
  watch: {
    bottom(bottom) {
      if (
        bottom &&
        (!this.currentPage ||
          (!!this.currentPage && this.currentPage !== this.lastPage))
      ) {
        const payload = {
          nextUrl: this.nextUrl,
          lazy: true
        };

        this.getBlogs(payload);
      }
    }
  },
  created() {
    window.addEventListener('scroll', () => {
      this.bottom = this.bottomVisible();
    });
    
  },
  mounted() {
    const payload = {
      nextUrl: this.nextUrl,
      lazy: false
    };
    this.lang = this.$attrs.lang;
    this.getBlogs(payload);
  },
  methods: {
    bottomVisible() {
      const scrollY = window.scrollY;
      const visible = document.documentElement.clientHeight;
      const pageHeight = document.documentElement.scrollHeight;
      const footerHeight = document.getElementById('footer-menu').offsetHeight;
      const bottomOfPage = visible + scrollY >= pageHeight - footerHeight;
      return bottomOfPage || pageHeight - footerHeight < visible;
    },
    ...mapActions('blog', ['getBlogs'])
  },
  computed: {
    evenArray() {
      const lang = this.$attrs.lang;
      let tempArr = [];
      this.blogList.length > 0 &&
        this.blogList.forEach((e, i) => {
          let el = { ...e };
          el.name = lang === 'zh' && el.name_zh ? el.name_zh : el.name;
          el.description =
            lang === 'zh' && el.description_zh
              ? el.description_zh
              : el.description;
          el.date = moment(el.date, 'YYYY-MMM-DD').format('DD MMM YYYY');
          tempArr.push(el);
        });
      return tempArr;
    },
    ...mapState('blog', ['blogList', 'nextUrl', 'currentPage', 'lastPage'])
  }
};
</script>
