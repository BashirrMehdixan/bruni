if (document.querySelector('[data-fancybox]')) {
    Fancybox.bind("[data-fancybox]", {});
}

const fineElements = document.querySelectorAll('.fine_element');
const customBg = document.querySelector('.bg-fine');
if (customBg) {
    customBg.style.backgroundImage = `url(${fineElements[0].dataset.bg}`;
    customBg.classList.remove('opacity-0')
}
if (fineElements.length) {
    fineElements[0].classList.add('active');
    fineElements.forEach(element => {
        element.addEventListener('mouseover', (e) => {
            fineElements.forEach(a => a.classList.remove('active'));
            e.target.classList.add('active');

            customBg.classList.add('opacity-0');
            setTimeout(() => {
                customBg.style.backgroundImage = `url(${e.target.dataset.bg})`;
                customBg.classList.remove('opacity-0');
            }, 300);
        });
    });
}
window.addEventListener('scroll', () => {
    if (window.scrollY > 250) {
        document.querySelector('.page_title').style.opacity = '0';
        document.querySelector('.page_title').style.transform = "translateY(-50%)";
        document.querySelector('.overlay.scroll').style.opacity = "0";
    } else if (window.scrollY < 250) {
        document.querySelector('.page_title').style.opacity = '1';
        document.querySelector('.page_title').style.transform = "translateY(0)";
        document.querySelector('.overlay.scroll').style.opacity = "0.65";
    }
})
