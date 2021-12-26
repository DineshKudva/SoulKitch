<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Recipes</title>
    <link rel="stylesheet" href="stylesheets/index_style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="stylesheets/welcome_style.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />

</head>
<body>
    <header>
        <div class="head_background">
            <div class="head_container container-flex">
                <a href="welcome.php">
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
                    <div class="greetings">
                            <h2><a href="profile.php">Hello,<?php echo " ".$_SESSION['username'];?></a></h2>
                    </div>
                    <a href="addrecipe.php">
                        <div class="add-rec">
                            Add +
                        </div>
                    </a>
                    <a href="recipe.php">
                        <div class="user-rec">
                            User Recipes
                        </div>
                    </a>
                    <a href="logout.php">
                        <div class="logout">
                            Logout
                        </div>
                    </a>
                </div>
                
            </div>
        </div>
    </header>