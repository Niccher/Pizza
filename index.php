<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="./res/img/emblem-office.ico">

    <title>Dummy Pizza</title>
    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link href="css/Pasted.css" rel="stylesheet">

  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Dummy Pizza</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Orders.php">Orders</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="jumbotron">
      <div class="container-fluid text-center">
        <h1 class="display-3">Hello, world!</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#login-signup-modal">Drop your order</a>
        </p>
      </div>
      
  </div>
  <!--background: url("bg.jpg") no-repeat center center; -->

  <style type="text/css">
    .jumbotron {
      background-image: url("images/pizza3.jpg");
      background-size: cover;
      font-size: 24px;
      color: #fff;
    }
    .modal-header, .modal-body, .modal-footer{
      padding: 25px;
    }
    .modal-footer{
      text-align: center;
    }
    #signup-modal-content, #forgot-password-modal-content{
      display: none;
    }
        
    input.parsley-error   {    
        border-color:#843534;
        box-shadow: none;
    }
    input.parsley-error:focus{    
        border-color:#843534;
        box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483
    }
    .parsley-errors-list.filled {
        opacity: 1;
        color: #a94442;
        display: none;
    }

    .carousel {
      margin: 50px auto;
      padding: 0 70px;
    }
    .carousel .item {
      min-height: 330px;
        text-align: center;
      overflow: hidden;
    }
    .carousel .item .img-box {
      height: 160px;
      width: 100%;
      position: relative;
    }
    .carousel .item img { 
      max-width: 100%;
      max-height: 100%;
      display: inline-block;
      position: absolute;
      bottom: 0;
      margin: 0 auto;
      left: 0;
      right: 0;
    }
    .carousel .item h4 {
      font-size: 18px;
      margin: 10px 0;
    }
    .carousel .item .btn {
      color: #333;
        border-radius: 0;
        font-size: 11px;
        text-transform: uppercase;
        font-weight: bold;
        background: none;
        border: 1px solid #ccc;
        padding: 5px 10px;
        margin-top: 5px;
        line-height: 16px;
    }
    .carousel .item .btn:hover, .carousel .item .btn:focus {
      color: #fff;
      background: #000;
      border-color: #000;
      box-shadow: none;
    }
    .carousel .item .btn i {
      font-size: 14px;
        font-weight: bold;
        margin-left: 5px;
    }
    .carousel .thumb-wrapper {
      text-align: center;
    }
    .carousel .thumb-content {
      padding: 15px;
    }
    .carousel .carousel-control {
      height: 100px;
        width: 40px;
        background: none;
        margin: auto 0;
        background: rgba(0, 0, 0, 0.2);
    }
    .carousel .carousel-control i {
        font-size: 30px;
        position: absolute;
        top: 50%;
        display: inline-block;
        margin: -16px 0 0 0;
        z-index: 5;
        left: 0;
        right: 0;
        color: rgba(0, 0, 0, 0.8);
        text-shadow: none;
        font-weight: bold;
    }
    .carousel .item-price {
      font-size: 13px;
      padding: 2px 0;
    }
    .carousel .item-price strike {
      color: #999;
      margin-right: 5px;
    }
    .carousel .item-price span {
      color: #86bd57;
      font-size: 110%;
    }
    .carousel .carousel-control.left i {
      margin-left: -3px;
    }
    .carousel .carousel-control.left i {
      margin-right: -3px;
    }
    .carousel .carousel-indicators {
      bottom: -50px;
    }
    .carousel-indicators li, .carousel-indicators li.active {
      width: 10px;
      height: 10px;
      margin: 4px;
      border-radius: 50%;
      border-color: transparent;
    }
    .carousel-indicators li { 
      background: rgba(0, 0, 0, 0.2);
    }
    .carousel-indicators li.active {  
      background: rgba(0, 0, 0, 0.6);
    }
    .star-rating li {
      padding: 0;
    }
    .star-rating i {
      font-size: 14px;
      color: #ffc000;
    }
  </style>

