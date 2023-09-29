<?php
    if($_GET['id']){
    include "../config/koneksi.php";
    $id_penjualan=$_GET['id'];
    // $cek_terlambat=mysqli_query($conn, "select * from peminjaman_buku where id_peminjaman_buku = '".$id_peminjaman_buku."' ");
    // $dt_beli=mysqli_fetch_array($cek_terlambat);

    // if(strtotime($dt_beli['tanggal_kembali'])>=strtotime(date('Y-m-d'))){
    // $denda=0;
    // } else{
    //     $harga_denda_perhari=5000;
    //     $tanggal_kembali = new DateTime();
    //     $tgl_harus_kembali = new
    //     DateTime($dt_pinjam['tanggal_kembali']);
    //     $selisih_hari = $tanggal_kembali->diff($tgl_harus_kembali)->d;
    //     $denda=$selisih_hari*$harga_denda_perhari;
    //     }
        mysqli_query($conn, "INSERT INTO datang_tas (id_penjualan, tanggal_datang_tas) VALUE('".$id_penjualan."','".date('Y-m-d')."')");
        header('location: transaksi_admin.php');
        }
?>