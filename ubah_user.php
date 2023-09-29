<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
    crossorigin="anonymous">
<title>Ubah User</title>
</head>

<body>
<?php
    include "../config/koneksi.php";
    $qry_get_user=mysqli_query($conn,"select * from user where id_user = '".$_GET['id_user']."'");
    $dt_user=mysqli_fetch_array($qry_get_user);
?>
<br></br>
    <div class="container ">
        <div class="card">
            <h1 class="card-header" style="background-color: #FF8787;">Ubah User</h1>
                <div class="card-body  rounded bg-warning">
                <form action="proses_ubah_user.php" method="post">
                    <input type="hidden" name="id_user" value="<?=$dt_user['id_user']?>">
                       <b> Nama User : </b>
                    <input type="text" name="nama_user" value="<?=$dt_user['nama_user']?>" class="form-control">
                        <b>Tanggal Lahir :</b>
                    <input type="date" name="tanggal_lahir"value="<?=$dt_user['tanggal_lahir']?>" class="form-control">
                        <b>Gender :</b>
                        <?php
                            $arr_gender=array('L'=>'Laki-laki','P'=>'Perempuan');
                        ?>
                        <select name="gender" class="form-control">
                            <option></option>
                            <?php foreach ($arr_gender as $key_gender => $val_gender):
                                if($key_gender==$dt_user['gender']){
                                    $selek="selected";
                                } else {
                                    $selek="";
                                }
                            ?>
                            <option value="<?=$key_gender?>"<?=$selek?>><?=$val_gender?></option>
                            <?php endforeach ?>
                        </select>
                        <b>Alamat :</b>
                    <textarea name="alamat" class="form-control" rows="4"><?=$dt_user['alamat']?></textarea>
                        <b>Telepon :</b>
                    <textarea name="telepon" class="form-control" rows="4"><?=$dt_user['telepon']?></textarea>
                        <b>kota :</b>
                    <select name="id_kota" class="form-control">
                    <option></option>
                        <?php
                            include "../config/koneksi.php";
                            $qry_kota=mysqli_query($conn,"select * from kota");
                                while($data_kota=mysqli_fetch_array($qry_kota)){
                                    if($data_kota['id_kota']==$dt_user['id_kota']){
                                        $selek="selected";
                                    } else {
                                        $selek="";
                                    }
                                echo '<option value="'.$data_kota['id_kota'].'"
                                '.$selek.'>'.$data_kota['nama_kota'].'</option>';

                                }
                        ?>
                    </select>
                        <b>Username :</b>
                    <input type="text" name="username"value="<?=$dt_user['username']?>" class="form-control">
                        <b>Password :</b>
                    <input type="password" name="password" value=""class="form-control"><br>
                    <input type="submit" name="simpan" value="Ubah user"class="btn btn" style="background-color: #FF8787;"><br>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>

</body>
</html>