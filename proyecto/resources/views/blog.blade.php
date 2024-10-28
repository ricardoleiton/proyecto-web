@include('components.layout')
@include('components.header')

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <style>
        /* Estilos básicos para la estructura */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 90%;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: rgb(31, 33, 138);
        }

        .posts {
            display: flex;
            flex-wrap: wrap;
            /* Permite que los posts se envuelvan en nuevas filas */
            justify-content: space-between;
            /* Espacio entre columnas */
        }

        .post {
            background-color: #fff;
            margin-bottom: 20px;
            padding: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border: 1px solid rgb(31, 33, 138);
            text-align: center;
            width: calc(50% - 10px);
            /* Ancho para 2 columnas */
            box-sizing: border-box;
            /* Incluye padding y border en el ancho */
            display: flex;
            flex-direction: column;
            /* Para apilar los elementos verticalmente */
            align-items: center;
            /* Centra los elementos horizontalmente */
        }

        .post img {
            width: 100%;
            /* Cambiar a 100% para que ajuste al ancho del contenedor */
            height: 300px;
            /* Altura fija para que todas las imágenes tengan el mismo tamaño */
            object-fit: cover;
            /* Mantiene la proporción y recorta si es necesario */
            max-width: 600px;
            /* Aseguramos que no exceda el ancho máximo */
            margin: 0 auto;
            /* Centramos la imagen */
            display: block;
            /* Aseguramos que la imagen se trate como bloque para centrarla */
        }

        .post h2,
        .post p {
            text-align: center;
            margin: 10px 0;
        }

        .new-post-form {
            margin-bottom: 30px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border: 1px solid rgb(31, 33, 138);
        }

        .new-post-form input[type="text"],
        .new-post-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid rgb(31, 33, 138);
            border-radius: 5px;
        }

        .new-post-form button {
            padding: 10px 20px;
            background-color: rgb(31, 33, 138);
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .new-post-form button:hover {
            background-color: #1a1b74;
        }

        input[type="file"] {
            border: 1px solid rgb(31, 33, 138);
            padding: 5px;
            border-radius: 5px;
            color: rgb(31, 33, 138);
            background-color: transparent;
            cursor: pointer;
        }

        input[type="file"]::file-selector-button {
            background-color: rgb(31, 33, 138);
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Estilos responsive */
        @media (max-width: 768px) {
            .container {
                width: 95%;
            }

            .post {
                width: 100%;
                /* Cambiar a una sola columna en pantallas medianas y pequeñas */
            }

            .new-post-form input[type="text"],
            .new-post-form textarea {
                font-size: 14px;
                padding: 8px;
            }

            .new-post-form button {
                padding: 8px 16px;
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .new-post-form {
                padding: 15px;
            }

            .post h2 {
                font-size: 18px;
            }

            .post p {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Blog</h1>

        <!-- Formulario para crear un nuevo post -->
        <div class="new-post-form">
            <h2>Agregar nuevo post</h2>
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="name">Nombre:</label>
                    <input type="text" name="name" id="name" required>
                </div>
                <div>
                    <label for="message">Mensaje:</label>
                    <textarea name="message" id="message" required></textarea>
                </div>
                <div>
                    <label for="image"></label>
                    <input type="file" name="image" id="image" accept="image/*">
                </div>
                <button type="submit">Publicar</button>
            </form>
        </div>

        <!-- Mostrar los posts existentes -->
        <div class="posts">
            @foreach ($posts as $post)
                <div class="post">
                    <h2>{{ $post->name }}</h2>
                    <p>{{ $post->message }}</p>
                    @if ($post->image)
                        <img src="{{ asset($post->image) }}" alt="Imagen del post">
                    @endif
                    <p><small>Publicado el: {{ $post->created_at->format('d/m/Y') }}</small></p>
                </div>
            @endforeach
        </div>
    </div>

    @include('partials.slidebar2')
    @include('components.footer')

</body>

</html>
