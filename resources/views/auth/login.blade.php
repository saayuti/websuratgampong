<!DOCTYPE html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Login Surat Gampong</title>
      <!-- plugins:css -->
      
      <!-- endinject -->
      <!-- plugin css for this page -->
      <!-- End plugin css for this page -->
      <!-- inject:css -->
      <link rel="stylesheet" href="http://ppdb-laravel.herokuapp.com/staradmin/assets/css/shared/style.css">
      <!-- endinject -->
      <!-- Layout styles -->
      <link rel="stylesheet" href="assets/css/argon-design-system.css?v=1.2.0">
      <!-- End Layout styles -->
      <link rel="shortcut icon" href="staradmin/assets/images/favicon.png" />
    </head>

        
 <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('login') }}">
                @csrf
                    <!--<input type="hidden" name="_token" value="GMHx84eLy6RQ9eqh6XmPNnbQbeuwsf5wnA7cKfGu"> -->                 
                    <div class="form-group">
                    <x-jet-label value="{{ __('Email') }}" />
                    <div class="input-group">
                      <input type="email" class="form-control" id='email' name="email" value="" required autocomplete="email" placeholder="Email">
                      <div class="input-group-append">
                        <span class="input-group-text">
                                                  </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                  <x-jet-label value="{{ __('Kata Sandi') }}" />
                    <div class="input-group">
                      <input type="password" class="form-control " name="password" required autocomplete="current-password" placeholder="*********">
                      <div class="input-group-append">
                        <span class="input-group-text"></span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary submit-btn btn-block">{{ __('Login') }}</button>
                  </div>
                  <div class="form-group d-flex justify-content-between">
                  <div class="block mt-3">
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Ingat Saya') }}</span>
                </label>
            </div>                    
                  </div>
                  <div class="text-block text-center my-3">
                    <span class="text-small font-weight-semibold">Belum mendaftar?</span>
                    <a href="{{ route('register') }}" class="text-black text-small">Daftar disini</a>
                  </div>
                </form>
              </div>
              
              <p class="footer-text text-center mt-4">copyright © 2020 Atake Studio. All rights reserved.</p>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

    </script>
  </body>
</html>