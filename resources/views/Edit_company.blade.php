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
    <form class="mt-8 space-y-6" action="send_edit_form_companies" method="post">
    {{ csrf_field() }}
      <input type="hidden" name="remember" value="true">
      <div class="rounded-md shadow-sm space-y-6">
        <div>
          <label for="email-address" class="sr-only">Email address</label>
          <input id="email-address" name="email" type="email" autocomplete="email" required class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email address">
        </div>
        <div>
          <label for="confirm-email" class="sr-only">Password</label>
          <input id="confirm-email" name="confirm-email" type="email" autocomplete="current-confirm-email" required class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Confirm email">
          @error('confirm-email')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
          @enderror
        </div>
        <div>
            <label for="Companies_name" class="sr-only">Companies Name</label>
            <input id="Companies_name" name="Companies_name" type="text" autocomplete="Companies_name" required class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Companies name">
          @error('Companies_name')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label for="first_name" class="sr-only">First name</label>
          <input id="first_name" name="first_name" type="text" autocomplete="first_name" required class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="First name">
          @error('Companies_name')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label for="last_name" class="sr-only">Last name</label>
          <input id="last_name" name="last_name" type="text" autocomplete="last_name" required class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Last name">
          @error('Companies_name')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label for="password" class="sr-only">Password</label>
          <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
          @error('password')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label for="confirm-password" class="sr-only">Password</label>
          <input id="confirm-password" name="confirm-password" type="password" autocomplete="confirm-password" required class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Confirm password">
          @error('confirm-password')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label for="SIRET" class="sr-only">SIRET</label>
          <input id="SIRET" name="SIRET" type="text" autocomplete="SIRET" required class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="SIRET">
          @error('SIRET')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label for="number_employees" class="sr-only">number employees</label>
          <input id="number_employees" name="number_employees" type="text" autocomplete="number_employees" required class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="number employees">
          @error('number_employees')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label for="website" class="sr-only">website</label>
          <input id="website" name="website" type="text" autocomplete="website" required class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="website">
          @error('website')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label for="phone" class="sr-only">phone</label>
          <input id="phone" name="phone" type="tel" autocomplete="phone" required class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="phone">
          @error('phone')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label for="Contact_name" class="sr-only">Contact name</label>
          <input id="Contact_name" name="Contact_name" type="text" autocomplete="Contact_name" required class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Contact name">
          @error('Contact')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label for="activities" class="sr-only">activities</label>
          <input id="activities" name="activities" type="text" autocomplete="activities" required class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="activities">
          @error('activities')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label for="postal_code" class="sr-only">postal code</label>
          <input id="postal_code" name="postal_code" type="text" autocomplete="postal_code" required class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="postal code">
          @error('postal_code')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label for="city" class="sr-only">city</label>
          <input id="city" name="city" type="text" autocomplete="city" required class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="city">
          @error('city')
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

        <div class="text-sm">
          <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
            Forgot your password?
          </a>
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
        </div>
      </div>
    </form>
  </div>
</div>
@endsection