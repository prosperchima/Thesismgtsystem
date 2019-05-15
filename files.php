<?php
    //Get Filename
    $temp = explode(".", $_FILES["file"]["name"]);

    //Get Extension
    $extension = end($temp);

    $finfo = finfo_open(FILEINFO_MINE_TYPE);
    $mime = finfo_file($finfo, $_FILES["file"]["tmp_name"]);

    //Set file in upload folder
    //move_uploaded_file($_FILES["file"]["tmp_name"], getcwd() ."/uploads/". $name);
    move_uploaded_file($_FILES["file"]["tmp_name"],  "../../../../repository/files/others/posts". $name);

    //echo getcwd() ."/uploads/". $name;
    //Generate response
    $response = new Stdclass;
    $response->Link = "../repository/files/others/post/".  $name;
    echo stripslashes(json_encode($response));



  
    //referra
    <?php
    error_reporting(E_ALL & ~E_NOTICE);
    session_start();

//Action of the CONTACT form is been carried out here
//Declearing a variable and assigning the form field_name to it
//And the isset($_POST['']) alerts the php of the field entering

    if (isset ($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_text'])){
        $contact_name = $_POST['contact_name'];
       $contact_email = $_POST['contact_email'];
       $contact_text = $_POST['contact_text'];
  }
  if (!empty($contact_name) && !empty('$contact_email') && !empty('$contact_text')) {
      $to = 'chimaprosperukoma@gmail.com';
      $subject = 'contact form submitted';
      $message = '$contact_name. "\n" .$contact_text';
      $headers = '$contact_email';
      // if (strlen('contact_name')>10) {
      //     echo 'max text is 10';
      // }
  
      if (@mail($to, $subject, $message, $headers)) {
           'Thanks for contacting us.';
      } else{
           'Sorry an error occured';
      }
  } else {
           'All fields required';
  
  }
  //Connection to the database
  $db = new mysqli('localhost', 'root', '','databoard');
      
     
   $db->query("INSERT INTO `users` ( `contact_name`, `contact_email`, `contact_message`) 
   VALUES ('$contact_name', '$contact_email', '$contact_text')");
  ?>

  <?php

  //stage1 form
  //Declearing a variable and assigning the form field_name to it
  //And the isset($_POST['']) alerts the php of the field entering
  if (isset ($_POST['full_name']) && isset($_POST['reg_number']) && isset($_POST['department']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['ppt_file'])){
    $full_name = $_POST['full_name'];
    $reg_number = $_POST['reg_number'];
    $department = $_POST['department'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $ppt_file = $_POST['ppt_file'];

if (!empty($full_name) && !empty('$email') && !empty('$ppt_file') ) {
   $to = 'chimaprosperukoma@gmail.com';
   $subject = 'stage1 form received';
   $message = '$full_name. "\n" .$reg_number "\n" .$ppt_file';
   $headers = '$email';
   // if (strlen('contact_name')>10) {
   //     echo 'max text is 10';
   // }

   if (@mail($to, $subject, $message, $headers)) {
        'Thanks for contacting us.';
   } else{
        'Sorry an error occured';
   }
} else {
        'All fields required';

}
  }

 //Connection to database 
$db = new mysqli('localhost', 'root','','databoard');

//die();


//inserting a file into the database
$tmpfile = "";

$ext = "";

$e = explode(".", $_FILES['ppt_file']['name']);

if(count($e) > 1)
{
    $ext = $e[count($e) - 1];
}

$real_name = $_FILES['ppt_file']['name'];


$newName = md5(time()).".".$ext;


move_uploaded_file($_FILES['ppt_file']['tmp_name'],  "files/".$newName);

 $db->query("INSERT INTO pdgstage (full_name,reg_number,department,email,phone,file_name,sudoe) 
 VALUES ('$full_name', '$reg_number', '$department', '$email', '$phone','$real_name','$newName')");
// $db->query("INSERT INTO pdgstage (	full_name, 	reg_number, department, email, phone, file_name, sudoe)
// VALUES (' $full_name','$reg_number','$department','$email','$phone','' )");
?>

//see this
<?php
    error_reporting(E_ALL & ~E_NOTICE);
    session_start();

    if (isset ($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_text'])){
        $contact_name = $_POST['contact_name'];
       $contact_email = $_POST['contact_email'];
       $contact_text = $_POST['contact_text'];
  }
  if (!empty($contact_name) && !empty('$contact_email') && !empty('$contact_text')) {
      $to = 'chimaprosperukoma@gmail.com';
      $subject = 'contact form submitted';
      $message = '$contact_name. "\n" .$contact_text';
      $headers = '$contact_email';
      // if (strlen('contact_name')>10) {
      //     echo 'max text is 10';
      // }
  
      if (@mail($to, $subject, $message, $headers)) {
           'Thanks for contacting us.';
      } else{
           'Sorry an error occured';
      }
  } else {
           'All fields required';
  
  }
  
  $db = new PDO('mysql:host=localhost;dbname=databoard', 'root', '');
      
     
   $db->query("INSERT INTO `users` ( `contact_name`, `contact_email`, `contact_message`) 
   VALUES ('$contact_name', '$contact_email', '$contact_text')");
  ?>

  <?php
  include("dbconnect.php")
  $res = $db->query("SELECT * FROM pdgstage");

  $i=1;

  while(($row = $res->fetch_assoc()) !=null)

  $i++;
  ?>
  <?php
if(isset($_POST['contact_name']))
