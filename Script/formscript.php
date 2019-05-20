
  <?php

  session_start();

  //stage1 form
  //Declearing a variable and assigning the form field_name to it
  //And the isset($_POST['']) alerts the php of the field entering

  if (isset ($_POST['full_name']) && isset($_POST['reg_number']) && isset($_POST['department']) && isset($_POST['email']) && isset($_POST['phone']))
  {
        $full_name = $_POST['full_name'];
        $reg_number = $_POST['reg_number'];
        $department = $_POST['department'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $ppt_file = $_POST['ppt_file'];
    
        

        if (!empty($full_name) && !empty($email))
        {
            $to = 'chimaprosperukoma@gmail.com';
            $subject = 'stage1 form received';
            $message = '$full_name. "\n" .$reg_number "\n" .$ppt_file';
            $headers = '$email';

            // if (strlen('contact_name')>10) {
            //     echo 'max text is 10';
            // }

            if (@mail($to, $subject, $message, $headers))
            {
                    $_SESSION['error'] = 'Thanks for contacting us.';
            }
            else
            {
                    $_SESSION['error'] = 'Sorry an error occured';
            }
            /*
            else 
            {
                    $_SESSION['error'] = 'All fields required';
            }*/
        }

        

        //Connection to database 
        $db = new mysqli('localhost', 'root','','databoard');

        //die();


        //inserting a file into the database
        $tmpfile = "";
        $real_name = "";
        $ext = "";
        $newName = "";

        if(isset($_FILES['ppt_file']))
        {
            $e = explode(".", $_FILES['ppt_file']['name']);

            if(count($e) > 1)
            {
                $ext = $e[count($e) - 1];
            }

            $real_name = $_FILES['ppt_file']['name'];


            $newName = md5(time()).".".$ext;


            move_uploaded_file($_FILES['ppt_file']['tmp_name'],  "../files/".$newName);
        }

        $db->query("INSERT INTO pdgstage (full_name,reg_number,department,email,phone,file_name,sudoe) 
        VALUES ('$full_name', '$reg_number', '$department', '$email', '$phone','$real_name','$newName')");
}
$_SESSION ['prosper'] = "Your file has been successfully uploaded";
header('location:../pgdstage1.php');

