<?php
require 'function.php';
$result = query("SELECT * FROM daftar_game");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game favorit Raka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    body {
        background-image: url('cod_ghost.jpg');
        background-repeat: repeat;
        width: 1920px;
        height: 1080px;
    }
    .heading{
        font-family: sans-serif;
        font-style: bold;
        color: aliceblue;
        text-shadow: 35px;
    }
    </style>
</head>
<body>
    <div class="container text-center pt-3">
        <h2 class="heading" >Data Game Favorit Raka</h2>
    </div>
    <div class="container pt-4">
        <table class="table table-hover">
            <tr class="">
                <th><center>No</center></th>
                <th>Code</th>
                <th>Nama Game</th>
                <th>Publisher</th>
                <th>Tahun Rilis</th>
                <th>Harga</th>
                <th><center>Action</center></th>
                
            </tr>
            <tr>
                <?php $i = 1; ?>
                <?php foreach ($result as $row) : ?>
            </tr>
            <tr>
                <td class=""><center><?= $i; ?></center></td>
                <td><?= $row ["code_game"];?></td>
                <td><?= $row ["nama_game"];?></td>
                <td><?= $row ["publisher"];?></td>
                <td><?= $row ["tahun_rilis"];?></td>
                <td><?= $row ["harga"];?></td>
                <td ><center><a style="background-color: blue;" class="btn btn-secondary" href="../Latihan 7/update_data.php?code_game=<?= $row ["code_game"];?> " role="button">Update</a> 
                <a style="background-color: red;" class="btn btn-secondary" href="../Latihan 4/delete.php?code_game=<?= $row ["code_game"];?> " role="button">Delete</a></center>
            </td>

            </tr>
            <?php $i++; ?>
            <?php endforeach;?>
        </table>
    </div>
    <div class="container text-center">
        <a style="background-color: greenyellow; color: black;" class="btn btn-secondary btn-lg" href="../Latihan 3/notifikasi_inputan.php" role="button">TAMBAH DATA</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>