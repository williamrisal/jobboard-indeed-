@extends('layouts.app')
@section('content')
    @if($applications->isEmpty())
        <p class="m-4">Your company don't have any advertisements on our website. <a class="hover:underline" href="#">Do you want to create one ?</a></p>
    @else
        @foreach($company as $title)
            <h1 class="text-2xl font-bold text-gray-800 m-4 ">All advertisements for {{ $title->name }}</h1>
            <a href="{{ route("company.create") }}"><button class="p-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg">Create a new applications record</button></a>
        @endforeach
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Job Title
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Description
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Published
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Link
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($advertisements as $advertisement)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div>
                                        <div class="font-medium text-gray-900">
                                            {{ $advertisement->title }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $advertisement->description }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $advertisement->created_at->diffForHumans()}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a class="hover:underline" href={{ route("company.show", $advertisement->id) }}>Link</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection
