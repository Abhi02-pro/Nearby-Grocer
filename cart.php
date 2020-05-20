<?php
    echo '

        <!doctype html>
        <html lang="en">

    ';




# head section

 echo ' 
 
    <head>
    
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Nearby Grocer - Cart</title>

        <style>

            header{
                border-bottom: 0.5px solid rgb(230, 225, 225);
            }

            .icon,.text{
                margin: 2% 0 2% 0;
            }

            .logo,.message,.continueShop{
                padding: 5%;
            }

            .message{
                font-size: large;
                font-weight: bold;
            }



        </style>

    </head>

 ';

# body section

 echo '

  <body>

        <div class="headnav">
            <header>
                <div class="container">
                    <div class="row text-center">
                        <div class="icon col-2">
                            <p>
                                <button class="btn btn-light btn-sm" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="fa fa-bars fa-lg"></i>
                                </button>
                            </p>
                            <div class="collapse" id="collapseExample">
                                WELCOME TO
                                NEARBY GROCER<br><br>
                                <a href="#">Login</a>
                                <a href="#">Signup</a>
                            </div>
                        </div>
                        <div class="icon col-2">
                        <a href="home.php"><i class="fa fa-home fa-2x"></i></a>
                        </div>
                        <div class="text col-8">
                            <h4>Shopping Cart</h4>
                        </div>
                    </div>
                </div>           
            </header>
        </div>

        <div class="container text-center">

            <div class="logo">
                <img src="logo.jpg">
            </div>
            <div class="message">
                <i class="fa fa-frown-o fa-4x"></i>
                <h1>Cart is Empty !</h1>
            </div>

            <div class="continueShop">
                <a href="home.php"><button type="button" class="btn btn-success btn-block">Continue Shopping</button></a>
            </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  </body>
</html>

';
?>