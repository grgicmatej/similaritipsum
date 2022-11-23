<!doctype html>
<html lang="en">
<head>
    <title>Similaritipsum</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="litipsum text pride-and-prejudice">
<header class="header">
    <h1 class="page-title"><a href="/" class="page-title__link">Similaritipsum</a></h1>
    <div id="nav-menu" class="nav-menu">
        <a href="{{ url('how') }}" id="nav-menu-how-to" data-target="help-how-to"
           class="nav-menu__link nav-menu__help-how-to">How to
            use</a>
        <a href="{{ url('api') }}" id="nav-menu-api" data-target="help-api"
           class="nav-menu__link nav-menu__help-api">API</a>
        <a href="https://github.com/grgicmatej" id="nav-menu-api" data-target="help-api"
           class="nav-menu__link nav-menu__help-api">Grgic Matej</a>
    </div>
</header>

<div class="main-wrap">
    <div style="text-align: center; margin-bottom: 30px">

        <h3>For advanced users only - API endpoint. Basicaly, this little comparator has API endpoint.
            This is quick intro & howto use it.
        </h3>
        <br>
        <h3>URL to get API endpoint is : <b>/api/get-result-api</b></h3>
        <br>
        <h3>There are a few requirements:</h3>
    </div>
    <div style="text-align: left">
        <h4>
            <ul>
                <li>Only GET method is allowed.</li>
                <li>2 parameters required: "words_stream_1" and "words_stream_2".</li>
                <li>Header must include key "key" with whatever value, except null.</li>
            </ul>
        </h4>
    </div>

    <div style="text-align: center; margin-bottom: 30px; margin-top: 100px">

        <h3>Have fun!</h3>
        <br>
    </div>

    <footer>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 text-center">
                    <span class="footerbar">© {{ date("Y") }} | Design 100% owned by
                        <a href="https://litipsum.com/" target="_blank">litipsum.com</a>
                        | For internal and educational purposes only.</span>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
