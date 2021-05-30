<?php
require_once '../model/model.php';
if (deleteStudent($_GET['o-id'])) {
    header('Location: ../view/viewAllStudents.php');
    echo "Student deleted";
} else {
    echo 'error';
}
