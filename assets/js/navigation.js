document.addEventListener('DOMContentLoaded', () => {

    const header =
        document.querySelector('.tw-header');

    const toggle =
        document.querySelector('.tw-nav-toggle');

    const navigation =
        document.querySelector('.tw-navigation');

    const body =
        document.body;

    /*
     * --------------------------------------------------------
     * HEADER ON SCROLL
     * --------------------------------------------------------
     */

    const handleScroll = () => {

        if (!header) {
            return;
        }

        if (window.scrollY > 30) {

            header.classList.add(
                'is-scrolled'
            );

        } else {

            header.classList.remove(
                'is-scrolled'
            );

        }

    };

    /*
 * --------------------------------------------------------
 * PAGE TRANSITIONS
 * --------------------------------------------------------
 */

    const pageTransition =
        document.querySelector(
            '.tw-page-transition'
        );

    const shouldUseTransition = (link) => {

        if (!pageTransition) {
            return false;
        }

        const href =
            link.getAttribute('href');

        if (
            !href ||
            href.startsWith('#') ||
            href.startsWith('mailto:') ||
            href.startsWith('tel:')
        ) {
            return false;
        }

        if (
            link.hasAttribute('download') ||
            link.target === '_blank'
        ) {
            return false;
        }

        let url;

        try {

            url = new URL(
                link.href,
                window.location.href
            );

        } catch (error) {

            return false;
        }

        /*
         * External URL.
         */
        if (
            url.origin !==
            window.location.origin
        ) {
            return false;
        }

        /*
         * Same page anchor.
         */
        if (
            url.pathname ===
            window.location.pathname &&
            url.search ===
            window.location.search &&
            url.hash
        ) {
            return false;
        }

        return true;
    };


    const startPageTransition = (url) => {

        document.body.classList.add(
            'tw-page-leaving'
        );

        pageTransition.classList.add(
            'is-active'
        );

        /*
         * Give the transition enough time
         * to become visible before navigating.
         */
        window.setTimeout(
            () => {

                window.location.href =
                    url;

            },
            360
        );

    };


    document.addEventListener(
        'click',
        (event) => {

            const link =
                event.target.closest('a');

            if (!link) {
                return;
            }

            /*
             * Respect modifier keys.
             */
            if (
                event.metaKey ||
                event.ctrlKey ||
                event.shiftKey ||
                event.altKey
            ) {
                return;
            }

            if (
                !shouldUseTransition(link)
            ) {
                return;
            }

            event.preventDefault();

            /*
             * Close mobile navigation if open.
             */
            if (
                typeof closeMenu ===
                'function' &&
                navigation &&
                navigation.classList.contains(
                    'is-open'
                )
            ) {

                closeMenu();

            }

            startPageTransition(
                link.href
            );

        }
    );


    /*
     * Back/forward cache protection.
     *
     * Prevent overlay from remaining visible
     * when navigating back in the browser.
     */
    window.addEventListener(
        'pageshow',
        () => {

            document.body.classList.remove(
                'tw-page-leaving'
            );

            document.body.classList.remove(
                'tw-page-entering'
            );

            document.body.classList.add(
                'tw-page-ready'
            );

            if (pageTransition) {

                pageTransition.classList.remove(
                    'is-active'
                );

            }

        }
    );

    handleScroll();

    window.addEventListener(
        'scroll',
        handleScroll,
        {
            passive: true
        }
    );


    /*
     * --------------------------------------------------------
     * MOBILE NAVIGATION
     * --------------------------------------------------------
     */

    if (!toggle || !navigation) {
        return;
    }

    const openMenu = () => {

        toggle.setAttribute(
            'aria-expanded',
            'true'
        );

        toggle.setAttribute(
            'aria-label',
            'Close navigation'
        );

        navigation.classList.add(
            'is-open'
        );

        toggle.classList.add(
            'is-active'
        );

        body.classList.add(
            'tw-menu-open'
        );

    };


    const closeMenu = () => {

        toggle.setAttribute(
            'aria-expanded',
            'false'
        );

        toggle.setAttribute(
            'aria-label',
            'Open navigation'
        );

        navigation.classList.remove(
            'is-open'
        );

        toggle.classList.remove(
            'is-active'
        );

        body.classList.remove(
            'tw-menu-open'
        );

    };


    const toggleMenu = () => {

        const isOpen =
            toggle.getAttribute(
                'aria-expanded'
            ) === 'true';

        if (isOpen) {

            closeMenu();

        } else {

            openMenu();

        }

    };


    /*
     * Toggle button
     */

    toggle.addEventListener(
        'click',
        toggleMenu
    );


    /*
     * Close when clicking a navigation link
     */

    navigation
        .querySelectorAll('a')
        .forEach((link) => {

            link.addEventListener(
                'click',
                () => {

                    /*
                     * Only close the mobile menu
                     * when it is currently open.
                     */

                    if (
                        navigation.classList.contains(
                            'is-open'
                        )
                    ) {

                        closeMenu();

                    }

                }
            );

        });


    /*
     * Close with ESC
     */

    document.addEventListener(
        'keydown',
        (event) => {

            if (
                event.key === 'Escape' &&
                navigation.classList.contains(
                    'is-open'
                )
            ) {

                closeMenu();

                toggle.focus();

            }

        }
    );


    /*
     * Reset mobile state when returning
     * to desktop dimensions.
     */

    window.addEventListener(
        'resize',
        () => {

            if (
                window.innerWidth > 1100 &&
                navigation.classList.contains(
                    'is-open'
                )
            ) {

                closeMenu();

            }

        }
    );

    /*
 * --------------------------------------------------------
 * PAGE ENTER ANIMATION
 * --------------------------------------------------------
 */

    window.requestAnimationFrame(() => {

        window.requestAnimationFrame(() => {

            document.body.classList.remove(
                'tw-page-entering'
            );

            document.body.classList.add(
                'tw-page-ready'
            );

        });

    });

});