<!--Login, Signup, Forgot Password Modal -->
    <div id="login-signup-modal" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
    
      <!-- login modal content -->
        <div class="modal-content" id="login-modal-content">
        
          <div class="modal-header">
            <button type="button" class="close mr-auto" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-lock"></span> Login Now!</h4>
          </div>
          
          <div class="modal-body">
            <form method="post" id="Login-Form" role="form">
            
              <div class="form-group">
                  <div class="input-group">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                  <input name="email" id="email" type="email" class="form-control input-lg" placeholder="Enter Email" required data-parsley-type="email" >
                  </div>                      
              </div>
              
              
              <div class="form-group">
                  <div class="input-group">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                  <input name="password" id="login-password" type="password" class="form-control input-lg" placeholder="Enter Password" required data-parsley-length="[6, 10]" data-parsley-trigger="keyup">
                  </div>                      
              </div>
                <input type="submit" name="LogmeIN" class="btn btn-success btn-block btn-lg">
            </form>
          </div>
          
          <div class="modal-footer">
            <p> <a id="signupModal" href="javascript:void(0)">Register Here!</a></p>
          </div>
        
       </div>
        <!-- login modal content -->
        
        <!-- signup modal content -->
        <div class="modal-content" id="signup-modal-content">
        
          <div class="modal-header">
            <button type="button" class="close mr-auto" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-lock"></span> Signup Now!</h4>
          </div>
                  
          <div class="modal-body">

              <form method="post" id="Signin-Form" role="form">
              
                <div class="form-group">
                    <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input name="email" id="email" type="email" class="form-control input-lg" placeholder="Enter Email" required data-parsley-type="email">
                    </div>                     
                </div>
                
                <div class="form-group">
                    <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                    <input name="password" id="passwd" type="password" class="form-control input-lg" placeholder="Enter Password" required data-parsley-length="[6, 10]" data-parsley-trigger="keyup">
                    </div>                      
                </div>
                
                <div class="form-group">
                    <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                    <input name="password" id="confirm-passwd" type="password" class="form-control input-lg" placeholder="Retype Password" required data-parsley-equalto="#passwd" data-parsley-trigger="keyup">
                    </div>                      
                </div>
                
                
                  <button type="submit" class="btn btn-success btn-block btn-lg">CREATE ACCOUNT!</button>
              </form>
          </div>
          
          <div class="modal-footer">
            <p>Already a Member ? <a id="loginModal" href="javascript:void(0)">Login Here!</a></p>
          </div>
        
      </div>
        <!-- signup modal content -->
          
      </div><!-- /.modal-dialog -->
    </div>
        <!--Login, Signup Modal -->

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>Our <b>Products</b></h2>
      <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
      <!-- Carousel indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>   
      <!-- Wrapper for carousel items -->
      <div class="carousel-inner">
        <div class="item carousel-item active">
          <div class="row">

            <div class="col-sm-3">
              <div class="thumb-wrapper">
                <div class="img-box">
                  <img src="https://images.unsplash.com/photo-1534308983496-4fabb1a015ee?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-responsive img-fluid" alt="">
                </div>
                <div class="thumb-content">
                  <h4>pepperoni pizza</h4>
                  <p class="item-price"> <span>$40.00</span></p>
                  
                  <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>            
              </div>
            </div>

            <div class="col-sm-3">
              <div class="thumb-wrapper">
                <div class="img-box">
                  <img src="https://images.unsplash.com/photo-1574071318508-1cdbab80d002?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-responsive img-fluid" alt="">
                </div>
                <div class="thumb-content">
                  <h4>round cooked pizza</h4>
                  <p class="item-price"><span>$23.99</span></p>
                  
                  <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>            
              </div>
            </div>    
            <div class="col-sm-3">
              <div class="thumb-wrapper">
                <div class="img-box">
                  <img src="https://images.unsplash.com/photo-1574126154517-d1e0d89ef734?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-responsive img-fluid" alt="">
                </div>
                <div class="thumb-content">
                  <h4>brown pizza </h4>
                  <p class="item-price"><span>$17.00</span></p>
                  
                  <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>            
              </div>
            </div>                
            <div class="col-sm-3">
              <div class="thumb-wrapper">
                <div class="img-box">
                  <img src="https://images.unsplash.com/photo-1571407970349-bc81e7e96d47?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-responsive img-fluid" alt="">
                </div>
                <div class="thumb-content">
                  <h4>eight sliced pizza</h4>
                  <p class="item-price"><span>$24.00</span></p>
                  
                  <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>            
              </div>
            </div>
          </div>
        </div>

        <div class="item carousel-item">
          <div class="row">
            <div class="col-sm-3">
              <div class="thumb-wrapper">
                <div class="img-box">
                  <img src="https://images.unsplash.com/photo-1559978137-8c560d91e9e1?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-responsive img-fluid" alt="">
                </div>
                <div class="thumb-content">
                  <h4>cheese pizza</h4>
                  <p class="item-price"><span>$20.00</span></p>
                  
                  <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>            
              </div>
            </div>
            <div class="col-sm-3">
              <div class="thumb-wrapper">
                <div class="img-box">
                  <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-responsive img-fluid" alt="">
                </div>
                <div class="thumb-content">
                  <h4>pizza with berries</h4>
                  <p class="item-price"><span>$12.00</span></p>
                  
                  <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>            
              </div>
            </div>
            <div class="col-sm-3">
              <div class="thumb-wrapper">
                <div class="img-box">
                  <img src="https://images.unsplash.com/photo-1555072956-7758afb20e8f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-responsive img-fluid" alt="">
                </div>
                <div class="thumb-content">
                  <h4>Leafy Pizza</h4>
                  <p class="item-price"><span>$9.00</span></p>
                  
                  <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>            
              </div>
            </div>
            <div class="col-sm-3">
              <div class="thumb-wrapper">
                <div class="img-box">
                  <img src="https://images.unsplash.com/photo-1571066811602-716837d681de?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-responsive img-fluid" alt="">
                </div>
                <div class="thumb-content">
                  <h4>baked pizza</h4>
                  <p class="item-price"><span>$27.00</span></p>
                  
                  <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>            
              </div>
            </div>            
          </div>
        </div>
      </div>
      <!-- Carousel controls -->
      <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
        <i class="fa fa-angle-left"></i>
      </a>
      <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
        <i class="fa fa-angle-right"></i>
      </a>
    </div>
    </div>
  </div>

</div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.4.4/parsley.min.js"></script>
    
    <script>
    $(document).ready(function(){
        
      $('#Login-Form').parsley();
      $('#Signin-Form').parsley();
      $('#Forgot-Password-Form').parsley();
          
      $('#signupModal').click(function(){             
        $('#login-modal-content').fadeOut('fast', function(){
           $('#signup-modal-content').fadeIn('fast');
        });
      });
                  
      $('#loginModal').click(function(){                
        $('#signup-modal-content').fadeOut('fast', function(){
           $('#login-modal-content').fadeIn('fast');
        });
      });
            
      $('#FPModal').click(function(){             
        $('#login-modal-content').fadeOut('fast', function(){
           $('#forgot-password-modal-content').fadeIn('fast');
        });
      });
            
      $('#loginModal1').click(function(){               
        $('#forgot-password-modal-content').fadeOut('fast', function(){
           $('#login-modal-content').fadeIn('fast');
        });
      });
    
  });
    </script>    
  
</body></html>

<<?php 
?>