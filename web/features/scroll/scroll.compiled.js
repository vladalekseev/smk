'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Scroll = function () {
    function Scroll() {
        _classCallCheck(this, Scroll);

        this.bindEvents();
    }

    _createClass(Scroll, [{
        key: 'bindEvents',
        value: function bindEvents() {
            var isDown = false;

            $('.j-scroll-toggle').on('click', function scrollToggleHandleClick() {
                $(this).css('transform', isDown ? 'rotate(0deg)' : 'rotate(180deg)');
                $('body, html').stop().animate({
                    scrollTop: isDown ? 0 : $('body').innerHeight()
                }, 500);
                isDown = !isDown;
            });

            $('.j-scroll-top').on('click', function scrollTopHandleClick() {
                $('body, html').stop().animate({
                    scrollTop: 0
                }, 500);
            });
        }
    }]);

    return Scroll;
}();

$(function () {
    var scroll = new Scroll();
});