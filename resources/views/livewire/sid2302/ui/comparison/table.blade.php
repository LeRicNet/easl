<div>
    {{-- The Master doesn't talk, he acts. --}}
    <!-- Table -->
    <div
            class="m-0
shadow overflow-scroll
border border-3 border-solid">
{{--        <table id="dcm_table" class="table table-sm table-responsive table-condensed table-hover text-sm data-table">--}}
        <table id="patient_comparison_table" class="min-w-full leading-normal compact border-2 border-slate-500 table table-sm table-responsive table-condensed table-hover data-table">
            <thead class="text-center px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider">
            <tr>
                <th class="text-orange-500">Target</th>
                <th>Compare</th>
                <th>Similarity</th>
            </tr>
            </thead>
            <tbody class="text-sm">
            <!-- Intentionally Blank -->
            </tbody>
        </table>


        <script>
            $(function () {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                // Table
                let table = $('#patient_comparison_table').DataTable({
                    processing: true,
                    // serverSide: true,
                    deferRender: true,
                    ajax: {
                        url: "{{ route('patientview.index') }}",
                        dataSrc: "data"
                    },
                    columns: [
                        {data: "from_patient", name: "Target"},
                        {data: "to_patient", name: "Compare"},
                        {data: "dist_l1", name: "Similarity"}
                        // {data: "DateOfBirth", name: "Date of Birth"},
                        // {data: "Sex", name: "Sex"},
                        // {data: "PrimarySymptom", name: "Primary Symptom"},
                        // // {data: "Modality", name: "Modality"},
                        // // {data: "ProtocolName", name: "Protocol"},
                        // // {data: "PredDx", name: "Pred. Diagnosis"},
                        // {data: "Similarity", name: "Similarity"},
                        // {data: "orthancid", name: "orthancid", visible: false},
                    ],
                    columnDefs: [{
                        // targets: [5],
                        // render: DataTable.render.ellipsis(10)
                        orderable: false,
                        targets: [0,1]
                    }],
                    searching: false,
                    pageLength: 5,
                    paging: false,
                    info: false,
                    lengthChange: false
                });
                // Row Selection
                $('#patient_comparison_table').on('click', 'tr', function () {
                    if ($(this).hasClass('selected')) {
                        $(this).removeClass('selected');
                    } else {
                        table.$('tr.selected').removeClass('selected');
                        $(this).addClass('selected');

                        // Comparison Patient
                        let compare_pt = table.$('tr.selected')[0].children[1].innerHTML;
                        console.log(compare_pt);

                        // Livewire.emitTo('sid2302.ui.comparison.top-row', 'postAdded')
                        // Define the API URL
                        const apiUrl = "/comparison/" + compare_pt;

                        // Make a GET request
                        fetch(apiUrl)
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error('Network response was not ok');
                                }
                                return response.json();
                            })
                            .then(data => {
                                console.log(data);
                            })
                            .catch(error => {
                                console.error('Error:', error);
                            });


                    }

                });
            });


            document.addEventListener('refreshPatientTable', function(e) {
                let order_request_table = $('#patient_comparison_table').DataTable();
                order_request_table.ajax.reload();
            });
        </script>



    </div>
</div>
