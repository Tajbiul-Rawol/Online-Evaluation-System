<?php
if (isset($_COOKIE['usertype'])) {
    setcookie("usertype", null, time() - (5 * 3600), '/');
    session_unset();
    session_destroy();
}
header('Location: ../view/index.php');
