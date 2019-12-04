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
                            {{-- <li class="list-inline-item"><a href="/list-with-us">List with Us</a></li> --}}
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
                                    <a href="https://goo.gl/maps/w61whHKLkMBjfc1f7" target="_blank">K113/63 Turner St,
                                        Port Melbourne VIC 3207 Australia.</a>
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
                        <p>Created by </p>
                        <a href="https://www.lilabs.com.au/" target="_blank"></a>
                    </div>

                </diV>
            </div>

        </div>

    </div>
</footer>

<script src="{{ asset('js/app.js?v=1.7') }}"></script>
<script src="//unpkg.com/swiper/js/swiper.min.js"></script>
<script src="{{asset('js/script.js?v=1.7')}}"></script>
<script href="{{asset('js/lightbox-plus-jquery.min.js')}}"></script>

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
.html('<span>' +$(this).text() + '</span>');
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

<script>
    function toggleChevron(e) {
        $(e.target)
            .prev('.panel-heading')
            .find("i.indicator")
            .toggleClass('ti-angle-up ti-angle-down');
    }
    $('#accordion').on('hidden.bs.collapse', toggleChevron);
    $('#accordion').on('shown.bs.collapse', toggleChevron);
</script>

<script>
    $(document).ready(function() {

        $('.worker-info-radio').on('change', function() {
            $('.student-info').css("display", "none");
            $('.radio-label-work').css("color", "#00BAFF");
            $('.radio-label-student').css("color", "#414141");
            $('.worker-info').css("display", "block");
        })
        $('.student-info-radio').on('change', function() {
            $('.worker-info').css("display", "none");
            $('.radio-label-student').css("color", "#00BAFF");
            $('.radio-label-work').css("color", "#414141");
            $('.student-info').css("display", "block");
        })

        setTimeout(function() { 
            $('.flexbox.default').fadeOut();
    }, 2000);
       
    });

    $('#apartment-review-Indicators').carousel({
    interval: 5000
});

$('#apartment-review-Indicators').hover(function() {
    $(this).carousel('pause');
}, function() {
    $(this).carousel('cycle');
});


$(function() {
      $('.dropdown').on({
          "click": function(event) {
            if ($(event.target).closest('.filter-widget-inner-drop-list').length) {
              $(this).data('closable', true);
            } else {
              $(this).data('closable', false);
            }
          },
          "hide.bs.dropdown": function(event) {
            hide = $(this).data('closable');
            $(this).data('closable', true);
            return hide;
          }
      });
  });


  $(document).ready(function(){
 
    if(document.getElementById('numbersonly')){
        document.getElementById('numbersonly').addEventListener('keydown', function(e) {
            var key   = e.keyCode ? e.keyCode : e.which;
            
            if (!( [8, 9, 13, 27, 46, 110, 190].indexOf(key) !== -1 ||
                (key == 65 && ( e.ctrlKey || e.metaKey  ) ) || 
                (key >= 35 && key <= 40) ||
                (key >= 48 && key <= 57 && !(e.shiftKey || e.altKey)) ||
                (key >= 96 && key <= 105)
            )) e.preventDefault();
        });
    }
    
function bs_input_file() {
	$(".input-file").before(
		function() {
			if ( ! $(this).prev().hasClass('input-ghost') ) {
				var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
				element.attr("name",$(this).attr("name"));
				element.change(function(){
					element.next(element).find('input').val((element.val()).split('\\').pop());
				});
				$(this).find("button.btn-choose").click(function(){
					element.click();
				});
				
				$(this).find('input').css("cursor","pointer");
				$(this).find('input').mousedown(function() {
					$(this).parents('.input-file').prev().click();
					return false;
				});
				return element;
			}
		}
	);
}
$(function() {
	bs_input_file();
});

});

</script>