const MARGIN_TOP_WITH_SCROLLING = 100;

let Validate = {
  isSetFocus: false,
  basicValidate: function ($form, userOpts = {}) {
    const self = this;
    const $requiredFields = $form
      .find('input.jv-required, select.jv-required, textarea.jv-required')
      .not(':disabled');
    const $emails = $form
      .find('.jv-email')
      .not(':disabled');
    const $radios = $form
      .find('input[type="radio"].jv-required-radio')
      .not(':disabled');
    const $phones = $form
      .find('.jv-phone')
      .not(':disabled');
    const $passwords = $form
      .find('input.jv-password')
      .not(':disabled');
    const $cards = $form
      .find('input.jv-card')
      .not(':disabled');
    const opts = $.extend({
      scrollToErrors: true,
      withChangeRemoving: true,
      emailErrorId: '',
      emailErrorText: '',
      phoneErrorId: '',
      phoneErrorText: '',
      phoneLengthMin: 10,
      phoneLengthMax: 11,
      passwordRegExp: /.{6,}/,
      cardLength: 16,
      cardRegExp: /\d{4}-\d{4}-\d{4}-\d{4}/,
      isSecondPasswordSame: false,
    }, userOpts);
    const mainPasswordValue = $passwords.not('[data-verify]').val();
    const isPasswordCorrect = $passwords.length ? mainPasswordValue.match(opts.passwordRegExp) : null;
    let isValidate = true;
    let hasValidateFocus = $form.data('validate-focus');

    self.removeErrors($form);

    if (hasValidateFocus) {
      self.isSetFocus = true;
    }

    $requiredFields.each(function () {
      const $this = $(this);

      if (!$this.val().trim()) {
        self.highlightError($this);
        isValidate = false;
      }
    });

    $emails.each(function() {
      let $this = $(this);

      if ($this.val() && !$this.val().trim().match(/[^@]@[_a-z\d\-]+\.+[a-zа-я]{2,16}$/i)) {
        self.highlightError($this, opts.emailErrorText, opts.emailErrorId);
        isValidate = false;
      }
    });

    $passwords.each(function() {
      const $this = $(this);
        isPasswordsMatch = $passwords.not($this).val() === $this.val();

      if (!$this.data('verify')) {
        if (!mainPasswordValue) {
          self.highlightError($this);
          isValidate = false;
        } else {
          if (!isPasswordCorrect) {
            self.highlightError($this, true, 'not-correct');
            isValidate = false;
          }
        }
      } else {
        if (mainPasswordValue && isPasswordCorrect) {
          if (opts.isSecondPasswordSame) {
            if (!$this.val().match(opts.passwordRegExp)) {
              self.highlightError($this, true, 'not-correct');
              isValidate = false;
            } else if (isPasswordsMatch) {
              self.highlightError($this, true, 'matched');
              isValidate = false;
            }
          } else if (!isPasswordsMatch && !opts.isSecondPasswordSame) {
            self.highlightError($this, true);
            isValidate = false;
          }
        }
      }
    });

    $radios.each(function() {
      const $this = $(this);

      if (!$('[name="' + $this.attr('name') + '"]:checked').length) {
        self.highlightError($this);
        isValidate = false;
      }
    });

    $phones.each(function() {
      const $this = $(this);
      const numberLength = $this
        .val()
        .trim()
        .replace(/[\+(\)\-_ ]+/g, '')
        .length;

      if ((numberLength < opts.phoneLengthMin) || (numberLength > opts.phoneLengthMax)) {
        self.highlightError($this);
        isValidate = false;
      }
    });

    $cards.each(function() {
      const $this = $(this);
      let numberLength = $this
        .val()
        .trim()
        .replace(/[\-_]+/g, '')
        .length;

      if (numberLength !== opts.cardLength) {
        self.highlightError($this);
        isValidate = false;
      }
    });

    if (opts.scrollToErrors && !isValidate) {
      self.scrollToErrors();
    }

    if (opts.withChangeRemoving) {
      self.removeErrorsWithChange();
    }

    return isValidate;
  },

  removeErrorsWithChange() {
    let self = this;

    $('.jv-required, .jv-required-radio').on('input change', function () {
      let $this = $(this);

      self.removeErrors(false, $this.data('field-id') ?
        $('.jv-field[data-field-id="' + $this.data('field-id') + '"]') :
        $this.closest('.jv-field'));
    });
  },

  highlightError($el, scrollToErrors, errorId, errorText) {
    const self = this;
    let $field = $el.data('field-id') ?
      $('.jv-field[data-field-id="' + $el.data('field-id') + '"]') :
      $el.closest('.jv-field');

    if (typeof errorText === 'undefined') {
      $field
        .addClass('val-error-field jv-error-field')
        .find('.jv-error-text')
          .first()
        .removeClass('g-hidden');
    }

    if (errorId) {
      $field
        .find('.jv-error-text')
          .addClass('g-hidden')
          .filter('[data-id="' + errorId + '"]')
        .removeClass('g-hidden');
    }

    if (errorText) {
      $field
        .addClass('val-error-field jv-error-field')
        .find('.jv-error-text[data-custom="true"]')
          .html(errorText)
          .removeClass('g-hidden');
    }

    if (scrollToErrors) {
      self.scrollToErrors();
    }
  },

  removeErrors($form, $el) {
    let $field = '';

    if ($el) {
      if ($el.data('field-id')) {
        $field = $('.jv-field[data-field-id="' + $el.data('field-id') + '"]');
      } else {
        $field = $el.closest('.jv-field');
      }
      $field
        .removeClass('val-error-field jv-error-field')
        .find('.jv-error-text')
          .addClass('g-hidden');
    } else {
      $form
        .find('.jv-error-field')
          .removeClass('val-error-field jv-error-field');
      $form
        .find('.jv-error-text')
          .addClass('g-hidden');
    }
  },

  scrollToErrors() {
    const self = this;

    $('body').animate({
      scrollTop: $('.jv-error-field').offset().top - MARGIN_TOP_WITH_SCROLLING
    }, 200);

    if (self.isSetFocus) {
      const $errorFieldWrap = $('.jv-error-field').first();
      const isContentError = $('.j-question-content').hasClass('jv-error-field');
      const isTitleError = $('.j-question-main-title').hasClass('jv-error-field');
      let $errorField = {};

      if (isContentError && !isTitleError) {
        $errorField = $('.redactor-editor');
      } else {
        $errorField = $errorFieldWrap.find('.jv-required');
      }

      $errorField.focus();
    }
  }
};
