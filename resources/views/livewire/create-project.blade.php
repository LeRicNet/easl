<div>
    <div class="ml-5 grid grid-cols-1 grid-flow-row w-1/2">
        <label for="projectTitle">Project Title</label>
        <input type="text" id="projectTitle" wire:model="project.title"
               class="block border rounded-md" placeholder="{{ $project_title }}">

        <div class="grid grid-flow-row grid-cols-1 mt-5">
            <label for="projectDescription">Project Description</label>
            <textarea class="border" rows="8"></textarea>
        </div>

        <div class="grid grid-flow-row grid-cols-1">
            <p class="text-2xl">Process Models</p>
            <table id="processModelTable" class="border border-solid">
                <tr class="header border-solid border-bottom">
                    <th style="width:10%;">ID</th>
                    <th style="width:50%;">Description</th>
                    <th style="width:10%;">More Info</th>
                    <th style="width:10%;">Select</th>
                </tr>
                <tr>
                    <td class="text-center">NRAD001</td>
                    <td>Radiographic differential diagnosis of brain tumor</td>
                    <td class="text-center">NA</td>
                    <td class="text-center"><input type="checkbox"></td>
                </tr>
                <tr>
                    <td class="text-center">NSUR001</td>
                    <td>Neurosurgical risk assessment</td>
                    <td class="text-center">NA</td>
                    <td class="text-center"><input type="checkbox"></td>
                </tr>
            </table>
        </div>

        <div class="grid grid-flow-row grid-cols-1">
            <p class="text-2xl">Stakeholders</p>
            <table id="projectStakeholdersTable" class="border border-solid">
                <tr class="header border-solid border-bottom">
                    <th style="width:10%;">Category</th>
                    <th style="width:50%;">Role</th>
                    <th style="width:10%;">Select</th>
                </tr>
                <tr>
                    <td class="text-center">CLINICIAN</td>
                    <td>Neuro-oncologist</td>
                    <td class="text-center"><input type="checkbox"></td>
                </tr>
                <tr>
                    <td class="text-center">CLINICIAN</td>
                    <td>Neurosurgeon</td>
                    <td class="text-center"><input type="checkbox"></td>
                </tr>
                <tr>
                    <td class="text-center">CLINICIAN</td>
                    <td>Neuroradiologist</td>
                    <td class="text-center"><input type="checkbox"></td>
                </tr>
                <tr>
                    <td class="text-center">PATIENT</td>
                    <td>Patient</td>
                    <td class="text-center"><input type="checkbox" checked></td>
                </tr>
                <tr>
                    <td class="text-center">PATIENT</td>
                    <td>Patient Family</td>
                    <td class="text-center"><input type="checkbox"></td>
                </tr>
            </table>
        </div>

        <div class="grid grid-flow-row grid-cols-1">
            <p class="text-2xl">Project Database</p>
            <table id="processModelTable" class="border border-solid">
                <tr class="header border-solid border-bottom">
                    <th style="width:10%;">ID</th>
                    <th style="width:50%;">Description</th>
                    <th style="width:10%;">Data Type</th>
                    <th style="width:10%;">Format</th>
                    <th style="width:10%;">Select</th>
                </tr>
                <tr>
                    <td class="text-center">ACP001</td>
                    <td>2D Binary ACP/NOTACP dataset used in Prince et al. 2020</td>
                    <td class="text-center">MRI/CT</td>
                    <td class="text-center">JPEG</td>
                    <td class="text-center"><input type="checkbox"></td>
                </tr>
                <tr>
                    <td class="text-center">SS001</td>
                    <td>Suprasellar tumor database for classifiation.</td>
                    <td class="text-center">MRI</td>
                    <td class="text-center">DICOM</td>
                    <td class="text-center"><input type="checkbox"></td>
                </tr>
                <tr>
                    <td class="text-center">TCIA2022</td>
                    <td>The Cancer Imaging Archive (TCIA).</td>
                    <td class="text-center">MRI/CT</td>
                    <td class="text-center">NA</td>
                    <td class="text-center"><input type="checkbox"></td>
                </tr>
            </table>
        </div>

        <div class="grid grid-flow-row grid-cols-1">
            <p class="text-2xl">AI Models</p>
            <table id="processModelTable" class="border border-solid">
                <tr class="header border-solid border-bottom">
                    <th style="width:10%;">ID</th>
                    <th style="width:50%;">Description</th>
                    <th style="width:20%;">Platform</th>
                    <th style="width:20%;">Platform Version</th>
                    <th style="width:10%;">Select</th>
                </tr>
                <tr>
                    <td class="text-center">CLSF_ACP</td>
                    <td>Simple classifier using ResNetV2-50</td>
                    <td class="text-center">TensorFlow</td>
                    <td class="text-center">1.8</td>
                    <td class="text-center"><input type="checkbox"></td>
                </tr>
                <tr>
                    <td class="text-center">NSUR001</td>
                    <td>Neurosurgical risk assessment</td>
                    <td class="text-center">NA</td>
                    <td class="text-center">NA</td>
                    <td class="text-center"><input type="checkbox"></td>
                </tr>
            </table>
        </div>

        <div class="mt-5 grid grid-rows-1 grid-cols-2 justify-end">

            @if($saveSuccess)
                <div class="rounded-md bg-green-100 rounded-lg p-4">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-green-800">Successfully Saved Project</h3>
                            <div class="mt-2 text-sm text-green-700">
                                <p>Your new project has been saved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <button class="bg-green-500 text-white
        border border-solid border-black
        shadow m-1 p1 pl-3 pr-3 rounded hover:bg-green-900" wire:click="saveProject">Save</button>
            <button class="bg-red-200 text-white
        shadow m-1 p1 pl-3 pr-3 rounded hover:bg-red-800">Cancel</button>
        </div>
    </div>
</div>
