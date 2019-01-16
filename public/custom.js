
jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
  });


  $(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $(this).toggleClass('active');
    });
});
// $(window).bind('beforeunload', function(){
//     $('.body').addClass('slide-out-fwd-center');
// });
// $('.body').addClass('slide-in-fwd-center');

$('.anim').addClass('active');


// $('.body').addClass('active');
// setTimeout(function() {
//     $('.body').removeClass('active')
// }, 900);
