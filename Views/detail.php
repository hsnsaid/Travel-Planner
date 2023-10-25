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
            <a href="search.html" class="mr-5 hover:text-orange-600">search</a>
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
  <section class="px-12 py-8">
    <h2 class="mb-3 text-3xl text-center"><?php echo htmlspecialchars($data["plan"][0]["title"])?> 
    </h2>
      <?php foreach($data["data"] as $data){?>
    <div class="p-3 mb-3 bg-gray-100 rounded-md shadow-md">
      <h3 class="text-3xl font-bold text-orange-500 ">
        <?php echo htmlspecialchars($data['name'])?>
    </h3>
      <h5><?php echo htmlspecialchars($data['type'])?></h5>
    </div>
    <?php } ?>
  </section>
</body>
</html>