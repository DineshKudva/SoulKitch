<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
   
  include 'header.php'

?>


    <div class="main-body">
        <div class="recipe_container">
            <div class="search-container">
                <h1 class="recipe-header">Wondering how that dish came to fruition?</h1>
                <h2 class="recipe-sub-head">Well it's just a search away....</h2>
                <input id="food_name" class="search-inp" type="text" value="">
                <button type="submit" class="search-btn" id="btn">Submit</button>
                
                <h1 class="error-msg" id="err"></h1>
            </div>
            <div class="search-result container-flex" id="search-result">
                <div class="food-info">
                    <h1 class="rec-head" id="recipe-head"></h1>
                    <h2 class="rec-area" id="rarea"></h2>
                    <h3 class="rec-cat" id="rcat"></h3>
                    <h4 class="rec-ing" id="ring"></h4>
                    <h4 class="rec-mes" id="rmes"></h4>
                    <p class="rec-inst" id="recipe_inst"></p>
                    <a href="" target="blank" class="rvidlink" id="rec-vid-link">Video Reference</a>
                    <a href="" target="blank" class="rreflink" id="rec-ref-link">Textual reference</a>
                </div>
                <div class="food-img">
                    <img src="" alt="food-img" class="rec-img" id="rec-img" srcset="">
                </div>
            </div>
        </div>
        
        
        <footer>
                <p class="footer_text">Copyright &copy; Soul Kitch 2021</p>
        </footer>
    </div>

    <script src="test.js?v=<?php echo time(); ?>"></script>
    
  </body>
</html>