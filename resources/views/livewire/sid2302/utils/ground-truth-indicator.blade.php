<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
{{--    <div id="{{ $chartId }}"></div>--}}
    <div @class([
        "bg-gradient-to-r" => $featureValue,
         "from-purple-500" => $featureValue,
         "to-pink-500" => $featureValue,
         'text-center' => $featureValue,
         'shadow' => $featureValue,
         'px-4' => $featureValue,
         'rounded-lg' => $featureValue,
         'border-2' => $featureValue,
         'border-slate-500' => $featureValue,
        "bg-white" => ! $featureValue
    ])>
        @if($featureValue)
            <span class="font-medium text-base text-white">{{ $label }}</span>
        @endif
    </div>

</div>
