'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Crop = function () {
    function Crop() {
        _classCallCheck(this, Crop);

        this.bindEvents();
    }

    _createClass(Crop, [{
        key: 'bindEvents',
        value: function bindEvents() {
            $('.j-redactor-main').on('click', function redactorMainHandleClick() {
                $('.j-crop').removeClass('g-hidden');
            });

            $('.j-crop-cancel, .j-crop-done').on('click', function closeCropPopup(event) {
                event.preventDefault();
                $('.j-crop').addClass('g-hidden');
            });
        }
    }]);

    return Crop;
}();

$(function () {
    var crop = new Crop();
});