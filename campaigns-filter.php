<!doctype html>
<html lang="en">
<head>
    <?php include(__DIR__ . '/views/layout/head.php') ?>
    <link rel="stylesheet" href="web/features/campaigns-filter/campaigns-filter.min.css?v=<?= rand() ?>">
    <link rel="stylesheet" href="web/features/paginator/paginator.min.css?v=<?= rand() ?>">
    <title>Kampagnen</title>
</head>
<body>
<?php
$typeHeader = 'campaigns_menu';
include(__DIR__ . '/views/layout/header.php');
include(__DIR__ . '/views/layout/note.php');
?>
<div class="campaigns-filter">
    <?php
    include(__DIR__ . '/views/layout/back-btn.php');
    ?>
    <div class="campaigns-filter__content">
        <h2 class="campaigns-filter__header">Kampagnen</h2>
        <a href="/new-campaign.php" class="campaigns-filter__add-company">Neue Kampagne anlegen</a>
        <div class="campaigns-filter__filter">
            <h3 class="campaigns-filter__filter-title">
                Filter
                <i class="campaigns-filter__title-info"></i>
            </h3>
            <form class="campaigns-filter__filter-form">
                <select class="campaigns-filter__filter-select">
                    <option value="Status">Status</option>
                    <option value="Status2">Status2</option>
                </select>
                <select class="campaigns-filter__filter-select">
                    <option value="Inaktiv">Inaktiv</option>
                    <option value="Inaktiv2">Inaktiv2</option>
                </select>
                <button type="submit" class="campaigns-filter__filter-submit j-filter-submit">filtern</button>
                <div class="campaigns-filter__filter-results">
                    <div class="g-hidden campaigns-filter__results-amount j-results-amount"></div>
                    <button type="reset" class="g-hidden campaigns-filter__results-reset j-results-reset"></button>
                </div>
            </form>
        </div>
        <div class="campaigns-filter__table">
            <?php
            $props = [
                ['type' => 'Aktiv', 'mod-class' => 'activity'],
                ['type' => 'Kampagnename', 'mod-class' => 'name'],
                ['type' => 'Standort', 'mod-class' => 'location'],
                ['type' => 'Beginn', 'mod-class' => 'start'],
                ['type' => 'Eingabesperre', 'mod-class' => 'lock'],
                ['type' => 'Loginsperre', 'mod-class' => 'status'],
                ['type' => 'Abschluss', 'mod-class' => 'end'],
                ['type' => 'Aktionen', 'mod-class' => 'actions']
            ];
            ?>
            <div class="campaigns-filter__table-head">
                <?php foreach ($props as $item) { ?>
                    <div class="campaigns-filter__head-date campaigns-filter__head-date--<?= $item['mod-class'] ?>">
                        <div class="campaigns-filter__head-prop"><?= $item['type'] ?></div>
                    </div>
                <?php } ?>
            </div>
            <?php
            $filter = [
                [
                    'isActive' => true,
                     'fields' => [
                        'name' => 'Kampagne 2',
                        'location' => 'Ulm',
                        'start' => '01.01.2015',
                        'lock' => '01.05.2016',
                        'status' => 'unbekannt',
                        'end' => 'unbekannt'
                     ],
                    'actions' => ['Details', 'Erinnerungsmail Profilbearbeitung', 'Erinnerungsmail Profilabsenden', 'Export aller Profile']
                ],
                [
                    'isActive' => false,
                     'fields' => [
                        'name' => 'Kampagne 2',
                        'location' => 'Ulm',
                        'start' => '01.01.2015',
                        'lock' => '01.05.2016',
                        'status' => 'unbekannt',
                        'end' => 'unbekannt'
                     ],
                    'actions' => ['Details', 'Erinnerungsmail Profilbearbeitung', 'Erinnerungsmail Profilabsenden', 'Export aller Profile']
                ]
            ];
            ?>
            <?php foreach ($filter as $item) { ?>
                <div class="campaigns-filter__table-row j-table-row">
                    <div class="campaigns-filter__row-data campaigns-filter__row-data--activity<?= $item['isActive'] ? ' campaigns-filter__row-data--active' : '' ?>"></div>
                    <?php foreach ($item['fields'] as $key => $value) { ?>
                        <div class="campaigns-filter__row-data campaigns-filter__row-data--<?= $key ?>">
                            <div class="campaigns-filter__row-name"><?= $value ?></div>
                        </div>
                    <?php } ?>
                    <div class="campaigns-filter__row-data campaigns-filter__row-data--actions">
                        <ul class="campaigns-filter__action-list">
                            <?php foreach ($item['actions'] as $list_item) { ?>
                                <a href="#!" class="campaigns-filter__action"><?= $list_item ?></a>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            <?php } ?>
        </div>
        <?php;
        include(__DIR__ . '/views/layout/paginator.php');
        ?>
    </div>
</div>
<?php
include(__DIR__ . '/views/layout/scripts.php');
?>
<script src="web/features/clients-filter/clients-filter.compiled.js?v=<?= rand() ?>"></script>
</body>
</html>