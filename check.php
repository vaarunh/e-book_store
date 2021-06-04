<?php
  require("includes/common.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Checkout | E-Store.com</title>
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
        <div class="row">
            <div class="col-sm-7">
               <img src="./img/yess.jpg">
            </div>

            <div class="col-sm-5">

                <h2 style="color:black">Checkout</h2>

                    <form  action="success.php" method="POST">

                        <div class="form-group col-sm-10">
                            <input class="form-control" placeholder="Name" name="name" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" required>
                        </div>

                        <div class="form-group col-sm-10">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required>                          
                        </div>

                        <div class="form-group col-sm-10">
                                <input type="text" class="form-control"  placeholder="Contact Number" maxlength="10" size="10" name="contact" required>
                          
                        </div>

                        <div class="form-group col-sm-10">
                                <input  type="text" class="form-control"  placeholder="Address Line 1" name="address"  required>
                        </div>

                        <div class="form-group col-sm-10">
                                <input  type="text" class="form-control"  placeholder="Address Line 2" name="address2" >
                        </div>
                        <div class="form-group col-sm-10">
                                <input  type="text" class="form-control"  placeholder="Landmark" name="landmark" required>
                        </div>
                        <div class="form-group col-sm-10">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required>
                        </div>
                        <div class="form-group col-sm-10">
                                <input  type="text" class="form-control"  placeholder="State" name="state" required>
                        </div>
                        <div class="form-group col-sm-10">
                                <input  type="number" class="form-control"  placeholder="Pin Code" name="pin" required>
                        </div>
                        <div class="form-group col-sm-10">
                        <h4> Select Payment Method: </h4>'
                        <input type="radio" id="online" name="pay" value="online" disabled>
                        <label for="online">Online Payment ( Currently Not Available )</label><br>
                        <input type="radio" id="cod" name="pay" value="cod" required>
                        <label for="cod">Cash on Delivery</label><br>
                        </div>

                        

                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Place Order</button>
                        </div>  
                        <br>
                        <br>
                        <br>

                </form>
                <br>

        </div>
    </div>
    </div>
    <br>
    <br>
    <br>
    <br>

      <?php include "includes/footer.php"; ?>
    </body>
</html>
