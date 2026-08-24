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
                <li class="c-navbar__item">
                    <a href="<?php echo esc_url(home_url('/#about')); ?>" class="a-link c-navbar__link">À Propos</a>
                </li>
                <li class="c-navbar__item">
                    <a href="<?php echo esc_url(home_url('/solutions/')); ?>" class="a-link c-navbar__link">Solutions</a>
                </li>
                <li class="c-navbar__item">
                    <a href="<?php echo esc_url(home_url('/services/')); ?>" class="a-link c-navbar__link">Services</a>
                </li>
                <li class="c-navbar__item">
                    <a href="<?php echo esc_url(home_url('/realisations/')); ?>" class="a-link c-navbar__link">Réalisations</a>
                </li>
                <li class="c-navbar__item">
                    <a href="<?php echo esc_url(home_url('/formations/')); ?>" class="a-link c-navbar__link">Formations</a>
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