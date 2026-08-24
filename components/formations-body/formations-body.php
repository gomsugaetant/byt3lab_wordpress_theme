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
    <section class="py-5 text-center position-relative overflow-hidden" style="background: radial-gradient(circle at bottom left, rgba(2, 132, 199, 0.08), transparent 60%), #ffffff; border-bottom: 1px solid #e2e8f0;">
        <div class="container py-5 position-relative" style="z-index: 2;">
            <span class="text-uppercase tracking-wider fw-bold font-monospace d-block mb-2" style="color: #0284c7;">Académie Technologique</span>
            <h1 class="f-nasalization display-4 fw-bold mb-3" style="color: #0f172a;">Nos Formations Professionnelles</h1>
            <p class="lead mx-auto" style="max-width: 700px; color: #475569;">
                Des compétences 100% pratiques et adaptées aux exigences du marché de l'emploi. Formations dispensées en ligne et en présentiel dans nos différents campus.
            </p>
        </div>
    </section>

    <!-- Training Mode highlights -->
    <section class="py-4" style="background: #f8fafc; border-bottom: 1px solid #e2e8f0;">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-md-6">
                    <div class="p-4 rounded-3 h-100" style="background: #ffffff; border: 1px solid #e2e8f0; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03);">
                        <h3 class="fw-bold h5 mb-2" style="color: #0f172a;">💻 Formations en ligne</h3>
                        <p class="mb-0 small" style="color: #475569;">Cours en visioconférence directe avec des formateurs experts, supports numériques de cours et projets réels à réaliser chaque semaine.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-4 rounded-3 h-100" style="background: #ffffff; border: 1px solid #e2e8f0; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03);">
                        <h3 class="fw-bold h5 mb-2" style="color: #0f172a;">🏢 Formations en présentiel</h3>
                        <p class="mb-0 small" style="color: #475569;">Cours pratiques au sein de nos locaux à Douala et Yaoundé. Laboratoires de dev, tutorat physique et projets d'incubation en équipe.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Training List -->
    <section class="py-5" style="background: #ffffff;">
        <div class="container py-5 text-start">
            <h2 class="f-nasalization h2 fw-bold text-center mb-5" style="color: #0f172a;">Nos Cursus & Sessions</h2>
            <div class="row g-4 justify-content-center">

                <!-- Training 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 rounded-4 overflow-hidden border" style="background: #ffffff; border-color: #e2e8f0 !important; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03);">
                        <div class="p-4" style="background: #f8fafc; border-bottom: 1px solid #e2e8f0;">
                            <span class="badge bg-success mb-2 text-white">SESSION EN COURS</span>
                            <h3 class="h4 fw-bold" style="color: #0f172a;">Fullstack Web (Laravel & React)</h3>
                            <p class="small mb-0" style="color: #475569;">Devenir développeur web professionnel capable d'architecturer des API robustes et des applications dynamiques.</p>
                        </div>
                        <div class="card-body p-4">
                            <ul class="list-unstyled small mb-4" style="color: #475569;">
                                <li class="mb-2">📅 <strong>Durée :</strong> 6 mois (400 heures)</li>
                                <li class="mb-2">📍 <strong>Modalité :</strong> En présentiel & En ligne</li>
                                <li class="mb-2">🎓 <strong>Niveau :</strong> Débutant à Avancé</li>
                            </ul>
                            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-outline-primary w-100 py-2 fw-bold" style="color: #0284c7; border-color: #0284c7;">En savoir plus / S'inscrire</a>
                        </div>
                    </div>
                </div>

                <!-- Training 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 rounded-4 overflow-hidden border" style="background: #ffffff; border-color: #e2e8f0 !important; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03);">
                        <div class="p-4" style="background: #f8fafc; border-bottom: 1px solid #e2e8f0;">
                            <span class="badge bg-warning text-dark mb-2">PROCHAINE SESSION (SEPTEMBRE)</span>
                            <h3 class="h4 fw-bold" style="color: #0f172a;">DevOps & Administration Cloud</h3>
                            <p class="small mb-0" style="color: #475569;">Maîtriser Docker, Kubernetes, Ansible, les architectures AWS et les pipelines CI/CD automatisés.</p>
                        </div>
                        <div class="card-body p-4">
                            <ul class="list-unstyled small mb-4" style="color: #475569;">
                                <li class="mb-2">📅 <strong>Durée :</strong> 3 mois (180 heures)</li>
                                <li class="mb-2">📍 <strong>Modalité :</strong> En ligne</li>
                                <li class="mb-2">🎓 <strong>Niveau :</strong> Intermédiaire</li>
                            </ul>
                            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-outline-primary w-100 py-2 fw-bold" style="color: #0284c7; border-color: #0284c7;">Réserver sa place</a>
                        </div>
                    </div>
                </div>

                <!-- Training 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 rounded-4 overflow-hidden border" style="background: #ffffff; border-color: #e2e8f0 !important; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03);">
                        <div class="p-4" style="background: #f8fafc; border-bottom: 1px solid #e2e8f0;">
                            <span class="badge bg-warning text-dark mb-2">PROCHAINE SESSION (OCTOBRE)</span>
                            <h3 class="h4 fw-bold" style="color: #0f172a;">Fondements de la Cybersécurité</h3>
                            <p class="small mb-0" style="color: #475569;">Apprendre les bases du piratage éthique, des audits de vulnérabilités et de la sécurisation des architectures web.</p>
                        </div>
                        <div class="card-body p-4">
                            <ul class="list-unstyled small mb-4" style="color: #475569;">
                                <li class="mb-2">📅 <strong>Durée :</strong> 4 mois (240 heures)</li>
                                <li class="mb-2">📍 <strong>Modalité :</strong> En présentiel (Douala)</li>
                                <li class="mb-2">🎓 <strong>Niveau :</strong> Débutant à Intermédiaire</li>
                            </ul>
                            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-outline-primary w-100 py-2 fw-bold" style="color: #0284c7; border-color: #0284c7;">Demander le programme</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- BYT3LAB-CONTENT-END -->
</div>