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


<div class="grid grid-rows-2 grid-cols-1 align-content-center"
     style="opacity: 0.75; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);">
    <img src="./easl-logo.svg" width="800" />
    <div class="grid grid-cols-1">
        <div class="mt-16 mb-16 text-5xl text-bold text-center text-blue-600">Welcome to EASL</div>
        <div class="grid grid-cols-2 align-content-center">
            <button type="submit" class="h-24 w-50 mr-2 text-4xl text-gray-100 transition-colors
            duration-150 bg-gray-700 rounded-lg focus:shadow-outline
            hover:bg-gray-800 opacity-50 hover:opacity-100" onclick="window.location.href='{{ url('login') }}';">Login</button>
            <button type="submit" class="h-24 w-50 ml-2 text-4xl text-indigo-700 transition-colors
            duration-150 border border-indigo-500 rounded-lg focus:shadow-outline
            hover:bg-indigo-500 hover:text-indigo-100" onclick="window.location.href='{{ url('register') }}';">Sign Up</button>
        </div>
    </div>

    <div class="grid grid-rows-2 text-4xl text-center text-gray-400" style="padding-top: 100px;">
        <p>Learn More . . .</p>
        <i class="fa fa-solid fa-arrow-down text-gray-500 text-5xl mt-2"></i>
    </div>
{{--         style="display: block; margin-left: auto; margin-right: auto; margin-top: auto; margin-bottom: auto;"/>--}}
</div>

</body>
</html>
