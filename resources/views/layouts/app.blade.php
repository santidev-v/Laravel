<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Reservas de Canchas')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f5f7fb;
            color: #1f2937;
        }

        header {
            background: #0f172a;
            color: #fff;
            padding: 16px 24px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin-right: 16px;
            font-weight: bold;
        }

        main {
            max-width: 900px;
            margin: 24px auto;
            background: #fff;
            padding: 24px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(15, 23, 42, 0.08);
        }

        h1 {
            margin-top: 0;
        }

        .btn {
            display: inline-block;
            margin: 8px 0;
            padding: 8px 12px;
            background: #1d4ed8;
            color: #fff;
            border-radius: 6px;
            text-decoration: none;
        }

        .muted {
            color: #6b7280;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('home') }}">Inicio</a>
            <a href="{{ route('courts.index') }}">Canchas</a>
            <a href="{{ route('bookings.index') }}">Reservas</a>
            <a href="{{ route('reports.monthly') }}">Reportes</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
