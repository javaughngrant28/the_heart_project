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
    <img class="h-full w-full md:w-1/3 " src="{{url($course['c_photo'])}}" alt="course">
    <div style="background-color: #8FB8EE" class="w-full md:w-2/3 px-4 py-4 rounded-lg">
        <div class="flex items-center">
            <h2 class="text-xl text-gray-800 font-medium mr-auto">{{$course['c_name']}}</h2>
            <p class="text-gray-800 font-semibold tracking-tighter">
                PRICE: <span style="color: #F9F871" class="font-medium"> {{$course['c_price']}}JMD</span>
            </p>
        </div>

        <p class="text-sm text-gray-700 mt-4">
            {{$course['description']}}
        </p>

        <p class="text-sm text-gray-700 mt-4">
            <label>Format:</label>
            {{$course['format']}}
        </p>

        <p class="text-sm text-gray-700 mt-4">
            location:
            {{$course['location']}}
        </p>

        <p class="text-sm text-gray-700 mt-4">
            Awards:
            {{$course['award']}}
        </p>

        <p class="text-sm text-gray-700 mt-4">
            start: {{$course['start_date']}}
        </p>

        <p class="text-sm text-gray-700 mt-4">
            end: {{$course['end_date']}}
        </p>


        <form action="{{route('coursePageR')}}" method=POST class="flex items-center justify-end mt-4 top-auto">
            @csrf
            {{--            <button class="bg-white text-red-500 px-4 py-2 rounded mr-auto hover:underline">Delete</button>--}}
            <button type="submit" name="back" value="hey"
                    class=" bg-black text-white px-2 py-2 rounded-md mr-2 hover:bg-yellow-300">Back
            </button>


            @php
                $isThere = False;

               if(auth()->check()){

               foreach($apply as $key => $value)
        {

            if($value['pivot']['user_id'] == Auth()->user()->id){
                $isThere = True;
                $apt = $value['pivot']['app_status'];
            }
        }
    }




            @endphp


            @if(auth()->check() and auth()->user()->is_admin)

                <button class=" bg-gray-200 text-blue-600 px-2 py-2 rounded-md mr-2">
                    <a href="{{route('editCourse',$c_id)}}" class="h-full w-full">Edit</a>
                </button>

            @elseif($isThere == True)
                <button class=" pointer-events-none bg-gray-600 text-white px-2 py-2 rounded-md ">{{$apt}}</button>

            @elseif(!auth()->check())
                <a href="{{route('login')}}"
                   class=" bg-green-600 text-gray-200 px-2 py-2 rounded-md ">
                    Apply
                </a>

            @else

                <button type="submit" value="{{$course['id']}}" name="c_id"
                        class=" bg-green-600 text-gray-200 px-2 py-2 rounded-md ">
                    Apply
                </button>

            @endif
        </form>

    </div>

</div>


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
                <th class="text-left p-3 px-5">Application status</th>
                <th class="text-left p-3 px-5">payment status</th>
                <th class="text-left p-3 px-5"></th>
            </tr>
            @foreach($apply as $indexx => $values )
            <tr class="border-b hover:bg-blue-400 bg-gray-100">



                    <td class="p-3 px-5">{{$values['f_name'].' '.$values['l_name']}}</td>

                    <td class="p-3 px-5">{{$value['pivot']['app_status']}}</td>

                    <td class="p-3 px-5">{{$value['pivot']['payment_status']}}</td>

                    <td class="p-3 px-5"> <a href="{{route('studentProfile',$values['id'])}}">
                            <button class = 'btn bg-black text-white px-2 py-2 rounded-md mr-2 hover:bg-yellow-300'>
                                VIEW
                            </button>
                        </a></td>

                </tr>
            @endforeach


            </tbody>
        </table>
    </div>
</div>


</body>


</html>
