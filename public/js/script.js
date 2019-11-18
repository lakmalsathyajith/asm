$(document).ready(function() {
  alert();
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

    // ----------- booking date from to. remove it if you dont want it  ------------------
    // var date = new Date();
    // date.setDate(date.getDate());

    // var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
    // $(".booking-from")
    // 	.datepicker({
    // 		setDate: 'now',
    // 		startDate: date,
    // 		format: "dd M. yyyy",
    // 		maxViewMode: 2,
    // 		autoclose: true,
    // 		todayHighlight: true
    // 	})
    // 	.on("changeDate", function(selected) {
    // 		var minDate = new Date(selected.date.valueOf());
    // 		$(".booking-to").datepicker("setStartDate", minDate);
    // 	});

    // $(".booking-to")
    // 	.datepicker({
    // 		setDate: 'now',
    // 		startDate: date,
    // 		format: "dd M. yyyy",
    // 		maxViewMode: 2,
    // 		autoclose: true,
    // 		todayHighlight: true
    // 	})
    // 	.on("changeDate", function(selected) {
    // 		var maxDate = new Date(selected.date.valueOf());
    // 		$(".booking-from").datepicker("setEndDate", maxDate);
    // 	});
  }
});

$(document).on('submit', '#inquiry', function(event) {
  event.preventDefault();
  $.ajax({
    type: 'POST',
    url: BASE_URL + 'contact-submit',
    data: $(this).serialize(),
    beforeSend: function() {
      $('.form-control').removeClass('error');
      $('.g-recaptcha iframe').removeClass('error');
    },
    success: function(data, status) {
      var result = JSON.parse(data);

      if (result.status.type == 'success') {
        $('#inquiry')[0].reset();
        grecaptcha.reset();
        $.alert({
          title: 'Success!',
          type: 'green',
          content: 'Thank you for your inquiry. We’ll be in touch with you!'
        });
      } else {
        if (result.status.msg) {
          if (result.status.msg.email) {
            $('input[name="email"]').addClass('error');
          }
          if (result.status.msg.name) {
            $('input[name="name"]').addClass('error');
          }
          if (result.status.msg.phone) {
            $('input[name="phone"]').addClass('error');
          }
          if (result.status.msg.company) {
            $('input[name="company"]').addClass('error');
          }
          if (result.status.msg['g-recaptcha-response']) {
            grecaptcha.reset();
            $('.g-recaptcha iframe').addClass('error');
          }
        }
      }
    },
    error: function(res, status) {
      $.alert({
        title: 'Error!',
        type: 'red',
        content: 'Something happened.'
      });
    }
  });
});

// $(function() {
//     $('#demoOne').listnav({
//         initHidden: true
//     });
//     $('.client-list li').click(function(e) {
//         e.preventDefault();
//     });
// });

/*sameera dev */

// $(window).scroll(function() {
//     if ($(window).scrollTop() >= 100) {
//         $('.nav-img').addClass('scrolled');
//         alert('alert')
//     } else {
//         $('.nav-img').removeClass('scrolled');
//     }
// });
// $(function() {
//     $(window).scroll(function() {
//         if ($(window).scrollTop() + $(window).height() == $(document).height()) {
//             alert("bottom!");
//         }
//     });
// });
