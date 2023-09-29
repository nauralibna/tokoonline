<?php
    $nama_kota = $_POST["nama_kota"];
    $provinsi = $_POST["provinsi"];

    include "../config/koneksi.php";
    $input = mysqli_query($conn, "INSERT INTO kota (nama_kota, provinsi) VALUES ('{$nama_kota}', '{$provinsi}')");

    if ($input) {
        echo "<script>alert('Berhasil');location.href='tampil_kota.php';</script>";
    }
    else {
        echo "<script>alert('Gagal');location.href='tambah_kota.php';</script>";
    }
?>