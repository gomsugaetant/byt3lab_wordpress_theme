<?php
// BYT3LAB Builder - auto-include component assets for conact-body
if (!isset($GLOBALS['byt3lab_assets_printed'])) {
    $GLOBALS['byt3lab_assets_printed'] = ['css' => [], 'js' => []];
}
$__byt3lab_comp_slug = 'conact-body';
$__byt3lab_css_path = get_stylesheet_directory() . '/components/' . $__byt3lab_comp_slug . '/' . $__byt3lab_comp_slug . '.css';
$__byt3lab_js_path = get_stylesheet_directory() . '/components/' . $__byt3lab_comp_slug . '/' . $__byt3lab_comp_slug . '.js';
$__byt3lab_css_uri = get_stylesheet_directory_uri() . '/components/' . $__byt3lab_comp_slug . '/' . $__byt3lab_comp_slug . '.css';
$__byt3lab_js_uri = get_stylesheet_directory_uri() . '/components/' . $__byt3lab_comp_slug . '/' . $__byt3lab_comp_slug . '.js';
if (file_exists($__byt3lab_css_path) && !in_array($__byt3lab_css_uri, $GLOBALS['byt3lab_assets_printed']['css'])) {
    echo '<link rel="stylesheet" href="' . esc_url($__byt3lab_css_uri) . '" />' . "\n";
    $GLOBALS['byt3lab_assets_printed']['css'][] = $__byt3lab_css_uri;
}
if (file_exists($__byt3lab_js_path) && !in_array($__byt3lab_js_uri, $GLOBALS['byt3lab_assets_printed']['js'])) {
    echo '<script src="' . esc_url($__byt3lab_js_uri) . '"></script>' . "\n";
    $GLOBALS['byt3lab_assets_printed']['js'][] = $__byt3lab_js_uri;
}
?>

<div class="component-conact-body bg-white text-dark">
    <!-- BYT3LAB-CONTENT-START -->
    
    <!-- Hero / Title Header -->
    <section class="py-5 text-center position-relative overflow-hidden" style="background: radial-gradient(circle at bottom left, rgba(2, 132, 199, 0.08), transparent 60%), #ffffff; border-bottom: 1px solid #e2e8f0;">
        <div class="container py-5 position-relative" style="z-index: 2;">
            <span class="text-uppercase tracking-wider fw-bold font-monospace d-block mb-2" style="color: #0284c7;">Prendre Contact</span>
            <h1 class="f-nasalization display-4 fw-bold mb-3" style="color: #0f172a;">Contactez Byt3lab</h1>
            <p class="lead mx-auto" style="max-width: 700px; color: #475569;">
                Vous avez un projet d'ingénierie, de logiciel ou souhaitez planifier une démonstration ? Nos experts sont à votre disposition.
            </p>
        </div>
    </section>

    <!-- Contact & Map Info -->
    <section class="py-5" style="background: #f8fafc;">
        <div class="container py-5 text-start">
             <div class="row g-5">
                <!-- Contact Details -->
                <div class="col-lg-5">
                    <span class="text-uppercase tracking-wider fw-bold font-monospace d-block mb-2" style="color: #0284c7;">Nos Coordonnées</span>
                    <h2 class="f-nasalization h1 fw-bold mb-4" style="color: #0f172a;">Sièges & Bureaux</h2>
                    
                    <div class="mb-4">
                        <h4 class="fw-bold h5 mb-2" style="color: #0f172a;">🏢 Siège Social (Yaoundé / Douala)</h4>
                        <p class="mb-0 small" style="color: #475569;">Cameroun, Afrique Centrale</p>
                    </div>

                    <div class="mb-4">
                        <h4 class="fw-bold h5 mb-2" style="color: #0f172a;">✉️ Email & Support</h4>
                        <p class="mb-0 small">
                            <a href="mailto:contact@byt3lab.com" class="text-decoration-none fw-semibold" style="color: #0284c7 !important;">contact@byt3lab.com</a>
                        </p>
                    </div>

                    <div class="mb-4">
                        <h4 class="fw-bold h5 mb-2" style="color: #0f172a;">📞 Téléphones & WhatsApp</h4>
                        <p class="mb-0 small" style="color: #475569;">
                            <a href="https://wa.me/237696879475" target="_blank" rel="noopener noreferrer" style="color: #0284c7;">WhatsApp</a> : <a href="tel:+237696879475" class="text-decoration-none fw-semibold" style="color: #0284c7 !important;">+237 696 879 475</a><br>
                            <a href="https://wa.me/237652354837" target="_blank" rel="noopener noreferrer" style="color: #0284c7;">WhatsApp</a> : <a href="tel:+237652354837" class="text-decoration-none fw-semibold" style="color: #0284c7 !important;">+237 652 354 837</a>
                        </p>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-7">
                    <div class="p-4 rounded-4" style="background: #ffffff; border: 1px solid #e2e8f0; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03);">
                        <h3 class="h4 fw-bold mb-4" style="color: #0f172a;">Envoyez-nous un Message</h3>
                        <form class="row g-3">
                            <div class="col-12">
                                <input type="text" class="form-control bg-white text-dark border-secondary" placeholder="Votre nom" required style="border-color: #cbd5e1 !important;" />
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control bg-white text-dark border-secondary" placeholder="Votre adresse email" required style="border-color: #cbd5e1 !important;" />
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-white text-dark border-secondary" rows="4" placeholder="Votre message" required style="border-color: #cbd5e1 !important;"></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="a-button a-button--primary btn w-100 py-3 fw-bold text-uppercase">Envoyer le message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BYT3LAB-CONTENT-END -->
</div>