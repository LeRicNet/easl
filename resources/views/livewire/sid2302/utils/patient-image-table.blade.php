<div class="bg-white border-2 border-slate-500 shadow rounded h-[11rem] overflow-y-auto">
    {{-- Do your work, then step back. --}}
    <div class="flex flex-row content-center
    text-sm font-medium text-slate-400
    border-b border-slate-600 p-2">
        <div class="basis-1/5 text-center">Modality</div>
        <div class="basis-3/5 text-center">Description</div>
        <div class="basis-1/5 text-center">Images (n)</div>
    </div>
    @foreach($uniq_studies as $study)
        <div class="static">
            <button wire:click="showBarcoOptions('{{ $study['study_uid'] }}')"
                    type="button"
                    value="{{ $study['study_uid'] }}"
                    @class(["bg-gradient-to-br from-sky-200 to-zinc-200" => (($selected == $study['study_uid']) and ($show_barco_options)),
                    "flex flex-row content-center w-full text-slate-600 border-b border-dashed border-slate-300
            hover:bg-gradient-to-br hover:from-sky-200 hover:to-zinc-200 py-2"])>
                <div class="basis-1/5 self-center">
                    {{ $this->getModality($study['study_uid']) }}
                </div>
                <div class="basis-3/5 align-middle items-center text-sm self-center">
                    <span class="text-[10px] pe-1 text-slate-400 font-bold">[show]</span>
                    {{ $this->getStudyDescription($study['study_uid']) }}
                </div>
                <div class="basis-1/5 text-center self-center">
                    {{ $this->getCount($study['study_uid']) }}
                </div>
            </button>

            <div @class([
            "z-10 top-0",
            "hidden" => ! (($selected == $study['study_uid']) and ($show_barco_options))
            ])>
                <div class="flex py-1 ">
                    <div class="basis-1/2 text-end pe-2">
                        <button id="update_barco_target_left"
                                onclick="Livewire.emitTo('sid2302.session', 'update_barco', '{{ $study['study_uid'] }}', 'select', 'left')"
                                onmouseover="Livewire.emitTo('sid2302.session', 'update_barco', '{{ $study['study_uid'] }}', 'hover', 'left')"
                                onmouseleave="Livewire.emitTo('sid2302.session', 'update_barco', '{{ $study['study_uid'] }}', 'hover-leave', 'left')"
                                class="btn rounded border border-slate-400
                        bg-gradient-to-br from-purple-200 to-purple-300 hover:from-purple-300 hover:to-purple-200
                        px-2 py-1 text-sm text-slate-600">to left display<i class="align-middle text-[10px] ps-2 fa-solid fa-arrow-up-right-from-square"></i></button>
                    </div>
                    <div class="basis-1/2 text-start ps-2">
                        <button id="update_barco_target_right"
                                onclick="Livewire.emitTo('sid2302.session', 'update_barco', '{{ $study['study_uid'] }}', 'select', 'right')"
                                onmouseover="Livewire.emitTo('sid2302.session', 'update_barco', '{{ $study['study_uid'] }}', 'hover', 'right')"
                                onmouseleave="Livewire.emitTo('sid2302.session', 'update_barco', '{{ $study['study_uid'] }}', 'hover-leave', 'right')"
                                class="btn rounded border border-slate-400
                        bg-gradient-to-br from-teal-200 to-teal-300 hover:from-teal-300 hover:to-teal-200
                        px-2 py-1 text-sm text-slate-600">to right display<i class="align-middle text-[10px] ps-2 fa-solid fa-arrow-up-right-from-square"></i></button>
                    </div>
                </div>
            </div>

        </div>

    @endforeach
</div>
