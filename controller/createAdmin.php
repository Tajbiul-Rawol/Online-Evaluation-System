<?php
require_once '../model/model.php';
require_once 'viewAdmin.php';
$nameErr = $passErr = $emailErr = $oidErr = $genderErr = $dobErr = $rePassErr = $upErr = "";
$name  = $email =  $password = $gender = $dob = $rePass = $oid = $msg = "";
$flag = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
        $flag = false;
    } else {
        $name = test_input($_POST["name"]);
        $flag = true;
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $flag = false;
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $flag = false;
        }
        $email = test_input($_POST["email"]);
        $flag = true;
    }
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
        $flag = false;
    } else {
        $gender = test_input($_POST["gender"]);
        $flag = true;
    }

    if (empty($_POST["dob"])) {
        $dobErr = "Date is required";
        $flag = false;
    } else {
        $dob = test_input($_POST["dob"]);
        $flag = true;
    }

    if (empty($_POST["password"])) {
        $passErr = "Password is required";
        $flag = false;
    } else {
        $password = test_input($_POST["password"]);
        if (!preg_match("/(?=.*?[#@$%])/", $password)) {
            $passErr = "Password must contain at least one of the special characters (@, #, $,%)";
            $flag = false;
        }
        if (strlen($password) < 8) {
            $passErr = "Password must not be less than eight (8) characters";
            $flag = false;
        }
        $flag = true;
    }

    if (empty($_POST["re-password"])) {
        $rePassErr = "Retype Password";
        $flag = false;
    } else {
        $rePass = test_input($_POST["re-password"]);
        $flag = true;
    }

    if (empty($_POST["oid"])) {
        $oidErr = "Organization id required";
        $flag = false;
    } else {
        $oid = test_input($_POST["re-password"]);
        $flag = true;
    }

    if ($password != $rePass) {
        $rePassErr = "Passwords doesnt not match";
        $flag = false;
    }

    $data['name'] = $_POST['name'];
    $data['email'] = $_POST['email'];
    $data['gender'] = $gender;
    $data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);
    $data['dob'] = $_POST['dob'];
    $data['usertype'] = "admin";
    $data['oid'] = $_POST['oid'];
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($flag == true) {
    if (checkStudent($_POST['oid']) > 0) {
        $oidErr = "Already Registered with this id number";
    } else {
        if (addStudent($data)) {
            $msg = "Admin Added";
        } else {
            $msg = "There was a problem adding admin";
        }
    }
}
