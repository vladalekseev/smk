<!doctype html>
<html lang="en">
<head>
    <?php include(__DIR__ . '/views/layout/head.php') ?>
    <link rel="stylesheet" href="web/features/constructor/constructor.min.css?v=<?= rand() ?>">
    <link rel="stylesheet" href="web/features/footer/footer.min.css?v=<?= rand() ?>">
    <title>Kunden</title>
</head>
<body>
<?php
$isMenu = true;
$step = 6;
$clientsPage = 'print';
$typeHeader = 'clients_menu';
include(__DIR__ . '/views/layout/header.php');
include(__DIR__ . '/views/layout/note.php');
?>
<div class="constructor">
    <?php
    include(__DIR__ . '/views/layout/aside-menu.php');
    ?>
    <div class="constructor__content">
        <div class="constructor__sticky-wrapper">
        <?php
        include(__DIR__ . '/views/layout/description.php');
        ?>
            <div class="constructor__section">
                <div class="constructor__wrap-content j-accordion">
                    <h4 class="constructor__section-title">Kommentar</h4>
                    <div class="constructor__accordion-wrapper j-accordion-wrapper">
                        <label class="constructor__section-label">
                            <span class="constructor__section-name constructor__section-name--capture">
                                Zusatzinformationen zu meinem Profil an die Redaktion
                                für die Bearbeitung/Freischaltung durch „Proffile“
                            </span>
                            <textarea class="constructor__capture-textarea"></textarea>
                        </label>
                    </div>
                    <button class="constructor__turn j-accordion-btn"></button>
                </div>
                <div class="constructor__wrap-content j-accordion">
                    <h4 class="constructor__section-title">Datenschutz / Bildrechte</h4>
                    <div class="constructor__accordion-wrapper j-accordion-wrapper">
                        <label class="constructor__section-label">
                        <span class="constructor__section-name constructor__section-name--capture constructor__section-name--full">
                            Bitte bestätigen Sie, dass Sie die die Datenschutzerklärung und
                            die Erklärung zum Umgang mit Bildrechten akzeptieren.
                        </span>
                        </label>
                        <form class="constructor__capture-form">
                            <?php
                            for ($i = 0; $i < 2; $i++) { ?>
                                <label class="constructor__checkbox-label">
                                    <input class="constructor__checkbox" type="checkbox" checked>
                                    <span class="constructor__checkbox-btn"></span>
                                    <span class="constructor__checkbox-require">Datenschutz* </span>
                                    <a href="#!" class="constructor__capture-link">hier einsehen*</a>
                                </label>
                            <?php } ?>
                        </form>
                    </div>
                    <button class="constructor__turn j-accordion-btn"></button>
                </div>
                <div class="constructor__capture-require">* Pflichtfeld</div>
            </div>
        </div>
        <?php
        include(__DIR__ . '/views/layout/footer.php');
        ?>
    </div>
</div>
<?php
include(__DIR__ . '/views/layout/constructor-popup.php');
include(__DIR__ . '/views/layout/scroll.php');
include(__DIR__ . '/views/layout/scripts.php');
?>
</body>
</html>