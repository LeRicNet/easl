@extends('layouts.survey-instrument')

@section('content')

<div class="tabs">
    <ul class="tabs__navbar flex flex-wrap border-b border-gray-200">
        <li class="mr-1 ml-1">
            <button class="tabs__button inline-block bg-gray-100 border-2 border-gray-200 text-blue-600--}}
            rounded-t-lg py-2 px-3 text-sm font-medium text-center active" data-for-tab="1">Dashboard</button>
        </li>
        <li class="mr-1">
            <button id="create-new-project" class="tabs__button inline-block bg-white border-2 border-gray-200 rounded-t-lg
            py-2 px-3 text-sm font-medium text-center" data-for-tab="99">
                Create Project +
            </button>
        </li>
        <li class="mr-1">
            <button class="tabs__button inline-block bg-gray-100 border-2 border-gray-200 text-blue-600--}}
            rounded-t-lg py-2 px-3 text-sm font-medium text-center" data-for-tab="2">Help</button>
        </li>
    </ul>

    <div class="tabs__content active" data-tab="1">
        <div class="grid grid-flow-col grid-rows-1 mt-5 ml-5">
            <div class="text text-lg text-black w-1/2">
                <div class="text text-2xl text-gray-600">
                    Project Dashboard
                </div>
                <b>Projects</b> are the core framework in XCXLab. Projects link all components of the designer
                process workflow for HCI used in XCXLab. Projects include notes, data, models, visualizations, evaluations, and other associated
                artifacts. Projects can be shared with other users or kept private. Below you can create a new projects and interact with current
                or previous ones.
            </div>

        </div>
        <div class="mt-5 ml-5">
            <button class="bg-blue-400 rounded-3xl border border-solid shadow-xl pt-32 pb-32 pl-8 pr-8 text-3xl text-white hover:shadow">
                Create Project +
            </button>
            <button class="bg-blue-200 rounded-3xl border-2 border-blue-400 border-solid shadow-xl pt-32 pb-32 pl-8 pr-8 pl-4 text-3xl text-white hover:shadow">
                Example Project
            </button>
        </div>

        {{-- Table of Projects --}}
        <div class="mt-10 max-w-xl mx-auto">
            <p class="text-2xl"> Active Projects</p>
            @foreach(\App\Models\Project::all() as $project)
                <div class="border-b mb-5 pb-5 border-gray-200">
                    <a class="text-2xl font-bold mb-2">{{ $project->title }}</a>
                    <p>{{ Str::limit($project->title, 100) }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <div class="tabs__content hidden" data-tab="99">
        <div class="grid grid-cols-1 grid-rows-1 w-1/2 text text-2xl text-black text-center">
            <p>Create Project</p>
        </div>

{{--        <div>--}}
{{--            <button class="border-2 border-solid border-black rounded-lg ml-4 p-1 shadow-lg" onclick="window.open('/projects', '_blank')">--}}
{{--                Popout--}}
{{--            </button>--}}
{{--        </div>--}}

        <livewire:create-project />
    </div>

    <div class="tabs__content hidden" data-tab="2">
        <h1>Help</h1>
    </div>
</div>

@endsection


<script>
    function setupTabs() {
        document.querySelectorAll(".tabs__button").forEach(button => {
            button.addEventListener("click", () => {
                const navBar = button.parentElement.parentElement;
                const tabsContainer = navBar.parentElement;
                const tabNumber = button.dataset.forTab;
                const tabToActivate = tabsContainer.querySelector(`.tabs__content[data-tab='${tabNumber}']`);
                const currentTab = tabsContainer.getElementsByClassName("active")[1];

                navBar.querySelectorAll(".tabs__button").forEach(button => {
                   button.classList.remove("active");
                });

                navBar.querySelectorAll(".tabs__content").forEach(tab => {
                    tab.classList.remove("active");
                });

                currentTab.classList.remove("active");
                currentTab.classList.add("hidden");

                button.classList.add("active");
                tabToActivate.classList.remove("hidden");
                tabToActivate.classList.add("active");

                console.log(tabToActivate);
            });
        })
    }

    document.addEventListener("DOMContentLoaded", () => {
       setupTabs();
    });
</script>
