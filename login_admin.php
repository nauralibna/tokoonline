<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
    crossorigin="anonymous">
   
</head>
<body>

<div class="row " style="margin-top:200px; padding:10px" >
    <div class="col-md"></div>
    <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px-4px; padding:10px">
        <form action="proses_login_admin.php" method="post">
          <h2 align="center">LOGIN ADMIN TOKO ONLINE</h2>
          <h5>Email:</h5>
          <input type="text" name="email" value="" class="form-control">
          <h5>password:</h5>
        <input type="password" name="password" class="form-control"><br>
        <center><input type="submit" name="login" class="btn btn-warning"
        value="LOGIN"></center>
        </form>
    </div>
    <div class="col-md"></div>
    </div>

     <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous">
    </script>

</body>
</html>