<footer class="footer-menu">
    <div class="container-fluid main-ftr">
        <div class="row">
            <div class="container ">
                <div class="row ftr-top-lst">
                    <div class="col-md-8">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="/apartment-listing">Rates and Availability</a></li>
                            <li class="list-inline-item"><a href="/typical-apartment">Our Typical Apartments</a></li>

                            <li class="list-inline-item"><a href="/faq">FAQ</a></li>
                            <li class="list-inline-item"><a href="/about">About</a></li>
                            <li class="list-inline-item"><a href="/list-with-us">List with Us</a></li>
                            <li class="list-inline-item"><a href="/contact">Contact Us</a></li>


                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline rightul">

                            <li class="list-inline-item"><a href="#">Privacy</a></li>
                            <li class="list-inline-item"><a href="#"> Conditions</a></li>
                            <li class="list-inline-item li-social"><a href="#"><i class="ti-facebook"></i></a></li>
                            <li class="list-inline-item li-social"><a href="#"><i class="ti-twitter-alt"></i></a></li>
                            <li class="list-inline-item li-social"><a href="#"><i class="ti-youtube"></i></a></li>


                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="divider"></div>
                    </div>
                </div>
                <div class="row ftrloct">
                    <div class="col-md-3">

                        <div class="footer-widget">
                            <div class="footer-widget-icon-wrap desktop-hide tab-hide">
                                <div class="widget-icon"><img src="{{asset('images/maps-and-flags.svg')}}"
                                        alt="apartmentstays"></div>
                            </div>
                            <div class="widget-title">
                                Locate Us
                            </div>
                            <div class="widget-body">
                                <div class="widget-icon"><img src="{{asset('images/maps-and-flags.svg')}}"
                                        alt="apartmentstays"></div>
                                <div class="widget-body-text footer-para">
                                    K113/63 Turner St, Port Melbourne VIC 3207 Australia.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-widget">
                            <div class="footer-widget-icon-wrap desktop-hide tab-hide">
                                <div class="widget-icon"><img src="{{asset('images/call-answer.svg')}}"
                                        alt="apartmentstays"></div>
                            </div>
                            <div class="widget-title">
                                Call us
                            </div>
                            <div class="widget-body">
                                <div class="widget-icon"><img src="{{asset('images/call-answer.svg')}}"
                                        alt="apartmentstays"></div>
                                <div class="widget-body-text footer-para">
                                    <span> <a href="tel:1300 267 767">1300 267 767 </a>/<a href="tel:1300 267 767">+61 3
                                            9279 7200</a></span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="footer-widget">
                            <div class="footer-widget-icon-wrap desktop-hide tab-hide">
                                <div class="widget-icon"><img
                                        src="{{asset('images/black-back-closed-envelope-shape.svg')}}"
                                        alt="apartmentstays"></div>
                            </div>
                            <div class="widget-title">
                                Mail us
                            </div>
                            <div class="widget-body">
                                <div class="widget-icon"><img
                                        src="{{asset('images/black-back-closed-envelope-shape.svg')}}"
                                        alt="apartmentstays"></div>
                                <div class="widget-body-text footer-para">
                                    <a href="mailto:info@apartmentstays.com.au"
                                        target="_top">info@apartmentstays.com.au</a>
                                </div>
                            </div>

                            <div class="mobile-footer-social-wrap">
                                <ul class="list-inline desktop-hide tab-hide">

                                    <li class="list-inline-item li-social"><a href="#"><i class="ti-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item li-social"><a href="#"><i
                                                class="ti-twitter-alt"></i></a></li>
                                    <li class="list-inline-item li-social"><a href="#"><i class="ti-youtube"></i></a>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">

                    </div>
                </div>


            </div>
        </div>
    </div>

    <!--footer copyright-->
    <div class="container-fluid copyright-sec">


        <div class="container">
            <div class="row">
                <diV class="col-md-6">
                    <div class="copy-text">
                        <P>Copyright © 2019 Apartment Stays Melbourne Pty Ltd.</P>
                    </div>

                </diV>
                <diV class="col-md-6">
                    <div class="creat">
                        <p><a href="https://www.lilabs.com.au/" target="_blank">Created by</a></p>
                    </div>

                </diV>
            </div>

        </div>

    </div>
</footer>

<script src="{{ asset('js/app.js?v=1.5') }}"></script>
<script src="//unpkg.com/swiper/js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<script href="{{asset('js/script.js?v=1.5')}}"></script>

<script>
    $(document).ready(function() {

$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});

setTimeout(function() {
$('.site-loading-wrap').fadeOut('slow');
}, 800);

$('.carousel').carousel({
interval: 2000,
pause: true
});

$('.dropdown-menu .filter-widget-inner a').click(function() {
$(this)
.parents('.dropdown')
.find('.btn')
.html($(this).text() + ' <span class="caret"></span>');
$(this)
.parents('.dropdown')
.find('.btn')
.val($(this).data('value'));

if ($(this).attr('value') == 'General Enquiry') {
// $('.accommondation-wrap').hide();
$('.accommondation-wrap').css('display', 'none');
} else {
$('.accommondation-wrap').css('display', 'block');
// $('.accommondation-wrap').show();
}
});

//---------------- swiper slider code. remove it if you dont want it --------------
if ($('.swiper-container').length) {
    
var swiper = new Swiper('.swiper-container', {
effect: 'fade',
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
el: '.swiper-pagination',
clickable: true
},
navigation: {
nextEl: '.swiper-button-next',
prevEl: '.swiper-button-prev'
}
});
}

});


$(function () {
  $(".datepicker").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  }).datepicker('update', new Date());
});

/*mobile filter view js*/
$(document).ready(function(){
  $("#mobile-filter-close").click(function(){
    $(".filter-mob-nav-wrap").toggle("hide");
  });
  
  $("#filter-toggle").click(function(){
   
    $(".filter-mob-nav-wrap").toggle("show");
  });
});


</script>