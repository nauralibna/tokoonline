<?php
    include"header.php";
?>
<div class="container">
        <div class="card rounded bg-warning">
            <div class="card-header " style="background-color: #FF8787;">
                <h1>Troli</h1></div>
                <div class="card-body ">
                    <table class="table table-hover striped rounded bg-warning">
                        <thead>
                            <tr>
                            <th>NO</th><th>Tas</th><th>Jumlah</th><th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                    if(@$_SESSION['cart']!=null)
                    {
                    foreach (@$_SESSION['cart'] as $key_produk => $val_produk): ?>
                        <tr>
                        <td><?=($key_produk+1)?></td>
                        <td><?=$val_produk['jenis_tas']?></td>
                        <td><?=$val_produk['qty']?></td>
                        <td><a href="hapus_troli.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>Hapus</strong></a></td>
                        </tr>
                        <?php endforeach;
                    }?>
                        
                        </tbody>
                    </table>
<a href="checkout.php" class="btn btn" style="background-color: #FF8787;">CHECK OUT</a>
<?php
include "footer.php";
?>