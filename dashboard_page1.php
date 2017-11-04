<!doctype html>
<html lang="en">
<head>
    <?php include(__DIR__ . '/views/layout/head.php') ?>
    <link rel="stylesheet" href="web/features/dashboard/dashboard.min.css?v=<?= rand() ?>">
    <title>Dashboard</title>
</head>
<body>
    <?php
    $typeHeader = 'dashboard_page1';
    include(__DIR__ . '/views/layout/note.php');
    include(__DIR__ . '/views/layout/header.php')
    ?>
    <div class="dashboard">
        <?php include(__DIR__ . '/views/layout/dashboard_top.php') ?>
        <div class="dashboard-content">
            <h2 class="dashboard-content__header">Herzlich willkommen im Kundenbereich von Proffile!</h2>
            <p class="dashboard-content__description">Hier können Sie alle Daten rund um die Profileinträge verwalten.</p>
            <h3 class="dashboard-content__profile-header">Meine Profile</h3>
            <ul class="dashboard-content__profiles">
                <?php
                $names = [
                    ['type' => 'Print-Ausgabe', 'city' => 'Ulm', 'mod-class' => 'print-ulm', 'link' => 'kunden_graphic-print.php'],
                    ['type' => 'Online-Ausgabe', 'city' => 'Ulm', 'mod-class' => 'online-ulm', 'link' => 'kunden_graphic-online.php'],
                    ['type' => 'Print-Ausgabe', 'city' => 'München', 'mod-class' => 'print-munchen', 'link' => '#!'],
                    ['type' => 'Online-Ausgabe', 'city' => 'München', 'mod-class' => 'online-munchen', 'link' => '#!'],
                    ['type' => 'Print-Ausgabe', 'city' => 'Augsburg', 'mod-class' => 'print-augsburg', 'link' => '#!'],
                    ['type' => 'Online-Ausgabe', 'city' => 'Augsburg', 'mod-class' => 'online-augsburg', 'link' => '#!'],
                ];
                ?>
                <?php foreach ($names as $item) { ?>
                    <li>
                        <a href="<?= $item['link'] ?>"
                           class="dashboard-content__profiles-item dashboard-content__profiles-item--<?= $item['mod-class'] ?>">
                            <?= $item['type'] ?> <br> <?= $item['city'] ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
            <h3 class="dashboard-content__articles-title">Artikel</h3>
            <ul class="dashboard-content__articles">
                <?php
                $articles = [
                    [
                        'text' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                         sed diam nonumy eirmod tempor invidunt ut labore et dolore magna ',
                        'date' => '25.01.2017',
                        'theme' => 'Überschrift Thema'
                    ],
                    [
                        'text' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                         sed diam nonumy eirmod tempor invidunt ut labore et dolore magna ',
                        'date' => '25.01.2017',
                        'theme' => 'Überschrift Thema'
                    ],
                    [
                        'text' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor',
                        'date' => '25.01.2017',
                        'theme' => 'Längeres Thema'
                    ],
                ];
                ?>
                <?php foreach ($articles as $item) { ?>
                    <li class="dashboard-content__articles-item">
                        <h4 class="dashboard-content__article-header">
                            <span class="dashboard-content__article-date"><?= $item['date'] ?> </span><?= $item['theme'] ?>
                        </h4>
                        <p class="dashboard-content__article-text"><?= $item['text'] ?></p>
                        <a href="#!" class="dashboard-content__article-btn">mehr</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <?php include(__DIR__ . '/views/layout/scripts.php') ?>
</body>
</html>