'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Redactor = function () {
    function Redactor() {
        _classCallCheck(this, Redactor);

        this.bindEvents();
    }

    _createClass(Redactor, [{
        key: 'bindEvents',
        value: function bindEvents() {
            $('.j-offer-select').on('change', function offerSelectHandleChange() {
                var val = $(this).val();
                var isValNull = val === 'null';

                $('.j-offer-three').toggleClass('g-hidden', isValNull);
                $('.j-offer-default, .j-redactor-arrow').toggleClass('g-hidden', !isValNull);

                $('.j-profile-window').each(function () {
                    var $this = $(this);

                    $this.toggleClass('g-hidden', val !== $this.attr('data-val'));
                });
            });

            $('.j-redactor-reload').on('click', function redactorReloadHandleClick() {
                var checkedVal = $('.j-constructor-radio:checked').val();
                var rightGraphic = $('.j-right-graphic');
                var isLeftGraphicChecked = checkedVal === 'graphic-left';
                var isSmallGraphicChecked = checkedVal === 'small';

                rightGraphic.toggleClass('g-hidden', isSmallGraphicChecked);
                $('.j-small-graphic').toggleClass('g-hidden', !isSmallGraphicChecked);

                $('.j-left-wrapper').css('order', isLeftGraphicChecked ? '1' : '');
                rightGraphic.css('right', isLeftGraphicChecked ? '-10px' : '');
                $('.j-redactor-content').css('background-image', isLeftGraphicChecked ? 'url(/web/img/print-left-full-bg.png)' : '');
            });
        }
    }]);

    return Redactor;
}();

$(function () {
    var redactor = new Redactor();
});