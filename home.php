<?php
    error_reporting(E_ALL & ~E_NOTICE);
    session_start();

    
    //define variables and set to empty values
     
    if (isset ($_POST['full_name']) && isset($_POST['reg_number']) && isset($_POST['department']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['ppt_file'])){
         $full_name = $_POST['full_name'];
         $reg_number = $_POST['reg_number'];
         $department = $_POST['department'];
         $email = $_POST['email'];
         $phone = $_POST['phone'];
         $ppt_file = $_POST['ppt_file'];
    
    // if (!empty($full_name) && !empty('$email') && !empty('$ppt_file') ) {
    //     $to = 'chimaprosperukoma@gmail.com';
    //     $subject = 'stage1 form received';
    //     $message = '$full_name. "\n" .$reg_number "\n" .$ppt_file';
    //     $headers = '$email';
    //     // if (strlen('contact_name')>10) {
    //     //     echo 'max text is 10';
    //     // }
    
    //     if (@mail($to, $subject, $message, $headers)) {
    //          'Thanks for contacting us.';
    //     } else{
    //          'Sorry an error occured';
    //     }
    // } else {
    //          'All fields required';
    
    // }
    $db = new PDO('mysql:host=localhost;dbname=databoard', 'root', '');
    if($db===true){
        echo'<script>aler("heyyyy")</script>';
    }
    // ("INSERT INTO `pgdstage1`(`id`, `full_name`, `reg_number`, `department`, `email`, `phone`, `ppt_file`)
    //  VALUES ([id],[$full_name],[$reg_number],[$department],[$email],[$phone],[$ppt_file])")
   
    // $db->query("INSERT INTO `pgdstage1` ( `full_name`, `reg_number`, `department`, `email`, `phone`, `ppt_file`) 
    // VALUES ('$full_name', '$reg_number', '$department', '$email', '$phone', '$ppt_file')");
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
        <section id="">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2 f-col">
                            <div class="container-fluid pro">
                                <img class="first-img" src="images/Subtract (1).png">
                                <h4 class="first-h4">Data <span class="board-color">Board</span></h4>
                            </div>
                        <hr class="line">
                            <div class="pt-2 home">
                                <p class=""><a class="home-button nav-link font-12" href="index.html">HOME</a></p>
                            </div>
                            <nav class="container navbar navbar-expand-lg navbar-light bg-transparent pt-3">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                                        <ul class="navbar-nav mt-2 mt-lg-0 pl-4">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link font-12 font-12  px- button" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PGD LEVEL</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                    <a class="dropdown-item font-14" href="pgdstage1.php">STAGE 1</a>
                                                    <a class="dropdown-item font-14" href="#">STAGE 2</a>
                                                    <a class="dropdown-item font-14" href="#">STAGE 3</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link font-12 px- button" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MASTERS LEVEL</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                    <a class="dropdown-item font-14" href="#">STAGE 1</a>
                                                    <a class="dropdown-item font-14" href="#">STAGE 2</a>
                                                    <a class="dropdown-item font-14" href="#">STAGE 3</a>
                                                    <a class="dropdown-item font-14" href="#">STAGE 4</a>
                                                    <a class="dropdown-item font-14" href="#">STAGE 5</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link font-12 px- button" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PHD LEVEL</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                    <a class="dropdown-item font-14" href="#">STAGE 1</a>
                                                    <a class="dropdown-item font-14" href="#">STAGE 2</a>
                                                    <a class="dropdown-item font-14" href="#">STAGE 3</a>
                                                    <a class="dropdown-item font-14" href="#">STAGE 4</a>
                                                    <a class="dropdown-item font-14" href="#">STAGE 5</a>
                                                    <a class="dropdown-item font-14" href="#">STAGE 6</a>
                                                    <a class="dropdown-item font-14" href="#">STAGE 7</a>
                                            </div>
                                        </li>
                                        <div class="settings pt-5 mt-5">
                                                <a href="#"><i class="fa fa-cog f-icon2 fa-1x mt-5"style="color:white" aria-hidden="true"></i></a>
                                                 <a href="#"><p class="trans3">Settings</p></a>
                                                 <i class=""></i>
                                        </div>
                                </nav>
                        </div>        
                        <div class="col-md-10 ">
                            <div class="container-fluid">
                                <div class="row">
                                        <div class="col first-row">
                                            <ul>
                                                <a href="#"><li> <img class="profile-pix" src="images/protech.png"></li></a>
                                                <a href="#"><li><p class="profile-name" >Prosper</p></li></a>
                                                <a href="index.php"><li class="logout-button"> <button class="logout-btn">Logout</button></li></a>
                                            </ul>
                                        </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col second-row">
                                        <ul class="sub-menu">
                                            <!-- <a href="#"><li><p class="" >HOME</p></li></a> -->
                                            <a href="#"><li><p class="prosper" >PROJECTS</p></li></a>
                                            <a href="login.php"><li><p class="prosper" >ABOUT US</p></li></a>
                                            <a href="#"><li><p class="prosper" >CONTACT US</p></li></a>             
                                        </ul>
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <a href="#"><div class="card design" style="width:100%;">
                                            <center><img class="card-img-top second-img mt-5" src="images/excess8.png" alt="Card image cap"></center>
                                            <center><p class="card-text pt-2"><a href="#">PGD LEVEL</a></p></center>
                                            <div class="card-body">
                                            <a href="#"><img style="width:100%;height:100%; " src="images/price-toon1.png" alt=""></a>
                                            </div></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">

                                    </div>
                                    <div class="col-md-4">
                                        <a href="#"><div class="card design s-hide" style="width:100%;">
                                            <center><img class="card-img-top second-img mt-5" src="images/excess9.png" alt="Card image cap"></center>
                                            <center><a href="#"><p class="card-text pt-2">MASTERS LEVEL</p></center>
                                            <div class="card-body">
                                                <a href="#"><img style="width:100%;height:100%; " src="images/price-toon2.png" alt=""></a>
                                            </div>
                                        </div></a>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-4">
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <a href="#"><div class="card design" style="width:100%;">
                                            <center><img class="card-img-top second-img mt-5" src="images/excess10.png" alt="Card image cap"></center>
                                            <center><p class="card-text pt-2"><a href="#">PHD LEVELS</a></p></center>
                                            <div class="card-body">
                                                <a href="#"><img style="width:100%;height:100%; " src="images/price-toon3n.png" alt=""></a>
                                            </div>
                                        </div></a>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row mt-3 ">
                                        <div class="col-3">

                                        </div>
                                    <div class="col-lg-6 col-md-6 col-xs-12 copy mt-3">
                                        <p >&copy 2018 ProsTech - Multipurpose & Creativity is in the mind by <span class="font-weight-bold"style="color:gray">Group3</span></p>
                                    </div>
                                    <div class="col-3">

                                    </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>        
        </section>
       

    


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