<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'gyma');

if(isset($_POST['insertdata']))
{
    $planName = $_POST['planName'];
    $planDescription = $_POST['planDescription'];
    $planDuration = $_POST['planDuration'];
    $planMembers = $_POST['planMembers'];
    $planCost = $_POST['planCost'];
    $planTrainers = $_POST['planTrainers'];
    $ownerId = $_POST['ownerId'];

    $query = "INSERT INTO plan (`planName`,`planDescription`,`planDuration`,`planMembers`,`planCost`,`planTrainers`,`ownerId`) VALUES ('$planName','$planDescription','$planDuration','$planMembers','$planCost','$planTrainers','$ownerId')";
    $query_run = mysqli_query($connection, $query);


    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: crudX.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>