<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    {{--    TODO the borders and overall style/color pallet need to be chosen--}}
    <title>Home</title>


    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .screen_div {
            background-color: palevioletred;

            /*grid-row-gap: 1rem;*/

            grid-template-columns: 1fr;
            grid-template-rows: 5rem 5rem auto 5rem;

            grid-template-areas:
                "top"
                "mid_top"
                "mid"
                "mid_lower";

        }

        /*------------SCREEN LAYOUT GRID----------------*/

        nav {
            /*border: 10px solid black;*/
            grid-area: top;
            /*height: 5rem;*/

            grid-template-columns: [col-start] minmax(1px, 10rem) [col-2] minmax(13rem, 1fr) [col-3] minmax(5rem, 10rem) [col-end];
            grid-template-rows:auto;

            grid-template-areas:
                "side1 main side2";
        }

        .side1 {
            grid-area: side1;
            border: 2px solid white;
        }

        .main {
            grid-area: main;
            border: 2px solid yellow;
        }

        .side2 {
            grid-area: side2;
            border: 2px solid red;
        }

       /*--------- THE NAV -----------------*/

        .mid_top{
            grid-area: mid_top;

            justify-self: center;

            margin-top: 2rem;

            width: 98vw;

            background-color: yellow;

            justify-items: center;
            align-items: center;
        }

        /*-----------THE FAV COURSE BUTTON----------*/

        .card_holder {
            justify-self: center;
            width: 98vw;

            grid-area: mid;
            background-color: yellow;

            grid-template-columns: repeat(auto-fill, minmax(10rem, 25rem));

            grid-auto-rows: 20rem;

            justify-content: center;
            align-content: space-around;

            column-gap: 1.5rem;
            row-gap: 5rem;

        }

        .card_r {
            background-color: white;
            border: 3px solid mediumturquoise;
        }

        .card {
            background-color: white;
            border: 3px solid olivedrab;
        }

        /*-----------THE COURSES CARDS--------------------------*/

        .mid_lower{
            grid-area: mid_lower;

            width: 98vw;
            justify-self: center;
            background-color: yellow;
            margin-bottom: 2.5rem;
        }

       /* --------------VIEW MORE COURSES BUTTON-------------------*/



    </style>

</head>

<body>


