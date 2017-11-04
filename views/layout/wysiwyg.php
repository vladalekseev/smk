<div class="wysiwyg">
    <form class="wysiwyg__form j-login-form">
        <label class="wysiwyg__label jv-field">
            <span class="wysiwyg__input-name">Firmenname*</span>
            <input type="text" class="wysiwyg__input jv-required" placeholder="KLEEMANN GmbH">
            <span class="g-validate wysiwyg__require jv-error-text">Dies ist ein Pflichtfeld!</span>
        </label>
        <label class="wysiwyg__label">
            <span class="wysiwyg__input-name">Untertitel / Claim</span>
            <input type="text" class="wysiwyg__input" placeholder="Ihr Spezialist mineralische Rohstoffaufbereitung">
        </label>
        <?php if ($clientsPage != 'print') { ?>
            <label class="wysiwyg__label">
                <span class="wysiwyg__input-name">URL-Key</span>
                <input type="text" class="wysiwyg__input" placeholder="http://muster.com/ecaswx">
            </label>
        <?php } ?>
        <label class="wysiwyg__label wysiwyg__label--area">
            <span class="wysiwyg__input-name"> Selbstdarstellung*</span>
            <span class="wysiwyg__work-area">
                <textarea class="wysiwyg__textarea jv-required""></textarea>
                <span class="wysiwyg__help">* Pflichtfeld</span>
            </span>
        </label>
    </form>
</div>