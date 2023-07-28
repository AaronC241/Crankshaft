<?php
 require("Database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <section>
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="" class="flex items-center mb-6 text-2xl font-semibold text-black-900 dark:text-black">
                <img src="./Logo/logo.jpg" alt="logo" height="45" width="45" class="bg-black-500 rounded-full">
               Crankshaft  
            </a>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 ">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-black-900 md:text-2xl dark:text-black">
                        Admin Login
                    </h1>
                    <form class="space-y-4 md:space-y-6" method="POST">
                        <div>
                            <label class="block mb-2 text-sm font-medium text-black-900 ">UserName</label>
                            <input type="text" name="AdminName" class="bg-black-50 border border-black-300 text-black-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-black-900 ">Password</label>
                            <input type="password" name="AdminPass"  class="bg-black-50 border border-black-300 text-black-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 ">
                        </div>
                        <button type="submit" name="Login" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-green-500 ">Login Now!</button>
                    </form>
                </div>
                
                <?php 

function input_filter($data)
{
  $data=trim($data);
  $data=stripslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}

if(isset($_POST['Login']))
{
  #filtering user input
  $AdminName=input_filter($_POST['AdminName']);
  $AdminPass=input_filter($_POST['AdminPass']);

  #escaping special symbols used in SQL statement
  $AdminName=mysqli_real_escape_string($con,$AdminName);
  $AdminPass=mysqli_real_escape_string($con,$AdminPass);

  #query template
  $query="SELECT * FROM `admin_login` WHERE `Admin_Name`=? AND `Admin_Password`=?";

  #prepared statment
  if($stmt=mysqli_prepare($con,$query))
  {
    mysqli_stmt_bind_param($stmt,"ss",$AdminName,$AdminPass); //binding value to template or prepared statement
    mysqli_stmt_execute($stmt); //executing prepared statemnt
    mysqli_stmt_store_result($stmt); //transfering the result of execution in $stmt
    if(mysqli_stmt_num_rows($stmt)==1)
    {
      session_start();
      $_SESSION['AdminLoginId']=$AdminName;
      header("location: Admin Panel.php");
    }
    else
    {
      echo"<script>alert('Invalid Admin Name or Password');</script>";
    }
    mysqli_stmt_close($stmt);
  }
  else
  {
    echo"<script>alert('SQL Query cannot be prepared');</script>";
  }

}

?>
        </div>
        </div>
      </section>
      </body>
</html>