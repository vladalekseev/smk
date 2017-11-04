<!doctype html>
<html lang="en">
<head>
    <?php include(__DIR__ . '/views/layout/head.php') ?>
    <link rel="stylesheet" href="web/features/new-campaign/new-campaign.min.css?v=<?= rand() ?>">
    <title>Kampagnen</title>
</head>
<body>
<?php
$typeHeader = 'campaigns_menu';
include(__DIR__ . '/views/layout/header.php');
include(__DIR__ . '/views/layout/note.php');
?>
<div class="new-campaign">
    <?php
    include(__DIR__ . '/views/layout/back-btn.php');
    ?>
    <div class="new-campaign__content">
        <h2 class="new-campaign__title">Neue Kampagne</h2>
        <p class="new-campaign__description">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
            sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
        </p>
        <div class="new-campaign__section">
            <h3 class="new-campaign__section-title">
                Stammdaten
                <i class="new-campaign__title-info"></i>
            </h3>
            <div class="new-campaign__field">
                <span class="new-campaign__field-name">Kampagnenname</span>
                <input type="text" class="new-campaign__field-input">
            </div>
            <div class="new-campaign__field">
                <span class="new-campaign__field-name">Standort</span>
                <select class="new-campaign__field-select">
                    <option value="bitte-auswählen">bitte auswählen</option>
                    <option value="bitte-auswählen">bitte auswählen</option>
                </select>
            </div>
            <?php
            $names = [
                'Startdatum',
                'Eingabesperre ab',
                'Kampagnenende'
            ];
            ?>
                <?php foreach ($names as $name) { ?>
                    <div class="new-campaign__field">
                        <span class="new-campaign__field-name"><?= $name ?></span>
                        <div class="new-campaign__input-set">
                            <input type="text" class="new-campaign__field-area">
                            <input type="text" class="new-campaign__field-area">
                            <input type="text" class="new-campaign__field-area new-campaign__field-area--big">
                        </div>
                    </div>
                <?php } ?>
            <div class="new-campaign__btn-set">
                <button type="button" class="new-campaign__save-btn">speichern</button>
                <button type="button" class="new-campaign__remove-btn">löschen</button>
            </div>
            <div class="new-campaign__warning">
                Wenn Sie die Kampagne beenden, so wird automatisch jedes zugehörige Profil
                abgeschlossen und kann nicht mehr bearbeitet werden!
            </div>
        </div>
        <div class="new-campaign__section">
            <h3 class="new-campaign__section-title">Passworterneuerung</h3>
            <p class="new-campaign__text">
                hier können Sie die Passwörter aller Kunden, welche an der Kampagne teilnehmen, zurücksetzen.
                Ausgenommen sind Kunden, welche aktuell bereits ein Profil in Bearbeitung haben.
                Zur Erneuerung der Passwörter wird jeweils dem Ansprechpartner eines Kunden eine E-Mail zugesendet.
                In dieser E-mail ist ein Link enthalten, unter welchem der Ansprechpartenr ein neues Passwort eingeben kann.
                Bestehende Passwörter werden dabei gelöscht,
                der Kunde kann sich bis zur Neueingabe nicht mehr anmelden.
            </p>
            <button class="new-campaign__password-btn">Passwort erneuern</button>
            <div class="new-campaign__history">Historie</div>
            <div class="new-campaign__history-set">
                <div class="new-campaign__history-item">Datum</div>
                <div class="new-campaign__history-item">Benutzer</div>
            </div>
        </div>
    </div>
</div>
<?php
include(__DIR__ . '/views/layout/scroll.php');
include(__DIR__ . '/views/layout/scripts.php');
?>
</body>
</html>