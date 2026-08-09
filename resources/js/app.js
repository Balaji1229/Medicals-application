

import Alpine from 'alpinejs';

window.Alpine = Alpine;

window.showToast = (message, type = 'success') => {
    window.dispatchEvent(new CustomEvent('toast', {
        detail: { message, type },
    }));
};

Alpine.start();
