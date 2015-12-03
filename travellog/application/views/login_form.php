<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<h1>Welome!</h1>
<h3>Please Login</h3>

<?php

echo form_open('login/validation');

echo validation_errors();

echo "<p> Email:";
echo form_input ('email');
echo "</p>";


echo "<p> Password:";
echo form_password ('password');
echo "</p>";

echo "<p>";
echo form_submit ('submit', 'Signin');
echo "</p>";

echo form_close();




?>
</body>
</html>