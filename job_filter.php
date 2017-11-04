<!doctype html>
<html lang="en">
<head>
    <?php include(__DIR__ . '/views/layout/head.php') ?>
    <link rel="stylesheet" href="web/features/job-filter/job-filter.min.css?v=<?= rand() ?>">
    <link rel="stylesheet" href="web/features/paginator/paginator.min.css?v=<?= rand() ?>">
    <title>Kampagnen</title>
</head>
<body>
<?php
$typeHeader = 'job_menu';
include(__DIR__ . '/views/layout/header.php');
include(__DIR__ . '/views/layout/note.php');
?>
<div class="job-filter">
    <?php
    include(__DIR__ . '/views/layout/back-btn.php');
    ?>
    <div class="job-filter__content">
        <h2 class="job-filter__header">Stellenanzeigen</h2>
        <div class="job-filter__filter">
            <h3 class="job-filter__filter-title">Filter</h3>
            <form class="job-filter__filter-form">
                <?php
                $items= [
                    ['name' => 'Jobs-Ulm', 'hint' => 'Quelle'],
                    ['name' => 'Fehlende Pflichtfelder', 'hint' => 'Vollständigkeit', 'big' => true],
                    ['name' => 'Aktiv', 'hint' => 'Status'],
                    ['name' => 'Ausbildung', 'hint' => 'Kategorisierung']
                ];
                ?>
                <?php foreach ($items as $item) { ?>
                    <div class="job-filter__select-wrapper">
                        <span class="job-filter__filter-hint"><?= $item['hint'] ?></span>
                        <select class="job-filter__filter-select<?= isset($item['big']) ? ' job-filter__filter-select--big' : '' ?>">
                            <option value="<?= $item['name'] ?>"><?= $item['name'] ?></option>
                            <option value="<?= $item['name'] ?>2"><?= $item['name'] ?>2</option>
                        </select>
                    </div>
                <?php } ?>
                <div class="job-filter__results-set">
                    <button type="submit" class="job-filter__filter-submit j-filter-submit">filtern</button>
                    <div class="job-filter__filter-results">
                        <div class="g-hidden job-filter__results-amount j-results-amount"></div>
                        <button type="reset" class="g-hidden job-filter__results-reset j-results-reset"></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="job-filter__table">
            <?php
            $props = [
                ['type' => 'Aktiv', 'mod-class' => 'activity'],
                ['type' => 'Firma', 'mod-class' => 'firm'],
                ['type' => 'Quelle', 'mod-class' => 'source'],
                ['type' => 'Kategorisierung', 'mod-class' => 'categorization'],
                ['type' => 'Bezeichnung', 'mod-class' => 'designation'],
                ['type' => 'Profil', 'mod-class' => 'profile'],
                ['type' => '', 'mod-class' => 'actions']
            ];
            ?>
            <div class="job-filter__table-head">
                <?php foreach ($props as $item) { ?>
                    <div class="job-filter__head-date job-filter__head-date--<?= $item['mod-class'] ?>">
                        <div class="job-filter__head-prop"><?= $item['type'] ?></div>
                    </div>
                <?php } ?>
            </div>
            <?php
            $filter = [
                [
                    'isActive' => true,
                    'fields' => [
                        'firm' => 'Zwick GmbH & Co. KG',
                        'source' => '',
                        'categorization' => 'Ausbildung',
                        'designation' => 'Fachinformatiker/in'
                    ],
                    'profile' => 'ulm-online',
                    'actions' => 'Details'
                ],
                [
                    'isActive' => true,
                    'fields' => [
                        'firm' => 'Zweckverband Landeswasserversorgung',
                        'source' => '',
                        'categorization' => 'Ausbildung',
                        'designation' => 'Fachinformatiker/in'
                    ],
                    'profile' => 'augsburg-online',
                    'actions' => 'Details'
                ],
                [
                    'isActive' => true,
                    'fields' => [
                        'firm' => 'Zweckverband Kommunale Informationsverarbeitung Reutlingen-Ulm',
                        'source' => '',
                        'categorization' => 'Ausbildung',
                        'designation' => 'Fachinformatiker/in'
                    ],
                    'profile' => 'munchen-online',
                    'actions' => 'Details'
                ],
                [
                    'isActive' => true,
                    'fields' => [
                        'firm' => 'Zweckverband Landeswasserversorgung',
                        'source' => '',
                        'categorization' => 'Ausbildung',
                        'designation' => 'Fachinformatiker/in'
                    ],
                    'profile' => 'munchen-online',
                    'actions' => 'Details'
                ],
                [
                    'isActive' => true,
                    'fields' => [
                        'firm' => 'Zott SE & Co. KG',
                        'source' => '',
                        'categorization' => 'Ausbildung',
                        'designation' => 'Fachinformatiker/in'
                    ],
                    'profile' => 'ulm-online',
                    'actions' => 'Details'
                ],
                [
                    'isActive' => true,
                    'fields' => [
                        'firm' => 'Zimmer MedizinSysteme GmbH',
                        'source' => '',
                        'categorization' => 'Ausbildung',
                        'designation' => 'Fachinformatiker/in'
                    ],
                    'profile' => 'ulm-print',
                    'actions' => 'Details'
                ],
                [
                    'isActive' => true,
                    'fields' => [
                        'firm' => 'Zwick GmbH & Co. KG',
                        'source' => '',
                        'categorization' => 'Ausbildung',
                        'designation' => 'Fachinformatiker/in'
                    ],
                    'profile' => 'augsburg-online',
                    'actions' => 'Details'
                ],
                [
                    'isActive' => true,
                    'fields' => [
                        'firm' => 'Zweckverband Landeswasserversorgung',
                        'source' => '',
                        'categorization' => 'Ausbildung',
                        'designation' => 'Fachinformatiker/in'
                    ],
                    'profile' => 'augsburg-online',
                    'actions' => 'Details'
                ],
                [
                    'isActive' => true,
                    'fields' => [
                        'firm' => 'Zweckverband Kommunale Informationsverarbeitung Reutlingen-Ulm',
                        'source' => '',
                        'categorization' => 'Ausbildung',
                        'designation' => 'Fachinformatiker/in'
                    ],
                    'profile' => 'augsburg-online',
                    'actions' => 'Details'
                ]
            ];
            ?>
            <?php foreach ($filter as $item) { ?>
                <div class="job-filter__table-row j-table-row">
                    <div class="job-filter__row-data job-filter__row-data--activity<?= $item['isActive'] ? ' job-filter__row-data--active' : '' ?>"></div>
                    <?php foreach ($item['fields'] as $key => $value) { ?>
                        <div class="job-filter__row-data job-filter__row-data--<?= $key ?>">
                            <div><?= $value ?></div>
                        </div>
                    <?php } ?>
                    <div class="job-filter__row-data job-filter__row-data--profile">
                        <div class="job-filter__profile job-filter__profile--<?= $item['profile'] ?>"></div>
                    </div>
                    <div class="job-filter__row-data job-filter__row-data--actions">
                        <a href="#!" class="job-filter__action"><?= $item['actions'] ?></a>
                    </div>
                </div>
            <?php } ?>
        </div>
        <?php;
        include(__DIR__ . '/views/layout/paginator.php');
        ?>
</div>
<?php
include(__DIR__ . '/views/layout/scripts.php');
?>
<script src="web/features/clients-filter/clients-filter.compiled.js?v=<?= rand() ?>"></script>
</body>
</html>