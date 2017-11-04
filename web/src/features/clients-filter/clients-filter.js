'use strict';

class Clients {
    constructor() {
        this.$tableRows = $('.j-table-row');
        this.$paginatorSelect = $('.j-paginator-select');
    };

    init() {
        this.showRow();
        this.showAmount();
        this.bindEvents();
    };

    bindEvents() {
        this.$paginatorSelect.on('change', this.showRow.bind(this));
        $('.j-results-reset').on('click', this.clearFilter);
        $('.j-filter-submit').on('click', this.setFilter);
    }

    showAmount() {
        $('.j-results-amount').text(`${this.$tableRows.length} Ergebnisse`);
    };

    clearFilter() {
        $('.j-results-reset, .j-results-amount').addClass('g-hidden');
    };

    showRow() {
        const val = this.$paginatorSelect.val();

        $.each(this.$tableRows, (index, row) => {
            $(row).toggleClass('g-hidden', index >= val);
        });
    };

    setFilter(event) {
        event.preventDefault();
        $('.j-results-reset, .j-results-amount').removeClass('g-hidden');
    };
}

$(function() {
    const clients = new Clients();
    clients.init();
});