<?php
    if ($_GET['id_tas']) {
        include "../config/koneksi.php";
        $query_foto = mysqli_query($conn, "SELECT * FROM tas where id_tas = '".$_GET['id_tas']."'");
        $data_foto = mysqli_fetch_array($query_foto);
        
        $query_hapus = mysqli_query($conn, "DELETE FROM tas where id_tas = '".$_GET['id_tas']."'");
        unlink('foto_tas/'.$data_foto['foto']);
        if ($query_hapus) {
            // echo "berhasil";
            echo "<script> alert('Berhasil dihapus'); location.href='daftartas.php'; </script>";
        }
        else{
            // echo "gagal";
            echo "<script> alert ('Gagal dihapus'); location.href='daftartas.php'; </script>";
        }
    }
    else{
        echo "id_tidak ada";
    }
?>