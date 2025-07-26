<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Restablecer Contraseña</title>
    <link rel="stylesheet" href="{{ asset('styles/auth.css') }}">
</head>

<body>
    <div class="container">
        <div class="login-box">
            <img src="{{ asset('fotosgym/logo2.jpg') }}" alt="Gold's Gym Logo" class="logo" />
            <h2>Restablecer Contraseña</h2>

            @if (session('status'))
                <div class="alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <!-- Token oculto -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email -->
                <input type="email" placeholder="Correo electrónico" name="email"
                    value="{{ old('email', $request->email) }}" required />
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror

                <!-- Nueva contraseña -->
                <input type="password" placeholder="Nueva contraseña" name="password" required />
                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror

                <!-- Confirmar contraseña -->
                <input type="password" placeholder="Confirmar nueva contraseña" name="password_confirmation" required />
                @error('password_confirmation')
                    <div class="error">{{ $message }}</div>
                @enderror

                <!-- Botón -->
                <button type="submit">Restablecer Contraseña</button>

                <p class="register">
                    ¿Ya tienes cuenta? <a href="{{ route('login') }}">Inicia sesión</a>
                </p>
            </form>
        </div>
    </div>
</body>

</html>
