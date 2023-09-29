<?php
if($_POST){
    $jenis_tas=$_POST['jenis_tas'];
    $merk_tas=$_POST['merk_tas'];
    $harga_tas=$_POST['harga_tas'];
    $file_name=$_FILES['foto']['name'];
    $file_tmp=$_FILES['foto']['tmp_name'];
    $upload=move_uploaded_file($file_tmp, '../user/foto_tas/'.$file_name);

    if($upload){
        include "../config/koneksi.php";
        $simpan = mysqli_query($conn, "insert into tas value ('', '".$jenis_tas."', '".$merk_tas."',  '".$harga_tas."', '".$file_name."' )");
      
        if($simpan){
            echo "<script>alert('sukses');location.href='daftartas.php';</script>";}
        else{
            echo "<script>alert('Gagal');location.href='tambah_tas.php';</script>";}
    }else{
        echo "<script>alert('Gagal upload');location.href='tambah_tas.php';</script>";
    }
}
?>