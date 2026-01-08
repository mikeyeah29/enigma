/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./blocks sync recursive style\\.scss$"
/*!***********************************!*\
  !*** ./blocks/ sync style\.scss$ ***!
  \***********************************/
(module, __unused_webpack_exports, __webpack_require__) {

var map = {
	"./accordion/style.scss": "./blocks/accordion/style.scss",
	"./hero/style.scss": "./blocks/hero/style.scss",
	"./testimonial-slider/style.scss": "./blocks/testimonial-slider/style.scss"
};


function webpackContext(req) {
	var id = webpackContextResolve(req);
	return __webpack_require__(id);
}
function webpackContextResolve(req) {
	if(!__webpack_require__.o(map, req)) {
		var e = new Error("Cannot find module '" + req + "'");
		e.code = 'MODULE_NOT_FOUND';
		throw e;
	}
	return map[req];
}
webpackContext.keys = function webpackContextKeys() {
	return Object.keys(map);
};
webpackContext.resolve = webpackContextResolve;
module.exports = webpackContext;
webpackContext.id = "./blocks sync recursive style\\.scss$";

/***/ },

/***/ "./blocks/accordion/style.scss"
/*!*************************************!*\
  !*** ./blocks/accordion/style.scss ***!
  \*************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ },

/***/ "./blocks/hero/style.scss"
/*!********************************!*\
  !*** ./blocks/hero/style.scss ***!
  \********************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ },

/***/ "./blocks/testimonial-slider/style.scss"
/*!**********************************************!*\
  !*** ./blocks/testimonial-slider/style.scss ***!
  \**********************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ },

/***/ "./node_modules/aos/dist/aos.js"
/*!**************************************!*\
  !*** ./node_modules/aos/dist/aos.js ***!
  \**************************************/
