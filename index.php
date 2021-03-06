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
                    <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="orders.php">Orders</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <style type="text/css">
        .jumbotron {
            background-image: url("images/pizza3.jpg");
            background-size: cover;
            font-size: 24px;
            color: #fff;
        }
        
        .modal-header,
        .modal-body,
        .modal-footer {
            padding: 25px;
        }
        
        .modal-footer {
            text-align: center;
        }
        
        #signup-modal-content,
        #forgot-password-modal-content {
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
        
        .carousel .item .btn:hover,
        .carousel .item .btn:focus {
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
        
        .carousel-indicators li,
        .carousel-indicators li.active {
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
    </style>

    <div class="jumbotron">
        <div class="container-fluid text-center">
            <h1 class="display-3">Hello, wolcome to Dummy Pizza</h1>
            <p class="lead">This is the best place to pick your Pizzas and get them delivered to you.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="orders.php">Drop your order</a>
            </p>
        </div>

    </div>

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

    <style type="text/css">
        #footer {
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

</body>

</html>