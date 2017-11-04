'use strict';

class Note {
    constructor() {
        this.$noteBtn = $('.j-note-btn');
        this.$noteForm = $('.j-note-form');
    };

    init() {
        this.bindEvents();
    };

    bindEvents() {
        this.$noteBtn.on('click', this.showForm.bind(this));
        $('.j-note-submit').on('click',  this.hideForm.bind(this));
    }

    showForm() {
        this.$noteBtn.addClass('g-hidden');
        this.$noteForm.removeClass('g-hidden');
    };

    hideForm(event) {
        event.preventDefault();

        this.$noteForm.addClass('g-hidden');
        this.$noteBtn.removeClass('g-hidden');
    };
}

$(function() {
    const note = new Note();
    note.init();
});