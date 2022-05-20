<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- Google font -->
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800') }}" rel="stylesheet" />
    <link
      href="{{ asset('https://fonts.googleapis.com/css2?family=Aclonica&family=Assistant:wght@200;300;400;500;600;700&family=Fredoka:wght@300;400;500&family=Lobster&family=Pacifico&family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&family=Poppins:ital,wght@0,200;0,300;0,400;1,200;1,300;1,400&display=swap') }}"
      rel="stylesheet"
    />
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}" />

    {{-- Icons --}}
    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <title>Contact</title>
  </head>
  <body>
    <main id="main">
      <!-- Header -->
        @include('main-page.partials.header')
      <!-- End Of Header -->
      
      {{-- content --}}
      @yield('content')

    <!-- Footer -->
    @include('main-page.partials.footer')

    </main>

     @include('sweetalert::alert')

    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('https://code.jquery.com/jquery-3.2.1.slim.min.js') }}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js') }}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js') }}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>