$(document).ready(function() {
    setTimeout(function() {
        $(".site-loading-wrap").fadeOut("slow");
    }, 800);
});


$(document).on("submit", "#inquiry", function(event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: BASE_URL + "contact-submit",
        data: $(this).serialize(),
        beforeSend: function() {
            $(".form-control").removeClass("error");
            $(".g-recaptcha iframe").removeClass("error");
        },
        success: function(data, status) {
            var result = JSON.parse(data);

            if (result.status.type == "success") {
                $("#inquiry")[0].reset();
                grecaptcha.reset();
                $.alert({
                    title: "Success!",
                    type: "green",
                    content: "Thank you for your inquiry. We’ll be in touch with you!"
                });
            } else {
                if (result.status.msg) {
                    if (result.status.msg.email) {
                        $('input[name="email"]').addClass("error");
                    }
                    if (result.status.msg.name) {
                        $('input[name="name"]').addClass("error");
                    }
                    if (result.status.msg.phone) {
                        $('input[name="phone"]').addClass("error");
                    }
                    if (result.status.msg.company) {
                        $('input[name="company"]').addClass("error");
                    }
                    if (result.status.msg["g-recaptcha-response"]) {
                        grecaptcha.reset();
                        $(".g-recaptcha iframe").addClass("error");
                    }
                }
            }
        },
        error: function(res, status) {
            $.alert({
                title: "Error!",
                type: "red",
                content: "Something happened."
            });
        }
    });
});






// $(document).on("submit", "#inquiry", function(event) {
// 	event.preventDefault();
// 	$.ajax({
// 		type: "POST",
// 		url: BASE_URL + "contact-submit",
// 		dataType: "json",
// 		data: $(this).serialize(),
// 		beforeSend: function() {
// 			// do some animation here 
// 		},
// 		success: function(data, status) {
// 			if (data.status) {
// 				$("#inquiry")[0].reset();
// 				$.alert({
// 					title: "Success!",
// 					type: "green",
// 					content: "Thank you for your message. We’ll be in touch!"
// 				});
// 			} else {
// 				$.alert({
// 					title: "Error!",
// 					type: "red",
// 					content: "Something happened."
// 				});
// 			}
// 		},
// 		error: function(res, status) {
// 			$.alert({
// 				title: "Error!",
// 				type: "red",
// 				content: "Something happened."
// 			});
// 		}
// 	});
// });





// $(function() {
//     $('#demoOne').listnav({
//         initHidden: true
//     });
//     $('.client-list li').click(function(e) {
//         e.preventDefault();
//     });
// });


$('.carousel').carousel({
    interval: 2000,
    pause: true,
});
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

$(document).ready(function() {
    $(".dropdown-menu .filter-widget-inner a").click(function() {
        $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
        $(this).parents(".dropdown").find('.btn').val($(this).data('value'));

        if ($(this).attr('value') == "General Enquiry") {
            $('.accommondation-wrap').css("display", "none");
        } else {
            $('.accommondation-wrap').css("display", "block");
        }
    });
})
