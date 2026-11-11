<?php
/**
 * Template Name: Recherche & Innovation
 * Présentation des orientations technologiques et axes de R&D appliquée du groupe BYT3LAB.
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
get_template_part('components/header/header');
?>

<main id="primary" class="site-main">

    <!-- Hero R&D -->
    <section class="b-hero">
        <div class="b-hero__pattern" aria-hidden="true"></div>
        <div class="b-container">
            <div style="max-width: 820px;">
                <div class="b-hero__signature">
                    Vision à Long Terme
                </div>
                <h1 class="b-hero__title">
                    Recherche Appliquée &amp; Innovation Technologique
                </h1>
                <p class="b-hero__subtitle">
                    Construire ce qui vient. Byt3Lab consacre une partie continue de ses efforts d'ingénierie à l'exploration des technologies émergentes afin d'anticiper les mutations numériques, industrielles et infrastructurelles du continent africain.
                </p>
                <div class="b-hero__actions">
                    <a href="#axes" class="b-btn b-btn--lg b-btn--primary">
                        <span>Explorer nos 5 axes</span>
                        <?php echo byt3lab_icon('arrow-right', 18); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/partenaires/')); ?>" class="b-btn b-btn--lg b-btn--outline-dark">
                        <?php echo byt3lab_icon('handshake', 18); ?>
                        <span>Partenariats de recherche</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Les 5 Orientations de Recherche -->
    <section class="b-section" id="axes">
        <div class="b-container">
            <div class="b-section-head b-section-head--center">
                <span class="b-eyebrow">Feuille de Route R&amp;D</span>
                <h2 class="b-title">Nos Cinq Domaines d'Exploration</h2>
                <p class="b-lead">Des axes pragmatiques d'innovation, orientés vers des cas d'usage réels et déployables.</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 32px;">
                
                <!-- 1. Applied Artificial Intelligence -->
                <div class="b-card" style="padding: 36px; border-top: 4px solid var(--c-blue-500);">
                    <div class="b-card__icon-wrap" style="margin-bottom: 20px;">
                        <?php echo byt3lab_icon('brain', 24); ?>
                    </div>
                    <h3 class="b-card__title">1. Applied Artificial Intelligence</h3>
                    <p class="b-card__text">
                        Intégration d'algorithmes d'apprentissage automatique et de traitement du langage naturel dans nos logiciels métiers pour automatiser la détection d'anomalies, la prévision de stocks et l'assistance décisionnelle.
                    </p>
                    <div style="font-size: 13px; color: var(--c-gray-500); padding-top: 16px; border-top: 1px solid var(--c-gray-100);">
                        Axe : Modèles prédictifs appliqués à la gestion et au commerce.
                    </div>
                </div>

                <!-- 2. Emerging Technologies -->
                <div class="b-card" style="padding: 36px; border-top: 4px solid var(--c-cyan-400);">
                    <div class="b-card__icon-wrap" style="margin-bottom: 20px;">
                        <?php echo byt3lab_icon('rocket', 24); ?>
                    </div>
                    <h3 class="b-card__title">2. Emerging Technologies</h3>
                    <p class="b-card__text">
                        Veille active et prototypage sur les nouveaux protocoles distribués, les architectures décentralisées et les technologies d'authentification cryptographique garantissant l'intégrité absolue des flux de données.
                    </p>
                    <div style="font-size: 13px; color: var(--c-gray-500); padding-top: 16px; border-top: 1px solid var(--c-gray-100);">
                        Axe : Traçabilité, registres distribués et cryptographie appliquée.
                    </div>
                </div>

                <!-- 3. Connected Systems (IoT) -->
                <div class="b-card" style="padding: 36px; border-top: 4px solid #10B981;">
                    <div class="b-card__icon-wrap" style="margin-bottom: 20px;">
                        <?php echo byt3lab_icon('radio', 24); ?>
                    </div>
                    <h3 class="b-card__title">3. Connected Systems &amp; IoT</h3>
                    <p class="b-card__text">
                        Interconnexion de microcontrôleurs, capteurs environnementaux et actionneurs industriels avec nos plateformes logicielles cloud, pour remonter des indicateurs d'exploitation physique en temps réel.
                    </p>
                    <div style="font-size: 13px; color: var(--c-gray-500); padding-top: 16px; border-top: 1px solid var(--c-gray-100);">
                        Axe : Télémétrie, capteurs agricoles et supervision industrielle.
                    </div>
                </div>

                <!-- 4. Applied Research -->
                <div class="b-card" style="padding: 36px; border-top: 4px solid #F59E0B;">
                    <div class="b-card__icon-wrap" style="margin-bottom: 20px;">
                        <?php echo byt3lab_icon('flask', 24); ?>
                    </div>
                    <h3 class="b-card__title">4. Applied Research</h3>
                    <p class="b-card__text">
                        Études de faisabilité technique et partenariats académiques avec des instituts universitaires pour modéliser des solutions adaptées aux contraintes d'infrastructure locales (faible connectivité, instabilité énergétique).
                    </p>
                    <div style="font-size: 13px; color: var(--c-gray-500); padding-top: 16px; border-top: 1px solid var(--c-gray-100);">
                        Axe : Résilience logicielle en environnement contraint (Offline-First).
                    </div>
                </div>

                <!-- 5. Technology Development -->
                <div class="b-card" style="padding: 36px; border-top: 4px solid var(--c-navy-900);">
                    <div class="b-card__icon-wrap" style="margin-bottom: 20px;">
                        <?php echo byt3lab_icon('cpu', 24); ?>
                    </div>
                    <h3 class="b-card__title">5. Technology Development</h3>
                    <p class="b-card__text">
                        Conception et industrialisation de briques logicielles réutilisables, frameworks internes et protocoles sécurisés accélérant le cycle de déploiement des futurs produits du groupe.
                    </p>
                    <div style="font-size: 13px; color: var(--c-gray-500); padding-top: 16px; border-top: 1px solid var(--c-gray-100);">
                        Axe : Socles logiciels propriétaires et sécurité by-design.
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Transparence & Démarche de Partenariat R&D -->
    <section class="b-section b-section--alt">
        <div class="b-container b-container--narrow">
            <div class="b-card" style="padding: 40px; background: var(--c-white); border-left: 5px solid var(--c-blue-500);">
                <span class="b-eyebrow">Engagement de Transparence</span>
                <h3 style="font-size: 1.35rem; margin-bottom: 12px;">Une démarche d'innovation ouverte et mesurée</h3>
                <p style="font-size: 15px; color: var(--c-gray-700); line-height: 1.7; margin-bottom: 20px;">
                    Byt3Lab ne prétend pas disposer d'un laboratoire de recherche fondamentale démesuré. Notre démarche repose sur l'<strong>ingénierie appliquée</strong>, les bancs d'essai sur le terrain et la collaboration active avec des centres de recherche, fabricants et partenaires industriels.
                </p>
                <a href="<?php echo esc_url(home_url('/partenaires/')); ?>" class="b-btn b-btn--sm b-btn--primary">
                    <span>Rejoindre notre réseau de partenaires R&amp;D &rarr;</span>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Final R&D -->
    <section class="b-section b-section--tight">
        <div class="b-container">
            <div class="b-cta-band">
                <h2 class="b-title">Vous travaillez sur des technologies d'avenir ?</h2>
                <p>Chercheurs, laboratoires, industriels et innovateurs : unissons nos compétences pour concevoir des technologies à fort impact.</p>
                <div class="b-cta-band__actions">
                    <a href="<?php echo esc_url(home_url('/partenaires/')); ?>" class="b-btn b-btn--lg b-btn--on-dark">
                        <?php echo byt3lab_icon('handshake', 18); ?>
                        <span>Proposer une collaboration R&amp;D</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_template_part('components/footer/footer');
get_footer();

