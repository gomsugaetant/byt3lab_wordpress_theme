<?php
/**
 * BYT3LAB Component - Header Institutionnel
 * Navigation principale, mega-menu des divisions technologiques et accès partenaires.
 */
if (!defined('ABSPATH')) {
    exit;
}
?>
<header class="b-header" id="b-header" role="banner">
    <div class="b-header__bar">
        <div class="b-container b-container--wide b-header__inner">

            <!-- Logo & Identité Groupe -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="b-brand" aria-label="BYT3LAB — Accueil">
                <?php echo byt3lab_logo_svg('b-brand__mark'); ?>
                <span class="b-brand__text">
                    <span class="b-brand__name">BYT3LAB</span>
                    <span class="b-brand__tagline">Technology &amp; Innovation Group</span>
                </span>
            </a>

            <!-- Navigation Desktop -->
            <nav class="b-nav d-none-mobile" aria-label="<?php esc_attr_e('Navigation principale', 'byt3lab_wordpress_theme'); ?>">
                <ul class="b-nav__list">
                    <li class="b-nav__item">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="b-nav__link <?php echo (is_front_page() || is_home()) ? 'is-current' : ''; ?>">
                            Accueil
                        </a>
                    </li>

                    <!-- Menu Déroulant / Mega-menu Technologies -->
                    <li class="b-nav__item b-nav__item--has-drop">
                        <a href="<?php echo esc_url(home_url('/technologies/')); ?>" class="b-nav__link" aria-expanded="false" aria-haspopup="true">
                            <span>Technologies</span>
                            <?php echo byt3lab_icon('chevron-down', 14, 'b-nav__caret'); ?>
                        </a>
                        <div class="b-mega-menu" role="menu">
                            <div class="b-mega-menu__header">
                                <span class="b-mega-menu__title">Divisions Technologiques</span>
                                <a href="<?php echo esc_url(home_url('/technologies/')); ?>" class="b-mega-menu__all">Vue d'ensemble &rarr;</a>
                            </div>
                            <div class="b-mega-menu__grid">
                                <a href="<?php echo esc_url(home_url('/technologies/logiciel-numerique/')); ?>" class="b-mega-item" role="menuitem">
                                    <span class="b-mega-item__icon"><?php echo byt3lab_icon('code', 18); ?></span>
                                    <span class="b-mega-item__content">
                                        <span class="b-mega-item__name">Logiciel &amp; Numérique</span>
                                        <span class="b-mega-item__desc">ERP, SaaS, applications métiers &amp; IA</span>
                                        <?php echo byt3lab_status_badge('active'); ?>
                                    </span>
                                </a>

                                <a href="<?php echo esc_url(home_url('/technologies/infrastructure-cloud/')); ?>" class="b-mega-item" role="menuitem">
                                    <span class="b-mega-item__icon"><?php echo byt3lab_icon('cloud', 18); ?></span>
                                    <span class="b-mega-item__content">
                                        <span class="b-mega-item__name">Infrastructure &amp; Cloud</span>
                                        <span class="b-mega-item__desc">Hébergement managé, serveurs &amp; BWS</span>
                                        <?php echo byt3lab_status_badge('active'); ?>
                                    </span>
                                </a>

                                <a href="<?php echo esc_url(home_url('/technologies/materiel-reseaux/')); ?>" class="b-mega-item" role="menuitem">
                                    <span class="b-mega-item__icon"><?php echo byt3lab_icon('network', 18); ?></span>
                                    <span class="b-mega-item__content">
                                        <span class="b-mega-item__name">Matériel &amp; Réseaux</span>
                                        <span class="b-mega-item__desc">Équipements, serveurs &amp; connectivité</span>
                                        <?php echo byt3lab_status_badge('in_development'); ?>
                                    </span>
                                </a>

                                <a href="<?php echo esc_url(home_url('/technologies/technologies-industrielles/')); ?>" class="b-mega-item" role="menuitem">
                                    <span class="b-mega-item__icon"><?php echo byt3lab_icon('factory', 18); ?></span>
                                    <span class="b-mega-item__content">
                                        <span class="b-mega-item__name">Technologies Industrielles</span>
                                        <span class="b-mega-item__desc">IoT, capteurs, systèmes embarqués</span>
                                        <?php echo byt3lab_status_badge('strategic'); ?>
                                    </span>
                                </a>

                                <a href="<?php echo esc_url(home_url('/technologies/technologies-energetiques/')); ?>" class="b-mega-item" role="menuitem">
                                    <span class="b-mega-item__icon"><?php echo byt3lab_icon('sun', 18); ?></span>
                                    <span class="b-mega-item__content">
                                        <span class="b-mega-item__name">Technologies Énergétiques</span>
                                        <span class="b-mega-item__desc">Solaire, stockage &amp; résilience électrique</span>
                                        <?php echo byt3lab_status_badge('strategic'); ?>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </li>

                    <!-- Menu Déroulant Produits -->
                    <li class="b-nav__item b-nav__item--has-drop">
                        <a href="<?php echo esc_url(home_url('/produits/')); ?>" class="b-nav__link" aria-expanded="false" aria-haspopup="true">
                            <span>Produits</span>
                            <?php echo byt3lab_icon('chevron-down', 14, 'b-nav__caret'); ?>
                        </a>
                        <div class="b-dropdown" role="menu">
                            <a href="<?php echo esc_url(home_url('/produits/melodi-erp/')); ?>" class="b-dropdown__item" role="menuitem">
                                <strong>MELODI ERP</strong>
                                <span>Progiciel de gestion modulaire</span>
                            </a>
                            <a href="<?php echo esc_url(home_url('/produits/suku/')); ?>" class="b-dropdown__item" role="menuitem">
                                <strong>SUKU</strong>
                                <span>Solution pour le secteur éducatif</span>
                            </a>
                            <a href="<?php echo esc_url(home_url('/services/bws/')); ?>" class="b-dropdown__item" role="menuitem">
                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                    <strong>BWS Infrastructure</strong>
                                    <?php echo byt3lab_status_badge('in_development'); ?>
                                </div>
                                <span>Hébergement &amp; cloud managé</span>
                            </a>
                        </div>
                    </li>

                    <li class="b-nav__item">
                        <a href="<?php echo esc_url(home_url('/services/')); ?>" class="b-nav__link">
                            Services
                        </a>
                    </li>

                    <li class="b-nav__item">
                        <a href="<?php echo esc_url(home_url('/ngrafix/')); ?>" class="b-nav__link b-nav__link--studio">
                            <span class="b-nav__studio-badge">Studio</span>
                            <span>NGRAFIX</span>
                        </a>
                    </li>

                    <li class="b-nav__item">
                        <a href="<?php echo esc_url(home_url('/recherche-innovation/')); ?>" class="b-nav__link">
                            R&amp;D
                        </a>
                    </li>

                    <li class="b-nav__item b-nav__item--has-drop">
                        <a href="<?php echo esc_url(home_url('/a-propos/')); ?>" class="b-nav__link" aria-expanded="false" aria-haspopup="true">
                            <span>Groupe</span>
                            <?php echo byt3lab_icon('chevron-down', 14, 'b-nav__caret'); ?>
                        </a>
                        <div class="b-dropdown" role="menu">
                            <a href="<?php echo esc_url(home_url('/a-propos/')); ?>" class="b-dropdown__item" role="menuitem">
                                <strong>À Propos du Groupe</strong>
                                <span>Vision, mission et organisation</span>
                            </a>
                            <a href="<?php echo esc_url(home_url('/equipe/')); ?>" class="b-dropdown__item" role="menuitem">
                                <strong>Équipe Dirigeante</strong>
                                <span>Gouvernance &amp; ingénieurs</span>
                            </a>
                            <a href="<?php echo esc_url(home_url('/carriere/')); ?>" class="b-dropdown__item" role="menuitem">
                                <strong>Carrières &amp; Recrutement</strong>
                                <span>Rejoindre nos divisions</span>
                            </a>
                        </div>
                    </li>

                    <li class="b-nav__item">
                        <a href="<?php echo esc_url(home_url('/partenaires/')); ?>" class="b-nav__link">
                            Partenaires
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Actions Header Desktop -->
            <div class="b-header__actions d-none-mobile">
                <a href="<?php echo esc_url(home_url('/partenaires/#formulaire')); ?>" class="b-btn b-btn--sm b-btn--primary">
                    <?php echo byt3lab_icon('handshake', 16); ?>
                    <span>Devenir Partenaire</span>
                </a>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="b-btn b-btn--sm b-btn--secondary">
                    <span>Contact</span>
                </a>
            </div>

            <!-- Bouton Burger Mobile -->
            <button type="button" class="b-burger d-lg-none" id="b-burger-btn" aria-label="<?php esc_attr_e('Ouvrir la navigation', 'byt3lab_wordpress_theme'); ?>" aria-expanded="false" aria-controls="b-mobile-drawer">
                <span class="b-burger__line"></span>
                <span class="b-burger__line"></span>
                <span class="b-burger__line"></span>
            </button>

        </div>
    </div>

    <!-- Tiroir Mobile Complet -->
    <div class="b-drawer" id="b-mobile-drawer" aria-hidden="true">
        <div class="b-drawer__head">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="b-brand">
                <?php echo byt3lab_logo_svg('b-brand__mark'); ?>
                <span class="b-brand__name">BYT3LAB</span>
            </a>
            <button type="button" class="b-drawer__close" aria-label="Fermer" onclick="document.getElementById('b-burger-btn').click();">
                <?php echo byt3lab_icon('x', 24); ?>
            </button>
        </div>

        <nav class="b-drawer__nav">
            <ul class="b-drawer__list">
                <li><a href="<?php echo esc_url(home_url('/')); ?>" class="b-drawer__link">Accueil</a></li>
                <li>
                    <span class="b-drawer__section-label">Divisions Technologiques</span>
                    <ul class="b-drawer__sublist">
                        <li><a href="<?php echo esc_url(home_url('/technologies/logiciel-numerique/')); ?>">Logiciel &amp; Numérique <?php echo byt3lab_status_badge('active'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/technologies/infrastructure-cloud/')); ?>">Infrastructure &amp; Cloud <?php echo byt3lab_status_badge('active'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/technologies/materiel-reseaux/')); ?>">Matériel &amp; Réseaux <?php echo byt3lab_status_badge('in_development'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/technologies/technologies-industrielles/')); ?>">Technologies Industrielles <?php echo byt3lab_status_badge('strategic'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/technologies/technologies-energetiques/')); ?>">Technologies Énergétiques <?php echo byt3lab_status_badge('strategic'); ?></a></li>
                    </ul>
                </li>
                <li>
                    <span class="b-drawer__section-label">Produits &amp; Offres</span>
                    <ul class="b-drawer__sublist">
                        <li><a href="<?php echo esc_url(home_url('/produits/melodi-erp/')); ?>">MELODI ERP</a></li>
                        <li><a href="<?php echo esc_url(home_url('/produits/suku/')); ?>">SUKU (Éducation)</a></li>
                        <li><a href="<?php echo esc_url(home_url('/services/bws/')); ?>">BWS Infrastructure <?php echo byt3lab_status_badge('in_development'); ?></a></li>
                    </ul>
                </li>
                <li><a href="<?php echo esc_url(home_url('/services/')); ?>" class="b-drawer__link">Services &amp; Ingénierie</a></li>
                <li><a href="<?php echo esc_url(home_url('/ngrafix/')); ?>" class="b-drawer__link b-drawer__link--orange">Studio Créatif NGRAFIX</a></li>
                <li><a href="<?php echo esc_url(home_url('/recherche-innovation/')); ?>" class="b-drawer__link">Recherche &amp; Innovation</a></li>
                <li><a href="<?php echo esc_url(home_url('/a-propos/')); ?>" class="b-drawer__link">À Propos du Groupe</a></li>
                <li><a href="<?php echo esc_url(home_url('/partenaires/')); ?>" class="b-drawer__link">Partenaires Institutionnels</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="b-drawer__link">Contactez-nous</a></li>
            </ul>
        </nav>

        <div class="b-drawer__actions">
            <a href="<?php echo esc_url(home_url('/partenaires/#formulaire')); ?>" class="b-btn b-btn--primary" style="width: 100%;">
                Devenir Partenaire
            </a>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="b-btn b-btn--secondary" style="width: 100%;">
                Prendre Contact
            </a>
        </div>
    </div>
    <div class="b-overlay" id="b-nav-overlay" aria-hidden="true"></div>
</header>
