<!doctype html>
<html lang="en">
<head>
    <?php include(__DIR__ . '/views/layout/head.php') ?>
    <title>Login</title>
</head>
<body>
    <?php
    $typeHeader = 'login';
    include(__DIR__ . '/views/layout/header.php')
    ?>
    <div class="login">
        <div class="login__popup">
            <header class="login__header">
                <h2 class="login__title">Anmeldung</h2>
                <p class="login__description">
                    Herzlich willkommen beim PROFFILE Redaktionssystem.<br>
                    Bitte loggen Sie sich ein, um Ihre Druckdaten hochzuladen oder zu bearbeiten.
                </p>
            </header>
            <form class="login__form j-login-form">
                <div class="login__field">
                    <div class="login__hint">
                        <span class="login__placeholder">Benutzername (Kundennummer)</span>
                        <a href="#!" class="login__info">vergessen?</a>
                    </div>
                    <div class="login__form-field jv-field">
                        <input type="text" class="login__input jv-required">
                        <span class="g-hidden g-validate login__error-text jv-error-text">Empty field!</span>
                    </div>
                </div>
                <div class="login__field login__field--password">
                    <div class="login__hint">
                        <span class="login__placeholder">Passwort</span>
                        <a href="#!" class="login__info">vergessen?</a>
                    </div>
                    <div class="login__form-field jv-field">
                        <input type="password" class="login__input jv-required jv-password">
                        <span class="g-hidden g-validate login__error-text jv-error-text">Empty field!</span>
                        <span class="g-hidden g-validate login__error-text jv-error-text" data-id="not-correct">At least 6 characters!</span>
                    </div>
                </div>
                <button type="submit" class="login__btn">Anmelden</button>
            </form>
        </div>
    </div>
    <?php include(__DIR__ . '/views/layout/scripts.php') ?>
</body>
</html>