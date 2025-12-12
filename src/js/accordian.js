document.querySelectorAll('.rwd-accordion-heading').forEach(button => {
    button.addEventListener('click', () => {
        const rwdAccordianItem = button.parentElement;

        // Close any open FAQ
        document.querySelectorAll('.rwd-accordion-content').forEach(item => {
            if (item !== rwdAccordianItem) {
                item.classList.remove('active');
            }
        });

        // Toggle the current FAQ
        rwdAccordianItem.classList.toggle('active');
    });
});