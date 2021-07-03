
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
    </head>
    <body>
    <?php 
    include('crudmhs.php');
    $nim = $_GET['nim'];
    echo "
     <h2>Apakah anda yakin ingin menghapus data Mahasiswa dengan NIM :  </h2>
     <a href='teshapus.php?nim=$nim'>OK</a>
     <a href='bacamhs2.php'>BATAL</a>
     </body>
    </html>
    ";?>





