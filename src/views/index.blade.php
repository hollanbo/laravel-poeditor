<!doctype html>
<html lang="{{ $locale }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>


        <title>Laravel PoEditor</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                font-weight: 100;
                font-size: 16px;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            table {
                width: 100%;
                margin-bottom: 75px;
            }

            td {
                text-align: left;
                padding: 8px;
                vertical-align: top;
            }

            td:first-child {
                width: 33%;
            }

            td:second-child {
                width: 67%
            }

            tr:nth-child(odd) {
                background: lightgrey;
            }

            td > input {
                width: 50%;
                margin-bottom: 4px;
            }

            td > input:last-child() {
                margin-bottom: 0;
            }

            .hidden {
                display: none;
            }

            .poeditor-controls {
                width: 100%;
                text-align: center;
                position: fixed;
                bottom: 0;
                background-color: #9bafc1;
                padding: 16px;
            }

            .poeditor-controls .poeditor-sync {
                float: right;
                margin-right: 50px;
            }

        </style>
    </head>
    <body>
        <div>
            @include('hollanbo/LaravelPoeditor::translate')
        </div>
    <script src="/js/vendor/hollanbo/LaravelPoeditor/poeditor.js"></script>
    </body>
</html>
