<?php
$conn = mysqli_connect("localhost","root","","game_favorit");

function read($query){
    global $conn;

    $hasil = mysqli_query($conn,$query);
    $rows = [];

    while($row = mysqli_fetch_assoc($hasil)){
        $rows [] = $row;

    }
    return $rows;


}
function tambah_data($data){
    global $conn;
    $nama_game = $_POST ["nama_game"];
    $publisher = $_POST ["publisher"];
    $tahun = $_POST ["tahun_rilis"];
    $harga = $_POST ["harga"];

    $query = "INSERT INTO daftar_game VALUES ('$nama_game','$publisher','$harga','$tahun')";

    mysqli_query($conn,$query);
    
    return mysqli_affected_rows($conn);
}
function hapus($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM daftar_game WHERE code_game = '$id'") or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
?>