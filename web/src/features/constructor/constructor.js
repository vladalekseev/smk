'use strict';

class LayoutConstructor {
    constructor() {
        this.bindEvents();
    };

    bindEvents() {
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
}

$(function() {
    const layoutConstructor = new LayoutConstructor();
});