window.addEventListener('load', function () {
    /* Navbar */
    this.document.getElementById('burger_menu').addEventListener('click', () => {
        const navLink = this.document.getElementById('navLink');
        navLink.classList.toggle('hidden');
        navLink.classList.toggle('flex');
    })

    addEventListener("scroll", (event) => {
        this.document.querySelector('nav').style.backgroundColor = (window.scrollY > 50) ? 'rgb(38, 38, 38, 1)' : 'rgb(38, 38, 38, 0.4)';
    });

    /* Accordion */
    const accordionTabs = this.document.querySelectorAll('.accordion-tab');
    const accordionLabels = this.document.querySelectorAll('.accordion-label');

    function toggleActive() {
        const target = this;
        console.log(target)
        const item = target.classList.contains("accordion-tab")
            ? target
            : target.parentElement;
        const group = item.dataset.tabGroup;
        const id = item.dataset.tabId;

        accordionTabs.forEach(function (tab) {
            if (tab.dataset.tabGroup === group) {
                if (tab.dataset.tabId === id) {
                    tab.classList.add("accordion-active");
                } else {
                    tab.classList.remove("accordion-active");
                }
            }
        });

        accordionLabels.forEach(function (label) {
            const tabItem = label.parentElement;

            if (tabItem.dataset.tabGroup === group) {
                if (tabItem.dataset.tabId === id) {
                    tabItem.classList.add("accordion-active");
                } else {
                    tabItem.classList.remove("accordion-active");
                }
            }
        });
    }


    accordionTabs.forEach((tab) => {
        tab.addEventListener('click', toggleActive)
    });

    accordionLabels.forEach((label) => {
        label.addEventListener('click', toggleActive)
    });

});