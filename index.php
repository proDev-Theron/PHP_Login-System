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
        <h1>Login Form</h1>
        <form class="form" method="post"> 
            <!-- Email -->
            <div class="input-group">
            <label for="form">Email Address</label>
            <input type="email" name="email" id="email" placeholder="Enter Your Email" required="">
            </div>
            <!-- Password -->
            <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter Your Password" required="">
            </div>
            <!-- Button -->
            <div class="loginbtn">
            <button type="submit">LOGIN</button>
            </div>
        </form>
    </div> 
</body>
</html>