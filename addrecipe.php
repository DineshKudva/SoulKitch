<?php
session_start();
$showAlert=false;
$showError=false;
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    require 'db.php';
            
    $username=$_SESSION['username'];
    $title=$_POST['title'];
    $ing=$_POST['ing'];
    $recipe=$_POST['recipe'];
    $vidlink=$_POST['vidlink'];

     $sql="insert into recipes values('$username','$title','$ing','$recipe','$vidlink')";
    $result=mysqli_query($link,$sql);

    if($result){
        $showAlert=true;
    }
    else{
    $showError="Error! Could not add recipe..";
    }       
}
   
include 'header.php'

?>
  <div class="add-rec-con">
      <div class="add-rec-head">
          <h1 style>Have something to share? Something that you think might change the game?</h1>
          <h2>Go ahead! Add it to our archives</h2>
      </div>
   <div class="add-rec-form">
        <form action="addrecipe.php" method="post">
                <h1 style="text-align:center;">User Recipe</h1>
                <div><h2>Add Title:</h2>
                    <input type="text" name="title" id="" placeholder="Pasta,burger etc..">
                </div>
                <div><h2>Ingredients required:</h2>
                <textarea name="ing" id="" cols="30" rows="8"></textarea>
                </div>
                <div><h2>Step-wise recipe:</h2>
                <textarea name="recipe" id="" cols="50" rows="20"></textarea>
                </div>
                <div><h2>Reference video link (if any):</h2>
                    <input type="url" name="vidlink" id="">
                </div>

                <div>
                    <input class="add-rec-sbt" type="submit" value="Add Recipe">
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
            <h3 style="color: rgb(9, 136, 9); text-align:center;">Congratulations!<br> Your recipe was successfully added</h3>
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
 </div>
</body>
</html>