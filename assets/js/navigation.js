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

});