(module) {

!function(e,t){ true?module.exports=t():0}(this,function(){return function(e){function t(o){if(n[o])return n[o].exports;var i=n[o]={exports:{},id:o,loaded:!1};return e[o].call(i.exports,i,i.exports,t),i.loaded=!0,i.exports}var n={};return t.m=e,t.c=n,t.p="dist/",t(0)}([function(e,t,n){"use strict";function o(e){return e&&e.__esModule?e:{default:e}}var i=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var o in n)Object.prototype.hasOwnProperty.call(n,o)&&(e[o]=n[o])}return e},r=n(1),a=(o(r),n(6)),u=o(a),c=n(7),s=o(c),f=n(8),d=o(f),l=n(9),p=o(l),m=n(10),b=o(m),v=n(11),y=o(v),g=n(14),h=o(g),w=[],k=!1,x={offset:120,delay:0,easing:"ease",duration:400,disable:!1,once:!1,startEvent:"DOMContentLoaded",throttleDelay:99,debounceDelay:50,disableMutationObserver:!1},j=function(){var e=arguments.length>0&&void 0!==arguments[0]&&arguments[0];if(e&&(k=!0),k)return w=(0,y.default)(w,x),(0,b.default)(w,x.once),w},O=function(){w=(0,h.default)(),j()},M=function(){w.forEach(function(e,t){e.node.removeAttribute("data-aos"),e.node.removeAttribute("data-aos-easing"),e.node.removeAttribute("data-aos-duration"),e.node.removeAttribute("data-aos-delay")})},S=function(e){return e===!0||"mobile"===e&&p.default.mobile()||"phone"===e&&p.default.phone()||"tablet"===e&&p.default.tablet()||"function"==typeof e&&e()===!0},_=function(e){x=i(x,e),w=(0,h.default)();var t=document.all&&!window.atob;return S(x.disable)||t?M():(x.disableMutationObserver||d.default.isSupported()||(console.info('\n      aos: MutationObserver is not supported on this browser,\n      code mutations observing has been disabled.\n      You may have to call "refreshHard()" by yourself.\n    '),x.disableMutationObserver=!0),document.querySelector("body").setAttribute("data-aos-easing",x.easing),document.querySelector("body").setAttribute("data-aos-duration",x.duration),document.querySelector("body").setAttribute("data-aos-delay",x.delay),"DOMContentLoaded"===x.startEvent&&["complete","interactive"].indexOf(document.readyState)>-1?j(!0):"load"===x.startEvent?window.addEventListener(x.startEvent,function(){j(!0)}):document.addEventListener(x.startEvent,function(){j(!0)}),window.addEventListener("resize",(0,s.default)(j,x.debounceDelay,!0)),window.addEventListener("orientationchange",(0,s.default)(j,x.debounceDelay,!0)),window.addEventListener("scroll",(0,u.default)(function(){(0,b.default)(w,x.once)},x.throttleDelay)),x.disableMutationObserver||d.default.ready("[data-aos]",O),w)};e.exports={init:_,refresh:j,refreshHard:O}},function(e,t){},,,,,function(e,t){(function(t){"use strict";function n(e,t,n){function o(t){var n=b,o=v;return b=v=void 0,k=t,g=e.apply(o,n)}function r(e){return k=e,h=setTimeout(f,t),M?o(e):g}function a(e){var n=e-w,o=e-k,i=t-n;return S?j(i,y-o):i}function c(e){var n=e-w,o=e-k;return void 0===w||n>=t||n<0||S&&o>=y}function f(){var e=O();return c(e)?d(e):void(h=setTimeout(f,a(e)))}function d(e){return h=void 0,_&&b?o(e):(b=v=void 0,g)}function l(){void 0!==h&&clearTimeout(h),k=0,b=w=v=h=void 0}function p(){return void 0===h?g:d(O())}function m(){var e=O(),n=c(e);if(b=arguments,v=this,w=e,n){if(void 0===h)return r(w);if(S)return h=setTimeout(f,t),o(w)}return void 0===h&&(h=setTimeout(f,t)),g}var b,v,y,g,h,w,k=0,M=!1,S=!1,_=!0;if("function"!=typeof e)throw new TypeError(s);return t=u(t)||0,i(n)&&(M=!!n.leading,S="maxWait"in n,y=S?x(u(n.maxWait)||0,t):y,_="trailing"in n?!!n.trailing:_),m.cancel=l,m.flush=p,m}function o(e,t,o){var r=!0,a=!0;if("function"!=typeof e)throw new TypeError(s);return i(o)&&(r="leading"in o?!!o.leading:r,a="trailing"in o?!!o.trailing:a),n(e,t,{leading:r,maxWait:t,trailing:a})}function i(e){var t="undefined"==typeof e?"undefined":c(e);return!!e&&("object"==t||"function"==t)}function r(e){return!!e&&"object"==("undefined"==typeof e?"undefined":c(e))}function a(e){return"symbol"==("undefined"==typeof e?"undefined":c(e))||r(e)&&k.call(e)==d}function u(e){if("number"==typeof e)return e;if(a(e))return f;if(i(e)){var t="function"==typeof e.valueOf?e.valueOf():e;e=i(t)?t+"":t}if("string"!=typeof e)return 0===e?e:+e;e=e.replace(l,"");var n=m.test(e);return n||b.test(e)?v(e.slice(2),n?2:8):p.test(e)?f:+e}var c="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},s="Expected a function",f=NaN,d="[object Symbol]",l=/^\s+|\s+$/g,p=/^[-+]0x[0-9a-f]+$/i,m=/^0b[01]+$/i,b=/^0o[0-7]+$/i,v=parseInt,y="object"==("undefined"==typeof t?"undefined":c(t))&&t&&t.Object===Object&&t,g="object"==("undefined"==typeof self?"undefined":c(self))&&self&&self.Object===Object&&self,h=y||g||Function("return this")(),w=Object.prototype,k=w.toString,x=Math.max,j=Math.min,O=function(){return h.Date.now()};e.exports=o}).call(t,function(){return this}())},function(e,t){(function(t){"use strict";function n(e,t,n){function i(t){var n=b,o=v;return b=v=void 0,O=t,g=e.apply(o,n)}function r(e){return O=e,h=setTimeout(f,t),M?i(e):g}function u(e){var n=e-w,o=e-O,i=t-n;return S?x(i,y-o):i}function s(e){var n=e-w,o=e-O;return void 0===w||n>=t||n<0||S&&o>=y}function f(){var e=j();return s(e)?d(e):void(h=setTimeout(f,u(e)))}function d(e){return h=void 0,_&&b?i(e):(b=v=void 0,g)}function l(){void 0!==h&&clearTimeout(h),O=0,b=w=v=h=void 0}function p(){return void 0===h?g:d(j())}function m(){var e=j(),n=s(e);if(b=arguments,v=this,w=e,n){if(void 0===h)return r(w);if(S)return h=setTimeout(f,t),i(w)}return void 0===h&&(h=setTimeout(f,t)),g}var b,v,y,g,h,w,O=0,M=!1,S=!1,_=!0;if("function"!=typeof e)throw new TypeError(c);return t=a(t)||0,o(n)&&(M=!!n.leading,S="maxWait"in n,y=S?k(a(n.maxWait)||0,t):y,_="trailing"in n?!!n.trailing:_),m.cancel=l,m.flush=p,m}function o(e){var t="undefined"==typeof e?"undefined":u(e);return!!e&&("object"==t||"function"==t)}function i(e){return!!e&&"object"==("undefined"==typeof e?"undefined":u(e))}function r(e){return"symbol"==("undefined"==typeof e?"undefined":u(e))||i(e)&&w.call(e)==f}function a(e){if("number"==typeof e)return e;if(r(e))return s;if(o(e)){var t="function"==typeof e.valueOf?e.valueOf():e;e=o(t)?t+"":t}if("string"!=typeof e)return 0===e?e:+e;e=e.replace(d,"");var n=p.test(e);return n||m.test(e)?b(e.slice(2),n?2:8):l.test(e)?s:+e}var u="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},c="Expected a function",s=NaN,f="[object Symbol]",d=/^\s+|\s+$/g,l=/^[-+]0x[0-9a-f]+$/i,p=/^0b[01]+$/i,m=/^0o[0-7]+$/i,b=parseInt,v="object"==("undefined"==typeof t?"undefined":u(t))&&t&&t.Object===Object&&t,y="object"==("undefined"==typeof self?"undefined":u(self))&&self&&self.Object===Object&&self,g=v||y||Function("return this")(),h=Object.prototype,w=h.toString,k=Math.max,x=Math.min,j=function(){return g.Date.now()};e.exports=n}).call(t,function(){return this}())},function(e,t){"use strict";function n(e){var t=void 0,o=void 0,i=void 0;for(t=0;t<e.length;t+=1){if(o=e[t],o.dataset&&o.dataset.aos)return!0;if(i=o.children&&n(o.children))return!0}return!1}function o(){return window.MutationObserver||window.WebKitMutationObserver||window.MozMutationObserver}function i(){return!!o()}function r(e,t){var n=window.document,i=o(),r=new i(a);u=t,r.observe(n.documentElement,{childList:!0,subtree:!0,removedNodes:!0})}function a(e){e&&e.forEach(function(e){var t=Array.prototype.slice.call(e.addedNodes),o=Array.prototype.slice.call(e.removedNodes),i=t.concat(o);if(n(i))return u()})}Object.defineProperty(t,"__esModule",{value:!0});var u=function(){};t.default={isSupported:i,ready:r}},function(e,t){"use strict";function n(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function o(){return navigator.userAgent||navigator.vendor||window.opera||""}Object.defineProperty(t,"__esModule",{value:!0});var i=function(){function e(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}return function(t,n,o){return n&&e(t.prototype,n),o&&e(t,o),t}}(),r=/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i,a=/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i,u=/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i,c=/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i,s=function(){function e(){n(this,e)}return i(e,[{key:"phone",value:function(){var e=o();return!(!r.test(e)&&!a.test(e.substr(0,4)))}},{key:"mobile",value:function(){var e=o();return!(!u.test(e)&&!c.test(e.substr(0,4)))}},{key:"tablet",value:function(){return this.mobile()&&!this.phone()}}]),e}();t.default=new s},function(e,t){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=function(e,t,n){var o=e.node.getAttribute("data-aos-once");t>e.position?e.node.classList.add("aos-animate"):"undefined"!=typeof o&&("false"===o||!n&&"true"!==o)&&e.node.classList.remove("aos-animate")},o=function(e,t){var o=window.pageYOffset,i=window.innerHeight;e.forEach(function(e,r){n(e,i+o,t)})};t.default=o},function(e,t,n){"use strict";function o(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var i=n(12),r=o(i),a=function(e,t){return e.forEach(function(e,n){e.node.classList.add("aos-init"),e.position=(0,r.default)(e.node,t.offset)}),e};t.default=a},function(e,t,n){"use strict";function o(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var i=n(13),r=o(i),a=function(e,t){var n=0,o=0,i=window.innerHeight,a={offset:e.getAttribute("data-aos-offset"),anchor:e.getAttribute("data-aos-anchor"),anchorPlacement:e.getAttribute("data-aos-anchor-placement")};switch(a.offset&&!isNaN(a.offset)&&(o=parseInt(a.offset)),a.anchor&&document.querySelectorAll(a.anchor)&&(e=document.querySelectorAll(a.anchor)[0]),n=(0,r.default)(e).top,a.anchorPlacement){case"top-bottom":break;case"center-bottom":n+=e.offsetHeight/2;break;case"bottom-bottom":n+=e.offsetHeight;break;case"top-center":n+=i/2;break;case"bottom-center":n+=i/2+e.offsetHeight;break;case"center-center":n+=i/2+e.offsetHeight/2;break;case"top-top":n+=i;break;case"bottom-top":n+=e.offsetHeight+i;break;case"center-top":n+=e.offsetHeight/2+i}return a.anchorPlacement||a.offset||isNaN(t)||(o=t),n+o};t.default=a},function(e,t){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=function(e){for(var t=0,n=0;e&&!isNaN(e.offsetLeft)&&!isNaN(e.offsetTop);)t+=e.offsetLeft-("BODY"!=e.tagName?e.scrollLeft:0),n+=e.offsetTop-("BODY"!=e.tagName?e.scrollTop:0),e=e.offsetParent;return{top:n,left:t}};t.default=n},function(e,t){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=function(e){return e=e||document.querySelectorAll("[data-aos]"),Array.prototype.map.call(e,function(e){return{node:e}})};t.default=n}])});

