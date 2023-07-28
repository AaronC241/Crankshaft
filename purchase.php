<?php
session_start();
$con=mysqli_connect("localhost","root","","orderstat2");

if(mysqli_connect_error())
{
    echo"<script>
            alert('Error');
            window.location.href='Cart.php';
            </script>";
            exit();
}

if($_SERVER["REQUEST_METHOD"]="POST")
{
    if(isset($_POST['purchase']))
    {
        $query1="INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Address`, `Pay_mode`, `Start`, `end`, `Email`) VALUES ('$_POST[full_name]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]','$_POST[start]','$_POST[end]','$_POST[Email]')";
        if(mysqli_query($con,$query1))
        {
            $Order_Id=mysqli_insert_id($con);
            $query2="INSERT INTO `user_order`(`Order_id`, `Item_name`, `Price`, `Days`) VALUES (?,?,?,?)";
            $stmt=mysqli_prepare($con,$query2);
            if($stmt)
            {
                mysqli_stmt_bind_param($stmt,"isii",$Order_Id,$Item_name,$Price,$Days);
                foreach($_SESSION['cart'] as $key => $values)
                {
                    $Item_name=$values['Item_name'];
                    $Price=$values['Price'];
                    $Days=$values['Quantity'];
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                echo"<script>
            alert('Placed');
            window.location.href='Cart.php';
            </script>";
            }
            else
            {
                echo"<script>
            alert('sql error');
            window.location.href='Cart.php';
            </script>";
            }
        }
        else
        {
            echo"<script>
            alert('Error');
            window.location.href='Cart.php';
            </script>";

        }
    }
}

// if(isset($_POST['purchase']))
// {
//     $start = date('m-d-y', strtotime($_POST['start_date']));
//     $end = date('m-d-y', strtotime($_POST['end_date']));

//     $query3 = "INSERT INTO `user_order`(`startdate`, `enddate`) VALUES ('$start','$end')";
//     $run = mysqli_query($con,$query3);

//     if($run)
//     {
//         $_session['status'] = "Inserted";
//     }
//     else
//     {
//         $_session['status'] = "Failed";
//     }
// }


?>