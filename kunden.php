<!doctype html>
<html lang="en">
<head>
    <?php include(__DIR__ . '/views/layout/head.php') ?>
    <link rel="stylesheet" href="web/features/clients-filter/clients-filter.min.css?v=<?= rand() ?>">
    <link rel="stylesheet" href="web/features/paginator/paginator.min.css?v=<?= rand() ?>">
    <title>Kunden</title>
</head>
<body>
<?php
$typeHeader = 'clients_menu';
include(__DIR__ . '/views/layout/header.php');
include(__DIR__ . '/views/layout/note.php');
?>
<div class="clients">
    <h2 class="clients__header">Kunden Übersicht</h2>
    <div class="clients__filter">
        <h3 class="clients__filter-title">Filter</h3>
        <form class="clients__filter-form">
            <select class="clients__filter-select">
                <option value="name">Name</option>
                <option value="name2">Name2</option>
            </select>
            <input type="text" class="clients__filter-input" placeholder="Suchbegriff">
            <button type="submit" class="clients__filter-submit j-filter-submit">filtern</button>
            <div class="clients__filter-results">
                <div class="clients__results-amount j-results-amount g-hidden"></div>
                <button type="reset" class="clients__results-reset j-results-reset g-hidden"></button>
            </div>
        </form>
    </div>
    <div class="clients__table">
        <?php
        $props = [
            ['type' => 'Aktiv', 'mod-class' => 'activity'],
            ['type' => 'Name', 'mod-class' => 'name'],
            ['type' => 'Ansprechpartner', 'mod-class' => 'partners'],
            ['type' => 'Letzter Login', 'mod-class' => 'date'],
            ['type' => 'Profile', 'mod-class' => 'profile'],
            ['type' => 'Profilstatus', 'mod-class' => 'status'],
            ['type' => 'Aktionen', 'mod-class' => 'actions']
        ];
        ?>
        <div class="clients__table-head">
            <?php foreach ($props as $item) { ?>
                <div class="clients__head-date clients__head-date--<?= $item['mod-class'] ?>">
                    <div class="clients__head-prop"><?= $item['type'] ?></div>
                </div>
            <?php } ?>
        </div>
        <?php
        $filter = [
            [
                'isActive' => true,
                'name' => 'Zwick GmbH & Co. KG',
                'partners' => ['Hr. Müller', 'Fr. Buchmüller', 'Hr. Konrad'],
                'dates' => ['19.07.2016', '19.07.2016', '19.07.2016'],
                'profiles' => ['ulm-print', 'ulm-online', 'ulm-print'],
                'statuses' => ['in review', 'offline', 'online'],
                'actions' => ['Zugang deaktivieren', 'Zugang deaktivieren', 'Zugang deaktivieren']
            ],
            [
                'isActive' => true,
                'name' => 'Zweckverband Landeswasserversorgung',
                'partners' => ['Hr. Müller', 'Fr. Buchmüller'],
                'dates' => ['19.07.2017', '19.07.2016'],
                'profiles' => ['augsburg-print', 'ulm-online'],
                'statuses' => ['in review', 'offline'],
                'actions' => ['Zugang deaktivieren', 'Zugang deaktivieren']
            ],
            [
                'isActive' => true,
                'name' => 'Zweckverband Kommunale Informationsverarbeitung Reutlingen-Ulm',
                'partners' => ['Hr. Müller', 'Fr. Buchmüller'],
                'dates' => ['19.07.2016', '19.07.2016'],
                'profiles' => ['munchen-print', 'munchen-online'],
                'statuses' => ['in review', 'offline'],
                'actions' => ['Zugang deaktivieren', 'Zugang deaktivieren']
            ],
            [
                'isActive' => true,
                'name' => 'Zweckverband Kommunale Informationsverarbeitung Reutlingen-Ulm',
                'partners' => ['Hr. Müller', 'Fr. Buchmüller', 'Hr. Konrad'],
                'dates' => ['19.07.2016', '19.07.2016', '19.07.2016'],
                'profiles' => ['ulm-print', 'ulm-online', 'ulm-print'],
                'statuses' => ['in review', 'offline', 'online'],
                'actions' => ['Zugang deaktivieren', 'Zugang deaktivieren', 'Zugang deaktivieren']
            ],
            [
                'isActive' => true,
                'name' => 'Zwick GmbH & Co. KG',
                'partners' => ['Hr. Müller', 'Fr. Buchmüller', 'Hr. Konrad'],
                'dates' => ['19.07.2016', '19.07.2016', '19.07.2016'],
                'profiles' => ['augsburg-print', 'augsburg-online', 'augsburg-print'],
                'statuses' => ['in review', 'offline', 'online'],
                'actions' => ['Zugang deaktivieren', 'Zugang deaktivieren', 'Zugang deaktivieren']
            ],
            [
                'isActive' => true,
                'name' => 'Zweckverband Kommunale Informationsverarbeitung Reutlingen-Ulm',
                'partners' => ['Hr. Müller', 'Fr. Buchmüller', 'Hr. Konrad'],
                'dates' => ['19.07.2016', '19.07.2016', '19.07.2016'],
                'profiles' => ['ulm-print', 'ulm-online', 'ulm-print'],
                'statuses' => ['in review', 'offline', 'online'],
                'actions' => ['Zugang deaktivieren', 'Zugang deaktivieren', 'Zugang deaktivieren']
            ],
            [
                'isActive' => false,
                'name' => 'Zwick GmbH & Co. KG',
                'partners' => ['Hr. Müller', 'Fr. Buchmüller', 'Hr. Konrad'],
                'dates' => ['19.07.2016', '19.07.2016', '19.07.2016'],
                'profiles' => ['augsburg-print', 'augsburg-online', 'augsburg-print'],
                'statuses' => ['in review', 'offline', 'online'],
                'actions' => ['Zugang deaktivieren', 'Zugang deaktivieren', 'Zugang deaktivieren']
            ],
            [
                'isActive' => true,
                'name' => 'Zwick GmbH & Co. KG',
                'partners' => ['Hr. Müller', 'Fr. Buchmüller', 'Hr. Konrad'],
                'dates' => ['19.07.2016', '19.07.2016', '19.07.2016'],
                'profiles' => ['augsburg-print', 'augsburg-online', 'augsburg-print'],
                'statuses' => ['in review', 'offline', 'online'],
                'actions' => ['Zugang deaktivieren', 'Zugang deaktivieren', 'Zugang deaktivieren']
            ],
            [
                'isActive' => false,
                'name' => 'Zwick GmbH & Co. KG',
                'partners' => ['Hr. Müller', 'Fr. Buchmüller', 'Hr. Konrad'],
                'dates' => ['19.07.2016', '19.07.2016', '19.07.2016'],
                'profiles' => ['augsburg-print', 'augsburg-online', 'augsburg-print'],
                'statuses' => ['in review', 'offline', 'online'],
                'actions' => ['Zugang deaktivieren', 'Zugang deaktivieren', 'Zugang deaktivieren']
            ],
            [
                'isActive' => true,
                'name' => 'Zwick GmbH & Co. KG',
                'partners' => ['Hr. Müller', 'Fr. Buchmüller', 'Hr. Konrad'],
                'dates' => ['19.07.2016', '19.07.2016', '19.07.2016'],
                'profiles' => ['augsburg-print', 'augsburg-online', 'augsburg-print'],
                'statuses' => ['in review', 'offline', 'online'],
                'actions' => ['Zugang deaktivieren', 'Zugang deaktivieren', 'Zugang deaktivieren']
            ]
        ];
        ?>
        <?php foreach ($filter as $item) { ?>
            <div class="clients__table-row j-table-row g-hidden">
                <div class="clients__row-data clients__row-data--activity<?= $item['isActive'] ? ' clients__row-data--active' : '' ?>"></div>
                <div class="clients__row-data clients__row-data--name">
                    <div class="clients__row-name"><?= $item['name'] ?></div>
                    <a href="#!" class="clients__row-show">Stammdaten anzeigen</a>
                </div>
                <div class="clients__row-data clients__row-data--partners">
                    <ul class="clients__partner-list">
                        <?php foreach ($item['partners'] as $list_item) { ?>
                        <li class="clients__partner"><?= $list_item ?></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="clients__row-data clients__row-data--date">
                    <ul class="clients__date-list">
                        <?php foreach ($item['dates'] as $list_item) { ?>
                            <li class="clients__date-item"><?= $list_item ?></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="clients__row-data clients__row-data--profile">
                    <ul class="clients__profile-list">
                        <?php foreach ($item['profiles'] as $list_item) { ?>
                            <li><a href="#!" class="clients__profile clients__profile--<?= $list_item ?>"></a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="clients__row-data clients__row-data--status">
                    <ul class="clients__status-list">
                        <?php foreach ($item['statuses'] as $list_item) { ?>
                            <li class="clients__status clients__status--<?= $list_item ?>"><?= $list_item ?></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="clients__row-data clients__row-data--actions">
                    <ul class="clients__action-list">
                        <?php foreach ($item['actions'] as $list_item) { ?>
                            <div class="clients__action"><?= $list_item ?></div>
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
<?php include(__DIR__ . '/views/layout/scripts.php') ?>
<script src="web/features/clients-filter/clients-filter.compiled.js?v=<?= rand() ?>"></script>
</body>
</html>