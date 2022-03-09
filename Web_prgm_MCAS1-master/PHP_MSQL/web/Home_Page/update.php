<?php
    include('connection.php');

    if($con && isset($_POST['update'])){

        $id=$_POST['sid'];
        $sname=$_POST['sname'];
        $course=$_POST['course'];
        $update_query="UPDATE student SET sname='$sname', course='$course' WHERE id='$id'";
        $result=mysqli_query($con,$update_query);

        if(!$result){

            $con_msg= "<p align='center'>Updation Failed ".mysqli_error($con)."</p>";

        }
        else{
            $con_msg= "<p align='center'>Updation Success!!!</p>";
            
        }

    }

    mysqli_close($con);

?>