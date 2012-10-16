/*!
 * Copyright 2010, Eduardo Daniel Sada
 *
 * Date: (Oct 09 2010)
 */

jQuery(document).ready(function($){

  $("ul.aeropaneltabs li").click(function(ev){
    $("ul.aeropaneltabs li").removeClass('active');
    $(this).toggleClass('active');
  
    $('.container .aerotab').hide();
    $('#tab_' + $("a", this).attr('href').replace("#", "").replace(" ","_")).fadeIn();

    ev.preventDefault();
  });
  
  if (window.location.hash && $("ul.aeropaneltabs li").find("a[href="+window.location.hash+"]").parents("li").length > 0) {
    $("ul.aeropaneltabs li").removeClass('active');
    $("ul.aeropaneltabs li").find("a[href="+window.location.hash+"]").parents("li").toggleClass('active');
  
    $('.container .aerotab').hide();
    $('#tab_' + window.location.hash.replace("#", "")).show();
  }

  $('form a.submit').click(function(evt){
    var href = $(this).attr('href');
    if ('#' != href) {
      $(this).parents('form').attr('action', href);
    }
    $(this).parents('form').get(0).submit();
    evt.preventDefault();
  });
  
});