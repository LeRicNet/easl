<div>
    @if($currentSNSQuestion <= 3)
        <div class="mt-4 mb-1 font-normal text-lg text-gray-900">
            For each of the following questions, please check the box that best reflects <span class="font-bold">how good you are at doing the following things</span>:
        </div>
    @else
        <div class="mt-4 mb-1 font-normal text-lg text-gray-900">
            For each of the following questions, please check the box that <span class="font-bold">best reflects your answer</span>:
        </div>
    @endif

    <div class="ms-10 me-10">
        @switch($currentSNSQuestion)
            @case(0)
                <div>
                    <h3 class="mt-4 mb-2 font-semibold text-gray-900">
                        1. How good are you at working with fractions?
                    </h3>
                    <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="1" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">1 (Not at all good)</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="2" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">2</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="3" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">3</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="4" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">4</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="5" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">5</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="6" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">6 (Extremely good)</label>
                            </div>
                        </li>
                    </ul>
                </div>
                @break

            @case(1)
                <div>
                    <h3 class="mt-4 mb-2 font-semibold text-gray-900">
                        2. How good are you at working with percentages?
                    </h3>
                    <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="1" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">1 (Not at all good)</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="2" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">2</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="3" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">3</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="4" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">4</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="5" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">5</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="6" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">6 (Extremely good)</label>
                            </div>
                        </li>

                    </ul>
                </div>
                @break

            @case(2)
                <div>
                    <h3 class="mt-4 mb-2 font-semibold text-gray-900">
                        3. How good are you at calculating a 15% tip?
                    </h3>
                    <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="1" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">1 (Not at all good)</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="2" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">2</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="3" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">3</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="4" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">4</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="5" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">5</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="6" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">6 (Extremely good)</label>
                            </div>
                        </li>

                    </ul>
                </div>
                @break

            @case(3)
                <div>
                    <h3 class="mt-4 mb-2 font-semibold text-gray-900">
                        4. How good are you at figuring out how much a shirt will cost if it is 25% off?
                    </h3>
                    <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="1" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">1 (Not at all good)</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="2" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">2</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="3" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">3</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="4" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">4</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="5" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">5</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="6" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">6 (Extremely good)</label>
                            </div>
                        </li>

                    </ul>
                </div>
                @break

            @case(4)
                <div>
                    <h3 class="mt-4 mb-2 font-semibold text-gray-900">
                        5. When reading the newspaper, how helpful do you find tables and graphs that are parts of a story?
                    </h3>
                    <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="1" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">1 (Not at all helpful)</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="2" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">2</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="3" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">3</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="4" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">4</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="5" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">5</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="6" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">6 (Extremely helpful)</label>
                            </div>
                        </li>

                    </ul>
                </div>
                @break

            @case(5)
                <div>
                    <h3 class="mt-4 mb-2 font-semibold text-gray-900">
                        6. When people tell you the chance of something happening, do you prefer that they use words ("it rarely happens") or numbers ("there's a 1% chance")?
                    </h3>
                    <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="1" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">1 (Always prefer words)</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="2" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">2</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="3" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">3</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="4" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">4</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="5" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">5</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="6" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">6 (Always prefer numbers)</label>
                            </div>
                        </li>

                    </ul>
                </div>
                @break

            @case(6)
                <div>
                    <h3 class="mt-4 mb-2 font-semibold text-gray-900">
                        7. When you hear a weather forecast, do you prefer predictions using percentages (e.g., “there will be a 20% chance of rain today”) or predictions using only words (e.g., “there is a small chance of rain today”)?
                    </h3>
                    <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="1" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">1 (Always prefer percentages)</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="2" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">2</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="3" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">3</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="4" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">4</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="5" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">5</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="6" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">6 (Always prefer words)</label>
                            </div>
                        </li>

                    </ul>
                </div>
                @break

            @case(7)
                <div>
                    <h3 class="mt-4 mb-2 font-semibold text-gray-900">
                        8. How often do you find numerical information to be useful?
                    </h3>
                    <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="1" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">1 (Never)</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="2" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">2</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="3" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">3</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="4" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">4</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="5" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">5</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="6" name="list-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">6 (Very often)</label>
                            </div>
                        </li>

                    </ul>
                </div>
                @break

        @endswitch
    </div>


        <!-- Divider -->
        <div class="border-t border-2 my-4"></div>

        @if($currentSNSQuestion == 7)
            <button type="button"
                    wire:click="nextscene"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
             focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center my-4">
                Submit
            </button>
        @else
            <button type="button"
                    wire:click="$emitTo('sid2302.utils.sns', 'nextquestion')"
                    wire:click="nextquestion"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
             focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center my-4">
                Next
            </button>
        @endif
</div>