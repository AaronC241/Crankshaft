<?php include("Navbar.php");
$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/Database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: Home.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
                        Login
                    </h1>
                    <?php if ($is_invalid): ?>
                        <em>Invalid login</em>
                        <?php endif; ?>
                    <form class="space-y-4 md:space-y-6" method="POST" novalidate>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-black-900 dark:text-black">Your email</label>
                            <input type="email" name="email" id="email" class="bg-black-50 border border-black-300 text-black-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-black-700 dark:border-black-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                             <value="<?= htmlspecialchars($_POST["email"] ?? "") ?>>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-black-900 dark:text-black">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-black-50 border border-black-300 text-black-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-black-700 dark:border-black-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                        <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-green-500 ">Login Now!</button>
                    </form>
                </div>
            </div>
        </div>
      </section>

      <?php include("Footer.php"); ?>

      </body>
</html>