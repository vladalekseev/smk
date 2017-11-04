<nav class="aside-menu">
    <ul class="aside-menu__profile j-profile-menu">
        <li class="aside-menu__profile-header">Kundenprofil</li>
        <li>
            <a href="/kunden_graphic-print.php" class="aside-menu__profile-item
            <?= $clientsPage == 'print' ? ' aside-menu__profile-item--active' : '' ?> aside-menu__profile-item--print-ulm">
                Print-Ausgabe<br>Ulm
            </a>
        </li>
        <li>
            <a href="/kunden_graphic-online.php" class="aside-menu__profile-item
            <?= $clientsPage == 'online' ? ' aside-menu__profile-item--active' : '' ?> aside-menu__profile-item--online-ulm">
                Online-Ausgabe<br>Ulm
            </a>
        </li>
        <li>
            <a href="#!" class="aside-menu__profile-item aside-menu__profile-item--online-augsburg">
                Online-Ausgabe<br>Augsburg
            </a>
        </li>
    </ul>
    <ul class="aside-menu__profile-section">
        <li class="aside-menu__profile-back">
            <button type="button" class="aside-menu__back-btn">zurück</button>
        </li>
        <?php
        $steps = [
            ['step' => 'Kopf / Grafiken', 'number' => '1', 'link' => '/kunden_graphic-print.php'],
            ['step' => 'Beschreibung', 'number' => '2', 'link' => 'kunden_description-print.php'],
            ['step' => 'Karriere', 'number' => '3', 'link' => '#!'],
            ['step' => 'Zitat', 'number' => '4', 'link' => '/kunden_quote.php'],
            ['step' => 'Steckbrief', 'number' => '5', 'link' => '#!'],
            ['step' => 'Profilübernahme', 'number' => '6', 'link' => '/kunden_capture.php']
        ];
        ?>
        <?php foreach ($steps as $item) { ?>
            <li>
                <a href="<?= $item['link'] ?>"
                   class="aside-menu__profile-step<?= $item['number'] == $step ? ' aside-menu__profile-step--active' : '' ?>
                    <?= $step > $item['number'] ? ' aside-menu__profile-step--checked' : '' ?>">
                    <span class="aside-menu__profile-number"><?= $item['number'] ?></span>
                    <span class="<?= $step > $item['number'] ? 'aside-menu__profile-name' : '' ?>">
                        <?= $item['step'] ?>
                    </span>
                </a>
            </li>
        <?php } ?>
    </ul>
</nav>