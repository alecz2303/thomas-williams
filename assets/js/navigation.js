document.addEventListener('DOMContentLoaded', () => {

    const header = document.querySelector('.tw-header');

    const toggle =
        document.querySelector('.tw-nav-toggle');

    const navigation =
        document.querySelector('.tw-navigation');

    /*
     * Header al hacer scroll
     */
    const handleScroll = () => {

        if (!header) {
            return;
        }

        if (window.scrollY > 30) {

            header.classList.add('is-scrolled');

        } else {

            header.classList.remove('is-scrolled');

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
     * Menú móvil
     */
    if (!toggle || !navigation) {
        return;
    }

    toggle.addEventListener('click', () => {

        const isOpen =
            toggle.getAttribute(
                'aria-expanded'
            ) === 'true';

        toggle.setAttribute(
            'aria-expanded',
            String(!isOpen)
        );

        navigation.classList.toggle(
            'is-open'
        );

        document.body.classList.toggle(
            'tw-menu-open'
        );

    });

});