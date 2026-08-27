<?php
// BYT3LAB Builder - auto-include component assets for accueil-body
if (!isset($GLOBALS['byt3lab_assets_printed'])) {
    $GLOBALS['byt3lab_assets_printed'] = ['css' => [], 'js' => []];
}
$__byt3lab_comp_slug = 'accueil-body';
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

<div class="component-accueil-body bg-white text-dark">
    <!-- BYT3LAB-CONTENT-START -->
    
    <!-- Hero section with Carousel presenting Mission, Solutions, Services, Contact -->
    <section id="heroCarousel" class="carousel slide position-relative overflow-hidden py-4" data-bs-ride="carousel" data-bs-interval="5000" style="min-height: 85vh; background: radial-gradient(circle at top right, rgba(2, 132, 199, 0.08), transparent 60%), #ffffff;">

        <!-- Glowing background grid -->
        <div class="position-absolute w-100 h-100 top-0 start-0 opacity-10" style="background-image: radial-gradient(rgba(2, 132, 199, 0.15) 1px, transparent 1px); background-size: 24px 24px; pointer-events: none;"></div>

        <!-- Carousel Indicators -->
        <div class="carousel-indicators mb-4" style="z-index: 5;">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1: Mission"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2: Solutions"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3: Services"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3" aria-label="Slide 4: Contact"></button>
        </div>

        <div class="carousel-inner h-100 d-flex align-items-center py-4">
            
            <!-- Slide 1: Mission -->
            <div class="carousel-item active py-4 position-relative">
                <div class="hero-bg-overlay" style="background-image: linear-gradient(135deg, rgba(255,255,255,0.91) 0%, rgba(248,250,252,0.84) 100%), url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=1600');"></div>
                <div class="container position-relative" style="z-index: 2;">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-lg-10">
                            <span class="badge mb-3 px-3 py-2 rounded-pill font-monospace" style="background: rgba(2, 132, 199, 0.1); color: #0284c7; border: 1px solid rgba(2, 132, 199, 0.2);">🚀 NOTRE MISSION & VISION</span>
                            <h1 class="f-nasalization display-3 fw-bold mb-4 lh-sm" style="color: #0f172a;">
                                Bâtir la <span style="color: #0284c7; background: linear-gradient(to right, #0284c7, #2563eb); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Première Puissance</span> Technologique Africaine
                            </h1>
                            <p class="lead mb-5 fs-4 mx-auto" style="max-width: 850px; color: #475569;">
                                Notre mission : développer des produits technologiques simples, intuitifs et sécurisés pour accompagner les entreprises et les institutions dans leur croissance.
                            </p>
                            <div class="d-flex gap-3 justify-content-center flex-wrap">
                                <a href="<?php echo esc_url(home_url('/solutions/')); ?>" class="a-button a-button--primary btn btn-lg py-3 px-5 fw-bold text-uppercase" style="border-radius: 8px;">Découvrir nos Progiciels</a>
                                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-outline-primary btn-lg py-3 px-5 fw-bold text-uppercase" style="border-radius: 8px; border-color: #0284c7; color: #0284c7;">Collaborer avec nous</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Solutions -->
            <div class="carousel-item py-4 position-relative">
                <div class="hero-bg-overlay" style="background-image: linear-gradient(135deg, rgba(255,255,255,0.91) 0%, rgba(248,250,252,0.84) 100%), url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1600');"></div>
                <div class="container position-relative" style="z-index: 2;">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-lg-10">
                            <span class="badge mb-3 px-3 py-2 rounded-pill font-monospace" style="background: rgba(2, 132, 199, 0.1); color: #0284c7; border: 1px solid rgba(2, 132, 199, 0.2);">💡 NOS SOLUTIONS LOGICIELLES</span>
                            <h1 class="f-nasalization display-3 fw-bold mb-4 lh-sm" style="color: #0f172a;">
                                Des Progiciels Métiers <span style="color: #0284c7; background: linear-gradient(to right, #0284c7, #2563eb); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Innovants & Scalables</span>
                            </h1>
                            <p class="lead mb-5 fs-4 mx-auto" style="max-width: 800px; color: #475569;">
                                <strong>Melodi ERP</strong> est un progiciel de gestion d'entreprise modulaire et auto-hébergé intégrant des modules métiers puissants : gestion de commerce, gestion d'établissement scolaire (SUKU), comptabilité et logistique.
                            </p>
                            <div class="d-flex gap-3 justify-content-center flex-wrap">
                                <a href="<?php echo esc_url(home_url('/solutions/')); ?>" class="a-button a-button--primary btn btn-lg py-3 px-5 fw-bold text-uppercase" style="border-radius: 8px;">Explorer nos Progiciels</a>
                                <a href="https://melodi.byt3lab.com" target="_blank" rel="noopener" class="btn btn-outline-primary btn-lg py-3 px-5 fw-bold text-uppercase" style="border-radius: 8px; border-color: #0284c7; color: #0284c7;">Accéder à Melodi ERP</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Services -->
            <div class="carousel-item py-4 position-relative">
                <div class="hero-bg-overlay" style="background-image: linear-gradient(135deg, rgba(255,255,255,0.91) 0%, rgba(248,250,252,0.84) 100%), url('https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?q=80&w=1600');"></div>
                <div class="container position-relative" style="z-index: 2;">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-lg-10">
                            <span class="badge mb-3 px-3 py-2 rounded-pill font-monospace" style="background: rgba(2, 132, 199, 0.1); color: #0284c7; border: 1px solid rgba(2, 132, 199, 0.2);">⚙️ NOS SERVICES & EXPERTISE</span>
                            <h1 class="f-nasalization display-3 fw-bold mb-4 lh-sm" style="color: #0f172a;">
                                Ingénierie Sur-Mesure, <span style="color: #0284c7; background: linear-gradient(to right, #0284c7, #2563eb); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Cybersécurité & Cloud</span>
                            </h1>
                            <p class="lead mb-5 fs-4 mx-auto" style="max-width: 800px; color: #475569;">
                                Développement web/mobile, audits de vulnérabilité, automatisation DevOps CI/CD et accompagnement technique sur-mesure pour vos équipes.
                            </p>
                            <div class="d-flex gap-3 justify-content-center flex-wrap">
                                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="a-button a-button--primary btn btn-lg py-3 px-5 fw-bold text-uppercase" style="border-radius: 8px;">Voir tous nos Services</a>
                                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-outline-primary btn-lg py-3 px-5 fw-bold text-uppercase" style="border-radius: 8px; border-color: #0284c7; color: #0284c7;">Demander un Devis</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 4: Contact -->
            <div class="carousel-item py-4 position-relative">
                <div class="hero-bg-overlay" style="background-image: linear-gradient(135deg, rgba(255,255,255,0.91) 0%, rgba(248,250,252,0.84) 100%), url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=1600');"></div>
                <div class="container position-relative" style="z-index: 2;">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-lg-10">
                            <span class="badge mb-3 px-3 py-2 rounded-pill font-monospace" style="background: rgba(2, 132, 199, 0.1); color: #0284c7; border: 1px solid rgba(2, 132, 199, 0.2);">📞 PRENDRE CONTACT</span>
                            <h1 class="f-nasalization display-3 fw-bold mb-4 lh-sm" style="color: #0f172a;">
                                Prêt à Digitaliser <span style="color: #0284c7; background: linear-gradient(to right, #0284c7, #2563eb); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Vos Projets ?</span>
                            </h1>
                            <p class="lead mb-5 fs-4 mx-auto" style="max-width: 800px; color: #475569;">
                                Nos équipes d'ingénieurs et de consultants sont à votre disposition pour analyser vos besoins et concevoir vos futurs outils technologiques.
                            </p>
                            <div class="d-flex gap-3 justify-content-center flex-wrap">
                                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="a-button a-button--primary btn btn-lg py-3 px-5 fw-bold text-uppercase" style="border-radius: 8px;">Nous Contacter</a>
                                <a href="https://wa.me/237696879475" target="_blank" rel="noopener noreferrer" class="btn btn-outline-success btn-lg py-3 px-5 fw-bold text-uppercase" style="border-radius: 8px;">WhatsApp Direct</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <!-- Carousel Navigation Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <div class="hero-carousel-btn shadow">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
            </div>
            <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <div class="hero-carousel-btn shadow">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
            </div>
            <span class="visually-hidden">Suivant</span>
        </button>
    </section>



    <!-- Our Branches & Excellence Hubs (ngrafix, Byt3lab Tech) -->
    <section class="py-5" style="background: #f8fafc; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
        <div class="container py-5 text-start">
            <div class="row mb-5 text-center">
                <div class="col-12">
                    <span class="text-uppercase tracking-wider fw-bold font-monospace d-block mb-2" style="color: #0284c7;">Écosystème Byt3lab</span>
                    <h2 class="f-nasalization h1 fw-bold" style="color: #0f172a;">Nos Branches & Filiales d'Excellence</h2>
                    <p class="mx-auto mt-2" style="max-width: 700px; color: #64748b;">
                        Un groupe multidisciplinaire structuré en filiales spécialisées pour répondre à l'ensemble de vos besoins créatifs et technologiques.
                    </p>
                </div>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Branch 1: ngrafix -->
                <div class="col-lg-6 col-md-6">
                    <div class="p-4 h-100 rounded-4 d-flex flex-column justify-content-between" style="background: #ffffff; border: 1px solid #e2e8f0; box-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.03); transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='none'">
                        <div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="p-2 rounded-3" style="background: rgba(168, 85, 247, 0.1); color: #9333ea;">
                                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                </div>
                                <span class="badge px-3 py-2 rounded-pill font-monospace" style="background: rgba(168, 85, 247, 0.1); color: #9333ea; border: 1px solid rgba(168, 85, 247, 0.2);">MEDIA & CREATIVE</span>
                            </div>
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/ngrafix.jpg'); ?>" alt="Ngrafix Media & Creative" class="img-fluid rounded-3 mb-3 shadow-sm" style="max-height: 160px; width: 100%; object-fit: cover;" />
                            <h3 class="f-nasalization h3 fw-bold mb-2" style="color: #0f172a;">ngrafix</h3>
                            <p class="small mb-4" style="color: #475569;">
                                Pôle spécialisé en <strong>Marketing Digital</strong>, <strong>UI/UX & Webdesign</strong>, <strong>Graphisme & Infographie</strong>, <strong>Création de Contenu</strong>, <strong>Vidéo</strong> et <strong>Modélisation 2D/3D</strong>.
                            </p>
                        </div>
                        <a href="<?php echo esc_url(home_url('/ngrafix/')); ?>" class="btn btn-outline-primary w-100 py-2 fw-bold mt-auto" style="border-color: #9333ea; color: #9333ea;">Découvrir ngrafix</a>
                    </div>
                </div>

                <!-- Branch 2: Byt3lab Tech -->
                <div class="col-lg-6 col-md-6">
                    <div class="p-4 h-100 rounded-4 d-flex flex-column justify-content-between" style="background: #ffffff; border: 1px solid #e2e8f0; box-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.03); transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='none'">
                        <div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="p-2 rounded-3" style="background: rgba(2, 132, 199, 0.08); color: #0284c7;">
                                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                                </div>
                                <span class="badge px-3 py-2 rounded-pill font-monospace" style="background: rgba(2, 132, 199, 0.1); color: #0284c7; border: 1px solid rgba(2, 132, 199, 0.2);">SOFTWARE & CLOUD</span>
                            </div>
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/byt3lab1.jpg'); ?>" alt="Byt3lab Tech Software & Cloud" class="img-fluid rounded-3 mb-3 shadow-sm" style="max-height: 160px; width: 100%; object-fit: cover;" />
                            <h3 class="f-nasalization h3 fw-bold mb-2" style="color: #0f172a;">Byt3lab Tech</h3>
                            <p class="small mb-4" style="color: #475569;">
                                Pôle ingénierie logicielle : <strong>Progiciels (Melodi ERP, SUKU)</strong>, <strong>Développement Web & Mobile</strong>, <strong>Cybersécurité & Cloud</strong>.
                            </p>
                        </div>
                        <a href="<?php echo esc_url(home_url('/solutions/')); ?>" class="btn btn-outline-primary w-100 py-2 fw-bold mt-auto" style="border-color: #0284c7; color: #0284c7;">Découvrir Byt3lab Tech</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if (false): ?>
    <!-- Key Metrics & Counter Section (Hidden) -->
    <section class="py-5" style="background: #ffffff;">
        <div class="container py-4 text-center">
            <div class="row g-4 justify-content-center">
                <div class="col-6 col-md-3">
                    <div class="p-4 rounded-4 h-100 border" style="background: #f8fafc; border-color: #e2e8f0 !important;">
                        <span class="f-nasalization display-5 fw-bold d-block mb-1" style="color: #0284c7;">99+</span>
                        <span class="small text-uppercase font-monospace" style="color: #64748b;">Applications Déployées</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="p-4 rounded-4 h-100 border" style="background: #f8fafc; border-color: #e2e8f0 !important;">
                        <span class="f-nasalization display-5 fw-bold d-block mb-1" style="color: #0284c7;">25+</span>
                        <span class="small text-uppercase font-monospace" style="color: #64748b;">Projets Récents</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="p-4 rounded-4 h-100 border" style="background: #f8fafc; border-color: #e2e8f0 !important;">
                        <span class="f-nasalization display-5 fw-bold d-block mb-1" style="color: #0284c7;">1M+</span>
                        <span class="small text-uppercase font-monospace" style="color: #64748b;">Lignes de Code</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="p-4 rounded-4 h-100 border" style="background: #f8fafc; border-color: #e2e8f0 !important;">
                        <span class="f-nasalization display-5 fw-bold d-block mb-1" style="color: #0284c7;">100%</span>
                        <span class="small text-uppercase font-monospace" style="color: #64748b;">Souveraineté Cible</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Flagship Products/Solutions Spotlight -->
    <section class="py-5" style="background: #f8fafc; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
        <div class="container py-5 text-center">
            <span class="text-uppercase tracking-wider fw-bold font-monospace d-block mb-2" style="color: #0284c7;">Technologies Souveraines</span>
            <h2 class="f-nasalization h1 fw-bold mb-5" style="color: #0f172a;">
                Des Outils Conçus Pour Bâtir Notre Avenir
            </h2>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-5 text-start">
                    <div class="p-5 h-100 rounded-4 d-flex flex-column justify-content-between" style="background: #ffffff; border: 1px solid #e2e8f0; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03); transition: transform 0.3s, box-shadow 0.3s;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 12px 25px -5px rgba(2, 132, 199, 0.12)';" onmouseout="this.style.transform='none'; this.style.boxShadow='0 4px 20px -2px rgba(0,0,0,0.03)';">
                        <div>
                            <div class="mb-4 d-inline-block p-3 rounded-3" style="background: rgba(2, 132, 199, 0.08); color: #0284c7;">
                                <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5"/></svg>
                            </div>
                            <h3 class="f-nasalization mb-3 h4" style="color: #0f172a;">MELODI ERP</h3>
                            <p class="mb-4" style="color: #475569;">
                                Progiciel de gestion d'entreprise modulaire et auto-hébergé. Intègre des modules métiers sur-mesure : gestion de commerce, gestion d'établissement scolaire (SUKU), comptabilité, stocks et CRM.
                            </p>
                        </div>
                        <a href="https://melodi.byt3lab.com" target="_blank" rel="noopener" class="text-decoration-none fw-bold mt-3 d-inline-flex align-items-center gap-1" style="color: #0284c7;">
                            Découvrir Melodi ERP
                            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 text-start">
                    <div class="p-5 h-100 rounded-4 d-flex flex-column justify-content-between" style="background: #ffffff; border: 1px solid #e2e8f0; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03); transition: transform 0.3s, box-shadow 0.3s;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 12px 25px -5px rgba(2, 132, 199, 0.12)';" onmouseout="this.style.transform='none'; this.style.boxShadow='0 4px 20px -2px rgba(0,0,0,0.03)';">
                        <div>
                            <div class="mb-4 d-inline-block p-3 rounded-3" style="background: rgba(2, 132, 199, 0.08); color: #0284c7;">
                                <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                            </div>
                            <h3 class="f-nasalization mb-3 h4" style="color: #0f172a;">SUKU</h3>
                            <p class="mb-4" style="color: #475569;">
                                Projetez votre établissement d'enseignement dans l'ère numérique. SUKU gère la scolarité, les inscriptions, les bulletins de notes et simplifie la communication parents-école.
                            </p>
                        </div>
                        <a href="https://melodi.byt3lab.com/store/suku" target="_blank" rel="noopener" class="text-decoration-none fw-bold mt-3 d-inline-flex align-items-center gap-1" style="color: #0284c7;">
                            Découvrir SUKU
                            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Glossary Section -->
    <section class="py-5" style="background: #ffffff; border-top: 1px solid #e2e8f0;">
        <div class="container py-5 text-start">
            <div class="row mb-5 text-center">
                <div class="col-12">
                    <span class="text-uppercase tracking-wider fw-bold font-monospace d-block mb-2" style="color: #0284c7;">Glossaire de nos Expertises</span>
                    <h2 class="f-nasalization h1 fw-bold" style="color: #0f172a;">Nos Services de A à Z</h2>
                    <p class="mx-auto mt-2" style="max-width: 600px; color: #64748b;">
                        Un aperçu complet des services et expertises techniques que nous mettons à votre disposition.
                    </p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 h-100 rounded-3" style="background: #f8fafc; border: 1px solid #e2e8f0;">
                        <h3 class="fw-bold h5 mb-3 font-monospace" style="color: #0284c7 !important;">[A] Audit & Conseil</h3>
                        <p class="small mb-0" style="color: #475569;">Analyse de vos processus métiers et de vos architectures techniques pour aligner votre IT avec vos objectifs stratégiques.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 h-100 rounded-3" style="background: #f8fafc; border: 1px solid #e2e8f0;">
                        <h3 class="fw-bold h5 mb-3 font-monospace" style="color: #0284c7 !important;">[C] Cybersécurité</h3>
                        <p class="small mb-0" style="color: #475569;">Tests de pénétration, isolation réseau avancée, chiffrement des données et mise en conformité réglementaire.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 h-100 rounded-3" style="background: #f8fafc; border: 1px solid #e2e8f0;">
                        <h3 class="fw-bold h5 mb-3 font-monospace" style="color: #0284c7 !important;">[D] Développement Logiciel</h3>
                        <p class="small mb-0" style="color: #475569;">Développement agile d'applications mobiles, plateformes web, progiciels ERP et services cloud sur-mesure.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 h-100 rounded-3" style="background: #f8fafc; border: 1px solid #e2e8f0;">
                        <h3 class="fw-bold h5 mb-3 font-monospace" style="color: #0284c7 !important;">[F] Frameworks & Intégration</h3>
                        <p class="small mb-0" style="color: #475569;">Intégration d'outils digitaux et progiciels métiers adaptés aux besoins spécifiques de votre entreprise.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 h-100 rounded-3" style="background: #f8fafc; border: 1px solid #e2e8f0;">
                        <h3 class="fw-bold h5 mb-3 font-monospace" style="color: #0284c7 !important;">[I] DevOps & Infrastructure</h3>
                        <p class="small mb-0" style="color: #475569;">Automatisation CI/CD, conteneurisation Docker/Kubernetes, configuration de serveurs et administration cloud.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 h-100 rounded-3" style="background: #f8fafc; border: 1px solid #e2e8f0;">
                        <h3 class="fw-bold h5 mb-3 font-monospace" style="color: #0284c7 !important;">[M] Maintenance & Support</h3>
                        <p class="small mb-0" style="color: #475569;">Suivi proactif, monitoring en temps réel, support technique disponible 24h/24 et 7j/7 et mises à jour continues.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if (false): ?>
    <!-- Testimonials Section (Hidden) -->
    <section class="py-5" style="background: #f8fafc; border-top: 1px solid #e2e8f0;">
        <div class="container py-5 text-start">
            <div class="row mb-5 text-center">
                <div class="col-12">
                    <span class="text-uppercase tracking-wider fw-bold font-monospace d-block mb-2" style="color: #0284c7;">Témoignages</span>
                    <h2 class="f-nasalization h1 fw-bold" style="color: #0f172a;">Ils nous font confiance</h2>
                    <p class="mx-auto mt-2" style="max-width: 600px; color: #64748b;">
                        Découvrez les retours d'expérience de nos partenaires et clients qui utilisent nos solutions au quotidien.
                    </p>
                </div>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6">
                    <div class="p-5 rounded-4 h-100" style="background: #ffffff; border: 1px solid #e2e8f0; box-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.03);">
                        <div class="text-warning mb-3">★★★★★</div>
                        <p class="fs-5 mb-4" style="color: #334155; font-style: italic;">
                            "Grâce à l'intégration du module SUKU, la gestion administrative de notre complexe scolaire a été totalement transformée. Les notes, les absences et les paiements de scolarité sont maintenant fluides et centralisés. Les parents apprécient grandement le suivi en temps réel."
                        </p>
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle" style="width: 48px; height: 48px; background: linear-gradient(135deg, #0284c7, #38bdf8);"></div>
                            <div>
                                <h4 class="fw-bold h6 mb-0" style="color: #0f172a;">M. Tchakounté Paul</h4>
                                <small style="color: #64748b;">Directeur d'Établissement - Douala</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-5 rounded-4 h-100" style="background: #ffffff; border: 1px solid #e2e8f0; box-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.03);">
                        <div class="text-warning mb-3">★★★★★</div>
                        <p class="fs-5 mb-4" style="color: #334155; font-style: italic;">
                            "Melodi ERP est devenu le cœur battant de notre logistique et facturation. La gestion multi-entrepôts est d'une simplicité et d'une précision incroyable. L'équipe Byt3lab a su adapter le logiciel à nos contraintes opérationnelles locales."
                        </p>
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle" style="width: 48px; height: 48px; background: linear-gradient(135deg, #0284c7, #38bdf8);"></div>
                            <div>
                                <h4 class="fw-bold h6 mb-0" style="color: #0f172a;">Mme. Kenfack Sophie</h4>
                                <small style="color: #64748b;">Responsable Logistique, DistriAgro - Yaoundé</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners/Logos Section (Hidden) -->
    <section class="py-5" style="background: #ffffff; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
        <div class="container py-4 text-center">
            <span class="text-uppercase tracking-wider fw-bold font-monospace d-block mb-3" style="color: #0284c7;">Nos Partenaires & Écosystème</span>
            <div class="row g-4 align-items-center justify-content-center opacity-75">
                <div class="col-6 col-sm-4 col-md-2">
                    <span class="f-nasalization fw-bold small" style="color: #64748b;">AFRI_TECH</span>
                </div>
                <div class="col-6 col-sm-4 col-md-2">
                    <span class="f-nasalization fw-bold small" style="color: #64748b;">CAM_CLOUD</span>
                </div>
                <div class="col-6 col-sm-4 col-md-2">
                    <span class="f-nasalization fw-bold small" style="color: #64748b;">NEXUS_SYSTEMS</span>
                </div>
                <div class="col-6 col-sm-4 col-md-2">
                    <span class="f-nasalization fw-bold small" style="color: #64748b;">SUKU_NET</span>
                </div>
                <div class="col-6 col-sm-4 col-md-2">
                    <span class="f-nasalization fw-bold small" style="color: #64748b;">MELODI_SOCIETY</span>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    
    <!-- Global CTA to join the technological movement -->
    <section class="py-5 text-center position-relative" style="background: radial-gradient(circle at bottom, rgba(2, 132, 199, 0.08), transparent 70%), #f8fafc;">
        <div class="container py-5">
            <h2 class="f-nasalization h1 fw-bold mb-4" style="color: #0f172a;">Construisons le Futur Technologique de l'Afrique</h2>
            <p class="mx-auto mb-5 fs-5" style="max-width: 700px; color: #475569;">
                Que vous soyez un chef d'entreprise désireux de moderniser ses outils, une institution à digitaliser ou un développeur voulant relever des défis passionnants : collaborons ensemble.
            </p>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="a-button a-button--primary btn btn-lg py-3 px-5 fw-bold text-uppercase" style="border-radius: 8px;">Lancer une collaboration</a>
        </div>
    </section>

    <!-- BYT3LAB-CONTENT-END -->
</div>