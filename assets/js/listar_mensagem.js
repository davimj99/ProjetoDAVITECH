document.addEventListener("DOMContentLoaded", function () {

    const modais = document.querySelectorAll('.modal');

    modais.forEach(modal => {

        modal.addEventListener('show.bs.modal', function () {
            document.body.style.overflow = "hidden";
        });

        modal.addEventListener('shown.bs.modal', function () {
            const dialog = modal.querySelector('.modal-dialog');

            if (dialog) {
                dialog.style.transform = "scale(0.9)";
                dialog.style.opacity = "0";

                setTimeout(() => {
                    dialog.style.transition = "all 0.25s ease";
                    dialog.style.transform = "scale(1)";
                    dialog.style.opacity = "1";
                }, 10);
            }
        });

        modal.addEventListener('hidden.bs.modal', function () {
            document.body.style.overflow = "auto";
        });

    });

});