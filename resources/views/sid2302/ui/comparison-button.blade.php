<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
{{--    <livewire:sid2302.ui.comparison.compare-button :patient="$patient" />--}}
    <button onclick="Livewire.emitTo('sid2302.session', 'update_comparison', '{{ $patient }}')"
    class="btn btn-sm bg-gradient-to-br from-orange-300 to-orange-400
    hover:from-orange-400 hover:to-orange-300
    border border-solid border-slate-500
    text-white font-medium px-2 py-1 rounded shadow
    active:shadow-inner active:from-orange-300 active:to-orange-200">
        compare
    </button>
</div>