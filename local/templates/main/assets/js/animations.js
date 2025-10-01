document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.services__card');
    const servicesSection = document.querySelector('.services');

    let currentActiveIndex = 0;
    let isAnimating = false;
    let hoverTimeout = null;
    let leaveTimeout = null;

    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    function onTransitionEnd(element, callback) {
        const transitionEndEvents = ['transitionend', 'webkitTransitionEnd', 'oTransitionEnd'];
        let called = false;

        const handler = (e) => {
            if (called || e.target !== element) return;
            called = true;

            transitionEndEvents.forEach(eventName => {
                element.removeEventListener(eventName, handler);
            });

            if (callback) callback();
        };

        transitionEndEvents.forEach(eventName => {
            element.addEventListener(eventName, handler);
        });

        setTimeout(() => {
            if (!called) handler({ target: element });
        }, 600);
    }

    function initializeCards() {
        cards.forEach((card, index) => {
            card.classList.remove('services__card--main', 'services__card--vertical');

            if (index === 0) {
                card.classList.add('services__card--main');
            } else {
                card.classList.add('services__card--vertical');
            }
        });
    }

    function switchMainCard(targetIndex) {
        if (isAnimating || targetIndex === currentActiveIndex) return;

        clearTimeout(hoverTimeout);
        clearTimeout(leaveTimeout);

        isAnimating = true;

        const previousMainCard = cards[currentActiveIndex];
        const newMainCard = cards[targetIndex];

        previousMainCard.classList.remove('services__card--main');
        previousMainCard.classList.add('services__card--vertical');

        newMainCard.classList.remove('services__card--vertical');
        newMainCard.classList.add('services__card--main');

        currentActiveIndex = targetIndex;

        onTransitionEnd(newMainCard, () => {
            isAnimating = false;
        });
    }

    const debouncedSwitchCard = debounce((targetIndex) => {
        if (!isAnimating && currentActiveIndex !== targetIndex) {
            switchMainCard(targetIndex);
        }
    }, 50);

    function resetToDefault() {
        if (currentActiveIndex !== 0 && !isAnimating) {
            switchMainCard(0);
        }
    }

    const debouncedReset = debounce(resetToDefault, 100);

    cards.forEach((card, index) => {
        card.addEventListener('mouseenter', () => {
            clearTimeout(leaveTimeout);

            hoverTimeout = setTimeout(() => {
                if (!isAnimating && currentActiveIndex !== index) {
                    switchMainCard(index);
                }
            }, 100);
        });

        card.addEventListener('mouseleave', () => {
            clearTimeout(hoverTimeout);
        });
    });

    if (servicesSection) {
        let isMouseInside = true;

        servicesSection.addEventListener('mouseenter', () => {
            isMouseInside = true;
            clearTimeout(leaveTimeout);
        });

        servicesSection.addEventListener('mouseleave', (e) => {
            const relatedTarget = e.relatedTarget;

            if (relatedTarget && servicesSection.contains(relatedTarget)) {
                return;
            }

            isMouseInside = false;
            clearTimeout(hoverTimeout);

            leaveTimeout = setTimeout(() => {
                if (!isMouseInside && currentActiveIndex !== 0) {
                    resetToDefault();
                }
            }, 200);
        });

        document.addEventListener('mouseover', (e) => {
            if (servicesSection.contains(e.target)) {
                isMouseInside = true;
                clearTimeout(leaveTimeout);
            } else if (!servicesSection.contains(e.target) && isMouseInside) {
                isMouseInside = false;
                clearTimeout(hoverTimeout);

                leaveTimeout = setTimeout(() => {
                    if (currentActiveIndex !== 0) {
                        resetToDefault();
                    }
                }, 300);
            }
        });
    }

    let scrollTimeout;
    window.addEventListener('scroll', () => {
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(() => {
            if (currentActiveIndex !== 0) {
                resetToDefault();
            }
        }, 800);
    }, { passive: true });

    document.addEventListener('visibilitychange', () => {
        if (document.hidden && currentActiveIndex !== 0) {
            setTimeout(() => {
                if (document.hidden) {
                    resetToDefault();
                }
            }, 100);
        }
    });

    window.addEventListener('resize', debounce(() => {
        if (currentActiveIndex !== 0) {
            resetToDefault();
        }
    }, 250));

    requestAnimationFrame(() => {
        initializeCards();
    });
    if (typeof PureCounter !== 'undefined') {
        new PureCounter({
            selector: '.about__stat-number, .implantation__stat-number',
            start: 0,
            duration: 3,
            delay: 10,
            once: true,
            repeat: false,
            decimals: 0,
            legacy: true,
            filesizing: false,
            currency: false,
            separator: true
        });
    }
});
