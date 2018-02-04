<!-- DONE BY Nur Iffahizzati 16SIC048C -->
<?php
session_start();
if (isset($_SESSION['email'])) {
    session_destroy();
}

echo '<script type="text/javascript">alert("You have been logged out successfully!");</script>';
header("location: login.php");
?>
