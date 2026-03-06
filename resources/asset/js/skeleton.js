/**
 * Skeleton Loading System
 * Manages loading states across the application
 * Displays for exactly 2 seconds while content loads in background
 */

class SkeletonLoader {
    constructor() {
        this.defaultTimeout = 2000; // 2 seconds exactly
        this.loadingElements = new Map();
        this.init();
    }

    init() {
        // Initialize on DOM ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', () => this.setupGlobalSkeleton());
        } else {
            this.setupGlobalSkeleton();
        }

        // Setup intersection observer for lazy loading
        this.setupIntersectionObserver();
    }

    /**
     * Setup global page skeleton overlay
     */
    setupGlobalSkeleton() {
        // Create global skeleton overlay
        this.createGlobalSkeleton();

        // Find all elements with data-skeleton attribute
        document.querySelectorAll('[data-skeleton]').forEach(element => {
            this.createSkeleton(element);
        });

        // Find all loading containers
        document.querySelectorAll('.loading-container').forEach(container => {
            this.setupContainer(container);
        });
    }

    /**
     * Create global skeleton overlay for initial page load
     */
    createGlobalSkeleton() {
        // Remove existing skeleton if any
        const existing = document.getElementById('global-skeleton-overlay');
        if (existing) existing.remove();

        // Create overlay
        const overlay = document.createElement('div');
        overlay.id = 'global-skeleton-overlay';
        overlay.className = 'global-skeleton';

        // Create skeleton content structure
        overlay.innerHTML = `
            <div class="global-skeleton-wrapper">
                <!-- Header Skeleton -->
                <div class="global-skeleton-header">
                    <div class="skeleton skeleton-logo"></div>
                    <div class="skeleton-nav-items">
                        <div class="skeleton skeleton-nav-item"></div>
                        <div class="skeleton skeleton-nav-item"></div>
                        <div class="skeleton skeleton-nav-item"></div>
                        <div class="skeleton skeleton-nav-item"></div>
                    </div>
                </div>
                
                <!-- Hero Section -->
                <div class="global-skeleton-hero">
                    <div class="skeleton skeleton-hero-title"></div>
                    <div class="skeleton skeleton-hero-text"></div>
                    <div class="skeleton skeleton-hero-text" style="width: 60%"></div>
                    <div class="skeleton-hero-buttons">
                        <div class="skeleton skeleton-button-lg"></div>
                        <div class="skeleton skeleton-button-outline"></div>
                    </div>
                </div>
                
                <!-- Content Sections -->
                <div class="global-skeleton-content">
                    <div class="skeleton-grid">
                        <div class="skeleton skeleton-card-large"></div>
                        <div class="skeleton skeleton-card-large"></div>
                        <div class="skeleton skeleton-card-large"></div>
                    </div>
                    
                    <div class="skeleton-section">
                        <div class="skeleton skeleton-section-title"></div>
                        <div class="skeleton skeleton-text"></div>
                        <div class="skeleton skeleton-text"></div>
                        <div class="skeleton skeleton-text" style="width: 80%"></div>
                    </div>
                </div>
                
                <!-- Footer Skeleton -->
                <div class="global-skeleton-footer">
                    <div class="skeleton-footer-cols">
                        <div class="skeleton skeleton-footer-col"></div>
                        <div class="skeleton skeleton-footer-col"></div>
                        <div class="skeleton skeleton-footer-col"></div>
                    </div>
                </div>
            </div>
        `;

        document.body.appendChild(overlay);

        // Show skeleton immediately
        requestAnimationFrame(() => {
            overlay.classList.add('visible');
        });

        // Hide after exactly 2 seconds
        setTimeout(() => {
            this.hideGlobalSkeleton();
        }, this.defaultTimeout);
    }

    /**
     * Hide global skeleton with smooth transition
     */
    hideGlobalSkeleton() {
        const overlay = document.getElementById('global-skeleton-overlay');
        if (!overlay) return;

        // Add fade-out class for smooth transition
        overlay.classList.add('fade-out');

        // Remove from DOM after transition completes
        setTimeout(() => {
            overlay.remove();
            // Dispatch event when content is ready
            document.dispatchEvent(new CustomEvent('skeleton-hidden'));
        }, 300); // 300ms transition
    }

    /**
     * Create skeleton placeholder for an element
     */
    createSkeleton(element) {
        const skeletonType = element.dataset.skeleton || 'text';
        const skeleton = document.createElement('div');

        skeleton.className = `skeleton skeleton-${skeletonType}`;
        skeleton.setAttribute('aria-hidden', 'true');

        // Insert before the element
        element.parentNode.insertBefore(skeleton, element);

        // Hide original content during loading
        element.style.visibility = 'hidden';

        this.loadingElements.set(element, skeleton);
    }

    /**
     * Setup a loading container
     */
    setupContainer(container) {
        const skeleton = container.querySelector('.skeleton');
        const content = container.querySelector('.skeleton-content');

        if (!skeleton || !content) return;

        // Mark as loading
        container.classList.add('is-loading');

        // Store references
        container._skeleton = skeleton;
        container._content = content;
    }

    /**
     * Start loading for a specific container
     */
    startLoading(container, timeout = this.defaultTimeout) {
        if (!container) return;

        container.classList.add('is-loading');

        // Set timeout to auto-hide skeleton
        if (container._timeout) {
            clearTimeout(container._timeout);
        }

        container._timeout = setTimeout(() => {
            this.stopLoading(container);
        }, timeout);
    }

    /**
     * Stop loading and reveal content
     */
    stopLoading(container) {
        if (!container) return;

        container.classList.remove('is-loading');

        // Clear timeout
        if (container._timeout) {
            clearTimeout(container._timeout);
            container._timeout = null;
        }
    }

    /**
     * Setup intersection observer for lazy loading
     */
    setupIntersectionObserver() {
        if (!('IntersectionObserver' in window)) return;

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;

                    // Check if element has delayed content
                    const delay = element.dataset.skeletonDelay;
                    if (delay) {
                        setTimeout(() => {
                            this.startLoading(element.closest('.loading-container'));
                        }, parseInt(delay));
                    }

                    observer.unobserve(element);
                }
            });
        }, {
            rootMargin: '50px'
        });

        // Observe elements with data-skeleton-lazy
        document.querySelectorAll('[data-skeleton-lazy]').forEach(element => {
            observer.observe(element);
        });
    }

    /**
     * Show skeleton for AJAX content
     */
    showForAjax(targetSelector, timeout = this.defaultTimeout) {
        const target = document.querySelector(targetSelector);
        if (!target) return;

        const container = target.closest('.loading-container') || target;

        // Create skeleton if not exists
        if (!container.querySelector('.skeleton')) {
            const skeleton = document.createElement('div');
            skeleton.className = 'skeleton skeleton-card';
            container.insertBefore(skeleton, target);
        }

        this.startLoading(container, timeout);
    }

    /**
     * Hide skeleton after AJAX completes
     */
    hideForAjax(targetSelector) {
        const target = document.querySelector(targetSelector);
        if (!target) return;

        const container = target.closest('.loading-container') || target;
        this.stopLoading(container);
    }

    /**
     * Create skeleton HTML string for templates
     */
    static text(lines = 3) {
        let html = '';
        for (let i = 0; i < lines; i++) {
            html += `<div class="skeleton skeleton-text" style="width: ${80 + Math.random() * 20}%"></div>`;
        }
        return html;
    }

    static card() {
        return `
            <div class="skeleton skeleton-card">
                <div class="skeleton skeleton-image" style="height: 150px"></div>
                <div style="padding: 1rem">
                    <div class="skeleton skeleton-text-lg" style="width: 70%"></div>
                    <div class="skeleton skeleton-text"></div>
                    <div class="skeleton skeleton-text" style="width: 90%"></div>
                    <div class="skeleton skeleton-button" style="margin-top: 1rem"></div>
                </div>
            </div>
        `;
    }

    static avatar(size = 'md') {
        const sizeClass = size === 'lg' ? 'skeleton-avatar-lg' : 'skeleton-avatar';
        return `<div class="skeleton ${sizeClass}"></div>`;
    }

    static button() {
        return `<div class="skeleton skeleton-button"></div>`;
    }

    static input() {
        return `
            <div class="skeleton skeleton-label"></div>
            <div class="skeleton skeleton-input"></div>
        `;
    }

    static tableRow() {
        return `
            <div class="skeleton skeleton-table-row">
                <div class="skeleton skeleton-avatar" style="display: inline-block; vertical-align: middle; margin-right: 1rem"></div>
                <div class="skeleton skeleton-text" style="display: inline-block; vertical-align: middle; width: 30%"></div>
                <div class="skeleton skeleton-text" style="display: inline-block; vertical-align: middle; width: 20%"></div>
            </div>
        `;
    }
}

// Create global instance
window.SkeletonLoader = new SkeletonLoader();

// Helper functions for common use cases
window.skeleton = {
    show: (selector, timeout) => {
        window.SkeletonLoader.showForAjax(selector, timeout);
    },
    hide: (selector) => {
        window.SkeletonLoader.hideForAjax(selector);
    },
    start: (container) => {
        window.SkeletonLoader.startLoading(container);
    },
    stop: (container) => {
        window.SkeletonLoader.stopLoading(container);
    }
};

// Auto-manage AJAX requests
document.addEventListener('ajax:before', function (event) {
    const target = event.target;
    if (target.tagName === 'FORM') {
        const submitBtn = target.querySelector('[type="submit"]');
        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="skeleton skeleton-button" style="display: inline-block; width: 100px; height: 20px"></span>';
        }
    }
});

document.addEventListener('ajax:complete', function (event) {
    const target = event.target;
    if (target.tagName === 'FORM') {
        const submitBtn = target.querySelector('[type="submit"]');
        if (submitBtn) {
            submitBtn.disabled = false;
        }
    }
});

// Preload font fallback to prevent FOUT
document.fonts.ready.then(() => {
    document.body.classList.add('fonts-loaded');
});
