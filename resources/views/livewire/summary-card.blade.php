{{-- Summary card with rounded corners.
     $title: (string) the title to be displayed in the card.
     $statistic: (int) the value to be displayed in the card. --}}
<div class="grid grid-cols-1 grid-rows-1 py-10 px-4">
    <div class="bg-gray-600 border border-solid border-black rounded-lg shadow-lg">
        <p class="text-2xl text-white text-center mt-1">{{ $title }}</p>
        <p class="text-5xl text-white text-center font-bold mb-1">{{ $statistic }}</p>
    </div>
</div>
