<?php
// BYT3LAB Builder - auto-include component assets for solutions-body
if (!isset($GLOBALS['byt3lab_assets_printed'])) {
    $GLOBALS['byt3lab_assets_printed'] = ['css' => [], 'js' => []];
}
$__byt3lab_comp_slug = 'solutions-body';
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

<div class="component-solutions-body bg-white text-dark">
    <!-- BYT3LAB-CONTENT-START -->
    
    <!-- Hero / Title Header -->
    <section class="py-5 text-center position-relative overflow-hidden" style="background: radial-gradient(circle at bottom left, rgba(2, 132, 199, 0.08), transparent 60%), #ffffff; border-bottom: 1px solid #e2e8f0;">
        <div class="container py-5 position-relative" style="z-index: 2;">
            <span class="text-uppercase tracking-wider fw-bold font-monospace d-block mb-2" style="color: #0284c7;">Nos Produits SaaS & Progiciels</span>
            <h1 class="f-nasalization display-4 fw-bold mb-3" style="color: #0f172a;">Nos Solutions Logicielles</h1>
            <p class="lead mx-auto" style="max-width: 700px; color: #475569;">
                Découvrez nos progiciels robustes, sécurisés et hautement adaptables aux défis économiques africains.
            </p>
        </div>
    </section>

    <!-- MELODI ERP Presentation -->
    <section class="py-5" style="background: #f8fafc;">
        <div class="container py-5">
            <div class="row align-items-center g-5 text-start">
                <div class="col-lg-6">
                    <span class="badge mb-3 px-3 py-2 rounded-pill font-monospace" style="background: rgba(2, 132, 199, 0.1); color: #0284c7;">PROGICIEL MODULAIRE & AUTO-HÉBERGÉ</span>
                    <h2 class="f-nasalization display-5 fw-bold mb-4" style="color: #0f172a;">Melodi ERP</h2>
                    <p class="fs-5 mb-4" style="color: #475569;">
                        <strong>Melodi ERP</strong> est un progiciel de gestion d'entreprise modulaire et auto-hébergé, conçu pour offrir une souveraineté numérique totale. Il intègre des modules métiers prêts à l'emploi (gestion de commerce, gestion d'établissement scolaire SUKU, comptabilité et CRM) adaptés aux spécificités opérationnelles locales.
                    </p>
                    <ul class="list-unstyled mb-5" style="color: #475569;">
                        <li class="mb-3 d-flex align-items-start gap-2">
                            <span class="font-monospace fw-bold" style="color: #0284c7;">&gt;</span>
                            <div><strong>Gestion de Commerce & Points de Vente :</strong> Facturation en temps réel, caisse POS, suivi des ventes et gestion d'inventaire multi-entrepôts.</div>
                        </li>
                        <li class="mb-3 d-flex align-items-start gap-2">
                            <span class="font-monospace fw-bold" style="color: #0284c7;">&gt;</span>
                            <div><strong>Gestion d'Établissement Scolaire (Module SUKU) :</strong> Inscriptions, calcul automatique des moyennes, bulletins numériques et suivi des frais de scolarité.</div>
                        </li>
                        <li class="mb-3 d-flex align-items-start gap-2">
                            <span class="font-monospace fw-bold" style="color: #0284c7;">&gt;</span>
                            <div><strong>Architecture Auto-Hébergée & Modulaire :</strong> Installez et déployez l'ERP sur vos propres serveurs ou dans votre cloud privé en toute indépendance.</div>
                        </li>
                    </ul>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="https://melodi.byt3lab.com" target="_blank" rel="noopener" class="a-button a-button--primary btn btn-lg py-3 px-4 fw-bold">Accéder à Melodi ERP</a>
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-outline-primary btn-lg py-3 px-4 fw-bold" style="border-radius: 8px; border-color: #0284c7; color: #0284c7;">Demander une démo</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: #ffffff; border: 1px solid #e2e8f0; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03);">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=800" alt="Melodi ERP Dashboard" class="img-fluid rounded-3 shadow border" style="border-color: #e2e8f0 !important;" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SUKU Presentation -->
    <section class="py-5" style="background: #ffffff; border-top: 1px solid #e2e8f0;">
        <div class="container py-5">
            <div class="row align-items-center g-5 text-start flex-lg-row-reverse">
                <div class="col-lg-6">
                    <span class="badge mb-3 px-3 py-2 rounded-pill font-monospace" style="background: rgba(2, 132, 199, 0.1); color: #0284c7;">GESTION D'ÉTABLISSEMENTS</span>
                    <h2 class="f-nasalization display-5 fw-bold mb-4" style="color: #0f172a;">SUKU</h2>
                    <p class="fs-5 mb-4" style="color: #475569;">
                        <strong>SUKU</strong> est un écosystème modulaire conçu spécifiquement pour la gestion administrative, pédagogique et financière des établissements scolaires, académies et instituts de formation.
                    </p>
                    <ul class="list-unstyled mb-5" style="color: #475569;">
                        <li class="mb-3 d-flex align-items-start gap-2">
                            <span class="font-monospace fw-bold" style="color: #0284c7;">&gt;</span>
                            <div><strong>Gestion des Inscriptions & Scolarité :</strong> Suivi des dossiers étudiants, encaissements et échéanciers financiers.</div>
                        </li>
                        <li class="mb-3 d-flex align-items-start gap-2">
                            <span class="font-monospace fw-bold" style="color: #0284c7;">&gt;</span>
                            <div><strong>Bulletins & Notes Numériques :</strong> Saisie rapide par les enseignants, calcul automatique des moyennes et rapports de classe.</div>
                        </li>
                        <li class="mb-3 d-flex align-items-start gap-2">
                            <span class="font-monospace fw-bold" style="color: #0284c7;">&gt;</span>
                            <div><strong>Espace Parents / Étudiants :</strong> Accès en ligne sécurisé aux plannings, devoirs, absences et notes en temps réel.</div>
                        </li>
                    </ul>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="https://melodi.byt3lab.com/store/suku" target="_blank" rel="noopener" class="a-button a-button--primary btn btn-lg py-3 px-4 fw-bold">Découvrir SUKU en ligne</a>
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-outline-primary btn-lg py-3 px-4 fw-bold" style="border-radius: 8px; border-color: #0284c7; color: #0284c7;">Déployer SUKU</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: #f8fafc; border: 1px solid #e2e8f0; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03);">
                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=800" alt="SUKU School System" class="img-fluid rounded-3 shadow border" style="border-color: #e2e8f0 !important;" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BYT3LAB-CONTENT-END -->
</div>

