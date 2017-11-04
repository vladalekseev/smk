'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Login = function () {
    function Login() {
        _classCallCheck(this, Login);

        this.bindEvents();
    }

    _createClass(Login, [{
        key: 'bindEvents',
        value: function bindEvents() {
            $('.j-login-form').on('submit', function loginFormSubmitHandler(event) {
                event.preventDefault();

                if (Validate.basicValidate($(this))) {
                    location.href = 'dashboard_page1.php';
                }
            });
        }
    }]);

    return Login;
}();

$(function () {
    var login = new Login();
});