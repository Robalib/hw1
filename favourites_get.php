<?php
    require_once 'auth.php';
    if (!$userid = checkAuth()) {
        header("Location: setLoginFlag.php");
        exit;
    }

    header('Content-Type: application/json');

    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
    $userid = mysqli_real_escape_string($conn, $userid);
    $favourites = array();
    $query = "SELECT products.* FROM products join favourites on products.id = favourites.product_id
                WHERE favourites.user_id = '$userid'";
    $res = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($res)){
        $favourites[] = $row;
    }
    mysqli_free_result($res);
    mysqli_close($conn);

    echo json_encode($favourites);
?>