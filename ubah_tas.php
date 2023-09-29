<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Buku</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <?php
        include "header_admin.php";
        include "../config/koneksi.php";
        $query_tas = mysqli_query($conn, "select * from tas where id_tas='".$_GET['id_tas']."'");
        $data_tas = mysqli_fetch_array($query_tas);
    ?>
    <br></br>
    <div class="container ">
        <div class="card ">
            <h1 class="card-header" style="background-color: #FF8787;">Ubah Tas</h1>
            <div class="card-body rounded bg-warning">
                <form method="POST" action="proses_ubah_tas.php" enctype="multipart/form-data">
                    <input type="hidden" name="id_tas" value="<?=$data_tas['id_tas']?>">
                    <div class="mb-3">
                        <label for="jenis_tas" class="form-label"><b>Nama Tas</b></label>
                        <input type="text" class="form-control" name="jenis_tas" value="<?=$data_tas['jenis_tas']?>" placeholder="Masukkan Jenis Tas" required>
                    </div>
                    <div class="mb-3">
                        <label for="merk_tas" class="form-label"><b>Merk</b></label>
                        <input type="text" class="form-control" name="merk_tas" value="<?=$data_tas['merk_tas']?>" placeholder="Masukkan Merk Tas" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga_tas" class="form-label"><b>Harga</b></label>
                        <textarea class="form-control" name="harga_tas" row="3" placeholder="Masukkan Harga" required><?=$data_tas['harga_tas']?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label"><b>Foto</b></label>
                        <!-- <img src="foto/<?=$data_tas['foto']?>" width="100"/> -->
                        <img src= "/toko_online_tas/user/foto_tas/tasnaur.png" width="30" height="30" class="d-inline-block align-top" alt=""><br>
                        <input type="file" class="form-control" name="foto" value="<?=$data_tas['foto']?>">
                    </div>
                    <button type="submit" class="btn btn" style="background-color: #FF8787;">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>