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

@yield('content')

{{--<script>--}}
{{--    function addProjectTab() {--}}
{{--        project_tabs = document.getElementById("dashboard-tabs");--}}
{{--        project_tabs.innerHTML = project_tabs.innerHTML +--}}
{{--            '<li class="mr-2"> <a href="#" class="inline-block text-gray-500 hover:text-gray-600 ' +--}}
{{--            'hover:bg-gray-50 rounded-t-lg py-4 px-4 text-sm font-medium text-center active" aria-current="page">Project 2</a> </li>'--}}
{{--    };--}}
{{--</script>--}}

@livewireScripts
</body>
</html>
