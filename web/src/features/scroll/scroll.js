'use strict';

class Scroll {
    constructor() {
        this.bindEvents();
    };

    bindEvents() {
        let isDown = false;

        $('.j-scroll-toggle').on('click', function scrollToggleHandleClick() {
            $(this).css('transform', isDown ? 'rotate(0deg)' : 'rotate(180deg)') ;
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
}

$(function() {
    const scroll = new Scroll();
});