<?php
include "header.php";
?>
<div class="card-header " style="background-color: #FF8787;">
<h2 ><center>~~ OUR PRODUCT ~~</center></h2>
<div class="row">
    <?php
    include "../config/koneksi.php";
    $qry_tas= mysqli_query($conn,"select * from tas");
    while($dt_tas=mysqli_fetch_array($qry_tas)){
    ?>
    
        <div class="col-md-3">
            <div class="card rounded bg-warning" >
                <img src="foto_tas/<?=$dt_tas['foto']?>"class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><center><?=$dt_tas['jenis_tas']?></center></h5>
                    <p class="card-text"><center><?=substr($dt_tas['merk_tas'],0,20)?></center></p>
                    <p class="card-text"><center><?=substr($dt_tas['harga_tas'],0,20)?></center></p>
                    <center><a href="beli_tas.php?id_tas=<?=$dt_tas['id_tas']?>" class="btn btn" style="background-color: #FF8787;">BELI</a></center>
                    </div>
            </div>
        </div>
        <?php
    }
    ?>
</div> 
<?php
include "footer.php";
?>