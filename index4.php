<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap Login/Signup Modal Form Design</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        body {
    padding-top: 70px;
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
      
  /** validation */
      
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
    </style>

  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://www.codingcage.com" target="_blank">Coding Cage</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://www.codingcage.com" target="_blank">Home</a></li>
            <li><a href="http://www.codingcage.com/p/about.html" target="_blank">About</a></li>
            <li><a href="http://www.codingcage.com/p/contact-me.html" target="_blank">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="javascript:void(0)" data-toggle="modal" data-target="#login-signup-modal">Login/Signup</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  
    
    <!--Login, Signup, Forgot Password Modal -->
    <div id="login-signup-modal" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
    
      <!-- login modal content -->
        <div class="modal-content" id="login-modal-content">
        
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
            
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block btn-lg">LOGIN</button>
          </form>
        </div>
        
        <div class="modal-footer">
          <p>
          <a id="FPModal" href="javascript:void(0)">Forgot Password?</a> | 
          <a id="signupModal" href="javascript:void(0)">Register Here!</a>
          </p>
        </div>
        
       </div>
        <!-- login modal content -->
        
        <!-- signup modal content -->
        <div class="modal-content" id="signup-modal-content">
        
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
        
        <!-- forgot password content -->
         <div class="modal-content" id="forgot-password-modal-content">
        
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><span class="glyphicon glyphicon-lock"></span> Recover Password!</h4>
      </div>
        
        <div class="modal-body">
          <form method="post" id="Forgot-Password-Form" role="form">
          
            <div class="form-group">
                <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                <input name="email" id="email" type="email" class="form-control input-lg" placeholder="Enter Email" required data-parsley-type="email">
                </div>                     
            </div>
                        
            <button type="submit" class="btn btn-success btn-block btn-lg">
              <span class="glyphicon glyphicon-send"></span> SUBMIT
            </button>
          </form>
        </div>
        
        <div class="modal-footer">
          <p>Remember Password ? <a id="loginModal1" href="javascript:void(0)">Login Here!</a></p>
        </div>
        
      </div>        
        <!-- forgot password content -->

    
    
      <!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>
        <!--Login, Signup, Forgot Password Modal -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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
  </body>
</html>
