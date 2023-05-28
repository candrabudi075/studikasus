<?php
    $id = $_POST['id_pelanggan'];
    $nama = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];
    $nomor_telepon = $_POST['nomor_telepon'];
    $email = $_POST['email'];

    include("connect.php");
    $result = mysqli_query($conn, "INSERT INTO `pelanggan` (`id_pelanggan`,`nama_pelanggan`, `email`, `nomor_telepon` , `alamat`) 
    VALUES ('$id','$nama' ,'$alamat' ,'$nomor_telepon', '$email');");
    
    header("Location:pelanggan.php");
?>