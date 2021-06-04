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
                                        <img src="./img/daddy.jpg" alt="">
                                        <div class="caption">
                                            <h4>The Secret Garden</h4>
                                            <p>By F H Burnett  </p>
                                            <p>Price: ₹650.00</p>
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
                                        <img src="./img/gulzar.jpg" alt="">
                                        <div class="caption">
                                            <h4>Selected Poems</h4>
                                            <p>By Gulzar  </p>
                                            <p>Price: ₹1050.00</p>
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
                                    <img src="./img/rag.jpg" alt="">
                                    <div class="caption">
                                        <h3>Rag Darbari</h3>
                                        <p>By S Shukal</p>
                                        <p>Price: ₹300.00 </p>
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
                            <br >

                            </div>
                            <h4><a href="#" align="center"> Load More </a></h4>
                        </div>

                        <!----------------------------------------------------indion-fiction----------------------------------->
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
                                    <img src="./img/alc.jpg" alt="">
                                    <div class="caption">
                                        <h3>Alchemist</h3>
                                        <p>By Paulo Coelho</p>
                                        <p>Price: ₹500.00 </p>
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
                                    <img src="./img/dragon.jpg" alt="">
                                    <div class="caption">
                                        <h3>The Dragon of Fortune</h3>
                                        <p>By Geronimo Stilton</p>
                                        <p>Price: ₹634.00 </p>
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
                            <br >
                            </div>
                            <h4><a href="#" align="center"> Load More </a></h4>
                        </div>
                          <!----------------------------------------------------hantasy----------------------------------->
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
                                    <img src="./img/asylum.jpg" alt="">
                                    <div class="caption">
                                        <h3>Asylum</h3>
                                        <p>By Madeleine Roux </p>
                                        <p>Price: ₹355.00 </p>
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
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
    </div>
</body>

</html>