/***/ },

/***/ "./node_modules/blaze-slider/dist/blaze-slider.esm.js"
/*!************************************************************!*\
  !*** ./node_modules/blaze-slider/dist/blaze-slider.esm.js ***!
  \************************************************************/
(__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ BlazeSlider)
/* harmony export */ });
/* blaze-slider v1.9.3 by Manan Tank */
/**
 * calculate pages and return
 */
function calculatePages(slider) {
    const { slidesToShow, slidesToScroll, loop } = slider.config;
    const { isStatic, totalSlides } = slider;
    const pages = [];
    const lastIndex = totalSlides - 1;
    // start with index 0, keep adding slidesToScroll to get the new page
    for (let startIndex = 0; startIndex < totalSlides; startIndex += slidesToScroll) {
        const _endIndex = startIndex + slidesToShow - 1;
        const overflow = _endIndex > lastIndex;
        if (overflow) {
            // if not looped
            if (!loop) {
                // adjust the startIndex
                const startIndex = lastIndex - slidesToShow + 1;
                const lastPageIndex = pages.length - 1;
                // create page only if adjusting the startIndex does not make it the same as previously saved page
                if (pages.length === 0 ||
                    (pages.length > 0 && pages[lastPageIndex][0] !== startIndex)) {
                    pages.push([startIndex, lastIndex]);
                }
                break;
            }
            // if looped
            else {
                // adjust the endIndex
                const endIndex = _endIndex - totalSlides;
                pages.push([startIndex, endIndex]);
            }
        }
        else {
            pages.push([startIndex, _endIndex]);
        }
        // if static, only allow 1 iteration
        if (isStatic) {
            break;
        }
    }
    return pages;
}

