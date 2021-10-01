<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up | E-Store.com</title>
    <link rel="shortcut icon" href="./img/srtcticon.png" type="image/png">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <?php include "includes/header.php"; ?>

    <div class="container">
        <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>LOGIN</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Login to make a purchase</i>
                                <p>
                                <form role="form" action="login_submit.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="e-mail" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    </div>
                                    <div>
                                        <?php
                                        if (isset($_GET["error"])) {

                                            echo $_GET["error"];
                                        }
                                        ?>
                                    </div><br>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                </form><br />
                            </div>
                            <div class="panel-footer">
                                <p>Don't have an account? <a href="signup.php">Register</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "includes/footer.php"; ?>    
</body>

</html>
