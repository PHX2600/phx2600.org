@extends('_layouts.app')

@section('content')
    <div class="container flex flex-col justify-between items-center min-h-screen p-4 mx-auto">
        <div>
            <div class="border-t border-b border-1 border-white text-white text-sm p-2 mb-2">
                <strong>Hacker</strong> [hack·er] /n/ - One who seeks to understand the details of a system and strives to stretch it's capabilities beyond the original intent.
            </div>

            <div class="flex flex-wrap justify-around text-gray-200">
                <a href="https://join.slack.com/t/phx2600/shared_invite/enQtNjI1MjExMzUxMzEyLTdiMzY0MGNhNGQxN2EyYzIyYjczYzNkZTg5NDdiNzM3NWViYmYzMGE5ZmIwMTg4YWZlOGU4NGZmMDI2MmE3NTA" class="group m-2">
                    <i class="fab fa-fw fa-lg fa-slack"></i>
                    <span class="group-hover:underline">Slack</span>
                </a>

                <a href="#" class="group m-2">
                    <i class="fab fa-fw fa-lg fa-discord"></i>
                    <span class="group-hover:underline">Discord</span>
                </a>

                <a href="#" class="group m-2">
                    <i class="fas fa-fw fa-lg fa-mail-bulk"></i>
                    <span class="group-hover:underline">Mailing List</span>
                </a>

                <a href="https://twitter.com/PHX2600/" class="group m-2">
                    <i class="fab fa-fw fa-lg fa-twitter"></i>
                    <span class="group-hover:underline">Twitter</span>
                </a>

                <a href="https://github.com/PHX2600" class="group m-2">
                    <i class="fab fa-fw fa-lg fa-github"></i>
                    <span class="group-hover:underline">GitHub</span>
                </a>
            </div>
        </div>

        <div class="text-gray-200">
            <div class="mb-12">
                <img src="/assets/images/phx2600.svg" alt="PHX2600 Logo" class="h-32 mb-8">
                <h1 class="absolute font-mono text-2xl -mt-12 ml-16">The Phoenix, Arizona Network of Hackers</h1>
            </div>
        </div>

        <footer>
            <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/" class="text-gray-200 text-xl">
                <i class="fab fa-creative-commons fa-fw"></i>
                <i class="fab fa-creative-commons-by fa-fw"></i>
                <i class="fab fa-creative-commons-nc fa-fw"></i>
                <i class="fab fa-creative-commons-sa fa-fw"></i>
            </a>
        </footer>
    </div>
@endsection
