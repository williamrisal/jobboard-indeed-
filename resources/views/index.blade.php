@extends('layouts.app')
@section('content')
    <div class="mx-auto my-4 max-w-6xl">
        @foreach($advertisement as $offer)
            <div class="flex flex-col rounded-lg bg-blue-100 my-2 p-2">
                <div>
                    <h3 class="font-bold text-xl">{{ $offer->title }}</h3>
{{--                    {{ $offer->company->name }}--}}
                    <p>{{ $offer->description }}</p>
                    <div id="{{"p" . $offer->id }}" class="hidden my-2">
                        <div>
                            <svg class="w-6 h-6 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <p class="inline-block">{{ $offer->contract_type }}
                                <svg class="w-6 h-6 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <p class="inline-block">{{ $offer->city }}</p>
                            <svg class="inline-block w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            <p class="inline-block">{{ $offer->wage . " €/mois"}}</p>
                            @empty($offer->working_time)
                            @else
                                <svg class="inline-block w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <p class="inline-block">{{ $offer->working_time . "h/semaine" }}</p>
                            @endempty
                        </div>
                        <a href={{ route("show", $offer->id) }}><button class="mt-2 p-2 bg-blue-400 rounded-lg">Apply</button></a>
                    </div>
                </div>
                <div>
                    <a class="underline" id="{{ $offer->id }}" onclick="clicked(this.id)">Learn More</a>
{{--                    <button id="{{ $offer->id }}" onclick="clicked(this.id)" class="text-gray-100 rounded-lg bg-blue-700 p-2"><svg class="w-4 h-4 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg> Learn More</button>--}}
                </div>
            </div>
        @endforeach
    </div>
    <div class="mx-auto mb-2 max-w-6xl">
        {{ $advertisement->links() }}
    </div>
    <script>
        function clicked(id) {
            let button = document.getElementById(id);
            let div_p = document.getElementById("p" + id);

            if (div_p.classList.contains("hidden")) {
                div_p.classList.remove("hidden");
                button.classList.add("hidden");
            }
        }
    </script>
@endsection
