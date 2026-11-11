/**
 * BYT3LAB - Scripts globaux du site
 * Gestion de la navigation, du tiroir mobile, des onglets et soumissions de formulaires.
 */

document.addEventListener('DOMContentLoaded', function () {
    // 1. Détection du scroll pour effet header compact
    const header = document.querySelector('.b-header');
    if (header) {
        const updateHeader = () => {
            if (window.scrollY > 20) {
                header.classList.add('is-scrolled');
            } else {
                header.classList.remove('is-scrolled');
            }
        };
        window.addEventListener('scroll', updateHeader, { passive: true });
        updateHeader();
    }

    // 2. Menu mobile accessible
    const burger = document.getElementById('b-burger-btn');
    const drawer = document.getElementById('b-mobile-drawer');
    const overlay = document.getElementById('b-nav-overlay');

    if (burger && drawer) {
        const toggleMenu = (open) => {
            const isOpen = open !== undefined ? open : !drawer.classList.contains('is-open');
            drawer.classList.toggle('is-open', isOpen);
            if (overlay) overlay.classList.toggle('is-open', isOpen);
            burger.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            document.body.style.overflow = isOpen ? 'hidden' : '';
        };

        burger.addEventListener('click', () => toggleMenu());
        if (overlay) overlay.addEventListener('click', () => toggleMenu(false));

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && drawer.classList.contains('is-open')) {
                toggleMenu(false);
                burger.focus();
            }
        });
    }

    // 3. Menus déroulants desktop accessibles
    const dropdownTriggers = document.querySelectorAll('.b-nav__item--has-drop > .b-nav__link');
    dropdownTriggers.forEach((trigger) => {
        trigger.addEventListener('click', (e) => {
            // Sur mobile ou clic, toggle le dropdown
            const parent = trigger.parentElement;
            const expanded = trigger.getAttribute('aria-expanded') === 'true';
            trigger.setAttribute('aria-expanded', !expanded);
            parent.classList.toggle('is-active', !expanded);
        });
    });

    // 4. Système d'onglets (ex: Secteurs d'activité)
    const tabGroups = document.querySelectorAll('.b-tabs');
    tabGroups.forEach((group) => {
        const buttons = group.querySelectorAll('.b-tabs__btn');
        const panels = group.querySelectorAll('.b-tabs__panel');

        buttons.forEach((btn) => {
            btn.addEventListener('click', () => {
                const targetId = btn.getAttribute('aria-controls');

                buttons.forEach((b) => b.setAttribute('aria-selected', 'false'));
                panels.forEach((p) => p.classList.remove('is-active'));

                btn.setAttribute('aria-selected', 'true');
                const targetPanel = group.querySelector('#' + targetId);
                if (targetPanel) {
                    targetPanel.classList.add('is-active');
                }
            });
        });
    });

    // 5. Gestionnaire de formulaires AJAX sécurisés (Contact & Partenaire)
    const ajaxForms = document.querySelectorAll('form[data-b-ajax="1"]');
    ajaxForms.forEach((form) => {
        // Enregistrer l'heure de rendu pour le time-trap anti-bot
        const tsInput = form.querySelector('input[name="byt3lab_ts"]');
        if (tsInput) {
            tsInput.value = Math.floor(Date.now() / 1000);
        }

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const feedback = form.querySelector('.b-form-feedback');
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn ? submitBtn.innerHTML : '';

            if (feedback) {
                feedback.className = 'b-form-feedback';
                feedback.style.display = 'none';
                feedback.innerHTML = '';
            }

            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = 'Transmission en cours...';
            }

            const formData = new FormData(form);
            const ajaxUrl = form.getAttribute('data-ajax-url') || (window.byt3lab_vars ? window.byt3lab_vars.ajax_url : '/wp-admin/admin-ajax.php');

            fetch(ajaxUrl, {
                method: 'POST',
                body: formData,
            })
                .then((res) => res.json())
                .then((response) => {
                    if (submitBtn) {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalBtnText;
                    }

                    if (response && response.success) {
                        if (feedback) {
                            feedback.className = 'b-form-feedback is-success';
                            feedback.style.display = 'block';
                            let msg = '<p style="margin: 0 0 8px 0; font-weight: 600;">' + (response.data.message || 'Demande transmise avec succès !') + '</p>';
                            if (response.data.whatsapp_url) {
                                msg += '<a href="' + response.data.whatsapp_url + '" target="_blank" rel="noopener noreferrer" class="b-btn b-btn--sm b-btn--primary" style="background:#16a34a; border-color:#16a34a; margin-top: 10px;">Suivre instantanément sur WhatsApp &rarr;</a>';
                            }
                            feedback.innerHTML = msg;
                        }
                        form.reset();
                    } else {
                        const errMsg = (response && response.data && response.data.message) ? response.data.message : 'Une erreur est survenue lors de l\'envoi. Veuillez vérifier votre saisie.';
                        if (feedback) {
                            feedback.className = 'b-form-feedback is-error';
                            feedback.style.display = 'block';
                            feedback.innerHTML = '<p style="margin: 0;">' + errMsg + '</p>';
                        }
                    }
                })
                .catch((err) => {
                    if (submitBtn) {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalBtnText;
                    }
                    if (feedback) {
                        feedback.className = 'b-form-feedback is-error';
                        feedback.style.display = 'block';
                        feedback.innerHTML = '<p style="margin: 0;">Erreur de connexion au serveur. Veuillez réessayer ou nous contacter directement par e-mail.</p>';
                    }
                });
        });
    });
});

