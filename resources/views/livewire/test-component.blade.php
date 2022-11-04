<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div style="text-align: center">
        <button
            wire:click = 'start'>start</button>
        <h1>{{ $count }}</h1>
        <h2>{{ $test_response }}</h2>
        <h2>{{ implode("\n", $dicoms) }}</h2>
    </div>

    <form wire:submit.prevent="attach">
        <input type="file" wire:model="dicoms" multiple>

        @error('dicoms.*') <span class="error">{{ $message }}</span> @enderror

        <button type="submit">Attach DICOM Files</button>
    </form>

</div>
