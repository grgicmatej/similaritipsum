<!doctype html>
<html lang="en">
    <head>
        <title>{{ env('APP_NAME') }}</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

        <!-- Bootstrap 5 -->
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    </head>
    <body class="litipsum text pride-and-prejudice">
        <header class="header">
            <h1 class="page-title">
                <a href="/" class="page-title__link">{{ env('APP_NAME') }}</a>
            </h1>
            <div id="nav-menu" class="nav-menu">
                <a href="{{ url('how') }}" id="nav-menu-how-to"
                   class="nav-menu__link nav-menu__help-how-to">How to use</a>

                <a href="{{ url('api') }}" id="nav-menu-api"
                   class="nav-menu__link nav-menu__help-api">API</a>

                <a href="https://github.com/grgicmatej" target="_blank" id="nav-menu-api"
                   class="nav-menu__link nav-menu__help-api">Grgic Matej</a>
            </div>
        </header>

        <div class="main-wrap">
            <div id="text-buttons" class="text-buttons buttons">
                <input type="submit" form="streaminput" class="text-buttons__button button pride-and-prejudice selected"
                        value="Check similarity">
            </div>

            <div id="preview" class="preview">
                <form action="/getResult" id="streaminput" method="post">
                    @csrf
                    <p>
                        <label for="words_stream_1"></label>
                        <textarea class="words_stream" name="words_stream_1" id="words_stream_1" rows="10"
                                  placeholder="Insert first set of words here" required></textarea>
                    </p>
                    <p>
                        <label for="words_stream_2"></label>
                        <textarea class="words_stream" name="words_stream_2" id="words_stream_2" rows="10"
                                  placeholder="Insert second set of words here" required></textarea></p>
                </form>

                <div id="modal-overlay" class="modal-overlay"></div>

            </div>
            <footer>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12 text-center">
                            <span class="footerbar">
                                © {{ date("Y") }} | Design 100% owned by
                                <a href="https://litipsum.com/" target="_blank">litipsum.com</a>
                                | For internal and educational purposes only.
                            </span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
