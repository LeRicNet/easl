<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    @switch($currentTLXQuestion)
        @case(0)
            <div class="relative mb-6">
                <div>How mentally demanding was the task?</div>
                <button wire:click="nextscene">Submit</button>
            </div>
            @break
    @endswitch
</div>
