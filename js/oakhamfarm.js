jQuery( document ).ready(function() {

  /* When the search icon is clicked, open the search overlay */
  $("#searchbutton").click(function(){
  $("#searchoverlay").toggleClass("blogbannersearch-active");
});

  /* When the menu icon is clicked, open the mobile menu */
  $("#burger-icon").click(function(){
    $("#mobile-menu").addClass("mobilemenu-open");
    $("#whole-body").addClass("fixedposition");
  });

  /* When the menu close icon is clicked, close the mobile menu */
  $("#mobileMenuCloseButton").click(function(){
    $("#mobile-menu").removeClass("mobilemenu-open");
    $("#whole-body").removeClass("fixedposition");
  });



  /* When the menu close icon is clicked, close the mobile menu */
  $("#smallermenu-button").click(function(){
    $("#smallermenu-menu").toggleClass("smallermenu-menu-container-open");

  });

  });
