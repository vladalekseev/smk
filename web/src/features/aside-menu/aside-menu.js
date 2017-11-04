'use strict';

class AsideMenu {
    constructor() {
        this.bindEvents();
    };

    bindEvents() {
        $('.j-header-sandwich').on('click', function sandwichHandleClick() {
            $('.j-profile-menu').fadeToggle(400);
        });
    }
}

$(function() {
    const asideMenu = new AsideMenu();
});