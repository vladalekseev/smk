'use strict';

class Accordion {
    constructor() {
        this.bindEvents();
    };

    bindEvents() {
        $('.j-accordion-btn').each(function() {
            const $this = $(this);
            let isOpened = true;

            $this.on('click', function accordionHandleClick() {
                $this.css('transform', isOpened ? 'rotate(90deg)' : '');
                $this.parent('.j-accordion').find('.j-accordion-wrapper').stop().slideToggle(300);
                isOpened = !isOpened;
           });
        });
    }
}

$(function() {
    const accordion = new Accordion();
});