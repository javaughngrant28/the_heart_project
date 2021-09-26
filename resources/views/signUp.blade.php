<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/register.css')}}" rel="stylesheet">

    <title>Sign Up</title>

</head>


<body>


<div class=" mt-10 mb-10 grid content-center h-screen place-items-center">
    <div class="w-1012 h-11/12 p-12 f_c sm:w-8/12 md:w-1/2 lg:w-5/12 flex flex-col  justify-center ">
        <h1 class="text-2xl font-bold text-white self-center">Sign up</h1>
        <form class="mt-6">
            <div class="flex justify-between gap-3">
        <span class="w-1/2">
          <label for="firstname" class="block text-xs font-semibold text-white uppercase">Firstname</label>
          <input id="firstname" type="text" name="firstname" placeholder="John" autocomplete="given-name"
                 class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"/>
        </span>
                <span class="w-1/2">
          <label for="lastname" class="block text-xs font-semibold text-white uppercase">Lastname</label>
        <input id="lastname" type="text" name="lastname" placeholder="Doe" autocomplete="family-name"
               class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"/>
        </span>
            </div>

            <label for="gender" class="block mt-2 text-xs font-semibold text-white uppercase">Gender</label>

            <select name="gender"
                    class=" w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                <option >-- select gender --</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
            </select>


            <label for="email" class="block mt-2 text-xs font-semibold text-white uppercase">E-mail</label>
            <input id="email" type="email" name="email" placeholder="john.doe@company.com" autocomplete="email"
                   class="block w-full p-3 mt-2 text-gray-700 bg-white appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"/>


            <label for="D.O.B" class="block mt-2 text-xs font-semibold text-white uppercase">D.O.B</label>
            <input id="D.O.B" type="date" name="D.O.B"
                   class="block w-full p-3 mt-2 text-gray-700 bg-white appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"/>


            <label for="password" class="block mt-2 text-xs font-semibold text-white uppercase">Password</label>
            <input id="password" type="password" name="password" placeholder="********" autocomplete="new-password"
                   class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"/>
            <label for="password-confirm" class="block mt-2 text-xs font-semibold text-white uppercase">Confirm
                password</label>
            <input id="password-confirm" type="password" name="password-confirm" placeholder="********"
                   autocomplete="new-password"
                   class="block w-full p-3 mt-2 text-gray-700 bg-white appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"/>
            <button type="submit"
                    class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase sub_min shadow-lg focus:outline-none hover:shadow-none">
                Sign up
            </button>
            <p class="flex justify-between inline-block mt-4 text-xs text-white cursor-pointer hover:text-black">Already
                registered?</p>
        </form>
    </div>
</div>


</body>


</html>
