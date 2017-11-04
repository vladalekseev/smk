<!doctype html>
<html lang="en">
<head>
    <?php include(__DIR__ . '/views/layout/head.php') ?>
    <link rel="stylesheet" href="web/features/constructor/constructor.min.css?v=<?= rand() ?>">
    <link rel="stylesheet" href="web/features/footer/footer.min.css?v=<?= rand() ?>">
    <link rel="stylesheet" href="web/features/wysiwyg/wysiwyg.min.css?v=<?= rand() ?>">
    <title>Kunden</title>
</head>
<body>
<?php
$isMenu = true;
$step = 2;
$clientsPage = 'online';
$typeHeader = 'clients_menu';
include(__DIR__ . '/views/layout/header.php');
include(__DIR__ . '/views/layout/note.php');
?>
<div class="constructor">
    <?php
    include(__DIR__ . '/views/layout/aside-menu.php');
    ?>
    <div class="constructor__content">
        <?php
        include(__DIR__ . '/views/layout/description.php');
        include(__DIR__ . '/views/layout/wysiwyg.php');
        include(__DIR__ . '/views/layout/footer.php');
        ?>
    </div>
</div>
<?php
include(__DIR__ . '/views/layout/scripts.php')
?>
</body>
</html>