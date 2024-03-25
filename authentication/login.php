
<?php
$showAlert = false;
$showError = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '../req/dbconnect.php';
    $username = $_POST["username"];
    
    $password = $_POST["password"];
    
    $exists=false;
    $sql="SELECT * FROM `users` WHERE username='$username' AND password='$password' ";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_num_rows($result);
    if($row==1){
        print("<script>alert('Login Successful');</script");
        $exists=true;
        header("location: ../index.php"); 
        
    }
    else{
        print("<script>alert('Login Failed');</script");
    }
    
}
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/authentication.css">
</head>
<body>
    <div class="login-container">
        <div class="greeting" >
            Welcome!
        </div>
        <div class="heading" >Login to Wheel-2-Rent</div>
        <form action="login.php" method="post">
            <div class="form-group" >
                <label for="username"><img src="../assets/user.png" alt=""></label>
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="form-group" >
                <label for="password"><img src="../assets/lock.png" alt=""></label>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="links-wrap" >
                <div class="link" >
                    <a href="forgot_password.php">Forgot Password</a>
                </div>
                <div class="link" >
                    <a href="signin.php">Don't have an account?</a>
                </div>
            </div>
            <div class="form-submit" >
                <input type="submit" value="Login">
            </div>
        </form>
    </div>

</body>
</html>
