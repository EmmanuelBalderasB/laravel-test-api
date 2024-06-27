<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://api.fontshare.com/v2/css?f[]=general-sans@200,300,301,400,500,600,700&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-b from-white to-slate-500 flex font-general-sans justify-center h-screen items-center">

    <div id="container"
        class="w-10/12 lg:w-4/6 xl:w-fit h-3/4 bg-opacity-25 bg-white shadow-md rounded-lg px-6 py-4 overflow-x-auto scroll-p-4">

        <p class="text-lg text-white w-fit bg-black rounded-xl px-3 py-2 mb-6">Dashboard</p>

        <!-- Search Form -->

        <form action="" method="get" class="flex flex-row bg-white border rounded-xl w-fit px-4 mb-4 divide-x-2">
            <!-- ID -->
            <div class="flex flex-col text-start px-2 bg-white">
                <label for="searchId">ID</label>
                <input type="text" name="searchId" id="searchId"
                    class=" bg-white px-2 py-1 w-auto active:border-none" placeholder="e.g. 123"
                    type="phone">
            </div>
            <!-- Name -->
            <div class="flex flex-col  text-start px-2 bg-white">
                <label for="searchName">Name</label>
                <input type="text" name="searchName" id="searchName"
                    class="bg-white px-2 py-1 w-auto active:border-none" placeholder="Jane Doe" type="text">
            </div>
            <!-- Email -->
            <div class="flex flex-col  text-start px-2 bg-white">
                <label for="searchEmail">Email</label>
                <input type="text" name="searchEmail" id="searchEmail"
                    class=" bg-white px-2 py-1 w-auto active:border-none" placeholder="example@example.com"
                    type="email">
            </div>
           <!-- STATES -->
            <div class="flex flex-col text-start bg-white px-2">
                <label for="searchState">State</label>
                <select name="searchState" id="searchState" class="bg-white">
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                </select>
            </div>
            <!-- By Zip Code -->
            <div class="flex flex-col  text-start bg-white px-2">
                <label for="searchZipCode">Zip Code</label>
                <input type="text" name="searchZipCode" id="searchZipCode"
                    class="bg-white px-2 py-1 w-auto active:border-none" placeholder="e.g. 12345"
                    type="text">
            </div>
            <!-- By Type -->
             <div class="flex flex-col text-start bg-white px-2">
                <label for="searchType">Type</label>
                <select name="searchType" id="searchType"
                    class=" px-2 py-1 bg-white">
                    <option value="all">All</option>
                    <option value="individual">Individual</option>
                    <option value="business">Business</option>
                </select>
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
            </tbody>
        </table>

    </div>
    @vite('resources/js/app.js')
</body>

</html>