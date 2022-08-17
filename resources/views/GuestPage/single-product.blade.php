<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SingleProduct</title>
    <link rel="icon" href="img/logo.png" />
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="{{url('/login')}}"><i class="fa fa-user"></i>Login</a></li>
                            <li><a href="#"><i class="fa fa-user"></i> Admin Login</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">currency :</span><span class="value">USD </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">INR</a></li>
                                    <li><a href="#">GBP</a></li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                    <h1><a href="index.html"><img src="img/logo.png"><span>  Valorant</span></a></img></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.html">Cart - <span class="cart-amunt">$800</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.blade.php">Home</a></li>
                        <li><a href="{{url('/shop')}}">Shop page</a></li>
                        <li><a href="{{url('/checkout')}}">Checkout</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div>  <!-- End mainmenu area -->
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <article class="product">
      <h1>Product</h1>
      <section>
        <div class="product__carrousel">
        <img src="img/Skins/glitchpopAxImage.png">        
        </div>
        <div class="product__info">
          <h2>Glitchpop Axe</h2>
          <div class="product__price">
            <img src="img/Icons/vp.png" alt="ValorantPoints.png" width=10% height=auto />
            <p>1275</p>
          </div>
          <div class="product__edition">
            <img src="img/Rarity/DE.jpg"/>
            <p>Deluxe</p>
          </div>
          <div>
            <button class="button" name="buy">Buy</button>
            <button class="button button--cart" name="add">Add To Cart</button>
          </div>
        </div>
      </section>
    </article>

    <footer class="footer">
      <section class="footer__logo">
        <img src="img/VALORANT_Logo.png" alt="VALORANT_Logo.png" width=50% height=auto>
        <p>© 2020 Riot Games, Inc. Riot Games, 
            VALORANT and any associated logos are trademarks, service marks, or registered trademarks of Riot Games, Inc.</p>
      </section>
      <section>
          <div>
              <h1>FOLLOW US</h1>
              <div class="footer__socialMedia">
                  <div>
                      <img src="img/Footer/Instagram_Logo.png" alt="Instagram_Logo.png" width=7% height=auto>
                      <p>/VALORANT</p>

                      <img src="img/Footer/YouTube_Logo.png" alt="YouTube_Logo.png" width=7% height=auto>
                      <p>/PlayValorant</p>

                  </div>
                  <div>
                      <img src="img/Footer/Twitter_Logo.png" alt="Twitter_Logo.png" width=7% height=auto>
                      <p>/PlayVALORANT</p>

                      <img src="img/Footer/Facebook_Logo.png" alt="Facebook_Logo.png" width=7% height=auto>
                      <p>/PlayVALORANT</p>
                  </div>
              </div>
          </div>

          <div class="footer__about">
              <h1>ABOUT US</h1>
              <div>
                  <p>Privacy Policy</p>
                  <p>Terms of Service</p>
              </div>
          </div>
          
      </section>

      <section class="footer__classification">
          <h1>CLASSIFICATION</h1>
          <div>
              <img class="classification" src="img/Footer/Classification_Teen.png" alt="Classification_Teen.png">
              <p>Blood <br>
                Language <br>
                Violence <br>
                User interaction<br>
                In-game purchases
              </p>
          </div>
      </section>
      
  </footer> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
  </body>
</html>