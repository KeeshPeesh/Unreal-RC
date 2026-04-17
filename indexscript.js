document.addEventListener("DOMContentLoaded", () => {
    const navLinks = document.querySelectorAll(".main-nav a");

    navLinks.forEach(link => {
        link.addEventListener("click", (e) => {
            e.preventDefault();
            console.log(`${link.textContent} clicked`);
        });
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const searchBar = document.getElementById("searchBar");
    const cards = document.querySelectorAll(".card");

    searchBar.addEventListener("input", () => {
        const searchTerm = searchBar.value.toLowerCase();

        cards.forEach(card => {
            const title = card.dataset.title;
            const description = card.dataset.description;

            if (title.includes(searchTerm) || description.includes(searchTerm)) {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        });
    });
});