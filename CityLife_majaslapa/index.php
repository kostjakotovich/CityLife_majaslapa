<?php
  session_start(); //Start the session.
  require_once 'connection.php'; //Require connection file to connect to database.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CityLife Simulator</title>
    <link rel="stylesheet" href="css/index2.css" />
</head>
<body>
    <div id="main-bar">
        <div id="topNavigation">
            <a class="citylife2" href="#gif-cont" >
            <?php echo "niggas" ?></a>
            <a href="#panels" class="citylife">About us</a>
            <a href='#panel3' class="citylife" id="LatestReleases">Latest releases</a>
            <a href='#gif-cont' class="citylife" id="AboutTheGame">About the game</a>
            <a href="#" class="logreg" id="registracija">Registration</a>
            <a href="#" class="logreg" id="login" onclick="openForm()">Login</a>
            <a href="pic1.jpeg" download class="download" id="buttonDownload">Download</a>
        </div>

        <div id="gif-cont">
            <div id="gif-border">
                <img id="gif" src="gif/video-game-pixel-art.gif"> 
                <div id="about_the_game">
                    <h2>About the game</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.</p>
                </div> 
            </div>

            
            
        </div>

        <div id="images">
            <div id="images-inside">
                    <img class="image" src="img/gsgsgs.jpg">
                    <img class="image" src="img/game_image.jpg">
            </div>
                
        </div>
        <div id="panels">
            
            
            <div id="panel2">
                <h2 style="margin-left: 20%;">About us</h2>
                <div id="inside-panel2">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium optio libero reprehenderit dolor tenetur iste vel nulla totam, accusamus corrupti, repellendus consectetur error laboriosam! Dolor delectus doloremque quasi earum cum. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem dolores magni fugiat earum, aliquam veniam! Itaque temporibus vel porro soluta consequuntur, facilis omnis cupiditate voluptatem dolore quisquam sunt dicta tenetur. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis perspiciatis mollitia, sed nesciunt asperiores impedit numquam error illum! Deleniti mollitia est nisi assumenda temporibus possimus nemo totam animi modi consequatur.</p>
                </div>
            </div>
            
        </div>

        <div id="panel3">
            <h2 id="p3h2" style="margin-left: 20%; color: aliceblue;">Latest Releases</h2>
            <div id="inside-panel3">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.

                </p>
            </div>
        </div>

    <!-- POP-UP FORM -->
    <form class="form-container" id="myForm">
        <h1>Login</h1>

        <div class="container">
            <div class="screen">
                <div class="screen__content">
                    <form class="login">
                        <div class="login__field">
                            <i class="login__icon fas fa-user"></i>
                            <input type="text" class="login__input" placeholder="User name / Email">
                        </div>
                        <div class="login__field">
                            <i class="login__icon fas fa-lock"></i>
                            <input type="password" class="login__input" placeholder="Password">
                        </div>
                        <button class="button login__submit">
                            <span class="button__text">Log In Now</span>
                            <i class="button__icon fas fa-chevron-right"></i>
                        </button>				
                    </form>
                    <div class="social-login">
                        <h3>log in via</h3>
                        <div class="social-icons">
                            <a href="#" class="social-login__icon fab fa-instagram"></a>
                            <a href="#" class="social-login__icon fab fa-facebook"></a>
                            <a href="#" class="social-login__icon fab fa-twitter"></a>
                        </div>
                    </div>
                </div>
                <div class="screen__background">
                    <span class="screen__background__shape screen__background__shape4"></span>
                    <span class="screen__background__shape screen__background__shape3"></span>		
                    <span class="screen__background__shape screen__background__shape2"></span>
                    <span class="screen__background__shape screen__background__shape1"></span>
                </div>		
            </div>
        </div>
    

    </form>
    <!-- POP-UP FORM -->

    <script src="js/script.js"></script>

    </div>
</body>
</html>