!function(e){var o={};function t(i){if(o[i])return o[i].exports;var r=o[i]={i:i,l:!1,exports:{}};return e[i].call(r.exports,r,r.exports,t),r.l=!0,r.exports}t.m=e,t.c=o,t.d=function(e,o,i){t.o(e,o)||Object.defineProperty(e,o,{enumerable:!0,get:i})},t.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},t.t=function(e,o){if(1&o&&(e=t(e)),8&o)return e;if(4&o&&"object"==typeof e&&e&&e.__esModule)return e;var i=Object.create(null);if(t.r(i),Object.defineProperty(i,"default",{enumerable:!0,value:e}),2&o&&"string"!=typeof e)for(var r in e)t.d(i,r,function(o){return e[o]}.bind(null,r));return i},t.n=function(e){var o=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(o,"a",o),o},t.o=function(e,o){return Object.prototype.hasOwnProperty.call(e,o)},t.p="/",t(t.s=3)}({3:function(e,o,t){e.exports=t("nIQU")},W7n1:function(e,o,t){"use strict";function i(){return!("undefined"==typeof window||!("ontouchstart"in window||window.DocumentTouch&&"undefined"!=typeof document&&document instanceof window.DocumentTouch))||!("undefined"==typeof navigator||!navigator.maxTouchPoints&&!navigator.msMaxTouchPoints)}t.d(o,"a",(function(){return i}))},nIQU:function(e,o,t){"use strict";t.r(o);var i=t("W7n1");$((function(){var e=document.querySelector("body"),o=document.querySelector(".menu-trigger"),t=$(".response.done"),r=$(".response.fail"),n=$(".dropItem"),s=$(".formWrapper"),a=(document.querySelector(".preloaderThere"),$(".submit_popup_btn")),l=$(".hidePopUpBtn"),c=$(".showBlogPopup"),d=$(".close_blog"),p=$("#Blog_redirect_form"),u=$(".close_popup_btn"),m=document.querySelector(".allCategory"),f=document.querySelector(".tagList"),g=document.querySelector(".currentLang"),v=document.querySelector(".langSwitcher"),h=document.querySelector("#setFullCookiesBtn"),w=document.querySelector("#setPartCookiesBtn"),b=document.querySelector(".cookiesPolicyWrapper");function y(e,o,t){var i=new Date;i.setTime(i.getTime()+24*t*60*60*1e3);var r="expires="+i.toUTCString();document.cookie=e+"="+o+";"+r+";path=/"}$(".mainPage")&&$(".mainPage .logo > a").removeAttr("href"),$(window).width()<992?$(".dropLi .dropItem").on("click",(function(){$(this).parent().toggleClass("hoverActive")})):$(window).width()>480&&$(window).width()<992?$(".helperImg").append('<img src="/img/mobMenu.webp" type="image/webp"><img src="/img/overlayBg.webp" type="image/webp"><img src="/img/formBg.webp" type="image/webp">'):$(window).width()<481?$(".helperImg").append('<img src="/img/mobMenuMob.webp" type="image/webp"><img src="/img/overlayBgMob.webp" type="image/webp"><img src="/img/formBgMob.webp" type="image/webp">'):($(".helperImg").append('<img src="/img/dropdown.webp" type="image/webp"><img src="/img/mobMenu.webp" type="image/webp"><img src="/img/overlayBg.webp" type="image/webp"><img src="/img/formBg.webp" type="image/webp">'),$(".dropLi, .currentLang").mouseenter((function(){$(this).addClass("hoverActive"),$(".langSwitcher").removeClass("active")})).mouseleave((function(){$(this).removeClass("hoverActive")}))),$(window).width()<992?$(".langSwitcherWrapper").on("click",(function(){$(this).toggleClass("hoverActive")})):$(".langSwitcherWrapper").mouseenter((function(){$(this).addClass("hoverActive")})).mouseleave((function(){$(this).removeClass("hoverActive")})),$(".js-example-basic-single").select2(),function(e){for(var o=e+"=",t=document.cookie.split(";"),i=0;i<t.length;i++){for(var r=t[i];" "==r.charAt(0);)r=r.substring(1);if(0==r.indexOf(o))return r.substring(o.length,r.length)}return""}("acceptPolicy")||b.classList.add("hideCookies"),w.addEventListener("click",(function(){y("acceptPolicy","partly",30),b.classList.remove("hideCookies")})),h.addEventListener("click",(function(){y("acceptPolicy","full",30),b.classList.remove("hideCookies")})),Object(i.a)()&&g&&g.addEventListener("click",(function(){v.classList.toggle("active")})),prodMode&&($(".slick-arrow").on("click",(function(){gtag("event",location.pathname,{event_category:"Button",event_action:"Click"})})),$(".slick-dots li").on("click",(function(){gtag("event",location.pathname,{event_category:"Button",event_action:"Click"})})),$(".btnTotop").on("click",(function(){gtag("event",location.pathname,{event_category:"Button",event_action:"Click"})})),$(".btnPopUpSales").on("click",(function(){gtag("event",location.pathname,{event_category:"Button",event_action:"Click"})})),$(".mobileNavBtn").on("click",(function(){gtag("event",location.pathname,{event_category:"Button",event_action:"Click"})})));var C=0,k=$(".fixedWraper").height();function x(){for(var e=0;e<$(".blackTop").length;e++){$(".btnTotop").removeClass("light");var o=$(".blackTop")[e],t=$(o).offset().top,i=$(o).offset().top+$(o).innerHeight(),r=$(window).scrollTop()+$(window).innerHeight()-150;if(t<=r&&r<=i){$(".btnTotop").addClass("light");break}}}function S(e){var o=$(window).scrollTop(),t=o+$(window).height(),i=$(e).offset().top-200;return i+$(e).height()<=t&&i>=o}function W(e,o){e.each((function(){$(this)&&(S($(this))?setTimeout((function(){o()}),300):setTimeout((function(){o()}),2e3))}))}$(window).scrollTop()>k&&($(".fixedWraper").css("position","fixed"),$(window).width()<992?($(".fixedWraper").removeClass("mobHeader"),$(".fixedWraper").css("top","0%"),$(".fixedWraper").hasClass("mainHeader")&&$(".fixedWraper").removeClass("headerBg")):($(".fixedWraper").css("top","0%"),$(".fixedWraper").addClass("hideLang"),$(".fixedWraper").hasClass("mainHeader")&&$(".fixedWraper").removeClass("headerBg"))),$(window).on("scroll",(function(){var e,o;e=$(this).scrollTop(),o=e,$(window).width()>992?(k<o&&o>C?($(".fixedWraper").css("position","fixed"),$(".fixedWraper").css("top","0%"),$(".fixedWraper").addClass("hideLang"),$(".fixedWraper").hasClass("mainHeader")&&$(".fixedWraper").removeClass("headerBg")):k>o&&($(".fixedWraper").css("position","relative"),$(".fixedWraper").css("top","0%"),$(".fixedWraper").removeClass("hideLang"),$(".fixedWraper").hasClass("mainHeader")&&$(".fixedWraper").addClass("headerBg")),C=o):($(".fixedWraper").removeClass("mobHeader"),$(".fixedWraper").css("position","fixed"),$(".fixedWraper").css("top","0%"),o>0?$(".fixedWraper").hasClass("mainHeader")&&$(".fixedWraper").removeClass("headerBg"):$(".fixedWraper").hasClass("mainHeader")&&$(".fixedWraper").addClass("headerBg")),x(),$(this).scrollTop()>300?$(".btnTotop").addClass("show"):$(".btnTotop").removeClass("show"),$(".marqueeWrapper").each((function(e){$(this)&&S($(this))&&setTimeout((function(){_()}),300)}))})),W($(".marqueeWrapper"),_),W($(".prodSlide"),(function(){$(".prodSlide .prod_slider").slick({lazyLoad:"progressive",slidesToShow:1,dots:!0,speed:600,cssEase:"linear",arrows:!1,infinite:!0,autoplay:!0,autoplaySpeed:2e3}),$(".slideBtnWrapper .prevBtn").on("click",(function(){$(".prodSlide .prod_slider").slick("slickPrev")})),$(".slideBtnWrapper .nextBtn").on("click",(function(){$(".prodSlide .prod_slider").slick("slickNext")}))})),W($(".blog"),(function(){$(".blog_slider").slick({autoplay:!0,autoplaySpeed:3e3,centerMode:!0,slidesToShow:5,dots:!0,speed:600,cssEase:"linear",arrows:!1,infinite:!0,variableWidth:!0,focusOnSelect:!1,responsive:[{breakpoint:1700,settings:{slidesToShow:3,slidesToScroll:1,centerPadding:"200px"}},{breakpoint:1024,settings:{slidesToShow:1,slidesToScroll:1,centerPadding:"60px"}}]})})),x(),$(".btnTotop").on("click",(function(){$("html, body").animate({scrollTop:0},"1000")})),$(".prod_item_btn").on("click",(function(){console.log($(this).parent()),$(this).toggleClass("rotate"),$(this).parent().toggleClass("show")}));var L=document.querySelector("#backLink");null!=L&&L.addEventListener("click",(function(){window.history.back()}));var T=Math.max.apply(null,$(".productsPreview").map((function(){return $(this).outerHeight()})).get());function _(){var e=$(".listitem.satic").width();document.querySelector(":root").style.setProperty("--widthList","-".concat(e,"px")),$(".marqueeWrapper .list").addClass("animation")}$(".productsPreview").css("min-height",T),window.innerWidth<992&&(n.on("click",(function(){$(this).next().slideToggle(),$(this).toggleClass("rotateArrow")})),$(".dropLi .liText").on("click",(function(){$(this).parent().find(".dropItem").trigger("click")}))),o.addEventListener("click",(function(){var o;this.classList.toggle("active"),$(".mainNav").toggleClass("active"),$(".fixedWraper").toggleClass("navMobBg"),e.classList.toggle("overflow"),o=".navDropDown",document.querySelectorAll(o).forEach((function(e){return e.classList.remove("show")})),v&&v.classList.contains("active")&&v.classList.remove("active")})),c.on("click",(function(){return $(".popUpBlogWrapper").addClass("show"),!1})),d.on("click",(function(){$(".popUpBlogWrapper").removeClass("show"),$("html, body").removeClass("overflow")})),p.on("submit",(function(){return $(".popUpBlogWrapper").removeClass("show"),$("html, body").removeClass("overflow"),location.href=$(this).attr("action"),!1})),u.on("click",(function(){$(".popUpDemoWrapper").removeClass("show"),s.removeClass("hideform"),$("html, body").removeClass("overflow"),$("div.logo > a")[0].click()})),a.on("click",(function(){$(".popUpDemoWrapper").removeClass("show"),s.removeClass("hideform"),$("html, body").removeClass("overflow"),$("#demo_redirect_form").submit()})),l.on("click",(function(){$(".popUpContactsWrapper").removeClass("show"),$(".popUpDemoWrapper").removeClass("show"),s.removeClass("hideform"),t.removeClass("showresponse"),r.removeClass("showresponse"),$(".preloaderThere").removeClass("preloaderForm"),$("html, body").removeClass("overflow")})),m&&m.addEventListener("click",(function(){f.classList.toggle("active")})),$(window).width()>1024&&$(".table:not(.only_one) .table__cell").on({mouseenter:function(){$(this).addClass("active"),$(".table:not(.only_one) .table__cell").not(this).addClass("hide")},mouseleave:function(){$(this).removeClass("active"),$(".table:not(.only_one) .table__cell").not(this).removeClass("hide")}}),$(window).on("resize",(function(){_()})),$(".eventSilder")&&($(window).width()<768?$(".eventSilder").flickity({wrapAround:!0,groupCells:!1,prevNextButtons:!1}):$(".eventSilder").flickity({wrapAround:!0,groupCells:2,prevNextButtons:!1}),$(".btnArrowNext").on("click",(function(){$(".eventSilder").flickity("next")})),$(".btnArrowPrev").on("click",(function(){$(".eventSilder").flickity("previous")}))),function(){var e,o=document.getElementsByTagName("html")[0].getAttribute("lang"),t=document.querySelector(".phone2"),i=document.querySelector("#error-msg2"),r=document.querySelector("#valid-msg2");if(e="en"==o?["This field is required","Invalid country code","Too short","Too long","Invalid number"]:["Неверный номер","Неверный код страны","Слишком короткий","Слишком длинный","Неверный номер"],null!=t||null!=t){var n=window.intlTelInput(t,{separateDialCode:!0,initialCountry:"auto",nationalMode:!0,hiddenInput:"phone",geoIpLookup:function(e){$.get("https://ipinfo.io?token=ca8719504649be",(function(){}),"jsonp").always((function(o){var t=o&&o.country?o.country:"";e(t)}))},utilsScript:"../utils.js"}),s=function(){t.classList.remove("error"),i.innerHTML="",i.classList.add("hide"),r.classList.add("hide")};t.addEventListener("blur",(function(){if(s(),t.classList.remove("valid"),""==t.value.trim())leadClass.parentFind(t).querySelector(".empty").classList.remove("active"),t.classList.add("error"),i.innerHTML=e[0];else if(n.isValidNumber())t.classList.remove("novalid"),t.classList.add("valid");else{if(null==e[r])i.innerHTML=e[2];else{var o=n.getValidationError();i.innerHTML=e[o]}leadClass.parentFind(t).querySelector(".empty").classList.remove("active"),t.classList.add("error")}})),t.addEventListener("change",s),t.addEventListener("keyup",s)}}()}))}});