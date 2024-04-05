<?php
include "database.php"; // Using database connection file here

if(isset($_POST['submit']))
{		
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $materials = $_POST['materials'];


    $insert = mysqli_query($db, "INSERT INTO `details`(`first_name`, `last_name`, `email`, `contact`, `materials`)
    VALUES ('$firstname', '$lastname', '$email', '$contact', '$materials')");


    if(!$insert)
    {
        echo mysqli_error($db);
    }
    else
    {
        echo "Data added successfully.";
    }
    
}

if (($_FILES['photo']['name']!="")){
    // Where the file is going to be stored
     $target_dir = "images/";
     $file = $_FILES['photo']['name'];
     $path = pathinfo($file);
     $filename = $path['filename'];
     $ext = $path['extension'];
     $temp_name = $_FILES['photo']['tmp_name'];
     $path_filename_ext = $target_dir.$filename.".".$ext;
     
    // Check if file already exists
    if (file_exists($path_filename_ext)) {
     echo nl2br("\n Sorry, photo with same name already exists.");
     }else{
     move_uploaded_file($temp_name,$path_filename_ext);
     echo nl2br("\n Photo added successfully.");
     }
    }

mysqli_close($db); // Close connection
?>