
<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="../style/style.css">
</head>

<body class="body-login">
  <?php include_once "../controller/signin.php" ?>
  <form name="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form-login" onsubmit="return validateForm()">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label"> Organizational id number</label>
      <input name="oid" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <span style="color:orangered"><?php echo $oidErr; ?></span>
      <span style="color:orangered" id="oidErr"></span>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input name="password" type="password" class="form-control" id="exampleInputPassword1">
      <span style="color:orangered"><?php echo $passErr; ?></span>
      <span style="color:orangered" id="passErr"></span>
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
      <label class="form-check-label" for="exampleCheck1">Remember</label>
    </div>
    <div class="mb-3 form-check">
      <span style="color:orangered"><?php echo $wrong; ?></span>
    </div>
    <button type="submit" class="btn btn-primary btn-center">Login</button>
  </form>
  <script src="../script//validation.js"></script>
</body>

</html>