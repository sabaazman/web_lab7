<?php
include 'Database.php';
include 'User.php';

if (isset($_POST['submit']) && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
    // Create database connection
    $database = new Database();
    $db = $database->getConnection();

    // Sanitize inputs using mysqli_real_escape_string
    $matric = $db->real_escape_string($_POST['matric']);
    $password = $db->real_escape_string($_POST['password']);

    // Validate inputs
    if (!empty($matric) && !empty($password)) {
        $user = new User($db);
        $userDetails = $user->getUser($matric);

        // Check if user exists and verify password
        if ($userDetails && password_verify($password, $userDetails['password'])) {
            // Start session and store user information if needed
            session_start();
            $_SESSION['user'] = $userDetails;

            // Redirect to the read page
            header("Location: read.php");
            exit(); // Stop further execution
        } else {
            echo 'Login Failed';
        }
    } else {
        echo 'Please fill in all required fields.';
    }
}
?>
