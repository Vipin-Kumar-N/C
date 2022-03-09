<?php
    include('connection.php');

    if($con && isset($_POST['select'])){


        $sid=$_POST['sid'];
        $select_query="SELECT id,sname,course FROM student WHERE id='$sid'";
        $result=mysqli_query($con,$select_query);

        if(!$result){
            $con_msg= "<p align='center'>Selection Failed ".mysqli_error($con)."</p>";
        }
        else{
            $con_msg= "<p align='center'>Selection Success!!! </p>";
        } 

        if(mysqli_num_rows($result)>0){

            while($row=mysqli_fetch_array($result))
            {
                $num_id=$row['id'];
                $txt_sname=$row['sname'];
                $txt_course=$row['course'];
            }
            
            
        }        

    }

    mysqli_close($con);

?>