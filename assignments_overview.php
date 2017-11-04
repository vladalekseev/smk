<!doctype html>
<html lang="en">
<head>
    <?php include(__DIR__ . '/views/layout/head.php') ?>
    <link rel="stylesheet" href="web/features/overview/overview.min.css?v=<?= rand() ?>">
    <title>Zuordnungen</title>
</head>
<body>
<?php
$typeHeader = 'campaigns_menu';
include(__DIR__ . '/views/layout/header.php');
include(__DIR__ . '/views/layout/note.php');
?>
<div class="overview">
    <?php
    include(__DIR__ . '/views/layout/back-btn.php');
    ?>
    <div class="overview__content">
        <h2 class="overview__title">Datentypen Übersicht</h2>
        <ul class="overview__list">
           <li class="overview__list-header">Name</li>
               <?php
               $names = [
                   'Berufs- und Ausbildungskategorien',
                   'Anstellung',
                   'Ausbildung',
                   'Bereich',
                   'Studium & Weiterbildung',
                   'Branche',
                   'Fachrichtungen',
                   'Arbeit und Freizeit',
                   'Arbeit und Familie',
                   'Weiterbildung',
                   'Essen',
                   'Gesundheit',
                   'Zusatzleistungen',
                   'Weiteres'
               ];
               ?>
               <?php foreach ($names as $name) { ?>
                   <li class="overview__list-item">
                       <span class="overview__item-name"><?= $name ?></span>
                       <a href="#!" class="overview__item-details">Details</a>
                   </li>
               <?php } ?>
        </ul>
    </div>
</div>
<?php
include(__DIR__ . '/views/layout/scripts.php');
?>
</body>
</html>