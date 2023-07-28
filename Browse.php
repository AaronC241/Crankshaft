<?php include("Navbar.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Browse</title>
</head>
<body>

<!--PHOTO GALLERY-->
<section class="text-white-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap -m-4">
        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
          <a href="./KTM.php" class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="Https://source.unsplash.com/420x500/?KTM Motorcycles">
          </a>
          <div class="mt-4">
            <h3 class="text-white-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
            <h2 class="text-white-900 title-font text-lg font-medium">KTM</h2>
          </div>
        </div>
        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
          <a href="BMW.php" class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="Https://source.unsplash.com/420x260/?bmw bike">
          </a>
          <div class="mt-4">
            <h3 class="text-white-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
            <h2 class="text-white-900 title-font text-lg font-medium">Motorad Bmw</h2>
          </div>
        </div>
        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
          <a href="kawasaki.php" class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="Https://source.unsplash.com/420x260/?KAWASAKI Motorcycles">
          </a>
          <div class="mt-4">
            <h3 class="text-white-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
            <h2 class="text-white-900 title-font text-lg font-medium">Kawasaki</h2>
          </div>
        </div>
        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
          <a href="Royal.php" class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="Https://source.unsplash.com/420x260/?royal enfield Motorcycles">
          </a>
          <div class="mt-4">
            <h3 class="text-white-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
            <h2 class="text-white-900 title-font text-lg font-medium">Royal Enfield</h2>
          </div>
        </div>
        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
          <a href="Yamaha.php" class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="Https://source.unsplash.com/420x260/?Yamaha Motorcycles">
          </a>
          <div class="mt-4">
            <h3 class="text-white-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
            <h2 class="text-white-900 title-font text-lg font-medium">Yamaha</h2>
          </div>
        </div>
      </div>
    </div>
  </section>

    

  <?php
include("Featured.php");
include("Footer.php"); ?>
</body>
</html>