<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sid2302</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet"/>

    <!-- jQuery & DataTables CDN -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="//cdn.datatables.net/plug-ins/1.13.4/dataRender/ellipsis.js"></script>

    <!-- Load plotly.js -->
    <script src="https://cdn.plot.ly/plotly-2.27.0.min.js" charset="utf-8"></script>

    <style>
        @keyframes grow {
            0% {
                max-height: var(--lineHeight);
            }
            100% {
                max-height: calc(var(--lineHeight) * var(--lines));
            }
        }

        @keyframes carriageReturn {
            0% {
                top: 0;
            }
            100% {
                top: calc(var(--lineHeight) * var(--lines));
            }
        }

        @keyframes type {
            0% {
                width: 100%;
            }
            100% {
                width: 0%;
            }
        }

        @keyframes caret {
            0% {
                color: var(--bgColor);
            }
            100% {
                color: black;
            }
        }

        .typewriter {
            --bgColor: white;
            --lines: 500;
            --lineHeight: 1.75rem;
            --timePerLine: 2s;
            --widthCh: 22;
            --width: 100%;
            /*--width: calc(var(--widthCh) * 1ch);*/
            /* do not touch the time property!!! */
            --time: calc(var(--lines) * var(--timePerLine));
            animation: grow var(--time) steps(var(--lines));
            animation-fill-mode: forwards;
            background: var(--bgColor);
            line-height: var(--lineHeight);
            max-height: var(--lineHeight);
            overflow: hidden;
            position: relative;
            width: var(--width);
            mix-blend-mode: darken;
            /* word-break: break-all; */
        }

        .typewriter::before {
            content: "";
            animation: type var(--timePerLine) linear infinite,
            carriageReturn var(--time) steps(var(--lines)) var(--lines),
            caret 0.5s steps(2) infinite;
            background: var(--bgColor);
            border-left: 2px solid;
            bottom: 0;
            height: 2rem;
            position: absolute;
            right: 0;
            width: 100%;
        }

        .typewriter.no-caret::before {
            border-left-width: 0;
        }

        .typewriter.big-caret::before {
            border-left-width: 1ch;
        }

        .typewriter.monospace {
            font-family: monospace, monospace;
        }

        .typewriter.monospace::before {
            animation: type var(--timePerLine) steps(var(--widthCh)) infinite,
            carriageReturn var(--time) steps(var(--lines)) var(--lines),
            caret 0.5s steps(2) infinite;
        }

    </style>

    @livewireStyles
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
<!-- Session -->
<livewire:sid2302.session />


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
@livewireScripts
</body>

</html>