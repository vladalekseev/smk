<!doctype html>
<html lang="en">
<head>
    <?php include(__DIR__ . '/views/layout/head.php') ?>
    <link rel="stylesheet" href="web/features/constructor/constructor.min.css?v=<?= rand() ?>">
    <link rel="stylesheet" href="web/features/redactor/redactor.min.css?v=<?= rand() ?>">
    <link rel="stylesheet" href="web/features/footer/footer.min.css?v=<?= rand() ?>">
    <link rel="stylesheet" href="web/features/crop/crop.min.css?v=<?= rand() ?>">
    <title>Kunden</title>
</head>
<body>
<?php
$isMenu = true;
$step = 1;
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
        <h2 class="constructor__title constructor__title--online">
            KLEEMANN GmbH - Ulm: Online-Ausgabe
            <i class="constructor__title-icon constructor__title-icon--online"></i>
        </h2>
        <a href="#!" class="constructor__change-profile j-change-profile">Temporäres Profil ersetzen</a>
        <p class="constructor__description">
            Bitte nutzen Sie die Funktion „zwischenspeichern“, um Ihre Daten zu sichern, und vor dem Live-schalten,
            damit Sie den aktuellen Stand Ihres Profil auf
            <a href="#!" class="constructor__description-link">www.proffile.de</a>
            übertragen.
        </p>
        <div class="constructor__graphics">
            <h4 class="constructor__graphics-header">Logo und Grafiken</h4>
        </div>
        <?php
        include(__DIR__ . '/views/layout/redactor.php');
        include(__DIR__ . '/views/layout/footer.php');
        ?>
    </div>
</div>
<?php
include(__DIR__ . '/views/layout/constructor-popup.php');
include(__DIR__ . '/views/layout/crop.php');
include(__DIR__ . '/views/layout/scroll.php');
include(__DIR__ . '/views/layout/scripts.php')
?>
<script src="web/features/redactor/redactor.compiled.js?v=<?= rand() ?>"></script>
<script src="web/features/crop/crop.compiled.js?v=<?= rand() ?>"></script>
</body>
</html>