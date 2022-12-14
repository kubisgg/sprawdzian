<?php

    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'sprawdzian';

    $conn = mysqli_connect($server, $user, $pass, $db);

    $query = mysqli_prepare($conn, "INSERT INTO zanpakuto (imie, wybudzenie, element) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($query, 'ssi', $_POST['imie'], $_POST['wybudzenie'], $_POST['element']);
    mysqli_stmt_execute($query) or die();

    header('Location: index.php');

?>