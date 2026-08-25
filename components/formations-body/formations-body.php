<?php
// BYT3LAB Builder - auto-include component assets for formations-body
if (!isset($GLOBALS['byt3lab_assets_printed'])) {
    $GLOBALS['byt3lab_assets_printed'] = ['css' => [], 'js' => []];
}
$__byt3lab_comp_slug = 'formations-body';
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

<div class="component-formations-body bg-white text-dark">
    <!-- BYT3LAB-CONTENT-START -->
    
    <!-- Hero / Title Header -->
    <section class="py-5 text-center position-relative overflow-hidden" style="background: radial-gradient(circle at bottom left, rgba(16, 185, 129, 0.08), transparent 60%), #ffffff; border-bottom: 1px solid #e2e8f0;">
        <div class="container py-5 position-relative" style="z-index: 2;">
            <span class="badge mb-3 px-3 py-2 rounded-pill font-monospace" style="background: rgba(16, 185, 129, 0.1); color: #059669; border: 1px solid rgba(16, 185, 129, 0.2);">🎓 BRANCHE ACADÉMIE - AUTODIDAKT</span>
            <h1 class="f-nasalization display-4 fw-bold mb-3" style="color: #0f172a;">Formations 100% Axées sur la Pratique</h1>
            <p class="lead mx-auto" style="max-width: 750px; color: #475569;">
                Développez des compétences concrètes et immédiatement applicables à travers nos cursus en <strong>Développement Personnel</strong>, <strong>Finance</strong>, <strong>Business & Entrepreneuriat</strong> et <strong>Ingénierie Tech</strong>.
            </p>
        </div>
    </section>

    <!-- Training Mode highlights -->
    <section class="py-4" style="background: #f8fafc; border-bottom: 1px solid #e2e8f0;">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <div class="p-4 rounded-3 h-100" style="background: #ffffff; border: 1px solid #e2e8f0; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03);">
                        <h3 class="fw-bold h5 mb-2" style="color: #0f172a;">🚀 Pratique Immédiate</h3>
                        <p class="mb-0 small" style="color: #475569;">Apprentissage par l'action : études de cas réelles, ateliers intensifs et projets d'application directe.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 rounded-3 h-100" style="background: #ffffff; border: 1px solid #e2e8f0; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03);">
                        <h3 class="fw-bold h5 mb-2" style="color: #0f172a;">💻 Formations en ligne</h3>
                        <p class="mb-0 small" style="color: #475569;">Session en visioconférence directe avec des formateurs experts et suivi individuel régulier.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 rounded-3 h-100" style="background: #ffffff; border: 1px solid #e2e8f0; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03);">
                        <h3 class="fw-bold h5 mb-2" style="color: #0f172a;">🏢 Formations en présentiel</h3>
                        <p class="mb-0 small" style="color: #475569;">Sessions immersives et ateliers pratiques au sein de nos locaux à Douala et Yaoundé.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Training List -->
    <section class="py-5" style="background: #ffffff;">
        <div class="container py-5 text-start">
            <h2 class="f-nasalization h2 fw-bold text-center mb-5" style="color: #0f172a;">Nos Domaines de Formation (Autodidakt)</h2>
            <div class="row g-4 justify-content-center">

                <!-- Training 1: Développement Personnel -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 rounded-4 overflow-hidden border" style="background: #ffffff; border-color: #e2e8f0 !important; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03);">
                        <div class="p-4" style="background: #f8fafc; border-bottom: 1px solid #e2e8f0;">
                            <span class="badge bg-success mb-2 text-white">AUTODIDAKT</span>
                            <h3 class="h4 fw-bold" style="color: #0f172a;">Développement Personnel & Leadership</h3>
                            <p class="small mb-0" style="color: #475569;">Gestion du temps, prise de parole en public, discipline personnelle, communication d'impact et préparation mentale.</p>
                        </div>
                        <div class="card-body p-4">
                            <ul class="list-unstyled small mb-4" style="color: #475569;">
                                <li class="mb-2">📅 <strong>Format :</strong> Ateliers & Coaching</li>
                                <li class="mb-2">📍 <strong>Modalité :</strong> En ligne & Présentiel</li>
                                <li class="mb-2">🎯 <strong>Objectif :</strong> Efficacité & Leadership</li>
                            </ul>
                            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-outline-success w-100 py-2 fw-bold" style="color: #059669; border-color: #059669;">S'inscrire à Autodidakt</a>
                        </div>
                    </div>
                </div>

                <!-- Training 2: Finance -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 rounded-4 overflow-hidden border" style="background: #ffffff; border-color: #e2e8f0 !important; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03);">
                        <div class="p-4" style="background: #f8fafc; border-bottom: 1px solid #e2e8f0;">
                            <span class="badge bg-success mb-2 text-white">AUTODIDAKT</span>
                            <h3 class="h4 fw-bold" style="color: #0f172a;">Finance Pratique & Gestion</h3>
                            <p class="small mb-0" style="color: #475569;">Comptabilité pratique d'entreprise, gestion de trésorerie, budgétisation et stratégies d'investissement.</p>
                        </div>
                        <div class="card-body p-4">
                            <ul class="list-unstyled small mb-4" style="color: #475569;">
                                <li class="mb-2">📅 <strong>Format :</strong> Cursus Intensif (2 à 3 mois)</li>
                                <li class="mb-2">📍 <strong>Modalité :</strong> En ligne & Présentiel</li>
                                <li class="mb-2">🎯 <strong>Objectif :</strong> Maîtrise financière</li>
                            </ul>
                            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-outline-success w-100 py-2 fw-bold" style="color: #059669; border-color: #059669;">Rejoindre la session Finance</a>
                        </div>
                    </div>
                </div>

                <!-- Training 3: Business & Entrepreneuriat -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 rounded-4 overflow-hidden border" style="background: #ffffff; border-color: #e2e8f0 !important; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03);">
                        <div class="p-4" style="background: #f8fafc; border-bottom: 1px solid #e2e8f0;">
                            <span class="badge bg-success mb-2 text-white">AUTODIDAKT</span>
                            <h3 class="h4 fw-bold" style="color: #0f172a;">Business & Stratégie Commerciale</h3>
                            <p class="small mb-0" style="color: #475569;">Création d'entreprise, négociation commerciale, prospection efficace, modélisation de Business Model et vente.</p>
                        </div>
                        <div class="card-body p-4">
                            <ul class="list-unstyled small mb-4" style="color: #475569;">
                                <li class="mb-2">📅 <strong>Format :</strong> Incubation & Bootcamp</li>
                                <li class="mb-2">📍 <strong>Modalité :</strong> En ligne & Présentiel</li>
                                <li class="mb-2">🎯 <strong>Objectif :</strong> Créer & Scaler son Business</li>
                            </ul>
                            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-outline-success w-100 py-2 fw-bold" style="color: #059669; border-color: #059669;">S'inscrire au Bootcamp Business</a>
                        </div>
                    </div>
                </div>

                <!-- Training 4: Fullstack Web -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 rounded-4 overflow-hidden border" style="background: #ffffff; border-color: #e2e8f0 !important; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03);">
                        <div class="p-4" style="background: #f8fafc; border-bottom: 1px solid #e2e8f0;">
                            <span class="badge bg-primary mb-2 text-white">TECH ACADEMY</span>
                            <h3 class="h4 fw-bold" style="color: #0f172a;">Fullstack Web & Mobile</h3>
                            <p class="small mb-0" style="color: #475569;">Développement d'applications modernes (Laravel, React, Flutter) avec projets réels d'entreprise.</p>
                        </div>
                        <div class="card-body p-4">
                            <ul class="list-unstyled small mb-4" style="color: #475569;">
                                <li class="mb-2">📅 <strong>Durée :</strong> 6 mois (400 heures)</li>
                                <li class="mb-2">📍 <strong>Modalité :</strong> Présentiel & En ligne</li>
                                <li class="mb-2">🎯 <strong>Objectif :</strong> Devenir Développeur Pro</li>
                            </ul>
                            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-outline-primary w-100 py-2 fw-bold" style="color: #0284c7; border-color: #0284c7;">En savoir plus / S'inscrire</a>
                        </div>
                    </div>
                </div>

                <!-- Training 5: DevOps & Cloud -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 rounded-4 overflow-hidden border" style="background: #ffffff; border-color: #e2e8f0 !important; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03);">
                        <div class="p-4" style="background: #f8fafc; border-bottom: 1px solid #e2e8f0;">
                            <span class="badge bg-primary mb-2 text-white">TECH ACADEMY</span>
                            <h3 class="h4 fw-bold" style="color: #0f172a;">DevOps & Cloud Administration</h3>
                            <p class="small mb-0" style="color: #475569;">Maîtriser Docker, Kubernetes, CI/CD et déploiement de serveurs haute disponibilité.</p>
                        </div>
                        <div class="card-body p-4">
                            <ul class="list-unstyled small mb-4" style="color: #475569;">
                                <li class="mb-2">📅 <strong>Durée :</strong> 3 mois (180 heures)</li>
                                <li class="mb-2">📍 <strong>Modalité :</strong> En ligne</li>
                                <li class="mb-2">🎯 <strong>Objectif :</strong> Administrateur Cloud</li>
                            </ul>
                            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-outline-primary w-100 py-2 fw-bold" style="color: #0284c7; border-color: #0284c7;">Réserver sa place</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- BYT3LAB-CONTENT-END -->
</div>