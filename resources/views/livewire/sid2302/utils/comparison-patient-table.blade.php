<div class="bg-white border-2 border-slate-500 shadow rounded h-[17rem] overflow-y-auto" wire:poll.1ms>
    {{-- Do your work, then step back. --}}
    <div class="flex flex-row content-center
    text-sm font-medium text-slate-400
    border-b border-slate-600 p-2">
        <div class="basis-1/4 text-center">Comparison Patient</div>
        <div class="basis-1/4 text-center">Sex</div>
        <div class="basis-1/4 text-center">Age (yrs. at dx)</div>
        <div class="basis-1/4 text-center">Primary Symptom</div>
    </div>
    @foreach($comparison_patients as $comparison)
        <div class="static">
            <button id={{ "select_comparison-" . $comparison['to_patient'] }}
                    wire:click="select('{{ $comparison['to_patient'] }}')"
                    @class(["bg-gradient-to-br from-orange-200 to-zinc-200" => ($selected == $comparison['to_patient']),
                    "flex flex-row content-center w-full text-slate-600 border-b border-dashed border-slate-300
            hover:bg-gradient-to-br hover:from-orange-200 hover:to-zinc-200 py-2 peer"])>
                <div id={{ "select_comparison-" . $comparison['to_patient'] }} class="basis-1/4">
                    <span class="text-[10px] pe-1 text-slate-400 font-bold">[show]</span>
                    {{ $this->getPatientName($comparison['to_patient']) }}
                </div>
                <div id={{ "select_comparison-" . $comparison['to_patient'] }} class="basis-1/4">{{ $this->getPatientSex($comparison['to_patient']) }}</div>
                <div id={{ "select_comparison-" . $comparison['to_patient'] }} class="basis-1/4">{{ $this->getPatientAge($comparison['to_patient']) }}</div>
                <div id={{ "select_comparison-" . $comparison['to_patient'] }} class="basis-1/4">{{ $this->getPatientPrimarySymptom($comparison['to_patient']) }}</div>
            </button>
{{--            <button wire:click="showBarcoOptions('{{ $study['study_uid'] }}')"--}}
{{--                    type="button"--}}
{{--                    value="{{ $study['study_uid'] }}"--}}
{{--                    @class(["bg-gradient-to-br from-orange-200 to-zinc-200" => (($selected == $study['study_uid']) and ($show_barco_options)),--}}
{{--                    "flex flex-row content-center w-full text-slate-600 border-b border-dashed border-slate-300--}}
{{--            hover:bg-gradient-to-br hover:from-orange-200 hover:to-zinc-200 py-2 peer"])>--}}
{{--                <div class="basis-1/5 self-center">--}}
{{--                    {{ $this->getModality($study['study_uid']) }}--}}
{{--                </div>--}}
{{--                <div class="basis-3/5 align-middle items-center text-sm self-center">--}}
{{--                    <span class="text-[10px] pe-1 text-slate-400 font-bold">[show]</span>--}}
{{--                    {{ $this->getStudyDescription($study['study_uid']) }}--}}
{{--                </div>--}}
{{--                <div class="basis-1/5 text-center self-center">--}}
{{--                    {{ $this->getCount($study['study_uid']) }}--}}
{{--                </div>--}}
{{--            </button>--}}

        </div>

    @endforeach
</div>
