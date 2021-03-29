<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>
    <main class="js">

        <section class="aw-header bg-white border-b border-gray-200 shadow-md">
            <header class="container mx-auto flex items-center justify-between flex-wrap px-2 py-4 lg:p-6 ">
                <div id="mobile-menu__toggler" class="block lg:hidden">
                    <button id="mobile-menu__open"
                        class="px-3 py-1 w-20 border rounded text-white bg-purple-700 border-transparent hover:bg-purple-900 transition">
                        Menu
                    </button>
                    <button id="mobile-menu__close"
                        class="hidden px-3 py-1 w-20 border rounded text-white bg-purple-700 border-transparent hover:bg-purple-900 transition">
                        Close
                    </button>
                </div>

                <div
                    class="aw-header__logo flex items-center flex-shrink-0 text-purple-700 hover:text-purple-900 mx-2 lg:mr-6 order-1 transition">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4">
                        </path>
                    </svg>
                </div>

                <nav id="mobile-menu__items"
                    class="aw-header__nav hidden w-full block flex-grow lg:flex lg:items-center lg:w-auto order-3 lg:order-2">
                    <ol class="text-lg lg:flex-grow lg:flex lg:justify-items-around lg:justify-end">
                        <li class="block lg:inline-block lg:mb-0 mr-4">
                            <a href="{{ route('login') }}"
                                class="text-gray-700 hover:text-gray-900 transition">Login</a>
                        </li>
                        <li class="block lg:inline-block lg:mb-0 mr-4">
                            <a href="{{ route('register') }}"
                                class="text-gray-700 hover:text-gray-900 transition">Register</a>
                        </li>
                    </ol>
                </nav>

            </header>
        </section>

        <section class="aw-hero flex items-center justify-center text-black">
            <h1 class="text-center text-5xl py-24">Please Login or Register</h1>
        </section>
    </main>
</body>

</html>
