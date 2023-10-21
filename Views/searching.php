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
    <h2 class="text-3xl text-center mb-3">going to <?php echo htmlspecialchars($data["search"][0]['destination'])?></h2>
      <div class="flex gap-2">
        <p class="mb-4">Fillter By:</p>
        <?php foreach($data["search"] as $type){?>
          <a href="fillter.html?fillter=<?php echo htmlspecialchars($type['type'])?>&name=<?php echo htmlspecialchars($type['destination'])?>"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">  <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 7.5A2.25 2.25 0 017.5 5.25h9a2.25 2.25 0 012.25 2.25v9a2.25 2.25 0 01-2.25 2.25h-9a2.25 2.25 0 01-2.25-2.25v-9z" /></svg></a>
        <p><?php echo htmlspecialchars($type['type'])?></p>
        <?php }?>
      </div>
      <?php foreach($data["search"] as $search){?>
    <div class="bg-gray-100 shadow-md mb-3 p-3 rounded-md">
      <h3 class="text-3xl text-orange-500 font-bold "><?php echo htmlspecialchars($search['name'])?></h3>
      <h5><?php echo htmlspecialchars($search['type'])?></h5>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-11.25a.75.75 0 00-1.5 0v2.5h-2.5a.75.75 0 000 1.5h2.5v2.5a.75.75 0 001.5 0v-2.5h2.5a.75.75 0 000-1.5h-2.5v-2.5z" clip-rule="evenodd" /></svg>
    </div>
    <?php } ?>
  </section>
</body>
</html>