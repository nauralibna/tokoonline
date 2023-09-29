<?php
    $id_kota = $_POST["id_kota"];
    $nama_kota = $_POST["nama_kota"];
    $provinsi = $_POST["provinsi"];

    include "../config/koneksi.php";
    $input = mysqli_query($conn, "UPDATE kota SET nama_kota='".$nama_kota."',
    provinsi = '".$provinsi."' where id_kota = '".$id_kota."' ");

    if ($input) {
        echo "<script>alert('Berhasil');location.href='tampil_kota.php';</script>";
    }
    else {
        echo "<script>alert('Gagal');location.href='tampil_kota.php';</script>";
    }
?>