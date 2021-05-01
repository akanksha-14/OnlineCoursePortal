<?php
    require "./data/config.php";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $course = $_POST['course'];

    $sql = "INSERT INTO user VALUES('$name','$email','$contact','$course');";
    if(mysqli_query($conn,$sql)){
        header("location:end.html");
    }
    else{
        echo mysqli_error($conn);
    }
    
?>
