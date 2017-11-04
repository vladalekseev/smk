<!doctype html>
<html lang="en">
<head>
    <?php include(__DIR__ . '/views/layout/head.php') ?>
    <link rel="stylesheet" href="web/features/job/job.min.css?v=<?= rand() ?>">
    <title>Stellenanzeige</title>
</head>
<body>
<?php
$typeHeader = 'job_menu';
include(__DIR__ . '/views/layout/header.php');
include(__DIR__ . '/views/layout/note.php');
?>
<div class="job">
    <?php
    include(__DIR__ . '/views/layout/back-btn.php');
    ?>
    <div class="job__content">
        <h2 class="job__header">Stellenanzeige</h2>
        <div class="job__section">
            <div class="job__branch">
                <div class="job__field">
                    <div class="job__name">ID</div>
                    <div class="job__text">4</div>
                </div>
                <div class="job__field">
                    <div class="job__name">Aktiv</div>
                    <label class="job__checkbox-label">
                        <input type="checkbox" class="job__checkbox" checked>
                        <span class="job__checkbox-btn"></span>
                    </label>
                </div>
                <div class="job__field">
                    <div class="job__name">Anlage</div>
                    <div class="job__text">12.04.2017 12:18</div>
                </div>
                <div class="job__field">
                    <div class="job__name">Letztes Update</div>
                    <div class="job__text">04.08.2017 17:52</div>
                </div>
                <div class="job__field">
                    <div class="job__name">Kunde</div>
                    <div class="job__text">ACD Elektronik GmbH</div>
                </div>
                <div class="job__field">
                    <div class="job__name">Anzeigentyp *</div>
                    <div class="job__radio-wrap">
                        <label class="job__radio-item">
                            <input type="radio" name="display" class="job__radio" value="Ausbildung" checked>
                            <span class="job__radio-btn"></span>
                            <span class="job__radio-text">Ausbildung</span>
                        </label>
                        <label class="job__radio-item">
                            <input type="radio" name="display" class="job__radio" value="Berufe">
                            <span class="job__radio-btn"></span>
                            <span class="job__radio-text">Berufe</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="job__branch">
                <div class="job__field">
                    <div class="job__name">Firmenname*</div>
                    <select class="job__select">
                        <option value="1410120">1410120</option>
                        <option value="14101202">14101202</option>
                    </select>
                </div>
                <div class="job__field">
                    <div class="job__name">PLZ *</div>
                    <input type="text" class="job__input" placeholder="88471">
                </div>
                <div class="job__field">
                    <div class="job__name">Ausbildungskategorie *</div>
                    <select class="job__select">
                        <option value="Bitte wählen">Bitte wählen</option>
                        <option value="Bitte wählen2">Bitte wählen2</option>
                    </select>
                </div>
                <div class="job__field">
                    <div class="job__name">Bezeichnung * </div>
                    <input type="text" class="job__input" placeholder="Fachinformatiker/in">
                </div>
                <div class="job__field">
                    <div class="job__name">Anstellung *</div>
                    <select class="job__select">
                        <option value="Ausbildung">Ausbildung</option>
                        <option value="Ausbildung2">Ausbildung2</option>
                    </select>
                </div>
                <div class="job__field">
                    <div class="job__name">URL zur Originalanzeige</div>
                    <input type="text" class="job__input" placeholder="http://www.jobs-ulm.de/jobdetail_popup.php?an_/in">
                </div>
            </div>
        </div>
        <div class="job__section j-accordion">
            <div class="job__section-content j-accordion-wrapper">
                <div class="job__area">
                    <div class="job__name--industry">Branche(n) auswählen</div>
                    <input type="text" class="job__input--industry">
                </div>
            </div>
            <h4 class="job__section-title">Branche *</h4>
            <button class="job__turn j-accordion-btn"></button>
        </div>
        <div class="job__section j-accordion">
            <div class="job__section-content j-accordion-wrapper">
                <div class="job__area">
                    <div class="job__name--industry">Branche(n) auswählen</div>
                    <input type="text" class="job__input--industry">
                </div>
            </div>
            <h4 class="job__section-title">Branche *</h4>
            <button class="job__turn j-accordion-btn"></button>
        </div>
        <footer class="job__footer">
            <button class="job__footer-btn job__footer-btn--save">speichern</button>
            <button class="job__footer-btn job__footer-btn--back">zurück</button>
            <button class="job__footer-btn job__footer-btn--remove">löschen</button>
        </footer>
    </div>
    <?php
    include(__DIR__ . '/views/layout/scripts.php');
    ?>
    <script src="web/features/clients-filter/clients-filter.compiled.js?v=<?= rand() ?>"></script>
</body>
</html>