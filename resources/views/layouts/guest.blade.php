
<!DOCTYPE html>
<html>
{{-- <base href="{{ url('/') }}"> --}}

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="{{ config('app.name', 'livewire') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'livewire') }}</title>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap"
        rel="stylesheet">

    <link href="cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css"
        rel="stylesheet" />

    <!-- Ekka CSS -->
    <link id="ekka-css" rel="stylesheet" href="{{ url('/') }}/assets/css/ekka.css" />

    <!-- FAVICON -->
    <link href="assets/img/favicon.png" rel="shortcut icon" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <style>
        .text-danger {
            color: crimson;
        }
    </style>
</head>

<body class="sign-inup" id="body">
    <div class="container d-flex align-items-center justify-content-center form-height-login pt-24px pb-24px">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="card">
                    <div class="card-header bg-success">
                        <div class="ec-brand">
                            <a href="/" wire:navigate>
                                <img class="ec-brand-icon" src="assets/img/logo/logo-login.png" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-5">
                        <h2>Lorem, ipsum.</h2>
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <script src="{{ url('/') }}/assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="{{ url('/') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/') }}/assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
    <script src="{{ url('/') }}/assets/plugins/slick/slick.min.js"></script>

    <!-- Ekka Custom -->
    <script src="{{ url('/') }}/assets/js/ekka.js"></script>
</body>

</html>
