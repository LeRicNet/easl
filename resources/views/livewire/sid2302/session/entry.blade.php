<div class="h-screen w-screen grid place-content-center justify-center static bg-gradient-to-bl from-sky-100 to-orange-200">
    <!-- Consent Form -->
    {{--<div class="flex flex-row h-screen static justify-center content-center">--}}
    <div class="w-auto mx-96 border-2 border-gray-500 rounded-lg shadow-lg p-2 bg-white">

        <div class=" font-medium text-3xl text-center text-zinc-50
        py-3 border border-gray-800 bg-gradient-to-tr from-sky-500 to-sky-600">
            Consent to Participate in Research Study (COMIRB 20-1815)
        </div>

        <div class="m-2 text-sm">
            <div class="mt-1 indent-4">You are being asked to be in this research study because you are a clinical decision-maker in Pediatric Neurosurgery or Neuroradiology with expertise in interpreting radiographic images on suprasellar CNS tumors.
            </div>
            <div class="my-4 indent-4">If you join the study, you will be asked complete ethnographic survey questions and to characterize clinical and radiographic features for up to 10 patients pathologically diagnosed with Adamantinomatous Craniopharyngioma, or as many as can be completed within the 30-minute session window.
            </div>
            <div class="my-4 indent-4">This study is designed to learn more about how AI can aid clinical experts in their ability to characterize radiographic features associated with pediatric suprasellar tumors.
            </div>
            <div class="my-4 indent-4">Possible discomforts and risks include system crashes or software errors, a learning curve for unfamiliar interfaces, psychological discomfort in being observed or recorded, and potential unanticipated effects from using the software. There may be risks the researchers have yet to think of.
            </div>
            <div class="my-4 indent-4">This study is not designed to benefit you directly.
            </div>
            <div class="my-4 indent-4">Every effort will be made to protect your privacy and confidentiality by collecting data that does not personally identify participants. We utilize encrypted participant IDs instead of names and remove any personally identifiable information (PII) from the collected data. We store PII separately from the study results. Data is stored on our password-protected server in the Barbara Davis Center, within the University of Colorado Private Network, and is not publicly accessible. The analysis will be performed in a manner that is blinded to participant identities. No PII will be shared with the results of this study.
            </div>
            <div class="my-4 indent-4">This research is paid for by the National Cancer Institute, the National Center for Advancing Translational Sciences, the Children’s Hospital Colorado Center for Children’s Surgery, and the Morgan Adams Foundation for Pediatric Brain Tumor Research.
            </div>
            <div class="my-4 indent-4">You have a choice about being in this study. You do not have to be in this study if you do not want to be.
            </div>
            <div class="my-4 indent-4">The data we collect will be used for this study but may also be necessary for future research. Your data may be used for future research or distributed to other researchers for prospective study without additional consent if information that identifies you is removed from the data.
            </div>
            <div class="my-4 indent-4"><span class="font-medium">If you have questions, call Eric Prince at (720) 839-7257.</span> You can call to ask questions at any time.
            </div>
            <div class="my-4 indent-4"><span class="font-medium">You may have questions about your rights as someone in this study. If you have questions, call COMIRB (the responsible Institutional Review Board) at (303) 724-1055.</span>
            </div>
            <div class="mb-1 flex justify-center">
                <span class="text-center text-lg font-bold text-red-500 uppercase
            border border-black w-[55rem]">You agree to participate in this research study by submitting the information below.</span>
            </div>

        </div>

        <!-- Divider -->
        <div class="border-t border-2 my-4"></div>

        <!-- User Inputs -->
        <form class="w-full mx-auto form-control form-input" wire:submit.prevent="submit">

            <div class="grid grid-cols-3 gap-x-4">
                <div class="grid grid-auto-rows content-center">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="email" name="floating_email" id="floating_email"
                               wire:model.defer="userEmail"
                               class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent
                        border-0 border-b-2 border-gray-300 appearance-none
                        focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                               placeholder=" " required />
                        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500
                duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0]
                peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600
                peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0
                peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
                    </div>

                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text"
                                   name="floating_first_name"
                                   id="floating_first_name"
                                   wire:model.defer="userFirstName"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2
                           border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" " required />
                            <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500
                     duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0
                     rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600
                     peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75
                     peer-focus:-translate-y-6">First name</label>
                        </div>


                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text"
                                   name="floating_last_name"
                                   id="floating_last_name"
                                   wire:model.defer="userLastName"
                                   class="block py-2.5 px-0 w-full
                    text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none
                    focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500
                    duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0
                    rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100
                    peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
                        </div>
                    </div>

                    <div class="relative z-0 w-full mb-5 group">
                        <label for="gender"
                               class="block mb-2 text-sm font-medium text-gray-500">Gender</label>
                        <select id="gender"
                                wire:model.defer="userGender"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected>Choose a Response</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                            <option value="O">Other</option>
                            <option value="U">Rather not say</option>
                        </select>
                    </div>

                </div>


                <div>
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="subspecialty"
                               class="block mb-2 text-sm font-medium text-gray-500">Subspecialty</label>
                        <select id="subspecialty"
                                wire:model.defer="userSubspecialty"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected>Choose a Subspecialty</option>
                            <option value="NRAD">Neuroradiology</option>
                            <option value="NSUR">Neurosurgery</option>
                        </select>
                    </div>

                    <div class="relative z-0 w-full mb-5 group">
                        <label for="affiliation"
                               class="block mb-2 text-sm font-medium text-gray-500">Primary Affiliation</label>
                        <select wire:model.defer="userInstitution"
                                id="affiliation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected>Choose an Institution</option>
                            <option value="CHCO">Children's Hospital Colorado</option>
                            <option value="CU">University of Colorado</option>
                        </select>
                    </div>

                    <div class="relative z-0 w-full mb-5 group">
                        <label for="mdyear"
                               class="block mb-2 text-sm font-medium text-gray-500">
                            Year Residency Completed
                        </label>
                        <select id="mdyear"
                                wire:model.defer="userMdYear"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected>Choose a year</option>
                            @for($year = 2020; $year > 1900; $year--)
                                <option value="{{ $year }}">{{ $year }}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="flex h-full content-center justify-center">
{{--                    <div class="relative z-0 w-full mb-5 group">--}}
{{--                        <label for="affiliation"--}}
{{--                               class="block mb-2 text-sm font-medium text-gray-500">Would you use AI in the clinical setting?</label>--}}
{{--                        <select wire:model.defer="userInstitution"--}}
{{--                                id="affiliation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg--}}
{{--                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">--}}
{{--                            <option selected>Choose a Response</option>--}}
{{--                            <option value="CHCO">Yes</option>--}}
{{--                            <option value="CU">University of Colorado</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
                    <div class="relative grid content-center">
                        <button type="submit"
                                id="consentSubmissionButton"
                                wire:click="beginsession"
                                onclick="window._paq.push(['sessionEvent', 'entry', 'consent_signed'])"
                                class="btn btn-lg bg-gradient-to-br
                            h-[3rem] px-4
                            text-3xl shrink
                            rounded border border-2 border-slate-500
                            from-sky-400 to-sky-500 hover:from-sky-500 hover:to-sky-400 text-zinc-50">
                            Submit<span class="ps-2"><i class="fa-solid fa-circle-arrow-right"></i></span>
                        </button>
                    </div>
                </div>
            </div>
        </form>



{{--            <div class="grid rid-cols-3 md:gap-6">--}}



{{--            </div>--}}



{{--        </form>--}}


    </div>
</div>