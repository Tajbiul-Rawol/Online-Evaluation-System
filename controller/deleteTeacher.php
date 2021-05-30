<?php
require_once '../model/model.php';
if (deleteTeacher($_GET['o-id'])) {
    header('Location: ../view/viewAllTeachers.php');
    echo "Teacher deleted";
} else {
    echo 'error';
}
