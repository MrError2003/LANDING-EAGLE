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
                    <a class="btn btn-outline-light btn-sm nav-scroll-btn" href="#section-theme">
                        <i class="fas fa-palette me-1"></i>Theme
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-light btn-sm nav-scroll-btn" href="#section-outline">
                        <i class="far fa-square me-1"></i>Outline
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-light btn-sm nav-scroll-btn" href="#section-sizes">
                        <i class="fas fa-expand-arrows-alt me-1"></i>Tamaños
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-light btn-sm nav-scroll-btn" href="#section-custom">
                        <i class="fas fa-rainbow me-1"></i>Custom
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-light btn-sm nav-scroll-btn" href="#section-states">
                        <i class="fas fa-toggle-on me-1"></i>Estados
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-light btn-sm nav-scroll-btn" href="#section-combos">
                        <i class="fas fa-magic me-1"></i>Combos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-light btn-sm nav-scroll-btn" href="#section-test">
                        <i class="fas fa-flask me-1"></i>Pruebas
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Spacer para compensar el header fijo -->
<div id="top" style="height: 90px;"></div>
