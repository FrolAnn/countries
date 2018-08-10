<?php $countries = getCountriesFromDB(); ?>

<table id="countries">
    <tr>
        <th>Страна</th>
        <th>Столица</th>
    </tr>

    <?php if($countries): ?>
        <?php foreach ($countries as $country) : ?>
            <tr>
                <td> <?= htmlspecialchars($country['NAME']) ?></td>
                <td> <?= htmlspecialchars($country['CAPITAL']) ?></td>
            </tr>
        <?php endforeach ?>
    <?php endif ?>
</table>
