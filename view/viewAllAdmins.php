<?php
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
include_once "../controller/viewAdmin.php";
$students = viewAllAdmin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admins</title>
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
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Date of Birth</th>
          <th>Gender</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php if (isset($admins)) foreach ($admins as $i => $admin) : ?>
          <tr>
            <td><a href="viewAdmin.php?oid=<?php echo $admin['oid'] ?>"><?php echo $admin['oid'] ?></a></td>
            <td><?php if (isset($admin['name'])) echo $admin['name'] ?></td>
            <td><?php if (isset($admin['email'])) echo $admin['email'] ?></td>
            <td><?php if (isset($admin['dob'])) echo $admin['dob'] ?></td>
            <td><?php if (isset($admin['gender'])) echo $admin['gender'] ?></td>
            <td><a class="btn btn-primary" href="editAdmin.php?oid=<?php echo $admin['oid'] ?>">Edit</a>&nbsp<a class="btn btn-danger" href="../controller/deleteAdmin.php?o-id=<?php echo $admin['oid'] ?>">Delete</a></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>