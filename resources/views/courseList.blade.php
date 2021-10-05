<!doctype html>
<html lang="en" style="background-color: #95D4FD;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <title>All courses</title>

</head>


<body>

<div class="flex h-8 w-full justify-center items-center btn rounded-none bg-blue-300 fixed z-10 hover:bg-yellow-200">
    <a class="w-full h-full flex justify-center
            items-center" href="{{route('home')}}">HOME</a>
</div>


<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">

        <div class="flex flex-wrap w-full mb-8">
            <div class="w-full mb-6 lg:mb-0">
                <h1  class="sm:text-4xl text-5xl font-bold font-medium title-font mb-2 text-white">Courses</h1>
                <div style="background-color: #8FB8EE;" class="h-1 w-20 rounded"></div>
            </div>
        </div>

        <div class="flex flex-wrap -m-4">

            @foreach($course as $index => $value)
            <a href="{{route('coursePage',$value['id'])}}" class="lg:w-1/4 p-4 w-1/2">
                <span class="block relative h-48 rounded overflow-hidden">
                    <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{url($value['c_photo'])}}">
                </span>
                <span class="flex w-full justify-center font-medium text-black">{{strtoupper($value['c_name'])}}</span>
            </a>


            @endforeach




        </div>

    </div>

</section>


</body>



</html>
