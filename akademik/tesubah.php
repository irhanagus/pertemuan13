<?php
include('crudmhs.php');
$nim = "1937054";
$nama = "Irhan";
$kelamin = "L";
$jurusan = "MI";
$hasil = ubahMhs($nim, $nama, $kelamin, $jurusan);
if($hasil == true){
echo "Berhasil";
}else{
echo "Error";
}
?>