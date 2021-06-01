<html>
    <head> <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="new.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    </head>
    <body>
         <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">GlamUp</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav pl-5">
      <li class="nav-item active">
        <a class="nav-link" href="new.php">NEW ARRIVALS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="women.php">WOMEN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="men.php">MEN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blogs.php">BLOGS</a>
      </li>
    </ul>
              <form class="form-inline pl-5 my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
            <div class="right">
                <a href="login.php"><i class="fa fa-user-o ml-2" aria-hidden="true"></i></a>
                <i class="fa fa-shopping-cart ml-100" aria-hidden="true"></i>
                <i class="fa fa-heart-o ml-100" aria-hidden="true"></i>
            </div>
  </div>
        </nav>
        <!--sidebar-->
        <div class="side">
            <h4>FILTER</h4>
            <hr>
            <h6>GENDER</h6>
            <hr>
            <h6>CATEGORIES</h6>
            <hr>
            <h6>SIZES</h6>
            <hr>
            <h6>COLOR</h6>
            <hr>
            <h6> PRODUCT TYPE</h6>
        </div>
        <br>
        <div class="container">
        <div class="row">
            <?php
 $con=mysqli_connect('localhost','root');
        mysqli_select_db($con,'new');
           
            $query="SELECT `name`, `image`, `price` FROM `tbl_product` order by id ASC";
            $queryfire=mysqli_query($con,$query);
            $num=mysqli_num_rows($queryfire);
            if($num>0){
                while($product=mysqli_fetch_array($queryfire)){?>
            <!--html code -->
            <div class="col-lg-4">
            <form>
            <div class="card" style="width: 18rem;">
                <img src="<?php echo $product['image'];?>" class="card-fluid">
                <div class="card-body">
                 <h6 class="card-title"><?php echo $product['name'];?></h6>
                </div>
                </div>    
            </form>
            </div>
            
            <?php
                }
            }
            ?>
           
            </div>
        </div>
    </body>
</html>