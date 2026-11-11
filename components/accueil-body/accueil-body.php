<?php
/**
 * BYT3LAB Component - Accueil Body (Page d'accueil institutionnelle)
 * Architecture des 11 sections narratives du groupe Byt3Lab.
 */
if (!defined('ABSPATH')) {
    exit;
}
?>
<div class="b-home">

    <!-- =====================================================================
         SECTION 1 — HERO INSTITUTIONNEL
         ===================================================================== -->
    <section class="b-hero" id="hero">
        <div class="b-hero__pattern" aria-hidden="true"></div>
        <div class="b-container b-container--wide">
            <div class="b-hero__inner">
                
                <div class="b-hero__content">
                    <div class="b-hero__signature">
                        <?php byt3lab_e('home.hero.signature'); ?>
                    </div>
                    <h1 class="b-hero__title">
                        <?php byt3lab_e('home.hero.title'); ?>
                    </h1>
                    <p class="b-hero__subtitle">
                        <?php byt3lab_e('home.hero.subtitle'); ?>
                    </p>
                    <div class="b-hero__actions">
                        <a href="<?php echo esc_url(home_url('/technologies/')); ?>" class="b-btn b-btn--lg b-btn--primary">
                            <span>Explorer nos technologies</span>
                            <?php echo byt3lab_icon('arrow-right', 18); ?>
                        </a>
                        <a href="<?php echo esc_url(home_url('/partenaires/')); ?>" class="b-btn b-btn--lg b-btn--outline-dark">
                            <?php echo byt3lab_icon('handshake', 18); ?>
                            <span>Devenir partenaire</span>
                        </a>
                    </div>
                </div>

                <!-- Composition visuelle isométrique des 5 couches technologiques -->
                <div class="b-hero__visual" aria-hidden="true">
                    <svg class="b-tech-layers-svg" viewBox="0 0 520 440" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="layer-grad-1" x1="0" y1="0" x2="1" y2="1">
                                <stop offset="0%" stop-color="#1D7FD8" stop-opacity="0.9"/>
                                <stop offset="100%" stop-color="#0B3D6B" stop-opacity="0.95"/>
                            </linearGradient>
                            <linearGradient id="layer-grad-2" x1="0" y1="0" x2="1" y2="1">
                                <stop offset="0%" stop-color="#38BDF8" stop-opacity="0.8"/>
                                <stop offset="100%" stop-color="#1D7FD8" stop-opacity="0.9"/>
                            </linearGradient>
                            <linearGradient id="layer-grad-3" x1="0" y1="0" x2="1" y2="1">
                                <stop offset="0%" stop-color="#4FD3F5" stop-opacity="0.75"/>
                                <stop offset="100%" stop-color="#0284C7" stop-opacity="0.85"/>
                            </linearGradient>
                            <linearGradient id="layer-grad-4" x1="0" y1="0" x2="1" y2="1">
                                <stop offset="0%" stop-color="#10B981" stop-opacity="0.75"/>
                                <stop offset="100%" stop-color="#047857" stop-opacity="0.85"/>
                            </linearGradient>
                            <linearGradient id="layer-grad-5" x1="0" y1="0" x2="1" y2="1">
                                <stop offset="0%" stop-color="#F59E0B" stop-opacity="0.75"/>
                                <stop offset="100%" stop-color="#B45309" stop-opacity="0.85"/>
                            </linearGradient>
                            <filter id="layer-shadow" x="-10%" y="-10%" width="120%" height="130%">
                                <feDropShadow dx="0" dy="12" stdDeviation="16" flood-color="#000" flood-opacity="0.35"/>
                            </filter>
                        </defs>

                        <!-- Couche 5 : Énergie & Résilience (base) -->
                        <g filter="url(#layer-shadow)">
                            <path d="M 260 320 L 440 230 L 260 160 L 80 230 Z" fill="url(#layer-grad-5)" stroke="rgba(255,255,255,0.2)" stroke-width="1.5"/>
                            <path d="M 80 230 L 260 320 L 260 340 L 80 250 Z" fill="#92400E" opacity="0.9"/>
                            <path d="M 440 230 L 260 320 L 260 340 L 440 250 Z" fill="#78350F" opacity="0.9"/>
                            <text x="260" y="240" fill="#FFF" font-family="'Space Grotesk', sans-serif" font-size="11" font-weight="700" letter-spacing="1.5" text-anchor="middle" opacity="0.9">05 · TECHNOLOGIES ÉNERGÉTIQUES</text>
                        </g>

                        <!-- Couche 4 : Technologies industrielles & IoT -->
                        <g filter="url(#layer-shadow)">
                            <path d="M 260 260 L 440 170 L 260 100 L 80 170 Z" fill="url(#layer-grad-4)" stroke="rgba(255,255,255,0.2)" stroke-width="1.5"/>
                            <path d="M 80 170 L 260 260 L 260 275 L 80 185 Z" fill="#065F46" opacity="0.9"/>
                            <path d="M 440 170 L 260 260 L 260 275 L 440 185 Z" fill="#064E3B" opacity="0.9"/>
                            <text x="260" y="180" fill="#FFF" font-family="'Space Grotesk', sans-serif" font-size="11" font-weight="700" letter-spacing="1.5" text-anchor="middle" opacity="0.9">04 · TECHNOLOGIES INDUSTRIELLES</text>
                        </g>

                        <!-- Couche 3 : Matériel & Réseaux -->
                        <g filter="url(#layer-shadow)">
                            <path d="M 260 200 L 440 110 L 260 40 L 80 110 Z" fill="url(#layer-grad-3)" stroke="rgba(255,255,255,0.25)" stroke-width="1.5"/>
                            <path d="M 80 110 L 260 200 L 260 215 L 80 125 Z" fill="#0369A1" opacity="0.9"/>
                            <path d="M 440 110 L 260 200 L 260 215 L 440 125 Z" fill="#075985" opacity="0.9"/>
                            <text x="260" y="120" fill="#FFF" font-family="'Space Grotesk', sans-serif" font-size="11" font-weight="700" letter-spacing="1.5" text-anchor="middle" opacity="0.9">03 · MATÉRIEL &amp; RÉSEAUX</text>
                        </g>

                        <!-- Couche 2 : Infrastructure & Cloud (BWS) -->
                        <g filter="url(#layer-shadow)">
                            <path d="M 260 140 L 440 50 L 260 -20 L 80 50 Z" fill="url(#layer-grad-2)" stroke="rgba(255,255,255,0.3)" stroke-width="1.5"/>
                            <path d="M 80 50 L 260 140 L 260 155 L 80 65 Z" fill="#0284C7" opacity="0.9"/>
                            <path d="M 440 50 L 260 140 L 260 155 L 440 65 Z" fill="#0369A1" opacity="0.9"/>
                            <text x="260" y="60" fill="#FFF" font-family="'Space Grotesk', sans-serif" font-size="11" font-weight="700" letter-spacing="1.5" text-anchor="middle" opacity="0.9">02 · INFRASTRUCTURE &amp; CLOUD</text>
                        </g>

                        <!-- Couche 1 : Logiciel & Numérique (sommet) -->
                        <g filter="url(#layer-shadow)">
                            <path d="M 260 80 L 440 -10 L 260 -80 L 80 -10 Z" fill="url(#layer-grad-1)" stroke="rgba(255,255,255,0.4)" stroke-width="1.5"/>
                            <path d="M 80 -10 L 260 80 L 260 95 L 80 5 Z" fill="#0B3D6B" opacity="0.9"/>
                            <path d="M 440 -10 L 260 80 L 260 95 L 440 5 Z" fill="#002A4E" opacity="0.9"/>
                            <text x="260" y="0" fill="#FFF" font-family="'Space Grotesk', sans-serif" font-size="11" font-weight="700" letter-spacing="1.5" text-anchor="middle" opacity="0.9">01 · LOGICIEL &amp; NUMÉRIQUE</text>
                        </g>
                    </svg>
                </div>

            </div>
        </div>
    </section>

    <!-- =====================================================================
         SECTION 2 — ABOUT BYT3LAB (Positionnement Groupe)
         ===================================================================== -->
    <section class="b-section" id="about">
        <div class="b-container">
            <div class="b-section-head b-section-head--center">
                <span class="b-eyebrow"><?php byt3lab_e('home.about.eyebrow'); ?></span>
                <h2 class="b-title"><?php byt3lab_e('home.about.title'); ?></h2>
                <p class="b-lead"><?php byt3lab_e('home.about.text'); ?></p>
            </div>

            <div class="b-about-grid">
                <div class="b-about-card">
                    <span class="b-about-card__num">01</span>
                    <h3 class="b-about-card__title">Écosystème structuré</h3>
                    <p class="b-about-card__text">
                        Byt3Lab dépasse le modèle d'agence classique pour opérer comme un ensemble coordonné de divisions technologiques, de produits propriétaires et d'une marque créative spécialisée.
                    </p>
                </div>

                <div class="b-about-card">
                    <span class="b-about-card__num">02</span>
                    <h3 class="b-about-card__title">Excellence d'ingénierie</h3>
                    <p class="b-about-card__text">
                        De la ligne de code à l'infrastructure réseau, nos équipes conçoivent des solutions résilientes, sécurisées et adaptées aux réalités opérationnelles des entreprises en Afrique.
                    </p>
                </div>

                <div class="b-about-card">
                    <span class="b-about-card__num">03</span>
                    <h3 class="b-about-card__title">Ambition panafricaine</h3>
                    <p class="b-about-card__text">
                        Enraciné au Cameroun, Byt3Lab construit des partenariats et déploie des technologies conçues pour accompagner la modernisation des industries et des infrastructures du continent.
                    </p>
                </div>
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <a href="<?php echo esc_url(home_url('/a-propos/')); ?>" class="b-btn b-btn--secondary">
                    <span>Découvrir l'histoire &amp; la vision de Byt3Lab</span>
                    <?php echo byt3lab_icon('arrow-right', 16); ?>
                </a>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         SECTION 3 — OUR TECHNOLOGY DIVISIONS (Les 5 axes stratégiques)
         ===================================================================== -->
    <section class="b-section b-section--alt" id="divisions">
        <div class="b-container">
            <div class="b-section-head">
                <span class="b-eyebrow"><?php byt3lab_e('home.divisions.eyebrow'); ?></span>
                <h2 class="b-title"><?php byt3lab_e('home.divisions.title'); ?></h2>
                <p class="b-lead"><?php byt3lab_e('home.divisions.intro'); ?></p>
            </div>

            <?php
            $divisions_query = new WP_Query([
                'post_type'      => 'byt3lab_division',
                'posts_per_page' => 5,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            ]);
            ?>

            <div class="b-divisions-grid">
                <?php if ($divisions_query->have_posts()) : while ($divisions_query->have_posts()) : $divisions_query->the_post(); 
                    $div_id = get_the_ID();
                    $status = get_post_meta($div_id, '_byt3lab_status', true) ?: 'active';
                    $icon_id = get_post_meta($div_id, '_byt3lab_icon', true) ?: 'code';
                    $expertise = byt3lab_meta_lines($div_id, '_byt3lab_division_expertise');
                    $is_active_card = in_array($status, ['active']);
                ?>
                    <article class="b-card b-div-card <?php echo $is_active_card ? 'b-div-card--active' : 'b-div-card--sub'; ?>">
                        <div class="b-card__header">
                            <div class="b-card__icon-wrap">
                                <?php echo byt3lab_icon($icon_id, 24); ?>
                            </div>
                            <?php echo byt3lab_status_badge($status); ?>
                        </div>

                        <h3 class="b-card__title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>

                        <p class="b-card__text">
                            <?php echo esc_html(get_the_excerpt()); ?>
                        </p>

                        <?php if (!empty($expertise)) : ?>
                            <div class="b-card__tags">
                                <?php foreach (array_slice($expertise, 0, 4) as $tag) : ?>
                                    <span class="b-tag"><?php echo esc_html($tag); ?></span>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <div class="b-card__footer">
                            <a href="<?php the_permalink(); ?>" class="b-btn b-btn--ghost">
                                <span>Explorer la division</span>
                                <?php echo byt3lab_icon('arrow-right', 16); ?>
                            </a>
                        </div>
                    </article>
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>

            <div style="text-align: center; margin-top: 36px;">
                <a href="<?php echo esc_url(home_url('/technologies/')); ?>" class="b-btn b-btn--primary">
                    <span>Consulter le détail des 5 divisions technologiques</span>
                    <?php echo byt3lab_icon('arrow-right', 16); ?>
                </a>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         SECTION 4 — OUR PRODUCTS & SOLUTIONS (MELODI ERP, SUKU, BWS)
         ===================================================================== -->
    <section class="b-section" id="produits">
        <div class="b-container">
            <div class="b-section-head b-section-head--center">
                <span class="b-eyebrow"><?php byt3lab_e('home.offers.eyebrow'); ?></span>
                <h2 class="b-title"><?php byt3lab_e('home.offers.title'); ?></h2>
                <p class="b-lead"><?php byt3lab_e('home.offers.intro'); ?></p>
            </div>

            <?php
            $offers_query = new WP_Query([
                'post_type'      => 'byt3lab_solution',
                'posts_per_page' => 3,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            ]);
            ?>

            <div class="b-grid b-grid--3">
                <?php if ($offers_query->have_posts()) : while ($offers_query->have_posts()) : $offers_query->the_post(); 
                    $off_id = get_the_ID();
                    $off_status = get_post_meta($off_id, '_byt3lab_status', true) ?: 'active';
                    $badge = get_post_meta($off_id, '_byt3lab_solution_badge', true);
                    $tagline = get_post_meta($off_id, '_byt3lab_offer_tagline', true);
                    $accent = get_post_meta($off_id, '_byt3lab_offer_accent', true) ?: '#1D7FD8';
                    $features = byt3lab_meta_lines($off_id, '_byt3lab_solution_features');
                    $url = get_post_meta($off_id, '_byt3lab_solution_url', true);
                    $btn_text = get_post_meta($off_id, '_byt3lab_solution_button_text', true) ?: 'En savoir plus';
                ?>
                    <article class="b-product-card" style="--card-accent: <?php echo esc_attr($accent); ?>;">
                        <div class="b-product-card__top">
                            <div style="display: flex; justify-content: space-between; align-items: center; gap: 8px; margin-bottom: 8px;">
                                <span class="b-product-card__badge" style="margin-bottom: 0;"><?php echo esc_html($badge); ?></span>
                                <?php echo byt3lab_status_badge($off_status); ?>
                            </div>
                            <h3 class="b-product-card__title"><?php the_title(); ?></h3>
                            <?php if ($tagline) : ?>
                                <p class="b-product-card__tagline"><?php echo esc_html($tagline); ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="b-product-card__body">
                            <p style="font-size: 14px; color: var(--c-gray-600); line-height: 1.6; margin-bottom: 20px;">
                                <?php echo esc_html(get_the_excerpt()); ?>
                            </p>

                            <?php if (!empty($features)) : ?>
                                <ul class="b-checklist">
                                    <?php foreach (array_slice($features, 0, 4) as $feat) : ?>
                                        <li>
                                            <?php echo byt3lab_icon('check', 16); ?>
                                            <span><?php echo esc_html($feat); ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>

                            <div class="b-product-card__actions">
                                <a href="<?php the_permalink(); ?>" class="b-btn b-btn--sm b-btn--secondary">
                                    <span>Fiche détaillée</span>
                                </a>
                                <?php if ($url) : ?>
                                    <a href="<?php echo esc_url($url); ?>" class="b-btn b-btn--sm b-btn--primary" target="_blank" rel="noopener noreferrer">
                                        <span><?php echo esc_html($btn_text); ?></span>
                                        <?php echo byt3lab_icon('arrow-up-right', 14); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </article>
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>

            <div style="text-align: center; margin-top: 36px;">
                <a href="<?php echo esc_url(home_url('/produits/')); ?>" class="b-btn b-btn--secondary">
                    <span>Explorer l'ensemble des produits et solutions</span>
                    <?php echo byt3lab_icon('arrow-right', 16); ?>
                </a>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         SECTION 5 — CREATIVE EXCELLENCE / NGRAFIX STUDIO
         ===================================================================== -->
    <section class="b-section b-section--tight" id="ngrafix">
        <div class="b-container">
            <div class="b-ngx-feature">
                <div class="b-ngx-feature__inner">
                    
                    <div class="b-ngx-feature__content">
                        <span class="b-eyebrow b-ngx-eyebrow"><?php byt3lab_e('home.ngrafix.eyebrow'); ?></span>
                        <h2 class="b-title"><?php byt3lab_e('home.ngrafix.title'); ?></h2>
                        <p style="font-size: 16px; line-height: 1.7; margin-bottom: 28px;">
                            <?php byt3lab_e('home.ngrafix.text'); ?>
                        </p>
                        <div class="d-flex gap-3 flex-wrap">
                            <a href="<?php echo esc_url(home_url('/ngrafix/')); ?>" class="b-btn b-btn--lg" style="background: var(--c-ngx-orange); color: #fff; border-color: var(--c-ngx-orange);">
                                <span>Découvrir le Studio NGRAFIX</span>
                                <?php echo byt3lab_icon('arrow-right', 18); ?>
                            </a>
                            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="b-btn b-btn--lg b-btn--outline-dark">
                                <span>Projet créatif ou de marque</span>
                            </a>
                        </div>
                    </div>

                    <!-- Grille des 4 pôles NGRAFIX -->
                    <div class="b-ngx-grid">
                        <div class="b-ngx-box">
                            <div class="b-ngx-box__num">01 · BRAND IDENTITY</div>
                            <div class="b-ngx-box__title">Identité de marque</div>
                            <p class="b-ngx-box__desc">Logos, chartes 360°, naming et stratégie visuelle institutionnelle.</p>
                        </div>

                        <div class="b-ngx-box">
                            <div class="b-ngx-box__num">02 · CREATIVE DESIGN</div>
                            <div class="b-ngx-box__title">Design créatif</div>
                            <p class="b-ngx-box__desc">UI/UX, supports marketing, packaging et design éditorial soigné.</p>
                        </div>

                        <div class="b-ngx-box">
                            <div class="b-ngx-box__num">03 · DIGITAL COM</div>
                            <div class="b-ngx-box__title">Communication digitale</div>
                            <p class="b-ngx-box__desc">Campagnes, gestion des réseaux sociaux et stratégie de contenu.</p>
                        </div>

                        <div class="b-ngx-box">
                            <div class="b-ngx-box__num">04 · MEDIA PRODUCTION</div>
                            <div class="b-ngx-box__title">Production média</div>
                            <p class="b-ngx-box__desc">Photographie professionnelle, motion design et production audiovisuelle.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         SECTION 6 — TECHNOLOGY & INNOVATION (Construire ce qui vient)
         ===================================================================== -->
    <section class="b-section b-section--alt" id="innovation">
        <div class="b-container">
            <div class="b-section-head b-section-head--center">
                <span class="b-eyebrow"><?php byt3lab_e('home.innovation.eyebrow'); ?></span>
                <h2 class="b-title"><?php byt3lab_e('home.innovation.title'); ?></h2>
                <p class="b-lead"><?php byt3lab_e('home.innovation.intro'); ?></p>
            </div>

            <?php
            $inno_items = byt3lab_pairs(byt3lab_opt('home.innovation.items'));
            ?>
            <div class="b-grid b-grid--3">
                <?php foreach ($inno_items as $item) : 
                    $inno_title = $item[0] ?? '';
                    $inno_desc  = $item[1] ?? '';
                    $inno_icon  = $item[2] ?? 'brain';
                ?>
                    <div class="b-card" style="padding: 28px;">
                        <div class="b-card__icon-wrap" style="margin-bottom: 16px;">
                            <?php echo byt3lab_icon($inno_icon, 22); ?>
                        </div>
                        <h3 style="font-size: 1.15rem; margin-bottom: 8px;"><?php echo esc_html($inno_title); ?></h3>
                        <p style="font-size: 13.5px; color: var(--c-gray-600); line-height: 1.6; margin: 0;">
                            <?php echo esc_html($inno_desc); ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>

            <div style="text-align: center; margin-top: 36px;">
                <a href="<?php echo esc_url(home_url('/recherche-innovation/')); ?>" class="b-btn b-btn--secondary">
                    <span>En savoir plus sur nos axes de R&amp;D</span>
                    <?php echo byt3lab_icon('arrow-right', 16); ?>
                </a>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         SECTION 7 — INDUSTRIES WE SERVE (Secteurs d'activité)
         ===================================================================== -->
    <section class="b-section" id="industries">
        <div class="b-container">
            <div class="b-section-head b-section-head--center">
                <span class="b-eyebrow"><?php byt3lab_e('home.industries.eyebrow'); ?></span>
                <h2 class="b-title"><?php byt3lab_e('home.industries.title'); ?></h2>
                <p class="b-lead">Des technologies conçues pour répondre aux défis spécifiques de vos filières.</p>
            </div>

            <?php
            $industries_data = byt3lab_pairs(byt3lab_opt('home.industries.items'));
            ?>
            <div class="b-tabs">
                <div class="b-tabs__nav" role="tablist" aria-label="Secteurs d'activité">
                    <?php foreach ($industries_data as $idx => $ind) : 
                        $tab_id = 'tab-ind-' . $idx;
                        $panel_id = 'panel-ind-' . $idx;
                        $ind_title = $ind[0] ?? '';
                    ?>
                        <button type="button" 
                                class="b-tabs__btn" 
                                role="tab" 
                                id="<?php echo esc_attr($tab_id); ?>" 
                                aria-controls="<?php echo esc_attr($panel_id); ?>" 
                                aria-selected="<?php echo $idx === 0 ? 'true' : 'false'; ?>">
                            <?php echo esc_html($ind_title); ?>
                        </button>
                    <?php endforeach; ?>
                </div>

                <?php foreach ($industries_data as $idx => $ind) : 
                    $panel_id = 'panel-ind-' . $idx;
                    $tab_id = 'tab-ind-' . $idx;
                    $ind_title = $ind[0] ?? '';
                    $ind_prob  = $ind[1] ?? '';
                    $ind_sol   = $ind[2] ?? '';
                    $ind_icon  = $ind[3] ?? 'briefcase';
                ?>
                    <div class="b-tabs__panel <?php echo $idx === 0 ? 'is-active' : ''; ?>" 
                         id="<?php echo esc_attr($panel_id); ?>" 
                         role="tabpanel" 
                         aria-labelledby="<?php echo esc_attr($tab_id); ?>">
                        <div>
                            <div class="b-tabs__col-title">Problématiques identifiées</div>
                            <p style="font-size: 15px; color: var(--c-gray-700); line-height: 1.65;">
                                <?php echo esc_html($ind_prob); ?>
                            </p>
                        </div>
                        <div>
                            <div class="b-tabs__col-title">Apport technologique BYT3LAB</div>
                            <p style="font-size: 15px; color: var(--c-navy-900); font-weight: 500; line-height: 1.65;">
                                <?php echo esc_html($ind_sol); ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         SECTION 8 — PROJECTS & ACHIEVEMENTS (Réalisations réelles uniquement)
         ===================================================================== -->
    <?php if (byt3lab_opt('display.home_projects', '1') === '1') : ?>
    <section class="b-section b-section--alt" id="realisations">
        <div class="b-container">
            <div class="b-section-head b-section-head--center">
                <span class="b-eyebrow"><?php byt3lab_e('home.projects.eyebrow'); ?></span>
                <h2 class="b-title"><?php byt3lab_e('home.projects.title'); ?></h2>
                <p class="b-lead"><?php byt3lab_e('home.projects.intro'); ?></p>
            </div>

            <?php
            $projects_query = new WP_Query([
                'post_type'      => 'byt3lab_project',
                'posts_per_page' => 3,
                'post_status'    => 'publish',
            ]);
            ?>

            <?php if ($projects_query->have_posts()) : ?>
                <div class="b-grid b-grid--3">
                    <?php while ($projects_query->have_posts()) : $projects_query->the_post(); 
                        $p_id = get_the_ID();
                        $category = get_post_meta($p_id, '_byt3lab_project_category', true);
                        $client   = get_post_meta($p_id, '_byt3lab_project_client', true);
                        $year     = get_post_meta($p_id, '_byt3lab_project_year', true);
                    ?>
                        <article class="b-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <div style="margin: -32px -32px 20px -32px; border-radius: var(--radius-lg) var(--radius-lg) 0 0; overflow: hidden;">
                                    <?php the_post_thumbnail('medium_large', ['style' => 'width:100%; height:180px; object-fit:cover;']); ?>
                                </div>
                            <?php endif; ?>

                            <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: var(--c-blue-500); margin-bottom: 6px;">
                                <?php echo esc_html($category ?: 'Ingénierie'); ?> <?php if ($year) echo '· ' . esc_html($year); ?>
                            </div>

                            <h3 class="b-card__title"><?php the_title(); ?></h3>
                            <p class="b-card__text"><?php echo esc_html(get_the_excerpt()); ?></p>

                            <div class="b-card__footer">
                                <a href="<?php the_permalink(); ?>" class="b-btn b-btn--ghost">
                                    <span>Consulter l'étude &rarr;</span>
                                </a>
                            </div>
                        </article>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            <?php else : ?>
                <!-- État sobre et transparent : aucun projet fictif n'est inventé -->
                <div class="b-empty-state">
                    <div class="b-empty-state__icon">
                        <?php echo byt3lab_icon('rocket', 40); ?>
                    </div>
                    <h3 class="b-empty-state__title">Études de cas en cours de documentation</h3>
                    <p class="b-empty-state__text">
                        <?php byt3lab_e('home.projects.empty'); ?>
                    </p>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="<?php echo esc_url(home_url('/produits/')); ?>" class="b-btn b-btn--sm b-btn--primary">
                            <span>Voir nos produits logiciels</span>
                        </a>
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="b-btn b-btn--sm b-btn--secondary">
                            <span>Échanger sur vos projets</span>
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>

    <!-- =====================================================================
         SECTION 9 — PARTNERSHIPS (Construire l'avenir ensemble)
         ===================================================================== -->
    <section class="b-section" id="partenariats">
        <div class="b-container">
            <div class="b-section-head b-section-head--center">
                <span class="b-eyebrow"><?php byt3lab_e('home.partners.eyebrow'); ?></span>
                <h2 class="b-title"><?php byt3lab_e('home.partners.title'); ?></h2>
                <p class="b-lead"><?php byt3lab_e('home.partners.text'); ?></p>
            </div>

            <?php
            $partner_types = byt3lab_lines(byt3lab_opt('home.partners.types'));
            ?>
            <div class="b-grid b-grid--3" style="margin-bottom: 40px;">
                <?php foreach ($partner_types as $ptype) : ?>
                    <div class="b-card" style="padding: 24px; text-align: center;">
                        <div class="b-card__icon-wrap" style="margin: 0 auto 12px auto;">
                            <?php echo byt3lab_icon('handshake', 20); ?>
                        </div>
                        <h3 style="font-size: 15px; font-weight: 700; color: var(--c-navy-950); margin: 0;">
                            <?php echo esc_html($ptype); ?>
                        </h3>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Logos partenaires si publiés en base -->
            <?php
            $partners_query = new WP_Query([
                'post_type'      => 'byt3lab_partner',
                'posts_per_page' => 12,
                'post_status'    => 'publish',
            ]);
            if ($partners_query->have_posts()) :
            ?>
                <div class="b-partners-logos" style="display: flex; gap: 32px; justify-content: center; align-items: center; flex-wrap: wrap; margin-bottom: 36px; padding: 24px; background: var(--c-gray-50); border-radius: var(--radius-lg);">
                    <?php while ($partners_query->have_posts()) : $partners_query->the_post(); ?>
                        <div style="opacity: 0.75; filter: grayscale(1); transition: all var(--transition-fast);">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('thumbnail', ['style' => 'height: 40px; width: auto; object-fit: contain;']); ?>
                            <?php else : ?>
                                <span style="font-weight: 600; color: var(--c-gray-600);"><?php the_title(); ?></span>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            <?php endif; ?>

            <div style="text-align: center;">
                <a href="<?php echo esc_url(home_url('/partenaires/')); ?>" class="b-btn b-btn--lg b-btn--primary">
                    <?php echo byt3lab_icon('handshake', 18); ?>
                    <span>Découvrir notre programme &amp; proposer un partenariat</span>
                </a>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         SECTION 10 — FINAL CTA (Concevons ce qui vient)
         ===================================================================== -->
    <section class="b-section b-section--tight" id="cta">
        <div class="b-container">
            <div class="b-cta-band">
                <h2 class="b-title"><?php byt3lab_e('home.cta.title'); ?></h2>
                <p><?php byt3lab_e('home.cta.text'); ?></p>
                <div class="b-cta-band__actions">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="b-btn b-btn--lg b-btn--on-dark">
                        <?php echo byt3lab_icon('mail', 18); ?>
                        <span>Nous contacter</span>
                    </a>
                    <a href="<?php echo esc_url(home_url('/partenaires/#formulaire')); ?>" class="b-btn b-btn--lg b-btn--outline-dark">
                        <?php echo byt3lab_icon('handshake', 18); ?>
                        <span>Proposer une collaboration</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>
