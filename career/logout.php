<?php
// Start or resume the session.
session_start();

// Clear all session variables.
session_unset();

// Destroy the session.
session_destroy();

// Redirect the user to the login page after logout.
header("Location: login.php");
exit;
?>
