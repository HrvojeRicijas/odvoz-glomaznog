<?php 
    session_start();
    if (isset($_POST['username']) && isset($_POST['password'])){
      
        include 'db/db.php';

        //$pwhash = password_hash($_POST['password'], PASSWORD_BCRYPT);
        
        $sql = "SELECT username, password FROM users WHERE LOWER(username) = LOWER(?)";
        $stmt = mysqli_stmt_init($dbc);

        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, 's', $_POST['username']);
            mysqli_stmt_execute($stmt);      	
            mysqli_stmt_store_result($stmt);
        	$stmt->bind_result($user, $pass);
        	
          
            if(mysqli_stmt_num_rows($stmt) > 0){
            	$stmt->fetch();
            	if (password_verify($_POST['password'], $pass)){

                	$_SESSION['access'] = 1;
                	header ('Location: admin.php');
                }
            }
            
        }
        mysqli_close($dbc);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Šarić Usluge</title>
</head>
<body>
    <header>
        <a href="index.php" style="position: fixed; right: 1rem; top: 1rem;"><button style="background:greenyellow; border-radius: 5px; padding:10px; border-color:green">Početna</button></a>
    </header>

    <?php
        if(isset($_SESSION['access'])){
            if ($_SESSION['access'] == 1){
                //include "meta.php";
                include "components/backend.php";
            }
        } else {
            include "./login/login.php";
        }
    ?>

</body>
</html>
