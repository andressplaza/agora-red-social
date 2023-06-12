require('./bootstrap');

import Alpine from 'alpinejs'

window.Alpine = Alpine

import Choices from 'choices.js';

// Create multiselect element
window.choices = (element) => {
    return new Choices(element, {
        maxItemCount: 3,
        removeItemButton: true,
    });
}
Alpine.start()


