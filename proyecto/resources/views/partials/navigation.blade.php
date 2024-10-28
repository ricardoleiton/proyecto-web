@include('components.suggestion')
<!-- Integración de barra de navegacion BootStrap -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#inicio">Mendoza Turismo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#excursiones">  <i class="fas fa-bus"></i> Excursiones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#paquetes">  <i class="fas fa-tags"></i> Paquetes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#galeria">  <i class="fas fa-images"></i> Galería</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#informacion">  <i class="fas fa-info-circle"></i> Información</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacto') }}">  <i class="fas fa-envelope"></i> Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts.index') }}">  <i class="fas fa-newspaper"></i> Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('videos') }}">  <i class="fas fa-video"></i> Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">  <i class="fas fa-sign-in-alt"></i> Login/Registro</a>
                </li>
            </ul>
        </div>
    </div>
</nav>