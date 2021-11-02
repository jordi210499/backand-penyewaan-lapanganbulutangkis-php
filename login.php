<!DOCTYPE php>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="white-dark" style="background-color: #0cdafa;">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div><img src="../img/logobadminton.png" alt="" style="width: 70%; display: inline-block;"/></div>
      <div class="card-body">
        <form action="cek-login.php" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="username" required="required">
              <label>Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password"  class="form-control"  name="password"  required="required">
              <label >Password</label>
            </div>
          </div>
          <input type="submit" name="login" value="login" class="btn btn-primary btn-block">
        </form>
         </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
