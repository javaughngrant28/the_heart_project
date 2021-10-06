<!doctype html>
<html lang="en" style="background-color: #95D4FD">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <link href="{{asset('css/register.css')}}" rel="stylesheet">
    <title>List</title>


</head>

<body>



<section class="text-gray-600 body-font">

    <header class="navBar py-6">
        <div class="container mx-auto flex justify-between items-center px-6">
            <div>
                <a href="{{ url('/') }}" class="text-lg font-semibold text-white no-underline">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>
            <nav class="space-x-4 text-white text-sm sm:text-base">
                @guest
                    <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                        <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                    <span>{{ Auth::user()->name }}</span>

                    <a href="{{ route('logout') }}"
                       class="no-underline hover:underline"
                       onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                @endguest
            </nav>
        </div>
    </header>

    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap w-full mb-8">
            <div class="w-full mb-6 lg:mb-0">
                <h1 class="sm:text-4xl text-5xl font-medium title-font mb-2 text-white">Admin dashboard</h1>
                <div style="background-color: #8FB8EE" class="h-1 w-20 rounded">

                </div>
            </div>
        </div>

        <div class="flex flex-wrap -m-4 text-center w-full justify-center">
            <div class="p-4 sm:w-1/4 w-1/2">
                <div style="background-color: #8FB8EE" class=" rounded-lg p-2 xl:p-6">
                    @php

                        $count = 0;
                            foreach ($pending_users as $key => $value)
        {
            if($value['app_status']=='pending')
            {
                ++$count;
            }
        }

                    @endphp

                    <h2 style="color: #F9F871" class="title-font font-medium sm:text-4xl text-3xl ">{{$count}}</h2>
                    <p class="leading-relaxed text-white font-bold">Pending users</p>
                </div>
            </div>


            @php

                $count2 = 0;
                    foreach ($course as $key2 => $value2)
{
    if($value2['c_name'])
    {
        ++$count2;
    }
}

            @endphp


            <div class="p-4 sm:w-1/4 w-1/2">
                <div style="background-color: #8FB8EE" class=" rounded-lg p-2 xl:p-6">
                    <h2 style="color: #F9F871" class="title-font font-medium sm:text-4xl text-3xl ">{{$count2}}</h2>
                    <p class="leading-relaxed text-white font-bold">Courses</p>
                </div>
            </div>


            @php

                $count3 = 0;
                    foreach ($all_users as $key3 => $value3)
{
    if($value3['f_name'])
    {
        ++$count3;
    }
}

            @endphp


            <div class="p-4 sm:w-1/4 w-1/2">
                <div style="background-color: #8FB8EE" class=" rounded-lg p-2 xl:p-6">
                    <h2 style="color: #F9F871" class="title-font font-medium sm:text-4xl text-3xl ">{{$count3}}</h2>
                    <p class="leading-relaxed text-white font-bold">Total Users</p>
                </div>
            </div>

        </div>
    </div>
</section>


<form
    class="container mb-2 flex mx-auto w-full items-center justify-center"
>
    <ul class="flex flex-col p-4 w-1/2">
        <li class="border-gray-400 flex flex-row">
            <div style="background-color: #8FB8EE; cursor: pointer;"
                 class="select-none flex flex-1 items-center p-4 hover: rounded-2xl border-2 p-6
                hover:shadow-2xl border-yellow-200"
            >
                @foreach($course as $index => $values)
                <a href="{{route('coursePage',$values['id'])}}" class="flex-1 pl-1 mr-16">
                    <div class=" flex font-medium text-gray-700 justify-center items-center ">
                        {{$values['c_name']}}
                    </div>
                </a>
                @endforeach

            </div>
        </li>

    </ul>
</form>


</body>


</html>
