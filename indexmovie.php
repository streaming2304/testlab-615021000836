<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require_once("dbmovie.php");
    session_start();
    if(isset($_POST['login'])) {
        $sql = "SELECT * FROM movie64 WHERE p_movie = '{$_POST['p_movie']}' AND pin = '{$_POST['pin']}'";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION["p_movie"] = $row['p_movie'];
        } else {
            echo "<p>รหัสผิด</p>";
        }
    }
    if(isset($_POST['logout'])) {
        session_unset();
    }
    if(isset($_SESSION['p_movie'])) {
        require_once("table10.php");
    } else {
        require_once("login.php");
    }
    ?>
     
     
    </body>
     
    </html>
?>
</body>
</html>