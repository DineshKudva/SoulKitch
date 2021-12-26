<?php
    $login=false;
    $showError=false;
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    
        require('db.php');
        $username=$email=$_POST['username'];
        $password=$_POST['password'];
        
        
        $sql="select * from users where (username='$username' or email='$email' )and password='$password';";

        $result=mysqli_query($link,$sql);

        $num=mysqli_num_rows($result);

        if($num==1){
            $login=true;
            session_start();
            $_SESSION['loggedin']=true;
            $row=mysqli_fetch_array($result);
            $_SESSION['username']=$row['username'];
            header('location: welcome.php');
            }
        
        else{
            $showError="Error! Invalid credentials";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="stylesheets/login_style.css?v=<?php echo time(); ?>" />
    
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
            <form action="login.php" method="post">
                <div class="form_heading">
                    <h2>Login</h2>
                </div>

                <div class="form_input">
                    <input type="text" name="username" placeholder="Username/Email-id" />
                </div>
                <div class="form_input">
                    <input type="password" name="password" id="" placeholder="Password" />
                </div>
                <div class="form_sub"><input type="submit" id="btn" value="Let's go"></div>
                <div class="signup_redirect">
                    <p>
                        Don't have an account? <a href="signup.php">Create account</a>
                    </p>
                </div>
            </form>
        </div>

        <?php
        if($login){
            echo '<div style=" width:40%; 
            margin:auto;
            border: 2px solid green;
            border-radius: 5px;
            background: rgb(132, 238, 132);">
            <h3 style="color: rgb(9, 136, 9); text-align:center;">You are logged in</h3>
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
