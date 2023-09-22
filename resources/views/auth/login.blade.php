<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <link rel="stylesheet" href="logreg/style.css" />
    <title>Login Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="POST" class="sign-in-form" action="{{ route('login') }}">

            @csrf

            <img src="img/login.png" height="96" width="288" alt="">
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="email" type="email" name="email"
                                :value="old('email')"
                                required autofocus
                                placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="inputPassword"
                              type="password"
                              name="password"
                              required autocomplete="current-password"
                              placeholder="Password" />
    </div>
            <div class="showHide-Password">
            <input type="checkbox" onclick="myFunction()">  Tampilkan Password
        <script>
        function myFunction() {
            var x = document.getElementById("inputPassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
        </script>
    </div>

            <!-- Remember Me -->

            <x-button type="submit" value="Login" class="btn solid">
                {{ __('Login') }}
            </x-button>

          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Pengguna Baru ?</h3>
            <p>
                Ayo segera ambil peran dalam mewujudkan lingkungan yang bersih dan nyaman. Registrasi Sekarang !!
            </p>
            <div>
            <a href="{{ url('register')}}" class="btn-login scrollto">REGISTRASI</a>
            </div>
          </div>
          <img src="img/p4.png" class="image" alt="" />
        </div>
      </div>
    </div>
    <script src="app.js"></script>
  </body>
</html>










