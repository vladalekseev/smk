<header class="header">
    <div class="header__title">
        <?php if (isset($isMenu)) { ?>
        <div class="header__sandwich j-header-sandwich"></div>
        <?php }?>
        <a href="/" class="header__title-link"></a>
        <?php if (isset($isMenu)) { ?>
            <span class="header__settings">Profil einrichten</span>
        <?php }?>
    </div>
    <nav class="header__menu">
        <?php if ($typeHeader == 'login') { ?>
            <div class="header__menu-status">
                <div class="header__person header__person--login">
                    <button class="header__person-icon header__person-icon--login"></button>
                </div>
            </div>
        <?php } else { ?>
            <ul class="header__menu-list">
            <?php if ($typeHeader == 'dashboard_page1') { ?>
                <?php
                $items = [
                    ['name' => 'Dashboard', 'mod-class' => ' header__list-item--active', 'link' => '/dashboard_page2.php'],
                    ['name' => 'Profile', 'link' => '#!'],
                    ['name' => 'Stellenanzeigen', 'link' => '#!']
                ];
                ?>
                <?php foreach ($items as $item) { ?>
                    <li>
                        <a class="header__list-item<?= isset($item['mod-class']) ? $item['mod-class'] : '' ?>" href="<?= $item['link'] ?>">
                            <?= $item['name'] ?>
                        </a>
                    </li>
                <?php } ?>
            <?php } elseif ($typeHeader == 'dashboard_page2') { ?>
                <?php
                $items = [
                    ['name' => 'Dashboard', 'mod-class' => ' header__list-item--active', 'link' => '/dashboard_page2.php'],
                    ['name' => 'Kunden', 'link' => '/kunden.php'],
                    ['name' => 'Kampagnen', 'link' => '/campaigns-filter.php'],
                    ['name' => 'Zuordnungen', 'link' => '#!'],
                    ['name' => 'Stellenanzeigen', 'link' => '#!'],
                    ['name' => 'Konfigurationen', 'link' => '#!']
                ];
                ?>
                <?php foreach ($items as $item) { ?>
                    <li>
                        <a class="header__list-item<?= isset($item['mod-class']) ? $item['mod-class'] : '' ?>" href="<?= $item['link'] ?>">
                            <?= $item['name'] ?>
                        </a>
                    </li>
                <?php } ?>
            <?php } elseif ($typeHeader == 'clients_menu') {
                $items = [
                    ['name' => 'Dashboard', 'link' => '/dashboard_page2.php'],
                    ['name' => 'Kunden', 'mod-class' => ' header__list-item--active', 'link' => '/kunden.php'],
                    ['name' => 'Kampagnen', 'link' => '/campaigns-filter.php'],
                    ['name' => 'Zuordnungen', 'link' => '#!'],
                    ['name' => 'Stellenanzeigen', 'link' => '#!']
                ];
                ?>
                <?php foreach ($items as $item) { ?>
                    <li>
                        <a class="header__list-item<?= isset($item['mod-class']) ? $item['mod-class'] : '' ?>" href="<?= $item['link'] ?>">
                            <?= $item['name'] ?>
                        </a>
                    </li>
                <?php } ?>
            <?php } elseif ($typeHeader == 'campaigns_menu') { ?>
                <?php
                $items = [
                    ['name' => 'Dashboard', 'link' => '/dashboard_page2.php'],
                    ['name' => 'Kunden', 'link' => '/kunden.php'],
                    ['name' => 'Kampagnen', 'mod-class' => ' header__list-item--active', 'link' => '/campaigns-filter.php'],
                    ['name' => 'Zuordnungen', 'link' => '#!'],
                    ['name' => 'Stellenanzeigen', 'link' => '#!']
                ];
                ?>
                <?php foreach ($items as $item) { ?>
                    <li>
                        <a class="header__list-item<?= isset($item['mod-class']) ? $item['mod-class'] : '' ?>" href="<?= $item['link'] ?>">
                            <?= $item['name'] ?>
                        </a>
                    </li>
                <?php } ?>
            <?php }?>
            </ul>
            <div class="header__menu-status">
                <div class="header__person">
                    <button class="header__person-icon"></button>
                    <span class="header__person-name">Max Mustermann</span>
                </div>
                <button class="header__exit"></button>
            </div>
        <?php }?>
    </nav>
</header>