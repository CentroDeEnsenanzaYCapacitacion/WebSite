document.addEventListener('DOMContentLoaded', function() {
    function animateCounter(element) {
        const target = parseInt(element.getAttribute('data-count'));
        const duration = 2000;
        const increment = target / (duration / 16);
        let current = 0;

        const updateCounter = () => {
            current += increment;
            if (current < target) {
                element.textContent = Math.floor(current) + '+';
                requestAnimationFrame(updateCounter);
            } else {
                element.textContent = target + '+';
            }
        };
        updateCounter();
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target.querySelector('[data-count]');
                if (counter && counter.textContent === '0') {
                    animateCounter(counter);
                }
            }
        });
    }, { threshold: 0.5 });

    document.querySelectorAll('.counter-item').forEach(item => {
        observer.observe(item);
    });

    document.querySelectorAll('.testimonial-avatar-img[data-avatar-base]').forEach(function(img) {
        img.addEventListener('error', function() {
            var exts = this.dataset.avatarExts;
            if (!exts) return;
            var extArray = exts.split(',');
            if (!extArray.length) return;
            var ext = extArray.shift();
            this.dataset.avatarExts = extArray.join(',');
            this.src = this.dataset.avatarBase + '.' + ext;
        });
    });
});
