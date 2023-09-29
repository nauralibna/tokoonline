<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
    <?php
        include "header_admin.php";
    ?>
    <br></br>
    <div class="container ">
    <div class="card rounded bg-warning">
            <div class="card-header " style="background-color: #FF8787;" >
                <h1>DATA USER</h1>
                <form method="POST" action="tampil_user.php" class="d-flex">
                    <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
            </div>
            <div class="card-body">
            <table class="table rounded  bg-warning">
                <thead>
                    <tr>
                    <th scope="col">ID USER</th>
                    <th scope="col">NAMA USER</th>
                    <th scope="col">TANGGAL LAHIR</th>
                    <th scope="col">GENDER</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">TELEPON</th>
                    <th scope="col">KOTA</th>
                    <th scope="col">USERNAME</th>
                    <th scope="col" colspan="1">AKSI</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include "../config/koneksi.php";
                    if (isset($_POST['cari'])) {
                        $cari = $_POST['cari'];
                        $query_user = mysqli_query($conn, "select * from user s join kota k on s.id_kota = k.id_kota where s.id_user = '$cari' or s.nama_user like '%$cari%' or s.alamat like '%$cari%' or s.username like '%$cari%'");
                    }
                    else{
                        $query_user = mysqli_query($conn, "select * from user s join kota k on s.id_kota = k.id_kota");
                    }
                    while($data_user = mysqli_fetch_array($query_user)){
                ?>
                    <tr>
                        <td><?=$data_user['id_user']?></td>
                        <td><?=$data_user['nama_user']?></td>
                        <td><?=$data_user['tanggal_lahir']?></td>
                        <td><?=$data_user['gender']?></td>
                        <td><?=$data_user['alamat']?></td>
                        <td><?=$data_user['telepon']?></td>
                        <td><?=$data_user['nama_kota']?></td>
                        <td><?=$data_user['username']?></td>
                        <td><a href="ubah_user.php?id_user=<?=$data_user['id_user']?>" class="btn btn-success">Edit</a></td>
                        <td><a href="hapus_user.php?id_user=<?=$data_user['id_user']?>" class="btn btn-danger"
                            onclick="return confirm('Apakah anda yakin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
            <a href="tambah_user.php" type="button" class="btn btn" style="background-color: #FF8787;">Tambah</a>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


</body>
</html>