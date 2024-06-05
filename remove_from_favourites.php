<?php
    require_once 'auth.php';
    if (!$userid = checkAuth()) {
        header("Location: setLoginFlag.php");
        exit;
    }

    if(isset($_GET["product_id"])){
        $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
        $userid = mysqli_real_escape_string($conn, $userid);
        $productid = mysqli_real_escape_string($conn, $_GET["product_id"]);
        $query = "DELETE FROM favourites WHERE product_id = '$productid' AND user_id = '$userid'";
        $res_1 = mysqli_query($conn, $query);
        mysqli_close($conn);   
    }
?>