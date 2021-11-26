jQuery(document).ready(function ($) {
  var qty = 4;
  if ($(window).width() < 500) {
    qty = 1;
  } else if ($(window).width() < 900 && $(window).width() > 500) {
    qty = 2;
  } else if ($(window).width() < 1100 && $(window).width() > 900) {
    qty = 3;
  }
  $(".partners-slider").slick({
    autoplay: 3000,
    slidesToShow: qty,
    prevArrow: '<div class="slider-arrow slider-arrow-prev"></div>',
    nextArrow: '<div class="slider-arrow slider-arrow-next"></div>',
  });

  var inputmask_96e76a5f = {"mask":"+7(999)999-99-99"};
  jQuery("input[type=tel]").inputmask(inputmask_96e76a5f);

  $('.hamburger').click(function () {
    $('.mob-menu').css('bottom', '0');
  });
  $(".close-menu").click(function () {
    $('.mob-menu').css('bottom', '120%');
  }); 
  jQuery(".dialog-cb-button__decstop a").click(function(){
    
    headerwin = jQuery(this).data("headerwin"); 
    btn = jQuery(this).data('btn');
    
    jQuery('#phone-modal').arcticmodal();
  });

  lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true,
    'albumLabel': ''
  });

  $('.blocks-gallery-item a').attr('data-lightbox', 'reviews');

  $('.popup-content').click(function(e) {
    e.preventDefault();
    var form = $(this).data('mailmsg');
    $("#order-modal .uniSendBtn").attr('data-mailmsg', form);
    $("#order-modal").arcticmodal();
  });


  jQuery(".uniSendBtn").click(function(){ 
      var formid = jQuery(this).data("formid");
      var message = jQuery(this).data("mailmsg");
      var tel = jQuery(this).siblings('input[type=tel]').val();
      var name = jQuery(this).siblings('input[name=name]').val();
      
      if ((tel == "")||(tel.indexOf("_")>0)) {
        jQuery(this).siblings('input[type=tel]').css("background-color","#ff91a4")
      } else {
        var  jqXHR = jQuery.post(
          allAjax.ajaxurl,
          {
            action: 'universal_send',    
            nonce: allAjax.nonce,
            msg: message,
            name: name,
            tel: tel
          }
          
        );
        
        
        jqXHR.done(function (responce) {
          $.arcticmodal('close');
          // jQuery('#messgeModal #lineMsg').html("Ваша заявка принята. Мы свяжемся с Вами в ближайшее время.");
          // jQuery('#messgeModal').arcticmodal();
          window.location.href = "https://biot-gk.ru/spasibo-za-zayavku/";
          
        });
        
        jqXHR.fail(function (responce) {
          jQuery('#messgeModal #lineIcon').html('');
          jQuery('#messgeModal #lineMsg').html("Произошла ошибка! Попробуйте позднее.");
          jQuery('#messgeModal').arcticmodal();
        });
      }
    });
});
