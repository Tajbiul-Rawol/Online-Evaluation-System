<?php
session_start();
if (isset($_COOKIE["usertype"]) && $_COOKIE["usertype"] == "student" && isset($_GET['id'])) {
  include_once "partials/navbar.php";
  include_once "partials/studentSidebar.php";
  
} else{
    header('Location: index.php');
}
  include_once "../controller/viewAllQuiz.php";

  $questions = fetchAllQuestions($_GET["id"]);
  

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title> Home | <?php if (isset($_SESSION["name"])) echo $_SESSION["name"] ?></title>
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
  <div class="main">
        <h2>Quiz </h2>
        <div class="card">
            <div class="card-body">
        


                 <form name="quizform" id="quiz" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form" >
                
                  
                 <?php foreach ($questions as $i => $question) : ?>
                 <?php 
                    $options = fetchAllOptions($question['ID']);
                 ?>
                    <div class="container-fluid add-frm">
                   
                         <hr>
                         <div class="mb-3">
                             <?php echo $question['ID'];?>
                             <label for="name" class="form-label"><b><?php echo $question['qns'] ?></b></label>
                             <sup style="color: red;">*</sup>
                             <br>
                             <?php foreach ($options as $i => $option) : ?>

                                 <input height="60px" type="radio" name="option<?php $i++?>" id="option" value="<?php  echo $option['ID']?>">&nbsp;<?php  echo $option['option']?>
                                 <span style="color:orangered"></span>
                              <br>
                             <?php endforeach; ?>
                         </div>
    
                         <?php endforeach; ?>
                       <br>
                       <button type="submit" name="submit"  id="btn" class="btn btn-primary">Submit</button>
                       <br>
                       <div id="result" style="color:green;"></div>
                   </div>
               </form>
    
            </div>
        </div>
  </div>


  <script src="../script/validation.js"></script>
</body>

</html>