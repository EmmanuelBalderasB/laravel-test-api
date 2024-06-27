<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://api.fontshare.com/v2/css?f[]=general-sans@200,300,301,400,500,600,700&display=swap" rel="stylesheet"> 
  @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-b from-white to-slate-500 flex font-general-sans justify-center h-screen items-center">

        <div id="container" class="w-10/12 lg:w-4/6 xl:w-fit h-3/4 bg-opacity-25 bg-white shadow-md rounded-lg px-6 py-4 overflow-x-auto scroll-p-4">
            
                <p class="text-lg text-white w-fit bg-black rounded-xl px-3 py-2 mb-6">Dashboard</p>
                <form action="" method="get" class="flex row">
                    <div class="flex flex-col text-start">
                        <label for="searchId">ID</label>
                        <input type="text" name="searchId" id="searchId" class="w-1/2 bg-white border-2 border-black rounded-lg px-2 py-1 mb-4" placeholder="e.g. 123" type="phone">
                    </div>
                    <div class="flex flex-col text-start">
                        <label for="searchName">Name</label>
                        <input type="text" name="searchName" id="searchName" class="w-1/2 bg-white border-2 border-black rounded-lg px-2 py-1 mb-4" placeholder="Jane Doe" type="text">
                    </div>
                </form>
                <table class="bg-white table-auto bg-opacity-85 border-black divide-x-2 min-w-full px-2">
                    <thead>
                        <tr class="divide-x-2">
                            <td class="text-start py-2 px-4 border-black" id="id">ID</td>
                            <td class="text-start py-2 px-4 border-black" id="name">Name</td>
                            <td class="text-start py-2 px-4 border-black" id="email">Email</td>
                            <td class="text-start py-2 px-4 border-black" id="address">Address</td>
                            <td class="text-start py-2 px-4 border-black" id="city">City</td>
                            <td class="text-start py-2 px-4 border-black" id="state">State</td>
                            <td class="text-start py-2 px-4 border-black" id="zip">Zip</td>
                            <td class="text-start py-2 px-4 border-black" id="type">Type</td>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        <!-- Table rows go here -->
                    </tbody>
                </table>
          
        </div>
 @vite('resources/js/app.js')
 </body>
</html>
