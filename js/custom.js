// Function for review bar
(function ($) {

  'use strict';

  if ('set' !== $.cookie('fc-pop')) {


    $('.hide-fc').click(function () {
      $.cookie('fc-pop', 'set', { expires: 7, path: '/' });
      $('.fc').remove();
    });

  }

  if ('set' == $.cookie('fc-pop')) {
    $('.fc').remove();
  }

}(jQuery));

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

// Change lable
jQuery('input, textarea').each(function () {
  checkForInput(this);
});

jQuery('input, textarea').on('change keyup', function () {
  checkForInput(this);
});

jQuery("input, textarea").focus(function () {
  jQuery(this).parent().addClass("val");
});

jQuery("input, textarea").focusout(function () {
  jQuery(this).parent().removeClass("val");
});

// Sub menu toggle
jQuery("body").on('click', '.mobile-nav .menu-item-has-children', function () {
  jQuery(this).find('.sub-menu').slideToggle();
  jQuery(this).toggleClass('is--open');
});

// Mobile nav toggle
jQuery("body").on('click', '.mobnav', function () {
  jQuery(this).toggleClass('is--active');
  jQuery('.mobile-nav').toggleClass('nav-open');
});

// Change nav class
jQuery(window).scroll(function () {
  var scroll = jQuery(window).scrollTop();
  if (scroll >= 600) {
    jQuery("nav").addClass("is__scrolled");
    jQuery("nav .container").addClass("fw");
  } else {
    jQuery("nav").removeClass("is__scrolled");
    jQuery("nav .container").removeClass("fw");
  }
});

// Make back to top visible
jQuery(window).scroll(function () {
  var scroll = jQuery(window).scrollTop();
  if (scroll >= 600) {
    jQuery(".btp").addClass("is--visible");
  } else {
    jQuery(".btp").removeClass("is--visible");
  }
});

// Back to top
jQuery('.btp').on('click', function (e) {
  e.preventDefault();
  jQuery('html, body').animate({ scrollTop: 0 }, '300');
});

// Hamburger menu
jQuery("body").on('click', '.hamburger', function () {
  jQuery(this).toggleClass('h--open');
  jQuery('.mgm').toggleClass('clickable');
  jQuery('.l').animate({ 'height': 'toggle' }, 400);
  jQuery('.r').animate({ 'width': 'toggle' }, 400);
  jQuery('.mgm h2').toggleClass('is--visible');
  jQuery('.news-nav').toggleClass('is--visible');
  jQuery('.mgm--nav li').toggleClass('is--shown');
});


jQuery("body").on('click', '.search-button', function () {
  jQuery('.search--form').animate({ 'height': 'toggle' }, 200);
});

jQuery("body").on('click', '#newsletterbtn', function () {
  jQuery('.newsletter--bar').animate({ 'height': 'toggle' }, 200);
});


jQuery(document).ready(function () {
  jQuery("body").on('click', '.regio--name', function () {
    jQuery(this).next('.branches').slideToggle(200);
    jQuery(this).toggleClass('is--open');
  });
});

// Change nav class on scroll
jQuery(window).scroll(function () {
  var scroll = jQuery(window).scrollTop();
  if (scroll >= 100) {
    jQuery("header").addClass("has_scrolled");
  } else {
    jQuery("header").removeClass("has_scrolled");
  }
});

// Reading progress
jQuery(window).scroll(function (event) {
  var scrollTop = jQuery(window).scrollTop();
  docHeight = jQuery(document).height(),
    winHeight = jQuery(window).height(),
    scrollPercent = (scrollTop) / (docHeight - winHeight),
    scrollPercentageString = (scrollPercent * 100) + "%",
    readingIndicator = jQuery(".reading-progress");
  readingIndicator.width(scrollPercentageString);
});

// Smoothscroll
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


// No opener
function noOpener() {
  //get elements
  var e = document.querySelectorAll('a[target="_blank"]:not([rel~="noopener"])');
  if (e.length) {
    //loop through
    for (i = 0; i < e.length; ++i) {
      //check for existing rel
      var rel = e[i].getAttribute('rel');
      if (rel) {
        //we don't want doubel noreferrer
        rel = rel.replace('noreferrer', '');
        e[i].setAttribute('rel', rel + ' noopener noreferrer nofollow');
      } else {
        e[i].setAttribute('rel', 'noopener noreferrer');
      }

    }
  }
}

jQuery(document).ready(function () {
  noOpener()
});


// Fill e-mail from footer form
var email = jQuery.cookie('e-mailadres');
if (email == null) {
}
else {
  document.getElementById('inputEmail').value = jQuery.cookie('e-mailadres');
}