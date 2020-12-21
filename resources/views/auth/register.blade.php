@extends('layouts.app')
@section('content')
    <div class="flex h-screen justify-center items-center -mt-16 sm:-mt-34">
        <div class=" w-12/12 w-full  sm:w-4/12 bg-white p-6 rounded-lg">

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">User Name</label>
                <input type="text" name="name" id="name" placeholder="Your name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>    
                    @enderror
                </div>
                <div class="mb-4">
                    
                    <label for="name" class="sr-only">User Name</label>
                    <input type="text" name="username" id="username" placeholder="Your username" class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('username') border-red-500 @enderror" value="{{ old('username') }}">
                    @error('username')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>    
                @enderror
                </div>
                <div class="mb-4">
                    
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                    @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>    
                @enderror
                </div>
                <div class="mb-4">
                    
                    <label for="password" class="sr-only">User Name</label>
                    <input type="password" name="password" id="password" placeholder="Your password" class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('password') border-red-500 @enderror" value="">
                    @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>    
                @enderror
                </div>
                 <div class="mb-4">
                    
                    <label for="password_confirmation" class="sr-only">Password Confirmation</label>
                    <input type="Password" name="password_confirmation" id="password_confirmation" placeholder="Repeat Your password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                    @error('confirmed')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>    
                @enderror
                </div>

                <button type="submit" class=" bg-blue-500 text-white px-5 py-3 rounded font-medium w-full">Register</button> 

            </form>

        </div>

    </div>
@endsection

