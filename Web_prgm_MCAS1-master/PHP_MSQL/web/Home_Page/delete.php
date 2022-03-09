<?php
    include('connection.php');

    if($con && isset($_POST['delete'])){

        $id=$_POST['sid'];
        $delete_query="DELETE FROM student WHERE id='$id'";
        $result=mysqli_query($con,$delete_query);

        if(!$result){

            $con_msg= "<p align='center'>Deletion Failed ".mysqli_error($con)."</p>";

        }
        else{
            $con_msg= "<p align='center'>Deletion Success!!!</p>";
        }

    }

    mysqli_close($con);

?>