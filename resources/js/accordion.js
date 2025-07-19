const accordion_items = document.querySelectorAll('.accordion-item');

accordion_items.forEach(item => {
    const iconSpan = item.querySelector('.accordion-icon'); // Get the icon span

    item.addEventListener('click', () => {
        const accordion_active_item = document.querySelector('.accordion-item.active');

        if (accordion_active_item && accordion_active_item !== item) {
            accordion_active_item.classList.remove('active');
            const previouslyActiveIcon = accordion_active_item.querySelector('.accordion-icon');
            previouslyActiveIcon.textContent = '+'; // Reset icon of previously active item
        }

        item.classList.toggle('active');

        // Update the icon of the currently clicked item
        if (item.classList.contains('active')) {
            iconSpan.textContent = '-';
        } else {
            iconSpan.textContent = '+';
        }
    });
});
