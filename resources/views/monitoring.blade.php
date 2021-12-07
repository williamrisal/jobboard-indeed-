@extends('layouts.app')
@section('content')
    <div class="mx-auto max-w-6xl">
    <h1 class="font-bold text-2xl ml-2 my-2">Tables</h1>
<span class="relative z-0 inline-flex shadow-sm rounded-md m-2">
  <a href="monitoring/advertisements"><button type="button" class="relative inline-flex items-center px-4 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">Advertisements
  </button>
  </a>
  <a href="monitoring/users"><button type="button" class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">Users
  </button></a>
  <a href="monitoring/applications"><button type="button" class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">Applications
  </button></a>
  <a href="monitoring/companies"><button type="button" class="-ml-px relative inline-flex items-center px-4 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">Companies
  </button>
  </a>
</span>
    </div>
@endsection
