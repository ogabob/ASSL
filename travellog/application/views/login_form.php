<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/main.css">
</head>
<body class="lp">

</br>
</br>
</br>
</br>
<img src="/images/travellog.png" alt="" class="logo col-lg-offset-4 img-responsive" />
 
<?php

// this is the associative array to add other attributes to the form such as the bootstrap css classes 
$grid = array(
    'class'=>'col-lg-4 col-lg-offset-4',
    'style'=>'background-color: rgba(192, 192, 192, 0.7);
            -webkit-border-radius: 5px 5px 5px 5px;
             border-radius: 5px 5px 5px 5px;'   
);
//this is the form command in codeigniter.


echo form_open('login/validation', $grid);



echo "<h1>Welome!</h1>";

echo "<h3>Please Login</h3>";

echo validation_errors();

echo "<p> Email: </br>";
echo form_input ('email');
echo "</p>";


echo "<p> Password: </br>";
echo form_password ('password');
echo "</p>";

// this is the associative array to add other attributes to the form such as the bootstrap css classes 

$primary = array(
    'class'=>'btn btn-primary col-md-2'
);

echo "<p>";
echo form_submit ('submit', 'Signin',$primary);
echo "</p>";


// this is the associative array to add other attributes to the form such as the bootstrap css classes 

$success = array(
    'class'=>'btn btn-success col-md-2 col-md-offset-1'
);

echo "<p>";
echo anchor('login/signup', 'signup', $success);
echo "</p>";

echo "</br>";
echo "</br>";
echo form_close();


?>

</body>
</html>