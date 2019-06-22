@extends('_layouts.app')

@section('content')
    @include('_components.nav')

    <div id="banner">
        <div class="container flex flex-col justify-between items-center px-4 py-12 mx-auto sm:py-24 md:py-32">
            <div class="flex flex-col justify-center items-center">
                <div class="mb-8">
                    <img src="/assets/images/phx2600.svg" alt="PHX2600 Logo" class="h-32 mb-2 sm:mb-8">

                    <h1 class="font-mono text-gray-200 text-base text-xl text-center mx-auto sm:absolute sm:text-left sm:ml-12 sm:-mt-12 sm:text-xl md:ml-16 md:-mt-12 md:text-2xl">
                        The Phoenix, Arizona Network of Hackers
                    </h1>
                </div>

                <div class="border-t border-b border-1 border-white text-gray-200 text-sm p-2 mb-2">
                    <strong>Hacker</strong> [hack·er] /n/ - One who seeks to understand the details of a system and strives to stretch it's capabilities beyond the original intent.
                </div>
            </div>
        </div>
    </div>

    <div id="meeting-info" class="bg-gray-200">
        <div class="container flex flex-col justify-center items-center px-4 py-16 mx-auto">
            <h2 class="font-bold uppercase font-mono mb-12">
                Next Meeting
            </h2>

            <div class="rounded bg-white shadow-xl text-6xl font-mono px-8 py-6 mb-12">
                <meeting-component></meeting-component>
            </div>

            <p>Refert to Slack or the Mailing List for the current meeting location.</p>
        </div>
    </div>

    <footer class="flex justify-center items-center bg-gray-900 px-4 py-8">
        <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/" class="text-xl text-white">
            <i class="fab fa-creative-commons fa-fw"></i>
            <i class="fab fa-creative-commons-by fa-fw"></i>
            <i class="fab fa-creative-commons-nc fa-fw"></i>
            <i class="fab fa-creative-commons-sa fa-fw"></i>
        </a>
    </footer>
@endsection
