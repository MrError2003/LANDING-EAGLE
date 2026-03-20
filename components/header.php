<?php
/**
 * Componente Header - LANDING EAGLE
 * Navbar fija con glassmorphism, logo centrado y navegación smooth scroll
 */
?>

<nav class="eagle-header navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand mx-auto d-flex align-items-center" href="#top">
            <img src="img/logos/logo_eagle.png" alt="Eagle Logo" class="eagle-logo me-2">
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarEagle" aria-controls="navbarEagle" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarEagle">
            <ul class="navbar-nav gap-2 mt-3 mt-lg-0">
                <li class="nav-item">
                    <a class="btn btn-outline-light btn-sm nav-scroll-btn" href="#section-welcome">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-light btn-sm nav-scroll-btn" href="#section-catalog">Soluciones</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-light btn-sm nav-scroll-btn" href="#section-process">Proceso</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-light btn-sm nav-scroll-btn" href="#section-clients">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-light btn-sm nav-scroll-btn" href="#contacto">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Spacer para compensar el header fijo -->
<div id="top" style="height: 90px;"></div>
