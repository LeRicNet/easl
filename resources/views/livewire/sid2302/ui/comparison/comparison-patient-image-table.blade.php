<div class="overflow-auto">
    <!-- Table -->
    <table id="comparison_patient_image_table"
           class="min-w-full leading-normal compact border-2 border-slate-500 table table-sm table-responsive table-condensed table-hover data-table">
        <thead>
        <tr>
            <th class="text-center px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                Modality
            </th>
            <th class="text-center px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                Study Description
            </th>
            {{--            <th class="text-center px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">--}}
            {{--                Images (n)--}}
            {{--            </th>--}}
        </tr>
        </thead>
        <tbody class="text-xs">
        <!-- Intentionally Blank -->
        </tbody>
    </table>

    <!-- DataTable Functionality -->
    <script>

        function renderPatientTable() {
            // Order Request Table
            let table = $('#comparison_patient_image_table').DataTable({
                retrieve: true,
                destroy: true,
                processing: true,
                serverSide: true,
                deferRender: true,
                ajax: {
                    url: "{{ route('comparison-patient.index') }}",
                    dataSrc: "data"
                },
                columns: [
                    // {data: "patient", name: "patient"},
                    // {data: "acquiredOn", name: "acquiredOn"},
                    {data: "modality", name: "modality"},
                    {data: 'study_description', name: 'study_description'}
                    // {data: "n_images", name: "Images (n)"}
                    // {data: "mfg", name: "mfg"},
                    // {data: "mfg_model", name: "mfg_model"},
                    // {data: "study_id", name: "study_id"},
                    // {data: "series_id", name: "series_id"},
                ],
                columnDefs: [
                    {
                        targets: [0],
                        className: 'dt-center'
                    }
                ],
                searching: false,
                pageLength: 5,
                lengthChange: false,
                dom: 't'
            });
            // Row Selection
            $('#comparison_patient_image_table').on('click', 'tr', function () {
                if ($(this).hasClass('selected')) {
                    $(this).removeClass('selected');
                } else {
                    table.$('tr.selected').removeClass('selected');
                    $(this).addClass('selected');
                }
            });
        };



        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            renderPatientTable();

        });

        document.addEventListener('refreshPatientTable', function(e) {
            console.log('heard');
            let order_request_table = $('#comparison_patient_image_table').DataTable();
            order_request_table.ajax.reload();
        });
    </script>
    <!-- End DataTable Functionality -->

</div>