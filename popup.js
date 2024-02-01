const openPopupBtn = document.getElementById("open-popup-btn");
        const popup = document.getElementById("popup");

        openPopupBtn.addEventListener("click", function() {
        popup.style.display = "block";
        });

        window.addEventListener("click", function(event) {
        if (event.target === popup) {
            return;
        }
        popup.style.display = "none";
        });