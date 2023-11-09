<?php 
require 'function.php';


if (isset( $_POST ["submit"])) {

    if (tambah_data($_POST) > 0 ) {
        echo "
        <script>
            alert('Game baru berhasil ditambahkan');
            document.location.href = '../Latihan 1/connection.php';
        </script>
        ";
    }else {
        echo "
        <script>
            alert('Game baru gagal ditambahkan');
            document.location.href = '../Latihan 1/connection.php';
        </script>
        ";
    }

    
    
    
}
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .container{
            width: 500px;
            height: 500px;
            align-content: center;
        }
    </style>
</head>
<body> 

    <div style="margin: 40px;" class="container">
        <form action="" method="post">
        <div class="mb-3">
                <label for="code_game" class="form-label">Code Game :</label>
                <input type="text" class="form-control" id="code_game" name ="code_game" required>
            </div>
            <div class="mb-3">
                <label for="nama_game" class="form-label">Nama Game :</label>
                <input type="text" class="form-control" id="nama_game" name ="nama_game" required>
            </div>
            <div class="mb-3">
                <label for="publisher" class="form-label">Publisher :</label>
                <input type="text" class="form-control" id="publisher" name ="publisher" required>
            </div>
            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun Rilis :</label>
                <input type="number" class="form-control" id="tahun_rilis" name ="tahun_rilis" required>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga :</label>
                <input type="number" class="form-control" id="harga" name ="harga" required>
            </div>
            <div class="mb-3">
                <button type="submit" name="submit" class="btn btn-secondary btn-lg">Simpan</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>