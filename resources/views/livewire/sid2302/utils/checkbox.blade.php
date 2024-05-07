<div class="flex items-center justify-content-center gap-x-2">

    @if($inputType == 'checkbox')
        <input id={{ $divKey }}
               name={{ $featureGroup . "-feature-" . $feature }}
               data-modal-target={{ $key }}
               data-modal-toggle={{ $key }}
               wire:model="checked"
               wire:change="compareToPrediction"
               wire:loading.attr="disabled"
               type="checkbox"
               value={{ $featureValue }}
               title={{ $featureValue . "%" }}
                @class([
                     'h-4',
                     'w-4',
                     'border-gray-300',
                     'text-indigo-600 ',
                     'ring-4' => $highlight,
                     'ring-offset-2' => $highlight,
                     'ring-pink-500' => $highlight
                ])>
        <label for="location-feature-suprasellar"
{{--               data-tooltip-target="tooltip-correction"--}}
{{--               data-tooltip-trigger="hover"--}}
               class="block font-medium leading-6 text-gray-900 mr-2 w-full">
            @if($autocomplete)
                <div class="flex items-center border border-gray-500">
                    <div class="w-1/2 ps-2">
                        {{ $feature }}
                    </div>
                    <div class="w-1/2">
                        <div>
                            <livewire:sid2302.utils.barchart
                                    :divKey="$divKey"
                                    :featureValue="$featureValue"
                                    :featureDBKey="$featureDBKey"
                                    :target_patient="$target_patient"
                            />
                        </div>
                    </div>
                </div>
            @else
                {{ $feature }}
            @endif()
        </label>

    @elseif($inputType == 'radio')
        <h3 class="mb-4 w-full font-semibold text-gray-900">{{ $radioHeader }}</h3>
        <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200
        rounded-lg">
            @foreach($options as $option)
                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                    <div class="flex items-center ps-3">
                        <input id={{ $featureGroup . "-feature-" . $option }}
                               title={{ $this->getRadioPrediction($loop->index) }}
                               type="radio" value="" name={{ $featureGroup . "-radio" }}
                               data-modal-target={{ $key }}
                               data-modal-toggle={{ $key }}
                               wire:change="compareToPrediction"
                               wire:loading.attr="disabled"
                               class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                        <label for="{{ $featureGroup . "-feature-" . $option }}" class="w-full py-3 ms-2 text-sm font-medium
                        text-gray-900">{{ $option }}</label>
                    </div>
                </li>
            @endforeach
        </ul>
    @endif
    
    @livewire('sid2302.utils.feature-survey-modal', [
        'feature' => $feature,
        'featureGroup' => $featureGroup
    ])

{{--    <div id="tooltip-correction" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2--}}
{{--    transition-opacity duration-300 shadow-sm tooltip">--}}
{{--        Tooltip content--}}
{{--        <div class="tooltip-arrow" data-popper-arrow></div>--}}
{{--    </div>--}}

</div>
