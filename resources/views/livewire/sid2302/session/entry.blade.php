<div class="h-screen w-screen grid place-content-center justify-center static">
    <!-- Consent Form -->
    {{--<div class="flex flex-row h-screen static justify-center content-center">--}}
    <div class="w-auto mx-96 border-2 border-gray-500 rounded-lg shadow-lg p-2 bg-white">

        <div class="text-3xl text-center bg-gray-300 py-3 border border-1 border-gray-800">
            Consent to Participate in Research Study
        </div>

        <div class="m-2">
            <p class="indent-4">We are conducting a user study. As a part of this study, we intend to collect some necessary information
                to support our research. The following details are required:</p>
            <p class="ms-3 mt-2">1. Full Name</p>
            <p class="ms-3">2. Email Address</p>
            <p class="ms-3">3. Insitution Affiliation</p>
            <p class="ms-3 mb-2">4. Number of Years of Experience</p>
            <p class="indent-4">We promise you the utmost confidentiality. The data collected will solely be used for research purposes.
                Our primary goal is to ensure the improvement of our services, understand user patterns, and make
                improvements wherever necessary.</p>
            <br>
            <p class="indent-4">The data collected will not be disseminated in any form that may lead to the identification of the
                respondents/participants. The data will be stored in a secure environment, accessible only to the
                research team.</p>
            <br>
            <p class="indent-4">You are giving your voluntary consent to participate in this study by filling in the information below.
                Participation is entirely voluntary, and you can withdraw at any time without any consequences.</p>
        </div>

        <!-- Divider -->
        <div class="border-t border-2 my-4"></div>

{{--        <!-- User Inputs -->--}}
{{--        <form class="max-w-md mx-auto">--}}
{{--            <div class="relative z-0 w-full mb-5 group">--}}
{{--                <input type="email" name="floating_email" id="floating_email"--}}
{{--                       wire:model.defer="userEmail"--}}
{{--                       class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent--}}
{{--                        border-0 border-b-2 border-gray-300 appearance-none--}}
{{--                        focus:outline-none focus:ring-0 focus:border-blue-600 peer"--}}
{{--                       placeholder=" " required />--}}
{{--                <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500--}}
{{--                duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0]--}}
{{--                peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600--}}
{{--                peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0--}}
{{--                peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>--}}
{{--            </div>--}}

{{--            <div class="grid md:grid-cols-2 md:gap-6">--}}
{{--                <div class="relative z-0 w-full mb-5 group">--}}
{{--                    <input type="text"--}}
{{--                           name="floating_first_name"--}}
{{--                           id="floating_first_name"--}}
{{--                           wire:model.defer="userFirstName"--}}
{{--                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2--}}
{{--                           border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"--}}
{{--                           placeholder=" " required />--}}
{{--                    <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500--}}
{{--                     duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0--}}
{{--                     rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600--}}
{{--                     peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75--}}
{{--                     peer-focus:-translate-y-6">First name</label>--}}
{{--                </div>--}}
{{--                <div class="relative z-0 w-full mb-5 group">--}}
{{--                    <input type="text"--}}
{{--                           name="floating_last_name"--}}
{{--                           id="floating_last_name"--}}
{{--                           wire:model.defer="userLastName"--}}
{{--                           class="block py-2.5 px-0 w-full--}}
{{--                    text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none--}}
{{--                    focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />--}}
{{--                    <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500--}}
{{--                    duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0--}}
{{--                    rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100--}}
{{--                    peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="grid rid-cols-3 md:gap-6">--}}

{{--                <div class="relative z-0 w-full mb-5 group">--}}
{{--                    <label for="subspecialty"--}}
{{--                           class="block mb-2 text-sm font-medium text-gray-500">Subspecialty</label>--}}
{{--                    <select wire:model.defer="userSubspecialty"--}}
{{--                            id="subspecialty"--}}
{{--                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg--}}
{{--                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">--}}
{{--                        <option selected>Choose a Subspecialty</option>--}}
{{--                        <option value="NRAD">Neuroradiology</option>--}}
{{--                        <option value="NSUR">Neurosurgery</option>--}}
{{--                    </select>--}}
{{--                </div>--}}

{{--                <div class="relative z-0 w-full mb-5 group">--}}
{{--                    <label for="affiliation"--}}
{{--                           class="block mb-2 text-sm font-medium text-gray-500">Primary Affiliation</label>--}}
{{--                    <select wire:model.defer="userInstitution"--}}
{{--                            id="affiliation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg--}}
{{--                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">--}}
{{--                        <option selected>Choose an Institution</option>--}}
{{--                        <option value="CHCO">Children's Hospital Colorado</option>--}}
{{--                        <option value="CU">University of Colorado</option>--}}
{{--                    </select>--}}
{{--                </div>--}}

{{--                <div class="relative z-0 w-full mb-5 group">--}}
{{--                    <label for="mdyear"--}}
{{--                           class="block mb-2 text-sm font-medium text-gray-500">--}}
{{--                        MD Graduation Year--}}
{{--                    </label>--}}
{{--                    <select id="mdyear"--}}
{{--                            wire:model.defer="userMdYear"--}}
{{--                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg--}}
{{--                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">--}}
{{--                        <option selected>Choose a year</option>--}}
{{--                        @for($year = 2020; $year > 1900; $year--)--}}
{{--                            <option value="{{ $year }}">{{ $year }}</option>--}}
{{--                        @endfor--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--            </div>--}}

            <button type="button"
                    wire:click="beginsession"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
             focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center my-4">
                Submit
            </button>

{{--        </form>--}}


    </div>
</div>





{{--            --}}

{{--            <ol>--}}
{{--                <li>Full Name</li>--}}
{{--                <li>Email Adress</li>--}}
{{--                <li>Insitution Affiliation</li>--}}
{{--                <li>Number of Years of Experience</li>--}}
{{--            </ol>--}}

{{--            <p>We promise you the utmost confidentiality. The data collected will solely be used for research purposes. Our primary goal is to ensure the improvement of our services, understand user patterns, and make improvements wherever necessary.<br><br>--}}

{{--                The data collected will not be disseminated in any form that may lead to the identification of the respondents/participants. The data will be stored in a secure environment, accessible only to the research team.<br><br>--}}

{{--                You are giving your voluntary consent to participate in this study by filling in the information below. Participation is entirely voluntary, and you can withdraw at any time without any consequences.</p>--}}
{{--    </di>--}}
{{--</div>--}}
{{--</div>--}}