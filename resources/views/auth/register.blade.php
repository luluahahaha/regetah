


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <link rel="stylesheet" href="logreg/style.css" />
    <title>Regist Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="POST" class="sign-in-form" action="{{ route('register') }}">

            @csrf

            <img src="img/regist.png" height="96" width="288" alt="">

            <!-- NIK -->
            <div class="input-field">
              <i class="fas fa-book"></i>
              <input id="nik" class="block mt-1 w-full"
              type="text" name="nik" :value="old('nik')"
              required autofocus placeholder="NIK" />
            </div>

            <!-- Name -->
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input id="name" class="block mt-1 w-full"
                type="text" name="name" :value="old('name')"
                required autofocus placeholder="Nama" />
            </div>

            <!-- Email Address -->
            <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input id="email" class="block mt-1 w-full"
                type="email" name="email" :value="old('email')"
                required placeholder="Email" />
            </div>

            <!-- Phone -->
            <div class="input-field">
                <i class="fas fa-phone"></i>
                <input id="phone" class="block mt-1 w-full"
                type="text" name="phone" :value="old('phone')"
                required placeholder="Phone" />
            </div>

            <!-- Password -->
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password" class="block mt-1 w-full"
                    type="password"
                    name="password"
                    required autocomplete="new-password"
                    placeholder="Password" />
            </div>

            <!-- Confirm Password -->
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input id="password_confirmation" class="block mt-1 w-full"
                type="password"
                name="password_confirmation" required
                placeholder="Konfirmasi Password" />
            </div>

            <!-- Remember Me -->
            <x-button type="submit" value="Login" class="btn solid">
                {{ __('Register') }}
            </x-button>

          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Salah Satu Pengguna ?</h3>
            <p>
                Cukup Perasaan aja yang dipendam, Sampah Jangan !! Yuk bijak dalam mengelola sampah, Jika terkendala segera hubungi kami.
            </p>
            <div>
                <a href="{{ url('login')}}" class="btn-login scrollto">LOGIN</a>
            </div>
          </div>
          <img src="img/p5.png" class="image" alt="" />
        </div>
      </div>
    </div>
    <script src="app.js"></script>
  </body>
</html>