/**
 * calculate all possible states of given slider
 */
function calculateStates(slider) {
    const { totalSlides } = slider;
    const { loop } = slider.config;
    // get all possible pages
    const pages = calculatePages(slider);
    const states = [];
    const lastPageIndex = pages.length - 1;
    for (let pageIndex = 0; pageIndex < pages.length; pageIndex++) {
        // calculate prev and next page index based on config
        let nextPageIndex, prevPageIndex;
        if (loop) {
            nextPageIndex = pageIndex === lastPageIndex ? 0 : pageIndex + 1;
            prevPageIndex = pageIndex === 0 ? lastPageIndex : pageIndex - 1;
        }
        else {
            nextPageIndex =
                pageIndex === lastPageIndex ? lastPageIndex : pageIndex + 1;
            prevPageIndex = pageIndex === 0 ? 0 : pageIndex - 1;
        }
        const currentPageStartIndex = pages[pageIndex][0];
        const nextPageStartIndex = pages[nextPageIndex][0];
        const prevPageStartIndex = pages[prevPageIndex][0];
        // calculate slides that need to be moved for transitioning to next and prev state from current state
        let nextDiff = nextPageStartIndex - currentPageStartIndex;
        if (nextPageStartIndex < currentPageStartIndex) {
            nextDiff += totalSlides;
        }
        let prevDiff = currentPageStartIndex - prevPageStartIndex;
        if (prevPageStartIndex > currentPageStartIndex) {
            prevDiff += totalSlides;
        }
        states.push({
            page: pages[pageIndex],
            next: {
                stateIndex: nextPageIndex,
                moveSlides: nextDiff,
            },
            prev: {
                stateIndex: prevPageIndex,
                moveSlides: prevDiff,
            },
        });
    }
    return states;
}

const START = 'start';
const END = 'end';
const DEV = "development" !== 'production';

/**
 * it fixes below scenarios which are wrong (and adds a warning in console in development)
 * - config.slidesToShow greater than totalSlides
 * - config.slidesToScroll greater than config.slidesToShow which skips showing certain slides
 * - config.slidesToScroll too high such that it causes glitches
 */
function fixSliderConfig(slider) {
    const { slidesToScroll, slidesToShow } = slider.config;
    const { totalSlides, config } = slider;
    if (totalSlides < slidesToShow) {
        if (DEV) {
            console.warn('slidesToShow can not be larger than number of slides. Setting slidesToShow = totalSlides instead.');
        }
        config.slidesToShow = totalSlides;
    }
    if (totalSlides <= slidesToShow) {
        // return because slidesToScroll does not need to be checked
        return;
    }
    // detect slider skipping
    if (slidesToScroll > slidesToShow) {
        if (DEV) {
            console.warn('slidesToScroll can not be greater than slidesToShow. Setting slidesToScroll = slidesToShow instead');
        }
        config.slidesToScroll = slidesToShow;
    }
    // detect slider jumping glitch
    if (totalSlides < slidesToScroll + slidesToShow) {
        const properSlidesToScroll = totalSlides - slidesToShow;
        if (DEV) {
            console.warn(`slidesToScroll = ${slidesToScroll} is too large for a slider with ${totalSlides} slides with slidesToShow=${slidesToShow}, setting max possible slidesToScroll = ${properSlidesToScroll} instead.`);
        }
        config.slidesToScroll = properSlidesToScroll;
    }
}

