<?php
    include "header.php";
    include "../config/koneksi.php";
    $qry_detail_tas=mysqli_query($conn,"select * from tas where
    id_tas = '".$_GET['id_tas']."'");
    $dt_tas=mysqli_fetch_array($qry_detail_tas);
?>
<div class="container ">
        <div class="card">
            <h1 class="card-header" style="background-color: #FF8787;">Beli Tas</h1>
                <div class="card-body  rounded bg-warning">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="foto_tas/<?=$dt_tas['foto']?>"class="card-img-top">
                        </div>
                        <div class="col-md-8">
                            <form action="masukkantroli.php?id_tas=<?=$dt_tas['id_tas']?>"method="post">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <td><b>Nama Tas</b></td><td><?=$dt_tas['jenis_tas']?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Merk</b></td><td><?=$dt_tas['merk_tas']?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Harga</b></td><td><?=$dt_tas['harga_tas']?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Jumlah Beli</b></td><td><input type="number"name="jumlah_beli" value="1"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><input class="btn btn" style="background-color: #FF8787;" type="submit" value="BELI"></td>
                                        </tr>
                                    </thead>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
include "footer.php";
?>