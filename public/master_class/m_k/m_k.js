
    // Инициализация слайдера
    const slider = document.querySelector('.slider');

    let isAutoSliding = true;
    let slideIndex = 0;

    // Автоматическое прокручивание
    function autoSlide() {
    if (!isAutoSliding) return;

    slideIndex += 1;
    const slides = slider.children;
    const slideWidth = slides[0].clientWidth;
    const totalWidth = slideWidth * slides.length;

    slider.scrollBy({
    left: slideWidth,
    behavior: 'smooth'
});

    // Если доходим до конца, возвращаемся в начало
    if (slider.scrollLeft + slideWidth >= totalWidth) {
    slider.scrollTo({
    left: 0,
    behavior: 'smooth'
});
    slideIndex = 0;
}
}


    setInterval(autoSlide, 12   );


    slider.addEventListener('mouseover', () => {
    isAutoSliding = false;
});

    slider.addEventListener('mouseout', () => {
    isAutoSliding = true;
});

