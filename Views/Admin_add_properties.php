<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="">
    <nav class="fixed w-1/5 h-full bg-neutral-900">
        <div class="flex items-center gap-3 mb-4 p-7">
            <img src="images/welcome.jpg" class="rounded-full h-14">
            <div>
                <h5 class="text-lg text-orange-500">housni said</h5>
                <p class="text-white">admin</p>            
            </div>
        </div>
        <div class="w-full p-5 text-xl text-orange-500 hover:duration-300 hover:ease-linear sm:text-2xl hover:bg-orange-300 hover:text-white hover:transition-all">
            <a href="Admin_management.html">admin management</a>
        </div>
        <div class="w-full p-5 text-xl text-white bg-orange-300 hover:duration-300 hover:ease-linear sm:text-2xl hover:transition-all">
            <a href="Admin_add_properties.html">add properties</a>
        </div>
        <div class="w-full p-5 text-xl text-orange-500 hover:duration-300 hover:ease-linear sm:text-2xl hover:bg-orange-300 hover:text-white hover:transition-all">
            <a href="Admin_add_plan.html">add plan</a>
        </div>
        <div class="w-full p-5 text-xl text-orange-500 hover:duration-300 hover:ease-linear sm:text-2xl hover:bg-orange-300 hover:text-white hover:transition-all">
            <a href="Admin_logout.html">logout</a>
        </div>
    </nav>
    <section class="p-10 text-gray-600 body-fon">
    <div class="px-5 py-8 ml-32">
      <div class="flex flex-col w-full mb-5 text-center">
        <h1 class="mb-1 text-2xl font-bold text-gray-900 sm:text-4xl title-font">Create a new properties</h1>
      </div>
      <div class="mx-auto lg:w-1/2 md:w-2/3">
        <form method="post" class="flex flex-wrap -m-2">
          <div class="w-full p-2">
              <div class="relative">
                <label for="name" class="text-sm leading-7 text-gray-600">name</label>
                <input type="text" id="name" name="name" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-orange-500 focus:bg-white focus:ring-2 focus:ring-orange-200 "required>
              </div>
          </div>
          <div class="w-1/2 p-2">
            <div class="relative">
              <label for="type" class="text-sm leading-7 text-gray-600">type</label>
              <input type="input" id="type" name="type" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-orange-500 focus:bg-white focus:ring-2 focus:ring-orange-200" required>
            </div>
          </div>
          <div class="w-1/2 p-2">
            <div class="relative">
              <label for="destination" class="text-sm leading-7 text-gray-600">destination</label>
              <input type="input" id="destination" name="destination" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-orange-500 focus:bg-white focus:ring-2 focus:ring-orange-200" required>
            </div>
          </div>
          <div class="w-full p-2">
              <div class="relative">
                <label for="Price" class="text-sm leading-7 text-gray-600">Price</label>
                <input type="text" id="Price" name="Price" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-orange-500 focus:bg-white focus:ring-2 focus:ring-orange-200 "required>
              </div>
          </div>
          <div class="w-full p-2 mt-3">
            <button class="flex px-8 py-2 mx-auto text-lg text-white bg-orange-500 border-0 rounded focus:outline-none hover:bg-orange-600">Button</button>
          </div>
        </form>
    </div>
  </section>
</body>
</html>