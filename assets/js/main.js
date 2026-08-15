document.addEventListener('DOMContentLoaded', () => {

    const serviceItems =
        document.querySelectorAll(
            '.tw-service-item'
        );

    const servicePanels =
        document.querySelectorAll(
            '.tw-service-panel'
        );

    if (!serviceItems.length ||
        !servicePanels.length) {
        return;
    }

    const activateService = (index) => {

        serviceItems.forEach((item) => {

            const isActive =
                item.dataset.service === index;

            item.classList.toggle(
                'is-active',
                isActive
            );

            item.setAttribute(
                'aria-pressed',
                isActive
                    ? 'true'
                    : 'false'
            );

        });

        servicePanels.forEach((panel) => {

            const isActive =
                panel.dataset.servicePanel === index;

            panel.classList.toggle(
                'is-active',
                isActive
            );

        });

    };

    serviceItems.forEach((item) => {

        item.addEventListener(
            'click',
            () => {

                activateService(
                    item.dataset.service
                );

            }
        );

        /*
         * En dispositivos con mouse también
         * reaccionará al pasar por el servicio.
         */
        item.addEventListener(
            'mouseenter',
            () => {

                if (
                    window.matchMedia(
                        '(hover: hover)'
                    ).matches
                ) {

                    activateService(
                        item.dataset.service
                    );

                }

            }
        );

    });

});