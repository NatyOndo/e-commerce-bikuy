//Giving functionalities to the search bar elements
$(document).ready(function() {
  $(".dropdown").click(function() {
    $(".dropdown-list ul").toggleClass("active");
  });

  //Selecting category on dropdown list
  $(".dropdown-list ul li").click(function() {
    var category_text = $(this).html();
    $(".default-option").html(category_text);
  });

  //Hiding category dropdown list when click outside search Bar

  $(document).on("click", function(event) {
      if (!$(event.target).closest(".dropdown").length) {
      $(".dropdown-list ul").removeClass("active");
    }

  });

});
