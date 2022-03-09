<?php
    include('connection.php');

    if($con && isset($_POST['insert'])){

        $sname=$_POST['sname'];
        $course=$_POST['course'];
        $insert_query="INSERT INTO student(sname,course) VALUES ('$sname','$course')";
        $result=mysqli_query($con,$insert_query);
        
        if(!$result){

            $con_msg= "<p align='center'>Insertion Failed ".mysqli_error($con)."</p>";

        }
        else{
            $con_msg= "<p align='center'>Insertion Success!!!</p>";  
        }

    }

    mysqli_close($con);

?>