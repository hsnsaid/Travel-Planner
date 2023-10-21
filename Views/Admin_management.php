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
        <div class="w-full p-5 text-xl text-white bg-orange-300 hover:duration-300 hover:ease-linear sm:text-2xl hover:transition-all">
            <a href="Admin_management.html">admin management</a>
        </div>
        <div class="w-full p-5 text-xl text-orange-500 hover:duration-300 hover:ease-linear sm:text-2xl hover:bg-orange-300 hover:text-white hover:transition-all">
            <a href="Admin_add_properties.html">add properties</a>
        </div>
        <div class="w-full p-5 text-xl text-orange-500 hover:duration-300 hover:ease-linear sm:text-2xl hover:bg-orange-300 hover:text-white hover:transition-all">
            <a href="Admin_add_plan.html">add plan</a>
        </div>
        <div class="w-full p-5 text-xl text-orange-500 hover:duration-300 hover:ease-linear sm:text-2xl hover:bg-orange-300 hover:text-white hover:transition-all">
            <a href="Admin_logout.html">logout</a>
        </div>
    </nav>
    <section class="text-gray-600 body-font">
      <div class="px-5 py-12 ml-16">
        <div class="mb-10 text-center">
          <h1 class="mb-2 text-3xl font-medium text-gray-900 sm:text-4xl title-font">Properties Table</h1>
        </div>
        <div class="w-2/3 px-4 ml-[18rem]">
          <table class="w-full text-left">
            <thead>
              <tr>
                <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 rounded-tl rounded-bl title-font">Name</th>
                <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">Type</th>
                <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">Destination</th>
                <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">Price</th>
                <th class="w-10 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 rounded-tr rounded-br title-font"></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data["data"] as $result){?>
              <tr>
                <td class="px-4 py-3 border-t-2 border-b-2 border-gray-200"><?php echo htmlspecialchars($result['name'])?></td>
                <td class="px-4 py-3 border-t-2 border-b-2 border-gray-200"><?php echo htmlspecialchars($result['type'])?></td>
                <td class="px-4 py-3 border-t-2 border-b-2 border-gray-200"><?php echo htmlspecialchars($result['destination'])?></td>
                <td class="px-4 py-3 text-lg text-gray-900 border-t-2 border-b-2 border-gray-200"><?php echo htmlspecialchars($result['Price'])?></td>
                <td class="w-10 text-center border-t-2 border-b-2 border-gray-200">
                    <a href="Admin_delete.html?id=<?php echo htmlspecialchars($result['id'])?>" class="mt-2 cursor-pointer">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                      <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" /></svg>
                    </a>
                </td>
              </tr>
              <?php }?>
            </tbody>
          </table>
        </div>
    </section>
</body>
</html>