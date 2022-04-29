<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">


    <header class="row">
        @include('includes.header')
    </header>

    <article class="row">
        @yield('content')
    </article>

</div>
</body>
</html>