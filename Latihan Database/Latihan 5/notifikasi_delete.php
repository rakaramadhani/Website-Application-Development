<?php

require 'function.php';

$id = $_GET ["nama_game"];


if ( hapus($id) > 0) {
    echo "
    <script>
        alert('Game berhasil dihapus!');
        document.location.href = '../Latihan 1/connection.php';
    </script>
    ";
} else {
    echo "
        <script>
            alert('Game gagal di hapus!');
            document.location.href = '../Latihan 1/connection.php';
        </script>
        ";
    
}




?>