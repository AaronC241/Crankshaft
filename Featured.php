<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<section class="text-white-600 body-font">
        <div class="flex flex-col text-center w-full mb-1">
            <h1 class="sm:text-4xl text-3xl font-medium title-font mb-1 text-white-900">Featured!</h1>
          </div>
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-white-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="ktm/200.webp" alt="blog">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-white-400 mb-1">KTM</h2>
            <h1 class="title-font text-lg font-medium text-white-900 mb-3">KTM DUKE 200</h1>
            <p class="leading-relaxed mb-3"> The KTM 200 Duke is powered by 199.5cc BS6 engine which develops a power of 24.67 bhp and a torque of 19.3 Nm. With both front and rear disc brakes, KTM 200 Duke comes up with anti-locking braking system. This 200 Duke bike weighs 159 kg and has a fuel tank capacity of 13.4 liters.</p>
            <div class="flex items-center flex-wrap ">
            <form action="Cart Manage.php" method="POST">
            <button type="submit" name="Add_To_Cart" class="flex ml-auto text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded">Add To Cart</button>             </button>
            <input type="hidden" name="Item_Name" Value="DUKE 200">
            <input type="hidden" name="Price" Value="1000">
            </form>
            </div>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-white-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="BMW/g310.jpg" alt="blog">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-white-400 mb-1">BMW</h2>
            <h1 class="title-font text-lg font-medium text-white-900 mb-3">G 310 R</h1>
            <p class="leading-relaxed mb-3">The BMW G 310 R is powered by 313cc BS6 engine which develops a power of 33.52 bhp and a torque of 28 Nm. With both front and rear disc brakes, BMW G 310 R comes up with anti-locking braking system. This G 310 R bike weighs 164 kg and has a fuel tank capacity of 11 liters.</p>
            <div class="flex items-center flex-wrap">
            <form action="Cart Manage.php" method="POST">
            <button type="submit" name="Add_To_Cart" class="flex ml-auto text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded">Add To Cart</button>             </button>
            <input type="hidden" name="Item_Name" Value="G310R">
            <input type="hidden" name="Price" Value="1200">
            </div>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-white-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="Royal/Hunter.webp" alt="blog">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-white-400 mb-1">Royal Enfield</h2>
            <h1 class="title-font text-lg font-medium text-white-900 mb-3">Hunter 350</h1>
            <p class="leading-relaxed mb-3">Royal Enfield Hunter 350 is powered by 349.34cc BS6 engine which develops a power of 20.2 bhp and a torque of 27 Nm. With front disc and rear drum brakes, Royal Enfield Hunter 350 comes up with anti-locking braking system. This Hunter 350 bike weighs 177 kg and has a fuel tank capacity of 13 liters.</p>
            <div class="flex items-left flex-wrap ">
            <form action="Cart Manage.php" method="POST">
            <button type="submit" name="Add_To_Cart" class="flex ml-auto text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded">Add To Cart</button>             </button>
            <input type="hidden" name="Item_Name" Value="Hunter 350">
            <input type="hidden" name="Price" Value="1200">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    
</body>
</html>