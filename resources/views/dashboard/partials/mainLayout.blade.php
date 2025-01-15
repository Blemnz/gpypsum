<!DOCTYPE html><!--
    * CoreUI - Free Bootstrap Admin Template
    * @version v5.1.1
    * @link https://coreui.io/product/free-bootstrap-admin-template/
    * Copyright (c) 2024 creativeLabs Łukasz Holeczek
    * Licensed under MIT (https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/main/LICENSE)
    -->
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>CoreUI Free Bootstrap Admin Template</title>
        <meta name="theme-color" content="#ffffff">
        <!-- Vendors styles-->
        <link rel="stylesheet" href="vendors/simplebar/css/simplebar.css">
        <link rel="stylesheet" href="assets/css/vendors/simplebar.css">
        <!-- Main styles for this application-->
        <link href="assets/css/style.css" rel="stylesheet">
        <!-- We use those styles to show code examples, you should remove them in your application.-->
        <link href="assets/css/examples.css" rel="stylesheet">
        <script src="assets/js/config.js"></script>
        <script src="assets/js/color-modes.js"></script>
        <link href="vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
      </head>
      <body>
       {{-- sidebar --}}
       @include('dashboard.partials.sidebar')
       {{-- end sidebar --}}
        <div class="wrapper d-flex flex-column min-vh-100">
          {{-- header --}}
          @include('dashboard.partials.header')
          <div class="body flex-grow-1">
            @yield('container')
          </div>
          {{-- footer --}}
          @include('dashboard.partials.footer')
          {{-- footer end --}}
        </div>
        <!-- CoreUI and necessary plugins-->
        <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
        <script src="vendors/simplebar/js/simplebar.min.js"></script>
        <script>
          const header = document.querySelector('header.header');
    
          document.addEventListener('scroll', () => {
            if (header) {
              header.classList.toggle('shadow-sm', document.documentElement.scrollTop > 0);
            }
          });
        </script>
        <!-- Plugins and scripts required by this view-->
        <script src="vendors/chart.js/js/chart.umd.js"></script>
        <script src="vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
        <script src="vendors/@coreui/utils/js/index.js"></script>
        <script src="assets/js/main.js"></script>
        <script>
        </script>
    
      </body>
    </html>