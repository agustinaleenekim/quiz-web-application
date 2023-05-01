<?php

require "vendor/autoload.php";

// 1. What does this function session_start() do to the application?
//  In PHP, the session_start() function is used to start a new or resume an existing session. 
// When called, this function will create a new session or resume an existing session by reading the 
// session ID from the client's request (usually from a cookie) and associating the session data with that ID.
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
</head>
<body>

	<h1>Analogy Exam Registration</h1>
	<h3>Kindly register your basic information before starting the exam.</h3>

	<form method="POST" action="register.php">
		Enter your full name:<br />
		<input type="text" name="complete_name" placeholder="Full Name" required />
		<br />
		Email:<br />
		<input type="email" name="email" required/>
		<br />
		Birthdate:<br />
		<input type="date" name="birthdate" required/>
		<br />
		<input type="submit" value="Register"/>
	</form>

</body>
</html>

<!-- DEBUG MODE -->
<pre>
<?php
var_dump($_SESSION);
?>
</pre>