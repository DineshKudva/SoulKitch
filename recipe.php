<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>
<?php
  include 'header.php';
?>

    <div class="rec-background">
       <div class="rec-search-head">
          <h1 style>Take a peek into the minds of your fellow sous chefs</h1>
          <h2>You might just find yourself your next favourite dish to cook!</h2>
       </div>
            <div class="user-rec-search">
                <form action="recipe.php" method="post">
                    <input type="text" name="recipe" id="recipe">
                    <input type="submit" class="search-sub" value="Search">
                </form>
            </div>

            <?php
                    if($_SERVER["REQUEST_METHOD"]=="POST"){
                        include 'db.php';
                        
                        $dish=$_POST['recipe'];
                        
                        if($dish!=""){
                        
                                $query="select * from recipes where title like '%$dish%';";
                                $result=mysqli_query($link,$query);

                                while($row=mysqli_fetch_array($result))
                                {
                                        $gb=$row['username'];
                                        $title=$row['title'];
                                        $ing=$row['ingredients'];
                                        $rec=$row['recipe'];
                                        $vidlink=$row['vidlink'];

                                        echo '<div class="user-rec-result" >
                                        <h1>'.$title.'</h1>
                                        <h2>Contributed by:</h2>
                                        <h3>'.$gb.'</h3>
                                        <h2>Ingredients needed:</h2>
                                        <h3>'.$ing.'</h3>
                                        <h2>Instructions:<h2>
                                        <h3>'.$rec.'</h3>
                                        <a href="'.$vidlink.'" target="blank">Video reference</a>
                                        </div>';
                                }
                        }    
                }
            ?>
        <footer>
            <p class="footer_text">Copyright &copy; Soul Kitch 2021</p>
        </footer>        
    </div>
    
    <script>
        if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
        }
    </script>
</body>
</html>