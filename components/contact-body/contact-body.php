<?php
/**
 * BYT3LAB Component - Contact Body
 * Formulaire de contact sécurisé et coordonnées institutionnelles.
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="b-contact-component">

    <!-- Hero Contact -->
    <section class="b-hero">
        <div class="b-hero__pattern" aria-hidden="true"></div>
        <div class="b-container">
            <div style="max-width: 800px;">
                <div class="b-hero__signature">
                    Contact &amp; Échanges
                </div>
                <h1 class="b-hero__title">
                    Échangez avec les Équipes BYT3LAB
                </h1>
                <p class="b-hero__subtitle">
                    Que vous souhaitiez déployer une solution logicielle (MELODI ERP, SUKU), concevoir une infrastructure managée avec BWS ou engager un projet créatif avec NGRAFIX, nous sommes à votre disposition.
                </p>
            </div>
        </div>
    </section>

    <!-- Section Formulaire & Coordonnées -->
    <section class="b-section" id="formulaire-contact">
        <div class="b-container">
            <div style="display: grid; grid-template-columns: 1fr; gap: 48px; align-items: start;">
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 48px;">
                    
                    <!-- Coordonnées & Bureaux -->
                    <div>
                        <div class="b-section-head">
                            <span class="b-eyebrow">Nos Coordonnées</span>
                            <h2 class="b-title" style="font-size: 1.8rem;">Nos Équipes à Vos Côtés</h2>
                            <p class="b-lead" style="font-size: 15px;">
                                Nos ingénieurs et conseillers interviennent sur site au Cameroun et à distance sur l'ensemble de la zone CEMAC et internationale.
                            </p>
                        </div>

                        <!-- Cartes d'adresses -->
                        <div style="display: flex; flex-direction: column; gap: 20px; margin-bottom: 32px;">
                            <div class="b-card" style="padding: 24px;">
                                <div style="display: flex; align-items: flex-start; gap: 14px;">
                                    <div class="b-card__icon-wrap">
                                        <?php echo byt3lab_icon('map-pin', 20); ?>
                                    </div>
                                    <div>
                                        <h3 style="font-size: 1.15rem; margin-bottom: 4px;">Implantation Géographique</h3>
                                        <p style="font-size: 14px; color: var(--c-gray-600); margin: 0;">
                                            <?php byt3lab_e('contact.location'); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="b-card" style="padding: 24px;">
                                <div style="display: flex; align-items: flex-start; gap: 14px;">
                                    <div class="b-card__icon-wrap">
                                        <?php echo byt3lab_icon('mail', 20); ?>
                                    </div>
                                    <div>
                                        <h3 style="font-size: 1.15rem; margin-bottom: 6px;">E-mails Directs</h3>
                                        <ul style="list-style: none; padding: 0; margin: 0; font-size: 13.5px; display: flex; flex-direction: column; gap: 4px;">
                                            <li><strong>Général :</strong> <a href="mailto:<?php echo esc_attr(byt3lab_opt('contact.email')); ?>"><?php byt3lab_e('contact.email'); ?></a></li>
                                            <li><strong>Support :</strong> <a href="mailto:<?php echo esc_attr(byt3lab_opt('contact.email_support')); ?>"><?php byt3lab_e('contact.email_support'); ?></a></li>
                                            <li><strong>Carrières :</strong> <a href="mailto:<?php echo esc_attr(byt3lab_opt('contact.email_careers')); ?>"><?php byt3lab_e('contact.email_careers'); ?></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="b-card" style="padding: 24px;">
                                <div style="display: flex; align-items: flex-start; gap: 14px;">
                                    <div class="b-card__icon-wrap">
                                        <?php echo byt3lab_icon('phone', 20); ?>
                                    </div>
                                    <div>
                                        <h3 style="font-size: 1.15rem; margin-bottom: 6px;">Téléphone &amp; WhatsApp</h3>
                                        <p style="font-size: 14px; color: var(--c-gray-600); margin-bottom: 12px;">
                                            <a href="tel:<?php echo esc_attr(byt3lab_opt('contact.phone')); ?>" style="font-weight: 600;"><?php byt3lab_e('contact.phone'); ?></a>
                                            <?php if ($p2 = byt3lab_opt('contact.phone2')) : ?>
                                                · <a href="tel:<?php echo esc_attr($p2); ?>"><?php echo esc_html($p2); ?></a>
                                            <?php endif; ?>
                                        </p>
                                        <a href="https://wa.me/<?php echo esc_attr(byt3lab_opt('contact.whatsapp', '237696879475')); ?>" target="_blank" rel="noopener noreferrer" class="b-btn b-btn--sm" style="background: #16a34a; border-color: #16a34a; color: #fff;">
                                            <?php echo byt3lab_icon('whatsapp', 16); ?>
                                            <span>WhatsApp Ingénierie direct</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Formulaire Institutionnel -->
                    <div class="b-card" style="padding: clamp(2rem, 4vw, 3rem); border-top: 4px solid var(--c-navy-950);">
                        <div class="b-section-head" style="margin-bottom: 24px;">
                            <span class="b-eyebrow">Formulaire de Prise de Contact</span>
                            <h2 class="b-title" style="font-size: 1.6rem;">Envoyer un Message</h2>
                            <p class="b-lead" style="font-size: 14px;">
                                Réponse garantie sous 24h ouvrées par un ingénieur ou conseiller référent.
                            </p>
                        </div>

                        <form id="byt3lab-contact-form" data-b-ajax="1" data-ajax-url="<?php echo esc_url(admin_url('admin-ajax.php')); ?>" method="post">
                            <input type="hidden" name="action" value="byt3lab_submit_contact">
                            <input type="hidden" name="form_type" value="contact">
                            <input type="hidden" name="nonce" value="<?php echo esc_attr(wp_create_nonce('byt3lab_contact_nonce')); ?>">
                            <input type="hidden" name="byt3lab_ts" value="<?php echo time(); ?>">

                            <!-- Honeypot anti-spam -->
                            <div style="position: absolute; left: -9999px; top: -9999px;" aria-hidden="true">
                                <input type="text" name="byt3lab_hp" tabindex="-1" autocomplete="off">
                            </div>

                            <div class="b-form-group">
                                <label for="c-name" class="b-label">Nom &amp; Prénom *</label>
                                <input type="text" id="c-name" name="name" class="b-input" placeholder="ex: Jean-Paul Mbianda" required>
                            </div>

                            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px;">
                                <div class="b-form-group">
                                    <label for="c-org" class="b-label">Entreprise / Organisation</label>
                                    <input type="text" id="c-org" name="org" class="b-input" placeholder="ex: Groupe Logistique Sahel">
                                </div>

                                <div class="b-form-group">
                                    <label for="c-phone" class="b-label">Téléphone</label>
                                    <input type="tel" id="c-phone" name="phone" class="b-input" placeholder="ex: +237 6xx xx xx xx">
                                </div>
                            </div>

                            <div class="b-form-group">
                                <label for="c-email" class="b-label">Adresse e-mail professionnelle *</label>
                                <input type="email" id="c-email" name="email" class="b-input" placeholder="ex: direction@entreprise.cm" required>
                            </div>

                            <div class="b-form-group">
                                <label for="c-subject" class="b-label">Objet de votre demande *</label>
                                <select id="c-subject" name="subject" class="b-select" required>
                                    <option value="Déploiement MELODI ERP">Déploiement Progiciel MELODI ERP</option>
                                    <option value="Système Scolaire SUKU">Système Scolaire &amp; Éducatif SUKU</option>
                                    <option value="Infrastructure Cloud BWS">Services d'Infrastructure &amp; Hébergement BWS</option>
                                    <option value="Ingénierie Logicielle sur-mesure">Ingénierie Logicielle &amp; Développement sur-mesure</option>
                                    <option value="Projet Créatif NGRAFIX">Projet Studio Créatif NGRAFIX (Identité, Média)</option>
                                    <option value="Partenariat / Autre">Partenariat ou Autre demande institutionnelle</option>
                                </select>
                            </div>

                            <div class="b-form-group">
                                <label for="c-message" class="b-label">Message détaillé *</label>
                                <textarea id="c-message" name="message" class="b-textarea" rows="5" placeholder="Décrivez vos besoins, objectifs, contraintes techniques et délais prévus..." required></textarea>
                            </div>

                            <div style="margin-top: 24px;">
                                <button type="submit" class="b-btn b-btn--lg b-btn--primary" style="width: 100%;">
                                    <span>Envoyer votre message</span>
                                    <?php echo byt3lab_icon('arrow-right', 18); ?>
                                </button>
                            </div>

                            <div class="b-form-feedback" role="alert"></div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

</div>
