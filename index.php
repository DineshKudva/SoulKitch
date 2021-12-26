
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="stylesheets/index_style.css?v=<?php echo time(); ?>" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
</head>

<body>
    <!-- page header -->
    <header>
        <div class="head_background">
            <div class="head_container container-flex">
                <a href="">
                    <div class="web_logo container-flex">
                        <div class="logo_image">
                            <img src="images/logo.png" alt="" />
                        </div>
                        <div class="logo_text">
                            <h1>Soul Kitch</h1>
                        </div>
                    </div>
                </a>
                
                <div class="web_nav container-flex">
                    <a href="about.php">
                        <div class="about">About us</div>
                    </a>
                    <a href="login.php">
                        <div class="login">Login</div>
                    </a>
                    <a href="signup.php">
                        <div class="signup">Sign Up</div>
                    </a>
                </div>
                
                
                
            </div>
        </div>
    </header>
    <!-- start of body -->
    <section class="body_head">
        <div class="body_container">
            <div class="body_text">
                <h2>A noob in the kitchen?</h2>
                <h4>
                    Well, join us and learn all there is to know about cooking and be
                    the master of your own kitchen
                </h4>
            </div>
            <div class="body_options">
                <a href="login.php">
                    <div class="get_started">Get Started</div>
                </a>
            </div>
        </div>
    </section>

    <!-- sections -->
    <div class="site_body">
        <section class="site_section">
            <div class="section_container container-flex">
                <div class="section_txt">
                    <h3>Tag Along</h3>
                    <h4>Learn to cook with easy-to-follow and basic recipes</h4>
                </div>
                <div class="section_img">
                    <img src="images/cooking.svg" alt="" />
                </div>
            </div>
        </section>

        <section class="site_section">
            <div class="section_container container-flex">
                <div class="section_img">
                    <img class="img_sec" src="images/community.svg" alt="" />
                </div>
                <div class="section_txt">
                    <h3>"Apes together strong!"</h3>
                    <h4>
                        Join the community and have access to recipes from fellow aspiring
                        chefs
                    </h4>
                </div>
            </div>
        </section>

        <section class="site_section">
            <div class="section_container container-flex">
                <div class="section_txt">
                    <h3>Cake Walk</h3>
                    <h4>
                        Easy to understand instructions that help you prepare your very own
                        meal
                    </h4>
                </div>
                <div class="section_img">
                    <img src="images/instructions.svg" alt="" />
                </div>
            </div>
        </section>



        <section class="site_section">
            <div class="section_container container-flex">
                <div class="section_img">
                    <img class="img_sec" src="images/tutorials.svg" alt="" />
                </div>
                <div class="section_txt">
                    <h3>Watch and Learn</h3>
                    <h4>
                        Finding it difficult to follow the instructions? No problem we have
                        video referrals as well
                    </h4>
                </div>
            </div>
        </section>
    </div>

    <div class="site_section end_back">
        <div class="section_container">
            <div class="body_container">
                <div class="body_options">
                    <h2>So what are you waiting for?</h2>
                    <a href="signup.php">
                        <div class="get_started">Get Started</div>
                    </a>
                </div>
            </div>
        </div>
        <footer>
            <p class="footer_text">Copyright &copy; Soul Kitch 2021</p>
        </footer>
    </div>
    <!-- footer -->
    <!-- <footer>
      <p class="footer_text">Copyright &copy; Soul Kitch 2021</p>
    </footer> -->
    
    

</body>

</html>