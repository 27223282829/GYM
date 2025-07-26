<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Recuperar contraseña - Gym</title>
  <link rel="stylesheet" href="{{ asset('styles/auth.css') }}" />
</head>
<body>
  <div class="container">
    <div class="login-box">
      <img src="{{ asset('fotosgym/logo2.jpg') }}" alt="Gold's Gym Logo" class="logo" />
      <h2>¿Olvidaste tu contraseña?</h2>

      {{-- Mensaje de ayuda --}}
      <p style="text-align:center; font-size: 14px; margin-bottom: 15px;">
        No hay problema. Solo dinos tu correo electrónico y te enviaremos un enlace para restablecer tu contraseña.
      </p>

      {{-- Mensaje de estado (correo enviado, etc.) --}}
      @if (session('status'))
        <div style="background: #d1e7dd; color: #0f5132; padding: 10px; border-radius: 5px; margin-bottom: 15px; border: 1px solid #badbcc;">
          {{ session('status') }}
        </div>
      @endif

      {{-- Errores de validación --}}
      @if ($errors->any())
        <div style="background: #f8d7da; color: #842029; padding: 10px; border-radius: 5px; margin-bottom: 15px; border: 1px solid #f5c2c7;">
          @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
          @endforeach
        </div>
      @endif

      <form method="POST" action="{{ route('password.email') }}">
        @csrf

        {{-- Campo de correo electrónico --}}
        <input type="email" name="email" placeholder="Correo electrónico" value="{{ old('email') }}" required />

        <button type="submit">Enviar enlace</button>

        <p class="register">
          ¿Recordaste tu contraseña? <a href="{{ route('login') }}">Inicia sesión</a>
        </p>
      </form>
    </div>
  </div>
</body>
</html>
