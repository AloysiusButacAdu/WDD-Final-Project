<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
    $_SESSION["login_status"] = "LOGOUT";
    $_SESSION["logged_in"] = "true";

    header("Location: index.php")
?>

</body>
</html>