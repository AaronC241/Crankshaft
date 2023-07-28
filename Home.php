<?php include("Navbar.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>
</head>
<body>

<!--Body-->


<div class="bg-white text-black overflow-hidden relative lg:flex lg:items-center">
    <div class="w-full py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20">
        <h2 class="text-3xl font-extrabold text-black sm:text-4xl">
            <span class="block">
            “Doesn’t matter what you ride,<br>give respect to get respect”
            </span>
        </h2>
        <p class="text-md mt-4 text-gray-400">
        Motorcycle riding is a combination of exhilaration, fear, relaxation, and pleasure that changes you forever. It’s physical & emotional pleasure, with a layer of anxiety & adrenaline.
        </p>
        <div class="lg:mt-0 lg:flex-shrink-0">
            <div class="mt-12 inline-flex rounded-md shadow">
                <button type="button" class="py-2 px-4  bg-green-500 hover:bg-green-700 focus:ring-green-500 focus:ring-offset-green-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg " onclick = "window.location.href='./register.php';">
                    Get started
                </button>
            </div>
        </div>
    </div>
    <div class="flex items-center gap-8 p-8 lg:p-24">
        <img src="Https://source.unsplash.com/820x500/?Ktm" class="w-1/2 rounded-lg" alt="Tree"/>
        <div>
            <img src="Https://source.unsplash.com/820x500/?Ducati" class="mb-8 rounded-lg" alt="Tree"/>
            <img src="Https://source.unsplash.com/820x500/?Suzuki" class="rounded-lg" alt="Tree"/>
        </div>
    </div>
</div>


      <!--Trust-->

      <section class="text-white body-font bg-gray-800 ">
  <div class="container px-5 py-24 mx-auto">
    <div class="text-center mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-white mb-4">Discover the largest and most trusted bike rental company</h1>
    </div>
    <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium text-black">Best vehicles</span>
        </div>
      </div>
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium text-black">Customer support</span>
        </div>
      </div>
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium text-black">Deposit safety</span>
        </div>
      </div>
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium text-black">Lowest prices</span>
        </div>
      </div>
      <div class="p-2 sm:w-1/2 w-full">
      </div>
      <div class="p-2 sm:w-1/2 w-full">
      </div>
    </div>
  </div>
</section>

<!--FAQ-->

<section class="text-black body-font bg-white">
	<div class="container flex flex-col justify-center p-4 mx-auto md:p-8">
		<p class="p-2 text-sm font-medium tracking-wider text-center uppercase">How it works</p>
		<h2 class="mb-12 text-4xl font-bold leading-none text-center sm:text-5xl">Frequently Asked Questions</h2>
		<div class="grid gap-10 md:gap-8 sm:p-3 md:grid-cols-2 lg:px-12 xl:px-32">
			<div>
				<h3 class="font-semibold">How do I book a ride?</h3>
				<p class="mt-1 dark:text-gray-400">You can select your ride type and date of pickup to search for availability at various stations in your city.Once you select a station and a bike, you can review your plan and the pricing to proceed to the payment.Post successful payment, you will receive your booking id.</p>
			</div>
			<div>
				<h3 class="font-semibold">Are the rides insured?</h3>
				<p class="mt-1 dark:text-gray-400">We do provide third party insurance with every bike to safeguard any damages. We provide insurance at a minimal cost and you should opt-in for the same to get coverage</p>
			</div>
			<div>
				<h3 class="font-semibold">What are the various modes of payment for my ride?</h3>
				<p class="mt-1 dark:text-gray-400">We promote the use of digital payments and accept payments from various UPI platforms and wallets, and all major credit and debit cards, and net banking.You can also pay in cash at our station on pickup.</p>
			</div>
			<div>
				<h3 class="font-semibold">What to do in case of malfunction and breakdowns?</h3>
				<p class="mt-1 dark:text-gray-400">For any malfunctions and breakdowns, we would like you to contact our Customer Care immediately and we would assign an expert or mechanic to rectify or to provide you with a replacement ASAP.All charges for emergency repairs are to be paid by the customer</p>
			</div>
		</div>
	</div>
</section>

    
<?php
include("Featured.php");
include("Footer.php"); ?>

</body>
</html>