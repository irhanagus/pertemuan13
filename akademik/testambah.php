<?php
include('crudmhs.php');
$nim = '1937057';
$nama = 'Istiningsih';
$kelamin = 'P';
$jurusan = 'MI';
$hasil = tambahMhs($nim, $nama, $kelamin, $jurusan);
if($hasil > 0)
header("Location: bacamhs2.php");
else
echo 'Gagal menambah record';
?>