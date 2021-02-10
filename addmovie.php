<?php
    require_once("dbmovie.php");
    $sql = "INSERT INTO movie64 (p_movie, s_movie, bday, user, pin)
    VALUES ('{$_POST['p_movie']}', '{$_POST['s_movie']}', '{$_POST['bday']}', '{$_POST['user']}', '{$_POST['pin']}')";
 
    if ($conn->query($sql) === TRUE) {
        sleep(1);
        header("location:indexmovie.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
 
    $conn->close();
?>