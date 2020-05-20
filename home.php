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

        <title>Nearby Grocer - Home</title>

        <style>

            header{
                border-bottom: 0.5px solid rgb(230, 225, 225);
            }

            .icon{
                margin: 5% 0 5% 0;
            }

            .jumbotron{
                margin: 3% 0;
            }

            .catSection{
                padding: 4% 4%;
            }

            .topcat{
                margin: 2% 0;
                background-color: rgb(236, 236, 236);
            }

            .category{
                max-width: 30%;
                max-height: 30%;
                margin-left: 2%;
                font-size: smaller;
                
            }

            .category p{
                color: black;
                
            }

            .sub{
                width: 90%;
                display: inline-block;
               border: 0.5px solid black;
                background: white;
            }

            body .carousel-control-prev-icon,
            body .carousel-control-next-icon{
                background-color:black;
            }

            .catname{
                margin: 2% 0;
                background-color: rgb(236, 236, 236);
                padding: 2% 0;
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
                        <div class="icon col-6">
                        <i class="fa fa-shopping-basket fa-lg">Shop Name</i>
                        </div>
                        <div class="icon col-2">
                            <i class="fa fa-pencil fa-2x"></i>
                        </div>
                        <div class="icon col-2">
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

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="longimg.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="longimg.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="longimg.jpg" class="d-block w-100">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>

        
            <div class="topcat text-center">
                <div class="catSection row">
                    <h4 class="col-8 text-left">Top Categories</h4>
                    <a class="col-4 text-right" href="category.php">View all</a>
                </div>
              
               <div class="row">
                   <div class="category col-4">
                       <a href="subcategory.php"><img src="logo.jpg" alt="" width="100%">
                       <p>Category name</p></a>
                   </div>
                   <div class="category col-4">
                        <a href="subcategory.php"><img src="logo.jpg" alt="" width="100%">
                        <p>Category name</p></a>
                    </div>
                    <div class="category col-4">
                        <a href="subcategory.php"><img src="logo.jpg" alt="" width="100%">
                        <p>Category name</p></a>
                    </div>
               </div>
               <div class="row">
                    <div class="category col-4">
                        <a href="subcategory.php"><img src="logo.jpg" alt="" width="100%">
                        <p>Category name</p></a>
                    </div>
                    <div class="category col-4">
                        <a href="subcategory.php"><img src="logo.jpg" alt="" width="100%">
                        <p>Category name</p></a>
                    </div>
                    <div class="category col-4">
                        <a href="subcategory.php"><img src="logo.jpg" alt="" width="100%">
                        <p>Category name</p></a>
                    </div>
                </div>
                <div class="row">
                    <div class="category col-4">
                        <a href="subcategory.php"><img src="logo.jpg" alt="" width="100%">
                        <p>Category name</p></a>
                    </div>
                    <div class="category col-4">
                         <a href="subcategory.php"><img src="logo.jpg" alt="" width="100%">
                         <p>Category name</p></a>
                     </div>
                     <div class="category col-4">
                         <a href="subcategory.php"><img src="logo.jpg" alt="" width="100%">
                         <p>Category name</p></a>
                     </div>
                </div>
            </div>
            
            <div class="catname text-center">
            
                <p><strong>Category Name</strong></p>
                
                <div id="demo" class="carousel slide" data-ride="carousel">
                <!--slideshow-->
                <div class="container carousel-inner no-padding">
                    <div class="carousel-item active">
                        
                            <div class="sub col-3 text-center">
                                <img src="logo.jpg" alt="" width="100%"><br>
                                <strong>Product</strong><br>
                                Stock<br>
                                Price<br>
                                <button type="button" class="btn btn-success btn-sm ">Add</button>
                            </div>
                            <div class="sub col-3 text-center">
                                <img src="logo.jpg" alt="" width="100%"><br>
                                <strong>Product</strong><br>
                                Stock<br>
                                Price<br>
                                <button type="button" class="btn btn-success btn-sm ">Add</button>
                            </div>
                            <div class="sub col-3 text-center">
                                <img src="logo.jpg" alt="" width="100%"><br>
                                <strong>Product</strong><br>
                                Stock<br>
                                Price<br>
                                <button type="button" class="btn btn-success btn-sm ">Add</button>
                            </div>
                       
                    </div>
                    <div class="carousel-item">
                        
                        <div class="sub col-3 text-center">
                            <img src="logo.jpg" alt="" width="100%"><br>
                            <strong>Product</strong><br>
                            Stock<br>
                            Price<br>
                            <button type="button" class="btn btn-success btn-sm ">Add</button>
                        </div>
                        <div class="sub col-3 text-center">
                            <img src="logo.jpg" alt="" width="100%"><br>
                            <strong>Product</strong><br>
                            Stock<br>
                            Price<br>
                            <button type="button" class="btn btn-success btn-sm ">Add</button>
                        </div>
                        <div class="sub col-3 text-center">
                            <img src="logo.jpg" alt="" width="100%"><br>
                            <strong>Product</strong><br>
                            Stock<br>
                            Price<br>
                            <button type="button" class="btn btn-success btn-sm ">Add</button>
                        </div>
                   
                    </div>
                    <div class="carousel-item">
                        
                        <div class="sub col-3 text-center">
                            <img src="logo.jpg" alt="" width="100%"><br>
                            <strong>Product</strong><br>
                            Stock<br>
                            Price<br>
                            <button type="button" class="btn btn-success btn-sm ">Add</button>
                        </div>
                        <div class="sub col-3 text-center">
                            <img src="logo.jpg" alt="" width="100%"><br>
                            <strong>Product</strong><br>
                            Stock<br>
                            Price<br>
                            <button type="button" class="btn btn-success btn-sm ">Add</button>
                        </div>
                        <div class="sub col-3 text-center">
                            <img src="logo.jpg" alt="" width="100%"><br>
                            <strong>Product</strong><br>
                            Stock<br>
                            Price<br>
                            <button type="button" class="btn btn-success btn-sm ">Add</button>
                        </div>
                   
                     </div>
                      <!--left and right controls for slide-->
                     <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
            </div>

            
            <div class="topbrands text-center">
                <div class="brandSection row">
                    <h4 class="col-8 text-left">Top Brands</h4>
                    <a class="col-4 text-right" href="brand.php">View all</a>
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
            
            <div class="catname text-center">
            
                <p><strong>Category Name</strong></p>
                
                <div id="demo1" class="carousel slide" data-ride="carousel">
                <!--slideshow-->
                <div class="container carousel-inner no-padding">
                    <div class="carousel-item active">
                        
                            <div class="sub col-3 text-center">
                                <img src="logo.jpg" alt="" width="100%"><br>
                                <strong>Product</strong><br>
                                Stock<br>
                                Price<br>
                                <button type="button" class="btn btn-success btn-sm ">Add</button>
                            </div>
                            <div class="sub col-3 text-center">
                                <img src="logo.jpg" alt="" width="100%"><br>
                                <strong>Product</strong><br>
                                Stock<br>
                                Price<br>
                                <button type="button" class="btn btn-success btn-sm ">Add</button>
                            </div>
                            <div class="sub col-3 text-center">
                                <img src="logo.jpg" alt="" width="100%"><br>
                                <strong>Product</strong><br>
                                Stock<br>
                                Price<br>
                                <button type="button" class="btn btn-success btn-sm ">Add</button>
                            </div>
                       
                    </div>
                    <div class="carousel-item">
                        
                        <div class="sub col-3 text-center">
                            <img src="logo.jpg" alt="" width="100%"><br>
                            <strong>Product</strong><br>
                            Stock<br>
                            Price<br>
                            <button type="button" class="btn btn-success btn-sm ">Add</button>
                        </div>
                        <div class="sub col-3 text-center">
                            <img src="logo.jpg" alt="" width="100%"><br>
                            <strong>Product</strong><br>
                            Stock<br>
                            Price<br>
                            <button type="button" class="btn btn-success btn-sm ">Add</button>
                        </div>
                        <div class="sub col-3 text-center">
                            <img src="logo.jpg" alt="" width="100%"><br>
                            <strong>Product</strong><br>
                            Stock<br>
                            Price<br>
                            <button type="button" class="btn btn-success btn-sm ">Add</button>
                        </div>
                   
                    </div>
                    <div class="carousel-item">
                        
                        <div class="sub col-3 text-center">
                            <img src="logo.jpg" alt="" width="100%"><br>
                            <strong>Product</strong><br>
                            Stock<br>
                            Price<br>
                            <button type="button" class="btn btn-success btn-sm ">Add</button>
                        </div>
                        <div class="sub col-3 text-center">
                            <img src="logo.jpg" alt="" width="100%"><br>
                            <strong>Product</strong><br>
                            Stock<br>
                            Price<br>
                            <button type="button" class="btn btn-success btn-sm ">Add</button>
                        </div>
                        <div class="sub col-3 text-center">
                            <img src="logo.jpg" alt="" width="100%"><br>
                            <strong>Product</strong><br>
                            Stock<br>
                            Price<br>
                            <button type="button" class="btn btn-success btn-sm ">Add</button>
                        </div>
                   
                     </div>
                      <!--left and right controls for slide-->
                     <a class="carousel-control-prev" href="#demo1" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo1" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
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