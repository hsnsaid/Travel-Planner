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
        <a href="plan.html" class="mr-5 text-orange-500 hover:text-orange-600">plan</a>
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
  <section class="relative text-gray-600 body-font">
    <div class="container px-5 py-8 mx-auto">
      <div class="flex flex-col w-full mb-5 text-center">
        <h1 class="mb-1 text-2xl font-bold text-gray-900 sm:text-4xl title-font">link</h1>
      </div>
      <div class="mx-auto lg:w-1/2 md:w-2/3">
        <form method="post" class="flex flex-wrap -m-2">
          <div class="w-full p-2">
              <div class="relative">
                <label for="name" class="text-base leading-7 text-gray-600">name</label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($data['name'][0]['name'])?>" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-orange-500 focus:bg-white focus:ring-2 focus:ring-orange-200 "required>
                <input type="text" id="propertie_id" name="propertie_id" value="<?php echo htmlspecialchars($data['name'][0]['id'])?>" class="hidden"required>
              </div>
          </div>
          <div class="w-full p-2">
          <label for="title" class="text-base leading-7 text-gray-600">plan title</label>
            <select class="w-full p-4 text-lg" name="title" id="plan"> 
              <?php foreach($data['option'] as $plan){ ?>
                <option value="<?php echo htmlspecialchars($plan['title'])?>" name="title" class=""><?php echo htmlspecialchars($plan['title'])?></option>
              <?php }?>
            </select>
          </div>          
          <div class="w-full p-6">
            <button class="flex px-8 py-2 mx-auto text-lg text-white bg-orange-500 border-0 rounded focus:outline-none hover:bg-orange-600">Conform</button>
          </div>
        </form>
    </div>
  </section>
</body>
</html>