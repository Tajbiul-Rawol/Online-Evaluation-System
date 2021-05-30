<?php
require_once '../model/model.php';
if (deleteAdmin($_GET['o-id'])) {
    header('Location: ../view/viewAllAdmins.php');
    echo "Admin deleted";
} else {
    echo 'error';
}
