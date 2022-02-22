<!-- view/music/list.php -->
<?php $title = 'Jármű' 
?>

<?php ob_start() ?>
	<br>
    <center><h1><?= $title ?></h1></center>

	<br>
	<div class="table-responsive"> 
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Típus</th>
            <th>Rendszám</th>
            <th>Forgalomba helyezés éve</th>
            <th>Detail</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php foreach ($vehicle as $row): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['type'] ?></td>
            <td><?= $row['lpn'] ?></td>
            <td><?= $row['year'] ?></td>
            <td><a href="/mvc03/index.php/vehicle/detail?id=<?= $row['id'] ?>" class="btn btn-success btn-xs"> Detail</a></td>
            <td><a href="/mvc03/index.php/vehicle/edit?id=<?= $row['id'] ?>" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>
            <td><a href="/mvc03/index.php/vehicle/delete?id=<?= $row['id']?>" onclick="return confirm('Anda yakin akan menghapus data ini?')" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-trash"></span> Delete</a></td>
        </tr>
        <?php endforeach ?>
    </table>
	</div>
    <br>
    <a href="/mvc03/index.php/vehicle/create" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Új</a>
<?php $puffer = ob_get_clean() ?>

<?php include 'view/template.php' ?>