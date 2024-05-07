<div class="h-screen w-screen grid place-content-center justify-center static">
    <!-- Numeracy Survey -->
    <div class="w-auto mx-96 border-2 border-gray-500 rounded-lg shadow-lg p-2 bg-white">

        <div class="font-medium text-3xl text-center text-zinc-800
        py-3 border border-gray-800 bg-gradient-to-tr from-slate-200 to-slate-300">
            Exit Survey
        </div>

        <div class="m-2 text-lg font-semibold text-gray-900">
            To close the session, we invite you to complete the System Usability Scale (SUS), a simple ten-item questionnaire
            regarding this system's usability.
        </div>

        <div class="m-2 text-lg text-gray-900">
            To complete the survey, please rate your subjective experience across these six aspects on a scale from
            1 (Strongly Disagree) to 5 (Strongly Agree).
        </div>

        <div class="m-2 text-sm text-slate-500">
            Note: there are no right or wrong answers,
            and your responses should reflect your own experience based on today’s session. The information
            you provide will be crucial to improving our processes.
        </div>

        <!-- Divider -->
        <div class="border-t border-2 my-4"></div>

        <form>

            <livewire:sid2302.utils.sus />

        </form>
    </div>
</div>