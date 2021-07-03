<html>
<head>
<title>Ubah Mahasiswa</title>
<body>
<?php 
    include('crudmhs.php');
    $nim = $_GET['nim'];
    ?>
<form action = "prosesubah.php" method = "post" name ="">
    NIM:<input type = "text" name="nim"><br>
    Nama:<input type = "text" name="nama"><br>
    Jenis Kelamin 
        <input type="radio" name="kelamin" value="L">Laki-laki
        <input type="radio" name="kelamin" value="P">Perempuan
        <br>
    Jurusan
    <input type="radio" name="jurusan" value="TI">TI
    <input type="radio" name="jurusan" value="SI">SI
    <input type="radio" name="jurusan" value="MI">MI
    <input type="radio" name="jurusan" value="TK">TK
    <input type="radio" name="jurusan" value="TA">TA
    <br>

<input type = "submit" name = "submit" value="ubah">
</body>
</html>