<!doctype html>
<html lang="en">
<head>
    <?php include(__DIR__ . '/views/layout/head.php') ?>
    <link rel="stylesheet" href="web/features/jobs/jobs.min.css?v=<?= rand() ?>">
    <title>Zuordnungen</title>
</head>
<body>
<?php
$typeHeader = 'campaigns_menu';
include(__DIR__ . '/views/layout/header.php');
include(__DIR__ . '/views/layout/note.php');
?>
<div class="jobs">
    <?php
    include(__DIR__ . '/views/layout/back-btn.php');
    ?>
    <div class="jobs__content">
        <h2 class="jobs__title">Zuordnungen: Anstellung</h2>
        <p class="jobs__description">
            Die Daten können bearbeitet und durch Klick auf "speichern" übernommen werden.
        </p>
        <div class="jobs__import">
            <h3 class="jobs__import-title">
                Dateiimport
                <i class="jobs__title-info"></i>
            </h3>
            <form class="jobs__import-form">
                <div class="jobs__search-wrapper">
                    <input type="text" class="jobs__import-input" placeholder="Datei auswählen">
                    <button class="jobs__search-btn"></button>
                </div>
                <span class="jobs__import-hint">Keine ausgewählt</span>
                <button class="jobs__import-btn">importieren</button>
            </form>
            <div class="jobs__import-format">Format CSV: CMS ID;Text;Externe ID;ID Elternelement</div>
        </div>
        <ul class="jobs__list">
            <li class="jobs__list-header">
                <?php
                $items= [
                    ['name' => 'id', 'mod-class' => 'id'],
                    ['name' => 'externe id', 'mod-class' => 'extra'],
                    ['name' => 'bezeichnung', 'mod-class' => 'designation'],
                    ['name' => 'Elternelement', 'mod-class' => 'parent', 'employment' => true],
                    ['name' => 'Gelöscht', 'mod-class' => 'checkbox'],
                ];
                ?>
                <?php foreach ($items as $item) { ?>
                    <div
                        class="jobs__list-key jobs__list-key--<?= $item['mod-class'] ?>
                                <?= isset($item['employment']) ? ' jobs__list-key--employment' : '' ?>">
                        <?= $item['name'] ?>
                    </div>
                <?php } ?>
            </li>
            <?php
            $items= [
                ['placeholder' => 'Vollzeit', 'checked' => true],
                ['placeholder' => 'Teilzeit'],
                ['placeholder' => 'Ausbildung'],
                ['placeholder' => 'Duales Studium'],
                ['placeholder' => '346442'],
                ['placeholder' => '346442'],
                ['placeholder' => '346442'],
                ['placeholder' => '346442'],
                ['placeholder' => '346442'],
                ['placeholder' => '346442'],
                ['placeholder' => '346442'],
                ['placeholder' => '346442'],
                ['placeholder' => '346442']
            ];
            ?>
            <?php foreach ($items as $item) { ?>
                <li class="jobs__list-item">
                    <div class="jobs__list-id">1421</div>
                    <input type="text" class="jobs__list-input jobs__list-input--extra" placeholder="346442">
                    <input type="text" class="jobs__list-input jobs__list-input--designation jobs__list-input--employment" placeholder="<?= $item['placeholder'] ?>">
                    <label class="jobs__checkbox-label">
                        <input type="checkbox" class="jobs__checkbox" <?= isset($item['checked']) ? 'checked' : '' ?>>
                        <span class="jobs__checkbox-btn"></span>
                    </label>
                </li>
            <?php } ?>
            <li class="jobs__list-item">
                <div class="jobs__list-id">NEU</div>
                <input type="text" class="jobs__list-input jobs__list-input--extra">
                <input type="text" class="jobs__list-input jobs__list-input--designation jobs__list-input--employment">
                <div class="jobs__checkbox-label jobs__checkbox-label--diff"></div>
            </li>
        </ul>
        <footer class="jobs__footer">
            <button class="jobs__footer-btn jobs__footer-btn--save">speichern</button>
            <button class="jobs__footer-btn jobs__footer-btn--back">zurück</button>
        </footer>
    </div>
</div>
<?php
include(__DIR__ . '/views/layout/scripts.php');
?>
</body>
</html>