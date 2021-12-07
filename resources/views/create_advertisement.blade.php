@extends('layouts.app')
@section('content')
    <div class="mx-auto max-w-6xl mt-5 md:mt-0 md:col-span-2">
        <h1 class="text-2xl font-bold my-4">Create a new advertisements record</h1>
        <form action="{{ route("create_advertissement_form") }}" method="post">
            @csrf
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="title" class="block text-sm font-medium text-gray-700">title</label>
                            <input type="text" name="title" id="title" autocomplete="title" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('title')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="contrat_type" class="block text-sm font-medium text-gray-700">contrat type</label>
                            <input type="text" name="contrat_type" id="contrat_type" autocomplete="contrat_type" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('contrat_type')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="city" class="block text-sm font-medium text-gray-700">city</label>
                            <input type="text" name="city" id="city" autocomplete="city" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('city')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="wage" class="block text-sm font-medium text-gray-700">wage</label>
                            <input type="text" name="wage" id="wage" autocomplete="wage" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('wage')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="description" class="block text-sm font-medium text-gray-700">description</label>
                            <textarea type="text" name="description" id="description" autocomplete="description" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </textarea>
                            @error('description')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Send
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
