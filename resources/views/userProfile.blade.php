<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/profile.css')}}" rel="stylesheet">

    <title>profile</title>

</head>


<body>


<div class = "main_pro grid">

    <div class="bg-yellow-200 i_one flex justify-center items-center">

        <div class="flex w-10 h-8/12 bg-pink-700 justify-center items-center">
{{--            <img src="{{url('https://source.unsplash.com/random')}}" class="w-full h-full">--}}
        </div>

    </div>

{{--    ------------------- PROFILE PHOTO-----------------------}}


    <div class="bg-white i_two mb-5 mt-5">




        <div class = "flex h-8  rounded-b-full ">

            <span class = "bg-purple-400 w-2/5 flex flex-col justify-center t_r " >
                <p class="flex self-end font-bold " >Name</p>
            </span>

            <span class="bg-gray-400 w-full  flex justify-center items-center t_l">
                Javaughn Grant
            </span>

        </div>


        <div  class = "flex h-8 justify-center items-center bg-green-400 btn ">
            update
        </div>

        <div  class = "flex h-8 justify-center items-center bg-red-500 btn ">
            download
        </div>



    </div>

{{--    ---------------- THE BASIC INFORMATION-------------------}}

<!-- component -->
    <div class="text-gray-900 bg-gray-200">
        <div class="p-4 flex">
            <h1 class="text-3xl">
                Users
            </h1>
        </div>
        <div class="px-3 py-4 flex justify-center">
            <table class="w-full text-md bg-white shadow-md rounded mb-4">
                <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Name</th>
                    <th class="text-left p-3 px-5">Email</th>
                    <th class="text-left p-3 px-5">Role</th>
                    <th></th>
                </tr>
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5"><input type="text" value="user.name" class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                    <td class="p-3 px-5">
                        <select value="user.role" class="bg-transparent">
                            <option value="user">user</option>
                            <option value="admin">admin</option>
                        </select>
                    </td>
                    <td class="p-3 px-5 flex justify-end"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
                </tr>
                <tr class="border-b hover:bg-orange-100">
                    <td class="p-3 px-5"><input type="text" value="user.name" class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                    <td class="p-3 px-5">
                        <select value="user.role" class="bg-transparent">
                            <option value="user">user</option>
                            <option value="admin">admin</option>
                        </select>
                    </td>
                    <td class="p-3 px-5 flex justify-end"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
                </tr>

                <tr class="border-b hover:bg-orange-100">
                    <td class="p-3 px-5"><input type="text" value="user.name" class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                    <td class="p-3 px-5">
                        <select value="user.role" class="bg-transparent">
                            <option value="user">user</option>
                            <option value="admin">admin</option>
                        </select>
                    </td>
                    <td class="p-3 px-5 flex justify-end"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
                </tr>
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5"><input type="text" value="user.name" class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                    <td class="p-3 px-5">
                        <select value="user.role" class="bg-transparent">
                            <option value="user">user</option>
                            <option value="admin">admin</option>
                        </select>
                    </td>
                    <td class="p-3 px-5 flex justify-end"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
                </tr>
                <tr class="border-b hover:bg-orange-100">
                    <td class="p-3 px-5"><input type="text" value="user.name" class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                    <td class="p-3 px-5">
                        <select value="user.role" class="bg-transparent">
                            <option value="user">user</option>
                            <option value="admin">admin</option>
                        </select>
                    </td>
                    <td class="p-3 px-5 flex justify-end"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
                </tr>
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5"><input type="text" value="user.name" class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                    <td class="p-3 px-5">
                        <select value="user.role" class="bg-transparent">
                            <option value="user">user</option>
                            <option value="admin">admin</option>
                        </select>
                    </td>
                    <td class="p-3 px-5 flex justify-end"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
                </tr>
                <tr class="border-b hover:bg-orange-100">
                    <td class="p-3 px-5"><input type="text" value="user.name" class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                    <td class="p-3 px-5">
                        <select value="user.role" class="bg-transparent">
                            <option value="user">user</option>
                            <option value="admin">admin</option>
                        </select>
                    </td>
                    <td class="p-3 px-5 flex justify-end"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
                </tr>
                <tr class="border-b hover:bg-orange-100">
                    <td class="p-3 px-5"><input type="text" value="user.name" class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                    <td class="p-3 px-5">
                        <select value="user.role" class="bg-transparent">
                            <option value="user">user</option>
                            <option value="admin">admin</option>
                        </select>
                    </td>
                    <td class="p-3 px-5 flex justify-end"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>


</div>

{{------------- DIV THAT HOLDS THE PROFILE PHOTO AND BASIC INFORMATION-----------}}








</body>


</html>
