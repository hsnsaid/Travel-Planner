<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
  <header class="text-gray-600 border-gray-300 border-b-[1px] body-font">
    <div class="container flex flex-col flex-wrap items-center p-3 mx-auto md:flex-row">
      <a class="flex items-center mb-4 font-medium text-gray-900 title-font md:mb-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 p-2 text-white bg-orange-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">easy Travel</span>
      </a>
      <nav class="flex flex-wrap items-center justify-center text-base md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400">
        <a href="Home.html" class="mr-5 hover:text-orange-700">Home</a>
        <a href="plan.html" class="mr-5 hover:text-orange-600">plan</a>
        <a href="search.html" class="mr-5 text-orange-500 hover:text-orange-600">search</a>
        <a href="guides.html" class="mr-5 hover:text-orange-600">Travel guides</a>
      </nav>
      <a href="logout.html">
      <button class="inline-flex items-center px-3 py-1 mt-4 text-base text-white bg-orange-500 border-0 rounded focus:outline-none hover:bg-orange-600 md:mt-0">Log out
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </button>
      </a>
    </div>
  </header>
  <section class="mt-24">
    <h3 class="text-[2rem] font-bold text-center text-gray-800">Search and Explore to find your trip plan</h3>
    <form action="" method="POST" class="flex justify-center w-full mt-4 mb-3">
      <input type="text" placeholder="Search for a Destination" name="name" class="border-[1px] border-gray-300 rounded-md px-3 py-3 text-sm w-2/5 outline-none focus:border-orange-500 focus:bg-transparent focus:ring-2 focus:ring-orange-200">
    </form>
    <p class="mb-2 text-sm text-center text-gray-500">Or browse our most popular destinations:</p>
    <div class="flex justify-center w-full gap-2">
      <a href=""><button class="px-5 py-2 text-sm text-gray-700 bg-gray-300 rounded-full hover:bg-gray-400">Japen</button></a>
      <a href=""><button class="px-5 py-2 text-sm text-gray-700 bg-gray-300 rounded-full hover:bg-gray-400">America</button></a>
      <a href=""><button class="px-5 py-2 text-sm text-gray-700 bg-gray-300 rounded-full hover:bg-gray-400">Argentina</button></a>
    </div>
  </section>
</body>
</html>