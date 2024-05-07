<div class="">
    {{-- Be like water. --}}
{{--    @foreach($value_options as $value_option)--}}
    @for ($i = 0; $i < count($value_options); $i++)
        <div class="flex items-center mb-1">
            <input wire:change="compare_to_prediction('{{ $feature_keys[$i] }}', '{{ $value_options[$i] }}')"
                   id="{{ $type }}-{{ $option_group }}-{{ $value_options[$i] }}"
                   wire:model="selected"
                   type="{{ $type }}" value="{{ $value_options[$i] }}"
                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
            <label for="{{ $type }}-{{ $option_group }}-{{ $value_options[$i] }}"
                   @class([
                   "text-red-500" => ((! $aligns_with_prediction[$i]) and $selected == $value_options[$i]),
                   "text-gray-900" => ($aligns_with_prediction[$i] and $selected == $value_options[$i]),
                   "ms-2 text-sm font-medium"])>
                {{ $value_options[$i] }}
                @if (((! $aligns_with_prediction[$i]) and $selected == $value_options[$i]))
                    <span><i class="fa-solid fa-caret-left"></i><span class="border border-red-500 px-1">disagrees with AI prediction</span></span>
                @endif
            </label>
        </div>
    @endfor
</div>
