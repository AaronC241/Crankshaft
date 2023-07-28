<?php
session_start();
// if(!isset($_SESSION['AdminLoginId']))
// {
//     header("location: Admin Login.php");
// } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Admin Panel</title>
    <?php
            include_once "Database.php";
        ?>
</head>
<body>

<!--Nav-Bar-->

<header class="text-white body-font font-sans bg-gray-800">
        <div class= "container mx-auto flex flex-wrap p-2 flex-col md:flex-row items-center bg-gray">
          <a class="flex title-font font-medium items-center text-white-900 mb-1 md:mb-0">
            <img src="./Logo/logo.jpg" height="80" width="80" class="bg-blue-500 rounded-full">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-2 text-3xl">Crankshaft</span>
          </a>
    <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-gray-900">Products</a>
      <a class="mr-5 hover:text-gray-900">Edit</a>
      <a class="mr-5 hover:text-gray-900">Add Products</a>
      <a class="mr-5 hover:text-gray-900">Orders</a>
    </nav>
    <form action="" method="POST">
    <button type="Submit" name="Logout" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Logout</button>
    </form>
  </div>
</header>

<!--Table-->

        <table class="table table-bordered">
  <thead>
    <tr>
    <th scope="col" class="px-6 py-3">Order No</th>
                <th scope="col" class="px-6 py-3">Customer Name</th>
                <th scope="col" class="px-6 py-3">Contact</th>
                <th scope="col" class="px-6 py-3">Address</th>
                <th scope="col" class="px-6 py-3">Bike</th>
                <th scope="col" class="px-6 py-3">Start</th>
                <th scope="col" class="px-6 py-3">Stop</th>
    </tr>
  </thead>

<!-- </table> -->
        <?php
            $query="SELECT * from order_manager,user_order";
            $user_result= mysqli_query ($con,$query);
            while($user_fetch=mysqli_fetch_assoc($user_result))
            {
                echo"
                <tr>
                <td>$user_fetch[Order_id]</td>
                <td>$user_fetch[Full_Name] </td>
                <td>$user_fetch[Phone_No]</td>
                <td>$user_fetch[Address]</td>
                <td>$user_fetch[Item_Name]</td>
                <td>$user_fetch[Start]</td>
                <td>$user_fetch[end]</td>
                </tr>";
            }
            ?>
    </table>

    <?php 
  if(isset($_POST['Logout']))
  {
    session_destroy();
  }
?>

    
</body>
</html>