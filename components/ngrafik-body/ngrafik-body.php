<?php
// BYT3LAB Builder - auto-include component assets for ngrafik-body
if (!isset($GLOBALS['byt3lab_assets_printed'])) {
    $GLOBALS['byt3lab_assets_printed'] = ['css' => [], 'js' => []];
}
$__byt3lab_comp_slug = 'ngrafik-body';
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

<div class="component-ngrafik-body bg-white text-dark">
    <!-- BYT3LAB-CONTENT-START -->
    
    <!-- Hero / Header Section -->
    <section class="py-5 text-center position-relative overflow-hidden" style="background: radial-gradient(circle at top right, rgba(147, 51, 234, 0.1), transparent 60%), #ffffff; border-bottom: 1px solid #e2e8f0;">
        <div class="container py-5 position-relative" style="z-index: 2;">
            <span class="badge mb-3 px-3 py-2 rounded-pill font-monospace" style="background: rgba(147, 51, 234, 0.1); color: #9333ea; border: 1px solid rgba(147, 51, 234, 0.2);">🎨 AGENCE CRÉATIVE AFRO-CENTRIC</span>
            <h1 class="f-nasalization display-3 fw-bold mb-4" style="color: #0f172a;">Ngrafix</h1>
            <p class="lead mx-auto mb-4 fs-4" style="max-width: 850px; color: #475569;">
                Nous aidons les entrepreneurs et entreprises africaines à construire une image forte, moderne et mémorable grâce à une expertise complète en branding, design & création de contenu.
            </p>
            <div class="d-flex gap-3 justify-content-center flex-wrap mt-4">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="a-button a-button--primary btn btn-lg py-3 px-5 fw-bold text-uppercase" style="border-radius: 8px; background-color: #9333ea !important; border: none;">Demander un Devis</a>
                <a href="https://www.facebook.com/profile.php?id=61571483432231" target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary btn-lg py-3 px-5 fw-bold text-uppercase" style="border-radius: 8px; border-color: #9333ea; color: #9333ea;">
                    <svg width="20" height="20" fill="currentColor" class="me-2" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    Page Facebook Ngrafix
                </a>
            </div>
        </div>
    </section>

    <!-- Mission & Positioning Section -->
    <section class="py-5" style="background: #f8fafc; border-bottom: 1px solid #e2e8f0;">
        <div class="container py-4 text-start">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="text-uppercase tracking-wider fw-bold font-monospace d-block mb-2" style="color: #9333ea;">Notre Identité</span>
                    <h2 class="f-nasalization h1 fw-bold mb-4" style="color: #0f172a;">Propulser la Marque Africaine au Niveau International</h2>
                    <p class="fs-5 mb-4" style="color: #475569;">
                        <strong>Ngrafix</strong> est l'agence média et créative du groupe Byt3lab. Notre mission est d'apporter aux entrepreneurs, marques et organisations une esthétique visuelle d'excellence qui inspire confiance et capte l'attention.
                    </p>
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex align-items-start gap-3 p-3 rounded-3" style="background: #ffffff; border: 1px solid #e2e8f0;">
                            <div class="p-2 rounded-2" style="background: rgba(147, 51, 234, 0.1); color: #9333ea;">
                                <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <div>
                                <h3 class="h6 fw-bold mb-1" style="color: #0f172a;">Esthétique Afro-centric & Moderne</h3>
                                <p class="small mb-0" style="color: #64748b;">Des créations visuelles qui subliment l'identité et les valeurs des projets africains.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-3 p-3 rounded-3" style="background: #ffffff; border: 1px solid #e2e8f0;">
                            <div class="p-2 rounded-2" style="background: rgba(147, 51, 234, 0.1); color: #9333ea;">
                                <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <div>
                                <h3 class="h6 fw-bold mb-1" style="color: #0f172a;">Impact & Conversion</h3>
                                <p class="small mb-0" style="color: #64748b;">Chaque visuel et vidéo est pensé pour capter votre audience et générer des résultats.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4 position-relative text-white overflow-hidden" style="background: linear-gradient(135deg, #9333ea 0%, #7e22ce 100%); box-shadow: 0 10px 30px -10px rgba(147, 51, 234, 0.4);">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/ngrafix.jpg'); ?>" alt="Ngrafix Visual Identity" class="img-fluid rounded-3 mb-3 shadow" style="max-height: 220px; width: 100%; object-fit: cover;" />
                        <h3 class="f-nasalization h2 fw-bold mb-2">Ngrafix Yaoundé</h3>
                        <p class="fs-6 opacity-90 mb-3">
                            "Une image mémorable est le meilleur levier pour transformer une simple idée en une marque de référence."
                        </p>
                        <div class="pt-3 border-top border-white border-opacity-25 d-flex align-items-center justify-content-between">
                            <span class="small font-monospace text-uppercase">Branding & Media House</span>
                            <span class="badge bg-white text-dark font-monospace fw-bold">CAMEROUN & INTERNATIONAL</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid Section -->
    <section class="py-5" style="background: #ffffff;">
        <div class="container py-5 text-start">
            <div class="row mb-5 text-center">
                <div class="col-12">
                    <span class="text-uppercase tracking-wider fw-bold font-monospace d-block mb-2" style="color: #9333ea;">Services & Expertises</span>
                    <h2 class="f-nasalization h1 fw-bold" style="color: #0f172a;">Ce Que Nous Créons Pour Vous</h2>
                    <p class="mx-auto mt-2" style="max-width: 650px; color: #64748b;">
                        Une gamme complète de prestations créatives pour sublimer votre présence physique et digitale.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Service 1: Branding -->
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 h-100 rounded-4 border d-flex flex-column justify-content-between" style="background: #f8fafc; border-color: #e2e8f0 !important; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='none'">
                        <div>
                            <div class="mb-4 d-inline-block p-3 rounded-3" style="background: rgba(147, 51, 234, 0.1); color: #9333ea;">
                                <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/></svg>
                            </div>
                            <h3 class="h5 fw-bold mb-3" style="color: #0f172a;">Branding & Identité Visuelle</h3>
                            <p class="small mb-0" style="color: #475569;">
                                Confection de logos uniques, chartes graphiques complètes, palettes de couleurs, typographies d'entreprise et guides de marque.
                            </p>
                        </div>
                        <div class="pt-4 mt-3 border-top border-200">
                            <span class="badge bg-purple-subtle text-purple small" style="background: rgba(147, 51, 234, 0.1); color: #9333ea;">LOGOS & CHARTE GRAPHIQUE</span>
                        </div>
                    </div>
                </div>

                <!-- Service 2: Infographie & Design Graphique -->
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 h-100 rounded-4 border d-flex flex-column justify-content-between" style="background: #f8fafc; border-color: #e2e8f0 !important; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='none'">
                        <div>
                            <div class="mb-4 d-inline-block p-3 rounded-3" style="background: rgba(147, 51, 234, 0.1); color: #9333ea;">
                                <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            </div>
                            <h3 class="h5 fw-bold mb-3" style="color: #0f172a;">Design Graphique & Print</h3>
                            <p class="small mb-0" style="color: #475569;">
                                Infographies, affiches publicitaires, flyers événementiels, bannières, plaquettes institutionnelles, catalogues et cartes de visite.
                            </p>
                        </div>
                        <div class="pt-4 mt-3 border-top border-200">
                            <span class="badge bg-purple-subtle text-purple small" style="background: rgba(147, 51, 234, 0.1); color: #9333ea;">SUPPORTS IMPRIMÉS & DIGITAL</span>
                        </div>
                    </div>
                </div>

                <!-- Service 3: Création de Contenu -->
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 h-100 rounded-4 border d-flex flex-column justify-content-between" style="background: #f8fafc; border-color: #e2e8f0 !important; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='none'">
                        <div>
                            <div class="mb-4 d-inline-block p-3 rounded-3" style="background: rgba(147, 51, 234, 0.1); color: #9333ea;">
                                <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                            </div>
                            <h3 class="h5 fw-bold mb-3" style="color: #0f172a;">Création de Contenu Social Media</h3>
                            <p class="small mb-0" style="color: #475569;">
                                Visuels captivants et déclinés pour Facebook, Instagram, LinkedIn et TikTok. Storytelling visuel et visuels de campagnes publicitaires.
                            </p>
                        </div>
                        <div class="pt-4 mt-3 border-top border-200">
                            <span class="badge bg-purple-subtle text-purple small" style="background: rgba(147, 51, 234, 0.1); color: #9333ea;">MÉDIAS SOCIAUX & ADS</span>
                        </div>
                    </div>
                </div>

                <!-- Service 4: UI/UX & Webdesign -->
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 h-100 rounded-4 border d-flex flex-column justify-content-between" style="background: #f8fafc; border-color: #e2e8f0 !important; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='none'">
                        <div>
                            <div class="mb-4 d-inline-block p-3 rounded-3" style="background: rgba(147, 51, 234, 0.1); color: #9333ea;">
                                <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <h3 class="h5 fw-bold mb-3" style="color: #0f172a;">UI/UX & Webdesign</h3>
                            <p class="small mb-0" style="color: #475569;">
                                Conception d'interfaces utilisateur (UI) modernes et captivantes, prototypage Figma, wireframes et design d'expérience utilisateur (UX) pour sites et applications.
                            </p>
                        </div>
                        <div class="pt-4 mt-3 border-top border-200">
                            <span class="badge bg-purple-subtle text-purple small" style="background: rgba(147, 51, 234, 0.1); color: #9333ea;">DESIGN WEBSITES & APPS</span>
                        </div>
                    </div>
                </div>

                <!-- Service 5: Édition Vidéo -->
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 h-100 rounded-4 border d-flex flex-column justify-content-between" style="background: #f8fafc; border-color: #e2e8f0 !important; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='none'">
                        <div>
                            <div class="mb-4 d-inline-block p-3 rounded-3" style="background: rgba(147, 51, 234, 0.1); color: #9333ea;">
                                <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                            </div>
                            <h3 class="h5 fw-bold mb-3" style="color: #0f172a;">Montage & Édition Vidéo</h3>
                            <p class="small mb-0" style="color: #475569;">
                                Édition et montage vidéo haut de gamme : spots promotionnels, capsules vidéo d'entreprise, reels/shorts immersifs et habillages vidéo.
                            </p>
                        </div>
                        <div class="pt-4 mt-3 border-top border-200">
                            <span class="badge bg-purple-subtle text-purple small" style="background: rgba(147, 51, 234, 0.1); color: #9333ea;">SPOTS & REELS VIDÉO</span>
                        </div>
                    </div>
                </div>

                <!-- Service 6: Modélisation 2D / 3D -->
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 h-100 rounded-4 border d-flex flex-column justify-content-between" style="background: #f8fafc; border-color: #e2e8f0 !important; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='none'">
                        <div>
                            <div class="mb-4 d-inline-block p-3 rounded-3" style="background: rgba(147, 51, 234, 0.1); color: #9333ea;">
                                <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                            </div>
                            <h3 class="h5 fw-bold mb-3" style="color: #0f172a;">Modélisation & Animation 2D / 3D</h3>
                            <p class="small mb-0" style="color: #475569;">
                                Conception 3D photoréaliste de produits, animations 2D/3D de logos, modélisation d'espaces et animations motion design d'impact.
                            </p>
                        </div>
                        <div class="pt-4 mt-3 border-top border-200">
                            <span class="badge bg-purple-subtle text-purple small" style="background: rgba(147, 51, 234, 0.1); color: #9333ea;">3D PRODUCT & MOTION DESIGN</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Community Banner -->
    <section class="py-5" style="background: #f8fafc; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
        <div class="container py-4 text-center">
            <h2 class="f-nasalization h1 fw-bold mb-3" style="color: #0f172a;">Suivez Nos Créations Sur Facebook</h2>
            <p class="mx-auto mb-4 fs-5" style="max-width: 700px; color: #475569;">
                Découvrez nos derniers projets de branding, nos portfolios créatifs et contactez directement l'équipe Ngrafix.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="https://www.facebook.com/profile.php?id=61571483432231" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-lg py-3 px-5 fw-bold" style="background-color: #1877F2; border: none; border-radius: 8px;">
                    <svg width="20" height="20" fill="currentColor" class="me-2" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    Voir la Page Facebook Ngrafix
                </a>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-outline-dark btn-lg py-3 px-5 fw-bold" style="border-radius: 8px;">Demander un Devis Créatif</a>
            </div>
        </div>
    </section>

    <!-- BYT3LAB-CONTENT-END -->
</div>