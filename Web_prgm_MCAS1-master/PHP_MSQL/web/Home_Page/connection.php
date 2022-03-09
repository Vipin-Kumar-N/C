<?php

    $con= mysqli_connect('localhost','root','','student_data');

    if(!$con)
        $con_msg= "<p align='left'>Connection Failed".mysqli_connect_error()."</p>";


?>