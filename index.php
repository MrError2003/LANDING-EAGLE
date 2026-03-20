<!DOCTYPE html>
<html lang="es" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LANDING EAGLE - Botones Personalizados</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom Bootstrap Colors & Buttons -->
    <link href="css/custom-bootstrap.css" rel="stylesheet">
    
    <!-- Font Awesome para iconos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <!-- Google Fonts - League Spartan -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- THREE.js y Vanta.js para fondo animado -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@0.5.24/dist/vanta.net.min.js"></script>
    
    <style>
        /* Fondo animado que ocupa toda la pantalla */
        #vanta-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        
        body {
            font-family: 'League Spartan', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            font-size: 1.1rem;
            margin: 0;
            position: relative;
            background: transparent;
        }
        
        /* Secciones con glassmorphism y texto blanco */
        .demo-section {
            background: rgba(255, 255, 255, 0.12);
            border-radius: 12px;
            box-shadow: 0 8px 32px rgba(19, 13, 107, 0.2);
            margin-bottom: 2rem;
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.18);
            color: #ffffff;
        }
        
        .section-title {
            color: #ffffff !important;
            font-weight: 600;
            margin-bottom: 1.5rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        .code-preview {
            background: rgba(0, 0, 0, 0.25);
            border-left: 4px solid #ff8917; /* Naranja del fondo */
            padding: 1rem;
            margin-top: 1rem;
            border-radius: 4px;
            font-family: 'Courier New', monospace;
            font-size: 1.1rem;
            backdrop-filter: blur(8px);
            color: #f8f9fa;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        /* Header con glassmorphism y texto blanco */
        header {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 2rem;
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(255, 137, 23, 0.15);
            color: #ffffff;
        }
        
        header h1 {
            color: #ffffff !important;
            text-shadow: 0 3px 6px rgba(0, 0, 0, 0.4);
        }
        
        header .lead {
            color: #e9ecef !important;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        /* Alert con mejor contraste */
        .alert-primary-subtle {
            background: rgba(255, 255, 255, 0.15) !important;
            border: 1px solid rgba(255, 255, 255, 0.25) !important;
            color: #ffffff !important;
            backdrop-filter: blur(10px);
        }
        
        footer {
            background: rgba(255, 255, 255, 0.08);
            border-radius: 10px;
            padding: 1.5rem;
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            color: #e9ecef;
        }
        
        footer .text-muted {
            color: #ced4da !important;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        }
        
        /* Mejorar texto en general sobre el fondo */
        .demo-section p,
        .demo-section h5,
        .demo-section .text-secondary {
            color: #f8f9fa !important;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.4);
        }
        
        /* Dropdowns y elementos internos */
        .dropdown-menu {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        /* Border para mejor definición */
        .border-top {
            border-color: rgba(255, 255, 255, 0.2) !important;
        }

        /* ===== HEADER / NAVBAR GLASSMORPHISM ===== */
        .eagle-header {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 4px 30px rgba(19, 13, 107, 0.25);
            padding: 0.5rem 1rem;
            z-index: 1030;
        }

        .eagle-logo {
            height: 55px;
            width: auto;
            filter: drop-shadow(0 2px 6px rgba(0, 0, 0, 0.4));
        }

        .eagle-brand-text {
            font-size: 1.5rem;
            font-weight: 700;
            color: #ffffff;
            letter-spacing: 1px;
            text-shadow: 0 2px 8px rgba(255, 137, 23, 0.5);
        }

        .nav-scroll-btn {
            border-radius: 20px;
            padding: 0.35rem 0.9rem;
            font-size: 1.3rem;
            font-weight: 500;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .nav-scroll-btn:hover,
        .nav-scroll-btn.active {
            background: rgba(255, 137, 23, 0.85);
            border-color: rgba(255, 137, 23, 0.85);
            color: #fff;
            box-shadow: 0 0 14px rgba(255, 137, 23, 0.45);
            transform: translateY(-1px);
        }

        .navbar-toggler:focus {
            box-shadow: 0 0 0 0.15rem rgba(255, 137, 23, 0.5);
        }

        .nav-social-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #ffffff;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .nav-social-icon:hover {
            background: rgba(255, 137, 23, 0.85);
            border-color: rgba(255, 137, 23, 0.85);
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 0 12px rgba(255, 137, 23, 0.4);
        }

        /* Scroll-padding para que las secciones no queden bajo el header fijo */
        html {
            scroll-padding-top: 100px;
        }

        /* ===== SECCIÓN DE BIENVENIDA ===== */
        .welcome-glass {
            background: rgba(255, 255, 255, 0.08);
            border-radius: 20px;
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow:
                0 8px 32px rgba(19, 13, 107, 0.25),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
        }

        .welcome-icon-wrapper {
            display: flex;
            justify-content: center;
        }

        .eagle-hero-icon {
            filter: drop-shadow(0 4px 12px rgba(0, 0, 0, 0.4)) 
                    drop-shadow(0 8px 20px rgba(255, 137, 23, 0.15));
            transition: all 0.3s ease;
            animation: float 6s ease-in-out infinite;
        }

        .eagle-hero-icon:hover {
            filter: drop-shadow(0 6px 16px rgba(0, 0, 0, 0.5)) 
                    drop-shadow(0 12px 25px rgba(255, 137, 23, 0.25));
            transform: scale(1.05);
        }

        @keyframes float {
            0%, 100% { 
                transform: translateY(0px);
            }
            50% { 
                transform: translateY(-10px);
            }
        }

        .welcome-title {
            font-size: 4.2rem;
            font-weight: 700;
            color: #ffffff;
            text-shadow: 0 3px 10px rgba(0, 0, 0, 0.4);
            letter-spacing: 0.5px;
        }

        .welcome-highlight {
            background: linear-gradient(135deg, #ff8917, #ffb347);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .welcome-subtitle {
            font-size: 1.8rem;
            color: rgba(255, 255, 255, 0.7);
            font-weight: 300;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .welcome-divider {
            width: 120px;
            height: 3px;
            border-radius: 3px;
            background: linear-gradient(90deg, transparent, #ff8917, transparent);
        }

        .welcome-text {
            font-size: 1.5rem;
            line-height: 2;
            color: rgba(255, 255, 255, 0.9);
            max-width: 900px;
            text-shadow: 0 1px 4px rgba(0, 0, 0, 0.3);
        }

        .welcome-badge {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 137, 23, 0.35);
            color: #ffb347;
            padding: 0.55rem 1.3rem;
            border-radius: 30px;
            font-size: 1.2rem;
            font-weight: 500;
            backdrop-filter: blur(6px);
            transition: all 0.3s ease;
        }

        .welcome-badge:hover {
            background: rgba(255, 137, 23, 0.2);
            border-color: rgba(255, 137, 23, 0.6);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(255, 137, 23, 0.25);
        }

        @media (max-width: 768px) {
            .welcome-title { font-size: 2.6rem; }
            .welcome-subtitle { font-size: 1.3rem; }
            .welcome-text { font-size: 1.25rem; }
            .eagle-hero-icon { 
                width: 90px; 
                height: 90px;
            }
        }

        /* ===== CATÁLOGO DE SOLUCIONES ===== */
        .catalog-overtitle {
            font-size: 1.1rem;
            font-weight: 600;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: #ffb347;
            margin-bottom: 0.5rem;
        }

        .catalog-main-title {
            font-size: 2.8rem;
            font-weight: 700;
            color: #ffffff;
            text-shadow: 0 3px 8px rgba(0, 0, 0, 0.35);
        }

        .catalog-intro {
            font-size: 1.25rem;
            color: rgba(255, 255, 255, 0.75);
            max-width: 750px;
            line-height: 1.8;
        }

        .catalog-card {
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            padding: 2rem 2.2rem;
            height: 100%;
            transition: all 0.35s ease;
            position: relative;
            overflow: hidden;
        }

        .catalog-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, transparent, #ff8917, transparent);
            opacity: 0;
            transition: opacity 0.35s ease;
        }

        .catalog-card:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 137, 23, 0.3);
            transform: translateY(-4px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3);
        }

        .catalog-card:hover::before {
            opacity: 1;
        }

        .catalog-card-header {
            display: flex;
            align-items: center;
            gap: 1.2rem;
            margin-bottom: 1.2rem;
        }

        .catalog-icon-accent {
            width: 52px;
            height: 52px;
            min-width: 52px;
            border-radius: 12px;
            background: linear-gradient(135deg, rgba(255, 137, 23, 0.2), rgba(255, 179, 71, 0.1));
            border: 1px solid rgba(255, 137, 23, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            color: #ffb347;
            transition: all 0.3s ease;
        }

        .catalog-card:hover .catalog-icon-accent {
            background: linear-gradient(135deg, rgba(255, 137, 23, 0.35), rgba(255, 179, 71, 0.2));
            box-shadow: 0 0 20px rgba(255, 137, 23, 0.2);
        }

        .catalog-card-title {
            font-size: 1.45rem;
            font-weight: 700;
            color: #ffffff;
            margin: 0;
            line-height: 1.3;
        }

        .catalog-card-tag {
            font-size: 1.1rem;
            color: rgba(255, 179, 71, 0.85);
            font-weight: 400;
            letter-spacing: 0.5px;
        }

        .catalog-card-desc {
            font-size: 1.25rem;
            color: #ffffff;
            line-height: 1.75;
            margin-bottom: 1.2rem;
        }

        .catalog-features {
            list-style: none;
            padding: 0;
            margin: 0 0 1.5rem 0;
        }

        .catalog-features li {
            position: relative;
            padding-left: 1.4rem;
            margin-bottom: 0.6rem;
            font-size: 1.25rem;
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.5;
        }

        .catalog-features li::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0.55rem;
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #ff8917;
            box-shadow: 0 0 6px rgba(255, 137, 23, 0.4);
        }

        .catalog-card-footer {
            padding-top: 0.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
        }

        .catalog-cta-text {
            font-size: 1.6rem;
            color: #ff8917;
            margin-bottom: 1.2rem;
        }

        @media (max-width: 768px) {
            .catalog-main-title { font-size: 2rem; }
            .catalog-card { padding: 1.5rem; }
            .catalog-card-title { font-size: 1.25rem; }
        }

        /* ===== TIMELINE / PROCESO ===== */
        .tl-container {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 0;
        }

        .tl-line {
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(180deg, 
                transparent, 
                rgba(255, 137, 23, 0.5) 10%, 
                rgba(255, 137, 23, 0.5) 90%, 
                transparent);
            transform: translateX(-50%);
        }

        .tl-item {
            position: relative;
            width: 100%;
            display: grid;
            grid-template-columns: 1fr 40px 1fr;
            gap: 1.5rem;
            padding-bottom: 3.5rem;
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.7s ease, transform 0.7s ease;
            align-items: start;
        }

        .tl-item.tl-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Card a la izquierda: [card] [dot] [imagen] */
        .tl-left .tl-content {
            grid-column: 1;
            text-align: right;
        }
        .tl-left .tl-dot {
            grid-column: 2;
        }
        .tl-left .tl-image {
            grid-column: 3;
        }

        /* Card a la derecha: [imagen] [dot] [card] */
        .tl-right .tl-image {
            grid-column: 1;
        }
        .tl-right .tl-dot {
            grid-column: 2;
        }
        .tl-right .tl-content {
            grid-column: 3;
            text-align: left;
        }

        .tl-dot {
            grid-row: 1;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, #ff8917, #e06600);
            border: 3px solid rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2;
            box-shadow: 0 0 20px rgba(255, 137, 23, 0.35);
            transition: all 0.3s ease;
            justify-self: center;
            margin-top: 0.3rem;
        }

        .tl-item:hover .tl-dot {
            transform: scale(1.15);
            box-shadow: 0 0 30px rgba(255, 137, 23, 0.55);
        }

        .tl-dot span {
            font-size: 0.95rem;
            font-weight: 700;
            color: #ffffff;
        }

        .tl-content {
            grid-row: 1;
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 0 8px 32px rgba(19, 13, 107, 0.2);
            border-radius: 14px;
            padding: 1.8rem 2rem;
            transition: all 0.35s ease;
            position: relative;
        }

        .tl-content::after {
            content: '';
            position: absolute;
            top: 12px;
            width: 14px;
            height: 14px;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            transform: rotate(45deg);
        }

        .tl-left .tl-content::after {
            right: -8px;
            border-left: none;
            border-bottom: none;
        }

        .tl-right .tl-content::after {
            left: -8px;
            border-right: none;
            border-top: none;
        }

        .tl-item:hover .tl-content {
            background: rgba(255, 255, 255, 0.13);
            border-color: rgba(255, 137, 23, 0.3);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3);
        }

        .tl-label {
            display: inline-block;
            font-size: 0.85rem;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #ffb347;
            margin-bottom: 0.4rem;
        }

        .tl-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #ffffff;
            margin: 0 0 0.8rem 0;
            text-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        }

        .tl-desc {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.75);
            line-height: 1.75;
            margin-bottom: 1rem;
        }

        .tl-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .tl-left .tl-tags {
            justify-content: flex-end;
        }

        /* Imágenes del timeline */
        .tl-image {
            grid-row: 1;
            overflow: hidden;
            border-radius: 14px;
        }

        .tl-image img {
            width: 100%;
            height: 100%;
            min-height: 220px;
            object-fit: cover;
            border-radius: 14px;
            border: 1px solid rgba(255, 255, 255, 0.12);
            box-shadow: 0 8px 32px rgba(19, 13, 107, 0.25);
            opacity: 0.85;
            transition: all 0.4s ease;
        }

        .tl-item:hover .tl-image img {
            opacity: 1;
            transform: scale(1.03);
            box-shadow: 0 12px 40px rgba(255, 137, 23, 0.2);
        }

        .tl-tags span {
            font-size: 0.85rem;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            background: rgba(255, 137, 23, 0.1);
            border: 1px solid rgba(255, 137, 23, 0.2);
            color: rgba(255, 179, 71, 0.9);
            font-weight: 500;
        }

        /* Responsive timeline */
        @media (max-width: 768px) {
            .tl-line {
                left: 20px;
            }

            .tl-item {
                display: flex;
                flex-direction: column;
                width: 100%;
                padding-left: 55px;
                padding-right: 0;
            }

            .tl-left .tl-content,
            .tl-right .tl-content {
                text-align: left;
            }

            .tl-dot {
                position: absolute;
                left: 0;
                top: 0;
            }

            .tl-left .tl-content::after,
            .tl-right .tl-content::after {
                left: -8px;
                right: auto;
                border-right: none;
                border-top: none;
                border-left: 1px solid rgba(255, 255, 255, 0.08);
                border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            }

            .tl-left .tl-tags {
                justify-content: flex-start;
            }

            .tl-image {
                order: 2;
                margin-top: 1rem;
            }

            .tl-content {
                order: 1;
            }

            .tl-image img {
                min-height: 180px;
                height: 180px;
            }

            .tl-title { font-size: 1.3rem; }
            .tl-desc { font-size: 1rem; }
        }

        /* ===== CARRUSEL DE LOGOS ===== */
        .logo-carousel-wrapper {
            position: relative;
            display: flex;
            align-items: center;
            gap: 0;
        }

        .logo-carousel-track-container {
            overflow: hidden;
            flex: 1;
            mask-image: linear-gradient(90deg, transparent, #000 8%, #000 92%, transparent);
            -webkit-mask-image: linear-gradient(90deg, transparent, #000 8%, #000 92%, transparent);
        }

        .logo-carousel-track {
            display: flex;
            align-items: center;
            gap: 0;
            will-change: transform;
            animation: logoScroll 40s linear infinite;
        }

        .logo-carousel-track:hover {
            animation-play-state: paused;
        }

        @keyframes logoScroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-33.333%); }
        }

        .logo-carousel-item {
            flex: 0 0 auto;
            width: 280px;
            height: 160px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.2rem 2rem;
            margin: 0 0.75rem;
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 14px;
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            box-shadow: 0 8px 32px rgba(19, 13, 107, 0.2), inset 0 1px 0 rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .logo-carousel-item:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 137, 23, 0.35);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3), inset 0 1px 0 rgba(255, 255, 255, 0.15);
            transform: scale(1.05);
        }

        .logo-carousel-item img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            filter: brightness(0) invert(1);
            opacity: 0.75;
            transition: all 0.3s ease;
        }

        .logo-carousel-item.no-filter img {
            filter: none;
            opacity: 0.9;
        }

        .logo-carousel-item:hover img {
            filter: none;
            opacity: 1;
        }

        @media (max-width: 768px) {
            .logo-carousel-item {
                width: 180px;
                height: 110px;
                padding: 0.8rem 1.2rem;
            }
        }

        /* ===== Footer / Contacto ===== */
        .footer-contact {
            padding: 5rem 0 2rem;
            position: relative;
        }

        .contact-icon-box {
            width: 48px;
            height: 48px;
            min-width: 48px;
            border-radius: 12px;
            background: rgba(255, 137, 23, 0.15);
            border: 1px solid rgba(255, 137, 23, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: #ff8917;
        }

        .contact-info-item:hover .contact-icon-box {
            background: rgba(255, 137, 23, 0.25);
            transform: scale(1.05);
            transition: all 0.3s ease;
        }

        .social-icon-link {
            text-decoration: none;
        }

        .social-icon-box {
            width: 50px;
            height: 50px;
            border-radius: 14px;
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            color: #ffffff;
            transition: all 0.3s ease;
        }

        .social-icon-box:hover {
            background: rgba(255, 137, 23, 0.25);
            border-color: rgba(255, 137, 23, 0.5);
            color: #ff8917;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(255, 137, 23, 0.25);
        }

        .footer-input,
        .footer-input:focus {
            background: rgba(255, 255, 255, 0.07);
            border: 1px solid rgba(255, 255, 255, 0.15);
            color: #ffffff;
            border-radius: 10px;
            padding: 12px 16px;
            font-size: 1.05rem;
            transition: all 0.3s ease;
        }

        .footer-input::placeholder {
            color: rgba(255, 255, 255, 0.35);
        }

        .footer-input:focus {
            border-color: rgba(255, 137, 23, 0.5);
            box-shadow: 0 0 0 3px rgba(255, 137, 23, 0.15);
            background: rgba(255, 255, 255, 0.1);
        }

        .footer-input option {
            background: #130d6b;
            color: #ffffff;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        @media (max-width: 768px) {
            .footer-contact {
                padding: 3rem 0 1.5rem;
            }
            .footer-header h2 {
                font-size: 2rem !important;
            }
        }
    </style>
</head>
<body>
    <!-- Elemento para el fondo animado -->
    <div id="vanta-background"></div>

    <?php include 'components/header.php'; ?>

    <!-- Sección bienvenida fuera del container para más ancho -->
    <div class="container-fluid px-3 px-md-5 my-5">
        <?php include 'components/sections/landind_sections.php'; ?>
    </div>

    <!-- Catálogo de soluciones -->
    <div class="container-fluid px-3 px-md-5 mb-5">
        <?php include 'components/sections/catalog_sections.php'; ?>
    </div>

    <!-- Proceso / Timeline -->
    <div class="container-fluid px-3 px-md-5 mb-5">
        <?php include 'components/sections/process_timeline.php'; ?>
    </div>

    <!-- Carrusel de Clientes -->
    <div class="container-fluid px-3 px-md-5 mb-5">
        <?php include 'components/sections/logos_carousel.php'; ?>
    </div>

    <div class="container my-5">
        <?php //include 'components/button.php'; ?>
    </div>

    <!-- Footer / Contacto -->
    <?php include 'components/sections/footer_contact.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Inicializar fondo animado Vanta.js NET
        VANTA.NET({
            el: "#vanta-background",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            color: 0xff8917,        // Naranja
            backgroundColor: 0x130d6b  // Azul oscuro
        });

        // Agregar efectos de clic a todos los botones
        document.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('click', function(e) {
                // Crear efecto ripple
                const ripple = document.createElement('span');
                ripple.classList.add('ripple');
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
                
                // Mostrar qué botón se presionó
                console.log('Botón presionado:', this.textContent);
            });
        });

        // Timeline: reveal on scroll (efecto parallax)
        const tlObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('tl-visible');
                }
            });
        }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

        document.querySelectorAll('.tl-item').forEach(item => {
            tlObserver.observe(item);
        });

        // Logo carousel: scroll con rueda del mouse (loop infinito)
        (function() {
            const container = document.querySelector('.logo-carousel-track-container');
            const track = document.querySelector('.logo-carousel-track');
            if (!track || !container) return;

            // Calcular ancho de un set de logos (1/3 del track total)
            const setWidth = track.scrollWidth / 3;

            // Loop infinito: reposicionar cuando se pase de límites
            function wrapPosition(x) {
                // Mantener x entre 0 y -setWidth
                let wrapped = x % setWidth;
                if (wrapped > 0) wrapped -= setWidth;
                return wrapped;
            }

            container.addEventListener('wheel', function(e) {
                e.preventDefault();
                const style = window.getComputedStyle(track);
                const matrix = new DOMMatrix(style.transform);
                let currentX = matrix.m41;
                const delta = e.deltaY !== 0 ? e.deltaY : e.deltaX;

                let newX = wrapPosition(currentX - delta);

                track.style.animation = 'none';
                track.style.transform = 'translateX(' + newX + 'px)';

                clearTimeout(track._scrollTimer);
                track._scrollTimer = setTimeout(() => {
                    track.style.transform = '';
                    track.style.animation = '';
                }, 1500);
            }, { passive: false });
        })();

        // Scroll Spy: destacar botón de navegación según sección visible
        (function() {
            const sections = document.querySelectorAll('section[id], #section-welcome');
            const navLinks = document.querySelectorAll('.nav-scroll-btn');
            if (!sections.length || !navLinks.length) return;

            function updateActive() {
                let current = '';
                const offset = 150;
                sections.forEach(section => {
                    const top = section.offsetTop - offset;
                    if (window.scrollY >= top) {
                        current = section.getAttribute('id');
                    }
                });
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === '#' + current) {
                        link.classList.add('active');
                    }
                });
            }

            window.addEventListener('scroll', updateActive, { passive: true });
            updateActive();
        })();
    </script>

</body>
</html>