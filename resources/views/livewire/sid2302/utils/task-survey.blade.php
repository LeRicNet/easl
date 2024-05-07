<div wire:poll.1ms
        class="z-1000 h-screen flex flex-row justify-center items-center">
    <div class="w-[45%] bg-white border-2 border-slate-600 shadow rounded-lg p-2">
        <div class="p-4 mt-2">
            <h3 class="font-semibold text-gray-900">
                1. How difficult was it to identify the features in this patient?
            </h3>
            <div class="py-2 px-4">
                <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="task_survey_1-1" type="radio" value="1" name="task_survey_1"
                                   wire:change="update_form('difficulty', 1)"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="task_survey_1-1" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">1 (Very Easy)</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="task_survey_1-2" type="radio" value="2" name="task_survey_1"
                                   wire:change="update_form('difficulty', 2)"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="task_survey_1-2" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">2</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="task_survey_1-3" type="radio" value="3" name="task_survey_1"
                                   wire:change="update_form('difficulty', 3)"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="task_survey_1-3" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">3</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="task_survey_1-4" type="radio" value="4" name="task_survey_1"
                                   wire:change="update_form('difficulty', 4)"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="task_survey_1-4" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">4</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="task_survey_1-5" type="radio" value="5" name="task_survey_1"
                                   wire:change="update_form('difficulty', 5)"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="task_survey_1-5" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">5 (Extremely Difficult)</label>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Optional Question -->
            <div @class([
            "hidden" => (! isset($difficulty)) or ($difficulty < 4),
            "px-8"])>
                <label for="task_survey_opt_q_1" class="block mb-2 text-sm font-medium text-gray-900">Which feature was most difficult for you to determine?</label>
                <select id="task_survey_opt_q_1"
                        wire:model="most_difficult"
                        wire:change="update_form('most_difficult', 'value')"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
             focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option selected>Choose a feature</option>
                    <option id="task_survey_opt_q_1-tumor_location" value="tumor_location">Tumor Location</option>
                    <option id="task_survey_opt_q_1-tumor_type" value="tumor_type">Tumor Type</option>
                    <option id="task_survey_opt_q_1-hypoinvasion" value="hypoinvasion">Hypothalamic Invasion/Involvment</option>
                    <option id="task_survey_opt_q_1-skullbase" value="skullbase">Skullbase Invasion/Involvement</option>
                    <option id="task_survey_opt_q_1-mamillarybody" value="mamillarybody">Mamillary Body Invasion/Involvement</option>
                    <option id="task_survey_opt_q_1-opticchiasm" value="opticchiasm">Optic Chiasm Invasion/Involvement</option>
                    <option id="task_survey_opt_q_1-hypoedema" value="hypoedema">Hypothalamic Edema</option>
                    <option id="task_survey_opt_q_1-chiasmedema" value="chiasmedema">Chiasm Edema</option>
                    <option id="task_survey_opt_q_1-acf" value="acf">Anterior Cranial Fossa Involvement</option>
                    <option id="task_survey_opt_q_1-mcf" value="mcf">Middle Cranial Fossa Involvement</option>
                    <option id="task_survey_opt_q_1-pcf" value="pcf">Posterior Cranial Fossa Involvement</option>
                    <option id="task_survey_opt_q_1-multiple" value="mult">More than one</option>
                    <option id="task_survey_opt_q_1-unknown" value="unk">I can't decide</option>
                </select>
            </div>
        </div>

        <div class="p-4 mt-2">
            <h3 class="font-semibold text-gray-900">
                2. How confident are you in identifying the features in this patient?
            </h3>
            <div class="py-2 px-4">
                <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="task_survey_2-1" type="radio" value="1" name="task_survey_2"
                                   wire:change="update_form('confidence', 1)"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="task_survey_2-1" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">1 (Not at all Confident)</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="task_survey_2-2" type="radio" value="2" name="task_survey_2"
                                   wire:change="update_form('confidence', 2)"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="task_survey_2-2" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">2</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="task_survey_2-3" type="radio" value="3" name="task_survey_2"
                                   wire:change="update_form('confidence', 3)"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="task_survey_2-3" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">3</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="task_survey_2-4" type="radio" value="4" name="task_survey_2"
                                   wire:change="update_form('confidence', 4)"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="task_survey_2-4" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">4</label>
                        </div>
                    </li>

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                        <div class="flex items-center ps-3">
                            <input id="task_survey_2-5" type="radio" value="5" name="task_survey_2"
                                   wire:change="update_form('confidence', 5)"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="task_survey_2-5" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">5 (Extremely Confident)</label>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Optional Question -->
            <div @class([
            "hidden" => (! isset($confidence)) or ($confidence < 4),
            "px-8"])>
                <label for="task_survey_opt_q_2" class="block mb-2 text-sm font-medium text-gray-900">Which feature were you most confident identifying?</label>
                <select id="task_survey_opt_q_2"
                        wire:model="most_confident"
                        wire:change="update_form('most_confident', 'value')"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
             focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option selected>Choose a feature</option>
                    <option id="task_survey_opt_q_2-tumor_location" value="tumor_location">Tumor Location</option>
                    <option id="task_survey_opt_q_2-tumor_type" value="tumor_type">Tumor Type</option>
                    <option id="task_survey_opt_q_2-hypoinvasion" value="hypoinvasion">Hypothalamic Invasion/Involvment</option>
                    <option id="task_survey_opt_q_2-skullbase" value="skullbase">Skullbase Invasion/Involvement</option>
                    <option id="task_survey_opt_q_2-mamillarybody" value="mamillarybody">Mamillary Body Invasion/Involvement</option>
                    <option id="task_survey_opt_q_2-opticchiasm" value="opticchiasm">Optic Chiasm Invasion/Involvement</option>
                    <option id="task_survey_opt_q_2-hypoedema" value="hypoedema">Hypothalamic Edema</option>
                    <option id="task_survey_opt_q_2-chiasmedema" value="chiasmedema">Chiasm Edema</option>
                    <option id="task_survey_opt_q_2-acf" value="acf">Anterior Cranial Fossa Involvement</option>
                    <option id="task_survey_opt_q_2-mcf" value="mcf">Middle Cranial Fossa Involvement</option>
                    <option id="task_survey_opt_q_2-pcf" value="pcf">Posterior Cranial Fossa Involvement</option>
                    <option id="task_survey_opt_q_2-multiple" value="mult">More than one</option>
                    <option id="task_survey_opt_q_2-unknown" value="unk">I can't decide</option>
                </select>
            </div>
        </div>
        <!-- Divider -->
        <div class="border-t border-2 my-4"></div>

        <div class="flex w-full justify-end p-2">
            <button @disabled($required_fields_filled == 0)
                    id="completeTaskSurvey"
                    wire:click="nextscene"
            class="btn bg-gradient-to-br from-sky-400 to-sky-500 hover:from-sky-500 hover:to-sky-400 text-zinc-50
            border border-2 border-slate-500 font-medium rounded-lg px-2 py-1">
            Next Patient<span class="ps-2"><i class="fa-solid fa-caret-right"></i></span>
            </button>
        </div>
    </div>
    {{-- Because she competes with no one, no one can compete with her. --}}

</div>
