<?php
// $id_produk = $_GET['id_produk'];
    $id_transaksi = $_POST['id_transaksi'];
    $id_pelanggan = $_POST['id_pelanggan'];
    $id_produk = $_POST['id_produk'];
    $tgl_transaksi = $_POST['tgl_transaksi'];
    $total_harga = $_POST['total_harga'];

    include("connect.php");
    $result = mysqli_query($conn, "INSERT INTO `transaksi` (`id_transaksi`,`id_pelanggan`,`id_produk`, `tgl_transaksi` ,`total_harga` ) 
    VALUES ('$id_transaksi','$id_pelanggan' ,'$id_produk' ,'$tgl_transaksi', '$total_harga');");
    // $result = mysqli_query($conn, "DELETE FROM produk WHERE id_produk = '$id_produk'");
    header("Location:produk.php");
?>