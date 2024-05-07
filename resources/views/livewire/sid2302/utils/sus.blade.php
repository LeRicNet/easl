<div wire:poll.1ms>
    @if($currentQuestionSet == 1)
        <div class="flex mt-4 mb-1 justify-center">
{{--            <div class="font-normal text-lg text-gray-900 border border-slate-700 px-4 py-2">--}}
{{--                For each of the following questions, please check the box that best reflects <span class="font-bold">how good you are at doing the following things</span>:--}}
{{--            </div>--}}
        </div>

        <div class="p-4 mt-2">
            <h3 class="font-semibold text-gray-900">
                1. I think that I would like to use this system frequently.
            </h3>
            <div class="py-2 px-4">
                <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_1-1" type="radio" value="1" name="sus_1"
                                   wire:change="update_form('sus_1', 'sus_1_1')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">1 (Strongly Disagree)</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_1-2" type="radio" value="2" name="sus_1"
                                   wire:change="update_form('sus_1', 'sus_1_2')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_1-2" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">2</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_1-3" type="radio" value="3" name="sus_1"
                                   wire:change="update_form('sus_1', 'sus_1_3')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_1-3" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">3</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_1-4" type="radio" value="4" name="sus_1"
                                   wire:change="update_form('sus_1', 'sus_1_4')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_1-4" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">4</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_1-5" type="radio" value="5" name="sus_1"
                                   wire:change="update_form('sus_1', 'sus_1_5')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_1-5" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">5 (Strongly Agree)</label>
                        </div>
                    </li>

                </ul>
            </div>

        </div>

        <div class="p-4">
            <h3 class="font-semibold text-gray-900">
                2. I found the system unnecessarily complex
            </h3>
            <div class="py-2 px-4">
                <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_2-1" type="radio" value="1" name="sus_2"
                                   wire:change="update_form('sus_2', 'sus_2_1')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_2-1" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">1 (Strongly Disagree)</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_2-2" type="radio" value="2" name="sus_2"
                                   wire:change="update_form('sus_2', 'sus_2_2')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_2-2" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">2</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_2-3" type="radio" value="3" name="sus_2"
                                   wire:change="update_form('sus_2', 'sus_2_3')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_2-3" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">3</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_2-4" type="radio" value="4" name="sus_2"
                                   wire:change="update_form('sus_2', 'sus_2_4')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_2-4" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">4</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_2-5" type="radio" value="5" name="sus_2"
                                   wire:change="update_form('sus_2', 'sus_2_5')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_2-5" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">5 (Strongly Agree)</label>
                        </div>
                    </li>

                </ul>
            </div>

        </div>

        <div class="p-4">
            <h3 class="font-semibold text-gray-900">
                3. I thought the system was easy to use.
            </h3>
            <div class="py-2 px-4">
                <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_3-1" type="radio" value="1" name="sus_3"
                                   wire:change="update_form('sus_3', 'sus_3_1')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_3-1" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">1 (Strongly Disagree)</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_3-2" type="radio" value="2" name="sus_3"
                                   wire:change="update_form('sus_3', 'sus_3_2')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_3-2" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">2</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_3-3" type="radio" value="3" name="sus_3"
                                   wire:change="update_form('sus_3', 'sus_3_3')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_3-3" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">3</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_3-4" type="radio" value="4" name="sus_3"
                                   wire:change="update_form('sus_3', 'sus_3_4')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_3-4" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">4</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_3-5" type="radio" value="5" name="sus_3"
                                   wire:change="update_form('sus_3', 'sus_3_5')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_3-5" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">5 (Strongly Agree)</label>
                        </div>
                    </li>

                </ul>
            </div>

        </div>

        <div class="p-4">
            <h3 class="font-semibold text-gray-900">
                4. I think that I would need the support of a technical person to be able to use this system.
            </h3>
            <div class="py-2 px-4">
                <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_4-1" type="radio" value="1" name="sus_4"
                                   wire:change="update_form('sus_4', 'sus_4_1')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_4-1" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">1 (Strongly Disagree)</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_4-2" type="radio" value="2" name="sus_4"
                                   wire:change="update_form('sus_4', 'sus_4_2')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_4-2" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">2</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_4-3" type="radio" value="3" name="sus_4"
                                   wire:change="update_form('sus_4', 'sus_4_3')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_4-3" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">3</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_4-4" type="radio" value="4" name="sus_4"
                                   wire:change="update_form('sus_4', 'sus_4_4')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_4-4" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">4</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_4-5" type="radio" value="5" name="sus_4"
                                   wire:change="update_form('sus_4', 'sus_4_5')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_4-5" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">5 (Strongly Agree)</label>
                        </div>
                    </li>

                </ul>
            </div>
        </div>

        <div class="p-4">
            <h3 class="font-semibold text-gray-900">
                5. I found the various functions in this system were well integrated.
            </h3>
            <div class="py-2 px-4">
                <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_5-1" type="radio" value="1" name="sus_5"
                                   wire:change="update_form('sus_5', 'sus_5_1')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_5-1" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">1 (Strongly Disagree)</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_5-2" type="radio" value="2" name="sus_5"
                                   wire:change="update_form('sus_5', 'sus_5_2')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_5-2" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">2</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_5-3" type="radio" value="3" name="sus_5"
                                   wire:change="update_form('sus_5', 'sus_5_3')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_5-3" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">3</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_5-4" type="radio" value="4" name="sus_5"
                                   wire:change="update_form('sus_5', 'sus_5_4')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_5-4" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">4</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_5-5" type="radio" value="5" name="sus_5"
                                   wire:change="update_form('sus_5', 'sus_5_5')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_5-5" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">5 (Strongly Agree)</label>
                        </div>
                    </li>

                </ul>
            </div>
        </div>

    @else

        <div class="flex mt-4 mb-1 justify-center">
{{--            <div class="font-normal text-lg text-gray-900 border border-slate-700 px-4 py-2">--}}
{{--                For each of the following questions, please check the box that <span class="font-bold">best reflects your answer</span>:--}}
{{--            </div>--}}
        </div>



        <div class="p-4">
            <h3 class="font-semibold text-gray-900">
                6. I thought there was too much inconsistency in this system.
            </h3>
            <div class="py-2 px-4">
                <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_6-1" type="radio" value="1" name="sus_6"
                                   wire:change="update_form('sus_6', 'sus_6_1')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_6-1" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">1 (Strongly Disagree)</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_6-2" type="radio" value="2" name="sus_6"
                                   wire:change="update_form('sus_6', 'sus_6_2')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_6-2" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">2</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_6-3" type="radio" value="3" name="sus_6"
                                   wire:change="update_form('sus_6', 'sus_6_3')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_6-3" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">3</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_6-4" type="radio" value="4" name="sus_6"
                                   wire:change="update_form('sus_6', 'sus_6_4')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_6-4" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">4</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_6-5" type="radio" value="5" name="sus_6"
                                   wire:change="update_form('sus_6', 'sus_6_5')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_6-5" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">5 (Strongly Agree)</label>
                        </div>
                    </li>

                </ul>
            </div>
        </div>

        <div class="p-4">
            <h3 class="font-semibold text-gray-900">
                7. I would imagine that most people would learn to use this system very quickly.
            </h3>
            <div class="py-2 px-4">
                <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_7-1" type="radio" value="1" name="sus_7"
                                   wire:change="update_form('sus_7', 'sus_7_1')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_7-1" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">1 (Strongly Disagree)</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_7-2" type="radio" value="2" name="sus_7"
                                   wire:change="update_form('sus_7', 'sus_7_2')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_7-2" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">2</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_7-3" type="radio" value="3" name="sus_7"
                                   wire:change="update_form('sus_7', 'sus_7_3')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_7-3" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">3</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_7-4" type="radio" value="4" name="sus_7"
                                   wire:change="update_form('sus_7', 'sus_7_4')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_7-4" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">4</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_7-5" type="radio" value="5" name="sus_7"
                                   wire:change="update_form('sus_7', 'sus_7_5')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_7-5" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">5 (Strongly Agree)</label>
                        </div>
                    </li>

                </ul>
            </div>

        </div>

        <div class="p-4">
            <h3 class="font-semibold text-gray-900">
                8. I found the system very cumbersome to use.
            </h3>
            <div class="py-2 px-4">
                <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_8-1" type="radio" value="1" name="sus_8"
                                   wire:change="update_form('sus_8', 'sus_8_1')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_8-1" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">1 (Strongly Disagree)</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_8-2" type="radio" value="2" name="sus_8"
                                   wire:change="update_form('sus_8', 'sus_8_2')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_8-2" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">2</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_8-3" type="radio" value="3" name="sus_8"
                                   wire:change="update_form('sus_8', 'sus_8_3')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_8-3" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">3</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_8-4" type="radio" value="4" name="sus_8"
                                   wire:change="update_form('sus_8', 'sus_8_4')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_8-4" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">4</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_8-5" type="radio" value="5" name="sus_8"
                                   wire:change="update_form('sus_8', 'sus_8_5')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_8-5" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">5 (Strongly Agree)</label>
                        </div>
                    </li>

                </ul>
            </div>
        </div>

        <div class="p-4">
            <h3 class="font-semibold text-gray-900">
                9. I felt very confident using the system.
            </h3>
            <div class="py-2 px-4">
                <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_9-1" type="radio" value="1" name="sus_9"
                                   wire:change="update_form('sus_9', 'sus_9_1')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_9-1" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">1 (Strongly Disagree)</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_9-2" type="radio" value="2" name="sus_9"
                                   wire:change="update_form('sus_9', 'sus_9_2')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_9-2" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">2</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_9-3" type="radio" value="3" name="sus_9"
                                   wire:change="update_form('sus_9', 'sus_9_3')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_9-3" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">3</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_9-4" type="radio" value="4" name="sus_9"
                                   wire:change="update_form('sus_9', 'sus_9_4')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_9-4" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">4</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_9-5" type="radio" value="5" name="sus_9"
                                   wire:change="update_form('sus_9', 'sus_9_5')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_9-5" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">5 (Strongly Agree)</label>
                        </div>
                    </li>

                </ul>
            </div>
        </div>

        <div class="p-4">
            <h3 class="font-semibold text-gray-900">
                10. I needed to learn a lot of things before I could get going with this system.
            </h3>
            <div class="py-2 px-4">
                <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_10-1" type="radio" value="1" name="sus_10"
                                   wire:change="update_form('sus_10', 'sus_10_1')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_10-1" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">1 (Strongly Disagree)</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_10-2" type="radio" value="2" name="sus_10"
                                   wire:change="update_form('sus_10', 'sus_10_2')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_10-2" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">2</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_10-3" type="radio" value="3" name="sus_10"
                                   wire:change="update_form('sus_10', 'sus_10_3')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_10-3" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">3</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_10-4" type="radio" value="4" name="sus_10"
                                   wire:change="update_form('sus_10', 'sus_10_4')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_10-4" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">4</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="sus_10-5" type="radio" value="5" name="sus_10"
                                   wire:change="update_form('sus_10', 'sus_10_5')"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="sus_10-5" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">5 (Strongly Agree)</label>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    @endif

    <!-- Divider -->
    <div class="border-t border-2 my-4"></div>

    <div class="flex justify-between">
        @if($currentQuestionSet == 2)
            <div class="p-4 text-lg font-light text-slate-400">({{ $currentQuestionSet }}/2)</div>
            <button type="button"
                    id="submitStudyResults"
                    @disabled($required_fields_filled_form_2 == 0)
                    wire:click="nextscene"
                    class="bg-gradient-to-br from-yellow-400 to-amber-500 hover:from-amber-500 hover:to-yellow-400 text-zinc-900
                        border border-2 border-slate-500
                         font-medium rounded-lg text-xl w-full sm:w-auto px-5 py-2.5 text-center my-4">
               Finish<span class="ps-2"><i class="fa-solid fa-circle-arrow-right"></i></span>
            </button>
        @else
            <div class="p-4 text-lg font-light text-slate-400">({{ $currentQuestionSet }}/2)</div>
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