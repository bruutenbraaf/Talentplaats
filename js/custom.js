jQuery(function () {
  // initialize skrollr if the window width is large enough
  if (jQuery(window).width() > 767) {
    skrollr.init({
      forceHeight: false,
    });
  }

  // disable skrollr if the window is resized below 768px wide
  jQuery(window).on('resize', function () {
    if (jQuery(window).width() <= 1024) {
      skrollr.init().destroy(); // skrollr.init() returns the singleton created above
    }
  });
});

function checkForInput(element) {
  // element is passed to the function ^
  
  const $label = jQuery(element).siblings('label');

  if (jQuery(element).val().length > 0) {
    $label.addClass('input-has-value');
    jQuery(element).addClass('val');
  } else {
    $label.removeClass('input-has-value');
    jQuery(element).removeClass('val');
  }
}

// The lines below are executed on page load
jQuery('input, textarea').each(function() {
  checkForInput(this);
});

// The lines below (inside) are executed on change & keyup
jQuery('input, textarea').on('change keyup', function() {
  checkForInput(this);  
});


jQuery("input, textarea").focus(function(){
  jQuery(this).parent().addClass("val");
});

jQuery("input, textarea").focusout(function(){
  jQuery(this).parent().removeClass("val");
});



jQuery(window).scroll(function() {    
    var scroll = jQuery(window).scrollTop();
    if (scroll >= 600) {
        jQuery(".btp").addClass("is--visible");
    } else {
        jQuery(".btp").removeClass("is--visible");
    }
  });
  
  jQuery('.btp').on('click', function(e) {
    e.preventDefault();
    jQuery('html, body').animate({scrollTop:0}, '300');
  });

jQuery( "body" ).on('click', '.hamburger', function() {
  jQuery('.mgm').toggleClass('clickable');
    jQuery('.l').animate({'height': 'toggle'}, 400);
    jQuery('.r').animate({'width': 'toggle'}, 400);
    jQuery('.mgm h2').toggleClass('is--visible');
    jQuery('.news-nav').toggleClass('is--visible');
    jQuery('.mgm--nav li').toggleClass('is--shown');
  });


  jQuery( "body" ).on('click', '.search-button', function() {
    jQuery('.search--form').animate({'height': 'toggle'}, 200);
  });

  jQuery( "body" ).on('click', '#newsletterbtn', function() {
    jQuery('.newsletter--bar').animate({'height': 'toggle'}, 200);
  });


  jQuery(document).ready(function() {

    jQuery("body").on('click', '.regio--name', function() {
      jQuery(this).next('.branches').slideToggle(200);
      jQuery(this).toggleClass('is--open');
    });
  });


jQuery(window).scroll(function() {    
  var scroll = jQuery(window).scrollTop();
  if (scroll >= 100) {
      jQuery("header").addClass("has_scrolled");
  } else {
      jQuery("header").removeClass("has_scrolled");
  }
});

jQuery(window).scroll(function() {    
  var scroll = jQuery(window).scrollTop();
  if (scroll >= 160) {
      jQuery(".reading-progress").addClass("visible");
  } else {
      jQuery(".reading-progress").removeClass("visible");
  }
});


jQuery(window).scroll(function(event) {
  var scrollTop = jQuery(window).scrollTop();
  docHeight = jQuery(document).height(),
  winHeight = jQuery(window).height(),
  scrollPercent = (scrollTop) / (docHeight - winHeight),
  scrollPercentageString = (scrollPercent * 100) + "%",
  readingIndicator = jQuery(".reading-progress");
  readingIndicator.width(scrollPercentageString);
});


jQuery('.countnumber').each(function () {
    jQuery(this).prop('Counter',0).animate({
        Counter: jQuery(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            jQuery(this).text(Math.ceil(now));
        }
    });
});

jQuery('a[href*=\\#]').on('click', function (event) {
  target = jQuery(this).attr('href');
  if (target === '#') {
      event.preventDefault();
      return;
  } else if (target.slice(0, 1) === '#') {
      event.preventDefault();
      jQuery('html,body').animate({ scrollTop: jQuery(this.hash).offset().top }, 1000);
  }
});