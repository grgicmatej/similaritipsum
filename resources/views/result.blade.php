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
    <menu id="nav-menu" class="nav-menu">
        <a href="{{ url('how') }}" id="nav-menu-how-to" data-target="help-how-to" class="nav-menu__link nav-menu__help-how-to">How to
            use</a>
        <a href="{{ url('api') }}" id="nav-menu-api" data-target="help-api" class="nav-menu__link nav-menu__help-api">API</a>
        <a href="https://github.com/grgicmatej" id="nav-menu-api" data-target="help-api" class="nav-menu__link nav-menu__help-api">Grgic Matej</a>
    </menu>
</header>


<div class="main-wrap">


    <div style="text-align: center; margin-bottom: 30px">
        @if($result)
            <h3>Ratio between first and second set of words is: {{$result}}</h3>
        @else
            <h3>It is not possible to calc the ratio of this set of words, one (or both) score is zero.</h3>
        @endif
    </div>

    <menu id="text-buttons" class="text-buttons buttons">
        <button type="submit" form="streaminput" class="text-buttons__button button pride-and-prejudice selected"
                value="pride-and-prejudice">Check another similarity
        </button>
    </menu>

    <div id="preview" class="preview">
        <form action="/getResult" id="streaminput" method="post">
            @csrf
            <p>
                <textarea class="words_stream" name="words_stream_1" id="" rows="10"
                          placeholder="Insert first set of words here" required></textarea>
            </p>
            <p>
                <textarea class="words_stream" name="words_stream_2" id="" rows="10"
                          placeholder="Insert second set of words here" required></textarea></p>
        </form>

        <div id="modal-overlay" class="modal-overlay"></div>

    </div>
    <footer>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 text-center">
                    <span class="footerbar">© {{ date("Y") }} | Design 100% owned by <a href="https://litipsum.com/"
                                                                                        target="_blank">litipsum.com</a> | For internal and educational purposes only.</span>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
