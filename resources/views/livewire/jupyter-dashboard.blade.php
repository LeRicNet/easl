<div style="height: 100%; width: 100%; position: relative;">
    <div class="text text-white bg-gray-500 pl-2 pt-1 pb-1">Jupyter Dashboard</div>
    <div>
        <div class="pl-2 grid grid-flow-col">
            {{--            <button type='submit' class="--}}
            {{--            bg-blue-300--}}
            {{--            border border-2 border-solid--}}
            {{--            rounded-lg--}}
            {{--            fa fa-external-link-alt--}}
            {{--            text-xl text-black text-left opacity-50--}}
            {{--            hover:opacity-100"--}}
            {{--                    aria-hidden="true"--}}
            {{--                    onclick="window.open('{{ $path }}', 'rstudio', 'menubar=no');">--}}
            {{--                Launch RStudio Session--}}
            {{--            </button>--}}

            <button type="button" class="mt-2 p
            text-white bg-gradient-to-r from-blue-500 to-red-600 opacity-75
             hover:bg-gradient-to-bl hover:opacity-100 focus:ring-4 focus:outline-none focus:ring-blue-300
             dark:focus:ring-blue-800 font-medium rounded-lg text-sm text-center mr-2 mb-2"
                    aria-hidden="true"
                    onclick="window.open('{{ $path }}', 'jupyter', 'menubar=no');"
            >
                Launch Jupyter Session
            </button>

        </div>
        <div class="pl-2">
            Jupyter Projects
        </div>
        <div class="pl-2">
            Model Library
        </div>
    </div>
    {{--    <iframe class="shadow shadow-black w-full h-full" src={{ $path }}></iframe>--}}
</div>
