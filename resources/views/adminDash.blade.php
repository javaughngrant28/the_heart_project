<!doctype html>
<html lang="en" style="background-color: #95D4FD">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>List</title>
</head>

<body>


<!-- component -->
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap w-full mb-8">
            <div class="w-full mb-6 lg:mb-0">
                <h1 class="sm:text-4xl text-5xl font-medium title-font mb-2 text-white">Admin dashboard</h1>
                <div style="background-color: #8FB8EE" class="h-1 w-20 rounded"></div>
            </div>
        </div>

        <div class="flex flex-wrap -m-4 text-center w-full justify-center">
            <div class="p-4 sm:w-1/4 w-1/2">
                <div style="background-color: #8FB8EE" class=" rounded-lg p-2 xl:p-6">
                    <h2 style="color: #F9F871" class="title-font font-medium sm:text-4xl text-3xl ">1</h2>
                    <p class="leading-relaxed text-white font-bold">Pending users</p>
                </div>
            </div>

            <div class="p-4 sm:w-1/4 w-1/2">
                <div style="background-color: #8FB8EE" class=" rounded-lg p-2 xl:p-6">
                        <h2 style="color: #F9F871" class="title-font font-medium sm:text-4xl text-3xl ">2</h2>
                    <p class="leading-relaxed text-white font-bold">Enrolled</p>
                </div>
            </div>

            <div class="p-4 sm:w-1/4 w-1/2">
                <div style="background-color: #8FB8EE" class=" rounded-lg p-2 xl:p-6">
                    <h2 style="color: #F9F871" class="title-font font-medium sm:text-4xl text-3xl ">3</h2>
                    <p class="leading-relaxed text-white font-bold">Total Users</p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- component -->
<form
    class="container mb-2 flex mx-auto w-full items-center justify-center"
>
    <ul class="flex flex-col p-4 w-1/2">
        <li class="border-gray-400 flex flex-row">
            <div style="background-color: #8FB8EE; cursor: pointer;"
                class="select-none flex flex-1 items-center p-4 hover: rounded-2xl border-2 p-6
                hover:shadow-2xl border-yellow-200"
            >
                <button type="submit"  class="flex-1 pl-1 mr-16">
                    <div  class=" flex font-medium text-gray-700 justify-center items-center ">
                       course Name
                    </div>
                </button>
            </div>
        </li>

    </ul>
</form>



</body>


</html>
