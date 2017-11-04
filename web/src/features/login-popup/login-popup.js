'use strict';

class Login {
    constructor() {
        this.bindEvents();
    };

    bindEvents() {
        $('.j-login-form').on('submit', function loginFormSubmitHandler(event) {
            event.preventDefault();

            if (Validate.basicValidate($(this))) {
                location.href = 'dashboard_page1.php';
            }
        });
    }
}

$(function() {
    const login = new Login();
});