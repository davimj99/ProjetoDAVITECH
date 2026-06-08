document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll('.counter');

    counters.forEach(counter => {
        counter.innerText = '0';

        const target = parseInt(counter.getAttribute('data-target'));
        const suffix = counter.getAttribute('data-suffix') || '';

        const updateCounter = () => {
            const current = parseInt(counter.innerText) || 0;

            const increment = target / 100;

            if (current < target) {
                counter.innerText = Math.ceil(current + increment) + suffix;
                setTimeout(updateCounter, 20);
            } else {
                counter.innerText = target + suffix;
            }
        };

        updateCounter();
    });
});