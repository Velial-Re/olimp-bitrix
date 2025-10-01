document.addEventListener('DOMContentLoaded', function () {
    function initMask() {
        const phoneInput = document.querySelector('#user_email');

        if (phoneInput) {
            if (phoneInput._imask) {
                phoneInput._imask.destroy();
            }

            const phoneMask = IMask(phoneInput, {
                mask: '+{7}(000)000-00-00',
                lazy: false,
                placeholderChar: '_'
            });

            phoneInput._imask = phoneMask;
        }
    }

    function initCheckboxToggle() {
        const checkbox = document.querySelector('.appointment__checkbox');
        const submitBtn = document.querySelector('.appointment__submit');

        if (checkbox && submitBtn) {
            submitBtn.disabled = true;

            checkbox.addEventListener('change', function () {
                submitBtn.disabled = !this.checked;
            });

        }
    }

    initMask();
    initCheckboxToggle();

    if (typeof BX !== 'undefined') {
        BX.addCustomEvent('onAjaxSuccess', function () {
            setTimeout(initMask, 200);
        });

        BX.addCustomEvent('onAjaxSuccessForm', function () {
            setTimeout(initMask, 200);
        });
    }
});