<h2 class="constructor__title">
    KLEEMANN GmbH  - Ulm: <?= $clientsPage == 'online' ? 'Online' : 'Print' ?>-Ausgabe
    <i class="constructor__title-icon<?= $clientsPage == 'online' ? ' constructor__title-icon--online' : '' ?>"></i>
</h2>
<?php if ($step == 4 || $step == 6) { ?>
    <a href="#!" class="constructor__change-profile j-change-profile">Temporäres Profil ersetzen</a>
<? } ?>
<p class="constructor__description">
    <?php if ($step == 6) { ?>
        Bitte beachten Sie, dass vor dem Absenden alle Pflichtfelder ausgefüllt sein müssen.
    <? } else { ?>
    Bitte nutzen Sie die Funktion „zwischenspeichern“, um Ihre Daten zu sichern, und vor dem Live-schalten,
    damit Sie den aktuellen Stand Ihres Profil auf
    <a href="www.proffile.de" class="constructor__description-link">www.proffile.de</a>
    übertragen.
    <? } ?>
</p>
<div>
    <h4 class="constructor__graphics-header"><?= ($step == 2 ? 'Beschreibung' : ($step == 4 ? 'Zitat' : 'Live Schalten')) ?></h4>
    <i class="constructor__header-info j-header-info">
        <?php if ($step == 2) { ?>
            <span class="constructor__black-tooltip">
                Firmenname max. 50 Zeichen Untertitel / Claim max. 100 Zeichen Selbstdarstellung
                max. 1.400 Zeichen(Bitte beachten Sie die „Vorschau“.)
            </span>
        <? } elseif ($step == 4) { ?>
            <span class="constructor__black-tooltip">
                Zitat 225 Zeichen + 70 Zeichen für Name/ Funktion des Zitatgebers Zitatgrafik
                270 px x 400px Formate: TIFF, JPEG (72 dpi) (Bitte beachten Sie die „Vorschau“.)
            </span>
        <? } elseif ($step == 6) {?>
            <span class="constructor__black-tooltip">
                Live Schalten Mit „speichern und absenden“ laden Sie Ihr Profil hoch und können es auf proffile.de sofort live sehen.
                Über „deaktivieren“ können Sie Ihr Profil jederzeit runterschalten und weiter bearbeiten.
            </span>
        <? } ?>
    </i>
</div>