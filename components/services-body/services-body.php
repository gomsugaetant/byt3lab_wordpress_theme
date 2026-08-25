<?php
// BYT3LAB Builder - auto-include component assets for services-body
if (!isset($GLOBALS['byt3lab_assets_printed'])) {
    $GLOBALS['byt3lab_assets_printed'] = ['css' => [], 'js' => []];
}
$__byt3lab_comp_slug = 'services-body';
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

<div class="component-services-body bg-white text-dark">
    <!-- BYT3LAB-CONTENT-START -->
    
    <!-- Hero / Title Header -->
    <section class="py-5 text-center position-relative overflow-hidden" style="background: radial-gradient(circle at bottom left, rgba(2, 132, 199, 0.08), transparent 60%), #ffffff; border-bottom: 1px solid #e2e8f0;">
        <div class="container py-5 position-relative" style="z-index: 2;">
            <span class="text-uppercase tracking-wider fw-bold font-monospace d-block mb-2" style="color: #0284c7;">Notre Expertise</span>
            <h1 class="f-nasalization display-4 fw-bold mb-3" style="color: #0f172a;">Nos Services & Ingénierie</h1>
            <p class="lead mx-auto" style="max-width: 700px; color: #475569;">
                Des architectures logicielles modernes, robustes et hautement sécurisées pour accélérer la croissance de vos projets technologiques.
            </p>
        </div>
    </section>

    <!-- Services Details Section -->
    <section class="py-5" style="background: #f8fafc;">
        <div class="container py-5">
            <div class="row g-4 text-start justify-content-center">
                <!-- Service 1: Ingénierie Logicielle -->
                <div class="col-md-6 col-lg-4">
                    <div class="p-5 h-100 rounded-4" style="background: #ffffff; border: 1px solid #e2e8f0; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03); transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='none'">
                        <div class="mb-4 d-inline-block p-3 rounded-3" style="background: rgba(2, 132, 199, 0.08); color: #0284c7;">
                            <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                        </div>
                        <h3 class="h4 fw-bold mb-3" style="color: #0f172a;">Ingénierie Logicielle</h3>
                        <p class="small mb-0" style="color: #475569;">
                            Conception et développement de sites web modernes, de progiciels modulaires, d'applications mobiles performantes (Flutter, iOS, Android) et de plateformes SaaS sur-mesure adaptées à vos processus d'entreprise.
                        </p>
                    </div>
                </div>

                <!-- Service 2: Réseaux & Cybersécurité -->
                <div class="col-md-6 col-lg-4">
                    <div class="p-5 h-100 rounded-4" style="background: #ffffff; border: 1px solid #e2e8f0; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03); transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='none'">
                        <div class="mb-4 d-inline-block p-3 rounded-3" style="background: rgba(2, 132, 199, 0.08); color: #0284c7;">
                            <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <h3 class="h4 fw-bold mb-3" style="color: #0f172a;">Réseaux & Cybersécurité</h3>
                        <p class="small mb-0" style="color: #475569;">
                            Audits de sécurité, tests d'intrusion, isolation réseau avancée, chiffrement de données sensibles et mise en place d'infrastructures résilientes face aux cybermenaces.
                        </p>
                    </div>
                </div>

                <!-- Service 3: DevOps & Cloud -->
                <div class="col-md-6 col-lg-4">
                    <div class="p-5 h-100 rounded-4" style="background: #ffffff; border: 1px solid #e2e8f0; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03); transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='none'">
                        <div class="mb-4 d-inline-block p-3 rounded-3" style="background: rgba(2, 132, 199, 0.08); color: #0284c7;">
                            <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                        </div>
                        <h3 class="h4 fw-bold mb-3" style="color: #0f172a;">DevOps & Cloud</h3>
                        <p class="small mb-0" style="color: #475569;">
                            Conception d'architectures Cloud haute disponibilité, conteneurisation (Docker, Kubernetes), pipelines d'intégration continue (CI/CD) et hébergement scalable.
                        </p>
                    </div>
                </div>

                <!-- Service 4: Robotique & I.A. -->
                <div class="col-md-6 col-lg-4">
                    <div class="p-5 h-100 rounded-4" style="background: #ffffff; border: 1px solid #e2e8f0; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03); transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='none'">
                        <div class="mb-4 d-inline-block p-3 rounded-3" style="background: rgba(2, 132, 199, 0.08); color: #0284c7;">
                            <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h2m-2 6h2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/></svg>
                        </div>
                        <h3 class="h4 fw-bold mb-3" style="color: #0f172a;">Robotique & I.A.</h3>
                        <p class="small mb-0" style="color: #475569;">
                            Automatisation intelligente, intégration de modèles de machine learning pour l'analyse prédictive et développement de solutions embarquées & IoT pour l'industrie.
                        </p>
                    </div>
                </div>

                <!-- Service 5: Marketing & Création de Contenu (ngrafix) -->
                <div class="col-md-6 col-lg-4">
                    <div class="p-5 h-100 rounded-4" style="background: #ffffff; border: 1px solid #e2e8f0; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03); transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='none'">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="p-3 rounded-3" style="background: rgba(168, 85, 247, 0.1); color: #9333ea;">
                                <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            </div>
                            <span class="badge px-3 py-1 rounded-pill font-monospace" style="background: rgba(168, 85, 247, 0.1); color: #9333ea; border: 1px solid rgba(168, 85, 247, 0.2);">ngrafix</span>
                        </div>
                        <h3 class="h4 fw-bold mb-3" style="color: #0f172a;">Marketing & Création de Contenu</h3>
                        <p class="small mb-0" style="color: #475569;">
                            Stratégie globale de visibilité en ligne, acquisition de prospects, création de contenus captivants et campagnes publicitaires ciblées gérées par notre branche <strong>ngrafix</strong>.
                        </p>
                    </div>
                </div>

                <!-- Service 6: UI/UX, Graphisme, Édition Vidéo & Modélisation 2D/3D (ngrafix) -->
                <div class="col-md-6 col-lg-4">
                    <div class="p-5 h-100 rounded-4" style="background: #ffffff; border: 1px solid #e2e8f0; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03); transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='none'">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="p-3 rounded-3" style="background: rgba(168, 85, 247, 0.1); color: #9333ea;">
                                <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                            </div>
                            <span class="badge px-3 py-1 rounded-pill font-monospace" style="background: rgba(168, 85, 247, 0.1); color: #9333ea; border: 1px solid rgba(168, 85, 247, 0.2);">ngrafix</span>
                        </div>
                        <h3 class="h4 fw-bold mb-3" style="color: #0f172a;">UI/UX, Webdesign, Vidéo & 3D</h3>
                        <p class="small mb-0" style="color: #475569;">
                            UI/UX & webdesign, graphisme & infographie, édition et montage vidéo, modélisation et animation 2D/3D sur-mesure pour sublimer vos projets via <strong>ngrafix</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Management Methodologies -->
    <section class="py-5" style="background: #ffffff; border-top: 1px solid #e2e8f0;">
        <div class="container py-5 text-start">
            <div class="row mb-5 text-center">
                <div class="col-12">
                    <span class="text-uppercase tracking-wider fw-bold font-monospace d-block mb-2" style="color: #0284c7;">Notre Méthode</span>
                    <h2 class="f-nasalization h1 fw-bold" style="color: #0f172a;">Gestion de Projet Agile</h2>
                    <p class="mx-auto mt-2" style="max-width: 600px; color: #64748b;">
                        Découvrez comment nous transformons vos idées en logiciels d'exception grâce à notre processus structuré étape par étape.
                    </p>
                </div>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-lg-10">
                    <div class="position-relative">
                        <!-- Vertical line for timeline -->
                        <div class="position-absolute d-none d-md-block" style="width: 2px; background: rgba(2, 132, 199, 0.2); top: 0; bottom: 0; left: 50%; transform: translateX(-50%);"></div>

                        <!-- Step 1 -->
                        <div class="row mb-5 align-items-center">
                            <div class="col-md-5 text-md-end">
                                <h3 class="fw-bold h4" style="color: #0f172a;">1. Analyse & Spécifications</h3>
                                <p class="mb-0 small" style="color: #475569;">Nous étudions vos flux de travail et vos besoins métiers. Nous rédigeons un cahier des charges précis et concevons des maquettes UI/UX interactives sur Figma.</p>
                            </div>
                            <div class="col-md-2 text-center my-3 my-md-0 position-relative">
                                <div class="rounded-circle bg-white border border-3 d-flex align-items-center justify-content-center mx-auto" style="width: 48px; height: 48px; border-color: #0284c7 !important;">
                                    <span class="fw-bold" style="color: #0284c7 !important;">1</span>
                                </div>
                            </div>
                            <div class="col-md-5"></div>
                        </div>

                        <!-- Step 2 -->
                        <div class="row mb-5 align-items-center flex-md-row-reverse">
                            <div class="col-md-5 text-md-start">
                                <h3 class="fw-bold h4" style="color: #0f172a;">2. Développement Agile & Sprints</h3>
                                <p class="mb-0 small" style="color: #475569;">Votre projet est divisé en modules fonctionnels livrés régulièrement. Vous suivez l'avancement via des démonstrations et des sprint reviews bi-mensuels.</p>
                            </div>
                            <div class="col-md-2 text-center my-3 my-md-0 position-relative">
                                <div class="rounded-circle bg-white border border-3 d-flex align-items-center justify-content-center mx-auto" style="width: 48px; height: 48px; border-color: #0284c7 !important;">
                                    <span class="fw-bold" style="color: #0284c7 !important;">2</span>
                                </div>
                            </div>
                            <div class="col-md-5"></div>
                        </div>

                        <!-- Step 3 -->
                        <div class="row mb-5 align-items-center">
                            <div class="col-md-5 text-md-end">
                                <h3 class="fw-bold h4" style="color: #0f172a;">3. Tests & Audit de Sécurité</h3>
                                <p class="mb-0 small" style="color: #475569;">Avant toute mise en production, nos ingénieurs effectuent des tests unitaires et d'intégration, complétés par un audit de vulnérabilités pour garantir la sécurité.</p>
                            </div>
                            <div class="col-md-2 text-center my-3 my-md-0 position-relative">
                                <div class="rounded-circle bg-white border border-3 d-flex align-items-center justify-content-center mx-auto" style="width: 48px; height: 48px; border-color: #0284c7 !important;">
                                    <span class="fw-bold" style="color: #0284c7 !important;">3</span>
                                </div>
                            </div>
                            <div class="col-md-5"></div>
                        </div>

                        <!-- Step 4 -->
                        <div class="row align-items-center flex-md-row-reverse">
                            <div class="col-md-5 text-md-start">
                                <h3 class="fw-bold h4" style="color: #0f172a;">4. Déploiement CI/CD & Maintenance</h3>
                                <p class="mb-0 small" style="color: #475569;">Déploiement automatisé sur des serveurs sécurisés et scalables. Nous assurons un support technique continu de vos applications 24h/24 et 7j/7.</p>
                            </div>
                            <div class="col-md-2 text-center my-3 my-md-0 position-relative">
                                <div class="rounded-circle bg-white border border-3 d-flex align-items-center justify-content-center mx-auto" style="width: 48px; height: 48px; border-color: #0284c7 !important;">
                                    <span class="fw-bold" style="color: #0284c7 !important;">4</span>
                                </div>
                            </div>
                            <div class="col-md-5"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BYT3LAB-CONTENT-END -->
</div>