@extends('layouts.app')
@section('content')
    <div class="flex justify-center">
        <div class="sm:w-8/12 bg-white p-6 rounded-lg">
            @if (session('success'))
            <div class="bg-green-500 p-4 rounded-lg mb-6 text-white text-center">
                {{ session('success') }}
            </div>
          @endif


            <form action="{{route('notes')}}" method="post">
        @csrf
            <div class="mb-4">

                <label for="title" class="sr-only">title</label>
                <input type="text" name="title" id="title" class="bg-gray-100 border-2 w-full p-4 rounded-lg
                 @error('title') border-red-500 @enderror" placeholder="Add Title" value="{{ old('title') }}">
                
                

                @error('title')
                    
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    
                @enderror

            </div>

            <div class="mb-4">
            <label for="body" class="sr-only">Body</label>
            <textarea name="body" id="body" cols="30" rows="4" class=" bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="Post somthing!">{{ old('body') }}</textarea>
    
                    @error('body')
                        
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        
                    @enderror
    
            </div>
            <div class="text-center px-5">
                <button type="submit" class=" bg-blue-500 text-white px-4 py-2 rounded font-medium"> Post </button>
            </div>
        </form>
        </div>
    </div>
        </div>

    </div>
@endsection

