const langElements = {
    id: {
        
    },
    en: {

    },
};

const changeLanguage = (lang) => {
    const elements = langElements[lang];
    if (elements) {
        for (const id in elements) {
            const element = document.querySelector(`.${id}`);
            if (element) {
                element.textContent = elements[id];
            }
        }
    }
};

document.addEventListener('DOMContentLoaded', () => {
    const langLinks = document.querySelectorAll('.change-lang');
    langLinks.forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            const selectedLang = link.getAttribute('data-lang');
            changeLanguage(selectedLang);
        });
    });
});
