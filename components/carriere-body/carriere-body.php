<?php
// BYT3LAB Builder - auto-include component assets for carriere-body
if (!isset($GLOBALS['byt3lab_assets_printed'])) {
    $GLOBALS['byt3lab_assets_printed'] = ['css' => [], 'js' => []];
}
$__byt3lab_comp_slug = 'carriere-body';
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

<div class="component-carriere-body bg-white text-dark">
    <!-- BYT3LAB-CONTENT-START -->
    
    <!-- Hero / Title Header -->
    <section class="py-5 text-center position-relative overflow-hidden" style="background: radial-gradient(circle at bottom left, rgba(2, 132, 199, 0.08), transparent 60%), #ffffff; border-bottom: 1px solid #e2e8f0;">
        <div class="container py-5 position-relative" style="z-index: 2;">
            <span class="text-uppercase tracking-wider fw-bold font-monospace d-block mb-2" style="color: #0284c7;">Nous Recrutons</span>
            <h1 class="f-nasalization display-4 fw-bold mb-3" style="color: #0f172a;">Rejoignez la Révolution Tech</h1>
            <p class="lead mx-auto" style="max-width: 700px; color: #475569;">
                Bâtissez l'Afrique technologique de demain. Nous offrons un environnement stimulant, agile et orienté vers l'innovation et l'excellence.
            </p>
        </div>
    </section>

    <!-- Work Culture / Values -->
    <section class="py-5" style="background: #f8fafc; border-bottom: 1px solid #e2e8f0;">
        <div class="container py-5 text-start">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="text-uppercase tracking-wider fw-bold font-monospace d-block mb-2" style="color: #0284c7;">Notre ADN</span>
                    <h2 class="f-nasalization h1 fw-bold mb-4" style="color: #0f172a;">Notre Environnement de Travail</h2>
                    <p class="mb-4" style="color: #475569;">
                        Chez Byt3lab, nous valorisons la curiosité intellectuelle, l'autonomie et le travail collaboratif. Nous pensons que chaque ingénieur, designer ou formateur doit avoir l'espace nécessaire pour proposer, créer et exceller.
                    </p>
                    <div class="p-4 rounded-3 mb-3" style="background: #ffffff; border: 1px solid #e2e8f0;">
                        <h4 class="fw-bold h5" style="color: #0f172a;">⭐ Nos Valeurs Fondamentales</h4>
                        <p class="mb-0 small" style="color: #475569;">Excellence technique, innovation locale à impact mondial, intégrité absolue et apprentissage continu.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4 overflow-hidden" style="background: #ffffff; border: 1px solid #e2e8f0; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03);">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/byt3lab1.jpg'); ?>" alt="Équipe Byt3lab Tech" class="img-fluid rounded-3 mb-4 shadow-sm" style="max-height: 220px; width: 100%; object-fit: cover;" />
                        <h3 class="fw-bold mb-3 font-monospace h5" style="color: #0284c7;">>_ les_avantages</h3>
                        <ul class="list-unstyled mb-0" style="color: #475569;">
                            <li class="mb-3 d-flex align-items-start gap-2">
                                <span class="fw-bold font-monospace" style="color: #0284c7;">&gt;</span>
                                Horaires de travail flexibles et télétravail partiel.
                            </li>
                            <li class="mb-3 d-flex align-items-start gap-2">
                                <span class="fw-bold font-monospace" style="color: #0284c7;">&gt;</span>
                                Accès gratuit aux formations internes et certifications.
                            </li>
                            <li class="mb-3 d-flex align-items-start gap-2">
                                <span class="fw-bold font-monospace" style="color: #0284c7;">&gt;</span>
                                Matériel informatique de pointe de votre choix.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Media & LinkedIn Follow Banner for Future Openings -->
    <section class="py-5 text-center position-relative" style="background: radial-gradient(circle at center, rgba(2, 132, 199, 0.08), transparent 70%), #ffffff; border-top: 1px solid #e2e8f0;">
        <div class="container py-4">
            <span class="badge mb-3 px-3 py-2 rounded-pill font-monospace" style="background: rgba(2, 132, 199, 0.1); color: #0284c7; border: 1px solid rgba(2, 132, 199, 0.2);">📢 RESTEZ INFORMÉS & CONNECTÉS</span>
            <h2 class="f-nasalization h1 fw-bold mb-3" style="color: #0f172a;">Suivez Nos Opportunités & Recrutements</h2>
            <p class="mx-auto mb-4 fs-5" style="max-width: 750px; color: #475569;">
                Nous publions régulièrement nos nouveaux postes ouverts, appels à projets et offres de stage sur nos réseaux professionnels. Suivez notre page <strong>LinkedIn</strong> et nos médias sociaux pour ne manquer aucune opportunité !
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="https://www.linkedin.com/company/byt3lab" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-lg py-3 px-5 fw-bold d-inline-flex align-items-center gap-2" style="background-color: #0a66c2; border: none; border-radius: 8px;">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/></svg>
                    Suivre Byt3lab sur LinkedIn
                </a>
                <a href="https://www.facebook.com/profile.php?id=61571483432231" target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary btn-lg py-3 px-5 fw-bold d-inline-flex align-items-center gap-2" style="border-radius: 8px; border-color: #1877F2; color: #1877F2;">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    Suivre sur Facebook
                </a>
            </div>
        </div>
    </section>

    <!-- BYT3LAB-CONTENT-END -->
</div>