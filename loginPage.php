<?php
    session_start();
    $con = mysqli_connect('localhost','root','','hakethon');
    if(isset($_POST['login'])){
        $result = mysqli_query($con,"SELECT * FROM user WHERE email = '".$_POST['username']."' and password = '".$_POST['pass']."' limit 1");
        $row  = mysqli_fetch_array($result);
        if($result){
            if(mysqli_num_rows($result) >= 1) {
                // $_SESSION["username"] = $row[username];
                // $_SESSION["pass"] = $row[pass];
                $_SESSION['email'] = $_POST['username'];
                header('location:index_2.php');
                exit();
            } else {
                echo "Invalid Username or Password!";
                exit();
            }
        }
       
    }
    // if(isset($_SESSION["id"])) {
    //     header("Location:login.php");
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- <h1>Sign up</h1> -->
        <div class="container">
            <div class="sign-up-content">
                <form method="POST" class="signup-form">
                    <h2>Login   </h2>
                    <div class="form-textbox">
                        <label for="username">User name</label>
                        <input type="text" name="username" id="username" />
                    </div>
                    <br>
                    <div class="form-textbox">
                        <label for="pass">Password</label>
                        <input type="password" name="pass" id="pass" />
                    </div>
                    <br>
                    <br>
                    <div class="form-textbox"><center>
                        <input type ="submit" name="login" value="login" class="submit"></center>
                    </div>
                    <br>
                </form>
            </div>
        </div>

    </div>

    <!-- JS -->
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script> -->
</body>
</html>