<div class="container-fluid" id="mainContainer">
    <div class="row" id="navBar">

            <div class="col-md-2">
                ATPC Database
            </div>
            <div class="col pt-2 pb-2">
                <div class="dropdown">
                    <button class="btn btn-sm btn-secondary dropdown-toggle"
                            type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                        Menu
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <li>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary w-full" data-bs-toggle="modal" data-bs-target="#dicomMenu">
                               Add Data
                            </button>

                        </li>
                    </ul>
                </div>
            </div>

    </div>


    <div class="row">
        <table id="myTable" class="table table-sm table-responsive table-condensed table-hover">
            <thead>
            <tr>
                <th>ATPC ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Ethnicity</th>
                <th>Race</th>
                <th>Diagnosis</th>
                <th>CT</th>
                <th>MRI</th>
            </tr>
            </thead>
            <tbody>

            @foreach($dicom_entries as $entry)
                <tr>
                    <td>{{ $entry->user_id }}</td>
                    <td>Test Name</td>
                    <td>Test Gender</td>
                    <td>Test Ethnicty</td>
                    <td>Test Race</td>
                    <td>Test Dx</td>
                    <td>Yes</td>
                    <td>Yes</td>
                </tr>

            @endforeach

            <!-- Intentionally Blank -->
            </tbody>
        </table>
    </div>
</div>
