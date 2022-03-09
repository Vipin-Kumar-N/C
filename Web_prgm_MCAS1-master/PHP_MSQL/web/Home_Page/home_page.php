<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="home_page.css">
    <?php 
        $num_id='';
        $txt_sname='';
        $txt_course='';
        $con_msg='';
        $ids=$snames=$courses=array();
        include('connection.php'); 
        include('insert.php');
        include('update.php');
        include('delete.php');
        include('select.php');
        include('select_all.php');
    ?>
    
</head>
<body>
    
    <form action="" method="post">
        <table align="center">
            
            <thead>
                <tr>
                    <th colspan="2"> <h1>Student Details</h1> </th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>ID:</td>
                    <td> <input type="number" name="sid" value="<?php echo $num_id; ?>"> </td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td> <input type="text" name="sname" value="<?php echo $txt_sname; ?>"> </td>
                </tr>
                <tr>
                    <td>Course:</td>
                    <td> <input type="text" name="course" value="<?php echo $txt_course; ?>"> </td>
                </tr>

                <tr>
                    <td colspan="2" align="center"> 
                        <input type="submit" name="insert" value="INSERT"> 
                        <input type="submit" name="delete" value="DELETE"> 
                        <input type="submit" name="update" value="UPDATE"> 
                        <input type="submit" name="select" value="SELECT"> 
                        <input type="submit" name="select_all" value="SELECT ALL">
                        <input type="submit" name="reset" value="RESET"> 
                    </td>

                </tr>

                <tr>
                    <td colspan="2" style="padding-top:15px;padding-bottom:15px;">
                        <?php echo $con_msg; ?>
                    </td>
                </tr>
            </tbody>
            
        </table>
    </form>
    <?php

        if(isset($_POST['select_all']))
        {
            for($i=0;$i<$count;$i++)
            {
              echo  "ID : {$ids[$i]} <br>".
                "Student Name : {$snames[$i]} <br>".
                "Course : {$courses[$i]} <br>".
                "-----------------------------<br>";

            }
        }
    ?>
</body>
</html>