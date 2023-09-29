<?php
    session_start();
    include "../config/koneksi.php";
    date_default_timezone_set('Asia/Jakarta');
    $cart=@$_SESSION['cart'];
    if(count($cart)>0){
        mysqli_query($conn,"INSERT INTO penjualan_tas (id_user,tanggal_penjualan) VALUE('".$_SESSION['id_user']."','".date('Y-m-d')."')");
        $id=mysqli_insert_id($conn);
    foreach ($cart as $key_produk => $val_produk) {
    mysqli_query($conn,"INSERT INTO detail_penjualan_tas (id_penjualan,id_tas,qty) VALUE('".$id."','".$val_produk['id_tas']."','".$val_produk['qty']."')");
    }
    unset($_SESSION['cart']);
    echo '<script>alert("Anda berhasil membeli tas");location.href="histori_pembelian.php"</script>';
    }
   
?>
