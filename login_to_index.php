<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
    // $_SESSION["login_status"] = "LOGIN";
    unset($_SESSION["logged_in"]);
    unset($_SESSION["login_status"]);

    header("Location: index.php");
?>

</body>
</html>