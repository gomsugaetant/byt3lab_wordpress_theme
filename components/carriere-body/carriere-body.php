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
                    <div class="p-4 rounded-4" style="background: #ffffff; border: 1px solid #e2e8f0; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03);">
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

    <!-- Open Positions -->
    <section class="py-5" style="background: #ffffff;">
        <div class="container py-5 text-start">
            <h2 class="f-nasalization h2 fw-bold text-center mb-5" style="color: #0f172a;">Postes Ouverts</h2>
            <div class="row g-4 justify-content-center">

                <!-- Job 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 h-100 rounded-4 d-flex flex-column justify-content-between" style="background: #f8fafc; border: 1px solid #e2e8f0;">
                        <div>
                            <span class="badge bg-info mb-2 text-dark">DÉVELOPPEMENT</span>
                            <h3 class="h4 fw-bold" style="color: #0f172a;">Développeur Full-Stack Senior</h3>
                            <p class="small mb-3" style="color: #64748b;">Douala / Yaoundé, Cameroun (Hybride)</p>
                            <p class="small" style="color: #475569;">Participer au développement et à l'évolution de Melodi ERP et SUKU. Maîtrise de PHP/Laravel, React, Postgres et Docker exigée.</p>
                        </div>
                        <a href="#apply-form" class="btn btn-outline-primary w-100 mt-4 py-2 fw-bold" style="color: #0284c7; border-color: #0284c7;">Postuler</a>
                    </div>
                </div>

                <!-- Job 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 h-100 rounded-4 d-flex flex-column justify-content-between" style="background: #f8fafc; border: 1px solid #e2e8f0;">
                        <div>
                            <span class="badge bg-warning mb-2 text-dark">INFRASTRUCTURE</span>
                            <h3 class="h4 fw-bold" style="color: #0f172a;">Ingénieur Cloud / DevOps</h3>
                            <p class="small mb-3" style="color: #64748b;">Yaoundé, Cameroun (Hybride)</p>
                            <p class="small" style="color: #475569;">Administrer nos infrastructures cloud distribuées. Automatiser nos pipelines de déploiement et monitorer la sécurité de nos plateformes.</p>
                        </div>
                        <a href="#apply-form" class="btn btn-outline-primary w-100 mt-4 py-2 fw-bold" style="color: #0284c7; border-color: #0284c7;">Postuler</a>
                    </div>
                </div>

                <!-- Job 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 h-100 rounded-4 d-flex flex-column justify-content-between" style="background: #f8fafc; border: 1px solid #e2e8f0;">
                        <div>
                            <span class="badge bg-success mb-2 text-white">EDUCATION</span>
                            <h3 class="h4 fw-bold" style="color: #0f172a;">Formateur Tech & Mentor</h3>
                            <p class="small mb-3" style="color: #64748b;">Douala, Cameroun (Présentiel)</p>
                            <p class="small" style="color: #475569;">Animer nos cursus de développement et d'administration système. Accompagner et mentorer nos apprenants sur des projets de groupe.</p>
                        </div>
                        <a href="#apply-form" class="btn btn-outline-primary w-100 mt-4 py-2 fw-bold" style="color: #0284c7; border-color: #0284c7;">Postuler</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Application Form -->
    <section class="py-5" id="apply-form" style="background: #f8fafc; border-top: 1px solid #e2e8f0;">
        <div class="container py-5">
            <div class="row justify-content-center text-start">
                <div class="col-lg-8">
                    <div class="p-5 rounded-4" style="background: #ffffff; border: 1px solid #e2e8f0; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03);">
                        <h2 class="f-nasalization h2 text-center fw-bold mb-4" style="color: #0f172a;">Candidature Spontanée / Postuler</h2>
                        <form class="row g-4" enctype="multipart/form-data" method="POST">
                            <div class="col-md-6">
                                <label for="name" class="form-label" style="color: #475569;">Nom Complet</label>
                                <input type="text" class="form-control bg-white text-dark border-secondary" id="name" required style="border-color: #cbd5e1 !important;" />
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label" style="color: #475569;">Adresse Email</label>
                                <input type="email" class="form-control bg-white text-dark border-secondary" id="email" required style="border-color: #cbd5e1 !important;" />
                            </div>
                            <div class="col-md-6">
                                <label for="role" class="form-label" style="color: #475569;">Poste Cible</label>
                                <select class="form-select bg-white text-dark border-secondary" id="role" style="border-color: #cbd5e1 !important;">
                                    <option value="spontaneous">Candidature Spontanée</option>
                                    <option value="fullstack">Développeur Full-Stack Senior</option>
                                    <option value="devops">Ingénieur Cloud / DevOps</option>
                                    <option value="trainer">Formateur Tech</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="cv" class="form-label" style="color: #475569;">Curriculum Vitae (PDF)</label>
                                <input type="file" class="form-control bg-white text-dark border-secondary" id="cv" required style="border-color: #cbd5e1 !important;" />
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label" style="color: #475569;">Message de Motivation</label>
                                <textarea class="form-control bg-white text-dark border-secondary" id="message" rows="4" style="border-color: #cbd5e1 !important;"></textarea>
                            </div>
                            <div class="col-12 text-center mt-4">
                                <button type="submit" class="a-button a-button--primary btn btn-lg px-5 py-3 fw-bold text-uppercase">Soumettre ma candidature</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BYT3LAB-CONTENT-END -->
</div>