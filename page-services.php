<?php
/**
 * Template Name: Services & Ingénierie
 * Présentation des prestations et services commerciaux du groupe BYT3LAB.
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
get_template_part('components/header/header');
?>

<main id="primary" class="site-main">

    <!-- Hero Services -->
    <section class="b-hero">
        <div class="b-hero__pattern" aria-hidden="true"></div>
        <div class="b-container">
            <div style="max-width: 800px;">
                <div class="b-hero__signature">
                    Ingénierie &amp; Accompagnement
                </div>
                <h1 class="b-hero__title">
                    Des Services Technologiques de Haut Niveau
                </h1>
                <p class="b-hero__subtitle">
                    De la conception d'architectures logicielles complexes à la gestion d'infrastructures cloud et l'intégration de systèmes, Byt3Lab accompagne les entreprises et institutions avec rigueur et engagement de résultat.
                </p>
                <div class="b-hero__actions">
                    <a href="#catalogue-services" class="b-btn b-btn--lg b-btn--primary">
                        <span>Explorer nos 5 expertises</span>
                        <?php echo byt3lab_icon('arrow-right', 18); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="b-btn b-btn--lg b-btn--outline-dark">
                        <span>Demander un devis d'ingénierie</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Catalogue des 5 Services Commerciaux -->
    <section class="b-section" id="catalogue-services">
        <div class="b-container">
            <div class="b-section-head b-section-head--center">
                <span class="b-eyebrow">Offre de Services</span>
                <h2 class="b-title">Nos Domaines d'Accompagnement</h2>
                <p class="b-lead">Une chaîne de compétences complète pour réussir vos projets technologiques critiques.</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 32px;">
                
                <!-- 1. Software Engineering -->
                <div class="b-card" style="padding: 36px; border-top: 4px solid var(--c-blue-500);">
                    <div class="b-card__icon-wrap" style="margin-bottom: 20px;">
                        <?php echo byt3lab_icon('code', 24); ?>
                    </div>
                    <h3 class="b-card__title">1. Software Engineering</h3>
                    <p class="b-card__text">
                        Conception et développement sur-mesure d'applications web scalables, progiciels métiers, APIs robustes et solutions mobiles multiplateformes.
                    </p>
                    <ul class="b-checklist">
                        <li><?php echo byt3lab_icon('check', 16); ?> <span>Applications web &amp; portails métiers</span></li>
                        <li><?php echo byt3lab_icon('check', 16); ?> <span>Applications mobiles (iOS &amp; Android)</span></li>
                        <li><?php echo byt3lab_icon('check', 16); ?> <span>Architecture microservices &amp; API REST</span></li>
                        <li><?php echo byt3lab_icon('check', 16); ?> <span>Maintenance corrective &amp; évolutive</span></li>
                    </ul>
                </div>

                <!-- 2. Digital Transformation -->
                <div class="b-card" style="padding: 36px; border-top: 4px solid var(--c-navy-700);">
                    <div class="b-card__icon-wrap" style="margin-bottom: 20px;">
                        <?php echo byt3lab_icon('workflow', 24); ?>
                    </div>
                    <h3 class="b-card__title">2. Digital Transformation</h3>
                    <p class="b-card__text">
                        Modernisation de vos processus organisationnels, dématérialisation documentaire et automatisation des tâches chronophages.
                    </p>
                    <ul class="b-checklist">
                        <li><?php echo byt3lab_icon('check', 16); ?> <span>Audit de maturité digitale &amp; cadrage</span></li>
                        <li><?php echo byt3lab_icon('check', 16); ?> <span>Automatisation des workflows (BPA)</span></li>
                        <li><?php echo byt3lab_icon('check', 16); ?> <span>Migration de données &amp; interopérabilité</span></li>
                        <li><?php echo byt3lab_icon('check', 16); ?> <span>Conduite du changement &amp; formation</span></li>
                    </ul>
                </div>

                <!-- 3. Cloud & Infrastructure (BWS Identifiable) -->
                <div class="b-card" style="padding: 36px; border-top: 4px solid #0B3D6B; background: var(--c-gray-25);">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 20px;">
                        <div class="b-card__icon-wrap">
                            <?php echo byt3lab_icon('cloud', 24); ?>
                        </div>
                        <span class="b-tag" style="background: rgba(11, 61, 107, 0.1); color: #0B3D6B; font-weight: 700;">ACTIVITÉ BWS</span>
                    </div>
                    <h3 class="b-card__title">3. Cloud &amp; Infrastructure</h3>
                    <p class="b-card__text">
                        Opéré par <strong>BWS — Byt3Lab Web Services</strong> : hébergement managé, gestion de serveurs, sécurité des données et disponibilité continue.
                    </p>
                    <ul class="b-checklist">
                        <li><?php echo byt3lab_icon('check', 16); ?> <span>Hébergement managé &amp; cloud privé</span></li>
                        <li><?php echo byt3lab_icon('check', 16); ?> <span>Sauvegardes chiffrées &amp; plan de reprise (PRA)</span></li>
                        <li><?php echo byt3lab_icon('check', 16); ?> <span>Pipelines DevOps &amp; conteneurisation</span></li>
                        <li><?php echo byt3lab_icon('check', 16); ?> <span>Supervision 24/7 &amp; infogérance</span></li>
                    </ul>
                    <div style="margin-top: 20px; padding-top: 16px; border-top: 1px solid var(--c-gray-200);">
                        <a href="<?php echo esc_url(home_url('/services/bws/')); ?>" style="font-weight: 600; font-size: 13px;">
                            Découvrir l'offre BWS Web Services &rarr;
                        </a>
                    </div>
                </div>

                <!-- 4. IT Integration -->
                <div class="b-card" style="padding: 36px; border-top: 4px solid #4FD3F5;">
                    <div class="b-card__icon-wrap" style="margin-bottom: 20px;">
                        <?php echo byt3lab_icon('network', 24); ?>
                    </div>
                    <h3 class="b-card__title">4. IT Integration</h3>
                    <p class="b-card__text">
                        Intégration d'équipements informatiques, câblage réseau, baies de serveurs et solutions de connectivité fournies par des constructeurs partenaires.
                    </p>
                    <ul class="b-checklist">
                        <li><?php echo byt3lab_icon('check', 16); ?> <span>Fourniture et installation de matériel tiers</span></li>
                        <li><?php echo byt3lab_icon('check', 16); ?> <span>Infrastructures réseau local (LAN, WLAN)</span></li>
                        <li><?php echo byt3lab_icon('check', 16); ?> <span>Sécurité périmétrique &amp; pare-feu</span></li>
                        <li><?php echo byt3lab_icon('check', 16); ?> <span>Maintenance préventive du parc IT</span></li>
                    </ul>
                </div>

                <!-- 5. Consulting & Technical Support -->
                <div class="b-card" style="padding: 36px; border-top: 4px solid var(--c-navy-950);">
                    <div class="b-card__icon-wrap" style="margin-bottom: 20px;">
                        <?php echo byt3lab_icon('briefcase', 24); ?>
                    </div>
                    <h3 class="b-card__title">5. Consulting &amp; Technical Support</h3>
                    <p class="b-card__text">
                        Conseil stratégique en ingénierie, assistance à maîtrise d'ouvrage (AMOA), audits de sécurité et support technique sous contrat SLA.
                    </p>
                    <ul class="b-checklist">
                        <li><?php echo byt3lab_icon('check', 16); ?> <span>Schéma directeur des systèmes d'information</span></li>
                        <li><?php echo byt3lab_icon('check', 16); ?> <span>Audit de code source &amp; cybersécurité</span></li>
                        <li><?php echo byt3lab_icon('check', 16); ?> <span>Assistance technique avec SLA garantis</span></li>
                        <li><?php echo byt3lab_icon('check', 16); ?> <span>Expertise technologique sur site et à distance</span></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- Méthodologie d'Ingénierie -->
    <section class="b-section b-section--alt">
        <div class="b-container">
            <div class="b-section-head b-section-head--center">
                <span class="b-eyebrow">Rigueur &amp; Qualité</span>
                <h2 class="b-title">La Démarche d'Ingénierie BYT3LAB</h2>
                <p class="b-lead">Un cycle de production rigoureux assurant respect des délais, sécurité et pérennité logicielle.</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 24px;">
                <div class="b-card" style="padding: 28px;">
                    <div style="color: var(--c-blue-500); font-family: var(--font-heading); font-size: 18px; font-weight: 700; margin-bottom: 12px;">01</div>
                    <h3 style="font-size: 1.15rem; margin-bottom: 10px;">Cadrage &amp; Spécifications</h3>
                    <p style="font-size: 13.5px; color: var(--c-gray-600); margin: 0;">Analyse des processus métiers, définition des exigences techniques et validation des jalons.</p>
                </div>

                <div class="b-card" style="padding: 28px;">
                    <div style="color: var(--c-blue-500); font-family: var(--font-heading); font-size: 18px; font-weight: 700; margin-bottom: 12px;">02</div>
                    <h3 style="font-size: 1.15rem; margin-bottom: 10px;">Développement Itératif</h3>
                    <p style="font-size: 13.5px; color: var(--c-gray-600); margin: 0;">Sprints réguliers avec démonstrations intermédiaires pour recueillir vos retours en temps réel.</p>
                </div>

                <div class="b-card" style="padding: 28px;">
                    <div style="color: var(--c-blue-500); font-family: var(--font-heading); font-size: 18px; font-weight: 700; margin-bottom: 12px;">03</div>
                    <h3 style="font-size: 1.15rem; margin-bottom: 10px;">Tests &amp; Sécurité</h3>
                    <p style="font-size: 13.5px; color: var(--c-gray-600); margin: 0;">Contrôles de qualité, tests de montée en charge et audits de vulnérabilités avant déploiement.</p>
                </div>

                <div class="b-card" style="padding: 28px;">
                    <div style="color: var(--c-blue-500); font-family: var(--font-heading); font-size: 18px; font-weight: 700; margin-bottom: 12px;">04</div>
                    <h3 style="font-size: 1.15rem; margin-bottom: 10px;">Déploiement &amp; SLA</h3>
                    <p style="font-size: 13.5px; color: var(--c-gray-600); margin: 0;">Mise en production sécurisée, formation des utilisateurs et maintenance technique continue.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final Services -->
    <section class="b-section b-section--tight">
        <div class="b-container">
            <div class="b-cta-band">
                <h2 class="b-title">Un projet à soumettre à nos équipes ?</h2>
                <p>Décrivez-nous vos objectifs techniques et vos contraintes d'échéance pour obtenir une proposition adaptée.</p>
                <div class="b-cta-band__actions">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="b-btn b-btn--lg b-btn--on-dark">
                        <span>Demander un devis d'ingénierie</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_template_part('components/footer/footer');
get_footer();
