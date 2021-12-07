@extends('layouts.app')
@section('content')
    <div class="mx-auto max-w-6xl mt-5 md:mt-0 md:col-span-2">
        <h1 class="text-2xl font-bold my-4">Create a new Applications record</h1>
        <form action="{{ route("create_applications_form") }}" method="post">
            @csrf
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="Applications_id" class="block text-sm font-medium text-gray-700">Applications id</label>
                            <input type="text" name="Applications_id" id="Applications_id" autocomplete="Applications_id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('Applications_id')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="people_id" class="block text-sm font-medium text-gray-700">people id</label>
                            <input type="text" name="people_id" id="people_id" autocomplete="people_id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('people_id')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="motivation_people" class="block text-sm font-medium text-gray-700">Motivation people</label>
                            <textarea type="text" name="motivation_people" id="motivation_people" autocomplete="motivation_people" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </textarea>
                            @error('motivation_people')
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
