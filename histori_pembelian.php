<?php
   include "header.php";
?>
<div class="container">
        <div class="card rounded bg-warning">
            <div class="card-header " style="background-color: #FF8787;">
                <h1>Histori Pembelian</h1></div>
                <div class="card-body ">
                <table class="table table-hover table-striped rounded bg-warning">
                    <thead>
                        <th>NO</th>
                        <th>Tanggal Pembelian</th>
                        <th>Nama Tas</th>
                        <th>Jumlah Tas</th>
                        <th>Total Harga</th>
                    </thead>
                    <tbody>
                        <?php
                        include "../config/koneksi.php";
                        $qry_histori=mysqli_query($conn,"select * from penjualan_tas order by id_penjualan desc");
                        $no=0;
                        while($dt_histori=mysqli_fetch_array( $qry_histori)){
                        $no++;
                        $jumlah = 0;
                        $harga_tas = 0;
                        $tas_dibeli="<ol>";
                        $qry_tas=mysqli_query($conn,"select * from detail_penjualan_tas join tas on tas.id_tas=detail_penjualan_tas.id_tas where id_penjualan ='".$dt_histori['id_penjualan']."'");
                            while($dt_tas=mysqli_fetch_array($qry_tas)){
                            $tas_dibeli .="<li>".$dt_tas['jenis_tas']."</li>";
                            $jumlah += $dt_tas['qty'];
                            $harga_tas += ($dt_tas['harga_tas']) * ($dt_tas['qty']);
                            }
                            $tas_dibeli.="</ol>";
                        ?>
                    <tr>
                    <td><?=$no?></td>
                    <td><?=$dt_histori['tanggal_penjualan']?></td>
                    <td><?=$tas_dibeli?></td>
                    <td><?=$jumlah?></td>
                    <td><?="Rp ".$harga_tas?></td>
                    </tr>
                    <?php
                    }
                    ?>
                    </tbody>
    </table>
<?php
include "footer.php";
?>
