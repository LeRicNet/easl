<div wire:poll.500ms>
    @if($currentSNSQuestionSet == 1)
        <div class="flex mt-4 mb-1 justify-center">
            <div class="font-normal text-lg text-gray-900 border border-slate-700 px-4 py-2">
                For each of the following questions, please check the box that best reflects <span class="font-bold">how good you are at doing the following things</span>:
            </div>
        </div>

        <div class="p-4 mt-2">
            <h3 class="font-semibold text-gray-900">
                1. How good are you at working with fractions?
            </h3>
            <div class="py-2 px-4">
                <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_1-1" type="radio" value="1" name="sns_1"
                                   wire:change="update_form('sns_1', 'sns_1_1')"
                                   wire:model="selected"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_1-1" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">1 (Not at all good)</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_1-2" type="radio" value="2" name="sns_1"
                                   wire:change="update_form('sns_1', 'sns_1_2')"
                                   wire:model="selected"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_1-2" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">2</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_1-3" type="radio" value="3" name="sns_1"
                                   wire:change="update_form('sns_1', 'sns_1_3')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_1-3" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">3</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_1-4" type="radio" value="4" name="sns_1"
                                   wire:change="update_form('sns_1', 'sns_1_4')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_1-4" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">4</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_1-5" type="radio" value="5" name="sns_1"
                                   wire:change="update_form('sns_1', 'sns_1_5')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_1-5" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">5</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_1-6" type="radio" value="6" name="sns_1"
                                   wire:change="update_form('sns_1', 'sns_1_6')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_1-6" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">6 (Extremely good)</label>
                        </div>
                    </li>
                </ul>
            </div>

        </div>

        <div class="p-4">
            <h3 class="font-semibold text-gray-900">
                2. How good are you at working with percentages?
            </h3>
            <div class="py-2 px-4">
                <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_2-1" type="radio" value="1" name="sns_2"
                                   wire:change="update_form('sns_2', 'sns_2_1')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_2-1" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">1 (Not at all good)</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_2-2" type="radio" value="2" name="sns_2"
                                   wire:change="update_form('sns_2', 'sns_2_2')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_2-2" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">2</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_2-3" type="radio" value="3" name="sns_2"
                                   wire:change="update_form('sns_2', 'sns_2_3')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_2-3" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">3</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_2-4" type="radio" value="4" name="sns_2"
                                   wire:change="update_form('sns_2', 'sns_2_4')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_2-4" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">4</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_2-5" type="radio" value="5" name="sns_2"
                                   wire:change="update_form('sns_2', 'sns_2_5')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_2-5" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">5</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_2-6" type="radio" value="6" name="sns_2"
                                   wire:change="update_form('sns_2', 'sns_2_6')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_2-6" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">6 (Extremely good)</label>
                        </div>
                    </li>

                </ul>
            </div>

        </div>

        <div class="p-4">
            <h3 class="font-semibold text-gray-900">
                3. How good are you at calculating a 15% tip?
            </h3>
            <div class="py-2 px-4">
                <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_3-1" type="radio" value="1" name="sns_3"
                                   wire:change="update_form('sns_3', 'sns_3_1')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_3-1" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">1 (Not at all good)</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_3-2" type="radio" value="2" name="sns_3"
                                   wire:change="update_form('sns_3', 'sns_3_2')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_3-2" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">2</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_3-3" type="radio" value="3" name="sns_3"
                                   wire:change="update_form('sns_3', 'sns_3_3')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_3-3" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">3</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_3-4" type="radio" value="4" name="sns_3"
                                   wire:change="update_form('sns_3', 'sns_3_4')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_3-4" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">4</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_3-5" type="radio" value="5" name="sns_3"
                                   wire:change="update_form('sns_3', 'sns_3_5')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_3-5" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">5</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_3-6" type="radio" value="6" name="sns_3"
                                   wire:change="update_form('sns_3', 'sns_3_6')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_3-6" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">6 (Extremely good)</label>
                        </div>
                    </li>

                </ul>
            </div>

        </div>

        <div class="p-4">
            <h3 class="font-semibold text-gray-900">
                4. How good are you at figuring out how much a shirt will cost if it is 25% off?
            </h3>
            <div class="py-2 px-4">
                <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_4-1" type="radio" value="1" name="sns_4"
                                   wire:change="update_form('sns_4', 'sns_4_1')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_4-1" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">1 (Not at all good)</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_4-2" type="radio" value="2" name="sns_4"
                                   wire:change="update_form('sns_4', 'sns_4_2')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_4-2" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">2</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_4-3" type="radio" value="3" name="sns_4"
                                   wire:change="update_form('sns_4', 'sns_4_3')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_4-3" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">3</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_4-4" type="radio" value="4" name="sns_4"
                                   wire:change="update_form('sns_4', 'sns_4_4')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_4-4" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">4</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_4-5" type="radio" value="5" name="sns_4"
                                   wire:change="update_form('sns_4', 'sns_4_5')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_4-5" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">5</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_4-6" type="radio" value="6" name="sns_4"
                                   wire:change="update_form('sns_4', 'sns_4_6')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_4-6" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">6 (Extremely good)</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    @else

        <div class="flex mt-4 mb-1 justify-center">
            <div class="font-normal text-lg text-gray-900 border border-slate-700 px-4 py-2">
                For each of the following questions, please check the box that <span class="font-bold">best reflects your answer</span>:
            </div>
        </div>

        <div class="p-4">
            <h3 class="font-semibold text-gray-900">
                5. When reading the newspaper, how helpful do you find tables and graphs that are parts of a story?
            </h3>
            <div class="py-2 px-4">
                <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_5-1" type="radio" value="1" name="sns_5"
                                   wire:change="update_form('sns_5', 'sns_5_1')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_5-1" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">1 (Not at all helpful)</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_5-2" type="radio" value="2" name="sns_5"
                                   wire:change="update_form('sns_5', 'sns_5_2')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_5-2" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">2</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_5-3" type="radio" value="3" name="sns_5"
                                   wire:change="update_form('sns_5', 'sns_5_3')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_5-3" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">3</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_5-4" type="radio" value="4" name="sns_5"
                                   wire:change="update_form('sns_5', 'sns_5_4')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_5-4" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">4</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_5-5" type="radio" value="5" name="sns_5"
                                   wire:change="update_form('sns_5', 'sns_5_5')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_5-5" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">5</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_5-6" type="radio" value="6" name="sns_5"
                                   wire:change="update_form('sns_5', 'sns_5_6')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_5-6" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">6 (Extremely helpful)</label>
                        </div>
                    </li>

                </ul>
            </div>
        </div>

        <div class="p-4">
            <h3 class="font-semibold text-gray-900">
                6. When people tell you the chance of something happening, do you prefer that they use words ("it rarely happens") or numbers ("there's a 1% chance")?
            </h3>
            <div class="py-2 px-4">
                <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_6-1" type="radio" value="1" name="sns_6"
                                   wire:change="update_form('sns_6', 'sns_6_1')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_6-1" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">1 (Always prefer words)</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_6-2" type="radio" value="2" name="sns_6"
                                   wire:change="update_form('sns_6', 'sns_6_2')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_6-2" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">2</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_6-3" type="radio" value="3" name="sns_6"
                                   wire:change="update_form('sns_6', 'sns_6_3')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_6-3" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">3</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_6-4" type="radio" value="4" name="sns_6"
                                   wire:change="update_form('sns_6', 'sns_6_4')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_6-4" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">4</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_6-5" type="radio" value="5" name="sns_6"
                                   wire:change="update_form('sns_6', 'sns_6_5')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_6-5" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">5</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_6-6" type="radio" value="6" name="sns_6"
                                   wire:change="update_form('sns_6', 'sns_6_6')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_6-6" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">6 (Always prefer numbers)</label>
                        </div>
                    </li>

                </ul>
            </div>
        </div>

        <div class="p-4">
            <h3 class="font-semibold text-gray-900">
                7. When you hear a weather forecast, do you prefer predictions using percentages (e.g., “there will be a 20% chance of rain today”) or predictions using only words (e.g., “there is a small chance of rain today”)?
            </h3>
            <div class="py-2 px-4">
                <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_7-1" type="radio" value="1" name="sns_7"
                                   wire:change="update_form('sns_7', 'sns_7_1')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_7-1" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">1 (Always prefer percentages)</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_7-2" type="radio" value="2" name="sns_7"
                                   wire:change="update_form('sns_7', 'sns_7_2')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_7-2" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">2</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_7-3" type="radio" value="3" name="sns_7"
                                   wire:change="update_form('sns_7', 'sns_7_3')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_7-3" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">3</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_7-4" type="radio" value="4" name="sns_7"
                                   wire:change="update_form('sns_7', 'sns_7_4')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_7-4" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">4</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_7-5" type="radio" value="5" name="sns_7"
                                   wire:change="update_form('sns_7', 'sns_7_5')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_7-5" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">5</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_7-6" type="radio" value="6" name="sns_7"
                                   wire:change="update_form('sns_7', 'sns_7_6')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_7-6" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">6 (Always prefer words)</label>
                        </div>
                    </li>

                </ul>
            </div>

        </div>

        <div class="p-4">
            <h3 class="font-semibold text-gray-900">
                8. How often do you find numerical information to be useful?
            </h3>
            <div class="py-2 px-4">
                <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_8-1" type="radio" value="1" name="sns_8"
                                   wire:change="update_form('sns_8', 'sns_8_1')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_8-1" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">1 (Never)</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_8-2" type="radio" value="2" name="sns_8"
                                   wire:change="update_form('sns_8', 'sns_8_2')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_8-2" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">2</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_8-3" type="radio" value="3" name="sns_8"
                                   wire:change="update_form('sns_8', 'sns_8_3')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_8-3" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">3</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_8-4" type="radio" value="4" name="sns_8"
                                   wire:change="update_form('sns_8', 'sns_8_4')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_8-4" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">4</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_8-5" type="radio" value="5" name="sns_8"
                                   wire:change="update_form('sns_8', 'sns_8_5')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_8-5" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">5</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sns_8-6" type="radio" value="6" name="sns_8"
                                   wire:change="update_form('sns_8', 'sns_8_6')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sns_8-6" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">6 (Very often)</label>
                        </div>
                    </li>

                </ul>
            </div>

        </div>

    @endif

        <!-- Divider -->
        <div class="border-t border-2 my-4"></div>

        <div class="flex justify-between">
            @if($currentSNSQuestionSet == 2)
                <div class="p-4 text-lg font-light text-slate-400">({{ $currentSNSQuestionSet }}/2)</div>
                <button type="button"
                        @disabled($required_fields_filled_form_2 == 0)
                        wire:click="nextscene"
                        class="bg-gradient-to-br from-sky-400 to-sky-500 hover:from-sky-500 hover:to-sky-400 text-zinc-50
                        border border-2 border-slate-500
                         font-medium rounded-lg text-xl w-full sm:w-auto px-5 py-2.5 text-center my-4">
                    Next<span class="ps-2"><i class="fa-solid fa-circle-arrow-right"></i></span>
                </button>
            @else
                <div class="p-4 text-lg font-light text-slate-400">({{ $currentSNSQuestionSet }}/2)</div>
                <button type="button"
                        @disabled($required_fields_filled_form_1 == 0)
                        {{--                    wire:click="$emitTo('sid2302.utils.sus', 'nextquestion')"--}}
                        wire:click="nextquestion"
                        class="bg-gradient-to-br from-sky-400 to-sky-500 hover:from-sky-500 hover:to-sky-400 text-zinc-50
                        border border-2 border-slate-500
                         font-medium rounded-lg text-xl w-full sm:w-auto px-5 py-2.5 text-center my-4">
                    Next<span class="ps-2"><i class="fa-solid fa-circle-arrow-right"></i></span>
                </button>
            @endif
        </div>
</div>