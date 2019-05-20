<?php
    error_reporting(E_ALL & ~E_NOTICE);
    session_start();
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
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <table class="table">
                                                <caption>List of submitted project</caption>
                                                <thead>
                                                    <tr>
                                                    <th scope="col">S/N</th>
                                                    <th scope="col"> Name</th>
                                                    <th scope="col">Reg_Number</th>
                                                    <th scope="col">Email  </th>
                                                    <th scope="col">Ppt_file</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <!-- php code that returns form input from the database to the admin dashboard -->
                                                <?php               
                                                    include("dbconnect.php");
                                                    $res = $db->query("SELECT * FROM pdgstage");

                                                    $i = 1;

                                                    while(($row = $res->fetch_assoc()) != null)
                                                    {
                                                        echo "<tr class='table-dark'>
                                                            <th scope='row'>".$i."</th>
                                                            <td>".$row['full_name']."</td>
                                                            <td>".$row['reg_number']."</td>
                                                            <td>".$row['email']."</td>
                                                            <td><a href='files/".$row['sudoe']."'>".$row['file_name']."</a></td>
                                                            <td><button type='button' class='btn btn-success'>Successful</button></td>
                                                            <td><button type='button' class='btn btn-danger'>Unsuccessful</button></td>
                                                        </tr>";

                                                        $i++;
                                                    }
                                                ?>
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- <div class="container">
                                    <div class="row mt-3 ">
                                        <div class="col-3">

                                        </div>
                                    <div class="col-lg-6 col-md-6 col-xs-12 copy mt-3">
                                        <p >&copy 2018 ProsTech - Multipurpose & Creativity is in the mind by <span class="font-weight-bold"style="color:gray">Group3</span></p>
                                    </div>
                                    <div class="col-3">

                                    </div>
                                    </div>
                                </div> -->
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