<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro Gym</title>
    <link rel="stylesheet" href="styles/auth.css" />
</head>

<body>
    <div class="container">
        <div class="login-box">
            <img src="{{ asset('fotosgym/logo2.jpg') }}" alt="Gold's Gym Logo" class="logo" />
            <h2>Registro</h2>

            @if ($errors->has('email'))
                <div class="alert-error">
                    {{ $errors->first('email') }}
                </div>
            @endif
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <input type="text" placeholder="Nombre completo" name="name" value="{{ old('name') }}"
                    required />
                <input type="email" placeholder="Correo electrónico" name="email" value="{{ old('email') }}"
                    required />


            <div class="password-container">
    <input type="password" placeholder="Contraseña" name="password" id="password" required oninput="showEye('password', 'eye-password')" />
    <span id="eye-password" class="toggle-password hide-eye" onclick="togglePassword('password', this)">
        <!-- Ícono SVG del ojito -->
        <svg class="eye-icon" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24"
            width="20" fill="#555">
            <path d="M0 0h24v24H0z" fill="none" />
            <path
                d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zm0 13c-3.04 0-5.5-2.46-5.5-5.5S8.96 6.5 12 6.5s5.5 2.46 5.5 5.5-2.46 5.5-5.5 5.5zm0-9c-1.93 0-3.5 1.57-3.5 3.5S10.07 15.5 12 15.5 15.5 13.93 15.5 12 13.93 8.5 12 8.5z" />
        </svg>
    </span>
</div>


    <div class="password-container">
    <input type="password" placeholder="Confirmar contraseña" name="password_confirmation" id="password_confirmation" required oninput="showEye('password_confirmation', 'eye-confirm')" />
    <span id="eye-confirm" class="toggle-password hide-eye" onclick="togglePassword('password_confirmation', this)">
        <!-- Ícono SVG del ojito -->
        <svg class="eye-icon" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24"
            width="20" fill="#555">
            <path d="M0 0h24v24H0z" fill="none" />
            <path
                d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zm0 13c-3.04 0-5.5-2.46-5.5-5.5S8.96 6.5 12 6.5s5.5 2.46 5.5 5.5-2.46 5.5-5.5 5.5zm0-9c-1.93 0-3.5 1.57-3.5 3.5S10.07 15.5 12 15.5 15.5 13.93 15.5 12 13.93 8.5 12 8.5z" />
        </svg>
    </span>
</div>




                <button type="submit">Registrarme</button>

                <p class="register">
                    ¿Ya tienes una cuenta? <a href="{{ route('login') }}">Inicia sesión</a>
                </p>
                <a href="#" class="facebook">Registrarse con Facebook</a>
            </form>
        </div>
    </div>
</body>
<script src="{{ asset('js/script.js') }}"></script>

</html>
