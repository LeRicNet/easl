<div class="h-screen w-screen grid place-content-center justify-center static">
    <!-- Numeracy Survey -->
    <div class="w-auto mx-96 border-2 border-gray-500 rounded-lg shadow-lg p-2 bg-white">

        <div class="m-2 text-lg font-semibold text-gray-900">
            To better understand your comfort and proficiency with numbers, we would like you to complete the Subjective Numeracy Scale (SNS) survey. This survey assesses your subjective perception of your own numeracy skills.<br><br>
            The survey consists of 8 statements related to different numerical tasks and your preferences regarding them. Your task is to indicate your agreement or disagreement with each statement on a scale from 1 to 6.
        </div>

        <!-- Divider -->
        <div class="border-t border-2 my-4"></div>

        <form>
            
            <livewire:sid2302.utils.sns :currentSNSQuestion="$currentSNSQuestion" />

        </form>
    </div>
</div>