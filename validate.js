$(document).ready(function() {
    jQuery(function($){
      var input = $('[type=tel]')
      input.mobilePhoneNumber({allowPhoneWithoutPrefix: '+1'});
      input.bind('country.mobilePhoneNumber', function(e, country) {
        $('.country').text(country || '')
      })
    });
  });
  function validate(evt) {
    var theEvent = evt || window.event;
  
    // Handle paste
    if (theEvent.type === 'paste') {
        key = event.clipboardData.getData('text/plain');
    } else {
    // Handle key press
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
    }
    var regex = /[0-9]|\./;
    if( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
    }
  }
  
  

