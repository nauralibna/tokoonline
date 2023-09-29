<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
    crossorigin="anonymous">
</head>
<body>
    <?php
        include"header_admin.php";
    ?>
    <br><br>
    <div class="container">
        <div class="card rounded bg-warning">
            <div class="card-header " style="background-color: #FF8787;">
                <h1>DATA KOTA</h1>
                <form method="POST" action="tampil_kota.php" class="d-flex">
                    <input class="form-control me-2" type="search" name="cari"
                    placeholder="search" aria-label="search">
                    <button class="btn btn-success"  type="submit">Search</button>
                    
                </form>
            </div>
            <div class="card-body ">
                <table class="table rounded bg-warning">
                    <thead>
                        <tr>
                        <th scope="col">ID KOTA</th>
                        <th scope="col">NAMA KOTA</th>
                        <th scope="col">PROVINSI</th>
                        <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        include"../config/koneksi.php";
                        if(isset($_POST['cari'])){
                            $cari = $_POST['cari'];
                            $query_kota = mysqli_query($conn,
                            "select * from kota where id_kota = '$cari' or
                            nama_kota like '%$cari%' or provinsi like '%$cari%'"
                            );
                        }
                        else{
                            $query_kota = mysqli_query($conn, "select * from kota");
                        }
                        while($data_kota = mysqli_fetch_array($query_kota)){
                    ?>
                        <tr>
                            <td><?=$data_kota['id_kota']?></td>
                            <td><?=$data_kota['nama_kota']?></td>
                            <td><?=$data_kota['provinsi']?></td>
                            <td>
                                <a href="ubah_kota.php?id_kota=
                                <?=$data_kota['id_kota']?>" class="btn btn-success">Edit</a>
                                <a href="hapus_kota.php?id_kota=
                                <?=$data_kota['id_kota']?>" class="btn btn-danger"
                                onclick="return confirm('Apakah anda yakin menghapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                    </table>
                    <a href="tambah_kota.php" type="button" class="btn btn" style="background-color: #FF8787;" >Tambah</a>
            </div>
        </div>
    </div>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bun
        dle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>
</html>