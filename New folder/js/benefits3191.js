!function(e){var t={};function n(o){if(t[o])return t[o].exports;var i=t[o]={i:o,l:!1,exports:{}};return e[o].call(i.exports,i,i.exports,n),i.l=!0,i.exports}n.m=e,n.c=t,n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var i in e)n.d(o,i,function(t){return e[t]}.bind(null,i));return o},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=7)}({7:function(e,t,n){e.exports=n("DnZt")},DnZt:function(e,t,n){"use strict";n.r(t);var o=n("W7n1");Object(o.a)()?$(".solutionsBenefits .item").on("click",(function(){$(".solutionsBenefits .item").removeClass("active"),$(".solutionsBenefits .item.hideTop").removeClass("hideTop"),$(this).addClass("active"),$(this).next().addClass("hideTop")})):$(".solutionsBenefits .item").on({mouseenter:function(){$(this).addClass("active"),$(this).next().addClass("hideTop")},mouseleave:function(){$(this).removeClass("active"),$(this).next().removeClass("hideTop")}})},W7n1:function(e,t,n){"use strict";function o(){return!("undefined"==typeof window||!("ontouchstart"in window||window.DocumentTouch&&"undefined"!=typeof document&&document instanceof window.DocumentTouch))||!("undefined"==typeof navigator||!navigator.maxTouchPoints&&!navigator.msMaxTouchPoints)}n.d(t,"a",(function(){return o}))}});