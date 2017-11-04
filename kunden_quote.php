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
$step = 4;
$clientsPage = 'online';
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
                    <h4 class="constructor__section-title">Zitat Inhalt</h4>
                    <div class="constructor__accordion-wrapper j-accordion-wrapper">
                        <label class="constructor__section-label">
                            <span class="constructor__section-name">Zitat Text</span>
                            <textarea class="constructor__quote-wysiwyg"></textarea>
                        </label>
                        <label class="constructor__section-label">
                            <span class="constructor__section-name">Zitatautor</span>
                            <input type="text" class="constructor__quote-input">
                        </label>
                    </div>
                    <button class="constructor__turn j-accordion-btn"></button>
                </div>
                <div class="constructor__wrap-content j-accordion">
                    <h4 class="constructor__section-title">Zitat Grafik 1</h4>
                    <div class="constructor__accordion-wrapper j-accordion-wrapper">
                        <div class="constructor__section-label">
                            <span class="constructor__section-name">Aktuelle Grafik: Logo</span>
                            <div class="constructor__quote-graphic">
                                <button class="constructor__quote-close"></button>
                            </div>
                        </div>
                        <div class="constructor__quote-wrapper">
                            <span class="constructor__section-name constructor__section-name--file">Neue Datei hochladen</span>
                            <div class="constructor__file-label">
                                Datei auswählen
                                <input type="file" class="constructor__file">
                            </div>
                            <span class="constructor__file-status">keine ausgewählt</span>
                        </div>
                        <div class="constructor__quote-manage">
                            <button class="constructor__quote-garbage">Grafik löschen</button>
                        </div>
                    </div>
                    <button class="constructor__turn j-accordion-btn"></button>
                </div>
                <div class="constructor__wrap-content j-accordion">
                    <h4 class="constructor__section-title">Zitat Grafik 2</h4>
                    <div class="constructor__accordion-wrapper j-accordion-wrapper">
                        <div class="constructor__quote-wrapper">
                            <span class="constructor__section-name constructor__section-name--file">Neue Datei hochladen</span>
                            <div class="constructor__file-label">
                                Datei auswählen
                                <input type="file" class="constructor__file">
                            </div>
                            <span class="constructor__file-status">keine ausgewählt</span>
                        </div>
                        <div class="constructor__quote-manage">
                            <button class="constructor__quote-remove">Grafik löschen</button>
                            <button class="constructor__quote-add">Weitere Grafik hinzufügen</button>
                        </div>
                    </div>
                    <button class="constructor__turn j-accordion-btn"></button>
                </div>
                <div class="constructor__quote-require">* Pflichtfeld</div>
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