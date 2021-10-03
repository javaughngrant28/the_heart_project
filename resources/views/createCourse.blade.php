<!doctype html>
<html lang="en" style="background-color: #95D4FD">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>edit</title>
</head>


<body>


<!-- component -->
<div class="relative min-h-screen flex items-center justify-center
py-12 px-4 sm:px-6 lg:px-8 items-center">

    <div class="absolute opacity-60 inset-0 z-0"></div>
    <div class="max-w-md w-full space-y-8 p-10 bg-white rounded-xl shadow-lg z-10">
        <div class="grid  gap-8 grid-cols-1">
            <div class="flex flex-col ">
                <div class="flex flex-col sm:flex-row items-center">
                    <h2 class="font-semibold text-lg mr-auto text-gray-700">Create course</h2>
                    <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
                </div>
                <div class="mt-5">
                    <form action="{{route('createPageR')}}" enctype="multipart/form-data" method = POST>

                        @csrf
                        <div class="md:space-y-2 mb-3">
                            <label class="text-xs font-semibold text-gray-600 py-2">Course Image</label>
                            <div class="flex items-center py-6">
                                <input class="text-gray-500" type="file" name="course_img">
                            </div>
                        </div>


                        <div class="md:space-y-2 mb-3">
                            <label class="text-xs font-semibold text-gray-600 py-2">Price</label>
                            <div class="flex items-center py-6">
                                <input class=" border-2 rounded-l w-full text-black" type="number" name="money">
                            </div>
                        </div>


                        <div class="md:space-y-2 mb-3">
                            <label class="text-xs font-semibold text-gray-600 py-2">Name</label>
                            <div class="flex items-center py-6">
                                <input class=" border-2 rounded-l w-full text-black" type="text" name="c_name">
                            </div>
                        </div>

                        <div class="md:space-y-2 mb-3">
                            <label class="text-xs font-semibold text-gray-600 py-2">Location</label>
                            <div class="flex items-center py-6">
                                <input class=" border-2 rounded-l w-full text-black" type="text" name="c_location">
                            </div>
                        </div>


                        <div class="md:space-y-2 mb-3">
                            <label class="text-xs font-semibold text-gray-600 py-2">start date</label>
                            <div class="flex items-center py-6">
                                <input class="border-2 rounded-l w-full text-black" type="date" name="c_start">
                            </div>
                        </div>


                        <div class="md:space-y-2 mb-3">
                            <label class="text-xs font-semibold text-gray-600 py-2">end date</label>
                            <div class="flex items-center py-6">
                                <input class="border-2 rounded-l w-full text-black" type="date" name="c_end">
                            </div>
                        </div>


                        <div class="md:space-y-2 mb-3">
                            <label class="text-xs font-semibold text-gray-600 py-2">Format</label>
                            <div class="flex items-center py-6">
                                <input class="border-2 rounded-l w-full text-black" type="text" name="c_format">
                            </div>
                        </div>


                        <div class="md:space-y-2 mb-3">
                            <label class="text-xs font-semibold text-gray-600 py-2">Awards</label>
                            <div class="flex items-center py-6">
                                <input class="border-2 rounded-l w-full text-black" type="text" name="c_awards">
                            </div>
                        </div>


                        <div class="flex-auto w-full mb-1 text-xs space-y-2">
                            <label class="font-semibold text-gray-600 py-2">Course description</label>
                            <textarea name="c_description" id=""
                                      class="w-full min-h-[100px] max-h-[300px] h-28 appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4"
                                      spellcheck="true"></textarea>
                        </div>

                        <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">

                            <button
                                class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>


</html>
