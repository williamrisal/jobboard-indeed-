@extends('layouts.app')
@section('content')
    <div>
        <div class="mx-auto max-w-6xl my-8">
            <h2 class="font-bold text-2xl">Apply to the offer</h2>
        </div>
        </div>
        <div class="mx-auto max-w-6xl">
            <div>
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="bg-blue-200 rounded-lg px-2 py-2">
                            <div class="mb-1">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $advertisement->title }}</h3>
                            <p class="mt-1 text-sm text-gray-600">
                                {{ $advertisement->description }}
                            </p>
                            </div>
                            <div>
                                <svg class="w-6 h-6 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                <p class="inline-block">{{ $advertisement->contract_type }}
                                    <svg class="w-6 h-6 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <p class="inline-block">{{ $advertisement->city }}</p>
                                <svg class="inline-block w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                <p class="inline-block">{{ $advertisement->wage . " €/mois"}}</p>
                                @empty($advertisement->working_time)
                                @else
                                    <svg class="inline-block w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <p class="inline-block">{{ $advertisement->working_time . "h/semaine" }}</p>
                                @endempty
                            </div>
                        </div>
                    </div>
{{--                    @auth--}}
{{--                        @php--}}
{{--                            ddd(\App\Models\Application::where("advertisement_id", current_user()->applications()->get()->firstOrFail()->advertisement_id));--}}
{{--                        @endphp--}}
{{--                        {{ $applied ? "You can't apply dude" : "go for it"  }}--}}
{{--                    @endauth--}}
                    @if(!Auth::guard("company")->check() and !$exists)
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form action="{{ route("applied", $advertisement->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="offer_id" value="{{ $advertisement->id }}" >
                            <div class="shadow sm:rounded-md sm:overflow-hidden">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
                                            @auth()
                                            <input type="text" name="first_name" id="first_name" autocomplete="first_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ auth()->user()->first_name }}" readonly="readonly">
                                            @else
                                            <input type="text" name="first_name" id="first_name" autocomplete="first_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @endauth
                                            @error('first_name')
                                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                                            @auth()
                                            <input type="text" name="last_name" id="last_name" autocomplete="last_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ auth()->user()->last_name }}" readonly="readonly">
                                            @else
                                                <input type="text" name="last_name" id="last_name" autocomplete="last_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @endauth
                                            @error('last_name')
                                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                                            <select id="gender" name="gender" autocomplete="gender" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option value="Men">Men</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select>
                                            @error('gender')
                                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone number</label>
                                            <input type="text" name="phone_number" id="phone_number" autocomplete="phone_number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('phone_number')
                                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                                            <input type="text" name="address" id="address" autocomplete="address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('address')
                                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="postal_code" class="block text-sm font-medium text-gray-700">Postal Code</label>
                                            <input type="text" name="postal_code" id="postal_code" autocomplete="postal_code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('postal_code')
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
                                            <label for="birth_date" class="block text-sm font-medium text-gray-700">Birth Date</label>
                                            <input type="date" name="birth_date" id="birth_date" autocomplete="birth_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('birth_date')
                                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="col-span-6">
                                            <label for="email_address" class="block text-sm font-medium text-gray-700">Email address</label>
                                            @auth()
                                                <input type="text" name="email_address" id="email_address" autocomplete="email_address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ auth()->user()->email }}" readonly="readonly">
                                            @else
                                                <input type="text" name="email_address" id="email_address" autocomplete="email_address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @endauth
                                            @error('email_address')
                                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="website" class="block text-sm font-medium text-gray-700">Website</label>
                                        <input type="text" name="website" id="website" autocomplete="website" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        @error('website')
                                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">
                                            Your CV
                                        </label>
                                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                            <div class="space-y-1 text-center">
                                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <div class="flex text-sm text-gray-600">
                                                    <label for="resume_file" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                        <span>Upload your resume</span>
                                                        <input id="resume_file" name="resume_file" type="file" class="sr-only">
                                                    </label>
                                                    <p class="pl-1">or drag and drop</p>
                                                </div>
                                                <p class="text-xs text-gray-500">
                                                    PDF up to 10MB
                                                </p>
                                            </div>
                                        </div>
                                        @error('resume_file')
                                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="cover_letter" class="block text-sm font-medium text-gray-700">
                                            Cover letter
                                        </label>
                                        <div class="mt-1">
                                            <textarea id="cover_letter" name="cover_letter" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                                        </div>
                                        <p class="mt-2 text-sm text-gray-500">
                                            Explain why do you want to apply to this job.
                                        </p>
                                        @error('cover_letter')
                                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                        @enderror
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
                    @else
                        You can't apply to this offer.
                        @endif
                </div>
            </div>
        </div>

@endsection
