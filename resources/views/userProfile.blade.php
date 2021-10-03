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

@if(auth::check())


<form action="#" class="main_pro grid ">

    <div class="gid i_one">
        <img class = "w-full h-full" src="{{url(auth()->user()->user_pfp_path)}}" alt="profile picture">
    </div>

    {{--    ------------------- PROFILE PHOTO-----------------------}}


    <div class=" i_two mb-5 mt-5">


        <div class="flex  rounded-b-full ">

            <span class=" w-2/5 flex flex-col justify-center t_r ">
                <p class="flex self-end font-bold ">Name</p>
            </span>

            <span class=" w-full  flex justify-center items-center t_l">
                {{auth()->user()->f_name." ".auth()->user()->l_name}}
            </span>

        </div>

        <div class="flex rounded-b-full ">

            <span class=" w-2/5 flex flex-col justify-center t_r ">
                <p class="flex self-end font-bold ">Gender</p>
            </span>

            <span class=" w-full  flex justify-center items-center t_l">
                {{auth()->user()->gender}}
            </span>

        </div>


        <div class="flex  rounded-b-full ">

            <span class=" w-2/5 flex flex-col justify-center t_r ">
                <p class="flex self-end font-bold ">Birth Date</p>
            </span>

            <span class=" w-full  flex justify-center items-center t_l">
                {{auth()->user()->d_o_b}}
            </span>

        </div>


        <div class="flex  rounded-b-full ">

            <span class=" w-2/5 flex flex-col justify-center t_r ">
                <p class="flex self-end font-bold ">TRN</p>
            </span>

            <span class=" w-full  flex justify-center items-center t_l">
                {{auth()->user()->trn}}
            </span>

        </div>


        <div class="flex  rounded-b-full ">

            <span class=" w-2/5 flex flex-col justify-center t_r ">
                <p class="flex self-end font-bold ">Address</p>
            </span>

            <span class=" w-full  flex justify-center items-center t_l">
                {{auth()->user()->address}}
            </span>

        </div>


        <div class="flex  rounded-b-full ">

            <span class=" w-2/5 flex flex-col justify-center t_r ">
                <p class="flex self-end font-bold ">Email-Address</p>
            </span>

            <span class=" w-full  flex justify-center items-center t_l">
                {{auth()->user()->email}}
            </span>

        </div>


        <div class="flex  rounded-b-full ">

            <span class=" w-2/5 flex flex-col justify-center t_r ">
                <p class="flex self-end font-bold ">Phone Number</p>
            </span>

            <span class=" w-full  flex justify-center items-center t_l">
                {{auth()->user()->tel_number}}
            </span>

        </div>


        <div class="flex  rounded-b-full ">

            <span class=" w-2/5 flex flex-col justify-center t_r ">
                <p class="flex self-end font-bold ">Qualification</p>
            </span>

            <span class=" w-full  flex justify-center items-center t_l2 text-green-500">
                qualification uploaded successfully
            </span>

        </div>


        <div class="flex h-8 justify-center items-center btn mt-1 bg-yellow-200 hover:bg-red-700 ">
            <a class = "w-full h-full flex justify-center
            items-center" href="{{route('updateProfilePage')}}"> update information</a>
        </div>

        <div class="flex h-8 justify-center items-center btn mt-1 bg-yellow-200 hover:bg-green-400">
            <a download="{{auth()->user()->f_name."-".auth()->user()->l_name}} qualification " href="{{url(auth()->user()->user_qualification_path)}}" class = "w-full h-full flex justify-center
            items-center">download qualification</a>
        </div>

        <div class="flex h-8 justify-center items-center btn mt-1 bg-black hover:bg-yellow-200">
            <a class = "w-full h-full flex justify-center
            items-center" href="{{route('home')}}">BACK</a>
        </div>


    </div>

{{--    ---------------- THE BASIC INFORMATION-------------------}}

<!-- component -->
    <div class="text-gray-900 bg-gray-200">
        <div class="p-4 flex">
            <h1 class="text-3xl">
                Course Applications
            </h1>
        </div>
        <div class="px-3 py-4 flex justify-center">
            <table class="w-full text-md bg-white shadow-md rounded mb-4">
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


</form>

{{------------- DIV THAT HOLDS THE PROFILE PHOTO AND BASIC INFORMATION-----------}}

@endif
</body>


</html>
