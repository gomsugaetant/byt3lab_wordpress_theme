<?php
/**
 * Template Name: Partenaires & Alliances
 * Espace institutionnel dédié aux partenariats technologiques, industriels et commerciaux.
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
get_template_part('components/header/header');
?>

<main id="primary" class="site-main">

    <!-- Hero Partenaires -->
    <section class="b-hero">
        <div class="b-hero__pattern" aria-hidden="true"></div>
        <div class="b-container">
            <div style="max-width: 820px;">
                <div class="b-hero__signature">
                    Écosystème &amp; Alliances
                </div>
                <h1 class="b-hero__title">
                    Construire le Futur Technologique Ensemble
                </h1>
                <p class="b-hero__subtitle">
                    Byt3Lab conçoit son développement à travers un réseau d'alliances stratégiques solides. Nous collaborons avec des fournisseurs de technologies, des opérateurs d'infrastructures, des constructeurs de matériel et des partenaires industriels pour créer une valeur durable.
                </p>
                <div class="b-hero__actions">
                    <a href="#formulaire" class="b-btn b-btn--lg b-btn--primary">
                        <span>Proposer un partenariat</span>
                        <?php echo byt3lab_icon('arrow-right', 18); ?>
                    </a>
                    <a href="#types" class="b-btn b-btn--lg b-btn--outline-dark">
                        <span>Types de collaboration</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Pourquoi collaborer avec Byt3Lab -->
    <section class="b-section">
        <div class="b-container">
            <div class="b-section-head b-section-head--center">
                <span class="b-eyebrow">Synergies &amp; Valeur Ajoutée</span>
                <h2 class="b-title">Pourquoi Collaborer avec Byt3Lab ?</h2>
                <p class="b-lead">Une passerelle de confiance pour déployer vos technologies sur le continent africain.</p>
            </div>

            <div class="b-grid b-grid--3">
                <div class="b-card" style="padding: 32px;">
                    <div class="b-card__icon-wrap" style="margin-bottom: 20px;"><?php echo byt3lab_icon('target', 22); ?></div>
                    <h3 style="font-size: 1.25rem; margin-bottom: 12px;">Ancrage &amp; Maîtrise Locale</h3>
                    <p style="font-size: 14px; color: var(--c-gray-600); line-height: 1.6; margin: 0;">
                        Une compréhension intime des défis opérationnels, réglementaires et économiques des entreprises africaines, facilitant l'adoption de vos solutions.
                    </p>
                </div>

                <div class="b-card" style="padding: 32px;">
                    <div class="b-card__icon-wrap" style="margin-bottom: 20px;"><?php echo byt3lab_icon('code', 22); ?></div>
                    <h3 style="font-size: 1.25rem; margin-bottom: 12px;">Capacité d'Ingénierie</h3>
                    <p style="font-size: 14px; color: var(--c-gray-600); line-height: 1.6; margin: 0;">
                        Des équipes d'ingénieurs capables d'intégrer vos APIs, de déployer vos matériels et d'assurer le support technique de niveau 1 et 2 en toute autonomie.
                    </p>
                </div>

                <div class="b-card" style="padding: 32px;">
                    <div class="b-card__icon-wrap" style="margin-bottom: 20px;"><?php echo byt3lab_icon('shield', 22); ?></div>
                    <h3 style="font-size: 1.25rem; margin-bottom: 12px;">Vision à Long Terme</h3>
                    <p style="font-size: 14px; color: var(--c-gray-600); line-height: 1.6; margin: 0;">
                        Nous privilégions des partenariats pérennes, fondés sur l'intégrité, la transparence contractuelle et l'alignement stratégique mutuel.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Types de Partenariats -->
    <section class="b-section b-section--alt" id="types">
        <div class="b-container">
            <div class="b-section-head b-section-head--center">
                <span class="b-eyebrow">Nos Cadres d'Alliance</span>
                <h2 class="b-title">Les Types de Partenariats que Nous Développons</h2>
                <p class="b-lead">Chaque partenariat est formalisé selon un modèle adapté aux objectifs des parties.</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px;">
                
                <div class="b-card" style="padding: 32px;">
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                        <span class="b-tag" style="background: rgba(29, 127, 216, 0.1); color: var(--c-blue-500); font-weight: 700;">TECH</span>
                        <h3 style="font-size: 1.2rem; margin: 0;">Fournisseurs de Technologies</h3>
                    </div>
                    <p style="font-size: 14px; color: var(--c-gray-600); margin: 0;">
                        Éditeurs de logiciels spécialisés, frameworks et plateformes cloud souhaitant intégrer leurs briques dans nos progiciels ou bénéficier de notre relais intégrateur.
                    </p>
                </div>

                <div class="b-card" style="padding: 32px;">
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                        <span class="b-tag" style="background: rgba(11, 61, 107, 0.1); color: #0B3D6B; font-weight: 700;">CLOUD &amp; INFRA</span>
                        <h3 style="font-size: 1.2rem; margin: 0;">Opérateurs d'Infrastructures</h3>
                    </div>
                    <p style="font-size: 14px; color: var(--c-gray-600); margin: 0;">
                        Datacenters régionaux et internationaux, opérateurs télécoms et fournisseurs de connectivité pour appuyer l'activité <strong>BWS</strong>.
                    </p>
                </div>

                <div class="b-card" style="padding: 32px;">
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                        <span class="b-tag" style="background: rgba(79, 211, 245, 0.15); color: #0284c7; font-weight: 700;">MATÉRIEL</span>
                        <h3 style="font-size: 1.2rem; margin: 0;">Fabricants &amp; Constructeurs</h3>
                    </div>
                    <p style="font-size: 14px; color: var(--c-gray-600); margin: 0;">
                        Constructeurs de serveurs, équipements réseau, terminaux de point de vente et capteurs IoT cherchant un partenaire d'intégration et de maintenance certifié.
                    </p>
                </div>

                <div class="b-card" style="padding: 32px;">
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                        <span class="b-tag" style="background: rgba(245, 158, 11, 0.15); color: #B45309; font-weight: 700;">R&amp;D</span>
                        <h3 style="font-size: 1.2rem; margin: 0;">Institutions Académiques</h3>
                    </div>
                    <p style="font-size: 14px; color: var(--c-gray-600); margin: 0;">
                        Universités, écoles d'ingénieurs et centres de recherche pour des programmes de recherche appliquée, bancs de test et accueil de talents.
                    </p>
                </div>

                <div class="b-card" style="padding: 32px;">
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                        <span class="b-tag" style="background: rgba(16, 185, 129, 0.15); color: #047857; font-weight: 700;">COMMERCIAL</span>
                        <h3 style="font-size: 1.2rem; margin: 0;">Partenaires Commerciaux</h3>
                    </div>
                    <p style="font-size: 14px; color: var(--c-gray-600); margin: 0;">
                        Distributeurs, cabinets de conseil en organisation et intégrateurs régionaux souhaitant distribuer <strong>MELODI ERP</strong> ou <strong>SUKU</strong>.
                    </p>
                </div>

                <div class="b-card" style="padding: 32px;">
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                        <span class="b-tag" style="background: rgba(0, 42, 78, 0.1); color: var(--c-navy-950); font-weight: 700;">INDUSTRIE</span>
                        <h3 style="font-size: 1.2rem; margin: 0;">Partenaires Industriels</h3>
                    </div>
                    <p style="font-size: 14px; color: var(--c-gray-600); margin: 0;">
                        Groupes manufacturiers, logistiques et agricoles pour la co-conception de solutions connectées et de pilotage énergétique.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Formulaire Institutionnel de Partenariat -->
    <section class="b-section" id="formulaire">
        <div class="b-container b-container--narrow">
            <div class="b-card" style="padding: clamp(2rem, 5vw, 3.5rem); border-top: 4px solid var(--c-blue-500);">
                <div class="b-section-head">
                    <span class="b-eyebrow">Demande Institutionnelle</span>
                    <h2 class="b-title">Proposer un Partenariat avec Byt3Lab</h2>
                    <p class="b-lead" style="font-size: 15px;">
                        Renseignez les éléments clés de votre structure et la nature du partenariat envisagé. Notre direction générale étudiera votre dossier sous 48h ouvrées.
                    </p>
                </div>

                <form id="byt3lab-partner-form" data-b-ajax="1" data-ajax-url="<?php echo esc_url(admin_url('admin-ajax.php')); ?>" method="post">
                    <input type="hidden" name="action" value="byt3lab_submit_contact">
                    <input type="hidden" name="form_type" value="partner">
                    <input type="hidden" name="nonce" value="<?php echo esc_attr(wp_create_nonce('byt3lab_contact_nonce')); ?>">
                    <input type="hidden" name="byt3lab_ts" value="<?php echo time(); ?>">

                    <!-- Honeypot anti-spam -->
                    <div style="position: absolute; left: -9999px; top: -9999px;" aria-hidden="true">
                        <input type="text" name="byt3lab_hp" tabindex="-1" autocomplete="off">
                    </div>

                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px;">
                        <div class="b-form-group">
                            <label for="p-name" class="b-label">Nom &amp; Prénom du représentant *</label>
                            <input type="text" id="p-name" name="name" class="b-input" placeholder="ex: Marc Ebongue" required>
                        </div>

                        <div class="b-form-group">
                            <label for="p-org" class="b-label">Entreprise / Organisation *</label>
                            <input type="text" id="p-org" name="org" class="b-input" placeholder="ex: Sahel Cloud Systems" required>
                        </div>
                    </div>

                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px;">
                        <div class="b-form-group">
                            <label for="p-email" class="b-label">Adresse e-mail professionnelle *</label>
                            <input type="email" id="p-email" name="email" class="b-input" placeholder="ex: direction@sahelcloud.com" required>
                        </div>

                        <div class="b-form-group">
                            <label for="p-phone" class="b-label">Numéro de téléphone direct</label>
                            <input type="tel" id="p-phone" name="phone" class="b-input" placeholder="ex: +237 6xx xx xx xx">
                        </div>
                    </div>

                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px;">
                        <div class="b-form-group">
                            <label for="p-type" class="b-label">Type d'alliance envisagée *</label>
                            <select id="p-type" name="partner_type" class="b-select" required>
                                <option value="Partenaire Technologique">Partenaire Technologique (Logiciel / API)</option>
                                <option value="Fournisseur Infrastructure">Fournisseur d'Infrastructure &amp; Datacenter</option>
                                <option value="Fabricant Matériel">Fabricant / Constructeur Matériel &amp; Réseau</option>
                                <option value="Institution Recherche">Institution Académique &amp; Recherche (R&amp;D)</option>
                                <option value="Partenaire Commercial">Partenaire Commercial / Distributeur</option>
                                <option value="Partenaire Industriel">Partenaire Industriel (IoT, Énergie)</option>
                            </select>
                        </div>

                        <div class="b-form-group">
                            <label for="p-domain" class="b-label">Division technologique ciblée</label>
                            <select id="p-domain" name="domain" class="b-select">
                                <option value="Toutes divisions">Toutes divisions confondues</option>
                                <option value="Logiciel & Numérique">Logiciel &amp; Numérique</option>
                                <option value="Infrastructure & Cloud">Infrastructure &amp; Cloud (BWS)</option>
                                <option value="Matériel & Réseaux">Matériel &amp; Réseaux</option>
                                <option value="Technologies Industrielles">Technologies Industrielles</option>
                                <option value="Technologies Énergétiques">Technologies Énergétiques</option>
                            </select>
                        </div>
                    </div>

                    <div class="b-form-group">
                        <label for="p-website" class="b-label">Site Web de l'organisation</label>
                        <input type="url" id="p-website" name="website" class="b-input" placeholder="https://www.votre-entreprise.com">
                    </div>

                    <div class="b-form-group">
                        <label for="p-message" class="b-label">Détails de votre proposition de collaboration *</label>
                        <textarea id="p-message" name="message" class="b-textarea" rows="5" placeholder="Décrivez succinctement la valeur mutuelle, vos technologies, vos attentes et les échéances envisagées..." required></textarea>
                    </div>

                    <div style="margin-top: 24px;">
                        <button type="submit" class="b-btn b-btn--lg b-btn--primary" style="width: 100%;">
                            <?php echo byt3lab_icon('handshake', 18); ?>
                            <span>Transmettre la proposition de partenariat</span>
                        </button>
                    </div>

                    <div class="b-form-feedback" role="alert"></div>
                </form>
            </div>
        </div>
    </section>

</main>

<?php
get_template_part('components/footer/footer');
get_footer();

