<div class="row align-content-center" style="text-align: center; margin-top: 5px; margin-right: 5px; margin-bottom: 5px;">
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
    <div class="col" style="font-size: large; font-style: italic; margin: auto;">
        Dataset Summary
    </div>
    <div class="col" style="margin: auto;">
        <span style="font-weight: bold;">
            {{ $n_patients }}
        </span>
        unique patients
    </div>
    <div class="col" style="margin: auto;">
        <span style="font-weight: bold;">
             {{ $n_instances }}
        </span>
        DICOM instances
    </div>
    <div class="col h-100" style="margin: auto;">
        <span style="font-weight: bold;">
            {{ $n_modalities }}
        </span>
        Modalities
    </div>
    <div class="col" style="margin: auto;">
        <span style="font-weight: bold;">
            {{ $n_protocols }}
        </span>
        Protocols
    </div>
    <div class="col" style="margin: auto;">
        <span style="font-weight: bold;">
            {{ $n_manufacturers }}
        </span>
        Manufacturers
    </div>
    <div class="col" style="margin: auto;">
        <span style="font-weight: bold;">
            {{ $n_series }}
        </span>
        DICOM series
    </div>
</div>
