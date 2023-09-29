<?php
session_start();
    if($_POST){
        include "../config/koneksi.php";
        $qry_get_tas=mysqli_query($conn,"select * from tas where
            id_tas = '".$_GET['id_tas']."'");
        $dt_tas=mysqli_fetch_array($qry_get_tas);
        $_SESSION['cart'][]=array(
            'id_tas'=>$dt_tas['id_tas'],
            'merk_tas'=>$dt_tas['merk_tas'],
            'jenis_tas'=>$dt_tas['jenis_tas'],
            'harga_tas'=>$dt_tas['harga_tas'],
            'qty'=>$_POST['jumlah_beli']
        );
    }
header('location: troli.php');
?>