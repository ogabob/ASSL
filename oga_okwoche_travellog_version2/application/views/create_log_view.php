<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/main.css">
</head>
<body class="">

</br>
</br>
</br>
</br>
<img src="/images/travellog.png" alt="" class="logo col-lg-offset-4 img-responsive" />
 
<?php



echo form_open('log_controller/add_log');

echo "<p> where: </br>";
echo form_input ('where');
echo "</p>";

echo "<p> when: </br>";
echo form_input ('when');
echo "</p>";

echo "<p> cost: </br>";
echo form_input ('cost');
echo "</p>";


$options = array(
    '1'=> '1',
    '2'=>'2',
    '3'=>'3',
    '4'=>'4',
    '5'=>'5',
);


echo "<p> rating: </br>";
echo form_dropdown ('rating',$options, '5');
echo "</p>";


echo "<p> when: </br>";
echo form_textarea ('experience');
echo "</p>";

echo "<p> when: </br>";
echo form_textarea ('recommendations');
echo "</p>";



echo "<p>";
echo form_submit ('submit', 'Save');
echo "</p>";





echo "<p>";
echo anchor('', 'Save & Share');
echo "</p>";

echo "</br>";
echo "</br>";


echo form_close();

?>

</body>
</html>