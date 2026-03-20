<?php
/**
 * Sección Carrusel de Clientes - LANDING EAGLE
 * Banda continua de logos con autoplay y controles
 */

$logos = [
    ['src' => 'img/carrusel/logo_amigotex.png',   'alt' => 'Amigotex'],
    ['src' => 'img/carrusel/logo_cendi.png',       'alt' => 'Cendi'],
    ['src' => 'img/carrusel/logo_innova.png',      'alt' => 'Innova'],
    ['src' => 'img/carrusel/logo_lecargo.png',     'alt' => 'Lecargo'],
    ['src' => 'img/carrusel/logo_metrofem.png',    'alt' => 'Metrofem'],
    ['src' => 'img/carrusel/logo_pbj.png',         'alt' => 'PBJ'],
    ['src' => 'img/carrusel/logo_poliandino.png',  'alt' => 'Poliandino'],
    ['src' => 'img/carrusel/logo_utt.png',         'alt' => 'UTT'],
];
?>

<section id="section-clients" class="clients-section mb-5">
    <div class="text-center mb-4 welcome-glass p-4 p-md-5">
        <p class="catalog-overtitle">Quiénes confían en nosotros</p>
        <h2 class="catalog-main-title">
            Empresas que <span class="welcome-highlight">ya crecen con Eagle</span>
        </h2>
        <div class="welcome-divider mx-auto mt-3 mb-3"></div>
        <p class="catalog-intro mx-auto">
            Hemos acompañado a organizaciones de distintos sectores en su transformación digital.
        </p>
    </div>

    <!-- Carrusel banda continua -->
    <div class="logo-carousel-wrapper">
        <div class="logo-carousel-track-container">
            <div class="logo-carousel-track">
                <?php
                // Renderizar logos 3 veces para crear el loop infinito
                for ($i = 0; $i < 3; $i++):
                    foreach ($logos as $logo):
                        $noFilter = ($logo['alt'] === 'PBJ') ? ' no-filter' : '';
                ?>
                    <div class="logo-carousel-item<?php echo $noFilter; ?>">
                        <img src="<?php echo htmlspecialchars($logo['src']); ?>" 
                             alt="<?php echo htmlspecialchars($logo['alt']); ?>" 
                             loading="lazy">
                    </div>
                <?php 
                    endforeach;
                endfor; 
                ?>
            </div>
        </div>
    </div>
</section>
