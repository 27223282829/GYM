<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Verifica tu correo</title>
    <link rel="stylesheet" href="{{ asset('styles/auth.css') }}">
</head>

<body>
    <div class="container">
        <div class="login-box">
            <img src="{{ asset('fotosgym/logo2.jpg') }}" alt="Logo del Gym" class="logo" />
            <h2>Verifica tu correo</h2>

            <p class="info-text">
                Gracias por registrarte. Antes de comenzar, por favor verifica tu dirección de correo electrónico
                haciendo clic en el enlace que te enviamos. <br>
                Si no lo recibiste, podemos enviarte uno nuevo.
            </p>

            @if (session('status') == 'verification-link-sent')
                <div class="alert-success">
                    Se ha enviado un nuevo enlace de verificación a tu correo electrónico.
                </div>
            @endif

            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit">Reenviar correo de verificación</button>
            </form>

            <form method="POST" action="{{ route('logout') }}" style="margin-top: 1rem;">
                @csrf
                <button type="submit" class="logout-button">Cerrar sesión</button>
            </form>

        </div>
    </div>
</body>

</html>
