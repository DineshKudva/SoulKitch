<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

include 'db.php';


$user=$_SESSION['username'];

if($_SERVER["REQUEST_METHOD"]=="POST"){
      
    $email=$_POST['email'];
    $age=$_POST['age'];
    $role=$_POST['role'];
    
    $query="update users set email='$email', age=$age, role='$role' where username='$user' ";

    mysqli_query($link,$query);

}


$result=mysqli_query($link,"select * from users where username='$user';");
$row=mysqli_fetch_array($result);

$email=$row['email'];
if($row['age']==0){
    $age="not set ..";
}else{
    $age=$row['age'];
}
if($row['role']==""){
    $role="not set ..";
}else{
    $role=$row['role'];
}
   
  include 'header.php'


?>
<link rel="stylesheet" href="stylesheets/profile_style.css?v=<?php echo time(); ?>">

        <section class="profile-back">
            <div class="profile-cont">
                
                <div class="user_det">
                    <form action="profile.php" method="post">
                        <div class="form_heading">
                            <h2>Profile</h2>
                        </div>
                        <h3>Username</h3>
                        <div class="form_input">
                            <input type="text" readonly name="username" value='<?php echo $user ?>'></div>
                        <h3>Email-id</h3>    
                        <div class="form_input"><input type="text" name="email" value='<?php echo $email ?>'></div>
                        <h3>Age</h3>
                        <div class="form_input"><input type="text" name="age" value='<?php echo $age ?>'></div>
                        <h3>Role</h3>
                        <div class="form_input"><input type="text" name="role" value='<?php echo $role ?>'></div>
                        <div class="form_sub"><input type="submit" id="btn" value="Update"></div>
                        
                    </form>
                </div>
            </div>
            <footer>
                <p class="footer_text">Copyright &copy; Soul Kitch 2021</p>
            </footer>
        </section>

        
</body>
</html>     