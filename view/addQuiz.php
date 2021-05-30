<?php
session_start();
if (isset($_COOKIE["usertype"]) && $_COOKIE["usertype"] == "teacher") {
  include_once "../controller/addQuiz.php";
  include_once "partials/navbar.php";
  include_once "partials/teacherSidebar.php";
  include_once "../controller/viewStudent.php";
  $studentData = viewAllStudent();
  include_once "../controller/viewTeacher.php";
  $teacherData = viewAllTeacher();
} else
  header('Location: index.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home | <?php if (isset($_SESSION["name"])) echo $_SESSION["name"] ?></title>
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

<body class="w3-light-grey">
  <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
  <div class="w3-main">
    <header class=" w3-container" style="padding-top:22px">
      <h5><b><i class="fa fa-dashboard"></i>Add QUiz</b></h5>
    </header>


                   <?php 
                         if (isset($mess)) {
                             echo $mess;
                         }
                          getMsg();
                         

                         
                   ?>

<form name="quizForm" method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form" onsubmit="return validateQuizForm()">
  <div class="container-fluid add-frm">
  <div style="color:green" id="success"></div>
    <hr>
    <div class="mb-3">
      <label for="name" class="form-label">Course Name</label>
      <sup style="color: red;">*</sup>
      <input class="form-control" type="text" name="name" >
      <span style="color:orangered"><?php echo $nameErr; ?></span>
      <span style="color:orangered" id="nameErr"></span>
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Course ID</label>
      <sup style="color: red;">*</sup>
      <input class="form-control" type="text" name="courseID" >
      <span style="color:orangered"><?php echo $coursIDErr; ?></span>
      <span style="color:orangered" id="courseIDErr"></span>
    </div>

    <div class="mb-3">
      <label for="inputPassword1" class="visually-hidden">Section</label>
      <sup style="color: red;">*</sup>
      <input name="section" type="text" class="form-control" id="inputPassword1" placeholder="section" >
      <span style="color:orangered"><?php echo $sectionErr; ?></span>
      <span style="color:orangered" id="sectionErr"></span>
    </div>

    <div class="mb-3">
      <label for="inputPassword1" class="visually-hidden">Type</label>
      <sup style="color: red;">*</sup>
      <input name="type" type="text" class="form-control" id="inputPassword1" placeholder="type" >
      <span style="color:orangered"><?php echo $typeErr; ?></span>
      <span style="color:orangered" id="typeErr"></span>
    </div>

    <div class="mb-3">
      <label for="inputPassword1" class="visually-hidden">Time(min)</label>
      <sup style="color: red;">*</sup>
      <input name="time" type="text" class="form-control" id="inputPassword1" placeholder="time" >
      <span style="color:orangered"><?php echo $sectionErr; ?></span>
      <span style="color:orangered" id="timeErr"></span>
    </div>

    <br>
    <button type="submit" name="create" class="btn btn-primary">create</button>
  </div>
</form>


<script src="../script/validation.js"></script>
</body>

</html>