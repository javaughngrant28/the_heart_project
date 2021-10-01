<!doctype html>
<html lang="en" style="background-color: #95D4FD">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>Course</title>
</head>

<body>



<div style=" width: 90%; background-color: #8FB8EE" class="md:flex shadow-lg  mx-6 md:mx-auto my-40">
    <img class="h-full w-full md:w-1/3 " src="{{url('https://source.unsplash.com/random')}}" alt="course">
    <div style="background-color: #8FB8EE" class="w-full md:w-2/3 px-4 py-4 rounded-lg">
        <div class="flex items-center">
            <h2 class="text-xl text-gray-800 font-medium mr-auto">Course Name</h2>
            <p class="text-gray-800 font-semibold tracking-tighter">
                PRICE: <span style="color: #F9F871" class = "font-medium">5,000JMD</span>
            </p>
        </div>
        <p class="text-sm text-gray-700 mt-4">
             -course description-
        </p>

        <p class="text-sm text-gray-700 mt-4">
            format:
        </p>

        <p class="text-sm text-gray-700 mt-4">
            location:
        </p>

        <p class="text-sm text-gray-700 mt-4">
            Awards:
        </p>

        <p class="text-sm text-gray-700 mt-4">
            start:

            end:
        </p>

        <div class="flex items-center justify-end mt-4 top-auto">
{{--            <button class="bg-white text-red-500 px-4 py-2 rounded mr-auto hover:underline">Delete</button>--}}
            <button class=" bg-gray-200 text-blue-600 px-2 py-2 rounded-md mr-2">Edit</button>
            <button class=" bg-green-600 text-gray-200 px-2 py-2 rounded-md ">Apply</button>
        </div>
    </div>
</div>

<!-- component -->
<div class="text-gray-900 bg-gray-200">
    <div class="p-4 flex">
        <h1 class="text-3xl">
            Course Applications
        </h1>
    </div>
    <div class="px-3 py-4 flex justify-center">
        <table class="w-full text-md bg-white shadow-md rounded">
            <tbody>
            <tr class="border-b">
                <th class="text-left p-3 px-5">Name</th>
                <th class="text-left p-3 px-5">status</th>
                <th class="text-left p-3 px-5"></th>
            </tr>
            <tr class="border-b hover:bg-orange-100 bg-gray-100">

                <td class="p-3 px-5">web dev</td>

                <td class="p-3 px-5">pending</td>

                <td class="p-3 px-5 flex justify-end">
                    <button type="button"
                            class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                        Approve
                    </button>

                    <button type="button"
                            class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                        Decline
                    </button>

                </td>

            </tr>

            </tbody>
        </table>
    </div>
</div>


</body>


</html>
