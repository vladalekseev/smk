'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Clients = function () {
    function Clients() {
        _classCallCheck(this, Clients);

        this.$tableRows = $('.j-table-row');
        this.$paginatorSelect = $('.j-paginator-select');
    }

    _createClass(Clients, [{
        key: 'init',
        value: function init() {
            this.showRow();
            this.showAmount();
            this.bindEvents();
        }
    }, {
        key: 'bindEvents',
        value: function bindEvents() {
            this.$paginatorSelect.on('change', this.showRow.bind(this));
            $('.j-results-reset').on('click', this.clearFilter);
            $('.j-filter-submit').on('click', this.setFilter);
        }
    }, {
        key: 'showAmount',
        value: function showAmount() {
            $('.j-results-amount').text(this.$tableRows.length + ' Ergebnisse');
        }
    }, {
        key: 'clearFilter',
        value: function clearFilter() {
            $('.j-results-reset, .j-results-amount').addClass('g-hidden');
        }
    }, {
        key: 'showRow',
        value: function showRow() {
            var val = this.$paginatorSelect.val();

            $.each(this.$tableRows, function (index, row) {
                $(row).toggleClass('g-hidden', index >= val);
            });
        }
    }, {
        key: 'setFilter',
        value: function setFilter(event) {
            event.preventDefault();
            $('.j-results-reset, .j-results-amount').removeClass('g-hidden');
        }
    }]);

    return Clients;
}();

$(function () {
    var clients = new Clients();
    clients.init();
});