<?php
include('config.php');

$id = $_GET['id'];
$sql = "SELECT * FROM kadidat WHERE id=$id";
$query = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($query);
//print_r($data);
$total = $data['jumlah']+1;

$sql2 = "UPDATE kadidat SET jumlah='$total' WHERE id=$id";
    $query2 = mysqli_query($con, $sql2);

    // apakah query update berhasil?
    if( $query2 ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: index.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }