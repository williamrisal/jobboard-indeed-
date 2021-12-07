@extends('layouts.app')
@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full space-y-8">
    <div>
      <img class="mx-auto h-12 w-auto" src="{{ asset('img/yesIndeed.svg') }}" alt="notindeed">
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
      </h2>
      <p class="mt-2 text-center text-sm text-gray-600">
        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
        </a>
      </p>
    </div>
    <form class="mt-8 space-y-6" action="traitementform" method="post">
    {{ csrf_field() }}
      <input type="hidden" name="remember" value="true">
      <div class="rounded-md shadow-sm space-y-6">
          <div>
              <label for="first_name" class="sr-only">First name</label>
              <input id="first_name" name="first_name" type="text" autocomplete="first_name" required class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="First name">
              @error('first_name')
              <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
              @enderror
          </div>
          <div>
              <label for="last_name" class="sr-only">Last name</label>
              <input id="last_name" name="last_name" type="text" autocomplete="last_name" required class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Last name">
              @error('last_name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
              @enderror
          </div>
        <div>
          <label for="email_address" class="sr-only">Email address</label>
          <input id="email_address" name="email_address" type="email" autocomplete="email_address" required class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email address">
            @error('email_address')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div>
          <label for="email_address_confirmation" class="sr-only">Confirm email address</label>
          <input id="email_address_confirmation" name="email_address_confirmation" type="email" autocomplete="email_address_confirmation" required class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Confirm email">
            @error('email_address_confirmation')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div>
          <label for="password" class="sr-only">Password</label>
          <input id="password" name="password" type="password" autocomplete="password" required class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
            @error('password')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div>
          <label for="password_confirmation" class="sr-only">Confirm password</label>
          <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="password_confirmation" required class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Confirm password">
            @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
      </div>

      <div class="flex items-center justify-between">
        <div class="flex items-center">
          <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
          <label for="remember-me" class="ml-2 block text-sm text-gray-900">
            Remember me
          </label>
        </div>
      </div>

      <div>
        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          <span class="absolute left-0 inset-y-0 flex items-center pl-3">
            <!-- Heroicon name: solid/lock-closed -->
            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
            </svg>
          </span>
          Sign Up
        </button>
        <div class="text-sm mt-2">
          <a href="signUp_form_companies" class="font-medium text-indigo-600 hover:text-indigo-500">
            Create an account as a company
          </a>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
