'use strict';

class Crop {
    constructor() {
        this.bindEvents();
    };

    bindEvents() {
        $('.j-redactor-main').on('click', function redactorMainHandleClick() {
           $('.j-crop').removeClass('g-hidden');
        });

        $('.j-crop-cancel, .j-crop-done').on('click', function closeCropPopup(event) {
            event.preventDefault();
            $('.j-crop').addClass('g-hidden');
        });
    }
}

$(function() {
    const crop = new Crop();
});