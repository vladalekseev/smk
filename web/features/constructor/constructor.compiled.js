'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var LayoutConstructor = function () {
    function LayoutConstructor() {
        _classCallCheck(this, LayoutConstructor);

        this.bindEvents();
    }

    _createClass(LayoutConstructor, [{
        key: 'bindEvents',
        value: function bindEvents() {
            $('.j-change-profile, .j-constructor-popup-exit').on('click', function linkPopupHandleClick(event) {
                event.preventDefault();
                $('.j-constructor-popup').stop().fadeToggle(300);
            });

            $('.j-info-icon').hover(function infoIconOverHandler() {
                $('.j-constructor-tooltip').stop().fadeIn(300);
            }, function infoIconOutHandler() {
                $('.j-constructor-tooltip').stop().fadeOut(300);
            });
        }
    }]);

    return LayoutConstructor;
}();

$(function () {
    var layoutConstructor = new LayoutConstructor();
});