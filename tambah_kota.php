<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kelas</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <?php
        include "header_admin.php";
    ?>
    <br></br>
    <div class="container">
    <div class="card rounded bg-warning">
        <h1 class="card-header" style="background-color: #FF8787;">Tambah Kota</h1>
            <div class="card-body rounded bg-warning">
                <form method="POST" action="proses_tambah_kota.php">
                    <div class="mb-3">
                        <label for="nama_kota" class="form-label"><b>Nama Kota</b></label>
                        <input type="text" class="form-control" name="nama_kota" value="" placeholder="Masukkan Nama kota" required>
                    </div>
                    <div class="mb-3">
                        <label for="provinsi" class="form-label"><b>Provinsi</b></label>
                        <input type="text" class="form-control" name="provinsi" placeholder="Masukkan Provinsi" required>
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