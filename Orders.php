<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="./res/img/emblem-office.ico">

    <title>Dummy Pizza</title>
    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link href="css/Pasted.css" rel="stylesheet">
    <link href="css/orders.css" rel="stylesheet">

  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Dummy Pizza</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="Orders.php">Orders</a>
          </li>
        </ul>
      </div>
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
                  <select class="browser-default custom-select custom-select-md mb-3 name">
                    <!-- <option selected value="choose">Choose your flavor</option> -->
                    <option value="Chicken Tikka">Chicken Tikka</option>
                    <option value="PeriPeri Pizza">PeriPeri Pizza</option>
                    <option value="Raspberry Dessert Pizza">Raspberry Dessert Pizza</option>
                    <option value="Chicken Alfredo Pizza">Chicken Alfredo Pizza</option>
                    <option value="Sunchoke Pizza">Sunchoke Pizza</option>
                    <option value="Buffalo Chicken Sticks">Buffalo Chicken Sticks</option>
                  </select>
                <label for="select">Select Size</label>
                <select class="browser-default custom-select custom-select-md mb-3" id="size">
                  <option selected value="0">Select size here</option>
                  <option value="large">Large -- sh. 1200</option>
                  <option value="medium">Medium -- sh. 850</option>
                  <option value="small">Small -- sh. 600</option>
                </select>

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
                  <p id="addedprice">Delivery will cost sh. 150</p>
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

      <script src="js/mdb.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>

</body>
</html>