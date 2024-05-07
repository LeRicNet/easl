<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
    <span class="relative group cursor-pointer">
        <span class="flex items-center">show</span>
        <span class="hidden group-hover:block absolute z-[100000] -left-[145px] -top-[56px]
         h-[5rem] w-[9rem] text-base
         pt-1 ps-4
        rounded-lg bg-gray-100 border border-gray-300
        shadow-xl text-gray-700 grid grid-cols-2 gap-x-2">
                <button class="col-span-1 p-5 font-bold border border-slate-500 rounded
                bg-gradient-to-br from-purple-200 to-purple-300 hover:from-purple-300 hover:to-purple-200
                hover:border-4 hover:border-purple-500"
                        onclick="Livewire.emitTo('sid2302.session', 'update_barco', '{{ $study_uid }}', 'select', 'left')"
                        onmouseover="Livewire.emitTo('sid2302.session', 'update_barco', '{{ $study_uid }}', 'hover', 'left')"
                        onmouseleave="Livewire.emitTo('sid2302.session', 'update_barco', '{{ $study_uid }}', 'hover-leave', 'left')"
                >L</button>
                <button class="col-span-1 p-5 font-bold border border-slate-500 rounded
                bg-gradient-to-br from-teal-200 to-teal-300 hover:from-teal-300 hover:to-teal-200
                hover:border-4 hover:border-teal-500"
                        onclick="Livewire.emitTo('sid2302.session', 'update_barco', '{{ $study_uid }}', 'select', 'right')"
                        onmouseover="Livewire.emitTo('sid2302.session', 'update_barco', '{{ $study_uid }}', 'hover', 'right')"
                        onmouseleave="Livewire.emitTo('sid2302.session', 'update_barco', '{{ $study_uid }}', 'hover-leave', 'right')"
                >R</button>
        </span>
    </span>
</div>