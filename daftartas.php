<?php
include "header_admin.php";
if($_SESSION['role']=='admin'){

?>
<div class="container">
        <div class="card rounded bg-warning">
            <div class="card-header " style="background-color: #FF8787;">
                <h1>DAFTAR TAS</h1></div>
                <div class="card-body ">
    <table class="table table-hover table-striped rounded bg-warning">
        <thead>
            <tr>
            <th>NO</th>
            <th>JENIS TAS</th>
            <th>MERK</th>
            <th>HARGA</th>
            <th>FOTO</th>
            <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include "../config/koneksi.php";
                $qry_tas=mysqli_query($conn,"select * from tas");
                $no=0;
                while($data_tas=mysqli_fetch_array($qry_tas)){
                $no++;?>
                <tr>
                <td><?=$no?></td>
                <td><?=$data_tas['jenis_tas']?></td>
                <td><?=$data_tas['merk_tas']?></td>
                <td><?=$data_tas['harga_tas']?></td>
                <td><img src='../user/foto_tas/<?=$data_tas['foto']?>' width='100'></td>
                <td><a href="ubah_tas.php?id_tas=<?=$data_tas['id_tas']?>"class="btn btn-success">Ubah</a> | <a
                href="hapus_tas.php?id_tas=<?=$data_tas['id_tas']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
                </tr>
                <?php
                }
            ?>
        </tbody>
    </table>
    <a href="tambah_tas.php" class="btn btn" style="background-color: #FF8787;">Tambah</a>
    <?php 
    }

    include "../user/footer.php"?>