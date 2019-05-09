<?php
    $dbcon = mysqli_connect('localhost', 'root', '', 'test') 
    or die('ไม่สามารถติดต่อฐานข้อมูล MySQL ได้ '.  mysqli_connect_error());
    mysqli_set_charset($dbcon, 'utf8');    
    ?>
