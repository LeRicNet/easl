<div style="height: 100%; width: 100%; position: relative;">
    <div class="text text-white bg-green-500 pl-2 pt-1 pb-1">
            Project Dashboard
    </div>

    <div style="position: absolute; top: 3px; right: 12px; text-align: right;">
        <!-- Dropdown -->
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn fa fa-1x fa-ellipsis-h text-blue-300">

            </button>
            <div id="myDropdown" class="dropdown-content
            p-2
            font-bold
            bg-white
            rounded-lg
            border-2 border-solid border-blue-300
            shadow-lg
            hidden">
                <a href="#" class="hover:text-blue-600">New Project</a><br>
                <a onclick="openModal()" class="hover:text-blue-600">Open Project</a><br>
                @if($is_project_loaded)
                    <a href="#" class="hover:text-blue-600">Project Settings</a>
                @endif
            </div>
        </div>
    </div>

    <div>
        <div class="pl-2 text-gray-600">
            Title
        </div>
        <div class="pl-2 pr-2 text-xl font-bold text-black w-full" style="display: flex">
            <input wire:model="working_project_title" type="text" class="w-full pl-1">
{{--            {{ $project_title }}--}}
{{--            Simulating Gadolinium Contrast in MRI of Adamantinomatous Craniopharyngioma Patients.--}}
        </div>
        <div class="pl-2 pt-2 text-gray-600">
            Description/Abstract
        </div>



        <div class="pl-2">
            <textarea id="project-abstract"
                      name="project-abstract" rows="6" cols="70"
                      class="border border-solid"></textarea>
        </div>

        <div style="position:absolute;bottom: 3px;right: 12px;">

            <div>
                test_var = {{ $test_var }}<br>
            </div>

            @if($working_project_title != $recorded_project_title)
            <button type="submit" wire:click="save">
                <i class="fa fa-1x fa-save text-gray-600"></i>
            </button>
            @else
                <button type="submit">
                    <i class="fa fa-1x fa-save text-gray-300"></i>
                </button>
            @endif
        </div>

    </div>
    {{--    <iframe class="shadow shadow-black w-full h-full" src={{ $path }}></iframe>--}}
</div>

{{-- Open Project Modal --}}
<div id='openProjectModal'
     class="modal
     bg-white border-2 border-blue-300
    rounded-xl shadow-2xl
    pr-5 pl-5 pb-4
     hidden" style="position:absolute; bottom: 70%; right: 50.5%;">
    <div>

        <div class="grid grid-cols-2 grid-flow-row">
            <div class="text-gray-600 w-full pb-2pr-2" style="text-align: left">
                Select a Project to Load
            </div>
            <div class="text-gray-600 w-full pb-2pr-2" style="text-align: right">
                {{ $project_library_size }} Project(s) Available
            </div>
        </div>



        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Load</th>
            </tr>
            </thead>
            <tbody>
            @foreach($project_library as $project)
                <tr class="hover:bg-gray-300">
                    <td class="pr-2">{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td class="pr-2 pl-2">{{ $project->created_at }}</td>
                    <td class="pr-2 pl-2">{{ $project->updated_at }}</td>
                    <td style="text-align: center;">
                        <button
                            type="submit"
                            wire.click="launch">
                            <i class="fa fa-arrow-circle-right text-gray-300 hover:text-gray-600"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
</div>

{{-- Script for Dropdown functionality --}}
<script>
    /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("hidden");
    }

    function openModal() {
        document.getElementById('openProjectModal').classList.toggle('hidden');
    }

    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (!openDropdown.classList.contains('hidden')) {
                    openDropdown.classList.toggle('hidden');
                }
                // if (!openDropdown.classList.contains('show')) {
                //     openDropdown.classList.remove('show');
                // }
            }
        }
    }

</script>
