<?php 
    define('__CONFIG__', true);
    require_once "inc/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log-In System | ProDev-Theron</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="loginSection">   
        <h1>Register</h1>
        <form class="form" method="post"> 
            <!-- Email -->
            <div class="input-group">
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" placeholder="Enter Your Email" required="">
            </div>
            <!-- Password -->
            <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter Your Password" required="">
            </div>
            <!-- Button -->
            <div class="loginbtn">
            <button type="submit">Register</button>
            </div>
        </form>
    </div> 
    <!-- Footer -->
    <?php include "inc/footer.php";?>
</body>
</html>