@extends('layouts.default')

@section('content')
    <main class=" min-h-[100svh] w-full bg-slate-300 ">

        <div class="container my-0 mx-auto flex items-center justify-center">
            <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5 mt-12">
                @forelse ($movies as $movie)
                    <li class="bg-white rounded p-4 drop-shadow-lg">
                        <h2>
                            <ul class="flex flex-col gap-1">
                                <li>
                                    <span class="font-bold">Title:</span> {{ $movie->title }}
                                </li>
                                <li>
                                    <span class="font-bold">Nationality:</span> {{ $movie->nationality }}
                                </li>
                                <li>
                                    <span class="font-bold">Date:</span> {{ $movie->date }}
                                </li>
                                <li>
                                    <span class="font-bold">Vote:</span> {{ $movie->vote }}
                                </li>
                            </ul>
                        </h2>
                    </li>
                @empty
                    <span>Not found</span>
                @endforelse
            </ul>
        </div>
    </main>
@endsection
