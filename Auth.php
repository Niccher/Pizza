<?php 
  session_start(); 
  if (isset($_POST['btnCreateAcc'])) {
    echo "Creating you in";

  }

  if (isset($_POST['username'])) {
    //echo "Login you in";
    $query = "  SELECT * FROM Users WHERE Email = '".$_POST["username"]."'  AND Password = '".$_POST["password"]."'";  
    $result = mysqli_query($connect, $query);  
    if(mysqli_num_rows($result) > 0)  
    {  
         $_SESSION['username'] = $_POST['username'];  
         echo 'Yes';  
    }  
    else  
    {  
         echo 'No';  
    }  
  }


?>