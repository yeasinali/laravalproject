<!DOCTYPE HTML>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="description" content="website description" />
    <meta name="keywords" content="website keywords, website keywords" />
    <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
    {!! Html::style('influx/style/style.css') !!}
</head>

<body>
<div id="main">
    <div id="header">
        <div id="logo">
            <div id="logo_text">
                <!-- class="logo_colour", allows you to change the colour of the text -->
                <h1><a href="index.html">colour<span class="logo_colour">orange</span></a></h1>
                <h2>Simple. Contemporary. Website Template.</h2>
            </div>
        </div>
        <div id="menubar">
            <ul id="menu">
                <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
                <li><a href="index">Home</a></li>
                <li><a href="examples">Examples</a></li>
                <li class="selected"><a href="page">A Page</a></li>
                <li><a href="another">Another Page</a></li>
                <li  class="selected"><a href="contactpage">Contact Us</a></li>
            </ul>
        </div>
    </div>

    @yield('content');

    <div id="content_footer"></div>
    <div id="footer">
        Copyright &copy; colour_orange | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">Simple web templates by HTML5</a>
    </div>
</div>
</body>
</html>

