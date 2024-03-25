
<?php
$showAlert = false;
$showError = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '../req/dbconnect.php';
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["confirm-password"];
    $exists=false;
    $sql="SELECT * FROM `users` WHERE username='$username' OR email='$email' ";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_num_rows($result);
    if($row>0){
        print("<script>alert('Hello! user alredy exist');</script");
        $exists=true;
    }
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `users`( `username`, `email`, `password`) VALUES ('$username','$email','$password')";
        $result = mysqli_query($conn, $sql);
        if ($result){
            header("location: ../index.php"); 
        }
        
    }
    else{
        $showError = "Passwords do not match";
    }
}
    
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/authentication.css">
</head>
<body>
    <div class="login-container">
        <div class="greeting" >
            Welcome!
        </div>
        <div class="heading" >Sign-in to Wheel-2-Rent</div>
        <form action="signin.php" method="post">
            <div class="form-group" >
                <label for="username"><img src="../assets/user.png" alt=""></label>
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="form-group" >
                <label for="email"><img src="../assets/mail1.png" alt=""></label>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group" >
                <label for="password"><img src="../assets/lock.png" alt=""></label>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group" >
                <label for="confirm-password"><img src="../assets/lock.png" alt=""></label>
                <input type="password" name="confirm-password" placeholder="Confirm Password" required>
            </div>
            <div class="links-wrap" >
                <div class="link" >
                </div>
                <div class="link" >
                    <a href="login.html">Already have an account?</a>
                </div>
            </div>
            <div class="form-submit" >
                <input type="submit" value="Sign-In">
            </div>
        </form>
    </div>

</body>
</html>
