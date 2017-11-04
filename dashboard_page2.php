<!doctype html>
<html lang="en">
<head>
    <?php include(__DIR__ . '/views/layout/head.php') ?>
    <link rel="stylesheet" href="web/features/dashboard/dashboard.min.css?v=<?= rand() ?>">
    <title>Dashboard</title>
</head>
<body>
    <?php
    $typeHeader = 'dashboard_page2';
    include(__DIR__ . '/views/layout/note.php');
    include(__DIR__ . '/views/layout/header.php');
    ?>
    <div class="dashboard">
        <?php include(__DIR__ . '/views/layout/dashboard_top.php') ?>
        <div class="dashboard-content">
            <h2 class="dashboard-content__header">Herzlich willkommen im Administrationsbereich von Proffile!</h2>
            <p class="dashboard-content__description">Hier können Sie alle Daten rund um die Profileinträge verwalten.</p>
            <div class="dashboard-content__sections">
                <a href="/kunden.php" class="dashboard-content__clients-section">
                    <div class="dashboard-content__section-name">Kunden</div>
                </a>
                <a href="#!" class="dashboard-content__campaigns-section">
                    <div class="dashboard-content__section-name dashboard-content__section-name--campaigns">Kampagnen</div>
                </a>
            </div>
        </div>
    </div>
    <?php include(__DIR__ . '/views/layout/scripts.php') ?>
</body>
</html>