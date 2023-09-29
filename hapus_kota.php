<?php
    // $id_kota = $_GET['id_kota'];
    if ($_GET['id_kota']) {
        // echo $id_kota;
        include "../config/koneksi.php";
        $query_hapus = mysqli_query($conn, "DELETE FROM kota where id_kota = '".$_GET['id_kota']."'");
        if ($query_hapus) {
            // echo "berhasil";
            echo "<script> alert('Berhasil dihapus'); location.href='tampil_kota.php'; </script>";
        }
        else{
            // echo "gagal";
            echo "<script> alert ('Gagal dihapus'); location.href='tampil_kota.php'; </script>";
        }
    }
    else{
        echo "id_tidak ada";
    }
?>