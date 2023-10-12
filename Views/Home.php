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
        <a href="Home.html" class="mr-5 text-orange-500 hover:text-orange-700">Home</a>
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
  <main class="container py-7 px-28">
    <h3 class="mb-2 text-2xl font-semibold text-gray-800">Your plans</h3>
    <section class="text-gray-600 body-font">
      <div class="container px-5 pt-5 mx-auto">
        <div class="flex flex-wrap -m-4">
          <div class="p-4 xl:w-1/3 md:w-1/2">
            <?php foreach($data['data'] as $plan){?>
              <div class="p-6 bg-white border border-gray-200 rounded-lg shadow">
                <div class="flex justify-between w-full">
                  <div class="inline-flex items-center justify-center h-10 px-3 mb-2 text-orange-500 bg-orange-100 rounded-full">
                      <p><?php echo htmlspecialchars($plan['title'])?></p>
                  </div>
                  <div class="flex gap-5">
                    <a href="upadate.html" class="mt-2 cursor-pointer">                                
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 7.5A2.25 2.25 0 017.5 5.25h9a2.25 2.25 0 012.25 2.25v9a2.25 2.25 0 01-2.25 2.25h-9a2.25 2.25 0 01-2.25-2.25v-9z" /></svg>
                    </a>
                    <a href="upadate.html" class="mt-2 cursor-pointer">                                
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                    </a>
                    <a href="delete.html" class="mt-2 cursor-pointer">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                      <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" /></svg>
                    </a>
                  </div>
                </div>
                <p class="text-base leading-relaxed"><?php echo htmlspecialchars($plan['description'])?></p>
                <p class="mt-1 text-sm leading-relaxed text-right"><?php echo htmlspecialchars($plan['start_date'])?></p>
              </div>
              <?php }?>
          </div>
        </div>
      </div>
   </section>
  </main>
</body>
</html>