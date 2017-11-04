<!doctype html>
<html lang="en">
<head>
    <?php include(__DIR__ . '/views/layout/head.php') ?>
    <link rel="stylesheet" href="web/features/base-data/base-data.min.css?v=<?= rand() ?>">
    <title>Kunden</title>
</head>
<body>
<?php
$typeHeader = 'clients_menu';
include(__DIR__ . '/views/layout/header.php');
include(__DIR__ . '/views/layout/note.php');
?>
<div class="base-data">
    <?php
    include(__DIR__ . '/views/layout/back-btn.php');
    ?>
    <div class="base-data__content">
        <h2 class="base-data__title">Stammdaten</h2>
        <p class="base-data__description">
            Die Stammdaten können bearbeitet und durch Klick auf "speichern" übernommen werden.
        </p>
        <div class="base-data__section base-data__section--first">
            <div class="base-data__branch base-data__branch--first">
                <div class="base-data__field">
                    <div class="base-data__name">
                        Aktiv
                        <i class="base-data__name-icon"></i>
                    </div>
                    <label class="base-data__checkbox-label">
                        <input type="checkbox" class="base-data__checkbox" checked>
                        <span class="base-data__checkbox-btn"></span>
                    </label>
                </div>
                <div class="base-data__field">
                    <div class="base-data__name">
                        Kundennr
                        <span class="base-data__advice">Hinweismeldung</span>
                    </div>
                    <input type="text" class="base-data__input base-data__input--first" placeholder="1410120">
                </div>
                <div class="base-data__field">
                    <div class="base-data__name">Typ</div>
                    <div class="base-data__text">Unternehmen</div>
                </div>
            </div>
            <div class="base-data__branch base-data__branch--first">
                <div class="base-data__field">
                    <div class="base-data__name">Übergeordneter Kunde</div>
                    <select class="base-data__select base-data__select--first">
                        <option value="Kundname">Kundename</option>
                        <option value="Kundname2">Kundename2</option>
                    </select>
                </div>
                <div class="base-data__field">
                    <div class="base-data__name">Letzte Änderung</div>
                    <div class="base-data__text">08.03.2017 10:20</div>
                </div>
                <div class="base-data__field">
                    <div class="base-data__name">Änderung durch</div>
                    <div class="base-data__text">Hr. Mustermann</div>
                </div>
            </div>
        </div>
        <div class="base-data__section j-accordion">
            <div class="base-data__branch j-accordion-wrapper">
                <?php
                $commonInfoFirst = [
                    ['name' => 'Bezeichnung', 'placeholder' => 'Zweckverband Landeswasserversorgu'],
                    ['name' => 'Kundennummer', 'placeholder' => '1510089'],
                    ['name' => 'Land', 'placeholder' => 'Deutschland'],
                    ['name' => 'PLZ', 'placeholder' => '70182'],
                    ['name' => 'Ort', 'placeholder' => 'Stuttgart']
                ];
                ?>
                <?php foreach ($commonInfoFirst as $item) { ?>
                    <div class="base-data__field">
                        <div class="base-data__name"><?= $item['name'] ?></div>
                        <input type="text" class="base-data__input" placeholder="<?= $item['placeholder'] ?>">
                    </div>
                <?php } ?>
            </div>
            <div class="base-data__branch j-accordion-wrapper">
                <?php
                $commonInfoSecond = [
                    ['name' => 'Straße', 'placeholder' => '9052 Christa Stream Apt. 945'],
                    ['name' => 'URL', 'placeholder' => 'yost.tad@yahoo.com'],
                    ['name' => 'E-Mail  ', 'placeholder' => 'Deutschland'],
                    ['name' => 'Telefon', 'placeholder' => '+49 711 2175 0'],
                    ['name' => 'Fax', 'placeholder' => 'Stuttgart']
                ];
                ?>
                <?php foreach ($commonInfoSecond as $item) { ?>
                    <div class="base-data__field">
                        <div class="base-data__name"><?= $item['name'] ?></div>
                        <input type="text" class="base-data__input" placeholder="<?= $item['placeholder'] ?>">
                    </div>
                <?php } ?>
            </div>
            <h4 class="base-data__section-title">Generelle Daten</h4>
            <button class="base-data__turn j-accordion-btn"></button>
        </div>
        <div class="base-data__section j-accordion">
            <div class="base-data__branch j-accordion-wrapper">
                <?php
                $infoFirst = [
                    ['name' => 'Printausgabe  Ulm', 'option' => 'Inaktiv', 'icon' => true],
                    ['name' => 'Printausgabe  Stuttgart', 'option' => 'bitte auswählen'],
                    ['name' => 'Printausgabe Ulm', 'option' => 'bitte auswählen'],
                    ['name' => 'Printausgabe Darmstadt', 'option' => 'bitte auswählen'],
                    ['name' => 'Printausgabe München', 'option' => 'bitte auswählen'],
                    ['name' => 'Printausgabe Bodensee', 'option' => 'bitte auswählen'],
                    ['name' => 'Printausgabe  Allgäu', 'option' => 'bitte auswählen'],
                    ['name' => 'Printausgabe  Karlsruhe', 'option' => 'bitte auswählen'],
                    ['name' => 'Printausgabe  Andere', 'option' => 'bitte auswählen'],
                ];
                ?>
                <?php foreach ($infoFirst as $item) { ?>
                    <div class="base-data__field">
                        <div class="base-data__name"><?= $item['name'] ?><?= isset($item['icon']) ? '<i class="base-data__name-icon"></i>' : '' ?></div>
                        <select class="base-data__select">
                            <option value="<?= $item['option'] ?>"><?= $item['option'] ?></option>
                            <option value="<?= $item['option'] ?>"><?= $item['option'] ?></option>
                        </select>
                    </div>
                <?php } ?>
            </div>
            <div class="base-data__branch j-accordion-wrapper">
                <?php
                $infoFirst = [
                    ['name' => 'Onlinefreigabe Ulm  Ulm', 'checked' => true],
                    ['name' => 'Onlinefreigabe Stuttgart'],
                    ['name' => 'Onlinefreigabe Ulm'],
                    ['name' => 'Onlinefreigabe Darmstadt'],
                    ['name' => 'Onlinefreigabe München'],
                    ['name' => 'Onlinefreigabe Bodensee'],
                    ['name' => 'Onlinefreigabe  Allgäu'],
                    ['name' => 'Onlinefreigabe  Karlsruhe'],
                    ['name' => 'Onlinefreigabe  Andere'],
                ];
                ?>
                <?php foreach ($infoFirst as $item) { ?>
                    <div class="base-data__field">
                        <div class="base-data__name"><?= $item['name'] ?></div>
                        <div class="base-data__form-set">
                                <label class="base-data__checkbox-label">
                                    <input type="checkbox" class="base-data__checkbox" <?= isset($item['checked']) ? 'checked' : '' ?> >
                                    <span class="base-data__checkbox-btn"></span>
                                </label>
                                <input type="text"
                                       class="base-data__input base-data__input--date"
                                       placeholder="<?= $item['checked'] == true ? '01.05.2016' : 'dd.mm.YYYY' ?>">
                                -
                                <input type="text"
                                       class="base-data__input base-data__input--date"
                                       placeholder="<?= $item['checked'] == true ? '31.07.2017' : 'dd.mm.YYYY' ?>">
                        </div>
                    </div>
                <?php } ?>
            </div>
            <h4 class="base-data__section-title">Eintragsart<i class="base-data__name-icon"></i></h4>
            <button class="base-data__turn j-accordion-btn"></button>
        </div>
        <div class="base-data__section j-accordion">
            <div class="base-data__branch j-accordion-wrapper">
                <div class="base-data__field">
                    <div class="base-data__name">Benutzername / E-Mail</div>
                    <input type="text" class="base-data__input" placeholder="1510089">
                </div>
                <div class="base-data__field">
                    <div class="base-data__name">Versand Zugangsmail</div>
                    <div>
                        <span class="base-data__text">19.05.2016 14:36</span>
                        <a href="#!" class="base-data__link">Zugangsmail versenden</a>
                    </div>
                </div>
                <div class="base-data__field">
                    <div class="base-data__name">Versand Passworterneuerung</div>
                    <div>
                        <span class="base-data__text">unbekannt</span>
                        <a href="#!" class="base-data__link">Passwort erneuern</a>
                    </div>
                </div>
            </div>
            <div class="base-data__branch j-accordion-wrapper"></div>
            <h4 class="base-data__section-title">Zugangsdaten</h4>
            <button class="base-data__turn j-accordion-btn"></button>
        </div>
        <div class="base-data__section j-accordion">
            <div class="base-data__branch j-accordion-wrapper">
                <div class="base-data__field">
                    <div class="base-data__name">Anrede</div>
                    <select class="base-data__select">
                        <option value="Frau">Frau</option>
                        <option value="Frau2">Frau2</option>
                    </select>
                </div>
                <?php
                $clientsFirst = [
                    ['name' => 'Titel', 'placeholder' => ''],
                    ['name' => 'Name', 'placeholder' => ' Binder'],
                    ['name' => 'Vorname', 'placeholder' => 'Binder'],
                    ['name' => 'Firma', 'placeholder' => 'Zweckverband Landeswasserversorgu'],
                    ['name' => 'Abteilung', 'placeholder' => 'HR'],
                    ['name' => 'Straße', 'placeholder' => '1510089']
                ];
                ?>
                <?php foreach ($clientsFirst as $item) { ?>
                    <div class="base-data__field">
                        <div class="base-data__name"><?= $item['name'] ?></div>
                        <input type="text" class="base-data__input" placeholder="<?= $item['placeholder'] ?>">
                    </div>
                <?php } ?>
            </div>
            <div class="base-data__branch j-accordion-wrapper">
                <div class="base-data__field">
                    <div class="base-data__name">PLZ</div>
                    <select class="base-data__select">
                        <option value="Frau">Frau</option>
                        <option value="Frau2">Frau2</option>
                    </select>
                </div>
                <?php
                $clientsSecond = [
                    ['name' => 'Ort', 'placeholder' => ''],
                    ['name' => 'E-Mail', 'placeholder' => ' Binder'],
                    ['name' => 'Telefon', 'placeholder' => 'Binder'],
                    ['name' => 'Mobiltelefon', 'placeholder' => 'Zweckverband Landeswasserversorgu'],
                    ['name' => 'Telefax', 'placeholder' => '']
                ];
                ?>
                <?php foreach ($clientsSecond as $item) { ?>
                    <div class="base-data__field">
                        <div class="base-data__name"><?= $item['name'] ?></div>
                        <input type="text" class="base-data__input" placeholder="<?= $item['placeholder'] ?>">
                    </div>
                <?php } ?>
                <div class="base-data__field">
                    <div class="base-data__name">Onlinefreigabe  Andere</div>
                    <label class="base-data__checkbox-label base-data__checkbox-label--diff">
                        <input type="checkbox" class="base-data__checkbox">
                        <span class="base-data__checkbox-btn"></span>
                    </label>
                </div>
            </div>
            <h4 class="base-data__section-title">Auftraggeber</h4>
            <button class="base-data__turn j-accordion-btn"></button>
        </div>
        <div class="base-data__section j-accordion">
            <div class="base-data__branch j-accordion-wrapper">
                <div class="base-data__field">
                    <div class="base-data__name">Stellenanzeigen aktiv</div>
                    <label class="base-data__checkbox-label">
                        <input type="checkbox" class="base-data__checkbox">
                        <span class="base-data__checkbox-btn"></span>
                    </label>
                </div>
                <div class="base-data__field">
                    <div class="base-data__name">Stellenanzeigenimport via InfoCodex</div>
                    <label class="base-data__checkbox-label">
                        <input type="checkbox" class="base-data__checkbox">
                        <span class="base-data__checkbox-btn"></span>
                    </label>
                </div>
                <div class="base-data__field">
                    <div class="base-data__name">Alphabetischer Eintrag unter</div>
                    <input type="text" class="base-data__input" placeholder="-">
                </div>
            </div>
            <div class="base-data__branch j-accordion-wrapper"></div>
            <h4 class="base-data__section-title">Sonstiges</h4>
            <button class="base-data__turn j-accordion-btn"></button>
        </div>
        <?php
        $names = [
            'Projektabwicklung',
            'Auftraggeber Agentur',
            'Projektabwicklung',
            'Rechnungsadresse'
        ];
        ?>
        <?php foreach ($names as $name) { ?>
            <div class="base-data__section j-accordion">
                <h4 class="base-data__section-title"><?= $name ?> (== auftraggeber)</h4>
                <button class="base-data__turn base-data__turn--closed j-accordion-btn"></button>
            </div>
        <?php } ?>
        <footer class="base-data__footer">
            <button class="base-data__footer-btn base-data__footer-btn--save">speichern</button>
            <button class="base-data__footer-btn base-data__footer-btn--back">zurück</button>
            <button class="base-data__footer-btn base-data__footer-btn--remove">löschen</button>
        </footer>
    </div>
</div>
<?php
include(__DIR__ . '/views/layout/scripts.php');
?>
</body>
</html>