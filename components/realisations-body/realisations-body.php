<?php
// BYT3LAB Builder - auto-include component assets for realisations-body
if (!isset($GLOBALS['byt3lab_assets_printed'])) {
    $GLOBALS['byt3lab_assets_printed'] = ['css' => [], 'js' => []];
}
$__byt3lab_comp_slug = 'realisations-body';
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

<div class="component-realisations-body bg-white text-dark">
    <!-- BYT3LAB-CONTENT-START -->
    
    <!-- Hero / Title Header -->
    <section class="py-5 text-center position-relative overflow-hidden" style="background: radial-gradient(circle at bottom left, rgba(2, 132, 199, 0.08), transparent 60%), #ffffff; border-bottom: 1px solid #e2e8f0;">
        <div class="container py-5 position-relative" style="z-index: 2;">
            <span class="text-uppercase tracking-wider fw-bold font-monospace d-block mb-2" style="color: #0284c7;">Nos Références</span>
            <h1 class="f-nasalization display-4 fw-bold mb-3" style="color: #0f172a;">Projets Réalisés</h1>
            <p class="lead mx-auto" style="max-width: 700px; color: #475569;">
                Découvrez comment nous avons accompagné nos partenaires dans le développement de leurs produits technologiques et la sécurisation de leurs infrastructures.
            </p>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="py-5" style="background: #f8fafc;">
        <div class="container py-5">
            <div class="row g-4 text-start">
                
                <!-- Project 1 -->
                <div class="col-md-6 col-lg-6">
                    <div class="card h-100 rounded-4 overflow-hidden border" style="background: #ffffff; border-color: #e2e8f0 !important; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03);">
                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=800" alt="SUKU Platform" class="card-img-top object-fit-cover" style="height: 280px;" />
                        <div class="card-body p-4 p-lg-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge text-white" style="background: #0284c7;">EDTECH</span>
                                <span class="font-monospace small" style="color: #64748b;">Laravel / VueJS / Docker</span>
                            </div>
                            <h3 class="h3 fw-bold mb-3" style="color: #0f172a;">Écosystème Scolaire SUKU</h3>
                            <p class="mb-4" style="color: #475569;">
                                Déploiement d'une plateforme SaaS centralisée pour plus de 20 établissements scolaires en Afrique Centrale. Le système gère les dossiers scolaires de 15,000+ étudiants, les évaluations, la facturation automatique de la scolarité et les notifications SMS/WhatsApp automatisées aux parents.
                            </p>
                            <div class="p-3 rounded-3" style="background: #f8fafc; border: 1px solid #e2e8f0;">
                                <h4 class="fw-bold h6 mb-1" style="color: #0f172a;">Impact clé :</h4>
                                <p class="small mb-0" style="color: #475569;">Réduction de 45% des retards de paiement scolaires et suppression totale du traitement papier des notes de classe.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="col-md-6 col-lg-6">
                    <div class="card h-100 rounded-4 overflow-hidden border" style="background: #ffffff; border-color: #e2e8f0 !important; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03);">
                        <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?q=80&w=800" alt="Njangui Platform" class="card-img-top object-fit-cover" style="height: 280px;" />
                        <div class="card-body p-4 p-lg-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge text-white" style="background: #0284c7;">FINTECH</span>
                                <span class="font-monospace small" style="color: #64748b;">Flutter / Node.js / MongoDB</span>
                            </div>
                            <h3 class="h3 fw-bold mb-3" style="color: #0f172a;">Plateforme Mobile Njangui</h3>
                            <p class="mb-4" style="color: #475569;">
                                Digitalisation sécurisée des tontines traditionnelles locales. L'application mobile permet aux membres de cotiser en toute sécurité via Mobile Money (Orange Money & MTN MoMo), de voter sur l'octroi d'emprunts et de suivre la trésorerie des associations avec une transparence totale.
                            </p>
                            <div class="p-3 rounded-3" style="background: #f8fafc; border: 1px solid #e2e8f0;">
                                <h4 class="fw-bold h6 mb-1" style="color: #0f172a;">Impact clé :</h4>
                                <p class="small mb-0" style="color: #475569;">Plus de $500,000 de flux financiers sécurisés et numérisés en 12 mois sans aucune faille de sécurité.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="col-md-6 col-lg-6">
                    <div class="card h-100 rounded-4 overflow-hidden border" style="background: #ffffff; border-color: #e2e8f0 !important; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03);">
                        <img src="https://images.unsplash.com/photo-1700132806638-2dc744996a4d?q=80&w=800" alt="Cybersecurity" class="card-img-top object-fit-cover" style="height: 280px;" />
                        <div class="card-body p-4 p-lg-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge text-white" style="background: #0284c7;">CYBERSÉCURITÉ</span>
                                <span class="font-monospace small" style="color: #64748b;">WAF / VPC Isolation / AWS</span>
                            </div>
                            <h3 class="h3 fw-bold mb-3" style="color: #0f172a;">Audit & Refonte IT (Start-up Microfinance)</h3>
                            <p class="mb-4" style="color: #475569;">
                                Audit d'architecture et renforcement de la sécurité cloud pour un acteur majeur de la microfinance. Nous avons implémenté une isolation réseau totale via des VPC privés, configuré un pare-feu applicatif web (WAF) pour stopper les attaques par injection et mis en place une traçabilité d'audit.
                            </p>
                            <div class="p-3 rounded-3" style="background: #f8fafc; border: 1px solid #e2e8f0;">
                                <h4 class="fw-bold h6 mb-1" style="color: #0f172a;">Impact clé :</h4>
                                <p class="small mb-0" style="color: #475569;">Mise en conformité totale aux exigences bancaires réglementaires locales et résilience totale face aux scans malveillants.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="col-md-6 col-lg-6">
                    <div class="card h-100 rounded-4 overflow-hidden border" style="background: #ffffff; border-color: #e2e8f0 !important; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03);">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=800" alt="ERP Integration" class="card-img-top object-fit-cover" style="height: 280px;" />
                        <div class="card-body p-4 p-lg-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge text-white" style="background: #0284c7;">LOGICIEL ERP</span>
                                <span class="font-monospace small" style="color: #64748b;">Python / PostgreSQL / React</span>
                            </div>
                            <h3 class="h3 fw-bold mb-3" style="color: #0f172a;">Intégration Melodi ERP (Distributeur Agro)</h3>
                            <p class="mb-4" style="color: #475569;">
                                Déploiement et personnalisation de notre progiciel Melodi ERP pour un grand groupe de distribution agroalimentaire. Intégration de la facturation temps réel, synchronisation automatique des stocks de 5 entrepôts physiques et connexion aux terminaux de vente (POS).
                            </p>
                            <div class="p-3 rounded-3" style="background: #f8fafc; border: 1px solid #e2e8f0;">
                                <h4 class="fw-bold h6 mb-1" style="color: #0f172a;">Impact clé :</h4>
                                <p class="small mb-0" style="color: #475569;">Réduction de 30% des écarts d'inventaire et amélioration de 50% de la vitesse de préparation de commandes logistiques.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- BYT3LAB-CONTENT-END -->
</div>