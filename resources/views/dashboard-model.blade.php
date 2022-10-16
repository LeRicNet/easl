@extends('layouts.survey-instrument')

@section('content')

    <div class="tabs">
        <ul class="tabs__navbar flex flex-wrap border-b border-gray-200">
            <li class="mr-1 ml-1">
                <button class="tabs__button inline-block bg-white border-2 border-gray-200 text-blue-600--}}
            rounded-t-lg py-2 px-3 text-sm font-medium text-center active" data-for-tab="1">Dashboard</button>
            </li>
            <li class="mr-1">
                <button id="create-new-project" class="tabs__button inline-block bg-white border-2 border-gray-200 rounded-t-lg
            py-2 px-3 text-sm font-medium text-center" data-for-tab="2">
                    Jupyter TF-GPU
                </button>
            </li>
            <li class="mr-1">
                <button id="create-new-project" class="tabs__button inline-block bg-white border-2 border-gray-200 rounded-t-lg
            py-2 px-3 text-sm font-medium text-center" data-for-tab="3">
                    RStudio
                </button>
            </li>
            <li class="mr-1">
                <button id="create-new-project" class="tabs__button inline-block bg-white border-2 border-gray-200 rounded-t-lg
            py-2 px-3 text-sm font-medium text-center" data-for-tab="4">
                    Help
                </button>
            </li>
        </ul>

        <div class="tabs__content active" data-tab="1">
            <div class="grid grid-flow-col grid-rows-1 mt-5 ml-5">
                <div class="text text-lg text-black w-1/2">
                    <div class="text text-2xl text-gray-600">
                        Model Dashboard
                    </div>
                </div>
            </div>

        </div>

        <div class="tabs__content hidden" data-tab="2">
            <div class="grid grid-flow-row grid-flow-col ml-2 mt-2 mr-2 mb-2 h-screen shadow-2xl">
                <iframe class="shadow shadow-black w-full h-full" src="/lab"></iframe>
            </div>
        </div>

        <div class="tabs__content hidden" data-tab="3">
            <div class="grid grid-flow-row grid-flow-col ml-2 mt-2 mr-2 mb-2 h-screen shadow-2xl">
                <iframe class="shadow shadow-black w-full h-full" src="/rstudio"></iframe>
            </div>
        </div>

        <div class="tabs__content hidden" data-tab="4">
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
