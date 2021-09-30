@extends('layouts.app')

@section('content')



    <main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10 mb-5">
        <div class="flex">
            <div class="w-full">
                <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                    <header class="font-semibold f_div_h text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                        {{ __('Register') }}
                    </header>

                    <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" enctype="multipart/form-data"
                          action="{{ route('register') }}">
                        @csrf

                        <div class="flex flex-wrap ">
                            <label for="fist_name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Fist Name') }}:
                            </label>

                            <input id="fist_name" type="text"
                                   class="form-input w-full @error('fist_name')  border-red-500 @enderror"
                                   name="fist_name" value="{{ old('fist_name') }}" required autocomplete="name"
                                   autofocus>

                            @error('fist_name')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>


                        <div class="flex flex-wrap ">
                            <label for="last_name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Last Name') }}:
                            </label>

                            <input id="last_name" type="text"
                                   class="form-input w-full @error('last_name')  border-red-500 @enderror"
                                   name="last_name" value="{{ old('last_name') }}" required autocomplete="name"
                                   autofocus>

                            @error('last_name')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>


                        <div class="flex flex-wrap">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('E-Mail Address') }}:
                            </label>

                            <input id="email" type="email"
                                   class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                                   value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>



                        <div class="flex flex-wrap">
                            <label for="gender" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Gender') }}:
                            </label>

                            <select id="gender"
                                   class="form-input w-full @error('gender') border-red-500 @enderror" name="gender"
                                   value="{{ old('gender') }}" required autocomplete="gender">

                                <option>-- select gender---</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>

                            </select>

                            @error('gender')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>



                        <div class="flex flex-wrap">
                            <label for="date" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Birth Date') }}:
                            </label>

                            <input id="date" type="date"
                                   class="form-input w-full @error('date') border-red-500 @enderror" name="date"
                                   value="{{ old('date') }}" required autocomplete="date">

                            @error('date')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>



                        <div class="flex flex-wrap">
                            <label for="address" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Address') }}:
                            </label>

                            <input id="address" type="text"
                                   class="form-input w-full @error('address') border-red-500 @enderror" name="address"
                                   value="{{ old('address') }}" required autocomplete="address">

                            @error('address')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>


                        <div class="flex flex-wrap">
                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Password') }}:
                            </label>

                            <input id="password" type="password"
                                   class="form-input w-full @error('password') border-red-500 @enderror" name="password"
                                   required autocomplete="new-password">

                            @error('password')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap">
                            <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Confirm Password') }}:
                            </label>

                            <input id="password-confirm" type="password" class="form-input w-full"
                                   name="password_confirmation" required autocomplete="new-password">
                        </div>



                        <div class="flex flex-wrap">
                            <label for="f_number" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Phone Number') }}:
                            </label>

                            <input id="f_number" type="text"
                                   class="form-input w-full @error('f_number') border-red-500 @enderror" name="f_number"
                                   value="{{ old('f_number') }}" required autocomplete="f_number">

                            @error('f_number')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>




                        <div class="flex flex-wrap">
                            <label for="trn" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('TRN') }}:
                            </label>

                            <input id="trn" type="text"
                                   class="form-input w-full @error('trn') border-red-500 @enderror" name="trn"
                                   value="{{ old('trn') }}" required autocomplete="trn">

                            @error('trn')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>




                        <div class="flex flex-wrap">
                            <label for="pfp" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Profile Photo') }}:
                            </label>

                            <input id="pfp" type="file"
                                   class="form-input text-black w-full @error('f_number') border-red-500 @enderror" name="pfp"
                                   value="{{ old('pfp') }}" required autocomplete="pfp">

                            @error('pfp')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>




                        <div class="flex flex-wrap">
                            <label for="qualification" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Upload microsoft word file with qualifications') }}:
                            </label>

                            <input id="qualification" type="file"
                                   class="form-input text-black w-full @error('qualification') border-red-500 @enderror" name="qualification"
                                   value="{{ old('qualification') }}" required autocomplete="qualification">

                            @error('qualification')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>







                        <div class="flex flex-wrap">
                            <button type="submit"
                                    class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline sub_min text-white sm:py-4">
                                {{ __('Register') }}
                            </button>

                            <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                                {{ __('Already have an account?') }}
                                <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline"
                                   href="{{ route('login') }}">
                                    {{ __('Login') }}
                                </a>
                            </p>
                        </div>
                    </form>

                </section>
            </div>
        </div>
    </main>


@endsection
