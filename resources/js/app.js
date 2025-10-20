import './bootstrap';

// Mobile Navigation
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileNav = document.getElementById('mobile-nav');
    const mobileNavPanel = document.getElementById('mobile-nav-panel');
    const mobileNavClose = document.getElementById('mobile-nav-close');
    const mobileNavOverlay = document.getElementById('mobile-nav-overlay');

    function openMobileNav() {
        if (mobileNav) {
            mobileNav.classList.remove('hidden');
            setTimeout(() => {
                if (mobileNavPanel) mobileNavPanel.classList.remove('translate-x-full');
            }, 10);
        }
    }

    function closeMobileNav() {
        if (mobileNavPanel) {
            mobileNavPanel.classList.add('translate-x-full');
            setTimeout(() => {
                if (mobileNav) mobileNav.classList.add('hidden');
            }, 300);
        }
    }

    if (mobileMenuBtn) mobileMenuBtn.addEventListener('click', openMobileNav);
    if (mobileNavClose) mobileNavClose.addEventListener('click', closeMobileNav);
    if (mobileNavOverlay) mobileNavOverlay.addEventListener('click', closeMobileNav);

    // Filter functionality for marketplace
    const filterBtns = document.querySelectorAll('.filter-btn');
    const productCards = document.querySelectorAll('[data-category]');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.dataset.filter;
            
            filterBtns.forEach(b => {
                b.classList.remove('active', 'bg-blue-100', 'text-blue-800');
                b.classList.add('bg-gray-100', 'text-gray-700');
            });
            btn.classList.add('active', 'bg-blue-100', 'text-blue-800');
            btn.classList.remove('bg-gray-100', 'text-gray-700');
            
            productCards.forEach(card => {
                if (filter === 'all' || card.dataset.category.toLowerCase() === filter) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});