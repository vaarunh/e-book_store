<?php
  require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home | Book-O-Holic</title>
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">

          <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap Core CSS -->
          <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
          <link href="./css/style.css" type="text/css" rel="stylesheet">
        <!-- jQuery -->
          <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
          <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">

        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->

 
        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>We sell inspirations.</h1>
                            <p>From bestsellers to niche books...</p>
                            <br/>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Buy Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->

            <!--Item categories listing-->
            <br>
            <h1 align="center">Shop by Genres</h1>
            <h4 align="center">Browse through variety of genres such as Fiction, Self help, Children's book, and much more...</h4>
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-3">
                        <a href="products.php#classic" >
                            <div class="thumbnail">
                                <img src="img/1.jpg" alt="">
                                <div class="caption">
                                    <h3>Classic Fiction</h3>
                                    <p>Experience the Joy of Timeless Tales.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="products.php#poetry" >
                            <div class="thumbnail">
                                <img src="img/10.jpg" alt="">
                                <div class="caption">
                                    <h3>Poetry Books</h3>
                                    <p>The Best Poetry Books by Living Writers.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

			<div class="col-sm-3">
                        <a href="products.php#indian" >
                            <div class="thumbnail">
                                <img src="img/11.jpg" alt="">
                                <div class="caption">
                                    <h3>Indian Writing</h3>
                                    <p>Sahitya Akademi Award Winning Books.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="products.php#religious" >
                            <div class="thumbnail">
                                <img src="img/13.jpg" alt="">
                                <div class="caption">
                                    <h3>Religious & Spiritual</h3>
                                    <p>Browse great book offers on Religious & spiritual fiction</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-3">
                        <a href="products.php#fantasy" >
                            <div class="thumbnail">
                                <img src="img/2.jpg" alt="">
                                <div class="caption">
                                    <h3>Fantasy</h3>
                                    <p>Fantasy books that illuminates the mind with childlike wonder.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="products.php#horror" >
                            <div class="thumbnail">
                                <img src="img/3.jpg" alt="">
                                <div class="caption">
                                    <h3>Horror</h3>
                                    <p>The Best Horror Books of All Time.That Are Really Scary</p>
                                </div>
                            </div> 
                        </a>
                    </div>

			<div class="col-sm-3">
                        <a href="products.php#romance" >
                            <div class="thumbnail">
                                <img src="img/4.jpg" alt="">
                                <div class="caption">
                                    <h3>Romance</h3>
                                    <p>Best Romance Novels to Sweep You Off Your Feet.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="products.php#mystry" >
                            <div class="thumbnail">
                                <img src="img/5.jpg" alt="">
                                <div class="caption">
                                    <h3>Mystery</h3>
                                    <p>Thrillers You Must Read!, Best of Little-Known Authors.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <h1 align="center">Students Zone</h1>
            <h4 align="center">Browse School textbooks, Higher education textbooks, Exam Central, and many more...</h4>
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-3">
                        <a href="products.php#school" >
                            <div class="thumbnail">
                                <img src="img/6.jpg" alt="">
                                <div class="caption">
                                    <h3>School Textbooks</h3>
                                    <p>Shop for school books online at best prices in India.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="products.php#higher" >
                            <div class="thumbnail">
                                <img src="img/18.jpg" alt="">
                                <div class="caption">
                                    <h3>Higher Education</h3>
                                    <p>University textbooks in a wide variety of formats.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

			<div class="col-sm-3">
                        <a href="products.php#exam" >
                            <div class="thumbnail">
                                <img src="img/19.jpg" alt="">
                                <div class="caption">
                                    <h3>Exam Central</h3>
                                    <p>Books from a great selection of Government Exams.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="products.php#audio" >
                            <div class="thumbnail">
                                <img src="img/20.jpg" alt="">
                                <div class="caption">
                                    <h3>Audiobooks</h3>
                                    <p>Listen to your favourite books with a click of a button.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <br>
            <h1 align="center">And Many More...</h1>
            <br>
            <br>
            <!--Item categories listing end-->
            <br>
            
            <br>
            <!--Item categories listing end-->
        </div>
	<div>
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
	</div>

    </body>
</html>
