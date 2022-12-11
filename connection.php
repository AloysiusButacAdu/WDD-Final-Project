<?php 
    session_start();

    $server = "localhost";
    $db = "login";
    $username = "root";
    $password = "";
    $port = "3306";

    $conn = mysqli_connect($server, $username, $password, $db, $port);

    if(!$conn) {
        die("<br/> Connection failed: ".mysqli_connect_error());
    }

    if(isset($_POST['Login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 1) {
            header("Location: logout_to_index.php");
        }
        else {
            header("Location: login.php");
        }
    }

?>
