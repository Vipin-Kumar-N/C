<?php
    include('connection.php');

    if($con && isset($_POST['select_all'])){

        
        $sid=$_POST['sid'];
        $selectall_query="SELECT id,sname,course FROM student";
        $result=mysqli_query($con,$selectall_query);
        $count=mysqli_num_rows($result);

        if(!$result){
            $con_msg= "<p align='center'>Selection all Failed ".mysqli_error($con)."</p>";
        }
        else{
            $con_msg= "<p align='center'>Selection all Success!!! </p>";
        } 

        if($count>0){

            while($row=mysqli_fetch_assoc($result))
            {
                array_push($ids,$row['id']);
                array_push($snames,$row['sname']);
                array_push($courses,$row['course']);
            }
            
            
        }

    }

    mysqli_close($con);

?>