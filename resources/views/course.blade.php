<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>Course</title>
</head>

<body>


<!-- component -->
<!-- item card -->
<div class="md:flex shadow-lg  mx-6 md:mx-auto my-40 max-w-lg md:max-w-2xl h-64">
    <img class="h-full w-full md:w-1/3  object-cover rounded-lg rounded-r-none pb-5/6" src="{{url('https://source.unsplash.com/random')}}" alt="course">
    <div class="w-full md:w-2/3 px-4 py-4 bg-white rounded-lg">
        <div class="flex items-center">
            <h2 class="text-xl text-gray-800 font-medium mr-auto">Your Travel Buddy</h2>
            <p class="text-gray-800 font-semibold tracking-tighter">
                only
                <i class="text-gray-600 line-through">60$</i>
                48$
            </p>
        </div>
        <p class="text-sm text-gray-700 mt-4">
            Lorem, ipsum dolor sit amet consectetur Amet veritatis ipsam reiciendis numquam tempore commodi ipsa suscipit laboriosam, sit earum at sequ adipisicing elit. Amet veritatis ipsam reiciendis numquam tempore commodi ipsa suscipit laboriosam, sit earum at sequi.
        </p>
        <div class="flex items-center justify-end mt-4 top-auto">
            <button class="bg-white text-red-500 px-4 py-2 rounded mr-auto hover:underline">Delete</button>
            <button class=" bg-gray-200 text-blue-600 px-2 py-2 rounded-md mr-2">Edit</button>
            <button class=" bg-blue-600 text-gray-200 px-2 py-2 rounded-md ">Publish</button>
        </div>
    </div>
</div>

</body>


</html>
