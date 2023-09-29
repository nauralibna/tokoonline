<?php 
session_start();
    if($_SESSION['status_login_admin']!=true){
        header('location: login_admin.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"crossorigin="anonymous">
  <title>Home Admin</title>
</head>

<body>
 <nav
  
  class="navbar navbar-expand-lg navbar-light bg-warning"
  style="box-shadow: 4px 4px 5px -4px;">

  <div class="container-fluid">
   <img src="/toko_online_tas/admin/foto_tas/tasnaur.png" width="30" height="30" class="d-inline-block align-top" alt="">
    <a class="navbar-brand" href="#"><b>Baggie</b></a>
    <button class="navbar-toggler" type="button"data-bstoggle="collapse"data-bs-target="#navbarNav"aria-controls="navbarNav"aria-expanded="false"aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="home_admin.php"><b>Home</b></a>
        </li>

        <?php
          if($_SESSION['role']=='admin'){
            ?>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="daftartas.php"><b>Daftar Tas</b></a>
            </li>
            <?php
          }
        ?>

        <?php
          if($_SESSION['role']=='petugas'){
            ?>
              <li class="nav-item">
              <a class="nav-link" aria-current="page" href="transaksi_admin.php"><b>Transaksi</b></a>
              </li>
            <?php
          }
        ?>

        <li class="nav-item">
        <a class="nav-link" aria-current="page" href="tampil_kota.php"><b>Data Kota</b></a>
        </li>

        <li class="nav-item">
        <a class="nav-link" aria-current="page" href="tampil_user.php"><b>Data User</b></a>
        </li>

        <li class="nav-item">
        <a class="nav-link" aria-current="page" href="logout_admin.php"><b>Logout</b></a>
        </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container bg-light rounded" style="margin-top:10px">