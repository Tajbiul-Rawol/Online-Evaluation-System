<?php
if (isset($_COOKIE['usertype'])) {
    if ($_COOKIE['usertype'] == 'admin')
        header('Location:adminHome.php');
    else if ($_COOKIE['usertype'] == 'teacher')
        header('Location:teacherHome.php');
    else if ($_COOKIE['usertype'] == 'student')
        header('Location:studentHome.php');
    else
        header('Location:login.php');
} else
    header('Location:login.php');
