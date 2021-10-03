<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <title>Update</title>


    <!-- component -->
    <div class="md:p-12 bg-indigo-100 flex flex-row flex-wrap">
        <form action="{{route('updateProfileR')}}" method = Post autocomplete="off" enctype="multipart/form-data"
              class="md:w-1/2-screen m-0 p-5 bg-white w-full tw-h-full shadow md:rounded-lg">

            @csrf

            <div class="text-2xl text-indigo-900">Profile <small class="pl-2 text-gray-500">Any field can be empty and your information will be unchanged </small></div>

            <div class="flex-col flex py-3">
                <label class="pb-2 text-gray-700 font-semibold">First Name</label>
                <input type="text" name="firstName"
                       class="p-2 shadow rounded-lg bg-gray-500 outline-none focus:bg-black" placeholder="{{auth()->user()->f_name}}">
            </div>

            <div class="flex-col flex py-3">
                <label class="pb-2 text-gray-700 font-semibold">Last Name</label>
                <input type="text" name="lastName"
                       class="p-2 shadow rounded-lg bg-gray-500 outline-none focus:bg-black" placeholder="{{auth()->user()->l_name}}">
            </div>

            <div class="flex-col flex py-3">
                <label class="pb-2 text-gray-700 font-semibold">Email</label>
                <input type="text" name='email' class="p-2 shadow rounded-lg bg-gray-500 outline-none focus:bg-black"
                       placeholder="{{auth()->user()->email}}">
            </div>

            <div class="flex-col flex py-3">
                <label class="pb-2 text-gray-700 font-semibold">TRN </label>
                <input type="text" name='trn' placeholder="{{auth()->user()->trn}}"
                       class="p-2 shadow rounded-lg bg-gray-500 outline-none focus:bg-black">
            </div>

            <div class="flex-col flex py-3">
                <label class="pb-2 text-gray-700 font-semibold">Adress </label>
                <input type="text" name='address' placeholder="{{auth()->user()->address}}"
                       class="p-2 shadow rounded-lg bg-gray-500 outline-none focus:bg-black">
            </div>

            <div class="flex-col flex py-3">
                <label class="pb-2 text-gray-800 font-semibold">D.O.B </label>
                <input type="date" name='DOB'
                       class="p-2 shadow rounded-lg bg-gray-500 outline-none focus:bg-black">
            </div>

            <label class="pb-2 text-gray-700 font-semibold">Upload credentials </label>

            <div class="overflow-hidden relative w-full mt-4 mb-4">

                <input type="file" class="bg-red-500" name="credentials" >

            </div>

            <label class="pb-2 text-gray-700 font-semibold">Upload picture</label>

            <div class="overflow-hidden relative w-full mt-4 mb-4">


                <input type="file" class="bg-red-500" name="pfp">

            </div>

            @if($hi = $errors->all())

                <div class="flex-col flex py-3">

                    <div class="mt-5 p-3 bg-red-400 text-white">
                        {{reset($hi)}}
                    </div>

                </div>

            @endif




            <div class="mt-2">
                <button class="p-3 bg-indigo-400 text-white w-full hover:bg-indigo-300">Submit changes</button>
            </div>



            <div class="flex h-8 justify-center items-center btn mt-1 bg-black hover:bg-yellow-200">
                <a class = "w-full h-full flex justify-center
            items-center" href="{{route('profilePage')}}">BACK</a>
            </div>


        </form>
    </div>

</head>
<body>

</body>
</html>
