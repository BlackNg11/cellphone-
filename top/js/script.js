(function($) {
  $(function() {
    $('.js-locationBtn').click(function() {
      var mParent = $(this).parent();

      mParent.toggleClass('Menu-branch-search-location--active');
    });

    $('.js-locationOption').click(function() {
      var mLocation = $(this).find('span').text();
      var locationBtn = $('.js-locationBtn');
      locationBtn.text(mLocation);
      locationBtn.parent().removeClass('Menu-branch-search-location--active');
    });

    $('.js-navHambuger').click(function() {
      $('.js-nav').toggleClass('nav--active')

    });
  })
})(jQuery);
