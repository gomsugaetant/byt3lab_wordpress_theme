<?php
// BYT3LAB Builder - auto-include component assets for autodidakt-body
if (!isset($GLOBALS['byt3lab_assets_printed'])) {
    $GLOBALS['byt3lab_assets_printed'] = ['css' => [], 'js' => []];
}
$__byt3lab_comp_slug = 'autodidakt-body';
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

<div class="component-autodidakt-body bg-white text-dark">
    <!-- BYT3LAB-CONTENT-START -->
    
    <!-- Hero / Header Section -->
    <section class="py-5 text-center position-relative overflow-hidden" style="background: radial-gradient(circle at top right, rgba(16, 185, 129, 0.1), transparent 60%), #ffffff; border-bottom: 1px solid #e2e8f0;">
        <div class="container py-5 position-relative" style="z-index: 2;">
            <span class="badge mb-3 px-3 py-2 rounded-pill font-monospace" style="background: rgba(16, 185, 129, 0.1); color: #059669; border: 1px solid rgba(16, 185, 129, 0.2);">🎓 ACADÉMIE PRATIQUE & AUTOFORMATION</span>
            <h1 class="f-nasalization display-3 fw-bold mb-4" style="color: #0f172a;">Autodidakt</h1>
            <p class="lead mx-auto mb-4 fs-4" style="max-width: 850px; color: #475569;">
                Plateforme de partage de connaissances et de formations pratiques dédiée à l’autoformation et à l’entrepreneuriat digital en Afrique.
            </p>
            <div class="d-flex gap-3 justify-content-center flex-wrap mt-4">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="a-button a-button--primary btn btn-lg py-3 px-5 fw-bold text-uppercase" style="border-radius: 8px; background-color: #059669 !important; border: none;">S'inscrire à une Session</a>
                <a href="https://www.facebook.com/profile.php?id=61579514585585" target="_blank" rel="noopener noreferrer" class="btn btn-outline-success btn-lg py-3 px-5 fw-bold text-uppercase" style="border-radius: 8px; border-color: #059669; color: #059669;">
                    <svg width="20" height="20" fill="currentColor" class="me-2" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    Page Facebook Autodidakt
                </a>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="py-5" style="background: #f8fafc; border-bottom: 1px solid #e2e8f0;">
        <div class="container py-4 text-start">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="text-uppercase tracking-wider fw-bold font-monospace d-block mb-2" style="color: #059669;">Notre Philosophie</span>
                    <h2 class="f-nasalization h1 fw-bold mb-4" style="color: #0f172a;">L'Apprentissage Par l'Action & la Pratique</h2>
                    <p class="fs-5 mb-4" style="color: #475569;">
                        Chez <strong>Autodidakt</strong>, nous croyons que la meilleure manière d'apprendre est de pratiquer. Notre mission est de permettre à chaque jeune, étudiant, professionnel et entrepreneur d'acquérir l'autonomie et les compétences clés pour réussir en Afrique.
                    </p>
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex align-items-start gap-3 p-3 rounded-3" style="background: #ffffff; border: 1px solid #e2e8f0;">
                            <div class="p-2 rounded-2" style="background: rgba(16, 185, 129, 0.1); color: #059669;">
                                <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <div>
                                <h3 class="h6 fw-bold mb-1" style="color: #0f172a;">100% Pratique & Projets Réels</h3>
                                <p class="small mb-0" style="color: #64748b;">Pas de théories abstraites : des exercices concrets et des cas d'études du marché africain.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-3 p-3 rounded-3" style="background: #ffffff; border: 1px solid #e2e8f0;">
                            <div class="p-2 rounded-2" style="background: rgba(16, 185, 129, 0.1); color: #059669;">
                                <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <div>
                                <h3 class="h6 fw-bold mb-1" style="color: #0f172a;">Mentorat & Communauté</h3>
                                <p class="small mb-0" style="color: #64748b;">Accès à un réseau d'entraide entre apprenants et un suivi personnalisé par des formateurs d'expérience.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4 position-relative text-white overflow-hidden" style="background: linear-gradient(135deg, #059669 0%, #047857 100%); box-shadow: 0 10px 30px -10px rgba(5, 150, 105, 0.4);">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/autodidakt.jpg'); ?>" alt="Autodidakt Académie" class="img-fluid rounded-3 mb-3 shadow" style="max-height: 220px; width: 100%; object-fit: cover;" />
                        <h3 class="f-nasalization h2 fw-bold mb-2">Autodidakt Yaoundé</h3>
                        <p class="fs-6 opacity-90 mb-3">
                            "Permettre à chacun d'être maître de son apprentissage, d'entreprendre avec confiance et de créer de la valeur concrète."
                        </p>
                        <div class="pt-3 border-top border-white border-opacity-25 d-flex align-items-center justify-content-between">
                            <span class="small font-monospace text-uppercase">Formations & Atelier</span>
                            <span class="badge bg-white text-success font-monospace fw-bold">CAMEROUN & EN LIGNE</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Training Domains Section -->
    <section class="py-5" style="background: #ffffff;">
        <div class="container py-5 text-start">
            <div class="row mb-5 text-center">
                <div class="col-12">
                    <span class="text-uppercase tracking-wider fw-bold font-monospace d-block mb-2" style="color: #059669;">Pôles de Compétences</span>
                    <h2 class="f-nasalization h1 fw-bold" style="color: #0f172a;">Nos Domaines de Formation Pratique</h2>
                    <p class="mx-auto mt-2" style="max-width: 650px; color: #64748b;">
                        Quatre piliers essentiels pour vous former, vous perfectionner et lancer vos projets avec succès.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Domain 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 h-100 rounded-4 border d-flex flex-column justify-content-between" style="background: #f8fafc; border-color: #e2e8f0 !important; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='none'">
                        <div>
                            <div class="mb-4 d-inline-block p-3 rounded-3" style="background: rgba(16, 185, 129, 0.1); color: #059669;">
                                <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                            </div>
                            <h3 class="h5 fw-bold mb-3" style="color: #0f172a;">Développement Personnel</h3>
                            <p class="small mb-0" style="color: #475569;">
                                Discipline personnelle, gestion du temps et des priorités, prise de parole en public, leadership et communication d'impact.
                            </p>
                        </div>
                        <div class="pt-4 mt-3 border-top border-200">
                            <span class="badge bg-success-subtle text-success small">ATELIERS & COACHING</span>
                        </div>
                    </div>
                </div>

                <!-- Domain 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 h-100 rounded-4 border d-flex flex-column justify-content-between" style="background: #f8fafc; border-color: #e2e8f0 !important; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='none'">
                        <div>
                            <div class="mb-4 d-inline-block p-3 rounded-3" style="background: rgba(16, 185, 129, 0.1); color: #059669;">
                                <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <h3 class="h5 fw-bold mb-3" style="color: #0f172a;">Finance Pratique</h3>
                            <p class="small mb-0" style="color: #475569;">
                                Éducation financière, gestion de trésorerie personnelle et d'entreprise, comptabilité pratique et principes d'investissement.
                            </p>
                        </div>
                        <div class="pt-4 mt-3 border-top border-200">
                            <span class="badge bg-success-subtle text-success small">CURSUS PRATIQUE</span>
                        </div>
                    </div>
                </div>

                <!-- Domain 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 h-100 rounded-4 border d-flex flex-column justify-content-between" style="background: #f8fafc; border-color: #e2e8f0 !important; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='none'">
                        <div>
                            <div class="mb-4 d-inline-block p-3 rounded-3" style="background: rgba(16, 185, 129, 0.1); color: #059669;">
                                <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <h3 class="h5 fw-bold mb-3" style="color: #0f172a;">Business & Entrepreneuriat</h3>
                            <p class="small mb-0" style="color: #475569;">
                                Montage de projet, modélisation de Business Model, techniques de vente, prospection commerciale et gestion de business.
                            </p>
                        </div>
                        <div class="pt-4 mt-3 border-top border-200">
                            <span class="badge bg-success-subtle text-success small">BOOTCAMP & INCUBATION</span>
                        </div>
                    </div>
                </div>

                <!-- Domain 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 h-100 rounded-4 border d-flex flex-column justify-content-between" style="background: #f8fafc; border-color: #e2e8f0 !important; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='none'">
                        <div>
                            <div class="mb-4 d-inline-block p-3 rounded-3" style="background: rgba(16, 185, 129, 0.1); color: #059669;">
                                <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <h3 class="h5 fw-bold mb-3" style="color: #0f172a;">Digital & Technologies</h3>
                            <p class="small mb-0" style="color: #475569;">
                                Compétences numériques, création de sites web/mobiles, outils de productivité et marketing digital appliqué.
                            </p>
                        </div>
                        <div class="pt-4 mt-3 border-top border-200">
                            <span class="badge bg-success-subtle text-success small">IMMERSION TECH</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Community Banner -->
    <section class="py-5" style="background: #f8fafc; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
        <div class="container py-4 text-center">
            <h2 class="f-nasalization h1 fw-bold mb-3" style="color: #0f172a;">Rejoignez la Communauté Autodidakt</h2>
            <p class="mx-auto mb-4 fs-5" style="max-width: 700px; color: #475569;">
                Suivez nos publications quotidiennes, astuces pratiques, événements et opportunités directement sur notre page officielle Facebook.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="https://www.facebook.com/profile.php?id=61579514585585" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-lg py-3 px-5 fw-bold" style="background-color: #1877F2; border: none; border-radius: 8px;">
                    <svg width="20" height="20" fill="currentColor" class="me-2" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    Suivre Autodidakt sur Facebook
                </a>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-outline-dark btn-lg py-3 px-5 fw-bold" style="border-radius: 8px;">Nous Contacter</a>
            </div>
        </div>
    </section>

    <!-- BYT3LAB-CONTENT-END -->
</div>