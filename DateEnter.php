<?php
session_start();
$con=mysqli_connect("localhost","root","","orderstat2");

if(isset($_POST['purchase']))
{
    $start = date('m-d-y', strtotime($_POST['start_date']));
    $end = date('m-d-y', strtotime($_POST['end_date']));

    $query = "INSERT INTO `user_order`(`startdate`, `enddate`) VALUES ('$start','$end')";
    $run = mysqli_query($con, $query);

    if($run)
    {
        $_session['status'] = "Inserted";
    }
    else
    {
        $_session['status'] = "Failed";
    }
}
?>








        