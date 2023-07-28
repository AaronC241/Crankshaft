<?php 
session_start();

if (isset($_SESSION["user_id"])) {
    
  $mysqli = require __DIR__ . "/database.php";
  
  $sql = "SELECT * FROM user
          WHERE id = {$_SESSION["user_id"]}";
          
  $result = $mysqli->query($sql);
  
  $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>

<header class="text-white body-font font-sans bg-gray-800">
        <div class= "container mx-auto flex flex-wrap p-2 my-2 flex-col md:flex-row items-center bg-gray">
          <a class="flex title-font font-medium items-center text-white-900 mb-1 md:mb-0">
            <img src="./Logo/logo.jpg" height="80" width="80" class="bg-blue-500 rounded-full">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-2 text-3xl">Crankshaft</span>
          </a>
          <nav class= "md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:text-blue-900" href="./Home.php">Home</a>
            <a class="mr-5 hover:text-blue-900" href="./Browse.php">Browse</a>
            <a class="mr-5 hover:text-blue-900" href="./About.php">About us</a>
          </nav>

          <div class="inline-flex items-center bg-green-500 border-0 py-1 px-3 my-2 focus:outline-none hover:bg-white-200 rounded text-base mt-4 md:mt-0">
          <?php if (isset($user)): ?>
        
        <p><?= htmlspecialchars($user["name"]) ?></p>
        
        <p class="mx-1"><a href="logout.php"> Log out</a></p>
        <?php else: ?>
          <p><a href="login.php">Log in</a> or <a href="Register.php">sign up</a></p>
          <?php endif; ?>
          </div>
          
          <?php
          $count=0;
          if(isset($_SESSION['cart']))
          {
            $count=count($_SESSION['cart']);
          }
          ?>
          <button class="inline-flex items-center bg-blue-500 border-0 py-1 px-3 my-2 focus:outline-none hover:bg-white-200 rounded text-base mt-4 md:mt-0" onclick = "window.location.href='./cart.php';">Cart (<?php echo $count; ?>)</button>
          <!-- <button class="inline-flex items-center bg-red-500 border-1 py-1 px-3 my-2 focus:outline-none hover:bg-white-200 rounded text-base mt-4 md:mt-0" onclick = "window.location.href='./register.php';"
          >Login
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button> -->
        </div>
      </header>

</body>
</html>