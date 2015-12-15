<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<h1>Dashboard</h1>
<h3></h3>
<p><?php foreach ((array)$records as $row):?></p>
  <p>Welcome <?php echo $row->firstname;?></p>
  <p>Welcome <?php echo $row->where;?></p>
  <p>
  <?php echo anchor('login/log', 'select');?>
 </p>
 <?php endforeach; ?> 
   
<?php
    echo "<pre>";
    print_r($this->session->all_userdata());
    echo "</pre>";
    ?>
    
      
    <?php
       
       echo anchor('login/logout', 'logout');      
?>


    
    
    <?php
       
       echo anchor('login/log', 'New Log');      
?>


 
</body>
</html>