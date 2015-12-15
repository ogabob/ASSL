<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<h1>log</h1>
<h3></h3>
<p><?php 

foreach ($logs as $log): ?>


<p>
<b>Trip to <?php echo $log['where'] ?> 
<?php endforeach ?>



 
</body>
</html>