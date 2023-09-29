<?php
    $id_tas = $_POST["id_tas"];
    $jenis_tas= $_POST["jenis_tas"];
    $merk_tas = $_POST["merk_tas"];
    $harga_tas = $_POST['harga_tas'];
    $foto = $_POST['foto_tas'];

    include "../config/koneksi.php";
    if ($_FILES['foto']['tmp_name']) {
        $temp = $_FILES['foto']['tmp_name'];
        $type = $_FILES['foto']['type'];
        $size = $_FILES['foto']['size'];
        $name = rand(0,9999).$_FILES['foto']['name'];
        $folder = "../user/foto_tas/";

        if ($size < 2048000 and ($type =='image/jpeg' or $type == 'image/png' or $type == 'image/jfif' ))
        {
            $query_foto = mysqli_query($conn, "SELECT * FROM tas where id_tas = '".$_POST['id_tas']."'");
            $data_foto = mysqli_fetch_array($query_foto);
            unlink('foto/'.$data_foto['foto']);
            
            move_uploaded_file($temp, $folder . $name);
            $input = mysqli_query($conn, "UPDATE tas SET 
            jenis_tas='".$jenis_tas."', merk_tas='".$merk_tas."',
            harga_tas='".$harga_tas."', foto='".$name."'
            where id_tas='".$id_tas."'");
            
            if ($input) {
                echo "<script>alert('Berhasil');location.href='daftartas.php';</script>";
            }
            else {
                echo "<script>alert('Gagal');location.href='tambah_tas.php';</script>";
            }
        }
    }
    else{
        $input = mysqli_query($conn, "UPDATE tas SET jenis_tas='".$jenis_tas."', 
        merk_tas='".$merk_tas."', harga_tas='".$harga_tas."' where id_tas='".$id_tas."'");

        if ($input) {
            echo "<script>alert('Berhasil');location.href='daftartas.php';</script>";
        }
        else {
            echo "<script>alert('Gagal');location.href='tambah_tas.php';</script>";
        }
    }
    
?>