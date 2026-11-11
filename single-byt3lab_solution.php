<?php
/**
 * BYT3LAB Template - Single Produit / Offre
 * Gabarits dédiés pour MELODI ERP, SUKU et BWS, avec repli générique.
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
get_template_part('components/header/header');

if (have_posts()) : while (have_posts()) : the_post();
    $offer_id    = get_the_ID();
    $slug        = $post->post_name;
    $offer_type  = get_post_meta($offer_id, '_byt3lab_offer_type', true) ?: 'product';
    $status      = get_post_meta($offer_id, '_byt3lab_status', true) ?: 'active';
    $badge       = get_post_meta($offer_id, '_byt3lab_solution_badge', true) ?: 'Produit Byt3Lab';
    $tagline     = get_post_meta($offer_id, '_byt3lab_offer_tagline', true);
    $accent      = get_post_meta($offer_id, '_byt3lab_offer_accent', true) ?: '#1D7FD8';
    $features    = byt3lab_meta_lines($offer_id, '_byt3lab_solution_features');
    $problems    = byt3lab_meta_lines($offer_id, '_byt3lab_offer_problems');
    $benefits    = byt3lab_meta_lines($offer_id, '_byt3lab_offer_benefits');
    $url         = get_post_meta($offer_id, '_byt3lab_solution_url', true);
    $btn_text    = get_post_meta($offer_id, '_byt3lab_solution_button_text', true) ?: 'Accéder à la solution';
?>

<main id="primary" class="site-main b-offer-page" style="--accent-color: <?php echo esc_attr($accent); ?>;">

    <!-- =================================================================
         HERO DU PRODUIT OU DE L'OFFRE
         ================================================================= -->
    <section class="b-hero">
        <div class="b-hero__pattern" aria-hidden="true"></div>
        <div class="b-container">
            <div style="max-width: 820px;">
                <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 20px;">
                    <a href="<?php echo esc_url(home_url('/produits/')); ?>" class="b-eyebrow b-eyebrow--white" style="margin-bottom: 0;">
                        &larr; Tous les Produits &amp; Solutions
                    </a>
                    <?php echo byt3lab_status_badge($status); ?>
                </div>

                <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 16px;">
                    <span class="b-product-card__badge" style="color: var(--c-cyan-400); font-size: 13px; margin: 0;">
                        <?php echo esc_html($badge); ?>
                    </span>
                </div>

                <h1 class="b-hero__title">
                    <?php the_title(); ?>
                </h1>

                <?php if ($tagline) : ?>
                    <p class="b-hero__subtitle" style="font-size: 1.3rem; color: #E2E8F0; margin-bottom: 28px;">
                        <?php echo esc_html($tagline); ?>
                    </p>
                <?php endif; ?>

                <div class="b-hero__actions">
                    <?php if ($url) : ?>
                        <a href="<?php echo esc_url($url); ?>" class="b-btn b-btn--lg b-btn--primary" target="_blank" rel="noopener noreferrer">
                            <span><?php echo esc_html($btn_text); ?></span>
                            <?php echo byt3lab_icon('arrow-up-right', 18); ?>
                        </a>
                    <?php endif; ?>
                    <a href="#contact-solution" class="b-btn b-btn--lg b-btn--outline-dark">
                        <span>Demander une présentation</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- =================================================================
         CONTENU SELON LE TYPE D'OFFRE
         ================================================================= -->

    <?php if ($slug === 'melodi-erp') : ?>
        <!-- =================== MELODI ERP : VUE DÉTAILLÉE =================== -->
        <section class="b-section" id="melodi-presentation">
            <div class="b-container">
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px; align-items: start;">
                    
                    <div>
                        <span class="b-eyebrow">Progiciel de gestion intégré</span>
                        <h2 class="b-title">Reprenez le contrôle complet de vos opérations</h2>
                        <div style="font-size: 16px; color: var(--c-gray-700); line-height: 1.7; margin-bottom: 28px;">
                            <?php the_content(); ?>
                        </div>

                        <!-- Problèmes résolus -->
                        <div class="b-card" style="padding: 28px; background: var(--c-gray-50); margin-bottom: 24px;">
                            <h3 style="font-size: 1.15rem; margin-bottom: 16px; color: var(--c-navy-950);">
                                Problématiques résolues par MELODI
                            </h3>
                            <ul class="b-checklist">
                                <li><?php echo byt3lab_icon('check', 16); ?> <span>Élimination des doubles saisies et des erreurs de tableurs dispersés</span></li>
                                <li><?php echo byt3lab_icon('check', 16); ?> <span>Visibilité temps réel sur les stocks multi-dépôts et les encaissements</span></li>
                                <li><?php echo byt3lab_icon('check', 16); ?> <span>Clôture comptable fluide et traçabilité absolue des pièces justificatives</span></li>
                                <li><?php echo byt3lab_icon('check', 16); ?> <span>Adaptation ergonomique aux habitudes des équipes opérationnelles</span></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Schéma SVG de l'Architecture Modulaire MELODI (au lieu de fausses captures) -->
                    <div class="b-card" style="padding: 36px; text-align: center; border-top: 4px solid #1D7FD8;">
                        <h3 style="font-size: 1.25rem; margin-bottom: 8px;">Architecture Modulaire MELODI</h3>
                        <p style="font-size: 13px; color: var(--c-gray-500); margin-bottom: 24px;">
                            Activez uniquement les modules requis par votre activité, sans surcharge technique.
                        </p>

                        <svg viewBox="0 0 400 340" fill="none" xmlns="http://www.w3.org/2000/svg" style="max-width: 360px; margin: 0 auto 20px auto;">
                            <!-- Cercle Core -->
                            <circle cx="200" cy="170" r="54" fill="#002A4E" stroke="#1D7FD8" stroke-width="3"/>
                            <text x="200" y="165" fill="#FFF" font-family="'Space Grotesk', sans-serif" font-size="12" font-weight="700" text-anchor="middle">MELODI</text>
                            <text x="200" y="180" fill="#4FD3F5" font-family="'Space Grotesk', sans-serif" font-size="9" font-weight="700" text-anchor="middle">CORE ERP</text>

                            <!-- Modules autour avec connecteurs -->
                            <!-- Module 1: Ventes / POS -->
                            <line x1="200" y1="116" x2="200" y2="60" stroke="#CBD5E1" stroke-width="2" stroke-dasharray="3 3"/>
                            <rect x="130" y="20" width="140" height="40" rx="8" fill="#F8FAFC" stroke="#1D7FD8" stroke-width="1.5"/>
                            <text x="200" y="44" fill="#0F172A" font-family="'Space Grotesk', sans-serif" font-size="11" font-weight="600" text-anchor="middle">Commerce &amp; Caisse POS</text>

                            <!-- Module 2: Stocks -->
                            <line x1="248" y1="140" x2="310" y2="105" stroke="#CBD5E1" stroke-width="2" stroke-dasharray="3 3"/>
                            <rect x="270" y="85" width="125" height="40" rx="8" fill="#F8FAFC" stroke="#1D7FD8" stroke-width="1.5"/>
                            <text x="332" y="109" fill="#0F172A" font-family="'Space Grotesk', sans-serif" font-size="11" font-weight="600" text-anchor="middle">Gestion de Stocks</text>

                            <!-- Module 3: Comptabilité -->
                            <line x1="248" y1="200" x2="310" y2="235" stroke="#CBD5E1" stroke-width="2" stroke-dasharray="3 3"/>
                            <rect x="270" y="215" width="125" height="40" rx="8" fill="#F8FAFC" stroke="#1D7FD8" stroke-width="1.5"/>
                            <text x="332" y="239" fill="#0F172A" font-family="'Space Grotesk', sans-serif" font-size="11" font-weight="600" text-anchor="middle">Comptabilité OHADA</text>

                            <!-- Module 4: Ressources Humaines -->
                            <line x1="200" y1="224" x2="200" y2="280" stroke="#CBD5E1" stroke-width="2" stroke-dasharray="3 3"/>
                            <rect x="130" y="280" width="140" height="40" rx="8" fill="#F8FAFC" stroke="#1D7FD8" stroke-width="1.5"/>
                            <text x="200" y="304" fill="#0F172A" font-family="'Space Grotesk', sans-serif" font-size="11" font-weight="600" text-anchor="middle">Ressources Humaines</text>

                            <!-- Module 5: Achats & Fournisseurs -->
                            <line x1="152" y1="200" x2="90" y2="235" stroke="#CBD5E1" stroke-width="2" stroke-dasharray="3 3"/>
                            <rect x="5" y="215" width="125" height="40" rx="8" fill="#F8FAFC" stroke="#1D7FD8" stroke-width="1.5"/>
                            <text x="67" y="239" fill="#0F172A" font-family="'Space Grotesk', sans-serif" font-size="11" font-weight="600" text-anchor="middle">Achats &amp; Fournisseurs</text>

                            <!-- Module 6: Business Intelligence -->
                            <line x1="152" y1="140" x2="90" y2="105" stroke="#CBD5E1" stroke-width="2" stroke-dasharray="3 3"/>
                            <rect x="5" y="85" width="125" height="40" rx="8" fill="#F8FAFC" stroke="#1D7FD8" stroke-width="1.5"/>
                            <text x="67" y="109" fill="#0F172A" font-family="'Space Grotesk', sans-serif" font-size="11" font-weight="600" text-anchor="middle">Tableaux de Bord</text>
                        </svg>

                        <div style="font-size: 13px; color: var(--c-gray-600); line-height: 1.5;">
                            Déployable en mode <strong>Cloud souverain</strong> ou <strong>Auto-hébergé sur vos propres serveurs</strong> avec assistance locale d'ingénieurs Byt3Lab.
                        </div>
                    </div>

                </div>
            </div>
        </section>

    <?php elseif ($slug === 'bws') : ?>
        <!-- =================== BWS : VUE SERVICES D'INFRASTRUCTURE =================== -->
        <section class="b-section" id="bws-presentation">
            <div class="b-container">
                <div style="max-width: 840px; margin: 0 auto;">
                    
                    <div class="b-card" style="padding: 36px; margin-bottom: 36px; border-left: 5px solid var(--c-status-dev-dot); background: var(--c-gray-50);">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                            <span class="b-eyebrow" style="margin-bottom: 0;">Activité d'infrastructure</span>
                            <?php echo byt3lab_status_badge('in_development'); ?>
                        </div>
                        <h2 style="font-size: 1.5rem; margin-bottom: 12px;">Une activité de services managés en plein déploiement</h2>
                        <p style="font-size: 15px; color: var(--c-gray-700); line-height: 1.7; margin: 0;">
                            BWS — Byt3Lab Web Services est l'activité dédiée à l'hébergement, la gestion de serveurs et le déploiement applicatif du groupe. Elle s'appuie sur des centres de données et infrastructures partenaires tiers certifiés pour garantir la haute disponibilité de vos charges de travail.
                        </p>
                    </div>

                    <div class="b-section-head">
                        <span class="b-eyebrow">Catalogue d'activités</span>
                        <h2 class="b-title">Services d'infrastructure managée</h2>
                    </div>

                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 24px;">
                        <div class="b-card" style="padding: 24px;">
                            <div class="b-card__icon-wrap" style="margin-bottom: 16px;"><?php echo byt3lab_icon('server', 20); ?></div>
                            <h3 style="font-size: 1.15rem; margin-bottom: 8px;">Hébergement managé</h3>
                            <p style="font-size: 13.5px; color: var(--c-gray-600); margin: 0;">Environnements optimisés pour applications web, progiciels ERP et bases de données transactionnelles.</p>
                        </div>

                        <div class="b-card" style="padding: 24px;">
                            <div class="b-card__icon-wrap" style="margin-bottom: 16px;"><?php echo byt3lab_icon('shield', 20); ?></div>
                            <h3 style="font-size: 1.15rem; margin-bottom: 8px;">Sécurité &amp; Sauvegardes</h3>
                            <p style="font-size: 13.5px; color: var(--c-gray-600); margin: 0;">Politiques de sauvegardes automatisées déportées, isolation des environnements et certificats SSL.</p>
                        </div>

                        <div class="b-card" style="padding: 24px;">
                            <div class="b-card__icon-wrap" style="margin-bottom: 16px;"><?php echo byt3lab_icon('cloud', 20); ?></div>
                            <h3 style="font-size: 1.15rem; margin-bottom: 8px;">Déploiement DevOps</h3>
                            <p style="font-size: 13.5px; color: var(--c-gray-600); margin: 0;">Mise en place de conteneurs, pipelines CI/CD et supervision active de charge.</p>
                        </div>

                        <div class="b-card" style="padding: 24px;">
                            <div class="b-card__icon-wrap" style="margin-bottom: 16px;"><?php echo byt3lab_icon('wrench', 20); ?></div>
                            <h3 style="font-size: 1.15rem; margin-bottom: 8px;">Gestion Technique &amp; SLA</h3>
                            <p style="font-size: 13.5px; color: var(--c-gray-600); margin: 0;">Prise en charge des mises à jour système, résolution d'incidents et support technique de proximité.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    <?php elseif ($slug === 'suku') : ?>
        <!-- =================== SUKU : VUE ÉDUCATION =================== -->
        <section class="b-section" id="suku-presentation">
            <div class="b-container">
                <div style="max-width: 840px; margin: 0 auto;">
                    <div class="b-section-head b-section-head--center">
                        <span class="b-eyebrow">EdTech · Gestion Scolaire</span>
                        <h2 class="b-title">Système de gestion académique pour établissements scolaires</h2>
                        <p class="b-lead">Une solution moderne pour simplifier l'administration de vos écoles, collèges, lycées et instituts.</p>
                    </div>

                    <div class="b-card" style="padding: 36px; margin-bottom: 32px;">
                        <h3 style="font-size: 1.3rem; margin-bottom: 16px;">Présentation de SUKU</h3>
                        <p style="font-size: 15px; color: var(--c-gray-700); line-height: 1.7;">
                            <?php the_content(); ?>
                        </p>
                        <div style="margin-top: 24px; padding-top: 20px; border-top: 1px solid var(--c-gray-200);">
                            <a href="https://suku.byt3lab.com" class="b-btn b-btn--primary" target="_blank" rel="noopener noreferrer">
                                <span>Accéder au portail officiel SUKU (suku.byt3lab.com)</span>
                                <?php echo byt3lab_icon('arrow-up-right', 16); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php else : ?>
        <!-- =================== GABARIT GÉNÉRIQUE =================== -->
        <section class="b-section">
            <div class="b-container b-container--narrow">
                <div class="b-card" style="padding: 36px;">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- =================================================================
         SECTION CTA COMMERCIALE
         ================================================================= -->
    <section class="b-section b-section--tight" id="contact-solution">
        <div class="b-container">
            <div class="b-cta-band">
                <h2 class="b-title">Intéressé par <?php the_title(); ?> ?</h2>
                <p>Nos spécialistes produit et ingénieurs vous accompagnent dans le dimensionnement et la mise en œuvre.</p>
                <div class="b-cta-band__actions">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="b-btn b-btn--lg b-btn--on-dark">
                        <?php echo byt3lab_icon('mail', 18); ?>
                        <span>Demander une démonstration ou un devis</span>
                    </a>
                    <?php if ($url) : ?>
                        <a href="<?php echo esc_url($url); ?>" class="b-btn b-btn--lg b-btn--outline-dark" target="_blank" rel="noopener noreferrer">
                            <span>Ouvrir <?php the_title(); ?> &nearr;</span>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
endwhile; endif;

get_template_part('components/footer/footer');
get_footer();
