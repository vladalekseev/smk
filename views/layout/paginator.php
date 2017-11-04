<div class="paginator">
    <select class="paginator__select j-paginator-select">
        <option value="5">5</option>
        <option value="10">10</option>
    </select>
    <div class="paginator__results">Ergebnissen / Seite</div>
    <div class="paginator__pages">
        <a href="#!" class="paginator__page paginator__page--active">1</a>
        <?php
        for ($i = 2; $i <= 10; $i++) { ?>
            <a href="#!" class="paginator__page"><?= $i ?></a>
        <?php } ?>
    </div>
    <a href="#!" class="paginator__more">Weiter</a>
    <button type="button" class="paginator__next"></button>
</div>
</div>