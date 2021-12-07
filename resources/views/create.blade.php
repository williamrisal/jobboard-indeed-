@extends('layouts.app')
@section('content')
    <div class="max-w-6xl mx-auto mt-5 md:mt-0 md:col-span-2">
        <form action="{{ route("store") }}" method="POST">
            @csrf
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-start-1 col-end-7">
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input type="text" name="title" id="title" autocomplete="title" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('title')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-start-1 col-end-7">
                            <label for="description" class="block text-sm font-medium text-gray-700">
                                Description
                            </label>
                            <div class="mt-1">
                                <textarea id="description" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">
                                Brief description for your advertisement. URLs are hyperlinked.
                            </p>
                            @error('description')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="contract" class="block text-sm font-medium text-gray-700">Contract type</label>
                            <select id="contract" name="contract" autocomplete="contract" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="CDI">CDI</option>
                                <option value="CDD">CDD</option>
                                <option value="Internship">Internship</option>
                                <option value="Freelance">Freelance</option>
                            </select>
                            @error('contract')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="wage" class="block text-sm font-medium text-gray-700">Wage per month (for work or hours for freelance)</label>
                            <input type="text" name="wage" id="wage" autocomplete="wage" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('wage')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                            <input type="text" name="city" id="city" autocomplete="city" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('city')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="working_time" class="block text-sm font-medium text-gray-700"><svg class="inline-block w-6 h-6 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>Working time (in hours per week)</label>
                            <input type="text" name="working_time" id="working_time" autocomplete="working_time" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('working_time')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

{{--                        <div class="col-span-6 sm:col-span-3">--}}
{{--                            <label for="published" class="block text-sm font-medium text-gray-700">Publish now?</label>--}}
{{--                            <select id="published" name="published" autocomplete="published" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">--}}
{{--                                <option>Right now!</option>--}}
{{--                                <option>Maybe Later</option>--}}
{{--                            </select>--}}
{{--                            @error('published')--}}
{{--                            <p>Bruh</p>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Publish
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
