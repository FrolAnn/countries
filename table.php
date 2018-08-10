<?php $countries = getCountriesFromDB(); ?>

<table id="countries">
    <tr>
        <th>Страна</th>
        <th>Столица</th>
    </tr>

    <?php if($countries): ?>
        <?php foreach ($countries as $country) : ?>
            <tr>
                <td> <?= $country['NAME'] ?></td>
                <td> <?= $country['CAPITAL'] ?></td>
            </tr>
        <?php endforeach ?>
    <?php endif ?>
</table>
