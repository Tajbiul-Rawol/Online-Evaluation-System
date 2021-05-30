<?php
if (isset($_COOKIE["usertype"]) && $_COOKIE["usertype"] == "student") {
  include_once "partials/navbar.php";
  include_once "partials/studentSidebar.php";
} else
  header('Location: index.php');
include_once "../controller/viewStudent.php";
include_once "../controller/viewAllQuiz.php";
$quizs = viewAllQuiz();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Students</title>
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
  <div style=" margin-left: 3%; margin-top:5%;">
   <div style="display:flex;">
     <input type="text" name="searchQuiz" onkeyup="show_Quiz(this.value)" id="search_text" placeholder="search quiz" class="form-control" style="width:80%; left:30px">
      &nbsp; &nbsp; &nbsp;<button href="" id="allquiz" class="btn btn-primary" >View All Quiz</button>
  </div>
   <br>
   
    <br>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Quiz Name</th>
          <th>Type</th>
          <th>Time</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="result">
      </tbody>
    </table>
  </div>

  <script src="../script/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>