class Automata {
    constructor(totalSlides, config) {
        this.config = config;
        this.totalSlides = totalSlides;
        this.isTransitioning = false;
        constructAutomata(this, totalSlides, config);
    }
    next(pages = 1) {
        if (this.isTransitioning || this.isStatic)
            return;
        const { stateIndex } = this;
        let slidesMoved = 0;
        let newStateIndex = stateIndex;
        for (let i = 0; i < pages; i++) {
            const state = this.states[newStateIndex];
            slidesMoved += state.next.moveSlides;
            newStateIndex = state.next.stateIndex;
        }
        if (newStateIndex === stateIndex)
            return;
        this.stateIndex = newStateIndex;
        return [stateIndex, slidesMoved];
    }
    prev(pages = 1) {
        if (this.isTransitioning || this.isStatic)
            return;
        const { stateIndex } = this;
        let slidesMoved = 0;
        let newStateIndex = stateIndex;
        for (let i = 0; i < pages; i++) {
            const state = this.states[newStateIndex];
            slidesMoved += state.prev.moveSlides;
            newStateIndex = state.prev.stateIndex;
        }
        if (newStateIndex === stateIndex)
            return;
        this.stateIndex = newStateIndex;
        return [stateIndex, slidesMoved];
    }
}
// this will be called when slider is refreshed
function constructAutomata(automata, totalSlides, config) {
    automata.stateIndex = 0;
    fixSliderConfig(automata);
    automata.isStatic = totalSlides <= config.slidesToShow;
    automata.states = calculateStates(automata);
}

function scrollPrev(slider, slideCount) {
    const rAf = requestAnimationFrame;
    if (!slider.config.loop) {
        noLoopScroll(slider);
    }
    else {
        // shift elements and apply negative transform to make it look like nothing changed
        // disable transition
        disableTransition(slider);
        // apply negative transform
        slider.offset = -1 * slideCount;
        updateTransform(slider);
        // and move the elements
        wrapPrev(slider, slideCount);
        const reset = () => {
            rAf(() => {
                enableTransition(slider);
                rAf(() => {
                    slider.offset = 0;
                    updateTransform(slider);
                    onSlideEnd(slider);
                });
            });
        };
        // if the scroll was done as part of dragging
        // reset should be done after the dragging is completed
        if (slider.isDragging) {
            if (isTouch()) {
                slider.track.addEventListener('touchend', reset, { once: true });
            }
            else {
                slider.track.addEventListener('pointerup', reset, { once: true });
            }
        }
        else {
            rAf(reset);
        }
    }
}
// <--- move slider to left for showing content on right
function scrollNext(slider, slideCount) {
    const rAf = requestAnimationFrame;
    if (!slider.config.loop) {
        noLoopScroll(slider);
    }
    else {
        // apply offset and let the slider scroll from  <- (right to left)
        slider.offset = -1 * slideCount;
        updateTransform(slider);
        // once the transition is done
        setTimeout(() => {
            // remove the elements from start that are no longer visible and put them at the end
            wrapNext(slider, slideCount);
            disableTransition(slider);
            // apply transform where the slider should go
            slider.offset = 0;
            updateTransform(slider);
            rAf(() => {
                rAf(() => {
                    enableTransition(slider);
                    onSlideEnd(slider);
                });
            });
        }, slider.config.transitionDuration);
    }
}
function onSlideEnd(slider) {
    if (slider.onSlideCbs) {
        const state = slider.states[slider.stateIndex];
        const [firstSlideIndex, lastSlideIndex] = state.page;
        slider.onSlideCbs.forEach((cb) => cb(slider.stateIndex, firstSlideIndex, lastSlideIndex));
    }
}

// when loop is disabled, we must update the offset
function noLoopScroll(slider) {
    slider.offset = -1 * slider.states[slider.stateIndex].page[0];
    updateTransform(slider);
    onSlideEnd(slider);
}
function wrapPrev(slider, count) {
    const len = slider.slides.length;
    for (let i = 0; i < count; i++) {
        // pick the last and move to first
        const slide = slider.slides[len - 1];
        // @ts-ignore
        slider.track.prepend(slide);
    }
}
function wrapNext(slider, count) {
    for (let i = 0; i < count; i++) {
        slider.track.append(slider.slides[0]);
    }
}
function updateTransform(slider) {
    const { track, offset, dragged } = slider;
    if (offset === 0) {
        track.style.transform = `translate3d(${dragged}px,0px,0px)`;
    }
    else {
        track.style.transform = `translate3d(  calc( ${dragged}px + ${offset} * (var(--slide-width) + ${slider.config.slideGap})),0px,0px)`;
    }
}
function enableTransition(slider) {
    slider.track.style.transitionDuration = `${slider.config.transitionDuration}ms`;
}
function disableTransition(slider) {
    slider.track.style.transitionDuration = `0ms`;
}

