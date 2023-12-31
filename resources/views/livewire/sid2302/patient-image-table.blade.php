<div class="overflow-auto">
    <!-- Table -->
    <table id="patientImageTable"
            class="min-w-full leading-normal compact border-2 border-slate-500">
        <thead>
        <tr>
            <th class="text-center px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                Acquisition Date
            </th>
            <th class="text-center px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                Modality
            </th>
        </tr>
        </thead>
        <tbody>
        <!-- Intentionally Blank -->
        </tbody>
    </table>

    <!-- DataTable Functionality -->
        <script>

            function renderPatientTable() {
                // Order Request Table
                let order_request_table = $('#patientImageTable').DataTable({
                    retrieve: true,
                    destroy: true,
                    processing: true,
                    serverSide: true,
                    deferRender: true,
                    ajax: {
                        url: "{{ route('patient-image-table.index') }}",
                        dataSrc: "data"
                    },
                    columns: [
                        // {data: "patient", name: "patient"},
                        {data: "acquiredOn", name: "acquiredOn"},
                        {data: "modality", name: "modality"}
                        // {data: "images", name: "Images (n)"},
                        // {data: "mfg", name: "mfg"},
                        // {data: "mfg_model", name: "mfg_model"},
                        // {data: "study_id", name: "study_id"},
                        // {data: "series_id", name: "series_id"},
                    ],
                    columnDefs: [
                        {
                            targets: [0, 1],
                            className: 'dt-center'
                        }
                    ],
                    searching: false,
                    pageLength: 5,
                    lengthChange: false,
                    dom: 't'
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
               let order_request_table = $('#patientImageTable').DataTable();
               order_request_table.ajax.reload();
            });
        </script>
        <!-- End DataTable Functionality -->

</div>