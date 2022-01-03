<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="img/logo/logo.png" rel="icon" />
        <title>Own Website</title>
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('panel-css/css/theme.css')}}" rel="stylesheet" />

       <link href="https://kit-pro.fontawesome.com/releases/v5.13.1/css/pro.min.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{asset('panel-css/css/style.css')}}" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />

    </head>

    <body>
      

    @yield('content')



      <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                - Developed by
                                <b><a href="#" target="_blank">Ownapp</a></b>
                            </span>
                        </div>
                    </div>
                </footer>

         <script src="{{asset('panel-css/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('panel-css/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('panel-css/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        <script src="{{asset('panel-css/js/ruang-admin.min.js')}}"></script>
        <script src="{{asset('panel-css/vendor/chart.js/Chart.min.js')}}"></script>
        <script src="{{asset('panel-css/js/demo/chart-area-demo.js')}}"></script>
       
    
</body>
</html>
