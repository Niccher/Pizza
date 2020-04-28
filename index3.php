<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="./res/img/emblem-office.ico">

    <title>Dummy Pizza</title>
    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


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
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
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
          <a class="btn btn-primary btn-lg" href="#" role="button">Drop your order</a>
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
  </style>

  <!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
              Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
              Register</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

            <!--Body-->
            <div class="modal-body mb-1">
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" id="modalLRInput10" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalLRInput11" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
              </div>
              <div class="text-center mt-2">
                <button class="btn btn-info">Log in <i class="fas fa-sign-in ml-1"></i></button>
              </div>
            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-center text-md-right mt-1">
                <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>

          </div>
          <!--/.Panel 7-->

          <!--Panel 8-->
          <div class="tab-pane fade" id="panel8" role="tabpanel">

            <!--Body-->
            <div class="modal-body">
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" id="modalLRInput12" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
              </div>

              <div class="md-form form-sm mb-5">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalLRInput13" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalLRInput14" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>
              </div>

              <div class="text-center form-sm mt-2">
                <button class="btn btn-info">Sign up <i class="fas fa-sign-in ml-1"></i></button>
              </div>

            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-right">
                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!--/.Panel 8-->
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login / Register Form-->

<!--<div class="row">

  <style type="text/css">
  body{
    background-color:#f1f1f1;
  }
  .ourTeam-hedding{
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../demo/hands-joined.jpg');
      height:200px;
      width:100%;
      background-size:100% 100%;
      background-repeat:no-repeat;
      background: linear-gradient(rgba(0,0,0,.10)); 
  }
  .ourTeam-hedding h1{
      color:#fff;
      padding:70px 0px;
      font-weight:900;
      z-index: 1;
  }
  .ourTeam-box{
      border-top: 6px solid #5DDDD3;
      background-color: #FFFFFF;
  }
  .section1{
      padding: 30px 0px 0px 0px;
  }
  .section1 img{
      border:5px solid #5DDDD3;
      padding:5px;
      border-radius:50%;
      height:170px;
      width: 170px;
  }
  .section2 h1{
      font-size:20px;
      color:#C1C1C1;
      margin:0px;
      border-bottom:2px solid #5DDDD3;
      display: inline-block;
      padding: 10px 0px;
  }
  .section2 p{
      background-color: #5DDDD3;
      display: inline-block;
      font-weight: bold;
      color:#fff;
      padding: 5px 15px;
      border-radius: 3px;
      margin-top: -20px;    
  }
  .section2 span{
      color:#979597;
  }
  .section2 label{
      background-color: #5DDDD3;
      padding: 8px 10px 8px 10px;
      color:#fff;
      font-weight: normal;
      margin: 30px 0px 35px 0px;
      border-radius: 2px;
  }
  .section3 p{
      padding: 10px 15px 0px 15px;
      font-size:12px;
      color:#c3c9c9;
  }
  .section4{
      padding:10px 0px 50px 0px;
  }
  .section4 i{
      color:#fff;
      padding:3px;
      border-radius: 2px; 
      font-size: 12px;
      background-color: #5DDDD3;
      cursor: pointer;
  }
  .section-info{
      border-top:6px solid #90DFAA;
  }
  .section-danger{
      border-top:6px solid #FD8469;
  }
  .section-info .section1 img{
      border:5px solid #90DFAA;
      padding:5px;
  }
  .section-info .section2 p{
      background-color: #90DFAA;
      color:#fff;
  }
  .section-danger .section2 p{
      background-color: #FD8469;
      color:#fff;
  }
  .section-danger .section1 img{
      border:5px solid #FD8469;
      padding:5px;
  }
  .section-info .section4 i{
      background-color: #90DFAA;  
  }
  .section-danger .section4 i{
      background-color: #FD8469;  
  }
  .section-info .section2 h1{
      border-bottom:2px solid #90DFAA;
  }
  .section-danger .section2 h1{
      border-bottom:2px solid #FD8469;
  }
  </style>

    <div class="container section-ourTeam">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="row section-success ourTeam-box text-center">
          <div class="col-md-12 section1">
            <img src="/demo/meet01.png">
          </div>
          <div class="col-md-12 section2">
            <p>Pizza Name</p><br>
          </div>
          <div class="col-md-12 section3">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="row section-success ourTeam-box text-center">
          <div class="col-md-12 section1">
            <img src="/demo/meet01.png">
          </div>
          <div class="col-md-12 section2">
            <p>Pizza Name</p><br>
          </div>
          <div class="col-md-12 section3">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="row section-success ourTeam-box text-center">
          <div class="col-md-12 section1">
            <img src="/demo/meet01.png">
          </div>
          <div class="col-md-12 section2">
            <p>Pizza Name</p><br>
            <h1>Level</h1><br>--
          </div>
          <div class="col-md-12 section3">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
            </p>
          </div>
        </div>
      </div>


    </div>
  </div>

</div>-->


    <!-- Footer -->
<footer class="page-footer font-small unique-color-dark pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <h5 class="mb-1">Register for free</h5>
      </li>
      <li class="list-inline-item">
        <a href="#!" class="btn btn-outline-white btn-rounded">Sign up!</a>
      </li>
    </ul>
    <!-- Call to action -->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body></html>