<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

 @include('partials.head')

  <body>

    <!--    Main Content-->
    <main class="main" id="top">
      
      @include('partials.sidebar')
      <div class="content">

           @yield('content')

           @include('partials.footer')

      </div>
    </main>
    <!--    End of Main Content-->


      @include('partials.scripts')
  </body>

</html>