@extends('layouts.survey-instrument')

@section('content')

    <div class="container mx-auto p-5">
        <h1 class="text-4xl mt-32 text-center tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
            Welcome to the XCXLab
        </h1>

        <p class="text-md mt-32 text-center tracking-tight leading-10 font-bold text-gray-600 sm:text-1xl sm:leading-none md:text-5xl overview-animation banner-2">
            Facilitating human-centered design studies of<br>explainable AI clinical decision support tools.
        </p>

<!-- Overview -->
        <div class="grid mt-32
        lg:grid-rows-1 lg:grid-cols-4
        md:grid-rows-2 md:grid-cols-2
        sm:grid-rows-4 sm:grid-cols-1
        align-content-center overview-animation">

            <div class="align-content-center p-6">
                <div class="text-2xl text-center text-gray-800">Data</div>
                <div >
                    <img class="h-48 align-content-center" src="{{ asset("vendor/graphics/data-icons.svg") }}" />
                </div>
                <div class="text text-gray-600">
                    Import and manage biomedical data including DICOM images, sequencing reads, and tabular metadata.
                </div>
            </div>

            <div class="align-content-center p-6">
                <div class="text-2xl text-center text-gray-800">Model</div>
                <div>
                    <img class="h-48 align-content-center" src="{{ asset("vendor/graphics/model-icons.svg") }}" />
                </div>
                <div class="text text-gray-600">
                    Model data using standard statistical, machine learning, and deep learning libraries from R and Python with GPU support.
                </div>
            </div>

            <div class="align-content-center p-6">
                <div class="text-2xl text-center text-gray-800">Design</div>
                <div>
                    <img class="h-48 align-content-center" src="{{ asset("vendor/graphics/design-icons.svg") }}" />
                </div>
                <div class="text text-gray-600">
                    Design interactive interfaces using visualization libraries from Python, R/Shiny, and JavaScript.
                </div>
            </div>

            <div class="align-content-center p-6">
                <div class="text-2xl text-center text-gray-800">Test</div>
                <div>
                    <img class="h-48 align-content-center" src="{{ asset("vendor/graphics/test-icons.svg") }}" />
                </div>
                <div class="text text-gray-600">
                    Test interfaces regarding user experience and task performance using a semi-automated study manager.
                </div>
            </div>

        </div>

<!-- END Overview -->

{{--        <div class="grid grid-rows-1 grid-cols-4 align-content-center">--}}
{{--            <div class="text-2xl text-center text-gray-800">Data</div>--}}
{{--            <div class="text-2xl text-center text-gray-800">Model</div>--}}
{{--            <div class="text-2xl text-center text-gray-800">Design</div>--}}
{{--            <div class="text-2xl text-center text-gray-800">Test</div>--}}
{{--        </div>--}}
{{--        <div class="grid grid-rows-1 grid-cols-4 align-content-center">--}}
{{--            <div class="block align-content-center">--}}
{{--                <img src="{{ asset("vendor/graphics/data-icons.svg") }}" />--}}
{{--            </div>--}}
{{--            <div class="block align-content-center">--}}
{{--                <img src="{{ asset("vendor/graphics/model-icons.svg") }}" />--}}
{{--            </div>--}}
{{--            <div class="block align-content-center">--}}
{{--                <img src="{{ asset("vendor/graphics/design-icons.svg") }}" />--}}
{{--            </div>--}}
{{--            <div class="block align-content-center">--}}
{{--                <img src="{{ asset("vendor/graphics/test-icons.svg") }}" />--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="grid grid-rows-1 grid-cols-4 align-content-center">--}}
{{--            <div class="text text-gray-600">--}}
{{--                Import and manage biomedical data including DICOM images, sequencing reads, and tabular metadata.--}}
{{--            </div>--}}
{{--            <div class="text text-gray-600">--}}
{{--                Model data using standard statistical, machine learning, and deep learning libraries from R and Python with GPU support.--}}
{{--            </div>--}}
{{--            <div class="text text-gray-600">--}}
{{--                Design interactive interfaces using visualization libraries from Python, R/Shiny, and JavaScript.--}}
{{--            </div>--}}
{{--            <div class="text text-gray-600">--}}
{{--                Test interfaces regarding user experience and task performance using a semi-automated study manager.--}}
{{--            </div>--}}
{{--        </div>--}}


        <!-- Summary Statistic Cards -->
{{--        <div class="grid grid-rows-1 grid-cols-4 gap-4 mt-32">--}}
{{--            @livewire('summary-card', ['title' => 'Patients', 'mode' => 'primary'])--}}
{{--            @livewire('summary-card', ['title' => 'Models', 'mode' => 'ai_models'])--}}
{{--            @livewire('summary-card', ['title' => 'Visualizations', 'mode' => 'visualizations'])--}}
{{--            @livewire('summary-card', ['title' => 'Surveys', 'mode' => 'surveys'])--}}
{{--        </div>--}}
        <!-- END Summary Statistic Cards -->

    </div>

@endsection

{{--<script type="javascript">--}}
{{--    const observer = new IntersectionObserver(entries => {--}}
{{--        entries.forEach(entry => {--}}
{{--            const square = entry.target.querySelector('.banner-2');--}}

{{--            if (entry.isIntersecting) {--}}
{{--                square.classList.add('overview-animation');--}}
{{--                return; // if we added the class, exit the function--}}
{{--            }--}}

{{--            // We're not intersecting, so remove the class!--}}
{{--            square.classList.remove('overview-animation');--}}
{{--        });--}}
{{--    });--}}

{{--    observer.observe(document.querySelector('.banner-2'));--}}
{{--</script>--}}