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
        <a href="guides.html" class="mr-5 text-orange-500 hover:text-orange-600">Travel guides</a>
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
  <section class="mt-12">
    <h3 class="text-[2rem] font-bold text-center text-gray-800">Explore travel guides and itineraries</h3>
    <form action="" class="flex justify-center w-full mt-4 mb-3">
      <input type="text" placeholder="Search for a Destination" class="border-[1px] border-gray-300 rounded-md px-3 py-3 text-sm w-2/5 outline-none focus:border-orange-500 focus:bg-transparent focus:ring-2 focus:ring-orange-200">
    </form>
    <p class="mb-2 text-sm text-center text-gray-500">Or browse our most popular destinations:</p>
    <div class="flex justify-center w-full gap-2">
      <a href=""><button class="px-5 py-2 text-sm text-gray-700 bg-gray-300 rounded-full hover:bg-gray-400">Japen</button></a>
      <a href=""><button class="px-5 py-2 text-sm text-gray-700 bg-gray-300 rounded-full hover:bg-gray-400">America</button></a>
      <a href=""><button class="px-5 py-2 text-sm text-gray-700 bg-gray-300 rounded-full hover:bg-gray-400">Argentina</button></a>
    </div>
  </section>
  <section class="text-gray-600 body-font">
  <div class="container px-5 py-20 mx-auto">
  <h5 class="mb-2 text-2xl font-bold text-gray-800">Recent guides</h5>
  <div class="flex flex-wrap -m-4">    
      <div class="p-4 md:w-1/3">
        <div class="h-full overflow-hidden border-2 border-gray-200 rounded-lg border-opacity-60">
          <img class="object-cover object-center w-full lg:h-48 md:h-36" src="images/Argentina.jpeg">
          <div class="p-6">
            <h2 class="mb-1 text-xs font-medium tracking-widest text-gray-400 title-font">Argentina</h2>
            <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">The Catalyzer</h1>
            <p class="mb-3 leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            <div class="flex flex-wrap items-center ">
              <a class="inline-flex items-center text-indigo-500 md:mb-2 lg:mb-0">Learn More
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </a>
              <span class="inline-flex items-center py-1 pr-3 ml-auto mr-3 text-sm leading-none text-gray-400 border-r-2 border-gray-200 lg:ml-auto md:ml-0">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>1.2K
              </span>
              <span class="inline-flex items-center text-sm leading-none text-gray-400">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>6
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
        <div class="h-full overflow-hidden border-2 border-gray-200 rounded-lg border-opacity-60">
          <img class="object-cover object-center w-full lg:h-48 md:h-36" src="images/Algeria.jpeg" alt="blog">
          <div class="p-6">
            <h2 class="mb-1 text-xs font-medium tracking-widest text-gray-400 title-font">Algeria</h2>
            <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">The 400 Blows</h1>
            <p class="mb-3 leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            <div class="flex flex-wrap items-center">
              <a class="inline-flex items-center text-indigo-500 md:mb-2 lg:mb-0">Learn More
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </a>
              <span class="inline-flex items-center py-1 pr-3 ml-auto mr-3 text-sm leading-none text-gray-400 border-r-2 border-gray-200 lg:ml-auto md:ml-0">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>1.2K
              </span>
              <span class="inline-flex items-center text-sm leading-none text-gray-400">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>6
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
        <div class="h-full overflow-hidden border-2 border-gray-200 rounded-lg border-opacity-60">
          <img class="object-cover object-center w-full lg:h-48 md:h-36" src="images/japen.jpg">
          <div class="p-6">
            <h2 class="mb-1 text-xs font-medium tracking-widest text-gray-400 title-font">Japen</h2>
            <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">Shooting Stars</h1>
            <p class="mb-3 leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            <div class="flex flex-wrap items-center ">
              <a class="inline-flex items-center text-indigo-500 md:mb-2 lg:mb-0">Learn More
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </a>
              <span class="inline-flex items-center py-1 pr-3 ml-auto mr-3 text-sm leading-none text-gray-400 border-r-2 border-gray-200 lg:ml-auto md:ml-0">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>1.2K
              </span>
              <span class="inline-flex items-center text-sm leading-none text-gray-400">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>6
              </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>