<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'EASL')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.6/tailwind.min.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/custom-animations.css" rel="stylesheet" type="text/css">

    <!-- required modeler styles -->
    <link rel="stylesheet" href="https://unpkg.com/bpmn-js@9.3.2/dist/assets/bpmn-js.css">
    <link rel="stylesheet" href="https://unpkg.com/bpmn-js@9.3.2/dist/assets/diagram-js.css">
    <link rel="stylesheet" href="https://unpkg.com/bpmn-js@9.3.2/dist/assets/bpmn-font/css/bpmn.css">

    <!-- modeler distro -->
    <script src="https://unpkg.com/bpmn-js@9.3.2/dist/bpmn-modeler.development.js"></script>

    <!-- needed for this example only -->
    <script src="https://unpkg.com/jquery@3.3.1/dist/jquery.js"></script>

    @livewireStyles
</head>
<body>
{{--<x-header></x-header>--}}
<header class="text-gray-700 body-font border-b">
{{--    <div class="container mx-auto flex flex-wrap p-1 flex-col md:flex-row items-center">--}}
    <div class="grid grid-cols-2 items-start">
{{--        <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">--}}
{{--            <a href="/" class="mr-5 hover:text-gray-900">Home</a>--}}
{{--            --}}{{--            <a href="/data/add-dicom" class="mr-5 hover:text-gray-900">Database</a>--}}
{{--            <a href="/projects" class="mr-5 hover:text-gray-900">Projects</a>--}}
{{--            <a href="/database" class="mr-5 hover:text-gray-900">Database</a>--}}
{{--            <a href="/models" class="mr-5 hover:text-gray-900">Models</a>--}}
{{--            <a href="/design" class="mr-5 hover:text-gray-900">Design</a>--}}
{{--            <a href="/bpmn" class="mr-5 hover:text-gray-900">PM</a>--}}
{{--            <a href="/user-study" class="mr-5 hover:text-gray-900">User Study</a>--}}
{{--        </nav>--}}
{{--        <a class="flex order-first lg:order-none lg:w-1/5 title-font font-bold items-left text-gray-900 lg:items-left--}}
{{--        lg:justify-left mb-1 md:mb-0">--}}
        <div class="flex order-first lg:order-none lg:w-1/5 title-font font-bold items-start text-gray-900 lg:items-left
        lg:justify-left m-1 ml-3">
            <img src="header-logo.svg" width="50" style="opacity: 0.75;"/>
        </div>
        <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
            <a href="/login" class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none
            hover:bg-gray-300 rounded text-base mt-4 md:mt-0">Login</a>
        </div>
    </div>
</header>

<div class="grid grid-cols-2 grid-rows-2">

    <div style="display: block; height: 50vh;"
         class="content-center align-content-center
        m-1 border border-solid border-gray-500 rounded shadow">

        <!-- rstudio -->
        <div style="height: 100%; width: 100%; position: relative;">
            <button type='submit' class="fa fa-external-link-alt
                    mt-1 mr-1
                     text-2xl text-gray-300 opacity-50 hover:text-gray-600"
                    style="position: absolute; top: 3px; right: 5px; z-index: 2;"
                    aria-hidden="true"
                    onclick="window.open('/bpmn', 'bpmn', 'menubar=no');"></button>
            <iframe class="shadow shadow-black w-full h-full" src="/bpmn"></iframe>
        </div>

    </div>

    <div style="display: block;"
         class="content-center align-content-center
        m-1 border border-solid border-gray-500 rounded shadow">

        <!-- rstudio -->
        <livewire:r-studio />

    </div>

    <div style="display: block;"
    class="content-center align-content-center
        m-1 border border-solid border-gray-500 rounded shadow">

        <!-- Data dashboard -->
        <livewire:datadashboard />

    </div>

    <div style="display: block;"
         class="content-center align-content-center
        m-1 border border-solid border-gray-500 rounded shadow">

        <!-- Data dashboard -->
        <livewire:test-component />

    </div>

{{--    <div style="display: block;"--}}
{{--         class="content-center align-content-center--}}
{{--        m-1 border border-solid border-gray-500 rounded shadow">--}}

{{--        <div class="flex grid-flow-col" style="height: 100%;">--}}
{{--            <div class="flex-none w-14 bg-gray-200 mt-2 mb-2">--}}
{{--                <!-- Vertical Tabs for different dashboards -->--}}
{{--                <div class="flex-none grid grid-rows-4">--}}
{{--                    <button class="bg-gray-600 rounded opacity-75--}}
{{--                    border border-solid border-gray-900--}}
{{--                    pt-6 pb-6 mt-2 ml-1 shadow">--}}
{{--                        <p style="transform: rotate(-90deg)"--}}
{{--                           class="text-xl text-blue-100 text-center m-0">users</p>--}}
{{--                    </button>--}}
{{--                    <button class="bg-white rounded opacity-75 pt-6 pb-6 mt-1--}}
{{--                    border border-solid border-gray-900--}}
{{--                    ml-1 shadow--}}
{{--                    hover:bg-blue-100">--}}
{{--                        <p style="transform: rotate(-90deg)"--}}
{{--                           class="text-xl text-gray-600 text-center m-0">data</p>--}}
{{--                    </button>--}}
{{--                    <button class="bg-white rounded opacity-75 pt-6 pb-6 mt-1--}}
{{--                    border border-solid border-gray-900--}}
{{--                    ml-1 shadow--}}
{{--                    hover:bg-gray-200">--}}
{{--                        <p style="transform: rotate(-90deg)"--}}
{{--                           class="text-xl text-gray-600 text-center m-0">models</p>--}}
{{--                    </button>--}}
{{--                    <button class="bg-white rounded opacity-75 pt-6 pb-6 mt-1--}}
{{--                    border border-solid border-gray-900--}}
{{--                    ml-1 shadow--}}
{{--                    hover:bg-gray-200">--}}
{{--                        <p style="transform: rotate(-90deg)"--}}
{{--                           class="text-xl text-gray-600 text-center m-0">visuals</p>--}}
{{--                    </button>--}}

{{--                </div>--}}
{{--                <!-- End Vertical Tabs for different dashboards -->--}}
{{--            </div>--}}
{{--            <div class="block border border-solid border-l-4 border-gray-600 mt-2 mr-2 mb-2"--}}
{{--                 style="display: block; width: 100%; height: auto;">--}}

{{--                <!-- data tab -->--}}
{{--            Check for header mods here: --}}
{{--                /easl/public/vendor/Viewers/platform/viewer/src/components/Header/Header.js--}}
{{--                <div style="height: 100%; width: 100%; position: relative;">--}}
{{--                    <button type='submit' class="fa fa-external-link-alt--}}
{{--                    mt-1 mr-1--}}
{{--                     text-2xl text-white opacity-50 hover:opacity-100"--}}
{{--                            style="position: absolute; top: 3px; right: 5px; z-index: 2;"--}}
{{--                            aria-hidden="true"--}}
{{--                            onclick="window.open('viewer', 'viewer', 'menubar=no');"></button>--}}
{{--                    <iframe class="shadow shadow-black w-full h-full" src="viewer"></iframe>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
</div>

@livewireScripts
</body>
</html>
