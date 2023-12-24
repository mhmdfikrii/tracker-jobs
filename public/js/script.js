// form logout
function performLogout() {
    event.preventDefault(); // Mencegah tautan mengarahkan langsung
    document.getElementById("logoutForm").submit(); // Mengirim formulir logout
}

// Hamburger
const humburger = document.querySelector("#humburger");
const navMenu = document.querySelector("#nav-menu");

humburger.addEventListener("click", function () {
    humburger.classList.toggle("humburger-active");
    navMenu.classList.toggle("hidden");
});

// Toggle
const checkbox = document.querySelector("#toggle");
const html = document.querySelector("html");

// Mengecek preferensi tema dari localStorage saat halaman dimuat
document.addEventListener("DOMContentLoaded", function () {
    const currentTheme = localStorage.getItem("theme");

    if (currentTheme) {
        html.classList.add(currentTheme);
        checkbox.checked = currentTheme === "dark";
    }
});

// Mengatur event listener untuk toggle button
checkbox.addEventListener("click", function () {
    html.classList.toggle("dark");

    // Menyimpan preferensi tema ke localStorage
    const newTheme = html.classList.contains("dark") ? "dark" : "light";
    localStorage.setItem("theme", newTheme);
});

// Modal Register
// JavaScript untuk mengontrol modal
const openModalButton = document.getElementById("openModal");
const closeModalButton = document.getElementById("closeModal");
const modal = document.getElementById("registrationModal");

openModalButton.addEventListener("click", () => {
    modal.classList.remove("hidden");
});

closeModalButton.addEventListener("click", () => {
    modal.classList.add("hidden");
});
