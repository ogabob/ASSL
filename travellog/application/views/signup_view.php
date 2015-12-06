<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/main.css">
</head>
<body>
<img src="/images/travellog.png" alt="" class="logo col-lg-offset-4 img-responsive" />

    <?php
// this is the associative array to add other attributes to the form such as the bootstrap css classes 

$grid = array(
    'class'=>'col-lg-4 col-lg-offset-4',
    'style'=>'background-color: rgba(192, 192, 192, 0.7);
            -webkit-border-radius: 5px 5px 5px 5px;
             border-radius: 5px 5px 5px 5px;'   
);

echo form_open('login/signup_validation', $grid);

echo "<h1>Signup</h1>";


echo validation_errors();

echo "<p> First Name: </br>";
echo form_input ('firstname');
echo "</p>";

echo "<p> Last Name: </br>";
echo form_input ('lastname');
echo "</p>";

echo "<p> Email: </br>";
echo form_input ('email');
echo "</p>";


echo "<p> Password: </br>";
echo form_password ('password');
echo "</p>";

echo "<p> Confirm Password: </br>";
echo form_password ('cpassword');
echo "</p>";


// this is the associative array to add other attributes to the form such as the bootstrap css classes 

$primary = array(
    'class'=>'btn btn-primary'
);

echo "<p>";
echo form_submit ('submit', 'Signup', $primary);
echo "</p>";


echo form_close();




?>   
</body>
</html>