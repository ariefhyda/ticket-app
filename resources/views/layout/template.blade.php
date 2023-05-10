
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('template')}}/img/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Rockfest - Music Festival Event, DJ Concert and Night Club Website Template" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="{{asset('template')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap-grid" href="{{asset('template')}}/css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap-reboot" href="{{asset('template')}}/css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('template')}}/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('template')}}/css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('template')}}/css/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('template')}}/css/owl.transitions.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('template')}}/css/magnific-popup.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('template')}}/css/jquery.countdown.css" rel="stylesheet" type="text/css" />
    <link id="mdb" href="{{asset('template')}}/css/mdb.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('template')}}/css/style.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('template')}}/css/de-electro.css" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="{{asset('template')}}/css/scheme-03.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('template')}}/css/coloring.css" rel="stylesheet" type="text/css" />
    @yield('css')
</head>

<body class="dark-scheme">
    <div id="wrapper">
        <div id="preloader">
            <div class="preloader1"></div>
        </div>
        <!-- header begin -->
        @include('layout.header')        
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
           @yield('content')
        </div>
        <!-- content close -->
        <a href="#" id="back-to-top"></a>
        <!-- footer begin -->
        
        @include('layout.footer')
 
        <!-- footer close -->
    </div>
    <!-- Javascript Files
    ================================================== -->
    <script src="{{asset('template')}}/js/jquery.min.js"></script>
    <script src="{{asset('template')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('template')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('template')}}/js/wow.min.js"></script>
    <script src="{{asset('template')}}/js/jquery.isotope.min.js"></script>
    <script src="{{asset('template')}}/js/easing.js"></script>
    <script src="{{asset('template')}}/js/owl.carousel.js"></script>
    <script src="{{asset('template')}}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('template')}}/js/enquire.min.js"></script>
    <script src="{{asset('template')}}/js/jquery.plugin.js"></script>
    <script src="{{asset('template')}}/js/jquery.countTo.js"></script>
    <script src="{{asset('template')}}/js/jquery.countdown.js"></script>
    <script src="{{asset('template')}}/js/jquery.lazy.min.js"></script>
    <script src="{{asset('template')}}/js/jquery.lazy.plugins.min.js"></script>
    <script src="{{asset('template')}}/js/mdb.min.js"></script>
    <script src="{{asset('template')}}/js/jquery.countdown.js"></script>
    <script src="{{asset('template')}}/js/countdown-custom.js"></script>
    <script src="{{asset('template')}}/js/cookit.js"></script>    
    <script src="{{asset('template')}}/js/designesia.js"></script>

<!-- COOKIES PLUGIN  -->
     <script>
      $(document).ready(function() {
        $.cookit({
          backgroundColor: '#0B168D',
          messageColor: '#ffffff',
          linkColor: '#ffffff',
          buttonColor: '#ffffff',
          messageText: "This website uses cookies to ensure you get the best experience on our website.",
          linkText: "Learn more",
          linkUrl: "03_electrofest-index.html",
          buttonText: "I accept",
        });
      });


      function formToObject($form) {
          var unindexed_array = $form.serializeArray();
              var indexed_array = {};

              $.map(unindexed_array, function(n, i){
                  if (n['name'].indexOf('[]')>=0) {
                      var nkey = n['name'].replace('[]','');

                      if (typeof indexed_array[nkey] != "undefined") {
                          indexed_array[nkey].push(n['value']);
                      }else{
                          indexed_array[nkey] = [n['value']];
                      }
                      
                  }else{
                      indexed_array[n['name']] = n['value'];
                  }
              });
          return indexed_array;
      }
    </script>

    
@yield('js')

</body>

</html>