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
      </head>
      <body>
        <div class="bg-body-tertiary min-vh-100 d-flex flex-row align-items-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="card-group d-block d-md-flex row">
                  <div class="card col-md-7 p-4 mb-0">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card-body">
                            <h1 class="text-center">Login</h1>
                            <p class="text-body-secondary text-center">Sign In to your account</p>
                            <div class="input-group mb-3"><span class="input-group-text">
                                <svg class="icon">
                                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                                </svg></span>
                              <input class="form-control" type="email" placeholder="Email" name="email">
                            </div>
                            <div class="input-group mb-4"><span class="input-group-text">
                                <svg class="icon">
                                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                                </svg></span>
                              <input class="form-control" type="password" placeholder="Password" name="password">
                            </div>
                            <div class="row">
                              <div class="col-6">
                                <button class="btn btn-primary px-4" type="submit">Login</button>
                              </div>
                              <div class="col-6 text-end">
                                <button class="btn btn-link px-0" type="button">Forgot password?</button>
                              </div>
                            </div>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
        <script>
        </script>
    
      </body>
</html>