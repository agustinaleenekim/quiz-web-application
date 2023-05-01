<?php

require "vendor/autoload.php";

session_start();
// 2. Why do you think the session variable assignments are wrapped inside an if-else and try-catch statements?
// The session variable assignments may be wrapped inside if-else and try-catch statements for several reasons. 
// These include handling potential errors that may occur when setting session variables, checking if the 
// session variable already exists to avoid overwriting existing session data accidentally, and performing 
// conditional logic based on the value of an existing session variable. By wrapping session variable 
// assignments in these statements, the code can ensure that the application handles potential errors 
// gracefully, retains session data appropriately, and performs the appropriate actions based on the 
// user's session state.
try {
    if (isset($_POST['complete_name'])) {
        $_SESSION['complete_name'] = $_POST['complete_name'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['birthdate'] = $_POST['birthdate'];

        header('Location: quiz.php');
        exit;
    } else {
        throw new Exception('Missing the basic information.');
    }
} catch (Exception $e) {
    echo '<h1>An error occurred:</h1>';
    echo '<p>' . $e->getMessage() . '</p>';
}