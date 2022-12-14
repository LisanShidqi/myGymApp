<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'gyma');

    if(isset($_POST['updatedata']))
    {   
        $planId = $_POST['update_id'];
        $planName = $_POST['planName'];
        $planDescription = $_POST['planDescription'];
        $planDuration = $_POST['planDuration'];
        $planMembers = $_POST['planMembers'];
        $planCost = $_POST['planCost'];
        $planTrainers = $_POST['planTrainers'];
        $ownerId = $_POST['ownerId'];

        $query = "UPDATE plan SET planName='$planName', planDescription='$planDescription', planDuration='$planDuration', planMembers='$planMembers', planCost='$planCost', planTrainers='$planTrainers', ownerId='$ownerId' WHERE planId='$planId'  ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header('Location: crudX.php');
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>
