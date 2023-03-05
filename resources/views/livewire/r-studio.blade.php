<div style="height: 100%; width: 100%; position: relative;">
    <div class="text text-white bg-blue-900 pl-2 pt-1 pb-1">RStudio Dashboard</div>
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
            text-white bg-gradient-to-br from-purple-600 to-blue-500 opacity-75
             hover:bg-gradient-to-bl hover:opacity-100 focus:ring-4 focus:outline-none focus:ring-blue-300
             dark:focus:ring-blue-800 font-medium rounded-lg text-sm text-center mr-2 mb-2"
                    aria-hidden="true"
                    onclick="window.open('{{ $path }}', 'rstudio', 'menubar=no');"
            >
                Launch RStudio Session
            </button>

        </div>
        <div class="pl-2">

            <div class="text text-lg font-bold">
                Shiny Apps
            </div>
            <div class="grid grid-flow-row grid-flow-col">
                @foreach($working_directory as $dir)
                    <button onclick="window.open('{{ $dir }}', '{{ $dir }}', 'menubar=no');"
                            class="p-4 border border-solid rounded-lg
                            bg-blue-300 hover:bg-blue-200
                        text-center">
                        {{ $dir }}</button>
                @endforeach
            </div>

        </div>
{{--        <div class="pl-2">--}}
{{--            RStudio Projects<br>--}}


{{--        </div>--}}

{{--        <div>--}}
{{--            Active EASL Project: {{ $active_project }}--}}
{{--        </div>--}}

{{--        <div>--}}
{{--            Current Working Directory: {{ $temp_path }}--}}
{{--        </div>--}}

{{--        <div>--}}
{{--            Current Available Directories:<br>--}}

{{--        </div>--}}

    </div>
{{--    <iframe class="shadow shadow-black w-full h-full" src={{ $path }}></iframe>--}}
</div>
