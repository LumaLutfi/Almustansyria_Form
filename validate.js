$(document).ready(function() {
    jQuery(function($){
      var input = $('[type=tel]')
      input.mobilePhoneNumber({allowPhoneWithoutPrefix: '+1'});
      input.bind('country.mobilePhoneNumber', function(e, country) {
        $('.country').text(country || '')
      })
    });
  });