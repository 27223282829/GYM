<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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

                {{-- Campo contraseña con ojito --}}
                <div class="password-container">
                    <input type="password" placeholder="Contraseña" name="password" id="login-password" required
                        oninput="showEye('login-password', 'eye-login')" />
                    <span id="eye-login" class="toggle-password hide-eye"
                        onclick="togglePassword('login-password', this)">
                        <svg class="eye-icon" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24"
                            width="20" fill="#555">
                            <path d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zm0 13c-3.04 0-5.5-2.46-5.5-5.5S8.96 6.5 12 6.5s5.5 2.46 5.5 5.5-2.46 5.5-5.5 5.5zm0-9c-1.93 0-3.5 1.57-3.5 3.5S10.07 15.5 12 15.5 15.5 13.93 15.5 12 13.93 8.5 12 8.5z" />
                        </svg>
                    </span>
                </div>

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

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
