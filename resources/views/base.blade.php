<html>
<head>
    <title>{{ $title or 'title' }}</title>
    <link rel="stylesheet" href="base_style.css">

    @section('head')
    @show
</head>
<body>
    <header>
        @section('header')
        @show
    </header>

    <div class="mainContent">
        @section('content')
        @show
    </div>

    <footer>
        @section('footer')
        @show
    </footer>
    <script src="base_script.js"></script>
</body>
</html>