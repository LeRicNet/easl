<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="grid grid-cols-2">
        <div class="col-span-1">
            <div class="text-center text-lg font-bold text-orange-400 border border-slate-500 py-2 m-1
            bg-gradient-to-b from-orange-50 to-slate-50">
                <span class="text-sm font-normal text-slate-500">Comparison Patient</span><br>
                {{ $patient_name }}
            </div>
            <div class="grid grid-cols-2 px-2">
                <div class="col-span-1 grid grid-rows-2 text-base">
                    <div class="row-span-1">
                        <span class="text-sm text-slate-400">Sex: </span><span class="font-bold text-slate-500">{{ $sex }}</span>
                    </div>
                    <div class="row-span-1">
                        <span class="text-sm text-slate-400">Age: </span><span class="font-bold text-slate-500">{{ $age }} yrs</span>
                    </div>
                </div>
                <div class="col-span-1 grid grid-rows-2">
                    <div class="row-span-1">
                        <span class="text-sm text-slate-400">Height: </span><span class="font-bold text-slate-500">{{ $height }} cm</span>
                    </div>
                    <div class="row-span-1">
                        <span class="text-sm text-slate-400">Weight: </span><span class="font-bold text-slate-500">{{ $weight }} kg</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-1 grid grid-rows-2 content-center">
            <div class="row-span-1 pt-2 ps-1">
                <span class="text-sm text-slate-400">Primary Symptom:</span><br><span class="font-bold text-slate-500">{{ $primary_symptom }}</span>
            </div>
            <div class="row-span-1 pt-2 ps-1">
                <span class="text-sm text-slate-400">Secondary Symptom:</span><br><span class="font-bold text-slate-500">{{ $secondary_symptom }}</span>
            </div>
        </div>
    </div>
</div>
