<!doctype html>
<html @php(language_attributes())>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @php(do_action('get_header'))
  @php(wp_head())
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body @php(body_class('min-h-screen flex flex-col'))>
  @php(wp_body_open())

  <a class="sr-only focus:not-sr-only focus:absolute focus:z-50 focus:p-4" href="#main">
    {{ __('Skip to content', 'sage') }}
  </a>

  @include('sections.header')

  <main id="main" class="flex-grow">
    @yield('content')
  </main>

  @include('sections.footer')

  @php(do_action('get_footer'))
  @php(wp_footer())
</body>

</html>