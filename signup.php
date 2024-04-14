<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
</head>
<body>
<h1>Sign Up</h1>
<form method="POST" action="signupInner.php">
    <label>User Name :</label>
    <input type="text" name="client_username" placeholder="Enter Username"><br>

    <label>Email :</label>
    <input type="email" name="client_email" placeholder="Enter Email ID"><br>

    <label>Password :</label>
    <input type="password" name="client_password" placeholder="Enter Password"><br>

    <label>Role</label>
    <input type="text" name="client_role" placeholder="Enter Role"><br>

    <label>Mobile :</label>
    <input type="text" name="client_mobile" placeholder="Enter Mobile No"><br>

    <label>Gender :</label>
    <label>Male :</label>
    <input type="radio" name="client_gender" value="male">

    <label>Female :</label>
    <input type="radio" name="client_gender" value="female"><br>
    
    <button type="submit" name="client_submit">Sign Up</button>
</form>    
</body>
</html>