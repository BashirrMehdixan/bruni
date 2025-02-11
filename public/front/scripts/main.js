if (document.querySelector('[data-fancybox]')) {
    Fancybox.bind("[data-fancybox]", {});
}

const fineElements = document.querySelectorAll('.fine_element');
const bgFines = document.querySelectorAll('.bg_fine');
if (fineElements.length) {
    fineElements[0].classList.add('active');

    fineElements.forEach(element => {
        element.addEventListener('mouseover', ({target}) => {
            fineElements.forEach(el => el.classList.toggle('active', el === target));
            bgFines.forEach(bg => bg.classList.replace('opacity-100', 'opacity-0'));

            const activeBg = document.querySelector(`#${target.dataset.art}`);
            activeBg?.classList.replace('opacity-0', 'opacity-100');
        });
    });
}


window.addEventListener('scroll', () => {
    if (document.querySelector('.page_title')) {
        if (window.scrollY > 250) {
            document.querySelector('.page_title').style.opacity = '0';
            document.querySelector('.page_title').style.transform = "translateY(-50%)";
            document.querySelector('.overlay.scroll').style.opacity = "0";
        } else if (window.scrollY < 250) {
            document.querySelector('.page_title').style.opacity = '1';
            document.querySelector('.page_title').style.transform = "translateY(0)";
            document.querySelector('.overlay.scroll').style.opacity = "0.65";
        }
    }
    if (window.scrollY > 50) {
        document.querySelector('header').style.backgroundColor = "rgba(0, 0, 0, .65)";
    } else {
        document.querySelector('header').style.backgroundColor = 'transparent';
    }
})
