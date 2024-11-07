document.addEventListener('DOMContentLoaded', () => {
    // Show more button updater
    document.querySelectorAll('.btnShowMore').forEach(e => {
        e.addEventListener('click', (event) => {
            const pBtnShowMore = event.target.tagName === 'SPAN' || event.target.tagName === 'I' ? event.target.parentElement : event.target;
            const pSecondaryText = pBtnShowMore.previousElementSibling;

            if (pSecondaryText && pSecondaryText.classList.contains('d-none')) {
                pSecondaryText.classList.replace('d-none', 'd-block');
                pBtnShowMore.querySelector('span').textContent = 'Menos';
                pBtnShowMore.querySelector('i').className = 'bi bi-chevron-up';
            } else {
                pSecondaryText.classList.replace('d-block', 'd-none');
                pBtnShowMore.querySelector('span').textContent = 'Más';
                pBtnShowMore.querySelector('i').className = 'bi bi-chevron-down';
            }
        });
    });

    // Icon dropdown themes updater
    document.querySelectorAll('#themes-list a').forEach(aTheme => {
        aTheme.addEventListener('click', (event) => {
            const targetThemeValue = event.target.getAttribute('data-bs-theme-value');
            const classIconTargetTheme = targetThemeValue === 'light' ? 'bi bi-sun-fill' : (targetThemeValue === 'dark' ? 'bi bi-moon-stars-fill' : 'bi bi-circle-half');
            document.querySelector('#dropdown-themes i').className = classIconTargetTheme;

        });
    });

    // Active nav-item updater (click event)
    document.querySelectorAll('.nav-link').forEach(e => {
        e.addEventListener('click', (event) => {
            const aDropdownThemes = event.target.tagName === 'I' ? event.target.parentElement : event.target;
            if (!aDropdownThemes.classList.contains('active') && aDropdownThemes.id !== 'dropdown-themes') {
                document.querySelectorAll('.active').length > 0 ? document.querySelector('.active').classList.remove('active') : true;
                event.target.classList.add('active');
            }
        });
    });

    // Active nav-item updater (scroll event)
    updatingActiveClassInNavItemByScroll();

    // const desktopMediaQuery = window.matchMedia('(min-width: 576px)');

    // desktopMediaQuery.addEventListener('change', (event) => {
    //     if (event.matches) {
    //         document.querySelector('nav').classList.add('rounded-pill')
    //     } else {
    //         document.querySelector('nav').classList.remove('rounded-pill')
    //     }
    // })
});

function updatingActiveClassInNavItemByScroll() {
    const sections = document.querySelectorAll('section');
    const navItems = document.querySelectorAll('.nav-item a');

    const options = {
        root: null,
        rootMargin: '0px',
        threshold: 0.5
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                navItems.forEach(navItem => {
                    navItem.classList.remove('active');
                    if (navItem.getAttribute('href').includes(entry.target.id)) {
                        navItem.classList.add('active');
                    }
                });
            }
        });
    }, options);

    sections.forEach(section => {
        observer.observe(section);
    });
}