const slideThreshold = 10;
const isTouch = () => 'ontouchstart' in window;
function handlePointerDown(downEvent) {
    const track = this;
    const slider = track.slider;
    if (slider.isTransitioning)
        return;
    slider.dragged = 0;
    track.isScrolled = false;
    track.startMouseClientX =
        'touches' in downEvent ? downEvent.touches[0].clientX : downEvent.clientX;
    if (!('touches' in downEvent)) {
        // do not directly setPointerCapture on track - it blocks the click events
        // https://github.com/GoogleChromeLabs/pointer-tracker/issues/4
        const el = (downEvent.target || track);
        el.setPointerCapture(downEvent.pointerId);
    }
    disableTransition(slider);
    updateEventListener(track, 'addEventListener');
}
function handlePointerMove(moveEvent) {
    const track = this;
    const x = 'touches' in moveEvent ? moveEvent.touches[0].clientX : moveEvent.clientX;
    const dragged = (track.slider.dragged = x - track.startMouseClientX);
    const draggedAbs = Math.abs(dragged);
    // consider dragging only if the user has dragged more than 5px
    if (draggedAbs > 5) {
        // track.setAttribute('data-dragging', 'true')
        track.slider.isDragging = true;
    }
    // prevent vertical scrolling if horizontal scrolling is happening
    if (draggedAbs > 15) {
        moveEvent.preventDefault();
    }
    track.slider.dragged = dragged;
    updateTransform(track.slider);
    if (!track.isScrolled && track.slider.config.loop) {
        if (dragged > slideThreshold) {
            track.isScrolled = true;
            track.slider.prev();
        }
    }
}
function handlePointerUp() {
    const track = this;
    const dragged = track.slider.dragged;
    track.slider.isDragging = false;
    updateEventListener(track, 'removeEventListener');
    // reset drag
    track.slider.dragged = 0;
    updateTransform(track.slider);
    enableTransition(track.slider);
    if (!track.isScrolled) {
        if (dragged < -1 * slideThreshold) {
            track.slider.next();
        }
        else if (dragged > slideThreshold) {
            track.slider.prev();
        }
    }
}
const preventDefault = (event) => event.preventDefault();
/**
 * drag based navigation for slider
 */
function dragSupport(slider) {
    // @ts-expect-error
    const track = slider.track;
    track.slider = slider;
    const event = isTouch() ? 'touchstart' : 'pointerdown';
    // @ts-expect-error
    track.addEventListener(event, handlePointerDown);
    // prevent click default when slider is being dragged or transitioning
    track.addEventListener('click', (event) => {
        if (slider.isTransitioning || slider.isDragging) {
            event.preventDefault();
            event.stopImmediatePropagation();
            event.stopPropagation();
        }
    }, {
        capture: true,
    });
    // prevent dragging of elements inside the slider
    track.addEventListener('dragstart', preventDefault);
}
function updateEventListener(track, method) {
    track[method]('contextmenu', handlePointerUp);
    if (isTouch()) {
        track[method]('touchend', handlePointerUp);
        // @ts-expect-error
        track[method]('touchmove', handlePointerMove);
    }
    else {
        track[method]('pointerup', handlePointerUp);
        // @ts-expect-error
        track[method]('pointermove', handlePointerMove);
    }
}

function handleAutoplay(slider) {
    const config = slider.config;
    if (!config.enableAutoplay)
        return;
    const dir = config.autoplayDirection === 'to left' ? 'next' : 'prev';
    slider.autoplayTimer = setInterval(() => {
        slider[dir]();
    }, config.autoplayInterval);
    if (config.stopAutoplayOnInteraction) {
        slider.el.addEventListener(isTouch() ? 'touchstart' : 'mousedown', () => {
            clearInterval(slider.autoplayTimer);
        }, { once: true });
    }
}

const defaultConfig = {
    // layout
    slideGap: '20px',
    slidesToScroll: 1,
    slidesToShow: 1,
    // behavior
    loop: true,
    // autoplay
    enableAutoplay: false,
    stopAutoplayOnInteraction: true,
    autoplayInterval: 3000,
    autoplayDirection: 'to left',
    // pagination
    enablePagination: true,
    // transition
    transitionDuration: 300,
    transitionTimingFunction: 'ease',
    draggable: true,
};
function createConfig(blazeConfig) {
    // start with default config clone
    const config = { ...defaultConfig };
    for (const media in blazeConfig) {
        // if the media matches, override the config with media config
        if (window.matchMedia(media).matches) {
            const mediaConfig = blazeConfig[media];
            for (const key in mediaConfig) {
                // @ts-expect-error
                config[key] = mediaConfig[key];
            }
        }
    }
    return config;
}

function handleNavigation(slider) {
    const prev = slider.el.querySelector('.blaze-prev');
    const next = slider.el.querySelector('.blaze-next');
    if (prev) {
        prev.onclick = () => {
            slider.prev();
        };
    }
    if (next) {
        next.onclick = () => {
            slider.next();
        };
    }
}

