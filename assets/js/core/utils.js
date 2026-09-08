/**
 * Global utility functions
 */

const Utils = {
    qs(selector, parent = document) {
        return parent.querySelector(selector);
    },

    qsa(selector, parent = document) {
        return [...parent.querySelectorAll(selector)];
    },

    escapeHtml(value = "") {
        const div = document.createElement("div");
        div.textContent = value;
        return div.innerHTML;
    }
};

window.Utils = Utils;
