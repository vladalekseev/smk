'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Note = function () {
    function Note() {
        _classCallCheck(this, Note);

        this.$noteBtn = $('.j-note-btn');
        this.$noteForm = $('.j-note-form');
    }

    _createClass(Note, [{
        key: 'init',
        value: function init() {
            this.bindEvents();
        }
    }, {
        key: 'bindEvents',
        value: function bindEvents() {
            this.$noteBtn.on('click', this.showForm.bind(this));
            $('.j-note-submit').on('click', this.hideForm.bind(this));
        }
    }, {
        key: 'showForm',
        value: function showForm() {
            this.$noteBtn.addClass('g-hidden');
            this.$noteForm.removeClass('g-hidden');
        }
    }, {
        key: 'hideForm',
        value: function hideForm(event) {
            event.preventDefault();

            this.$noteForm.addClass('g-hidden');
            this.$noteBtn.removeClass('g-hidden');
        }
    }]);

    return Note;
}();

$(function () {
    var note = new Note();
    note.init();
});