<?php
include "includes/common.php"
?>
<!DOCTYPE html>

<html>

<head>
    <title>Store | Book-O-Holic</title>
    <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</head>

<body style="padding-top: 50px;">
    <!-- Header file -->
    <?php
    include 'includes/header.php';
    include 'includes/check-if-added.php';
    ?>
    <br>
    <br>

    <div class="container">
        <!-- Jumbotron Header -->
        <div class="jumbotron home-spacer" id="products-jumbotron">
            <center>
                <h1>Book-O-Holic Store! </h1>
                <p>Browse through variety of genres such as Fiction, Self help, Children's book, and much more...</p>
            </center>
        </div>
        <hr>
        <br>

        <div class="row">
            <div class="col-sm-3">
                <div class="panel-group">

                    <div class="panel panel-default">
                        <div class="panel-heading color">
                            <h3 style="color:orange">Genres</h3>
                        </div>
                        <div class="panel-body">
                            <div class="rmvb">
                                <p><a href="#classic"><span style="color:black">Classic Fiction</span></a></p>
                                <p><a href="#poetry"><span style="color:black">Poetry Books</span></a></p>
                                <p><a href="#indian"><span style="color:black">Indian Writing</span></a></p>
                                <p><a href="#religious"><span style="color:black">Religious & Spiritual</span></a></p>
                                <p><a href="#fantasy"><span style="color:black">Fantasy</span></a></p>
                                <p><a href="#horror"><span style="color:black">Horror</span></a></p>
                                <p><a href="#romance"><span style="color:black">Romance</span></a></p>
                                <p><a href="#mystry"><span style="color:black">Mystery</span></a></p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="panel panel-default">
                        <div class="panel-heading color">
                            <h3 style="color:orange">Students Zone</h3>
                        </div>
                        <div class="panel-body">
                            <div class="rmvb">
                                <p><a href="#school"><span style="color:black">School Textbook</span></a></p>
                                <p><a href="#higher"><span style="color:black">Higher Education</span></a></p>
                                <p><a href="#exam"><span style="color:black">Exam Central</span></a></p>
                                <p><a href="#audio"><span style="color:black">Audio Books</span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-sm-9 text-center">
                <div class="panel-group">
                    <!----------------------------------------------------classc-fiction----------------------------------->
                    <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 style="color:black">Classic Fiction Books</h3>
                        </div>

                        <div class="panel-body">
                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="img/1984.jpg" alt="Othello">
                                    <div class="caption">
                                        <h3>1984</h3>
                                        <p>By George Orwell</p>
                                        <p>Price: ₹360.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                            ?>
                                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="./img/time.jpg" alt="">
                                    <div class="caption">
                                        <h3>The Time Machine</h3>
                                        <p>By H. G. Wells</p>
                                        <p>Price: ₹350.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            if (check_if_added_to_cart(2)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {  ?> <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php    }
                                        }    ?>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="img/gatsby.jpg" alt="">
                                    <div class="caption">
                                        <h3>The Great Gatsby</h3>
                                        <p>By F. Scott Fitzgerald </p>
                                        <p>Price: ₹400.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                            ?>
                                                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="panel-body">

                                <div class="col-sm-4 home-feature">
                                    <div class="thumbnail">
                                        <img src="img/heart.jpg" alt="">
                                        <div class="caption">
                                            <h4>Heart of Darkness</h4>
                                            <p>By Joseph Conrad</p>
                                            <p>Price: ₹560.00 </p>
                                            <?php if (!isset($_SESSION['email'])) { ?>
                                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                                //We have created a function to check whether this particular product is added to cart or not.
                                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                                } else {
                                                ?>
                                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 home-feature">
                                    <div class="thumbnail">
                                        <img src="./img/daddy.jpg" alt="">
                                        <div class="caption">
                                            <h4>The Secret Garden</h4>
                                            <p>By F H Burnett  </p>
                                            <p>Price: ₹650.00</p>
                                            <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                                if (check_if_added_to_cart(5)) {
                                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                                } else {  ?> <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php    }
                                            }    ?>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 home-feature">
                                    <div class="thumbnail">
                                        <img src="img/sherlock.jpg" alt="">
                                        <div class="caption">
                                            <h3>Sherlok Holmes</h3>
                                            <p>By Arthur Conan Doyle</p>
                                            <p>Price: ₹500.00 </p>
                                            <?php if (!isset($_SESSION['email'])) { ?>
                                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                                //We have created a function to check whether this particular product is added to cart or not.
                                                if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                                } else {
                                                ?>
                                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4><a href="#" align="center"> Load More </a></h4>
                        </div>
                    </div>
                    <br id="poetry">
                        <!----------------------------------------------------poetry----------------------------------->
                        <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 style="color:black">Poetry Writing</h3>
                        </div>

                            <div class="panel-body">

                                <div class="col-sm-4 home-feature">
                                    <div class="thumbnail">
                                        <img src="img/milk.jpg" alt="">
                                        <div class="caption">
                                            <h4>Milk and Honey</h4>
                                            <p>By Rupi Kaur</p>
                                            <p>Price: ₹260.00 </p>
                                            <?php if (!isset($_SESSION['email'])) { ?>
                                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                                //We have created a function to check whether this particular product is added to cart or not.
                                                if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                                } else {
                                                ?>
                                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 home-feature">
                                    <div class="thumbnail">
                                        <img src="./img/gulzar.jpg" alt="">
                                        <div class="caption">
                                            <h4>Selected Poems</h4>
                                            <p>By Gulzar  </p>
                                            <p>Price: ₹1050.00</p>
                                            <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                                if (check_if_added_to_cart(8)) {
                                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                                } else {  ?> <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php    }
                                            }    ?>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 home-feature">
                                    <div class="thumbnail">
                                        <img src="img/truth.jpg" alt="">
                                        <div class="caption">
                                            <h4>The Truth About Magic</h4>
                                            <p>By Suresh Krishna</p>
                                            <p>Price: ₹580.00 </p>
                                            <?php if (!isset($_SESSION['email'])) { ?>
                                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                                //We have created a function to check whether this particular product is added to cart or not.
                                                if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                                } else {
                                                ?>
                                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4><a href="#" align="center"> Load More </a></h4>
                        </div>
                    </div>
                    <!-------------------------------clssic-fictionend------------------------------------------>
                <!----------------------------------------------------indion-fiction----------------------------------->
                <div class="panel panel-default" >
                        <div class="panel-heading  color">
                            <h3 style="color:black">Indian Fiction Books</h3>
                        </div>

                        <div class="panel-body">
                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="img/era.jpg" alt="Othello">
                                    <div class="caption">
                                        <h3>Era of Darkness</h3>
                                        <p>By Shashi Tharoor</p>
                                        <p>Price: ₹249.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                            ?>
                                                <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="./img/rag.jpg" alt="">
                                    <div class="caption">
                                        <h3>Rag Darbari</h3>
                                        <p>By S Shukal</p>
                                        <p>Price: ₹300.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            if (check_if_added_to_cart(11)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {  ?> <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php    }
                                        }    ?>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="img/gate.jpg" alt="">
                                    <div class="caption">
                                        <h3>The Golden Gate</h3>
                                        <p>By Vikram Seth </p>
                                        <p>Price: ₹440.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                            ?>
                                                <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <br >

                            </div>
                            <h4><a href="#" align="center"> Load More </a></h4>
                        </div>

                        <!----------------------------------------------------religiousn----------------------------------->
                <div class="panel panel-default" id="religious">
                        <div class="panel-heading  color">
                            <h3 style="color:black">Religious & Spiritual Books</h3>
                        </div>

                        <div class="panel-body">
                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="img/aswat.jpg" alt="Othello">
                                    <div class="caption">
                                        <h3>Bow of Rama</h3>
                                        <p>By Gunjan Porwal</p>
                                        <p>Price: ₹279.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(13)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                            ?>
                                                <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="./img/alc.jpg" alt="">
                                    <div class="caption">
                                        <h3>Alchemist</h3>
                                        <p>By Paulo Coelho</p>
                                        <p>Price: ₹500.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            if (check_if_added_to_cart(14)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {  ?> <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php    }
                                        }    ?>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="img/prophet.jpg" alt="">
                                    <div class="caption">
                                        <h3>The Prophet</h3>
                                        <p>By Kahlil Gibran </p>
                                        <p>Price: ₹199.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(15)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                            ?>
                                                <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <br >
                            </div>
                            <h4><a href="#" align="center"> Load More </a></h4>
                        </div>
                            <!----------------------------------------------------hantasy----------------------------------->
                <div class="panel panel-default" id="fantasy">
                        <div class="panel-heading  color">
                            <h3 style="color:black">Fantasy Books</h3>
                        </div>

                        <div class="panel-body">
                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="img/battle.jpg" alt="Othello">
                                    <div class="caption">
                                        <h3>BATTLE FOR CRYSTAL CASTLE</h3>
                                        <p>By Geronimo Stilton</p>
                                        <p>Price: ₹402.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(16)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                            ?>
                                                <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="./img/dragon.jpg" alt="">
                                    <div class="caption">
                                        <h3>The Dragon of Fortune</h3>
                                        <p>By Geronimo Stilton</p>
                                        <p>Price: ₹634.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            if (check_if_added_to_cart(17)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {  ?> <a href="cart-add.php?id=17" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php    }
                                        }    ?>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="img/charms.jpg" alt="">
                                    <div class="caption">
                                        <h3>The Enchanted Charms</h3>
                                        <p>By Geronimo Stilton</p>
                                        <p>Price: ₹417.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(18)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                            ?>
                                                <a href="cart-add.php?id=18" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <br >
                            </div>
                            <h4><a href="#" align="center"> Load More </a></h4>
                        </div>
                          <!----------------------------------------------------horror----------------------------------->
                <div class="panel panel-default" id="horror">
                        <div class="panel-heading  color">
                            <h3 style="color:black">Horror Books</h3>
                        </div>

                        <div class="panel-body">
                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="img/green.jpg" alt="">
                                    <div class="caption">
                                        <h3>The Green Room</h3>
                                        <p>By Nag Mani</p>
                                        <p>Price: ₹200.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(19)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                            ?>
                                                <a href="cart-add.php?id=19" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="./img/asylum.jpg" alt="">
                                    <div class="caption">
                                        <h3>Asylum</h3>
                                        <p>By Madeleine Roux </p>
                                        <p>Price: ₹355.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            if (check_if_added_to_cart(20)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {  ?> <a href="cart-add.php?id=20" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php    }
                                        }    ?>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="img/shining.jpg" alt="">
                                    <div class="caption">
                                        <h3>The Shining</h3>
                                        <p>By Stephen King</p>
                                        <p>Price: ₹367.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(21)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                            ?>
                                                <a href="cart-add.php?id=21" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <br >
                            </div>
                            <h4><a href="#" align="center"> Load More </a></h4>
                        </div>
                        <!----------------------------------------------------romance----------------------------------->
                <div class="panel panel-default" id="romance">
                        <div class="panel-heading  color">
                            <h3 style="color:black">Romance</h3>
                        </div>

                        <div class="panel-body">
                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="img/perfect.jpg" alt="">
                                    <div class="caption">
                                        <h3>Perfect Ending</h3>
                                        <p>By Arpit Vageria</p>
                                        <p>Price: ₹131.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(22)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                            ?>
                                                <a href="cart-add.php?id=22" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="./img/ends.jpg" alt="">
                                    <div class="caption">
                                        <h3>    </h3>
                                        <p>By Colleen Hoover</p>
                                        <p>Price: ₹299.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            if (check_if_added_to_cart(23)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {  ?> <a href="cart-add.php?id=23" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php    }
                                        }    ?>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="img/last.jpg" alt="">
                                    <div class="caption">
                                        <h3>Her Last Wish</h3>
                                        <p>By Ajay K. Pandey</p>
                                        <p>Price: ₹118.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(24)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                            ?>
                                                <a href="cart-add.php?id=24" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <br >
                            </div>
                            <h4><a href="#" align="center"> Load More </a></h4>
                        </div>
                        <!----------------------------------------------------mystry----------------------------------->
                <div class="panel panel-default" id="mystry">
                        <div class="panel-heading  color">
                            <h3 style="color:black">Mystery</h3>
                        </div>

                        <div class="panel-body">
                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="img/silent.jpg" alt="">
                                    <div class="caption">
                                        <h3>The Silent Patient</h3>
                                        <p>by Alex Michaelides </p>
                                        <p>Price: ₹279.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(25)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                            ?>
                                                <a href="cart-add.php?id=25" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="./img/ruskin.jpg" alt="">
                                    <div class="caption">
                                        <h3>Perfect Murder</h3>
                                        <p>By Ruskin Bond</p>
                                        <p>Price: ₹145.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            if (check_if_added_to_cart(26)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {  ?> <a href="cart-add.php?id=26" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php    }
                                        }    ?>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="img/one.jpg" alt="">
                                    <div class="caption">
                                        <h3>Arranged Murder</h3>
                                        <p>by Chetan Bhagat</p>
                                        <p>Price: ₹267.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(27)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                            ?>
                                                <a href="cart-add.php?id=27" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <br >
                            </div>
                            <h4><a href="#" align="center"> Load More </a></h4>
                        </div>
                          <!----------------------------------------------------school----------------------------------->
                <div class="panel panel-default" id="school">
                        <div class="panel-heading  color">
                            <h3 style="color:black">School Textbooks</h3>
                        </div>

                        <div class="panel-body">
                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="img/evs.jpg" alt="">
                                    <div class="caption">
                                        <h3>EVS</h3>
                                        <p>Class I</p>
                                        <p>Price: ₹579.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(28)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                            ?>
                                                <a href="cart-add.php?id=28" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="./img/maths.jpg" alt="">
                                    <div class="caption">
                                        <h3>Mental Maths</h3>
                                        <p>Class I</p>
                                        <p>Price: ₹345.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            if (check_if_added_to_cart(29)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {  ?> <a href="cart-add.php?id=29" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php    }
                                        }    ?>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="img/english.jpg" alt="">
                                    <div class="caption">
                                        <h3>English</h3>
                                        <p>Class I</p>
                                        <p>Price: ₹357.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(30)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                            ?>
                                                <a href="cart-add.php?id=30" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <br >
                            </div>
                            <h4><a href="#" align="center"> Load More </a></h4>
                        </div>
                         <!----------------------------------------------------high-school----------------------------------->
                <div class="panel panel-default" id="higher">
                        <div class="panel-heading  color">
                            <h3 style="color:black">High-School Textbooks</h3>
                        </div>

                        <div class="panel-body">
                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="img/chem.jpg" alt="">
                                    <div class="caption">
                                        <h3>Chemistry</h3>
                                        <p>Class 12th</p>
                                        <p>Price: ₹209.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(31)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                            ?>
                                                <a href="cart-add.php?id=31" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="./img/phy.jpg" alt="">
                                    <div class="caption">
                                        <h3>Physics</h3>
                                        <p>Class 12th</p>
                                        <p>Price: ₹195.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            if (check_if_added_to_cart(32)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {  ?> <a href="cart-add.php?id=32" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php    }
                                        }    ?>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="img/maths1.jpg" alt="">
                                    <div class="caption">
                                        <h3>Mathematics</h3>
                                        <p>Class 12th</p>
                                        <p>Price: ₹234.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(33)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                            ?>
                                                <a href="cart-add.php?id=33" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <br >
                            </div>
                            <h4><a href="#" align="center"> Load More </a></h4>
                        </div>
                        <!----------------------------------------------------exam----------------------------------->
                <div class="panel panel-default" id="exam">
                        <div class="panel-heading  color">
                            <h3 style="color:black">Exam Central</h3>
                        </div>

                        <div class="panel-body">
                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="img/bsc.jpg" alt="">
                                    <div class="caption">
                                        <h3>BSC Entrance</h3>
                                        <p>By Arihant Experts</p>
                                        <p>Price: ₹599.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(34)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                            ?>
                                                <a href="cart-add.php?id=34" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="./img/sbi.jpg" alt="">
                                    <div class="caption">
                                        <h3>SBI Entrance</h3>
                                        <p>By Arihant Experts</p>
                                        <p>Price: ₹295.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            if (check_if_added_to_cart(35)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {  ?> <a href="cart-add.php?id=35" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php    }
                                        }    ?>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="img/bcom.jpg" alt="">
                                    <div class="caption">
                                        <h3>BCom Entrance</h3>
                                        <p>by Arihant Experts</p>
                                        <p>Price: ₹204.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(36)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                            ?>
                                                <a href="cart-add.php?id=36" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <br >
                            </div>
                            <h4><a href="#" align="center"> Load More </a></h4>
                        </div>
                        <!----------------------------------------------------audio----------------------------------->
                <div class="panel panel-default" id="audio">
                        <div class="panel-heading  color">
                            <h3 style="color:black">Audio Books</h3>
                        </div>

                        <div class="panel-body">
                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="img/5am.jpg" alt="">
                                    <div class="caption">
                                        <h4>The 5AM Club</h4>
                                        <p>By Robin Sharma</p>
                                        <p>Price: ₹99.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(37)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                            ?>
                                                <a href="cart-add.php?id=37" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="./img/rich.jpg" alt="">
                                    <div class="caption">
                                        <h4>Rich Dad Poor Dad</h4>
                                        <p>By Robert T. Kiyosaki</p>
                                        <p>Price: ₹99.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            if (check_if_added_to_cart(38)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {  ?> <a href="cart-add.php?id=38" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php    }
                                        }    ?>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 home-feature">
                                <div class="thumbnail">
                                    <img src="img/atomic.jpg" alt="">
                                    <div class="caption">
                                        <h4>Atomic Habits</h4>
                                        <p>by James Clear</p>
                                        <p>Price: ₹99.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(39)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                            ?>
                                                <a href="cart-add.php?id=39" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <br >
                            </div>
                            <h4><a href="#" align="center"> Load More </a></h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div>
    <br>
    <br>
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
    </div>
</body>

</html>