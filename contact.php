<?php

include("connection.php");

if(isset($_POST['fullname'])){

    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);

    $sql = "INSERT INTO registration (fullname, email, subject)
            VALUES ('$fullname', '$email', '$subject' )";

    if(mysqli_query($conn, $sql)){
        echo "
        
            alert('Message sent successfully!');
    

        ";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

}

?>