<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    {{--    <div id="{{ $chartId }}"></div>--}}
{{--    <div @class([--}}
{{--        "bg-gradient-to-r" => $featureValue,--}}
{{--         "from-purple-500" => $featureValue,--}}
{{--         "to-pink-500" => $featureValue,--}}
{{--         'text-center' => $featureValue,--}}
{{--         'shadow' => $featureValue,--}}
{{--         'px-4' => $featureValue,--}}
{{--         'rounded-lg' => $featureValue,--}}
{{--         'border-2' => $featureValue,--}}
{{--         'border-slate-500' => $featureValue,--}}
{{--        "bg-white" => ! $featureValue--}}
{{--    ])>--}}
{{--        @if($featureValue)--}}
{{--            <span class="font-medium text-base text-white">{{ $feature }}</span>--}}
{{--        @endif--}}
{{--    </div>--}}
{{--    <button class="w-32 bg-gradient-to-r from-green-400 to-white border-2 border-slate-500 rounded px-4 font-medium text-slate-500 shadow-sm" style="--tw-gradient-to-position: {{ $featureValue }}%;">--}}
{{--        {{ $featureValue }} %--}}
{{--    </button>--}}
<div class="relative h-7 w-32 border-2 border-slate-500 rounded shadow-inner text-slate-500">
    @if($featureValue > 0)
        <div class="absolute z-0 left-0 h-full w-full flex">
            <div class="bg-gradient-to-t rounded-r from-green-300 via-emerald-100 to-green-300 basis-[{{ $featureValue }}%]"></div>
{{--            <span class="ps-1">{{ $featureValue }}%</span>--}}
        </div>
    @endif
        <div class="absolute z-1 left-0 ps-1 items-center">
            {{ $featureValue }}%
        </div>
{{--    <div class="z-1">{{ $featureValue }}</div>--}}
</div>
</div>