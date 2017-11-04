'use strict';

class Redactor {
    constructor() {
        this.bindEvents();
    };

    bindEvents() {
        $('.j-offer-select').on('change', function offerSelectHandleChange() {
            const val = $(this).val();
            const isValNull = val === 'null';

            $('.j-offer-three').toggleClass('g-hidden', isValNull);
            $('.j-offer-default, .j-redactor-arrow').toggleClass('g-hidden', !isValNull);

            $('.j-profile-window').each(function() {
                const $this = $(this);

                $this.toggleClass('g-hidden', val !== $this.attr('data-val'));
            });
        });

        $('.j-redactor-reload').on('click', function redactorReloadHandleClick() {
            const checkedVal = $('.j-constructor-radio:checked').val();
            const rightGraphic = $('.j-right-graphic');
            const isLeftGraphicChecked = checkedVal === 'graphic-left';
            const isSmallGraphicChecked = checkedVal === 'small';

            rightGraphic.toggleClass('g-hidden', isSmallGraphicChecked);
            $('.j-small-graphic').toggleClass('g-hidden', !isSmallGraphicChecked);

            $('.j-left-wrapper').css('order', isLeftGraphicChecked ? '1' : '');
            rightGraphic.css('right', isLeftGraphicChecked ? '-10px' : '');
            $('.j-redactor-content').css('background-image', isLeftGraphicChecked ? 'url(/web/img/print-left-full-bg.png)' : '');
        });
    }
}

$(function() {
    const redactor = new Redactor();
});