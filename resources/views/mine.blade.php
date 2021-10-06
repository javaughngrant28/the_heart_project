<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/homeStyle.css')}}" rel="stylesheet">
    {{--    TODO the borders and overall style/color pallet need to be chosen--}}
    <title>Home</title>

</head>

<body>


<div class=" grid screen_div">
    {{----------------------------This contains the navigation bar!!--------------------------------------}}
    <nav class=" w-full grid ">

        <div class="side1  ">
            {{--            THIS DIVE IS for space!!--}}
        </div>

        {{--        This div is where the welcome text will be!--}}
        <div style="font-size: 1.2rem"
             class="main pointer-events-none flex justify-center items-center text-white font-extrabold">
            <span class> WELCOME TO AMBER ACADEMY  </span>
        </div>

        {{--        This div is where contains the user LogIN button--}}
        <div class="side2 flex justify-center items-center hov ">
            @guest
                <a class="btn w-full h-full border-none hover:bg-blue-400"
                   href="{{ route('login') }}">{{ __('Login') }}</a>
                {{--                @if (Route::has('register'))--}}
                {{--                    <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                {{--                --}}
                {{--                @endif--}}
            @else

                <a href="{{ route('logout') }}"
                   class="btn w-full h-full border-none hover:bg-blue-400"
                   onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    {{ csrf_field() }}
                </form>
            @endguest

        </div>

    </nav>


    {{---------------------THIS IS THE DIV THAT HOLDS ALL THE ADVERTISEMENTS ----------------------------}}

    <div class="mid_top flex justify-self-start">
        <span style="border-top: 2px solid black; border-left: 2px solid black; background-color: #8FB8EE;
        border-right: 2px solid black;  border-top-left-radius: 5px; color: #F9F871;"
              class="font-bold pointer-events-none
        bg-yellow-300 pr-1 bg-red-500
        h-full flex justify-center items-center">Featured courses</span>
    </div>

    <div style="border: 2px solid black; border-top: none; background-color: #8FB8EE;"
         class="card_holder grid w-full">


        {{--        TODO STYLE BUTTONS AND ADD LINKS--}}


        <div class="card_r card w-full h-full">
            @guest
                <div class="flex h-full w-full flex-col justify-end bg-white ">

                    {{--                TODO ADD program name and style crard--}}
                    <div
                        style="background-image: url('https://www.computerhope.com/issues/pictures/win10-user-account-default-picture.jpg')"
                        class=" flex justify-center bg-no-repeat bg-center
                items-center h-full">{{--<span style="font-size: 2rem" class = "font-extrabold pointer-events-none
                text-black">PROGRAM NAME</span>--}}
                    </div>

                    {{--                THE THE IMAGE THAT GETS THE DISPLAYED ABOUT THE COURSE BEING ADVERTISED WHIT THE NAME --}}

                    <button class=' h-8 b_c hover:text-white flex font-extrabold text-white btn w-full
                bg-green-400 items-center justify-center'><a class="flex justify-center items-center
                w-full h-full" href="{{route('register')}}">REGISTER</a></button>

                    {{--------   THE THIS IS THE VIEW BUTTON THAT WILL LEAD YOU TO THE COURSE DETAILS---------}}

                </div>
            @else


                <div class="flex h-full w-full flex-col justify-end bg-black  ">

                    {{--                TODO ADD program name and style crard--}}
                    <div
                        style="background-image: url('{{auth()->user()->user_pfp_path}}')"
                        class=" flex justify-center bg-no-repeat bg-center bg-cover
                items-center h-full">{{--<span style="font-size: 2rem" class = "font-extrabold pointer-events-none
                text-black">{{auth()->user('id')}}</span>--}}
                    </div>

                    {{--                THE THE IMAGE THAT GETS THE DISPLAYED ABOUT THE COURSE BEING ADVERTISED WHIT THE NAME --}}

                    <button class=' h-8 b_c_p  hover:text-white flex font-extrabold text-white btn w-full
                 items-center justify-center'><a class="flex w-full h-full justify-center items-center"
                                                 href="{{route('profilePage')}}">VIEW PROFILE</a>
                    </button>

                    {{--------   THE THIS IS THE VIEW BUTTON THAT WILL LEAD YOU TO THE COURSE DETAILS---------}}

                </div>

            @endguest

            {{-------------THIS IS THE IMAGE THAT WILL BE DISPLAYED ON THE ADVERTISEMENT CARD---------------}}

        </div>


        @foreach($course as $index => $value)
            @if($value['is_featured'])
            <div class="card cards w-full h-full">


                <div class="flex h-full w-full flex-col justify-end">


                    <div style="background-image: url('{{$value['c_photo']}}')" class=" flex  bg-no-repeat bg-cover
                     justify-center
                items-center h-full"><span style="font-size: 2rem" class="font-extrabold pointer-events-none
                text-black">{{strtoupper($value['c_name'])}}</span>
                    </div>

                    {{--                THE THE IMAGE THAT GETS THE DISPLAYED ABOUT THE COURSE BEING ADVERTISED WHIT THE NAME --}}

                    <button class=' h-8 b_c hover:text-white flex font-extrabold text-white btn w-full
                bg-green-400 items-center justify-center'><a href="{{route('coursePage',$value['id'])}}" class="flex justify-center items-center
                w-full h-full">VIEW</a>
                    </button>

                    {{--------   THE THIS IS THE VIEW BUTTON THAT WILL LEAD YOU TO THE COURSE DETAILS---------}}

                </div>


                {{-------------THIS IS THE IMAGE THAT WILL BE DISPLAYED ON THE ADVERTISEMENT CARD---------------}}

            </div>
            @endif
        @endforeach


    </div>


    <div class="mid_lower">
        <a class="btn h-full w-full hover:text-white flex font-extrabold text-white b_c h-full flex
        justify-center items-center" href="{{route('allCoursePage')}}">VIEW ALL</a>
    </div>

</div>


</body>


<footer class="footer  bg-white relative pt-1 border-b-2 border-blue-700">

    <div class="container flex justify-center w-full items-center mx-auto px-6">

        <div class="flex justify-center w-full items-center sm:mt-8">

            <div class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col items-center md:flex-row justify-between">
                <div class="flex items-center w-full flex-col ">
                    <span class="font-bold text-gray-700 uppercase mb-2">ABOUT US</span>
                    <span class="my-2"><a href="{{route('aboutUs')}}" class=" underline text-blue-700  text-md hover:text-blue-500">Learn more about us</a></span>
                    <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500"><p class="text-sm text-blue-700 font-bold mb-2">
                    © 2021 by Javaughn Grant
                </p></a></span>
                </div>

            </div>
        </div>
    </div>


</footer>


</html>
