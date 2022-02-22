<!-- view/music/detail.php -->
<?php $title = 'Jármű adatok' ?>

<?php ob_start() ?>
    <h1><?= $title ?></h1>

    <a href="/mvc03/index.php/vehicle" class="btn btn-primary btn-sm">Vissza</a>
    <dl>
        <dt>Név : </dt>
        <dd><?= $vehicle['type'] ?></dd>
        <dt>Rendszám : </dt>
        <dd><?= $vehicle['lpn'] ?></dd>
        <dt>Forgalomba helyezés éve : </dt>
        <dd><?= $vehicle['year'] ?></dd>
    </dl>
<?php $puffer = ob_get_clean() ?>

<?php include 'view/template.php' ?>