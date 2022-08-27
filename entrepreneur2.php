<?php
session_start();
// echo strlen($_SESSION['email']);
if (strlen($_SESSION['email']) == 0) {
    header('location:homepage.html');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entrepreneur Form</title>

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
                <form method="POST" action="index_2.php" class="signup-form">
                    <h2 class="form-title">Entrepreneur</h2>
                    <label><input type="text" name="companyname" placeholder="Company Name" required /></label>
                    <br><br>
                    <label for="dob"></label>
                    <input type="date" id="dob" name="dob" required>
                    <br><br>
                    <label>
                        Is your Startup verified by the Government of India?
                    </label><br><br>
                    <input type="radio" id="startup" name="verified" value="yes" /> Yes
                    <input type="radio" id="startup" name="verified" value="no" /> No
                    <br><br>
                    <label><input type="text" name="productname" placeholder="Product Name" required /></label>
                    <br><br>
                    <div class="desc">
                        <textarea name="bio" rows="5" cols="50" placeholder="Write about your Product" required></textarea>
                    </div>
                    <br>
                    <label></label>
                    <input type="tel" id="phone" name="phone" placeholder=" Contact number" pattern="[0-9]{5} [0-9]{5}" required>
                    <br><br>
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
                    </div>
                    <div class="form-textbox">
                        <input type="submit" name="save" id="submit" class="submit" value="Save" />
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