function handlePagination(slider) {
    if (!slider.config.enablePagination || slider.isStatic)
        return;
    const paginationContainer = slider.el.querySelector('.blaze-pagination');
    if (!paginationContainer)
        return;
    slider.paginationButtons = [];
    const total = slider.states.length;
    for (let index = 0; index < total; index++) {
        const button = document.createElement('button');
        slider.paginationButtons.push(button);
        button.textContent = 1 + index + '';
        button.ariaLabel = `${index + 1} of ${total}`;
        paginationContainer.append(button);
        // @ts-expect-error
        button.slider = slider;
        // @ts-expect-error
        button.index = index;
        // @ts-expect-error
        button.onclick = handlePaginationButtonClick;
    }
    // initially the first button is active
    slider.paginationButtons[0].classList.add('active');
}
function handlePaginationButtonClick() {
    const index = this.index;
    const slider = this.slider;
    const stateIndex = slider.stateIndex;
    const loop = slider.config.loop;
    const diff = Math.abs(index - stateIndex);
    const inverseDiff = slider.states.length - diff;
    const isDiffLargerThanHalf = diff > slider.states.length / 2;
    const scrollOpposite = isDiffLargerThanHalf && loop;
    // if target state is ahead of current state
    if (index > stateIndex) {
        // but the diff is too large
        if (scrollOpposite) {
            // scroll in opposite direction to reduce scrolling
            slider.prev(inverseDiff);
        }
        else {
            // scroll normally
            slider.next(diff);
        }
    }
    // if target state is before current state
    else {
        // but the diff is too large
        if (scrollOpposite) {
            // scroll in opposite direction
            slider.next(inverseDiff);
        }
        else {
            // scroll normally
            slider.prev(diff);
        }
    }
}

function isTransitioning(slider, time = slider.config.transitionDuration) {
    slider.isTransitioning = true;
    setTimeout(() => {
        slider.isTransitioning = false;
    }, time);
}
class BlazeSlider extends Automata {
    constructor(blazeSliderEl, blazeConfig) {
        const track = blazeSliderEl.querySelector('.blaze-track');
        const slides = track.children;
        const config = blazeConfig
            ? createConfig(blazeConfig)
            : { ...defaultConfig };
        super(slides.length, config);
        this.config = config;
        this.el = blazeSliderEl;
        this.track = track;
        this.slides = slides;
        this.offset = 0;
        this.dragged = 0;
        this.isDragging = false;
        // @ts-ignore - for debugging
        this.el.blazeSlider = this;
        this.passedConfig = blazeConfig;
        const slider = this;
        track.slider = slider;
        construct(config, slider);
        // throttled to refresh every 200ms when resizing
        let ignoreResize = false;
        let width = 0;
        window.addEventListener('resize', () => {
            if (width === 0) {
                width = window.innerWidth;
                return;
            }
            const newWidth = window.innerWidth;
            // ignore height change - only refresh if the width is changed
            if (width === newWidth)
                return;
            width = newWidth;
            if (!ignoreResize) {
                ignoreResize = true;
                setTimeout(() => {
                    slider.refresh();
                    ignoreResize = false;
                }, 200);
            }
        });
    }
    next(count) {
        if (this.isTransitioning)
            return;
        const transition = super.next(count);
        if (!transition) {
            isTransitioning(this);
            return;
        }
        const [prevStateIndex, slideCount] = transition;
        handleStateChange(this, prevStateIndex);
        isTransitioning(this);
        scrollNext(this, slideCount);
    }
    prev(count) {
        if (this.isTransitioning)
            return;
        const transition = super.prev(count);
        if (!transition) {
            isTransitioning(this);
            return;
        }
        const [prevStateIndex, slideCount] = transition;
        handleStateChange(this, prevStateIndex);
        isTransitioning(this);
        scrollPrev(this, slideCount);
    }
    stopAutoplay() {
        clearInterval(this.autoplayTimer);
    }
    destroy() {
        // remove side effects that won't be overridden by construct()
        // remove old drag event handler
        this.track.removeEventListener(isTouch() ? 'touchstart' : 'pointerdown', 
        // @ts-expect-error
        handlePointerDown);
        // stop autoplay
        this.stopAutoplay();
        // remove pagination buttons
        this.paginationButtons?.forEach((button) => button.remove());
        // remove classes
        this.el.classList.remove('static');
        this.el.classList.remove(START);
    }
    refresh() {
        const newConfig = this.passedConfig
            ? createConfig(this.passedConfig)
            : { ...defaultConfig };
        this.destroy();
        construct(newConfig, this);
    }
    /**
     * Subscribe for slide change event
     * Returns a function to unsubscribe from slide change event
     */
    onSlide(cb) {
        if (!this.onSlideCbs)
            this.onSlideCbs = new Set();
        this.onSlideCbs.add(cb);
        return () => this.onSlideCbs.delete(cb);
    }
}
function handleStateChange(slider, prevStateIndex) {
    const classList = slider.el.classList;
    const stateIndex = slider.stateIndex;
    const buttons = slider.paginationButtons;
    if (!slider.config.loop) {
        if (stateIndex === 0) {
            classList.add(START);
        }
        else {
            classList.remove(START);
        }
        if (stateIndex === slider.states.length - 1) {
            classList.add(END);
        }
        else {
            classList.remove(END);
        }
    }
    if (buttons && slider.config.enablePagination) {
        buttons[prevStateIndex].classList.remove('active');
        buttons[stateIndex].classList.add('active');
    }
}
function construct(config, slider) {
    const track = slider.track;
    slider.slides = track.children;
    slider.offset = 0;
    slider.config = config;
    constructAutomata(slider, slider.totalSlides, config);
    // if a side effect is in condition - make sure to add it for both conditions - so it gets cleaned up
    // when refresh is called
    if (!config.loop) {
        slider.el.classList.add(START);
    }
    if (config.enableAutoplay && !config.loop) {
        if (DEV) {
            console.warn('enableAutoplay:true is not consistent with loop:false, auto-fixing with enableAutoplay:false');
        }
        config.enableAutoplay = false;
    }
    track.style.transitionProperty = 'transform';
    track.style.transitionTimingFunction = slider.config.transitionTimingFunction;
    track.style.transitionDuration = `${slider.config.transitionDuration}ms`;
    const { slidesToShow, slideGap } = slider.config;
    slider.el.style.setProperty('--slides-to-show', slidesToShow + '');
    slider.el.style.setProperty('--slide-gap', slideGap);
    if (!slider.isStatic) {
        if (config.draggable) {
            dragSupport(slider);
        }
    }
    else {
        slider.el.classList.add('static');
    }
    handlePagination(slider);
    handleAutoplay(slider);
    handleNavigation(slider);
    updateTransform(slider);
}




