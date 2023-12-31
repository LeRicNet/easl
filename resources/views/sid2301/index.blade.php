<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EASL - sid2301</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-muted fs-6" href="#">EASL (sid2301): prototyping interfaces</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Interface Survey (1/3)</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">

{{--                    <div id="collapsibleDiv">--}}
{{--                        Supported Tasks:--}}
{{--                        <ul>--}}
{{--                            <li>Identify top predicted diagnosis for a given patient</li>--}}
{{--                            <li>Determine the identity and diagnosis of the most similar patient compared to a target patient</li>--}}
{{--                            <li>Compare between diagnostic predictions for the new patient and the previously seen patient</li>--}}
{{--                            <li>Look-up demographic information related to patients</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}

                    <!-- Survey Question #1 -->
                    <div id="survey_q1" class="collapse show">
                        How easy is it to identify top predicted diagnosis for a given patient?
                        <div class="btn-group w-100 p-1" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
                            <label class="btn btn-outline-secondary btn-sm" for="btnradio1">1</label>

                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                            <label class="btn btn-outline-secondary btn-sm" for="btnradio2">2</label>

                            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                            <label class="btn btn-outline-secondary btn-sm" for="btnradio3">3</label>

                            <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
                            <label class="btn btn-outline-secondary btn-sm" for="btnradio4">4</label>

                            <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
                            <label class="btn btn-outline-secondary btn-sm" for="btnradio5">5</label>
                        </div>
                        <div class="d-flex justify-content-end pt-2 pe-3">
                            <button type="button" class="btn btn-success btn-sm next-survey-question" disabled>Next</button>
                        </div>
                    </div>

                    <div id="survey_q1_card" class="collapse hide border border-success rounded-lg bg-light shadow w-100">
                        <div class="row m-1 p-2">
                            <div class="col-8 text-muted" style="font-style: italic; margin: auto;">
                                How easy is it to identify top predicted diagnosis for a given patient?
                            </div>
                            <div class="col-4 fs-1 text-center font-weight-bold text-muted" id="survey_q1_card_value" style="margin: auto">
                                <!-- BLANK -->
                            </div>
                        </div>
                    </div>

                    <!-- Survey Question #2 -->
                    <div id="survey_q2" class="collapse hide" style="margin-top: 10px;">
                        How reliable do you perceive this interface?
                        <div class="btn-group w-100 p-1" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio6" autocomplete="off">
                            <label class="btn btn-outline-secondary btn-sm" for="btnradio6">1</label>

                            <input type="radio" class="btn-check" name="btnradio" id="btnradio7" autocomplete="off">
                            <label class="btn btn-outline-secondary btn-sm" for="btnradio7">2</label>

                            <input type="radio" class="btn-check" name="btnradio" id="btnradio8" autocomplete="off">
                            <label class="btn btn-outline-secondary btn-sm" for="btnradio8">3</label>

                            <input type="radio" class="btn-check" name="btnradio" id="btnradio9" autocomplete="off">
                            <label class="btn btn-outline-secondary btn-sm" for="btnradio9">4</label>

                            <input type="radio" class="btn-check" name="btnradio" id="btnradio10" autocomplete="off">
                            <label class="btn btn-outline-secondary btn-sm" for="btnradio10">5</label>
                        </div>
                        <div class="d-flex justify-content-end pt-2 pe-3">
                            <button type="button" class="btn btn-success btn-sm next-survey-question" disabled>Next</button>
                        </div>
                    </div>

                    <div id="survey_q2_card" style="margin-top: 10px;"
                         class="collapse hide border border-success rounded-lg bg-light shadow w-100">
                        <div class="row m-1 p-2">
                            <div class="col-8 text-muted" style="font-style: italic; margin: auto;">
                                How reliable do you perceive this interface?
                            </div>
                            <div class="col-4 fs-1 text-center font-weight-bold text-muted" id="survey_q2_card_value" style="margin: auto">
                                <!-- BLANK -->
                            </div>
                        </div>
                    </div>


{{--                    <form class="d-flex mt-3" role="input">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12 text-center">How reliable do you perceive this interface?</div>--}}
{{--                            <div class="row mt-2">--}}
{{--                                <div class="btn-group btn-group-toggle me-2" data-toggle="buttons" role="group" aria-label="First group" id="survey-q5">--}}
{{--                                    <button type="button"--}}
{{--                                            onclick="respondToSurvey()"--}}
{{--                                            class="btn btn-outline-secondary btn-sm">1</button>--}}
{{--                                    <button type="button" class="btn btn-outline-secondary btn-sm">2</button>--}}
{{--                                    <button type="button" class="btn btn-outline-secondary btn-sm">3</button>--}}
{{--                                    <button type="button" class="btn btn-outline-secondary btn-sm">4</button>--}}
{{--                                    <button type="button" class="btn btn-outline-secondary btn-sm">5</button>--}}
{{--                                </div>--}}
{{--                                <div class="col-3 text-center" style="font-size: 14px; color: grey;">not reliable</div>--}}
{{--                                <div class="col-6"></div>--}}
{{--                                <div class="col-3 text-center" style="font-size: 14px; color: grey;">very reliable</div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                        <label for="survey-q-1"></label>--}}

{{--                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">--}}
{{--                        <button class="btn btn-outline-success" type="submit">Search</button>--}}
{{--                    </form>--}}
                </div>

                <div class="offcanvas-footer">
                    <div class="d-flex justify-content-end pt-2 pb-2 pe-3">
                        <button type="button" class="btn btn-success btn-lg collapse hide" id="survey_q3">Next</button>
                    </div>
            </div>
        </div>
    </nav>

    <div id="consent_form" style="margin-top: 120px;">
        <div class="bg-light mx-auto my-auto border border-3 border-primary rounded-3 shadow-lg" style="height: 70vh; width: 500px;">
            <div class="w-full bg-primary">
                <div class="fs-3 font-weight-bold text-center text-white">Consent to Particpate in Study</div>
            </div>
            <div class="overflow-auto border border-black mt-5 p-1" style="height: 400px; margin-left: 10px; margin-right: 10px;">
                You are being asked to be in this research study because "criteria".<br><br>
                If you join the study, you will "what they need to do".<br><br>
                This study is designed to learn more about "one or two words".<br><br>
                Possible discomforts or risks include "what the discomforts or risks may be". There may be risks the researchers have not thought of.<br><br>
                This study is not designed to benefit you directly.<br><br>
                Every effort will be made to protect your privacy and confidentiality by "how".<br><br>
                [This research is being paid for by "sponsor name". [if applicable]]<br><br>
                You have a choice about being in this study. You do not have to be in this study if you do not want to be.<br><br>
                The data we collect will be used for this study but may also be important for future research. Your data may be used for future research or distributed to other researchers for future study without additional consent if information that identifies you is removed from the data.<br><br>
                If you have questions, you can call "insert contact name" at "insert phone number".  You can call to ask questions at any time.<br><br>
                You may have questions about your rights as someone in this study. If you have questions, you can call COMIRB (the responsible Institutional Review Board) at (303) 724-1055.<br><br>
                By completing this survey, you are agreeing to participate in this research study. [optional]
            </div>
            <div>
{{--                <div class="input-group p-2 pt-3">--}}
{{--                    <span class="input-group-text">Name</span>--}}
{{--                    <input type="text" aria-label="First name" class="form-control">--}}
{{--                    <input type="text" aria-label="Last name" class="form-control">--}}
{{--                </div>--}}
{{--                <div class="input-group p-2 pt-3">--}}
{{--                    <span class="input-group-text">Date</span>--}}
{{--                    <input type="text" aria-label="Date" class="form-control">--}}
{{--                </div>--}}
                <div class="d-flex align-items-end flex-column p-2">
                    <button class="btn btn-primary w-25" id="submit_consent">Submit</button>
                </div>
            </div>
        </div>
    </div>

    {{-- iframe to view each prototype--}}
    <div id="prototype_window" class="border border-gray h-100 rounded-lg shadow-lg p-1" style="margin-top: 60px; display: none;">

        <iframe src="{{ route('atpc') }}" style="width: 100%; height: 100vh;"></iframe>

    </div>
</div>

<!-- JS for survey -->
<script>

    $(document).ready(function() {


        let interface_order = [
            "{{ route('atpc') }}",
            "{{ route('design-b') }}"
        ]
        // Shuffle the interfaces
        let sorted_interface_order = interface_order.sort((a,b) => 0.5 - Math.random());
        console.log("Interface Order: " . interface_order);

        // Utility functions
        function toggleSurvey(elem) {
            if (elem.hasClass('show')) {
                elem.removeClass('show');
                elem.addClass('hide');
            } else if (elem.hasClass('hide')) {
                elem.removeClass('hide');
                elem.addClass('show');
            }

        }

        // Submit Consent
        $('#submit_consent').click(function(e) {
            let prototype_window = $('#prototype_window');
            let consent_form = $('#consent_form');

            console.log('submit consent..');
            console.log("Interface Order: " + sorted_interface_order);
            console.log(prototype_window);

            consent_form.hide();
            prototype_window.children()[0].src = sorted_interface_order[0];
            prototype_window.show();
        })

        // Respond to survey question
        $('.btn-group > .btn').click(function (e) {

            let survey_id = e.currentTarget.parentElement.parentElement.id;
            let selection_indicator = survey_id + '_selection';

            // Check to see if other responses have been selected.
            // If so, remove the label
            let selections = $('.' + selection_indicator);
            if (selections.length > 0) {
                for (let selection = 0; selection < selections.length; selection++) {
                    selections[selection].classList.remove(selection_indicator);
                }
            }
            e.currentTarget.classList.add(selection_indicator);

            // Enable the button to progress the survey
            e.currentTarget.parentElement.parentElement.children[1].children[0].disabled = false;
        })

        // Proceed to next question
        $('.next-survey-question').click(function (e) {
            console.log('next question');

            // Get parent div for survey question
            let parent_question_id =  e.currentTarget.parentElement.parentElement.id;
            console.log(parent_question_id);
            let parent_question = $('#' + parent_question_id);
            console.log(parent_question);


            let summary_card_id = parent_question_id + '_card';
            console.log(summary_card_id);
            let summary_card = $('#' + summary_card_id);
            console.log(summary_card);

            // Get response for card
            let response = $('.' + parent_question_id + '_selection');
            console.log(response);
            $('#' + summary_card_id + '_value').html(response.html());

            // Get next question
            let index = parseInt(parent_question_id.slice(-1));
            let next_index = index + 1;
            console.log('next index: ' + next_index.toString());
            let next_question_id = parent_question_id.replace('q' + index, 'q' + next_index);
            console.log('next question: ' + next_question_id);
            let next_question = $('#' + next_question_id);

            toggleSurvey(parent_question);
            toggleSurvey(summary_card);
            toggleSurvey(next_question);
        })

        $('#survey_q3').click(function(e) {
            console.log('Next Interface...');
            let prototype_window = $('#prototype_window');
            prototype_window.children()[0].src = sorted_interface_order[1];

            // Reset Survey
            let survey = $('.offcanvas');
            let survey_q1 = $('#survey_q1');
            let survey_q1_card = $('#survey_q1_card');
            let survey_q2_card = $('#survey_q2_card');

            survey.hide();

            toggleSurvey(survey_q1);
            toggleSurvey(survey_q1_card);
            toggleSurvey(survey_q2_card);

        })
    });

    // $(document).on('click', '.btn-group button', function (e) { console.log('Hello World'); });
    // $(function() {
    //     $('#survey-q5').on('click', '.btn-group .btn', function (e) {
    //         console.log('Button clicked.');
    //     });
    // });
    // });

    // $(function() {
    //     $('#survey-q5').on('click', 'button', function () {
    //         if ($(this).hasClass('active')) {
    //             $(this).removeClass('active');
    //         } else {
    //             $(this).addClass('selected');
    //         }
    //
    //         let user_input = this.lastChild.innerHTML;
    //         // let instance_id = this.lastChild.lastChild.title; // if using DataTable.ellipsis, the value is moved to the title attribute.
    //
    //         console.log('User Selected: ' + user_input);
    //         // Send to Flask
    //
    //     });
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
