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


<form action="#" class="main_pro grid">

    <div class="gid i_one">


    </div>

    {{--    ------------------- PROFILE PHOTO-----------------------}}


    <div class=" i_two mb-5 mt-5">


        <div class="flex  rounded-b-full ">

            <span class=" w-2/5 flex flex-col justify-center t_r ">
                <p class="flex self-end font-bold ">Name</p>
            </span>

            <span class=" w-full  flex justify-center items-center t_l">
                Javaughn Grant
            </span>

        </div>

        <div class="flex rounded-b-full ">

            <span class=" w-2/5 flex flex-col justify-center t_r ">
                <p class="flex self-end font-bold ">Gender</p>
            </span>

            <span class=" w-full  flex justify-center items-center t_l">
                Male
            </span>

        </div>


        <div class="flex  rounded-b-full ">

            <span class=" w-2/5 flex flex-col justify-center t_r ">
                <p class="flex self-end font-bold ">Birth Date</p>
            </span>

            <span class=" w-full  flex justify-center items-center t_l">
                24/02/2000
            </span>

        </div>


        <div class="flex  rounded-b-full ">

            <span class=" w-2/5 flex flex-col justify-center t_r ">
                <p class="flex self-end font-bold ">TRN</p>
            </span>

            <span class=" w-full  flex justify-center items-center t_l">
                12345678901
            </span>

        </div>


        <div class="flex  rounded-b-full ">

            <span class=" w-2/5 flex flex-col justify-center t_r ">
                <p class="flex self-end font-bold ">Address</p>
            </span>

            <span class=" w-full  flex justify-center items-center t_l">
                I live at my home
            </span>

        </div>




        <div class="flex  rounded-b-full ">

            <span class=" w-2/5 flex flex-col justify-center t_r ">
                <p class="flex self-end font-bold ">Email-Address</p>
            </span>

            <span class=" w-full  flex justify-center items-center t_l">
                javaughngrant@gmail.com
            </span>

        </div>



        <div class="flex  rounded-b-full ">

            <span class=" w-2/5 flex flex-col justify-center t_r ">
                <p class="flex self-end font-bold ">Phone Number</p>
            </span>

            <span class=" w-full  flex justify-center items-center t_l">
                x-xxx-xxx-xxxx
            </span>

        </div>




        <div class="flex  rounded-b-full ">

            <span class=" w-2/5 flex flex-col justify-center t_r ">
                <p class="flex self-end font-bold ">Qualification</p>
            </span>

            <span class=" w-full  flex justify-center items-center t_l">
                myQualification.docx
            </span>

        </div>






        <div class="flex h-8 justify-center items-center btn mt-1 bg-yellow-200 hover:bg-red-700 ">
            update information
        </div>

        <div class="flex h-8 justify-center items-center btn mt-1 bg-yellow-200 hover:bg-green-400">
            download information
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


</body>


</html>
