<div>
    <!-- Confidence Radio List -->
    <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">{{ $userQuery }}</h3>
    <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border
    border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        @foreach($factorLevels as $factor)
            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                <div class="flex items-center ps-3">
                    <input id = {{ $key . '-' . $factor }}
                           type="radio" value=""
                           name={{ $key }}
                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300
                           focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700
                           dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for={{ $key . '-' . $factor }}
                           class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        {{ $factor }}
                    </label>
                </div>
            </li>
        @endforeach

    <!-- End Confidence Radio List -->
</div>
