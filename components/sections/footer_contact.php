<section id="contacto" class="footer-contact">
    <div class="container-fluid px-3 px-md-5">
        
        <!-- Encabezado -->
        <div class="footer-header text-center mb-5">
            <span class="badge bg-orange text-white px-4 py-2 mb-3" style="font-size: 1rem; border-radius: 50px;">
                <i class="fas fa-envelope me-2"></i>Contáctanos
            </span>
            <h2 class="fw-bold text-white" style="font-size: 2.8rem;">¿Listo para transformar tu negocio?</h2>
            <p class="text-white-50" style="font-size: 1.2rem;">Escríbenos y te responderemos a la brevedad</p>
        </div>

        <div class="row g-4 align-items-stretch">
            
            <!-- Columna izquierda: Info de contacto + redes -->
            <div class="col-lg-5">
                <div class="welcome-glass p-4 p-md-5 h-100 d-flex flex-column justify-content-between">
                    
                    <div>
                        <h4 class="fw-bold text-white mb-4" style="font-size: 1.6rem;">
                            <i class="fas fa-headset text-warning me-2"></i>Información de contacto
                        </h4>

                        <!-- Teléfono -->
                        <div class="contact-info-item d-flex align-items-start mb-4">
                            <div class="contact-icon-box me-3">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div>
                                <span class="text-white-50 d-block" style="font-size: 0.9rem;">Teléfono móvil</span>
                                <a href="tel:+573116825000" class="text-white text-decoration-none fw-semibold" style="font-size: 1.15rem;">
                                    +57 311 682 5000
                                </a>
                            </div>
                        </div>

                        <!-- Correo -->
                        <div class="contact-info-item d-flex align-items-start mb-4">
                            <div class="contact-icon-box me-3">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <span class="text-white-50 d-block" style="font-size: 0.9rem;">Correo electrónico</span>
                                <a href="mailto:info@agenciaeaglesoftware.com" class="text-white text-decoration-none fw-semibold" style="font-size: 1.15rem;">
                                    info@agenciaeaglesoftware.com
                                </a>
                            </div>
                        </div>

                        <!-- Dirección -->
                        <div class="contact-info-item d-flex align-items-start mb-4">
                            <div class="contact-icon-box me-3">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <span class="text-white-50 d-block" style="font-size: 0.9rem;">Dirección</span>
                                <span class="text-white fw-semibold" style="font-size: 1.15rem;">
                                    Calle 98b #40-04<br>Medellín, Colombia
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Redes sociales -->
                    <div class="mt-4">
                        <h6 class="text-white-50 mb-3" style="font-size: 0.95rem;">Síguenos en redes</h6>
                        <div class="d-flex gap-3">
                            <a href="https://www.facebook.com/eaglesoftwares/" class="social-icon-link" aria-label="Facebook" target="_blank">
                                <div class="social-icon-box">
                                    <i class="fab fa-facebook-f"></i>
                                </div>
                            </a>
                            <a href="https://www.instagram.com/eaglesoftwares/" class="social-icon-link" aria-label="Instagram" target="_blank">
                                <div class="social-icon-box">
                                    <i class="fab fa-instagram"></i>
                                </div>
                            </a>
                            <a href="https://www.linkedin.com/company/agencia-de-desarrollo-eagle-software/" class="social-icon-link" aria-label="LinkedIn" target="_blank">
                                <div class="social-icon-box">
                                    <i class="fab fa-linkedin-in"></i>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Columna derecha: Formulario -->
            <div class="col-lg-7">
                <div class="welcome-glass p-4 p-md-5 h-100">
                    <h4 class="fw-bold text-white mb-4" style="font-size: 1.6rem;">
                        <i class="fas fa-paper-plane text-warning me-2"></i>Envíanos un mensaje
                    </h4>

                    <form id="contactForm" novalidate>
                        <div class="row g-3">
                            <!-- Nombre -->
                            <div class="col-md-6">
                                <label class="form-label text-white-50" style="font-size: 0.95rem;">Nombre completo</label>
                                <input type="text" class="form-control footer-input" placeholder="Tu nombre" required>
                            </div>
                            <!-- Email -->
                            <div class="col-md-6">
                                <label class="form-label text-white-50" style="font-size: 0.95rem;">Correo electrónico</label>
                                <input type="email" class="form-control footer-input" placeholder="correo@ejemplo.com" required>
                            </div>
                            <!-- Teléfono -->
                            <div class="col-md-6">
                                <label class="form-label text-white-50" style="font-size: 0.95rem;">Teléfono</label>
                                <input type="tel" class="form-control footer-input" placeholder="+57 300 000 0000">
                            </div>
                            <!-- Asunto -->
                            <div class="col-md-6">
                                <label class="form-label text-white-50" style="font-size: 0.95rem;">Asunto</label>
                                <select class="form-select footer-input" required>
                                    <option value="" selected disabled>Selecciona una opción</option>
                                    <option value="parqueaderos">Plataforma Parqueaderos</option>
                                    <option value="inmobiliarias">Plataforma Inmobiliarias</option>
                                    <option value="educativas">Plataforma Educativas</option>
                                    <option value="gimnasios">Plataforma Gimnasios</option>
                                    <option value="personalizado">Desarrollo personalizado</option>
                                    <option value="otro">Otro</option>
                                </select>
                            </div>
                            <!-- Mensaje -->
                            <div class="col-12">
                                <label class="form-label text-white-50" style="font-size: 0.95rem;">Mensaje</label>
                                <textarea class="form-control footer-input" rows="4" placeholder="Cuéntanos sobre tu proyecto..." required></textarea>
                            </div>
                            <!-- Botón -->
                            <div class="col-12 mt-2">
                                <button type="submit" class="btn btn-info btn-lg w-100 fw-bold" style="font-size: 1.15rem; padding: 14px;">
                                    <i class="fas fa-paper-plane me-2"></i>Enviar mensaje
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <!-- Barra inferior -->
        <div class="footer-bottom text-center mt-5 pt-4">
            <p class="text-white-50 mb-0" style="font-size: 0.95rem;">
                <i class="fas fa-code me-2"></i>
                &copy; <?php echo date('Y'); ?> Eagle Software — Todos los derechos reservados
            </p>
        </div>

    </div>
</section>
