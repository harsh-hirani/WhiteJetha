<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $Fname    = stripslashes($_REQUEST['Fname']);
        $Fname    = mysqli_real_escape_string($con, $Fname);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $token = bin2hex(random_bytes(64));
        date_default_timezone_set('Asia/Kolkata');
        $date = date('d/m/y');
        $query    = "INSERT into `users` (name, uname, ipo, email, fdate,token)
                     VALUES ('$Fname', '$username', '" . md5($password) . "', '$email', '$date', '$token')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            setcookie("user",$username, time() + (84600 * 60),"/");
            $crtDIR = '../uploads/'.$username;
            mkdir($crtDIR);
            echo '<script>location.replace("../index.php")</script>';
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="Fname" placeholder="Full Nname" required />
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress" required >
        <input type="password" class="login-input" name="password" placeholder="Password" required >
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
    </form>
<?php
    }
?>
</body>
</html>
