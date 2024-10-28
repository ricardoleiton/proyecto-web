@include('components.layout')
@include('components.header')
<!-- contact.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
            color: rgb(31, 33, 138);
        }

        .content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 20px;
            /* Agregar padding lateral para móviles */
        }

        form {
            border: 1px solid rgb(31, 33, 138);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            /* Cambiar a 100% para que sea más responsive */
            max-width: 400px;
            /* Ancho máximo del formulario */
            box-sizing: border-box;
            /* Asegurar que el padding no aumente el tamaño */
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: rgb(31, 33, 138);
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid rgb(31, 33, 138);
            border-radius: 4px;
            color: rgb(31, 33, 138);
            background-color: #e6e9ff;
        }

        input[type="submit"] {
            background-color: rgb(31, 33, 138);
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #1c1e99;
        }

        .break {
            margin-top: 20px;
            text-align: center;
        }

        /* Consultas de medios para dispositivos más pequeños */
        @media (max-width: 480px) {
            form {
                padding: 15px;
                /* Reducir padding en móviles */
            }

            h1 {
                font-size: 1.5em;
                /* Tamaño de fuente del título en móviles */
            }

            input[type="text"],
            input[type="email"],
            textarea {
                font-size: 0.9em;
                /* Reducir tamaño de fuente de los inputs en móviles */
            }

            input[type="submit"] {
                font-size: 0.9em;
                /* Reducir tamaño de fuente del botón en móviles */
            }
        }
    </style>
</head>

<body>
    <h1>Contacto</h1>
    <div class="content">
        <form action="{{ route('contact.store') }}" method="POST">
            @csrf <!-- Protección CSRF de Laravel -->

            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <div style="color: red;">{{ $message }}</div>
            @enderror

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <div style="color: red;">{{ $message }}</div>
            @enderror

            <label for="message">Mensaje:</label>
            <textarea id="message" name="message" required>{{ old('message') }}</textarea>
            @error('message')
                <div style="color: red;">{{ $message }}</div>
            @enderror

            <input type="submit" value="Enviar">
        </form>
    </div>

    <div class="break">
    </div>
    @include('partials.slidebar2')
    @include('components.footer')
</body>

</html>
