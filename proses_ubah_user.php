<?php
    if($_POST){
        $id_user=$_POST['id_user'];
        $nama_user=$_POST['nama_user'];
        $tanggal_lahir=$_POST['tanggal_lahir'];
        $gender=$_POST['gender'];
        $alamat=$_POST['alamat'];
        $telepon=$_POST['telepon'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $id_kota=$_POST['id_kota'];

        if(empty($nama_user)){
            echo "<script>alert('nama user tidak boleh kosong');location.href='tambah_user.php';</script>";
        } elseif(empty($username)){
            echo "<script>alert('username tidak boleh kosong');location.href='tambah_user.php';</script>";
        } else {
        include "../config/koneksi.php";
            if(empty($password)){
                $update=mysqli_query($conn,"update user set nama_user='".$nama_user."', tanggal_lahir='".$tanggal_lahir."',
                gender='".$gender."', alamat='".$alamat."', telepon='".$telepon."', username='".$username."',id_kota='".$id_kota."' 
                where id_user = '".$id_user."' ") or 
                die(mysqli_error($conn));

                if($update){
                    echo "<script>alert('Sukses update user');location.href='tampil_user.php';</script>";
                } else {
                    echo "<script>alert('Gagal update user');location.href='ubah_user.php?id_user=".$id_user."';</script>";
                }
            } else {
                $update=mysqli_query($conn,"update user set
                nama_user='".$nama_user."',tanggal_lahir='".$tanggal_lahir."',gender='".$gender."', 
                alamat='".$alamat."', telepon='".$telepon."', username='".$username."',password='".md5($password)."', id_kota='".$id_kota."' 
                where id_user ='".$id_user."'") or 
                die(mysqli_error($conn));

                if($update){
                    echo "<script>alert('Sukses update user');location.href='tampil_user.php';</script>";
                } else {
                    echo "<script>alert('Gagal update user');location.href='ubah_user.php?id_user=".$id_user."';</script>";
                }
            }
        }
    }
?>