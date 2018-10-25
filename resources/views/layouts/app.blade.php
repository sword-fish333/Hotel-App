<!DOCTYPE html>
<html data-whatinput="initial" data-whatintent="mouse" class=" whatinput-types-initial"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <title>Landon Hotel App</title>
            <link rel="icon" type="image/x-icon" href="favicon.ico" />
           
            <link rel="stylesheet" href="{{asset('css/foundation.css')}}">
            <link rel="stylesheet" href="{{asset('css/app.css')}}">
            <link rel="stylesheet" href="{{asset('css/app.css')}}">
            <link rel="stylesheet" href="{{asset('css/style.css')}}">
            
            <meta class="foundation-mq"></head>
            <body>
        
                <!-- Start Top Bar -->
                <nav class="navbar navbar-fixed-top navbar-expand-md bg-dark navbar-dark ">
                    <!-- Brand -->
                    <a class="navbar-brand" href="#">Landon Hotel</a>
                  
                    <!-- Toggler/collapsibe Button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <!-- Navbar links -->
                    <div class="collapse navbar-collapse " id="collapsibleNavbar">
                      <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/clients">Clients</a>
                        </li>
                      
                      </ul>
                    </div> 
                  </nav>
        
            <!-- End Top Bar -->
        
      @yield('content')
        
            <footer class="bg-dark footer mt-3">
           
            
                <h4 style="margin:auto; color:white; " ><strong><center>Landon App <-> Copyright 2018</center></strong></h4>
            
            </footer>
        
            <script>
              $(document).foundation();
            </script>
        
                <script src="{{asset('js/vendor/jquery.js')}}"></script>
                <script src="{{asset('js/vendor/what-input.js')}}"></script>
                <script src="{{asset('js/vendor/foundation.js')}}"></script>
                <script src="{{asset('js/app.js')}}"></script>
                <script src="{{asset('pickadate/lib/picker.js')}}"></script>
                <script src="{{asset('pickadate/lib/picker.date.js')}}"></script>
                <script>
                    $('.datepicker').pickadate(
                      { 
                        format: 'yyyy-mm-dd',
                        formatSubmit: 'yyyy-mm-dd' 
                      }
                      );
                </script>
            </body>
</html>