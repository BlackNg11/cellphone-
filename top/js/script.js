(function($) {
  $(function() {
    //Sub menu search location
    $(".js-locationBtn").click(function() {
      var mParent = $(this).parent();

      mParent.toggleClass("Menu-branch-search-location--active");
    });

    $(".js-locationOption").click(function() {
      var mLocation = $(this)
        .find("span")
        .text();
      var locationBtn = $(".js-locationBtn");
      locationBtn.text(mLocation);
      locationBtn.parent().removeClass("Menu-branch-search-location--active");
    });

    //Active hambuger when click
    $(".js-navHambuger").click(function() {
      $(".js-nav").toggleClass("nav--active");
      if ($(".js-nav").hasClass("nav--active")) {
        $("body").addClass("noScroll");
      } else {
        $("body").removeClass("noScroll");
      }
    });

    /******************ABOUT CAROUSEL**********************/
    var carousel = $(".js-carousel");
    var carouselCtx = $(".js-carouselCtx");
    var listItem = $(".js-carouselList");
    var itemLength = $(".js-carouselList .carousel-content-list-item").length;
    var currentX = 0;
    var startPoint = 0;
    var currerntItem = 1;
    var isScrolling = false;
    var isBack = false;

    //Tinh chieu dai hinh de Responsive:X = Chieu dai / chieu cao => chieu cao = chieu dai / X
    function carouselInit() {
      var mWidth = carousel.width();
      var mHight = mWidth / 2.665;
      carouselCtx.height(mHight);
    }

    carouselInit();

    function scrollCarousel(index) {
      isScrolling = true;
      var carouselItem = $("#carousel" + index);

      if (carouselItem.length === 0) {
        isScrolling = false;
        return;
      }

      if (carouselItem.hasClass("Clone")) {
        index = carouselItem.attr("data-index");
        var realItem = $("#carousel" + index);
        currerntItem = index;
      }

      $(".carousel-nav-item--active").removeClass("carousel-nav-item--active");
      $(".js-carouselNavItem[data-index=" + index + "]").addClass(
        "carousel-nav-item--active"
      );

      listItem.animate(
        {
          left: 0 - carouselItem.position().left
        },
        400,
        function() {
          if (carouselItem.hasClass("Clone")) {
            listItem.css("left", 0 - realItem.position().left);
          }
          isScrolling = false;
        }
      );
    }

    $(window).on("resize", function() {
      carouselInit();
    });

    $(".js-carouselNavItem").click(function() {
      if ($(this).hasClass("carousel-nav-item--active")) {
        return;
      }

      var index = $(this).attr("data-index");
      currerntItem = index;
      var carouselItem = $("#carousel" + currerntItem);
      scrollCarousel(currerntItem);
    });

    $(".carousel-content__button").click(function() {
      if (isScrolling) {
        return;
      }

      if ($(this).hasClass("carousel-content__button--right")) {
        currerntItem++;
      } else {
        currerntItem--;
      }

      /* Click tu min xuong max va max len min carousel */
      // if (currerntItem > itemLength) {
      //   currerntItem = 1;
      // } else if (currerntItem < 1) {
      //   currerntItem = itemLength;
      // }

      scrollCarousel(currerntItem);
    });

    //Su kien mouse move carousel
    // $(window).on('mousemove', function(e) {
    //   //e.pageX - Khoang cach chuot toi le trai man hinh
    //   //e.pageY - Khoang cach chuot toi le tren man hinh
    //   $('.js-carouselList').css({
    //     left: e.pageX
    //   });
    // })

    function carouselGrab(e) {
      isBack = true;
      var distance = e.pageX - currentX;
      currentX = e.pageX;
      $(".js-carouselList").css({
        left: $(".js-carouselList").position().left + distance
      });

      if (e.pageX - startPoint >= 200) {
        isBack = false;
        currerntItem--;

        scrollCarousel(currerntItem);
        window.removeEventListener("mousemove", carouselGrab);
        window.removeEventListener("mouseup", carouselStop);
      } else if (startPoint - e.pageX >= 200) {
        isBack = false;
        currerntItem++;

        scrollCarousel(currerntItem);
        window.removeEventListener("mousemove", carouselGrab);
        window.removeEventListener("mouseup", carouselStop);
      }
    }

    function carouselStop(e) {
      window.removeEventListener("mousemove", carouselGrab);
      window.removeEventListener("mouseup", carouselStop);

      if (isBack) {
        var carouselItem = $("#carousel" + currerntItem);
        listItem.animate(
          {
            left: 0 - carouselItem.position().left
          },
          400,
          function() {
            isScrolling = false;
          }
        );
      }
    }

    function setUpCarousel() {
      var realFirstItem = listItem.find(".carousel-content-list-item").first();
      var firstItemClone = listItem
        .find(".carousel-content-list-item")
        .first()
        .clone();
      var firstItemIndex = itemLength + 1;
      firstItemClone.attr("id", "carousel" + firstItemIndex);
      firstItemClone.addClass("Clone");

      var lastItemClone = listItem
        .find(".carousel-content-list-item")
        .last()
        .clone();
      var lastItemIndex = 0;
      lastItemClone.attr("id", "carousel" + lastItemIndex);
      lastItemClone.addClass("Clone");

      listItem.append(firstItemClone);
      listItem.prepend(lastItemClone);

      listItem.css("left", 0 - realFirstItem.position().left);
    }
    setUpCarousel();

    $(".js-carouselList img").on("mousedown", function(e) {
      e.preventDefault();
    });

    $(".js-carouselList").on("mousedown", function(e) {
      currentX = e.pageX;
      startPoint = currentX;
      window.addEventListener("mousemove", carouselGrab);
      window.addEventListener("mouseup", carouselStop);
    });

    setInterval(function() {
      currerntItem++;
      scrollCarousel(currerntItem);
    }, 5000);

    /****************** PRODUCT **********************/
    //Active gift when Click
    //  var isGiftActive = false;

    $(".js-productGiftButton").click(function() {
      // if (isGiftActive) {
      //    return;
      //  }

      isGiftActive = true;
      var parent = $(this).parent();
      if (parent.hasClass("product-content-item-gift--active")) {
        parent.removeClass("product-content-item-gift--active");

        setTimeout(function() {
          parent.find(".product-content-item-gift-detail").hide();
          //isGiftActive = false;
        }, 500);
      } else {
        parent.find(".product-content-item-gift-detail").show();

        setTimeout(function() {
          parent.addClass("product-content-item-gift--active");
          //isGiftActive = false;
        }, 20);
      }
    });

    $(".js-productCartBtn").click(function() {
      var cartNum = $(".js-cartView").attr("data-count");
      cartNum++;
      var parent = $(this).closest('.product-content-item');
      var productName = parent.find('.product-content-item-detail__name').text();
      $(".js-cartView").attr("data-count", cartNum);
      showNotification(productName , cartNum % 2);
    });

    setTimeout(function() {
      $(".js-cart").removeClass("cart--disable");

    }, 1000);


    /****************** NOTIFICATION **********************/
    var Notification = {
      body: $('.js-notification'),
      message: $('.js-notiMessage'),
      isNeedToClose: true
    }

    var myTimeOut;

    function showNotification(productName, isError) {
      if (Notification.body.hasClass('notification--active')) {
        clearTimeout(myTimeOut);
        closeNotification(true, productName, isError);
        return;
      }
      Notification.body.attr('data-error',isError);
      Notification.message.text('Them san pham' + productName + 'thanh cong')
      Notification.body.addClass('notification--active');
      myTimeOut = setTimeout(closeNotification,4000);
    }

    function closeNotification(isReopen = false, newProductName = "", isError = 0) {
      if (isReopen) {
        setTimeout(function () {
          showNotification(newProductName, isError);
        }, 500);
      }
      Notification.body.removeClass('notification--active');
    }















  });
})(jQuery);
