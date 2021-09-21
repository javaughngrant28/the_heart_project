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

        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .screen_div{
            background-color: palevioletred;

            grid-row-gap: 1rem;

            grid-template-columns: 1fr;
            grid-template-rows: 5rem auto;

            grid-template-areas:
                "top"
                "mid";

        }

        nav{
            /*border: 10px solid black;*/
            grid-area: top;

            grid-template-columns: [col-start] minmax(1px,10rem) [col-2] minmax(13rem,1fr) [col-3] minmax(5rem,10rem) [col-end];
            grid-template-rows:auto;

            grid-template-areas:
                "side1 main side2";
        }

        .card_holder{

            grid-area: mid;
            background-color: blue;

            grid-template-columns: repeat(auto-fill,minmax(15rem,25rem));
            grid-auto-rows: 15rem;

            justify-content: center;
            align-content: space-around;

            column-gap: 1.5rem;
            row-gap: 1rem;

        }

        .card_r
        {
            background-color: white;
            border: 3px solid mediumturquoise;
        }

        .card
        {
            background-color: white;
            border: 3px solid olivedrab;
        }


        .side1{
            grid-area: side1;
            border: 2px solid white;
        }

        .main{
            grid-area: main;
            border: 2px solid yellow;
        }

        .side2{
            grid-area: side2;
            border: 2px solid red;
        }

    </style>

</head>

<body>



<div class = "w-screen h-screen grid screen_div">

    {{----------------------------This contains the navigation bar!!--------------------------------------}}
    <nav class = "bg-blue-500 w-full grid ">

        <div class = "side1 bg-blue-500">
            {{--            THIS DIVE IS for space!!--}}
        </div>

        {{--        This div is where the welcome text will be!--}}
        <div class = "main bg-blue-500 flex justify-center items-center">
            <span class> Lorem ipfsum dolor sit amet, consectetur adipisicing elit. Eligendi, possimus. </span>
        </div>
        {{--        TODO change the welcome text to be short and randomized--}}

        {{--        This div is where contains the user LogIN button--}}
        <div class = "side2 bg-blue-500 flex justify-center items-center">
            <span>LogIn</span>
        </div>
        {{--        TODO change the style and make it a button to like to logIn page--}}

    </nav>


{{---------------------THIS IS THE DIV THAT HOLDS ALL THE ADVERTISEMENTS ----------------------------}}
    <div class = "card_holder grid w-full">

{{--TODO Add atl property with images--}}

{{--        TODO STYLE BUTTONS AND ADD LINKS--}}

        <div class = "card_r w-full h-full">

            <div class = "flex h-full w-full flex-col relative">

{{--                <img  src="{{url('https://source.unsplash.com/random')}}" class = "w-full z-0 h-4/5"--}}
{{--                     style="filter: brightness(40%) grayscale(10%) blur(2px); position:absolute">--}}

                <div style="background-image: url("source.unsplash.com/random")" class=" z-2 flex justify-center items-center">Centered</div>

                <button class = 'btn w-full h-full flex bg-green-400 justify-center
                items-center z-10 h-1 '>VIEW</button>


            </div>

{{-------------THIS IS THE IMAGE THAT WILL BE DISPLAYED ON THE ADVERTISEMENT CARD---------------}}
        </div>

        <div class = "card">
            1
        </div>

        <div class = "card">
            2
        </div>

        <div class = "card">
            3
        </div>

        <div class = "card">
            4
        </div>

        <div class = "card">
            5
        </div>

    </div>





    </div>



</body>

</html>
