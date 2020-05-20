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

        <title>Nearby Grocer - Categories</title>

        <style>

            header{
                border-bottom: 0.5px solid rgb(230, 225, 225);
            }

            .icon{
                margin: 5% 0 5% 0;
            }

            .brandSection{
               padding: 4% 4%;
                
            }

            .topbrands{
                margin: 2% 0;
                background-color: rgb(236, 236, 236);
            }

            .brand{
                max-width:30%;
                max-height:30%;
                margin-left: 2%;
                font-size: smaller;
                
            }

            .brand p{
                color: black;
                
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
                        <div class="icon col-3">
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
                        <div class="icon col-3">
                            <a href="home.php"><i class="fa fa-home fa-2x"></i></a>
                        </div>
                        <div class="icon col-3">
                            <i class="fa fa-pencil fa-2x"></i>
                        </div>
                        <div class="icon col-3">
                            <a href="cart.php"><i class="fa fa-shopping-cart fa-2x"></i></a>
                        </div>
                    </div>
                </div>           
            </header>
        </div>

        <div class="searchBar container">
            <form class="form-inline my-2">
                <input class="form-control mr-sm-2 col-10" type="search" placeholder="Search" aria-label="Search">
                <button class="btn my-2 my-sm-0 col-2" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>

        

        
        <div class="topbrands text-center">
            <div class="brandSection row">
                <h4 class="col-8 text-left">Top Brands</h4>
            </div>
          
           <div class="row">
               <div class="brand col-4">
                   <a href="brand.php"><img src="logo.jpg" alt="" width="100%">
                   <p>Brand name</p></a>
               </div>
               <div class="brand col-4">
                    <a href="brand.php"><img src="logo.jpg" alt="" width="100%">
                    <p>Brand name</p></a>
                </div>
               <div class="brand col-4">
                    <a href="brand.php"><img src="logo.jpg" alt="" width="100%">
                    <p>Brand name</p></a>
                </div>
           </div>
           <div class="row">
            <div class="brand col-4">
                <a href="brand.php"><img src="logo.jpg" alt="" width="100%">
                <p>Brand name</p></a>
            </div>
            <div class="brand col-4">
                 <a href="brand.php"><img src="logo.jpg" alt="" width="100%">
                 <p>Brand name</p></a>
             </div>
            <div class="brand col-4">
                 <a href="brand.php"><img src="logo.jpg" alt="" width="100%">
                 <p>Brand name</p></a>
             </div>
        </div>
           <div class="row">
                <div class="brand col-4">
                    <a href="brand.php"><img src="logo.jpg" alt="" width="100%">
                    <p>Brand name</p></a>
                </div>
                <div class="brand col-4">
                    <a href="brand.php"><img src="logo.jpg" alt="" width="100%">
                    <p>Brand name</p></a>
                </div>
                <div class="brand col-4">
                    <a href="brand.php"><img src="logo.jpg" alt="" width="100%">
                    <p>Brand name</p></a>
                </div>
            </div>
            <div class="row">
                <div class="brand col-4">
                    <a href="brand.php"><img src="logo.jpg" alt="" width="100%">
                    <p>Brand name</p></a>
                </div>
                <div class="brand col-4">
                    <a href="brand.php"><img src="logo.jpg" alt="" width="100%">
                    <p>Brand name</p></a>
                </div>
                <div class="brand col-4">
                     <a href="brand.php"><img src="logo.jpg" alt="" width="100%">
                     <p>Brand name</p></a>
                 </div>
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