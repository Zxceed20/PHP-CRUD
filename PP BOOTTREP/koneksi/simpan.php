<?php
include 'koneksi.php';

$nama=$_POST['nama'];
$tanggal=$_POST['tanggal'];
$deskripsi=$_POST['deskripsi'];
$query = mysqli_query($connect, "INSERT INTO data (nama, tanggal, deskripsi) VALUES ('$nama','$tanggal','$deskripsi')");
if ($query) {
    echo "<div class='alert alert-success' style='text-align:center'>DATA BERHASIL DISIMPAN</div>";
    header ("refresh:1 ;url=../index.php");
} else {
    echo "<div class='alert alert-danger'>COBA LAGI NT</div>";
    header ("refresh:1 ;url=../index.php");
}