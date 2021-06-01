<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="login.css"> 
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>
    <body>
      
        <div class="container">
        <div class="left">
            <span id="login">LOG IN</span>
            <hr>
        <form id="form" action="response.php" method="post">
            <div class="form-control">
            <input type="text" placeholder="username" id="user" name="username" required>
            </div>
            <br>
            <div class="form-control">
            <input type="password" placeholder="password" id="pass" name="password" required>
            </div>
            <br>
            <input class="btn btn-primary btn-lg" id="save" type="submit" name="submit">
        </form>
            <script>
            $(document).ready(function(){
                $('#save').click(function(){
                      $.ajax(
                          {
                          url:"response.php",
                          type:"POST",
                          data:$("#form").serialize(),
                          success:function(d){
                              alert(d);
                          }
                      }) ;
                   });
                });
            </script>
            </div>
            <div class="right">
                <span id="register">Register</span>
                <hr>
                <p>If you still don't have a GlamUp.com account, use this option to access the registration form.

                By giving us your details, purchasing in GlamUp.com will be faster and an enjoyable experience.</p>
                <a class="btn btn-primary btn-lg" href="register.php">Create Account</a>
            </div>
        </div>
    </body>
</html>