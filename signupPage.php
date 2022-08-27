<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

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
                    <h2 class="form-title">Sign-Up</h2>
                    <div class="form-textbox">
                        <label for="username">Full Name</label>
                        <input type="text" name="username" id="username" required />
                    </div>
                    <div class="form-textbox">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required />
                    </div>

                    <div class="form-textbox">
                        <label for="pass">Password</label>
                        <input type="password" name="pass" id="pass" required />
                    </div>
                    <br>
                    <label for="role">Role</label>
                    <select name="role" id="role">
                        <option value="investor">Select your Role</option>
                        <option value="investor">Investor</option>
                        <option value="entrepreneur">Entrepreneur</option>
                    </select>
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
                    </div>
                    <div class="form-textbox">
                        <center>
                            <input type="submit" name="submit" class="submit" value="Sign-Up">
                        </center>
                        <br><br>
                    </div>
                </form>
                <p class="loginhere">
                    Already have an account ?<a href="loginPage.php" class="loginhere-link"> Log in</a>
                </p>
            </div>
        </div>

    </div>
    <!-- JS -->
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script> -->
</body>

</html>