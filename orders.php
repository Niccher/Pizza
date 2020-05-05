<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./res/img/emblem-office.ico">
    <title>Dummy Pizza</title>

    <link href="https://fonts.googleapis.com/css?family=Arima+Madurai|Cormorant|Eczar|El+Messiri|Itim|Sancreek|Wallpoet&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="3/css/mdb.min.css">
    <link rel="stylesheet" href="3/css/bootstrap.css">
    <link rel="stylesheet" href="3/css/wickedcss.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="3/css/styles.css">

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
        <li><a href="#">Welcome  Esteemed Customer </a></li>
        
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
    }

    .navbar-default {
      background-color: #685e5e;
      border-color: #a9a9a9;
    }
    .navbar-default .navbar-brand {
      color: #ecf0f1;
    }
    .navbar-default .navbar-brand:hover,
    .navbar-default .navbar-brand:focus {
      color: #040000;
    }
    .navbar-default .navbar-text {
      color: #ecf0f1;
    }
    .navbar-default .navbar-nav > li > a {
      color: #ecf0f1;
    }
    .navbar-default .navbar-nav > li > a:hover,
    .navbar-default .navbar-nav > li > a:focus {
      color: #040000;
    }
    .navbar-default .navbar-nav > .active > a,
    .navbar-default .navbar-nav > .active > a:hover,
    .navbar-default .navbar-nav > .active > a:focus {
      color: #040000;
      background-color: #a9a9a9;
    }
    .navbar-default .navbar-nav > .open > a,
    .navbar-default .navbar-nav > .open > a:hover,
    .navbar-default .navbar-nav > .open > a:focus {
      color: #040000;
      background-color: #a9a9a9;
    }
    .navbar-default .navbar-toggle {
      border-color: #a9a9a9;
    }
    .navbar-default .navbar-toggle:hover,
    .navbar-default .navbar-toggle:focus {
      background-color: #a9a9a9;
    }
    .navbar-default .navbar-toggle .icon-bar {
      background-color: #ecf0f1;
    }
    .navbar-default .navbar-collapse,
    .navbar-default .navbar-form {
      border-color: #ecf0f1;
    }
    .navbar-default .navbar-link {
      color: #ecf0f1;
    }
    .navbar-default .navbar-link:hover {
      color: #040000;
    }
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
                <select class="browser-default custom-select custom-select-md mb-3 name">
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
              <label for="select">Select Size</label>
              <select class="browser-default custom-select custom-select-md mb-3" id="size">
                <option selected value="0">Select size here</option>
                <option value="large">Large -- $ 44</option>
                    <option value="medium">Medium -- $ 29</option>
                    <option value="small">Small -- $ 19</option>
              </select>
              <label for="crust">Choose your favorite Crust!</label>
                <select class="browser-default custom-select custom-select-md mb-3" id="crust">
                    <option selected value="0">Select your preferred crust!</option>
                  <option value="Crispy">Crispy -- $ 3</option>
                  <option value="Stuffed">Stuffed -- $ 4</option>
                  <option value="Gluten-free">Gluten-free-- $ 5</option>
                </select>
              <button type="submit" class="btn btn-orange proceed">Proceed</button>
              
            </form>
          </div>
          <div class="col-sm-7">
            <div id="information">
              <p>Your order will be processed and delivered within one hour of placing.</p>
              <p>Make sure you have the total amout for the order during order delivery delivery.</p>
              <p id="regards">Regards, Management</p>
            </div>
            <div class="choise">
              <h2>Your Order is:</h2>
              <div id="your-orders">
                <table class="table table-sm  pizzatable">
                  <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Size</th>
                      <th scope="col">Crust</th>
                      <th scope="col">Total</th>
                    </tr>
                  </thead>
                  <tbody id="ordersmade">
                    <tr>
                      <td id="pizzaname"></td>
                      <td id="pizzasize"></td>
                      <td id="pizzacrust"></td>
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
                    <input type="number" id="phone" class="form-control mb-3" placeholder="Telephone Number">
                    <input type="text" id="location" class="form-control mb-3" placeholder="Location">
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

    <script src="3/js/mdb.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="3/js/script.js"></script>
  
</body></html>