<div class=" grid screen_div">

    {{----------------------------This contains the navigation bar!!--------------------------------------}}
    <nav class="bg-blue-500 w-full grid ">

        <div class="side1 bg-blue-500">
            {{--            THIS DIVE IS for space!!--}}
        </div>

        {{--        This div is where the welcome text will be!--}}
        <div class="main bg-blue-500 flex justify-center items-center">
            <span class> Lorem ipfsum dolor sit amet, consectetur adipisicing elit. Eligendi, possimus. </span>
        </div>
        {{--        TODO change the welcome text to be short and randomized--}}

        {{--        This div is where contains the user LogIN button--}}
        <div class="side2 bg-blue-500 flex justify-center items-center">
            <span>LogIn</span>
        </div>
        {{--        TODO change the style and make it a button to like to logIn page--}}

    </nav>


    {{---------------------THIS IS THE DIV THAT HOLDS ALL THE ADVERTISEMENTS ----------------------------}}

    <div class = "mid_top flex justify-self-start">
        <span class = "bg-red-500 h-full flex justify-center items-center"> Popular courses</span></div>

    <div class="card_holder grid w-full">

        {{--TODO Add atl property with images--}}

        {{--        TODO STYLE BUTTONS AND ADD LINKS--}}

        <div class="card_r w-full h-full">

            <div class="flex h-full w-full flex-col justify-end">

                {{--                TODO ADD program name and style crard--}}
                <div style="background-image: url('https://source.unsplash.com/random')" class=" flex justify-center
                items-center h-full"><span class = "no_blur">PROGRAM NAME</span>
                </div>

                {{--                THE THE IMAGE THAT GETS THE DISPLAYED ABOUT THE COURSE BEING ADVERTISED WHIT THE NAME --}}

                <button class=' h-8 flex btn w-full bg-green-400 items-center justify-center'>VIEW</button>

                {{--------   THE THIS IS THE VIEW BUTTON THAT WILL LEAD YOU TO THE COURSE DETAILS---------}}

            </div>

            {{-------------THIS IS THE IMAGE THAT WILL BE DISPLAYED ON THE ADVERTISEMENT CARD---------------}}

        </div>



        <div class="card w-full h-full">

            <div class="flex h-full w-full flex-col justify-end">

                {{--                TODO ADD program name and style crard--}}
                <div style="background-image: url('https://source.unsplash.com/random')" class="flex justify-center
                items-center h-full">
                    PROGRAM NAME
                </div>

                {{--                THE THE IMAGE THAT GETS THE DISPLAYED ABOUT THE COURSE BEING ADVERTISED WHIT THE NAME --}}

                <button class=' h-8 flex btn w-full bg-green-400 items-center justify-center'>VIEW</button>

                {{--------   THE THIS IS THE VIEW BUTTON THAT WILL LEAD YOU TO THE COURSE DETAILS---------}}

            </div>


        </div>





        <div class="card w-full h-full">

            <div class="flex h-full w-full flex-col justify-end">

                {{--                TODO ADD program name and style crard--}}
                <div style="background-image: url('https://source.unsplash.com/random')" class="flex justify-center
                items-center h-full">PROGRAM NAME
                </div>

                {{--                THE THE IMAGE THAT GETS THE DISPLAYED ABOUT THE COURSE BEING ADVERTISED WHIT THE NAME --}}

                <button class=' h-8 flex btn w-full bg-green-400 items-center justify-center'>VIEW</button>

                {{--------   THE THIS IS THE VIEW BUTTON THAT WILL LEAD YOU TO THE COURSE DETAILS---------}}

            </div>


        </div>




        <div class="card w-full h-full">

            <div class="flex h-full w-full flex-col justify-end">

                {{--                TODO ADD program name and style crard--}}
                <div style="background-image: url('https://source.unsplash.com/random')" class="flex justify-center
                items-center h-full">PROGRAM NAME
                </div>

                {{--                THE THE IMAGE THAT GETS THE DISPLAYED ABOUT THE COURSE BEING ADVERTISED WHIT THE NAME --}}

                <button class=' h-8 flex btn w-full bg-green-400 items-center justify-center'>VIEW</button>

                {{--------   THE THIS IS THE VIEW BUTTON THAT WILL LEAD YOU TO THE COURSE DETAILS---------}}

            </div>


        </div>





        <div class="card w-full h-full">

            <div class="flex h-full w-full flex-col justify-end">

                {{--                TODO ADD program name and style crard--}}
                <div style="background-image: url('https://source.unsplash.com/random')" class="flex justify-center
                items-center h-full">PROGRAM NAME
                </div>

                {{--                THE THE IMAGE THAT GETS THE DISPLAYED ABOUT THE COURSE BEING ADVERTISED WHIT THE NAME --}}

                <button class=' h-8 flex btn w-full bg-green-400 items-center justify-center'>VIEW</button>

                {{--------   THE THIS IS THE VIEW BUTTON THAT WILL LEAD YOU TO THE COURSE DETAILS---------}}

            </div>


        </div>




        <div class="card w-full h-full">

            <div class="flex h-full w-full flex-col justify-end">

                {{--                TODO ADD program name and style crard--}}
                <div style="background-image: url('https://source.unsplash.com/random')" class="flex justify-center
                items-center h-full">PROGRAM NAME
                </div>

                {{--                THE THE IMAGE THAT GETS THE DISPLAYED ABOUT THE COURSE BEING ADVERTISED WHIT THE NAME --}}

                <button class=' h-8 flex btn w-full bg-green-400 items-center justify-center'>VIEW</button>

                {{--------   THE THIS IS THE VIEW BUTTON THAT WILL LEAD YOU TO THE COURSE DETAILS---------}}

            </div>


        </div>



        <div class="card w-full h-full">

            <div class="flex h-full w-full flex-col justify-end">

                {{--                TODO ADD program name and style crard--}}
                <div style="background-image: url('https://source.unsplash.com/random')" class="flex justify-center
                items-center h-full">PROGRAM NAME
                </div>

                {{--                THE THE IMAGE THAT GETS THE DISPLAYED ABOUT THE COURSE BEING ADVERTISED WHIT THE NAME --}}

                <button class=' h-8 flex btn w-full bg-green-400 items-center justify-center'>VIEW</button>

                {{--------   THE THIS IS THE VIEW BUTTON THAT WILL LEAD YOU TO THE COURSE DETAILS---------}}

            </div>


        </div>





    </div>



    <div class = "mid_lower">
        <a class = "btn bg-purple-400 h-full flex justify-center items-center">VIEW ALL</a>
    </div>

</div>


</body>



<footer class="footer bg-white relative pt-1 border-b-2 border-blue-700">

    <div class="container mx-auto px-6">

        <div class="sm:flex sm:mt-8">
            <div class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between">
                <div class="flex flex-col">
                    <span class="font-bold text-gray-700 uppercase mb-2">Footer header 1</span>
                    <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">link 1</a></span>
                    <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">link 1</a></span>
                    <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">link 1</a></span>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-gray-700 uppercase mt-4 md:mt-0 mb-2">Footer header 2</span>
                    <span class="my-2"><a href="#" class="text-blue-700 text-md hover:text-blue-500">link 1</a></span>
                    <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">link 1</a></span>
                    <span class="my-2"><a href="#" class="text-blue-700 text-md hover:text-blue-500">link 1</a></span>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-gray-700 uppercase mt-4 md:mt-0 mb-2">Footer header 3</span>
                    <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">link 1</a></span>
                    <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">link 1</a></span>
                    <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">link 1</a></span>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-6">
        <div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center">
            <div class="sm:w-2/3 text-center py-6">
                <p class="text-sm text-blue-700 font-bold mb-2">
                    © 2021 by Javaughn Grant
                </p>
            </div>
        </div>
    </div>

</footer>



</html>
