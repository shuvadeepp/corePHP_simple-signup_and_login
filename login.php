<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>Log In</h1>
<form method="POST" action="loginInner.php">
    <label>Email :</label>
    <input type="text" name="user_email" placeholder="Enter Email"><br>

    <label>Password :</label>
    <input type="password" name="user_password" placeholder="Enter Password"><br>

    <button type="submit" name="user_submit">Login</button>    
</form>    
</body>
</html>