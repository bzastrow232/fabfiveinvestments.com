//Toggle search input
$(document).ready(function(){

  //Hide input search
  $(".input-search").hide();

  //On submit search
  $(".btn-submit-search").on('click',function(){
    $(".input-search").toggle();
  });

  //Move navbar text right
  $(".navbar-nav").addClass("ml-auto");

  //Append hr element to recent posts widget
  $(".rpwwt-widget ul > li").append("<hr>");

  $(".pagination h2").hide();
  
});
