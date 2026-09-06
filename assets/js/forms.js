/**
 * Form interactions.
 *
 * @package ThomasWilliams
 */

document.addEventListener(
    'DOMContentLoaded',
    () => {

        /*
         * ====================================================
         * PHONE COUNTRY PICKER
         * ====================================================
         */

        const phonePickers =
            document.querySelectorAll(
                '[data-phone-picker]'
            );

        if (!phonePickers.length) {
            return;
        }


        phonePickers.forEach(
            (wrapper) => {

                const picker =
                    wrapper.querySelector(
                        '.tw-phone-picker'
                    );

                const trigger =
                    wrapper.querySelector(
                        '[data-phone-picker-trigger]'
                    );

                const menu =
                    wrapper.querySelector(
                        '[data-phone-picker-menu]'
                    );

                const hiddenInput =
                    wrapper.querySelector(
                        '[data-phone-country-input]'
                    );

                const flag =
                    wrapper.querySelector(
                        '[data-phone-picker-flag]'
                    );

                const dial =
                    wrapper.querySelector(
                        '[data-phone-picker-dial]'
                    );

                const options =
                    wrapper.querySelectorAll(
                        '[data-phone-picker-option]'
                    );


                /*
                 * Required elements.
                 */
                if (
                    !picker ||
                    !trigger ||
                    !menu ||
                    !hiddenInput ||
                    !flag ||
                    !dial ||
                    !options.length
                ) {
                    return;
                }


                /*
                 * --------------------------------------------
                 * CLOSE
                 * --------------------------------------------
                 */

                const closePicker = () => {

                    picker.classList.remove(
                        'is-open'
                    );

                    trigger.setAttribute(
                        'aria-expanded',
                        'false'
                    );

                };


                /*
                 * --------------------------------------------
                 * OPEN
                 * --------------------------------------------
                 */

                const openPicker = () => {

                    /*
                     * Close any other country picker first.
                     */
                    document
                        .querySelectorAll(
                            '.tw-phone-picker.is-open'
                        )
                        .forEach(
                            (openPickerElement) => {

                                if (
                                    openPickerElement !==
                                    picker
                                ) {
                                    openPickerElement
                                        .classList
                                        .remove(
                                            'is-open'
                                        );

                                    const openTrigger =
                                        openPickerElement
                                            .querySelector(
                                                '[data-phone-picker-trigger]'
                                            );

                                    if (openTrigger) {

                                        openTrigger
                                            .setAttribute(
                                                'aria-expanded',
                                                'false'
                                            );

                                    }

                                }

                            }
                        );


                    picker.classList.add(
                        'is-open'
                    );

                    trigger.setAttribute(
                        'aria-expanded',
                        'true'
                    );

                };


                /*
                 * --------------------------------------------
                 * TOGGLE
                 * --------------------------------------------
                 */

                const togglePicker = () => {

                    if (
                        picker.classList.contains(
                            'is-open'
                        )
                    ) {

                        closePicker();

                        return;
                    }

                    openPicker();

                };


                /*
                 * --------------------------------------------
                 * SELECT COUNTRY
                 * --------------------------------------------
                 */

                const selectCountry = (
                    option
                ) => {

                    const iso =
                        option.dataset.countryIso;

                    const dialCode =
                        option.dataset.countryDial;

                    const flagSrc =
                        option.dataset.countryFlag;


                    if (
                        !iso ||
                        !dialCode ||
                        !flagSrc
                    ) {
                        return;
                    }


                    /*
                     * Update hidden form value.
                     */
                    hiddenInput.value =
                        iso;


                    /*
                     * Update visible trigger.
                     */
                    flag.src =
                        flagSrc;

                    flag.alt =
                        '';

                    dial.textContent =
                        dialCode;


                    /*
                     * Update selected state.
                     */
                    options.forEach(
                        (item) => {

                            const selected =
                                item === option;

                            item.classList.toggle(
                                'is-selected',
                                selected
                            );

                            item.setAttribute(
                                'aria-selected',
                                selected
                                    ? 'true'
                                    : 'false'
                            );

                        }
                    );


                    closePicker();

                    trigger.focus();

                };


                /*
                 * --------------------------------------------
                 * TRIGGER CLICK
                 * --------------------------------------------
                 */

                trigger.addEventListener(
                    'click',
                    (event) => {

                        event.preventDefault();

                        event.stopPropagation();

                        togglePicker();

                    }
                );


                /*
                 * --------------------------------------------
                 * OPTION CLICK
                 * --------------------------------------------
                 */

                options.forEach(
                    (option) => {

                        option.addEventListener(
                            'click',
                            (event) => {

                                event.preventDefault();

                                event.stopPropagation();

                                selectCountry(
                                    option
                                );

                            }
                        );

                    }
                );


                /*
                 * --------------------------------------------
                 * KEYBOARD
                 * --------------------------------------------
                 */

                wrapper.addEventListener(
                    'keydown',
                    (event) => {

                        /*
                         * Escape closes menu.
                         */
                        if (
                            event.key ===
                            'Escape'
                        ) {

                            if (
                                picker.classList
                                    .contains(
                                        'is-open'
                                    )
                            ) {

                                event.preventDefault();

                                closePicker();

                                trigger.focus();

                            }

                        }

                    }
                );


                /*
                 * --------------------------------------------
                 * CLICK OUTSIDE
                 * --------------------------------------------
                 */

                document.addEventListener(
                    'click',
                    (event) => {

                        if (
                            !wrapper.contains(
                                event.target
                            )
                        ) {

                            closePicker();

                        }

                    }
                );

            }
        );

    }
);