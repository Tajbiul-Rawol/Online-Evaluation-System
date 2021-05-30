<?php
require_once '../model/model.php';
require_once 'viewStudent.php';
require_once 'viewTeacher.php';

session_start();
$oidErr = $passErr = $oid = $password =  $wrong = "";
$flag = false;
$remeber = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["oid"])) {
        $oidErr = "Id is required";
        $flag = false;
    } else {
        $oid = test_input($_POST["oid"]);
        $flag = true;
    }

    if (empty($_POST["password"])) {
        $passErr = "Password is required";
        $flag = false;
    } else {
        $password = test_input($_POST["password"]);
        $flag = true;
    }
    if (!empty($_POST["remember"])) {
        $remeber = true;
        $flag = true;
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if ($flag == true) {
    if (checkStudent($oid) == 1) {
        $student = viewStudent($_POST['oid']);
        if (password_verify(test_input($_POST["password"]), $student['password'])) {
            if ($remeber == true) {
                setcookie("usertype", "student", time() + 5 * 36000, '/');
            } else
                setcookie("usertype", "student", time() + 3600, '/');
            $_SESSION["name"] = $student["name"];
            $_SESSION["oid"] = $student["oid"];
            header('Location: ../view/index.php');
        } else
            $wrong = "The id or password is incrroect";
    }
    if (checkTeacher($oid) == 1) {
        $teacher = viewTeacher($_POST['oid']);
        if (password_verify(test_input($_POST["password"]),$teacher['password'])) {
            if ($remeber == true) {
                setcookie("usertype", "teacher", time() + 5 * 36000, '/');
            }else {
                setcookie("usertype", "teacher", time() + 3600, '/');
            }
            $_SESSION["name"] = $teacher["name"];
            $_SESSION["oid"] = $teacher["oid"];
            header('location:../view/index.php');
        }
    }
    if (checkAdmin($oid) == 1) {
        $admin = viewAdmin($_POST['oid']);
        if (password_verify(test_input($_POST["password"]),$admin['password'])) {
            if ($remeber == true) {
                setcookie("usertype", "admin", time() + 5 * 36000, '/');
            }else {
                setcookie("usertype", "admin", time() + 3600, '/');
            }
            $_SESSION["name"] = $admin["name"];
            $_SESSION["oid"] = $admin["oid"];
            header('location:../view/index.php');
        }
    }else
        $wrong = "The id or password is incrroect";
}
