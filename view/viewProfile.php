<?php
session_start();
if (isset($_COOKIE["usertype"]) && $_COOKIE["usertype"] == "student") {
  include_once "partials/navbar.php";
  include_once "partials/studentSidebar.php";
} else
  header('Location: index.php');

  include_once "../controller/viewStudent.php";
  if (isset($_GET["oid"])) {
    $data = viewStudent($_GET["oid"]);
  }
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
        <h2>Information</h2>
        <div class="card">
            <div class="card-body">
                <a class="btn btn-primary btn-left" href="editStudent.php?oid=<?php echo $data['oid'] ?>">Edit</a> <a class="btn btn-danger btn-left" href="../controller/deleteStudent.php?o-id=<?php echo $data['oid'] ?>">Delete</a></td>

                <table>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td><?php echo $data['name'] ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?php echo $data['email'] ?></td>
                        </tr>
                        <tr>
                            <td>Organizational Id</td>
                            <td>:</td>
                            <td><?php echo $data['oid'] ?></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>:</td>
                            <td><?php echo $data['gender'] ?></td>
                        </tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td>:</td>
                            <td><?php echo $data['dob'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
  </div>
</body>

</html>