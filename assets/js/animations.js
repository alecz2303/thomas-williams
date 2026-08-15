document.addEventListener('DOMContentLoaded', () => {

    const elements =
        document.querySelectorAll(
            '[data-reveal]'
        );

    if (!elements.length) {
        return;
    }

    const prefersReducedMotion =
        window.matchMedia(
            '(prefers-reduced-motion: reduce)'
        ).matches;

    /*
     * Accesibilidad:
     * si el usuario ha pedido reducir
     * animaciones, mostramos todo directamente.
     */
    if (prefersReducedMotion) {

        elements.forEach((element) => {
            element.classList.add('is-visible');
        });

        return;
    }

    const observer =
        new IntersectionObserver(
            (entries) => {

                entries.forEach((entry) => {

                    if (!entry.isIntersecting) {
                        return;
                    }

                    const element =
                        entry.target;

                    /*
                     * Buscar elementos hermanos
                     * animables dentro del mismo bloque.
                     */
                    const parent =
                        element.parentElement;

                    if (parent) {

                        const siblings = [
                            ...parent.querySelectorAll(
                                ':scope > [data-reveal]'
                            )
                        ];

                        const index =
                            siblings.indexOf(element);

                        element.style.transitionDelay =
                            `${Math.max(index, 0) * 100}ms`;
                    }

                    element.classList.add(
                        'is-visible'
                    );

                    observer.unobserve(
                        element
                    );

                });

            },
            {
                threshold: 0.12,
                rootMargin:
                    '0px 0px -40px 0px'
            }
        );

    elements.forEach((element) => {
        observer.observe(element);
    });

    /*
    * ==========================================================
    * LEGACY YEAR
    * ==========================================================
    */

    const legacyYear =
        document.querySelector(
            '[data-legacy-year]'
        );

    if (
        legacyYear &&
        !prefersReducedMotion
    ) {

        let ticking = false;

        const updateLegacyYear = () => {

            const rect =
                legacyYear
                    .parentElement
                    .getBoundingClientRect();

            const viewportHeight =
                window.innerHeight;

            const progress =
                Math.min(
                    Math.max(
                        (
                            viewportHeight -
                            rect.top
                        )
                        /
                        (
                            viewportHeight +
                            rect.height
                        ),
                        0
                    ),
                    1
                );

            /*
            * Movimiento extremadamente sutil.
            */
            const translateX =
                (progress - .5) * 22;

            const scale =
                .96 + progress * .06;

            legacyYear.style.transform =
                `translateX(${translateX}px) scale(${scale})`;

            ticking = false;
        };

        const requestLegacyUpdate = () => {

            if (ticking) {
                return;
            }

            ticking = true;

            window.requestAnimationFrame(
                updateLegacyYear
            );
        };

        updateLegacyYear();

        window.addEventListener(
            'scroll',
            requestLegacyUpdate,
            {
                passive: true
            }
        );

        window.addEventListener(
            'resize',
            requestLegacyUpdate
        );

    }

    /*
    * ==========================================================
    * HERO IMAGE PARALLAX
    * ==========================================================
    */

    const heroImage =
        document.querySelector(
            '[data-hero-image]'
        );

    if (
        heroImage &&
        !prefersReducedMotion
    ) {

        let heroTicking = false;

        const updateHeroImage = () => {

            const hero =
                heroImage.closest(
                    '.tw-hero'
                );

            if (!hero) {
                return;
            }

            const rect =
                hero.getBoundingClientRect();

            const progress =
                Math.min(
                    Math.max(
                        -rect.top /
                        Math.max(
                            rect.height,
                            1
                        ),
                        0
                    ),
                    1
                );

            const translate =
                -6 + progress * 10;

            const scale =
                1.02 + progress * .02;

            heroImage.style.transform =
                `translateY(${translate}%) scale(${scale})`;

            heroTicking = false;
        };

        const requestHeroUpdate = () => {

            if (heroTicking) {
                return;
            }

            heroTicking = true;

            window.requestAnimationFrame(
                updateHeroImage
            );
        };

        updateHeroImage();

        window.addEventListener(
            'scroll',
            requestHeroUpdate,
            {
                passive: true
            }
        );

    }

});