<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Registro Gym</title>
  <link rel="stylesheet" href="styles/auth.css"/>
</head>
<body>
  <div class="container">
    <div class="login-box">
      <img src="{{ asset('fotosgym/logo2.jpg') }}" alt="Gold's Gym Logo" class="logo" />
      <h2>Registro</h2>

      <form method="POST" action="{{ route('register') }}">
        @csrf

        <input type="text" placeholder="Nombre completo" name="name" value="{{ old('name') }}" required />
        <input type="email" placeholder="Correo electrónico" name="email" value="{{ old('email') }}" required />


        <input type="password" placeholder="Contraseña" name="password" required />
        <input type="password" placeholder="Confirmar contraseña" name="password_confirmation" required />

        <button type="submit">Registrarme</button>

        <p class="register">
          ¿Ya tienes una cuenta? <a href="{{ route('login') }}">Inicia sesión</a>
        </p>
        <a href="#" class="facebook">Registrarse con Facebook</a>
      </form>
    </div>
  </div>
</body>
</html>
