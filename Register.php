<?php include("Navbar.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script> src="validation.js" defer</script>
</head>
<body>
    <section>
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="./home.php" class="flex items-center mb-6 text-2xl font-semibold text-black-900 dark:text-black">
                <img src="./Logo/logo.jpg" alt="logo" height="45" width="45" class="bg-black-500 rounded-full">
               Crankshaft  
            </a>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-black dark:border-black-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-black-900 md:text-2xl dark:text-black">
                        Create an account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="Process-signup.php" method="POST" id="signup" novalidate>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-black-900 dark:text-black">Your email</label>
                            <input type="email" name="email" id="email" class="bg-black-50 border border-black-300 text-black-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-black-700 dark:border-black-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                        </div>
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-black-900 dark:text-black">Name</label>
                            <input type="text" name="name" id="name" class="bg-black-50 border border-black-300 text-black-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-black-700 dark:border-black-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-black-900 dark:text-black">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-black-50 border border-black-300 text-black-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-black-700 dark:border-black-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                        <div>
                            <label for="password_confirmation" class="block mb-2 text-sm font-medium text-black-900 dark:text-black">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" class="bg-black-50 border border-black-300 text-black-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-black-700 dark:border-black-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                              <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-black-300 rounded bg-black-50 focus:ring-3 focus:ring-primary-300 dark:bg-black-700 dark:border-black-600 dark:focus:ring-primary-600 dark:ring-offset-black-800" required="">
                            </div>
                            <div class="ml-3 text-sm">
                              <label for="terms" class="font-light text-black-500 dark:text-black-300">I accept the <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a></label>
                            </div>
                        </div>
                        <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-green-500 ">Create an account</button>
                        <p class="text-sm font-light text-black-500 dark:text-black-400">
                            Already have an account? <a href="Login.php" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
      </section>

      <?php include("Footer.php"); ?>

      </body>
</html>