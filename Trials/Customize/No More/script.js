$(document).ready(function() {
  $(".content").slice(0, 4).show(); // Show the first 4 items initially
  $("#loadMore").on("click", function(e) {
    e.preventDefault();
    $(".content:hidden").slice(0, 4).slideDown(); // Show 4 more items on each click
    if ($(".content:hidden").length == 0) {
      $("#loadMore").text("No Content").addClass("noContent");
    }
  });
});
