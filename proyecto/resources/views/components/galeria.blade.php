<!-- Carrusel de Galería -->
<section class="galeria" id="galeria">
    <div class="contenedor">
        <h2 class="subtitulo text-center mb-4">Galería</h2>

        <!-- Carrusel de Bootstrap con cambio automático cada 5 segundos -->
        <div id="galeriaCarrusel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                <!-- Cada imagen es un item dentro del carrusel -->
                <div class="carousel-item active">
                    <img src="{{ asset('images/uno.jpg') }}" class="d-block w-100 fixed-size" alt="Imagen 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/dos.jpg') }}" class="d-block w-100 fixed-size" alt="Imagen 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/tres.png') }}" class="d-block w-100 fixed-size" alt="Imagen 3">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/cuatro.jpg') }}" class="d-block w-100 fixed-size" alt="Imagen 4">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/cinco.jpg') }}" class="d-block w-100 fixed-size" alt="Imagen 5">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/seis.webp') }}" class="d-block w-100 fixed-size" alt="Imagen 6">
                </div>
            </div>

            <!-- Controles del Carrusel (Anterior/Siguiente) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#galeriaCarrusel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#galeriaCarrusel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>
</section>