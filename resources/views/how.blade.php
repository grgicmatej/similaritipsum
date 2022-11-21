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
        <a href="{{ url('api') }}" id="nav-menu-api" data-target="help-api" class="nav-menu__link nav-menu__help-api">API</a>
        <a href="https://github.com/grgicmatej" id="nav-menu-api" data-target="help-api"
           class="nav-menu__link nav-menu__help-api">Grgic Matej</a>
    </div>
</header>

<div class="main-wrap">
    <div style="text-align: center; margin-bottom: 30px">

        <h3>Hi there! This is a simple comparator between two streams of words.
            This comparator will convert first characters of each word to ASCII code,
            then it will sum it to individual total scores for each stream. Final step is to compare
            those two total scores and give the result back to you!</h3>
        <br>
        <h3>There is a small twist tho! One specific character is flagged as not acceptable in this comparator,
            that means - ASCII value of this specific character will not be summed to total score. Any idea which
            one?</h3>
        <br><br>
        <h3>Have fun!</h3>
        <br>
        <h3>For advanced users only - there is a way to use this comparator as API endpoint as well, checkout this
            <a href="{{url('api')}}">
                <span class="a_link_tutorial">tutorial</span></a></h3>


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
