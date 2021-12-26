<?php
$showAlert=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
  
  require('db.php');
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];
   
  $exists=false;
  
  $existCheck1="select * from users where username='$username';";
  $result1=mysqli_query($link,$existCheck1);
  $existCheck2="select * from users where email='$email';";
  $result2=mysqli_query($link,$existCheck2);
  if(mysqli_num_rows($result1)>0){
      $exists=true;
      $showError="Error! Username already registered. Try another one";
  }
  else if(mysqli_num_rows($result2)>0){
      $exists=true;
      $showError="Error! Email-id already registered. Try another one";
  }
  else{
        if(($password==$cpassword)){
            $sql="INSERT INTO users(username,email,password,dt) VALUES('$username','$email','$password',current_timestamp());";
            $result=mysqli_query($link,$sql);

            if($result){
                $showAlert=true;
            }
        }
        else{
            $showError="Error! Passwords do not match";
        }
    }
   
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="stylesheets/signup_style.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    
    
</head>

<body>

    
    <section>
        <div class="heading">
            <a href="index.php">
                <div class="web_logo container-flex">
                    <div class="logo_image">
                        <img src="images/logo.png" alt="" />
                    </div>
                    <div class="logo_text">
                        <h1>Soul Kitch</h1>
                    </div>
                </div>
            </a>
        </div>

        <div class="user_det">
            <form action="signup.php" method="post">
                <div class="form_heading">
                    <h2>Sign Up</h2>
                </div>
                <div class="form_input"><input type="text" name="username" placeholder="Username"></div>

                <div class="form_input"><input type="text" name="email" placeholder="Email id"></div>

                <div class="form_input"><input type="password" name="password" placeholder="Password"></div>

                <div class="form_input"><input type="password" name="cpassword" placeholder="Re-enter password to confirm"></div>

                <div class="form_sub"><input type="submit" id="btn" value="Let's go"></div>
                <div class="login_redirect">
                    <p>Already have an account? <a href="login.php">Login</a></p>
                </div>
            </form>
        </div>

        <?php
        if($showAlert){
            echo '<div style=" width:40%; 
            margin:auto;
            border: 2px solid green;
            border-radius: 5px;
            background: rgb(132, 238, 132);">
            <h3 style="color: rgb(9, 136, 9); text-align:center;">You have successfully signed up<br>Select "Login" to continue</h3>
            </div>';

        }

        if($showError){
        echo '<div style="width:40%; 
        margin:auto;
        border: 2px solid red;
        border-radius: 5px;
        background: #f08282;">
            <h3 style="color: rgb(189, 3, 3); text-align:center">'.$showError.'</h3>
        </div>';
        }
       ?>
        
        
        <footer>
            <p class="footer_text">Copyright &copy; Soul Kitch 2021</p>
        </footer>

    </section>
    
   
   
</body>

</html>

