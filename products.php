<?php
    require_once 'dbconfig.php';

    header('Content-Type: application/json');

    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);

    $prodotti = array();
    $res = mysqli_query($conn, "SELECT * FROM products");
    while($row = mysqli_fetch_assoc($res)){
        $prodotti[] = $row;
    }
    mysqli_free_result($res);
    mysqli_close($conn);

    echo json_encode($prodotti);
?>