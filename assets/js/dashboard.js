document.addEventListener("DOMContentLoaded", function () {

    // animação dos números
    const counters = document.querySelectorAll(".counter");

    counters.forEach(counter => {
        counter.innerText = "0";

        const updateCounter = () => {
            const target = +counter.innerText;
            const current = +counter.innerText;

            const increment = target / 30;

            if (current < target) {
                counter.innerText = Math.ceil(current + increment);
                setTimeout(updateCounter, 30);
            } else {
                counter.innerText = target;
            }
        };

        updateCounter();
    });

    // animação dos cards
    const cards = document.querySelectorAll(".dashboard-card");

    cards.forEach((card, index) => {
        card.style.opacity = 0;
        card.style.transform = "translateY(20px)";

        setTimeout(() => {
            card.style.transition = "0.4s ease";
            card.style.opacity = 1;
            card.style.transform = "translateY(0)";
        }, index * 100);
    });

});