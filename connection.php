<?php 
    $server = "localhost";
    $db = "login";
    $username = "root";
    $password = "";
    $port = "3306";

    $conn = mysqli_connect($server, $username, $password, $db, $port);

    if(!$conn) {
        die("<br/> Connection failed: ".mysqli_connect_error());
    }
    echo "<br/>Connected succesfully.";

    if(isset($_POST['Login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        echo "<br/>username: ".$username;
        echo "<br/>password: ".$password;

        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 1) {
       
            echo "<br/>Login success!";
            echo "<br/>username: ".$username;
            echo "<br/>password: ".$password;
        }
        else {
            echo "<br/>Login Failed";
        }
    }

?>
