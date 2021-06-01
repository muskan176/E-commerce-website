<html>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="register.css" type="text/css">
<body>
    <div>
    <?php
        if(isSet($_POST["Create"]))
        {
    $email=$_POST["email"];
     $pass=$_POST["pass"];
     $name=$_POST["name"];
     $address=$_POST["address"];
     $state=$_POST["state"];
     $country=$_POST["country"];
     $phone=$_POST["phone"];
        }
    ?>
    </div>
    <img src="https://cdn.pixabay.com/photo/2018/03/21/22/21/girl-3248494_1280.jpg" style="width:30%">
    <div class="container">
        <h3>REGISTER</h3>
        <hr>
    <form action="register.php" method="post">
    <input type="email" placeholder="E-mail" name="email" required>
        <input type="password" placeholder="password" name="pass" required>
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="address"
               placeholder="Address" required>
        <input type="text" name="state"
               placeholder="State" required>
        <input type="text" name="country" placeholder="Country" required>
        <input type="number" name="phone"
               placeholder="Telephone" required>
        <br>
        <input type="checkbox"><p>I accept the privacy statement</p>
        
        <input type="submit" name="Create" class="btn btn-dark btn-large">
    </form>
    </div>
    </body>
</html>