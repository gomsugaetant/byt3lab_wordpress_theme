document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.querySelector('.c-navbar');
    const componentHeader = document.querySelector('.component-header');
    
    if (!navbar) return;

    function handleHeaderScroll() {
        if (window.scrollY > 20) {
            navbar.classList.add('c-navbar--scrolled', 'is-scrolled');
            if (componentHeader) componentHeader.classList.add('is-scrolled');
        } else {
            navbar.classList.remove('c-navbar--scrolled', 'is-scrolled');
            if (componentHeader) componentHeader.classList.remove('is-scrolled');
        }
    }

    window.addEventListener('scroll', handleHeaderScroll, { passive: true });
    handleHeaderScroll();

    // Dropdown hover stability handling for all dropdown items
    const dropdownItems = document.querySelectorAll('.c-navbar__item--has-dropdown');
    dropdownItems.forEach(function(dropdownItem) {
        let hoverTimeout;
        dropdownItem.addEventListener('mouseenter', function() {
            clearTimeout(hoverTimeout);
            dropdownItem.classList.add('is-open');
        });
        dropdownItem.addEventListener('mouseleave', function() {
            hoverTimeout = setTimeout(function() {
                dropdownItem.classList.remove('is-open');
            }, 200);
        });
    });
});

