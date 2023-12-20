// sidebar
function dropdown() {
    document.querySelector("#submenu").classList.toggle("hidden");
    document.querySelector("#arrow").classList.toggle("rotate-0");
}
dropdown();

function openSidebar() {
    document.querySelector(".sidebar").classList.toggle("hidden");
}

// form logout
document
    .getElementById("logoutLink")
    .addEventListener("click", function (event) {
        event.preventDefault(); // Mencegah tautan mengarahkan langsung
        document.getElementById("logoutForm").submit(); // Mengirim formulir logout
    });
