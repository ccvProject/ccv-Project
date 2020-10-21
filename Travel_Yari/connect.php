<?php
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $contact = $_POST['Mobile Number'];
    $destination = $_POST['Destination'];
    $description = $_POST['Description'];

    //connectivity

    $conn = new mysqli('localhost','root', '', 'ccv project');
    if($conn->connect_error){
        die('Connection failed:'.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into user(Name, Email, Mobile Number, Destination, Your Description)
        values(?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiss",$name, $email, $contact, $destination, $description);
        $stmt->execute();
        echo "Submit successfully";
        $stmt->close();
        $conn->close();
    }
    

?>