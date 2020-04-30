<?php   
  
include('Dbinit.php');
session_start();

if(isset($_SESSION['cuser_id'])){
    echo "<script>window.location='Orders.php'</script>";
}

if(isset($_POST["loginside"])){
    $log_eml=strip_tags(($_POST['login_email']));
    $log_pwd=strip_tags(($_POST['login_password']));

    echo "Email ". $log_eml;
    echo "Pwd ". $log_pwd;

    $Comp="SELECT * FROM Users WHERE Email='$log_eml' AND Password='$log_pwd' ";

        $Insd=mysqli_query($conni,$Comp) or die("\n".mysqli_error($conni));

        $coun=mysqli_num_rows($Insd);
        $rw=mysqli_fetch_assoc($Insd);
        $row = mysqli_fetch_array($Insd);
        if ($coun > 0) {
            $_SESSION['cuser_id'] = $log_eml;//$row['Admission'];
            echo "<script>window.location='Orders.php'</script>";
            
        }else{
            $varrr='<div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <i class="fa fa-info-circle"></i> Incorrect Combinations
                                </div>';
            echo $varrr;
        }
}

if(isset($_POST["registerinside"])){
  echo "<script>console.log('nothing selected;);</script>";
    if (!empty($_POST)) {
        $UsEml= mysqli_real_escape_string($conni , $_POST['EmailR']);
        $Uspwd = mysqli_real_escape_string($conni , $_POST['PasswordR']);
        $UsDate = date("Y-m-d h:i:sa");

        $inject="INSERT INTO Users (Email,Password,Date) VALUES ($UsEml','$Uspwd','$UsDate')";
        $nig=(mysqli_query($conni,$inject));


          if($nig === true){
            $var='<div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <i class="fa fa-info-circle"></i> You have Succesfully Create Account
                            </div>';
            echo $var;
          }
          else{
            echo mysqli_error($conni); 
          }
    }else{
        $varr='<div class="alert alert-warn alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <i class="fa fa-info-circle"></i> Blank Fields
                                    </div>';
        echo $varr;
    }
}

?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./res/img/emblem-office.ico">
    <title>Dummy Pizza</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="css/Pasted.css" rel="stylesheet">

    <script type="text/javascript" src="js/jquery.js"></script>
</head>
  <body>

    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <a class="navbar-brand" href="#">Dummy Pizza</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="Orders.php">Orders</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



<div class="jumbotron">
  <div class="container-fluid text-center">
    
 <div class="row">

      <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" method="POST" action="login3.php" role="form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" type="text" class="form-control" name="login_email" value="" placeholder="Email">                                        
                            </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="login-password" type="password" class="form-control" name="login_password" placeholder="Password">
                            </div>
                            
                            <div style="margin-top:10px" class="form-group">
                                <div class="col-sm-12 controls">
                                    <input type="submit" name="loginside" class="btn btn-primary" value="Login">
                                    OR
                                    <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                        <input class="btn btn-info" value="Create Account">
                                    </a>
                                </div>
                            </div>  
                            </form>         

                        </div>                     
                    </div>  
        </div>
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                     <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up by making your account</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"></div>
                        </div>  

                        <div style="padding-top:30px" class="panel-body" >

                          <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            <form id="signupform" class="form-horizontal" role="form" method="POST" action="index3.php">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                  
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="EmailR" placeholder="Create an Email Address">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="PasswordR" placeholder="Create a Password">
                                    </div>
                                </div>

                                <div style="margin-top:10px" class="form-group">
                                <div class="col-sm-12 controls">
                                    <input type="submit" name="registerinside" id="btn-signup" class="btn btn-primary" value="Create"> OR
                                    <a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">
                                            <input class="btn btn-info" value="Login">
                                        </a>
                                </div>
                            </div>                            
                                                                
                            </form>
                         </div>
                    </div>      
         </div> 
    </div>
    

  </div>


  </div>
  
</div>

<style type="text/css">
  #footer{
  background: #333333;
  color: #ffffff;
  text-align: center;
  padding: 20px;
  margin-top: 30px;
}
</style>
    <footer id="footer">
      <p>Dummy Pizza &copy;2020</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  
</body></html>