<!-- Modal -->
<div class="modal fade" id="dicomMenu" tabindex="-1" aria-labelledby="dicomMenuLabel" aria-hidden="true">
    <form wire:submit.prevent="saveZip">

        <div class="modal-dialog">
            <div class="modal-content" id="loadDicomData">
                <div class="modal-header">
                    <h5 class="modal-title" id="dicomMenuLabel">Add Data to the ATPC Database</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="pl-2">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">ATPC ID</span>
                            <input type="text" class="form-control" placeholder="1" aria-label="Username" aria-describedby="basic-addon1" wire:model="dicomDataId">
                        </div>

{{--                        <div class="input-group">--}}
{{--                            <span class="input-group-text">First and last name</span>--}}
{{--                            <input type="text" aria-label="First name" class="form-control">--}}
{{--                            <input type="text" aria-label="Last name" class="form-control">--}}
{{--                        </div>--}}
                        {{--                    <input type="file" wire:model="dicoms" wire:submit.prevent="submit">--}}

                        <input type="file" wire:model="dicoms" wire:submit.prevent="submit" multiple>
                        @error('dicoms.*') <span class="error">{{ $message }}</span> @enderror
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"
                            data-bs-dismiss="modal">Upload</button>
                </div>
            </div>
        </div>
    </form>
</div>

{{--<div class="modal fade" id="dicomMenu" tabindex="-1" aria-labelledby="dicomMenuLabel" aria-hidden="true"--}}
{{--wire:ignore.self>--}}
{{--    --}}
{{--        <!-- -->--}}
{{--        <div class="modal-content" id="reviewDicomData" style="display: none;">--}}
{{--            <div class="modal-header">--}}
{{--                <h5 class="modal-title" id="dicomMenuLabel">Add Data to the ATPC Database</h5>--}}
{{--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}

{{--                Items--}}

{{--            </div>--}}
{{--            <div class="modal-footer">--}}
{{--                Footer--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</div>--}}



<!-- ORIGINAL --->
{{--<div>--}}
{{--    <div class="modal fade" id="dicomMenu" tabindex="-1" aria-labelledby="dicomMenuLabel" aria-hidden="true"--}}
{{--         wire:ignore.self>--}}
{{--        <div class="modal-dialog">--}}
{{--            <div class="modal-content" id="loadDicomData">--}}
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title" id="dicomMenuLabel">Add Data to the ATPC Database</h5>--}}
{{--                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <div class="pl-2">--}}
{{--                        <div class="input-group mb-3">--}}
{{--                            <span class="input-group-text" id="basic-addon1">ATPC ID</span>--}}
{{--                            <input type="text" class="form-control" placeholder="1" aria-label="Username" aria-describedby="basic-addon1" wire:model="dicomDataId">--}}
{{--                        </div>--}}

{{--                        <div class="input-group">--}}
{{--                            <span class="input-group-text">First and last name</span>--}}
{{--                            <input type="text" aria-label="First name" class="form-control">--}}
{{--                            <input type="text" aria-label="Last name" class="form-control">--}}
{{--                        </div>--}}
{{--                        --}}{{--                    <input type="file" wire:model="dicoms" wire:submit.prevent="submit">--}}

{{--                        <input type="file" wire:model="dicoms" wire:submit.prevent="submit" multiple>--}}
{{--                        @error('dicoms.*') <span class="error">{{ $message }}</span> @enderror--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                    <button type="button" class="btn btn-primary"--}}
{{--                            wire:click="saveZip"--}}
{{--                            data-bs-dismiss="modal">Upload</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- -->--}}
{{--            <div class="modal-content" id="reviewDicomData" style="display: none;">--}}
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title" id="dicomMenuLabel">Add Data to the ATPC Database</h5>--}}
{{--                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}

{{--                    Items--}}

{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    Footer--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
