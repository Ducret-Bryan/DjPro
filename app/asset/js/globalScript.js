window.addEventListener('load', function () {
    document.getElementById('burger_menu').addEventListener('click', () => {
        const navLink = document.getElementById('navLink');
        navLink.classList.toggle('hidden');
        navLink.classList.toggle('flex');
    })
});