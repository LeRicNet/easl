<div id="ohif-viewer-target" class="w-full h-full">
    <!-- When there is no desire, all things are at peace. - Laozi -->
</div>

<script src="https://unpkg.com/@ohif/viewer@4.12.25/dist/index.umd.js" crossorigin></script>
<script>
    window.config = {
        routerBasename: "/",
        /**
         * OHIF's study prefetcher configuration.
         *
         * @param {boolean} enabled Whether to enable/disable OHIF's study prefetcher
         * @param {('all'|'closest'|'downward'|'upward'|'topdown')} order Fetching order: all display sets, the closest ones, downward or top down fashion based on the currently selected display set
         * @param {number} displaySetCount How much display sets should be prefetched at once (note: this attribute is ignored if order was set to 'all')
         * @param {boolean} preventCache Prevent images to be cached in Cornerstone Tools's request pool manager
         * @param {number} prefetchDisplaySetsTimeout Prefetch timeout
         * @param {boolean} displayProgress Whether to display or not the progress bar in the display set
         * @param {boolean} includeActiveDisplaySet Include or not the active display set while prefetching
         */
        studyPrefetcher: {
            enabled: true,
            order: 'all',
            displaySetCount: 1,
            preventCache: false,
            prefetchDisplaySetsTimeout: 300,
            displayProgress: false,
            includeActiveDisplaySet: true,
        },
        whiteLabeling: {
            /* Optional: Should return a React component to be rendered in the "Logo" section of the application's Top Navigation bar */
            createLogoComponentFn: function(React) {
                return React.createElement('a', {
                    target: '_self',
                    rel: 'noopener noreferrer',
                    className: 'header-brand',
                    href: '/',
                    style: {
                        display: 'block',
                        textIndent: '-9999px',
                        background: 'url(/svg-file-hosted-at-domain-root.svg)',
                        backgroundSize: 'contain',
                        backgroundRepeat: 'no-repeat',
                        width: '200px',
                    },
                });
            },
        },
        servers: {
            dicomWeb: [
                {
                    name: 'DCM4CHEE',
                    wadoUriRoot: 'https://server.dcmjs.org/dcm4chee-arc/aets/DCM4CHEE/wado',
                    qidoRoot: 'https://server.dcmjs.org/dcm4chee-arc/aets/DCM4CHEE/rs',
                    wadoRoot: 'https://server.dcmjs.org/dcm4chee-arc/aets/DCM4CHEE/rs',
                    qidoSupportsIncludeField: true,
                    imageRendering: 'wadors',
                    thumbnailRendering: 'wadors',
                    enableStudyLazyLoad: true,
                },
            ],
        },
    };

    var containerId = 'ohif-viewer-target';
    var componentRenderedOrUpdatedCallback = function() {
        console.log('OHIF Viewer rendered/updated');
    }
    window.OHIFViewer.installViewer(
        window.config,
        containerId,
        componentRenderedOrUpdatedCallback
    );

    function RadicalImagingLogo(React) {
        return React.createElement(
            'a',
            {
                target: '_blank',
                rel: 'noopener noreferrer',
                className: 'header-brand',
                href: 'http://radicalimaging.com',
            },
            React.createElement('h5', {}, 'RADICAL IMAGING')
        );
    }

    props.whiteLabeling = {
        createLogoComponentFn: RadicalImagingLogo,
    };

</script>
