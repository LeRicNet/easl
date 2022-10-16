<!-- The Modal -->
<div class="modal" id="dataBrowserModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Create New Survey</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form>
                    <div>
                        <input type="text" class="form-control" name="survey_name" value="{{ $modalLabel }}">
                    </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-success" data-dismiss="modal" wire:click="create">Create</button>
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
