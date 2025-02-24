document.addEventListener("DOMContentLoaded", function () {
    const popup = document.getElementById("custom-popup");
    const closeBtn = document.querySelector(".close-btn");

    if (popup) {
        popup.style.display = "flex";
    }

    closeBtn.addEventListener("click", function () {
        popup.style.display = "none";
    });
});
