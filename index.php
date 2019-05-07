<?php

if (isset($_POST['login']))  {
    $dbNumber = "20151010176";
    $dbPassword = "password";

    $number = strip_tags($_POST["number"]);
    $number = strtolower($number);
    $password = strip_tags($_POST["password"]);

    if($number == $dbNumber && $password == $dbPassword) {
        $_SESSION['$username'] = $username;
        header('location:home.php');

    }else{
        echo"wrong username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DataBoard</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
      <!--Include fonts -->
		<link rel="stylesheet" href="fonts/icons_font.css" type="text/css"/> 
		<link rel="stylesheet" href="fonts/comfortaa/stylesheet.css" type="text/css"/> 
		<link rel="stylesheet" href="fonts/nunito/stylesheet.css" type="text/css"/> 
		<link rel="stylesheet" href="fonts/quicksand/stylesheet.css" type="text/css"/> 
		<link rel="stylesheet" href="fonts/ubuntu/stylesheet.css" type="text/css"/> 
		<link rel="stylesheet" href="fonts/worksans/stylesheet.css" type="text/css"/> 
		<link rel="stylesheet" href="fonts/sourcesanspro/stylesheet.css" type="text/css"/> 
		<link rel="stylesheet" href="fonts/montserrat/stylesheet.css" type="text/css"/> 
		<link rel="stylesheet" href="fonts/lato/stylesheet.css" type="text/css"/> 
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- External css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<body>
        <div class="container">
                <div class="row pt-5">
                    <div class="col-3"></div>
                        <div class="col-lg-6 col-md-6 col-xs-12 cover">
                            <div class="cover-2">
                                <img class="img-logo pb-2" src="images/Subtract (1).png">
                                <h3 class="h3-login pb-2">Login to DB</h3>
                                <p class="p-proceed pb-2">Enter the following to proceed</p>
                            </div>    
                                <div class="container">
                                        <form action="index.php" method="post">
                                                <div class="form-group">
                                                  <input type="number" name="number" class="form-control" id="reg-number" aria-describedby="emailHelp" placeholder="Enter Registration Number" required>
                                                </div>
                                                <div class="form-group">
                                                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                  <small id="emailHelp" class="form-text text-muted">We'll never share your password with anyone else.</small>  
                                                </div>
                                                <button type="submit" name="login" class="btn2 btn-login btn-primary">Login</button>
                                        </form>
                                    <p class="p-terms">By Loggin in you agree to <span class="tc"><a href="#">Terms & Conditions</a></span></br>and <span class="tc"><a href="#">Privacy Policy</a></span> of DB</p>
                                </div>
                        </div>
                        <div class="col-3"></div>
                </div>
            </div>    
        





    <!-- External JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
    <!-- <script></script>
        $(function () {
   $('body').on('click', '.odom-submit', function (e) {
       $(this.form).submit();
       $('#myModal').modal('hide');
   });
});
    </script> -->

</body>
</html>    