<?php
        require 'connectdb.php';
        
        if (empty($_POST['reserve'])) {
            echo "บันทึกข้อมูลเรียบร้อยแล้ว";
            exit();
        } else {
            $food_name = mysqli_real_escape_string($dbcon,$_POST['food_name']);
        }
        
        
        if ($result) {
            echo "เพิ่มข้อมูลเรียบร้อยแล้ว";
            
        } else {
            echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล".mysqli_errno($dbcon);
        }
        
    
    

?>


<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
    </head>
        <body>
            
        </body>
</html>

