<?php
    include("connectdb.php");
    if($_POST){
    $adminuser = $_POST["username"];
    $password=$_POST["password"];

    $checkthedb = $connect->query("SELECT * FROM adminuser WHERE (adminusername='$adminuser'&&
     adminpassword='$password') ");

    $numberofregister = $checkthedb->num_rows;

    if($numberofregister>0){
        $_SESSION["signin"] = "ok";
        echo "<script> window.location.href='mainpage.php'; </script>";


    }else{
        echo "
        <script>
        alert('there is an error about admin user infos'); window.location.href='index.php';
        </script>";
    }

    }
?>

<!DOCTYPE html>
<HTMl>
    <HEad>
        <meta charset="utf-8">
        <title>Admin Sign In</title>
    </HEad>
    <body style="text-align: center; padding-left: 40;">

    <form action="" method="post">
        <b>User Name</b><br>
        <input type="text" name="username" required> <br>
        <b>Password</b> <br>
        <input type="password" name="password" required> <br>
        <input type="submit" value="signin">
    </form>
        
    </body>
</HTMl>