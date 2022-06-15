<!DOCTYPE html>
<html lang="en">
    <head>
     @include('frontend.includes.head')
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          @include('frontend.includes.nav')
        </nav>
        <!-- Page header with logo and tagline-->
        @include('frontend.includes.slider')
        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                  @yield('content')
                </div>
                <!-- Side widgets-->
                @include('frontend.includes.sidebar')
            </div>
        </div>
        <!-- Footer-->
        @include('frontend.includes.footer')
    </body>
</html>
