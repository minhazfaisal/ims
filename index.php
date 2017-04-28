<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IMS</title>
<!--======================== Css Links ============================================-->



  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/sheet.css">

</head>
<body>

    <div class="container">

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><i>MBC Foundation</i></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                         <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                         <li><a href="products.php">Products</a></li>
                         <li><a href="about.php">About US</a></li>
                         <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Log IN <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                               <li><a href="officials_login.php">Official's Log IN</a></li>
<!--                               <li><a href="customer_form.php">Customer Form</a></li>-->
<!--                               <li><a href="data_table.php">Data Table</a></li>-->
                               <li role="separator" class="divider"></li>
<!--                               <li><a href="logout.php">Log Out</a></li>-->
                           </ul>
                       </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/slide.jpg" alt="image" width="100%">
                    <div class="carousel-caption">
                        <h3>Where does it come from?</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                    </div>
                </div>
                <div class="item">
                    <img src="images/slide.jpg" alt="image" width="100%">
                    <div class="carousel-caption">
                            <h3>Where can I get some?</h3>
                            <p>.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="images/slide.jpg" alt="image" width="100%">
                    <div class="carousel-caption">
                        <h3>Where does it come from?</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>































    </div>
<!-- =============================================== Script ========================================================-->
<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>
