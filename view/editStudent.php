<?php
session_start();
if (isset($_COOKIE["usertype"]) && $_COOKIE["usertype"] == "admin") {
  include_once "partials/navbar.php";
  include_once "partials/adminSidebar.php";
} else if (isset($_COOKIE["usertype"]) && $_COOKIE["usertype"] == "teacher") {
  include_once "partials/navbar.php";
  include_once "partials/teacherSidebar.php";
} else if (isset($_COOKIE["usertype"]) && $_COOKIE["usertype"] == "student") {
  include_once "partials/navbar.php";
  include_once "partials/studentSidebar.php";
} else
  header('Location: index.php');
include_once "../controller/updateStudent.php";
include_once "../controller/viewStudent.php";
if (isset($_GET["oid"]))
  $data = viewStudent($_GET["oid"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title> Update <?php echo $data['name'] ?> Info</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="../script//dropdown.js"></script>
  <link rel="stylesheet" href="../style/style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form">
  <div class="container-fluid add-frm">
    <hr>
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <sup style="color: red;">*</sup>
      <input class="form-control" type="text" name="name" value="<?php if (isset($data)) echo $data['name'] ?>">
      <span style="color:orangered"><?php echo $nameErr; ?></span>
    </div>

    <div class="mb-3">
      <label for="inputPassword1" class="visually-hidden">Password</label>
      <sup style="color: red;">*</sup>
      <input name="password" type="password" class="form-control" id="inputPassword1" placeholder="Password" value="<?php if (isset($data)) echo $data['password'] ?>">
      <span style="color:orangered"><?php echo $passErr; ?></span>
    </div>

    <div class="mb-3">
      <label for="inputPassword2" class="visually-hidden">Password</label>
      <sup style="color: red;">*</sup>
      <input name="re-password" type="password" class="form-control" id="inputPassword2" placeholder="Password" value="<?php if (isset($data)) echo $data['password'] ?>">
      <span style="color:orangered"><span style="color:orangered"><?php echo $rePassErr; ?></span>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <sup style="color: red;">*</sup>
      <input name="email" type=" email" class="form-control" id="email" placeholder="name@example.com" value="<?php if (isset($data)) echo $data['email'] ?>">
      <span style=" color:orangered"><?php echo $emailErr; ?></span>
    </div>

    <div class="mb-3">
      <label for="oid" class="form-label">Organizational Id Number</label><sup style="color: red;">*</sup>
      <input class="form-control" type="text" name="oid" value="<?php if (isset($data)) echo $data['oid'] ?>" readonly>
      <span style=" color:orangered"><?php echo $oidErr; ?></span>
    </div>
    Gender
    <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female" <?php if (isset($data)) if ($data['gender'] == "female") echo "checked" ?>> Female
    <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male" <?php if (isset($data)) if ($data['gender'] == "male") echo "checked" ?>> Male
    <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="other" <?php if (isset($data)) if ($data['gender'] == "other") echo "checked" ?>> Other
    <span style="color:orangered"><?php echo $genderErr; ?></span>
    <br><br>

    Date <input type="date" name="dob" value="<?php if (isset($data)) echo $data['dob'] ?>">
    <span style="color:orangered"> <?php echo $dobErr; ?></span><br>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</body>

</html>