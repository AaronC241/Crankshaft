<?php include("Navbar.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>

 <!--About-->
 <section class="text-white-600 body-font">
        <div class="container px-6 py-20 mx-auto flex flex-col">
          <div class="lg:w-4/6 mx-auto">
            <div class="rounded-lg h-64 overflow-hidden">
              <img alt="content" class="object-cover object-center h-full w-full" src="Https://source.unsplash.com/1200x500/?Motorcycles">
            </div>
            <div class="flex flex-col sm:flex-row mt-10">
              <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-white-200 text-white-400">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                  </svg>
                </div>
                <div class="flex flex-col items-center text-center justify-center">
                  <h2 class="font-medium title-font mt-4 text-white-900 text-lg">Aaron Coelho</h2>
                  <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
                  <p class="text-base">RD National student situated in Mumbai,Maharastra</p>
                </div>
              </div>
              <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-white-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
                <p class="leading-relaxed text-lg mb-4">Welcome to our bike rental website! We are passionate about providing a convenient and affordable way for people to explore their surroundings on two wheels.<br> Our website is designed to make renting a bike easy and hassle-free.
Our team consists of dedicated IT professionals who have developed and designed the website to meet the needs of bike enthusiasts and tourists alike.<br> We understand the importance of having a reliable bike for a safe and enjoyable ride, which is why we carefully maintain our rental fleet to ensure the highest quality bikes are available for our customers.<br>
We are committed to providing exceptional customer service and support.<br> Our team is always available to answer any questions or concerns you may have, provide recommendations for bike routes, and ensure that you have everything you need for a memorable ride.<br>
Thank you for choosing our bike rental website. We look forward to helping you explore and discover new places on two wheels.</p>
                <a class
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

<!-- component -->
<section class="text-gray-600 body-font relative">
  <div class="absolute inset-0 bg-gray-300">
    <iframe width="100%" height="100%" frameborder="0" marginheight="1" marginwidth="1" title="map" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.989763320197!2d72.83298711490103!3d19.06418768709465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c916d68399f7%3A0x7fb4b43fee5ee7d3!2sRD%20and%20SH%20National%20College%20and%20SWA%20Science%20College!5e0!3m2!1sen!2sin!4v1678008892514!5m2!1sen!2sin" style=""></iframe>
  </div>
  <div class="container px-5 py-24 mx-auto flex">
    <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
      <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Contact US</h2>
      <p class="leading-relaxed mb-5 text-gray-600">Any Bike Renting Issue? Feel Free to Contact us.</p>
      <div class="relative mb-4">
        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
        <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
      </div>
      <button class="text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-500 rounded text-lg">Submit</button>
    </div>
  </div>
</section>


    

<?php include("Footer.php"); ?>
</body>
</html>