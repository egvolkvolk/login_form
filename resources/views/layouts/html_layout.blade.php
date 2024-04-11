<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <title>@yield('title')</title>
    </head>
    <body>
        <hr>
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                <span class="fs-4">@yield('header')</span>

              <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                @yield('links')
              </nav>
            </div>
      </header>

       @yield('content')
    </body>
</html>