@extends('layouts.app')
@section('content')
<div class="py-12">
    <div class="max-w-6xl mx-auto">
        @if($applications->isEmpty())
            You have no applications.
            @else

        <h1 class="text-2xl font-bold">Your applications</h1>
        <div class="bg-white sm:rounded-lg">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg my-4">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Company
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Location
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Wage
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Applied
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Link</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($applications as $application)
                                    <!-- Odd row -->
                                        <tr class="bg-white">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                {{ \App\Models\Advertisement::where('id', $application->advertisement_id)->first()->title }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                @php
                                                $id = \App\Models\Advertisement::where('id', $application->advertisement_id)->first()->company_id;
                                                $name = \App\Models\Company::where('id', $id)->first()->name;
                                                @endphp
                                                {{ $name }}
{{--                                                {{ \App\Models\Offer::where('id', $application->offer_id)->first()->company_name }}--}}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ \App\Models\Advertisement::where('id', $application->advertisement_id)->first()->city }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ \App\Models\Advertisement::where('id', $application->advertisement_id)->first()->wage }} euros
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ \App\Models\Advertisement::where('id', $application->advertisement_id)->first()->created_at->diffForHumans() }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a href={{ route("show", $application->advertisement_id) }}>Link</a>
{{--                                                <a href="{{ asset($application->resume) }}" class="text-indigo-600 hover:text-indigo-900">Resumé</a>--}}
                                            </td>
                                        </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endempty
    </div>
</div>
{{--    test--}}
{{--        @php--}}
{{--        dd($application);--}}
{{--        @endphp--}}
{{--    {{ $application->motivation_people }}--}}
{{--    {{ \App\Models\Advertisement::where('id', $application->id)->first()->title }}--}}

@endsection
