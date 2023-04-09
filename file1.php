<?php
require_once('connection.php');
    //https://www.youtube.com/watch?v=2HVKizgcfjo
    if(isset($_POST['submit'])){
    echo $name=$_POST['name'];
    $email=$_POST['email'];
    $phoneno=$_POST['phoneno'];
    $password=$_POST['password'];
    //$conn = mysqli_connect($servername, $username, $password, $dbname);
   
        $insert="INSERT INTO `users`(`id`, `name`, `email`, `phoneno`, `password`, `date`) VALUES ('','$name','$email','$phoneno','$password',now())";
        $result= mysqli_query($conn,$insert);
        if($result==1)
        {
            header("location:login.php");
        }
    
}
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form </title>
    <script defer src="validate.js"></script>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form  method="post" onsubmit="return validate()">
                        <!--heading-->
                        <h2 class="form-title">Create account</h2>
                        
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
                        </div>
                        
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-input" name="phoneno" id="phoneno" placeholder="Phone Number"/>
                        </div>
                        
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                        </div>
                        
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="#" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>
    
</body>
</html>