<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Gym</title>
  <link rel="stylesheet" href="{{ asset('styles/auth.css') }}" />
</head>
<body>
  <div class="container">
    <div class="login-box">
      <img src="{{ asset('fotosgym/logo2.jpg') }}" alt="Gold's Gym Logo" class="logo" />
      <h2>¡Bienvenido!</h2>

      {{-- Mensajes de sesión (éxito, confirmación, etc.) --}}
      @if (session('status'))
        <div style="background: #d1e7dd; color: #0f5132; padding: 10px; border-radius: 5px; margin-bottom: 15px; font-size: 14px; border: 1px solid #badbcc;">
          {{ session('status') }}
        </div>
      @endif

      {{-- Mostrar errores si existen --}}
      @if ($errors->any())
        <div style="background: #f8d7da; color: #842029; padding: 10px; border-radius: 5px; margin-bottom: 15px; font-size: 14px; border: 1px solid #f5c2c7;">
          @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
          @endforeach
        </div>
      @endif

      <form method="POST" action="{{ route('login') }}">
        @csrf

        {{-- Campo correo electrónico --}}
        <input type="email" name="email" placeholder="Correo electrónico" value="{{ old('email') }}" required />

        {{-- Campo contraseña --}}
        <input type="password" name="password" placeholder="Contraseña" required />

        {{-- Recordar contraseña --}}
        <div class="options">
          @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
          @endif
        </div>

        <button type="submit">Entrar</button>

        <p class="register">
          ¿No tienes cuenta? <a href="{{ route('register') }}">Regístrate ahora</a>
        </p>
        <a href="#" class="facebook">Facebook</a>
      </form>
    </div>
  </div>
</body>
</html>
