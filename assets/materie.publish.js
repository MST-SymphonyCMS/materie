/* Symphony Environment —> z. B. Symphony.Context.get('env').page; */
jQuery(window).load(function(){
  
  // disable symphony css
  jQuery('link[href$="symphony.min.css"]').attr('disabled', 'disabled');

  // add empty placeholders
  // jQuery('input, textarea').attr('placeholder',' ');

});