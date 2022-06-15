
<!DOCTYPE html>
<html lang="en">
  <head>   
    <!-- Head  -->
    @include('backend.includes.head')

    <!-- CSS links  -->
    @include('backend.includes.csslinks')

  </head>



<body>
    <!-- sideber  -->
    @include('backend.includes.sidebar')

    
    <!-- topbar  -->
    @include('backend.includes.topbar')
  

    <!-- rightbar -->
    @include('backend.includes.rightbar')


    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      


    
        @yield('maincontent')
      




        <!-- footer  -->
        @include('backend.includes.footer')
    </div>
    <!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <!-- script links  -->
    @include('backend.includes.scriptlinks')

  </body>
</html>
