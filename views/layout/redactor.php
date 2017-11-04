<div class="redactor">
    <header class="redactor__header">
        <div class="redactor__title">
            Grafiken bearbeiten *
            <?php if ($clientsPage == 'print') { ?>
                <i class="redactor__info j-redactor-info">
                <span class="redactor__tooltip-info j-redactor-tooltip">
                    Wählen Sie hier bitte ein passendes Format für Ihre Grafiken aus
                </span>
                </i>
            <?php } ?>
        </div>
        <button type="button" class="redactor__reload j-redactor-reload">Vorschau aktualisieren</button>
    </header>
    <?php if ($clientsPage == 'print') { ?>
        <div class="redactor__content j-redactor-content">
            <div class="redactor__wrapper j-left-wrapper">
                <div class="redactor__photo redactor__photo--logo j-top-logo">
                    Logo
                    <div class="redactor__tooltip redactor__tooltip--logo j-logo-tooltip">
                        Größe: 60 x 20 mm Formate: PDF, EPS, TIFF, JPEG (300 dpi)
                    </div>
                </div>
                <div class="redactor__offer-default j-offer-default">Banner-Grafik Format bitte auswählen</div>
                <div class="g-hidden redactor__offer-three j-offer-three">
                    <?php
                    $photos = [
                        ['number' => '1'],
                        ['number' => '2'],
                        ['number' => '3'],
                    ];
                    ?>
                    <?php foreach ($photos as $item) { ?>
                        <div class="redactor__photo redactor__photo--single j-profile-window" data-val="3">
                            <span class="redactor__single-number"><?= $item['number'] ?></span>Profilgrafik
                            <div class="redactor__tooltip redactor__tooltip--single">
                                <span class="redactor__photo-size">48 x 43 mmm</span>
                                Format: PDF, EPS, TIFF, JPEG (300 dpi)
                            </div>
                        </div>
                    <?php } ?>
                    <?php
                    $photos = [
                        [
                            'number' => '1',
                            'value' => '1',
                            'mod-class' => 'alone',
                            'tooltip-class' => 'one',
                            'text' => 'L 144 x H 43 mm Formate: PDF,EPS, TIFF, JPEG (300 dpi)'
                        ],
                        [
                            'number' => '1',
                            'value' => '2',
                            'mod-class' => 'two',
                            'tooltip-class' => 'two',
                            'text' => '96 x 43 mm Formate: PDF,EPS, TIFF, JPEG (300 dpi)'
                        ],
                        [
                            'number' => '2',
                            'value' => '2',
                            'mod-class' => 'two',
                            'tooltip-class' => 'two',
                            'text' => '96 x 43 mm Formate: PDF,EPS, TIFF, JPEG (300 dpi)'
                        ],
                    ];
                    ?>
                    <?php foreach ($photos as $item) { ?>
                        <div class="g-hidden redactor__photo redactor__photo--<?= $item['mod-class'] ?> j-profile-window" data-val="<?= $item['value'] ?>">
                            <span class="redactor__single-number"><?= $item['number'] ?></span>Profilgrafik
                            <div class="redactor__tooltip redactor__tooltip--<?= $item['tooltip-class'] ?>">
                                <?= $item['text'] ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="redactor__wrapper j-right-wrapper">
                <div class="redactor__photo redactor__photo--right j-small-graphic">
                    <i class="redactor__arrow j-redactor-arrow"></i>
                    rechte Seite Grafik
                    <div class="redactor__tooltip redactor__tooltip--small j-small-tooltip">
                        L 144 mm x H variabel
                        Formate: PDF, EPS, TIFF, JPEG (300 dpi)
                    </div>
                </div>
                <div class="g-hidden redactor__photo redactor__photo--big j-right-graphic">
                    ganzseitige Grafik
                    <div class="redactor__tooltip redactor__tooltip--right j-right-tooltip">
                        als pdf in einer Auflösung von 300 dpi
                        1. Seite im Anschnitt: Breite 163 mm x Höhe 240 mm,
                        3 mm Beschnittzugabe
                        Satzspiegel: Breite 143 mm x Höhe 220 mm
                    </div>
                </div>
            </div>
        </div>
    <?php } elseif ($clientsPage == 'online') { ?>
        <div class="redactor-online__content">
            <div class="redactor__photo redactor__photo--online-logo">
                Logo
                <div class="redactor__tooltip redactor__tooltip--logo">
                    Größe: 450 px x 150 px
                    Format: EPS, TIFF, JPEG (72 dpi)
                </div>
            </div>
            <div class="redactor__photo redactor__photo--main j-redactor-main">
                <div class="redactor-online__arrow"></div>
                <div class="redactor-online__profiles">
                    <?php
                    $photos = [
                        ['number' => '1'],
                        ['number' => '2'],
                        ['number' => '3'],
                    ];
                    ?>
                    <?php foreach ($photos as $item) { ?>
                        <div class="redactor__photo redactor__photo--profile">
                            <span class="redactor-online__number"><?= $item['number'] ?></span>
                            Profilgrafik
                            <div class="redactor-online__tooltip">
                                Bis zu drei Banner werden abwechselnd angezeigt:1800 px x 600px
                                Formate: TIFF, JPEG (72 dpi)
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php }?>
</div>