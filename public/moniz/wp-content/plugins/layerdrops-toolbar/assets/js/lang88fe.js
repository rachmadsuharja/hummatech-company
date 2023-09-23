(function ($) {
  "use strict";
  window.onload = function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'ES',
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
      },
      "google_translate_element"
    );
  }

  function triggerHtmlEvent(element, eventName) {
    var event;
    if (document.createEvent) {
      event = document.createEvent("HTMLEvents");
      event.initEvent(eventName, true, true);
      element.dispatchEvent(event);
    } else {
      event = document.createEventObject();
      event.eventType = eventName;
      element.fireEvent("on" + event.eventType, event);
    }
  }

  function deleteAllCookies() {
    var cookies = document.cookie.split(";");

    for (var i = 0; i < cookies.length; i++) {
      var cookie = cookies[i];
      var eqPos = cookie.indexOf("=");
      var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
      document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:01 GMT;";
    }
  }
  $(".language-feature button.ltr-switcher").on("click", function (e) {
    e.preventDefault();
    window.location = '?' + jQuery(this).attr("data-href");
    deleteAllCookies();

  });
  $(".language-feature button.rtl-switcher").on("click", function (e) {
    e.preventDefault();
    window.location = '?rtl_mode=true' + jQuery(this).attr("data-href");
    deleteAllCookies();
  });

})(jQuery);