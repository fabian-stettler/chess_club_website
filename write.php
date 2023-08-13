<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['text'];


    //Database Connection
    $conn = new mysqli('localhost', 'root', '', 'tip');

    if($conn->connect_error){
        die('Connection Failes : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into guestbook(name, email, comment) values(?,?,?)");

        $stmt->bind_param("sss", $name, $email, $text);
        $stmt->execute();
        echo "Dein Beitrag wurde aufgenommen";
        $stmt->close();
        $conn->close();
    }
?>
<a href="gaestebuch.php"><br>Zurück zum Gästebuch</a>