/***/ },

/***/ "./src/index.js"
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _sass_style_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./sass/style.scss */ "./src/sass/style.scss");
/* harmony import */ var _js_helpers__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./js/helpers */ "./src/js/helpers.js");
/* harmony import */ var _js_helpers__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_js_helpers__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _js_main__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./js/main */ "./src/js/main.js");
/* harmony import */ var _js_accordian__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./js/accordian */ "./src/js/accordian.js");
/* harmony import */ var _js_accordian__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_js_accordian__WEBPACK_IMPORTED_MODULE_3__);
/**
 * Theme Entry Point
 */

// Global styles (site-wide)


// Import all block styles
const requireBlockStyles = __webpack_require__("./blocks sync recursive style\\.scss$");
requireBlockStyles.keys().forEach(requireBlockStyles);

// Global JS (site-wide)




/***/ },

/***/ "./src/js/accordian.js"
/*!*****************************!*\
  !*** ./src/js/accordian.js ***!
  \*****************************/
() {

document.querySelectorAll('.rwd-accordion-heading').forEach(button => {
  button.addEventListener('click', () => {
    const rwdAccordianItem = button.parentElement;

    // Close any open FAQ
    document.querySelectorAll('.rwd-accordion-content').forEach(item => {
      if (item !== rwdAccordianItem) {
        item.classList.remove('active');
      }
    });

    // Toggle the current FAQ
    rwdAccordianItem.classList.toggle('active');
  });
});

/***/ },

/***/ "./src/js/helpers.js"
/*!***************************!*\
  !*** ./src/js/helpers.js ***!
  \***************************/
() {



/***/ },

/***/ "./src/js/main.js"
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var aos__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! aos */ "./node_modules/aos/dist/aos.js");
/* harmony import */ var aos__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(aos__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var blaze_slider__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! blaze-slider */ "./node_modules/blaze-slider/dist/blaze-slider.esm.js");


aos__WEBPACK_IMPORTED_MODULE_0___default().init();

/* Smooth scroll to anchor links
=============================================*/

document.addEventListener("DOMContentLoaded", () => {
  // Select all links that have a hash in their href
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function (e) {
      const targetId = this.getAttribute("href");

      // Ignore if it's just "#"
      if (targetId.length > 1) {
        e.preventDefault();
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          targetElement.scrollIntoView({
            behavior: "smooth",
            block: "start"
          });
        }
      }
    });
  });
});

/* Testimonial Slider
=============================================*/

document.addEventListener('DOMContentLoaded', () => {
  var testimonialSliders = document.querySelectorAll('[data-slider="reviews"]');
  testimonialSliders.forEach(el => {
    console.log(el);
    new blaze_slider__WEBPACK_IMPORTED_MODULE_1__["default"](el, {
      all: {
        slidesToShow: 1,
        loop: true,
        transitionDuration: 450,
        slideGap: '16px'
      },
      '(min-width: 768px)': {
        slidesToShow: 1
      },
      '(min-width: 1024px)': {
        slidesToShow: 1
      }
    });
  });
});

/***/ },

/***/ "./src/sass/style.scss"
/*!*****************************!*\
  !*** ./src/sass/style.scss ***!
  \*****************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Check if module exists (development only)
/******/ 		if (__webpack_modules__[moduleId] === undefined) {
/******/ 			var e = new Error("Cannot find module '" + moduleId + "'");
/******/ 			e.code = 'MODULE_NOT_FOUND';
/******/ 			throw e;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"index": 0,
/******/ 			"./style-index": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = globalThis["webpackChunkenigma"] = globalThis["webpackChunkenigma"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["./style-index"], () => (__webpack_require__("./src/index.js")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;
//# sourceMappingURL=index.js.map