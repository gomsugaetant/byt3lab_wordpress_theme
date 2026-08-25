<?php
// BYT3LAB Builder - auto-include component assets for header
if (!isset($GLOBALS['byt3lab_assets_printed'])) {
    $GLOBALS['byt3lab_assets_printed'] = ['css' => [], 'js' => []];
}
$__byt3lab_comp_slug = 'header';
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

<div class="component-header">
    <!-- BYT3LAB-CONTENT-START -->
    <nav class="c-navbar">
        <div class="container d-flex align-items-center justify-content-between">
            
            <!-- Logo -->
            <div class="c-navbar__logo">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="a-link a-link--logo c-navbar__logo-link d-flex align-items-center gap-2">
                    <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/media/byt3lab_sng.png'); ?>" alt="Byt3lab" style="height: 40px; width: auto;" />
                    <span class="f-nasalization" style="font-size: 20px; font-weight: bold; letter-spacing: 1px;">Byt3lab</span>
                </a>
            </div>

            <!-- Burger button -->
            <button class="a-button a-button--burger c-navbar__burger" aria-label="Toggle navigation">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6H20M4 12H20M4 18H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>

            <!-- Menu principal -->
            <ul class="c-navbar__menu">
                <li class="c-navbar__item">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="a-link c-navbar__link">Accueil</a>
                </li>
                <?php if (false): ?>
                <li class="c-navbar__item">
                    <a href="<?php echo esc_url(home_url('/#about')); ?>" class="a-link c-navbar__link">À Propos</a>
                </li>
                <?php endif; ?>
                <!-- Solutions Dropdown Mega Menu -->
                <li class="c-navbar__item c-navbar__item--has-dropdown position-relative">
                    <a href="<?php echo esc_url(home_url('/solutions/')); ?>" class="a-link d-inline-flex align-items-center gap-1">
                        Solutions
                        <svg class="dropdown-caret-icon" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 3px; display: inline-block; vertical-align: middle; transition: transform 0.2s ease;"><path d="M6 9l6 6 6-6"/></svg>
                    </a>
                    
                    <!-- Mega Popup Menu on Hover for Solutions -->
                    <div class="c-navbar__mega-popup shadow-lg rounded-4 p-4 text-start">
                        <div class="row g-4" style="min-width: 620px;">
                            <!-- Column 1: Melodi ERP & Modules -->
                            <div class="col-7">
                                <div class="d-flex align-items-center gap-2 mb-3 pb-2 border-bottom border-secondary border-opacity-25">
                                    <span class="badge p-2 rounded-2" style="background: rgba(2, 132, 199, 0.2); color: #38bdf8;">💼</span>
                                    <div>
                                        <a href="https://melodi.byt3lab.com" target="_blank" rel="noopener" class="fw-bold text-white text-decoration-none d-block lh-sm hover-blue fs-6">Melodi ERP</a>
                                        <small style="color: #94a3b8; font-size: 11px;">Progiciel de Gestion Modulaire</small>
                                    </div>
                                </div>
                                <ul class="list-unstyled mb-0 d-flex flex-column gap-2" style="font-size: 12.5px;">
                                    <li><a href="https://melodi.byt3lab.com" target="_blank" rel="noopener" class="dropdown-service-link text-decoration-none"><strong>Gestion de Commerce :</strong> Stocks, facturation & multi-boutiques</a></li>
                                    <li><a href="https://melodi.byt3lab.com/store/suku" target="_blank" rel="noopener" class="dropdown-service-link text-decoration-none"><strong>SUKU (Gestion Scolaire) :</strong> Scolarité, notes & communication</a></li>
                                    <li><a href="https://melodi.byt3lab.com" target="_blank" rel="noopener" class="dropdown-service-link text-decoration-none"><strong>Comptabilité & Logistique :</strong> Suivi financier & entrepôts</a></li>
                                </ul>
                            </div>

                            <!-- Column 2: Africa Mall (À Venir) -->
                            <div class="col-5">
                                <div class="d-flex align-items-center gap-2 mb-3 pb-2 border-bottom border-secondary border-opacity-25">
                                    <span class="badge p-2 rounded-2" style="background: rgba(234, 179, 8, 0.2); color: #facc15;">🌍</span>
                                    <div>
                                        <span class="fw-bold text-white d-block lh-sm fs-6">Africa Mall <span class="badge bg-warning text-dark font-monospace ms-1" style="font-size: 9.5px;">À VENIR</span></span>
                                        <small style="color: #94a3b8; font-size: 11px;">E-Commerce & Marketplace</small>
                                    </div>
                                </div>
                                <p class="small mb-2" style="color: #cbd5e1; font-size: 12px;">
                                    Vitrine numérique et marketplace souveraine dédiée à la promotion et distribution des produits et créations 100% africains.
                                </p>
                                <span class="badge bg-secondary-subtle text-info border border-info border-opacity-25 font-monospace small">🚀 Lancement Prochain</span>
                            </div>
                        </div>
                        <div class="mt-3 pt-3 border-top border-secondary border-opacity-25 text-center">
                            <a href="<?php echo esc_url(home_url('/solutions/')); ?>" class="btn btn-sm btn-outline-info w-100 font-monospace py-1" style="font-size: 11.5px; border-color: rgba(56,189,248,0.4); color: #38bdf8;">Explorer Toutes nos Solutions &rarr;</a>
                        </div>
                    </div>
                </li>
                <!-- Services Dropdown Mega Menu -->
                <li class="c-navbar__item c-navbar__item--has-dropdown position-relative">
                    <a href="<?php echo esc_url(home_url('/services/')); ?>" class="a-link d-inline-flex align-items-center gap-1">
                        Services
                        <svg class="dropdown-caret-icon" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 3px; display: inline-block; vertical-align: middle; transition: transform 0.2s ease;"><path d="M6 9l6 6 6-6"/></svg>
                    </a>
                    
                    <!-- Mega Popup Menu on Hover -->
                    <div class="c-navbar__mega-popup shadow-lg rounded-4 p-4 text-start">
                        <div class="row g-4" style="min-width: 680px;">
                            <!-- Column 1: Ngrafix -->
                            <div class="col-4">
                                <div class="d-flex align-items-center gap-2 mb-3 pb-2 border-bottom border-secondary border-opacity-25">
                                    <span class="badge p-2 rounded-2" style="background: rgba(147, 51, 234, 0.2); color: #c084fc;">🎨</span>
                                    <div>
                                        <a href="<?php echo esc_url(home_url('/ngrafix/')); ?>" class="fw-bold text-white text-decoration-none d-block lh-sm hover-purple fs-6">Ngrafix</a>
                                        <small style="color: #94a3b8; font-size: 11px;">Media & Design</small>
                                    </div>
                                </div>
                                <ul class="list-unstyled mb-0 d-flex flex-column gap-2" style="font-size: 12.5px;">
                                    <li><a href="<?php echo esc_url(home_url('/ngrafix/')); ?>" class="dropdown-service-link text-decoration-none">Branding & Identité</a></li>
                                    <li><a href="<?php echo esc_url(home_url('/ngrafix/')); ?>" class="dropdown-service-link text-decoration-none">UI/UX & Webdesign</a></li>
                                    <li><a href="<?php echo esc_url(home_url('/ngrafix/')); ?>" class="dropdown-service-link text-decoration-none">Design Graphique & Print</a></li>
                                    <li><a href="<?php echo esc_url(home_url('/ngrafix/')); ?>" class="dropdown-service-link text-decoration-none">Création de Contenu</a></li>
                                    <li><a href="<?php echo esc_url(home_url('/ngrafix/')); ?>" class="dropdown-service-link text-decoration-none">Montage Vidéo</a></li>
                                    <li><a href="<?php echo esc_url(home_url('/ngrafix/')); ?>" class="dropdown-service-link text-decoration-none">Modélisation 2D/3D</a></li>
                                </ul>
                            </div>

                            <!-- Column 2: Autodidakt -->
                            <div class="col-4">
                                <div class="d-flex align-items-center gap-2 mb-3 pb-2 border-bottom border-secondary border-opacity-25">
                                    <span class="badge p-2 rounded-2" style="background: rgba(16, 185, 129, 0.2); color: #34d399;">🎓</span>
                                    <div>
                                        <a href="<?php echo esc_url(home_url('/autodidakt/')); ?>" class="fw-bold text-white text-decoration-none d-block lh-sm hover-green fs-6">Autodidakt</a>
                                        <small style="color: #94a3b8; font-size: 11px;">Académie Pratique</small>
                                    </div>
                                </div>
                                <ul class="list-unstyled mb-0 d-flex flex-column gap-2" style="font-size: 12.5px;">
                                    <li><a href="<?php echo esc_url(home_url('/autodidakt/')); ?>" class="dropdown-service-link text-decoration-none">Développement Personnel</a></li>
                                    <li><a href="<?php echo esc_url(home_url('/autodidakt/')); ?>" class="dropdown-service-link text-decoration-none">Finance & Investissement</a></li>
                                    <li><a href="<?php echo esc_url(home_url('/autodidakt/')); ?>" class="dropdown-service-link text-decoration-none">Business & Entrepreneuriat</a></li>
                                    <li><a href="<?php echo esc_url(home_url('/autodidakt/')); ?>" class="dropdown-service-link text-decoration-none">Compétences Digitales</a></li>
                                </ul>
                            </div>

                            <!-- Column 3: Byt3lab Tech -->
                            <div class="col-4">
                                <div class="d-flex align-items-center gap-2 mb-3 pb-2 border-bottom border-secondary border-opacity-25">
                                    <span class="badge p-2 rounded-2" style="background: rgba(56, 189, 248, 0.2); color: #38bdf8;">💻</span>
                                    <div>
                                        <a href="<?php echo esc_url(home_url('/solutions/')); ?>" class="fw-bold text-white text-decoration-none d-block lh-sm hover-blue fs-6">Byt3lab Tech</a>
                                        <small style="color: #94a3b8; font-size: 11px;">Software & Cloud</small>
                                    </div>
                                </div>
                                <ul class="list-unstyled mb-0 d-flex flex-column gap-2" style="font-size: 12.5px;">
                                    <li><a href="<?php echo esc_url(home_url('/solutions/')); ?>" class="dropdown-service-link text-decoration-none">Progiciels (Melodi, SUKU)</a></li>
                                    <li><a href="<?php echo esc_url(home_url('/services/')); ?>" class="dropdown-service-link text-decoration-none">Développement Sur-Mesure</a></li>
                                    <li><a href="<?php echo esc_url(home_url('/services/')); ?>" class="dropdown-service-link text-decoration-none">Cybersécurité & Audits</a></li>
                                    <li><a href="<?php echo esc_url(home_url('/services/')); ?>" class="dropdown-service-link text-decoration-none">DevOps & Cloud</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="mt-3 pt-3 border-top border-secondary border-opacity-25 text-center">
                            <a href="<?php echo esc_url(home_url('/services/')); ?>" class="btn btn-sm btn-outline-info w-100 font-monospace py-1" style="font-size: 11.5px; border-color: rgba(56,189,248,0.4); color: #38bdf8;">Voir l'ensemble des Services & Filiales &rarr;</a>
                        </div>
                    </div>
                </li>
                <?php if (false): ?>
                <li class="c-navbar__item">
                    <a href="<?php echo esc_url(home_url('/realisations/')); ?>" class="a-link c-navbar__link">Réalisations</a>
                </li>
                <?php endif; ?>
                <li class="c-navbar__item">
                    <a href="<?php echo esc_url(home_url('/autodidakt/')); ?>" class="a-link c-navbar__link">Formations</a>
                </li>
                <li class="c-navbar__item">
                    <a href="<?php echo esc_url(home_url('/carriere/')); ?>" class="a-link c-navbar__link">Carrière</a>
                </li>
                <li class="c-navbar__item">
                    <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="a-link c-navbar__link">Blog</a>
                </li>
            </ul>

            <div class="c-navbar__actions">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="a-button a-button--primary c-navbar__btn">Contact</a>
            </div>
            
        </div>
    </nav>
    <!-- BYT3LAB-CONTENT-END -->
</div>