<?php 
    include "header_admin.php";
?>
<br></br>
    <div class="container ">
        <div class="card rounded bg-warning">
        <h1 class="card-header" style="background-color: #FF8787;">Tambah Tas</h1>
             <div class="card-body">
                <form method="POST" action="proses_simpan_tas.php" enctype="multipart/form-data" >
                    <div class="mb-3">
                        <label for="jenis_tas" class="form-label"><b>Nama Tas</b></label>
                        <input type="text" class="form-control" name="jenis_tas"
                        placeholder="Masukkan Jenis Tas" required>
                    </div>

                    <div class="mb-3">
                        <label for="merk_tas" class="form-label"><b>Merk</b></label>
                        <input type="text" class="form-control" name="merk_tas"
                        placeholder="Masukkan Merk" required>
                    </div>

                    <div class="mb-3">
                        <label for="harga_tas" class="form-label"><b>Harga</b></label>
                        <textarea class="form-control" name="harga_tas" row="3"
                        placeholder="Masukkan Harga" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="foto" class="form-label"><b>Foto</b></label>
                        <input type="file" class="form-control" name="foto" >
                    </div>

                <input type="submit" name="simpan" value="SIMPAN" class="btn btn" style="background-color: #FF8787;" >
                </form>
            </div>
        </div>
    </div>
    
<?php
    include "../user/footer.php";
?> 