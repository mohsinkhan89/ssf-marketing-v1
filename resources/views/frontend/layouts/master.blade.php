<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width,initial-scale=1" />
      <meta
         name="description"
         content="Markit is a performance-first digital marketing agency helping ambitious brands scale."
      />
      <title>SSF Marketing - Performance Marketing Agency</title>
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
         href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap"
         rel="stylesheet"
      />
      <script src="https://cdn.lordicon.com/lordicon.js"></script>
      <link rel="stylesheet" href="{{ url('frontend/assets/css/style.css') }}" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"><script src="https://cdn.lordicon.com/lordicon.js"></script>

   </head>
   <body>
      
      @include('frontend.inc.header')
      
         @yield('body')
      
      @include('frontend.inc.footer')

      <a class="back-top" id="backTop" href="#top" aria-label="Back to top"
         ><span>↑</span><small>Top</small>
      </a>
      <script src="{{ url('frontend/assets/js/main.js') }}"></script>
   </body>
</html>
