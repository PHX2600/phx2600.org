@extends('_layouts.app')

@section('content')
    @include('_components.nav')

    <div id="banner" class="bg-gradient-red-black">
        <div class="container flex flex-col justify-between items-center px-4 py-12 mx-auto sm:py-24 md:py-32">
            <div class="flex flex-col justify-center items-center">
                <div class="mb-8">
                    <img src="/assets/images/phx2600.svg" alt="PHX2600 Logo" class="h-32 mb-2 sm:mb-8">

                    <h1 class="font-mono text-gray-200 text-base text-xl text-center mx-auto sm:absolute sm:text-left sm:ml-12 sm:-mt-12 sm:text-xl md:ml-16 md:-mt-12 md:text-2xl">
                        The Phoenix, Arizona Network of Hackers
                    </h1>
                </div>

                <div class="border-t border-b border-1 border-gray-400 text-gray-400 text-sm p-2 mb-2">
                    <strong>Hacker</strong> [hack·er] /n/ - One who seeks to understand the details of a system and strives to stretch it's capabilities beyond the original intent.
                </div>
            </div>
        </div>
    </div>

    <div id="meeting-info" class="bg-gray-200">
        <div class="container flex flex-col justify-center items-center px-4 py-16 mx-auto md:flex-row md:items-start">
            <div class="mb-8 text-center md:mb-0 md:mr-16">
                <meeting-component></meeting-component>

                <p class="text-gray-600 text-sm">
                    Check <a href="https://twitter.com/PHX2600" class="hover:underline">Twitter</a>
                    for the current meeting location.
                </p>
            </div>

            <div class="max-w-md">
                <p class="mb-8 md:text-sm lg:text-base">
                    The PHX2600 is a local group of hackers and technology
                    enthusiasts that meet on a monthly basis to discuss all
                    things code, tech or otherwise hacker related. Most members
                    enjoy exploring and exploiting technology and life in an
                    effort to better use and understand those systems.
                </p>

                <p class="mb-8 md:text-sm lg:text-base">
                    Meetings are held on the first Friday of every month
                    starting at 6PM. There is rarely a planned schedule and
                    anyone prepared to give a presentation or show off a project
                    may do so at any time during the meeting. All meetings are
                    open to the public. See the
                    <a href="/guidelines" class="underline hover:text-red-800">Meeting Guidelines</a>
                    for more info.
                </p>
            </div>
        </div>
    </div>

    <footer class="bg-gray-900">
        <div class="container flex justify-center items-center mx-auto px-4 py-12">
            <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/" class="text-3xl text-white">
                <i class="fab fa-creative-commons fa-fw"></i>
                <i class="fab fa-creative-commons-by fa-fw"></i>
                <i class="fab fa-creative-commons-nc fa-fw"></i>
                <i class="fab fa-creative-commons-sa fa-fw"></i>
            </a>
        </div>
    </footer>
@endsection
