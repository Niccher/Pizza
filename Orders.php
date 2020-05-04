<?php   
  
include('Dbinit.php');
session_start();

if(isset($_SESSION['cuser_id'])){
    //echo "<script>window.location='Orders3.php'</script>";
}else {
  echo "<script>window.location='login.php'</script>";
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
    <link href="css/orders.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/mdb.css">

    <script type="text/javascript" src="js/jquery.js"></script>
</head>
  <body>

 <nav class="navbar navbar-default navbar-fixed-top">
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
            <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
            <li class="active"><a href="Orders.php">Orders</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Welcome  <?php echo ($_SESSION['cuser_id']); ?> </a></li>
        
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  <style type="text/css">
    .jumbotron {
      background-image: url("images/pizza3.jpg");
      background-size: cover;
      font-size: 24px;
      color: #fff;
  </style>

<div class="jumbotron">
      <div class="container-fluid text-center">
        <div class="container-fluid order" id="make-order">
        <div class="order-overlay">
          <div class="controls-top text-center" id="Order-now"> 
            <h2>Order Here</h2>
          </div>
          <h2>Order your pizza here and we will deliver it to you at your door step!</h2>
          <div class="row">
              <div class="col-sm-5">
                <form action="">
                    <label for="select">Select Your Flavor</label>
                    <br></br>
                    <select class="selectpicker">
                      <!-- <option selected value="choose">Choose your flavor</option> -->
                      <option value="pepperoni pizza">pepperoni pizza</option>
                      <option value="round cooked pizza">round cooked pizza</option>
                      <option value="brown pizza">brown pizza</option>
                      <option value="eight sliced pizza">eight sliced pizza</option>
                      <option value="cheese pizza">cheese pizza</option>
                      <option value="pizza with berries">pizza with berries</option>
                      <option value="Leafy Pizza">Leafy Pizza</option>
                      <option value="baked pizza">baked pizza</option>
                    </select>
                    <br></br>
                  <label for="select">Select Size</label>
                  <br></br>
                  <select class="browser-default custom-select custom-select-md mb-3" id="size">
                    <option selected value="0">Select size here</option>
                    <option value="large">Large -- $ 44</option>
                    <option value="medium">Medium -- $ 29</option>
                    <option value="small">Small -- $ 19</option>
                  </select>
                  <br></br>
                  <button type="submit" class="btn btn-orange proceed">Proceed</button>
                  
                </form>
              </div>
              <div class="col-sm-7">
                <div id="information">
                  <p>Your order will be processed and delivered within one hour of placing.</p>
                  <p>Incase of any comment of complaint, Please reach out to us as fast as possible.</p>
                  <p id="regards">From the Management</p>
                </div>
                <div class="choise">
                  <h2>Your Order is:</h2>
                  <div id="your-orders">
                    <table class="table table-sm  pizzatable">
                      <thead>
                        <tr>
                          <th scope="col">Name</th>
                          <th scope="col">Size</th>
                          <th scope="col">Total</th>
                        </tr>
                      </thead>
                      <tbody id="ordersmade">
                        <tr>
                          <td id="pizzaname"></td>
                          <td id="pizzasize"></td>
                          <td id="totals"></td>
                        </tr>                  
                      </tbody>
                    </table>
                    <p id="pizzatotal"></p>
                    <p id="totalbill"></p> 
                    <p id="addedprice">Delivery will cost $ 15</p>
                    <p id="finallmessage"></p>
                  </div>
                  <button class="btn btn-orange addPizza">Add Pizza</button>
                  <button class="btn btn-orange" id="checkout">Checkout</button>
                  <button class="btn btn-orange deliver">Home delivery?</button>
                </div>
                <div class="delivery">
                    <form action="">
                      <div class="form-group">
                        <input type="text" id="name" class="form-control mb-3" placeholder="Name">
                        <input type="number" id="phone" class="form-control mb-3" placeholder="Pnone Number">
                        <input type="text" id="location" class="form-control mb-3" placeholder="Location for delivery">
                        <button class="btn btn-orange" id="final-order">Place Order</button>
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
      thead th {
          color: black;
      }

      tbody td {
          background-color: #EEEEEE;
          color: #011;
      }

    </style>

    <div class="row">
      <div class="container-fluid text-center">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2"">
      <table class="table table-striped table-bordered .table-hover">
        <thead>
          <tr>
            <th scope="col">Date</th>
            <th scope="col">Pizzas</th>
            <th scope="col">Size</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Jan</td>
            <td>Otto</td>
            <td>Large</td>
            <td>$15</td>
          </tr>
          <tr>
            <td>Jan</td>
            <td>Otto</td>
            <td>Large</td>
            <td>$15</td>
          </tr>
        </tbody>
      </table>
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

    <script src="js/script.js"></script>
  
</body></html>