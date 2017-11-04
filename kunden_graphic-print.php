<!doctype html>
<html lang="en">
<head>
    <?php include(__DIR__ . '/views/layout/head.php') ?>
    <link rel="stylesheet" href="web/features/constructor/constructor.min.css?v=<?= rand() ?>">
    <link rel="stylesheet" href="web/features/redactor/redactor.min.css?v=<?= rand() ?>">
    <link rel="stylesheet" href="web/features/footer/footer.min.css?v=<?= rand() ?>">
    <title>Kunden</title>
</head>
<body>
<?php
$isMenu = true;
$step = 1;
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
        <h2 class="constructor__title">
            KLEEMANN GmbH - Ulm: Print-Ausgabe
            <i class="constructor__title-icon"></i>
        </h2>
        <p class="constructor__description">
            Um Ihre Änderungen in der Vorschau zu sehen, müssen Sie vorher „zwischenspeichern“.
            Ihre Daten werden vor der Freigabe von PROFFILE überprüft.
        </p>
        <div class="constructor__graphics">
            <h4 class="constructor__graphics-header">Logo und Grafiken</h4>
            <form class="constructor__form">
                <div class="constructor__choice-type">Eintragsart</div>
                <div class="constructor__radio">
                    <label class="constructor__radio-item">
                        <input type="radio" name="constructor" class="constructor__radio j-constructor-radio" value="small" checked>
                        <span class="constructor__radio-btn"></span>
                        <span class="constructor__radio-text constructor__radio-text--double">
                            Doppelseitige Unternehmensbeschreibung
                        </span>
                    </label>
                    <label class="constructor__radio-item">
                        <input type="radio" name="constructor" class="constructor__radio j-constructor-radio" value="graphic-right">
                        <span class="constructor__radio-btn"></span>
                        <span class="constructor__radio-text constructor__radio-text--right">
                            Unternehmensprofil links - ganzseitige Grafik rechts
                        </span>
                    </label>
                    <label class="constructor__radio-item">
                        <input type="radio" name="constructor" class="constructor__radio j-constructor-radio" value="graphic-left">
                        <span class="constructor__radio-btn"></span>
                        <span class="constructor__radio-text constructor__radio-text--links">
                            Unternehmensprofil rechts - ganzseitige Grafik links
                        </span>
                    </label>
                </div>
                <div class="constructor__select-wrap">
                    <div class="constructor__choice-type">
                        Bildleiste – Layout
                        <i class="constructor__choice-info j-info-icon"></i>
                        <div class="constructor__tooltip j-constructor-tooltip">
                            Die Bildleiste können Sie aus einem, zwei oder drei Bildern gestalten.
                            Wählen Sie rechts Ihr Layout und ziehen Sie die die Bilder in die Bildrahmen.
                        </div>
                    </div>
                    <select class="constructor__select j-offer-select">
                        <option value="null">bitte auswählen</option>
                        <option value="3">3 Grafiken zu jeweils 33%</option>
                        <option value="2">2 Grafiken zu jeweils 50%</option>
                        <option value="1">1 Grafik zu 100%</option>
                    </select>
                </div>
            </form>
        </div>
        <?php
        include(__DIR__ . '/views/layout/redactor.php');
        include(__DIR__ . '/views/layout/footer.php');
        ?>
    </div>
</div>
<?php
include(__DIR__ . '/views/layout/scroll.php');
include(__DIR__ . '/views/layout/scripts.php')
?>
<script src="web/features/constructor/constructor.compiled.js?v=<?= rand() ?>"></script>
<script src="web/features/redactor/redactor.compiled.js?v=<?= rand() ?>"></script>
</body>
</html>