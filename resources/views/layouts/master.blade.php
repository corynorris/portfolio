<!DOCTYPE html>
<html>
<head>
    <title> Cory Norris - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome 4.5.0 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Custom CSS (include Bootstrap) -->
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <div id="smooth" class="m-scene">
        <div class="header scene_element scene_element--fadein">
            @yield('navbar')
        </div>
        <div class="content fullscreen scene_element scene_element--fadeinup">
             @yield('content')
        </div>
    </div>
    @section('scripts')
    <!-- JQuery 2.1.4 -->
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script> 
    <!-- Smooth State 0.7.2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothState.js/0.7.2/jquery.smoothState.min.js"></script>        
    <!-- Bootstrap 3.3.6 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- Custom Javascript -->
    <script src="js/all.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-72465210-1', 'auto');
      ga('send', 'pageview');

    </script>
    @show
</body>
</html>
