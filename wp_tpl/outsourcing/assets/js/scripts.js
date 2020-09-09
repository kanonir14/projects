/**
 * Device/Browser Detection
 */

var ua = {
  Android: function () {
    return !!navigator.userAgent.match(/android/i);
  },

  iOS: function () {
    return !!navigator.platform.match(/ip(hone|od|ad)/i);
  },

  Mac: function () {
    return /mac/i.test(navigator.platform);
  },

  Apple: function () {
    return ua.iOS() || ua.Mac();
  },

  Mobile: function () {
    return ua.iOS() || ua.Android();
  },

  IE: function () {
    return /msie|trident/i.test(navigator.userAgent);
  },

  Edge: function () {
    return /Edg(e|)/i.test(navigator.userAgent);
  },

  Chrome: function () {
    return /chrom(e|ium)/i.test(navigator.userAgent);
  },

  Firefox: function () {
    return /firefox/i.test(navigator.userAgent);
  },

  Safari: function () {
    return /^((?!chrome|android).)*safari/i.test(navigator.userAgent);
  },
};

// jQuery

$(function () {
  var animationend = "webkitAnimationEnd animationend",
    animationiteration = "webkitAnimationIteration animationiteration";

  objectFitImages();

  /**
   * Nav
   */

  var $nav = $(".header-nav");
  var $navToggle = $(".nav-toggle");

  $navToggle.on("click", function () {
    $nav.stop(true).slideToggle();
    $navToggle.toggleClass("close-nav");
  });

  /**
   * Waypoints
   */

  $(
    ".top-banner, .about-item-row, .descr-item, .features-list, .partners, .how-we, .features-title, .contact-items-wrap, .form-wrap__contact, .contact-title, .about-title"
  ).waypoint(
    function (direction) {
      if (direction === "down") {
        $(this.element).addClass("animated");
        this.destroy();
      }
    },
    {
      offset: function () {
        return this.context.innerHeight() * 0.82;
      },
    }
  );

  $(".order-gallery").waypoint(
    function (direction) {
      if (direction === "down") {
        $(this.element).addClass("animated");
        this.destroy();
      }
    },
    {
      offset: function () {
        return this.context.innerHeight();
      },
    }
  );

  /**
   * Scrolling
   */

  $('a[href^="#"]').click(function () {
    var link = this;
    var offset = 0;

    var $target = $(link.hash);
    var toBottom = $target.data("scroll-bottom");
    var offset = $target.data("scroll-offset") || -1;

    if ($target.length) {
      if (!toBottom) {
        offset = $target.offset().top - offset;
      } else {
        offset = scrollToBottom($target);
      }

      $("html, body").animate(
        {
          scrollTop: offset,
        },
        1000
      );
    } else {
      console.log("$target is undefined!");
    }

    return false;
  });

  function scrollToBottom($target) {
    return $target.offset().top + $target.height() - window.innerHeight;
  }

  /**
   * Media Queries
   */

  function mediaQuery(mqStr, match, mismatch) {
    var mq = matchMedia(mqStr);

    mq.addListener(widthChange);
    widthChange(mq, true);

    function widthChange(mq, load) {
      load = typeof load !== "undefined" ? load : false;

      if (mq.matches) {
        match(load);
      } else {
        mismatch(load);
      }
    }
  }
});
