<?php
    $nama_user = $_POST["nama_user"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id_kota = $_POST['id_kota'];
    
    include "../config/koneksi.php";
    $input = mysqli_query($conn, "INSERT INTO user 
    (nama_user, tanggal_lahir, gender, alamat, telepon, username, password, id_kota) VALUES 
    ('".$nama_user."', '".$tanggal_lahir."','".$gender."','".$alamat."','".$telepon."','".$username."','".md5($password)."','".$id_kota."')");

    if ($input) {
        echo "<script>alert('Berhasil');location.href='tampil_user.php';</script>";
    }
    else {
        echo "<script>alert('Gagal');location.href='tampil_user.php';</script>";
    }
?>