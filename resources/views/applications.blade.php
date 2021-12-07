@extends('layouts.app')
@section('content')
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
      <div class="flex items-center">
      <h1 class="font-bold text-2xl my-2 mx-4">Applications</h1>
        <div>
          <a href="{{ route("createapplication") }}"><button class="p-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg">Create a new applications record</button></a>
        </div>
        </div>
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Actions
              </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Id
                </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              advertisement_id
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              user_id
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              motivation_people
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              created_at
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              updated_at
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
              @foreach($applications as $applic)
                  <tr>
                      <td class="px-6 py-4 whitespace-nowrap">
                          <div class="flex items-center">
                              <div class="flex-shrink-0 h-10 w-10">
                                  <a href="{{ route("destroyApplication", $applic->id) }}"><svg class="w-4 h-4 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg></a>
                                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                              </div>
                              <div class="ml-4">

                              </div>
                              <div class="text-sm text-gray-500">
                              </div>
                          </div>
      </div>
        </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    {{ $applic-> id}}
                  </div>
                  <div class="ml-4">

                    </div>
                    <div class="text-sm text-gray-500">
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{ $applic->advertisement_id }}</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  {{ $applic-> user_id}}
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{ $applic-> motivation_people}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{ $applic-> created_at}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{ $applic-> updated_at}}
              </td>
              @endforeach
            </tr>
          </tbody>
        </table>
        <div class="mb-2 max-w-6xl ml-4">
        {{ $applications->links() }}
    </div>
      </div>
    </div>
  </div>
</div>

@endsection