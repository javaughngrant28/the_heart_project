<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/register.css')}}" rel="stylesheet">

    <title>Log In</title>

</head>

<body>

<div class="f_c lg:w-4/12 md:6/12 w-10/12 m-auto my-10 shadow-md">
    <div class="py-8 px-8 rounded-xl">
        <h1 class=" text-2xl mt-3 text-center text-white font-bold">Login</h1>
        <form action="" class="mt-6">
            <div class="my-5 text-sm">
                <label for="username" class="block font-normal text-white">Username</label>
                <input type="text" autofocus id="username" class="rounded-sm px-4 py-3 mt-3 focus:outline-none bg-gray-100 w-full" placeholder="Username" />
            </div>
            <div class="my-5 text-sm">
                <label for="password" class="block text-white">Password</label>
                <input type="password" id="password" class="rounded-sm px-4 py-3 mt-3 focus:outline-none bg-gray-100 w-full" placeholder="Password" />

            </div>

            <button class="block text-center text-white sub_min p-3 duration-300 rounded-sm w-full">Login</button>
        </form>

        <div class="flex md:justify-between justify-center items-center mt-10">
            <div style="height: 1px;" class="bg-gray-300 md:block hidden w-4/12"></div>
            <p class="md:mx-2 text-sm font-light text-white "> Or With Google </p>
            <div style="height: 1px;" class="bg-gray-300 md:block hidden  w-4/12"></div>
        </div>

        <div class="grid md:grid-cols-1 mt-7">
            <div class = 'flex w-full justify-center '>
                <button class=" border-2 border-white text-center w-1/2 text-black font-medium bg-white p-1 duration-300 rounded-sm hover:bg-blue-400 text-white border-2">Sign up with Google</button>
            </div>

        </div>

        <p class="mt-12 text-xs text-center font-light text-white"> Don't have an account? <a href="../auth/register.html" class="text-black font-medium"> Create One </a>  </p>

    </div>
</div>

</body>


</html>
