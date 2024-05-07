<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <!-- He who is contented is rich. - Laozi -->
    <button id="autocompleteButton" @class([
    "relative", "inline-flex", "items-center", "justify-center",
    "p-0.5", "mb-2", "me-2", "overflow-hidden",
    "text", "font-medium",
    "text-gray-300" => ! $is_ai_enabled,
    "test-blue-500" => $is_ai_enabled,
    "rounded-lg", "group",
    "bg-blue-500" => ! $is_ai_enabled,
    "bg-opacity-25" => ! $is_ai_enabled,
    "bg-gradient-to-br" => $is_ai_enabled,
    "from-cyan-500" => $is_ai_enabled,
    "to-blue-500" => $is_ai_enabled,
    "group-hover:from-cyan-500" => $is_ai_enabled,
    "group-hover:to-blue-500" => $is_ai_enabled,
    "hover:text-white" => $is_ai_enabled,
    "focus:ring-4" => $is_ai_enabled,
    "focus:outline-none" => $is_ai_enabled,
    "focus:ring-cyan-200" => $is_ai_enabled
    ]) wire:click="autocomplete" @disabled(! $is_ai_enabled) >
    <span @class(["relative", "px-5", "py-1.5", "transition-all", "ease-in", "duration-75", "bg-white",
    "rounded-md", "group-hover:bg-opacity-0" => $is_ai_enabled])>
    {{--                Auto-Complete Form--}}
    Show Form Predictions
    </span>
    </button>
</div>
