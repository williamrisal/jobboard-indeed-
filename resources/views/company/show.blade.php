@extends('layouts.app')
@section('content')
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <h1 class="text-2xl font-bold mx-4 my-4">Applications for this advertisement</h1>
        @foreach($applications as $application)
        <div class="border-t border-gray-200">
            <dl>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Full name
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        @foreach($users as $user)
                        {{ $user->first_name }}
                        {{ $user->last_name }}
                        @endforeach
                    </dd>
                </div>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Email address
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $user->email }}
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Address
                    </dt>
                    @empty($user->address || $user->postal_code || $user->city)
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            Unknown
                        </dd>
                    @else
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $user->address }}, {{ $user->postal_code }} {{ $user->city }}
                        </dd>
                    @endempty
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Phone
                    </dt>
                    @empty($user->phone)
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            Unknown
                        </dd>
                    @else
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $user->phone }}
                    </dd>
                    @endempty
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        CV
                    </dt>
                    @empty($user->cv)
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        No CV provided.
                        </dd>
                    @else
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                            <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                <div class="w-0 flex-1 flex items-center">
                                    <!-- Heroicon name: solid/paper-clip -->
                                    <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="ml-2 flex-1 w-0 truncate">resume.pdf</span>
                                </div>
                                <div class="ml-4 flex-shrink-0">
                                    <a href="http://127.0.0.1:8000/{{ $user->cv }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                                        View
                                    </a>
                                </div>
                                @endempty
                            </li>
                        </ul>
                    </dd>
                </div>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Motivation letter
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        @foreach($applications as $application)
                            {{ $application->motivation_people }}
                        @endforeach
                    </dd>
                </div>
            </dl>

        </div>
            @endforeach
    </div>


@endsection
