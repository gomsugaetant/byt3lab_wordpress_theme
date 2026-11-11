<?php
/**
 * BYT3LAB Component - Footer Institutionnel
 * Pied de page complet du groupe : 5 divisions, produits, studio NGRAFIX, coordonnées et mentions légales.
 */
if (!defined('ABSPATH')) {
    exit;
}
?>
<footer class="b-footer" role="contentinfo">
    <div class="b-container b-container--wide">

        <!-- Grille Principale du Footer -->
        <div class="b-footer__grid">

            <!-- Colonne 1 : Identité Groupe & Vision -->
            <div class="b-footer__col b-footer__col--brand">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="b-brand b-brand--footer" aria-label="BYT3LAB — Accueil">
                    <?php echo byt3lab_logo_svg('b-brand__mark'); ?>
                    <span class="b-brand__text">
                        <span class="b-brand__name" style="color:#fff;">BYT3LAB</span>
                        <span class="b-brand__tagline" style="color:var(--c-cyan-400);">Technology &amp; Innovation Group</span>
                    </span>
                </a>

                <p class="b-footer__desc">
                    <?php byt3lab_e('legal.footer_text'); ?>
                </p>

                <div class="b-footer__slogan">
                    ENGINEERING THE TECHNOLOGIES OF TOMORROW.
                </div>

                <!-- Réseaux Sociaux -->
                <div class="b-footer__socials">
                    <?php if ($li = byt3lab_opt('social.linkedin')) : ?>
                        <a href="<?php echo esc_url($li); ?>" class="b-social-btn" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer">
                            <?php echo byt3lab_icon('linkedin', 16); ?>
                        </a>
                    <?php endif; ?>
                    <?php if ($fb = byt3lab_opt('social.facebook')) : ?>
                        <a href="<?php echo esc_url($fb); ?>" class="b-social-btn" aria-label="Facebook Byt3Lab" target="_blank" rel="noopener noreferrer">
                            <?php echo byt3lab_icon('facebook', 16); ?>
                        </a>
                    <?php endif; ?>
                    <?php if ($yt = byt3lab_opt('social.youtube')) : ?>
                        <a href="<?php echo esc_url($yt); ?>" class="b-social-btn" aria-label="YouTube" target="_blank" rel="noopener noreferrer">
                            <?php echo byt3lab_icon('youtube', 16); ?>
                        </a>
                    <?php endif; ?>
                    <?php if ($ng = byt3lab_opt('social.ngrafix')) : ?>
                        <a href="<?php echo esc_url($ng); ?>" class="b-social-btn b-social-btn--ngx" aria-label="Facebook NGRAFIX" title="NGRAFIX Studio" target="_blank" rel="noopener noreferrer">
                            <?php echo byt3lab_icon('palette', 16); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Colonne 2 : Divisions Technologiques -->
            <div class="b-footer__col">
                <h4 class="b-footer__heading">Divisions Technologiques</h4>
                <ul class="b-footer__list">
                    <li><a href="<?php echo esc_url(home_url('/technologies/logiciel-numerique/')); ?>">Logiciel &amp; Numérique</a></li>
                    <li><a href="<?php echo esc_url(home_url('/technologies/infrastructure-cloud/')); ?>">Infrastructure &amp; Cloud</a></li>
                    <li><a href="<?php echo esc_url(home_url('/technologies/materiel-reseaux/')); ?>">Matériel &amp; Réseaux</a></li>
                    <li><a href="<?php echo esc_url(home_url('/technologies/technologies-industrielles/')); ?>">Technologies Industrielles</a></li>
                    <li><a href="<?php echo esc_url(home_url('/technologies/technologies-energetiques/')); ?>">Technologies Énergétiques</a></li>
                    <li style="margin-top: 10px;"><a href="<?php echo esc_url(home_url('/technologies/')); ?>" style="color: var(--c-cyan-400); font-weight: 600;">Toutes les divisions &rarr;</a></li>
                </ul>
            </div>

            <!-- Colonne 3 : Produits & Services -->
            <div class="b-footer__col">
                <h4 class="b-footer__heading">Produits &amp; Offres</h4>
                <ul class="b-footer__list">
                    <li><a href="<?php echo esc_url(home_url('/produits/melodi-erp/')); ?>">MELODI ERP</a></li>
                    <li><a href="<?php echo esc_url(home_url('/produits/suku/')); ?>">SUKU (Système Éducatif)</a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/bws/')); ?>">BWS — Web Services</a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/')); ?>">Services &amp; Ingénierie IT</a></li>
                    <li><a href="<?php echo esc_url(home_url('/recherche-innovation/')); ?>">Recherche &amp; Innovation</a></li>
                    <li><a href="<?php echo esc_url(home_url('/realisations/')); ?>">Réalisations &amp; Portfolio</a></li>
                </ul>
            </div>

            <!-- Colonne 4 : Studio Créatif NGRAFIX -->
            <div class="b-footer__col">
                <h4 class="b-footer__heading">Studio Créatif</h4>
                <ul class="b-footer__list">
                    <li><a href="<?php echo esc_url(home_url('/ngrafix/')); ?>" style="color: var(--c-ngx-orange); font-weight: 600;">NGRAFIX Studio &rarr;</a></li>
                    <li><a href="<?php echo esc_url(home_url('/ngrafix/#brand-identity')); ?>">Brand Identity &amp; Logos</a></li>
                    <li><a href="<?php echo esc_url(home_url('/ngrafix/#creative-design')); ?>">Creative Design &amp; UI/UX</a></li>
                    <li><a href="<?php echo esc_url(home_url('/ngrafix/#digital-communication')); ?>">Communication Digitale</a></li>
                    <li><a href="<?php echo esc_url(home_url('/ngrafix/#media-production')); ?>">Production Audiovisuelle</a></li>
                </ul>
            </div>

            <!-- Colonne 5 : Coordonnées & Contact -->
            <div class="b-footer__col">
                <h4 class="b-footer__heading">Contact &amp; Siège</h4>
                <div class="b-footer__contact">
                    <p class="b-footer__contact-item">
                        <?php echo byt3lab_icon('map-pin', 16); ?>
                        <span><?php byt3lab_e('contact.location'); ?></span>
                    </p>
                    <p class="b-footer__contact-item">
                        <?php echo byt3lab_icon('mail', 16); ?>
                        <a href="mailto:<?php echo esc_attr(byt3lab_opt('contact.email')); ?>">
                            <?php byt3lab_e('contact.email'); ?>
                        </a>
                    </p>
                    <p class="b-footer__contact-item">
                        <?php echo byt3lab_icon('phone', 16); ?>
                        <a href="tel:<?php echo esc_attr(byt3lab_opt('contact.phone')); ?>">
                            <?php byt3lab_e('contact.phone'); ?>
                        </a>
                    </p>
                    <div style="margin-top: 16px;">
                        <a href="<?php echo esc_url(home_url('/partenaires/#formulaire')); ?>" class="b-btn b-btn--sm b-btn--primary" style="width: 100%; text-align: center;">
                            Devenir Partenaire
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Barre Inférieure : Mentions légales & Droits -->
        <div class="b-footer__bottom">
            <div class="b-footer__copy">
                &copy; <?php echo date('Y'); ?> <strong>BYT3LAB</strong>. Tous droits réservés. Groupe technologique &amp; d'ingénierie.
            </div>
            <div class="b-footer__legal-links">
                <a href="<?php echo esc_url(home_url('/a-propos/')); ?>">Organisation</a>
                <a href="<?php echo esc_url(home_url('/carriere/')); ?>">Carrières</a>
                <a href="<?php echo esc_url(home_url('/partenaires/')); ?>">Partenariats</a>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>">Mentions Légales &amp; Contact</a>
            </div>
        </div>

    </div>
</footer>
