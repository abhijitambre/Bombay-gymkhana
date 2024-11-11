<?php

// session_start();

// if(empty($_SESSION['userLogin']) || $_SESSION['userLogin'] == ''){
//     header("Location: login.php");
//     die();
// }


$validate = $_COOKIE['validmemcode'];

if ($validate == "" || $validate == null) {
    header("Location: login.php");
        die();
    # code...
}

?>