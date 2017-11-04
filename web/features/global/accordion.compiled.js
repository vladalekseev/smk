'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Accordion = function () {
    function Accordion() {
        _classCallCheck(this, Accordion);

        this.bindEvents();
    }

    _createClass(Accordion, [{
        key: 'bindEvents',
        value: function bindEvents() {
            $('.j-accordion-btn').each(function () {
                var $this = $(this);
                var isOpened = true;

                $this.on('click', function accordionHandleClick() {
                    $this.css('transform', isOpened ? 'rotate(90deg)' : '');
                    $this.parent('.j-accordion').find('.j-accordion-wrapper').stop().slideToggle(300);
                    isOpened = !isOpened;
                });
            });
        }
    }]);

    return Accordion;
}();

$(function () {
    var accordion = new Accordion();
});