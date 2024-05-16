window.addEventListener('load', function () {
    let isChangingImage = false;
    // Event
    if (window.location.hash) showLightbox(window.location.hash);

    window.onhashchange = async function () {
        const hashUrl = window.location.hash;
        showLightbox(hashUrl);
    }

    // Button
    const lightbox_closed = this.document.querySelector('.lightbox-closed')
    lightbox_closed.addEventListener('click', () => {
        const boxLight = this.document.getElementById('lightbox');
        removeImage(boxLight);
        hiddenLightbox(boxLight);
    })

    const lightbox_prev = this.document.querySelector('.lightbox-prev');
    lightbox_prev.addEventListener('click', () => {
        if (!isChangingImage) {
            const boxLight = this.document.getElementById('lightbox');

            removeImage(boxLight);
            changeHashUrl('prev');
        }
    })

    const lightbox_next = this.document.querySelector('.lightbox-next');
    lightbox_next.addEventListener('click', () => {
        if (!isChangingImage) {
            const boxLight = this.document.getElementById('lightbox');

            removeImage(boxLight);
            changeHashUrl('next');
        }
    })

    // Key Controll
    onkeydown = (event) => {
        const boxLight = this.document.getElementById('lightbox');
        const isOpen = (boxLight.dataset.isopen === 'true') ? true : false;

        if (isOpen && !isChangingImage) {
            if (event.isComposing || event.key === 'Escape') {
                removeImage(boxLight);
                hiddenLightbox(boxLight);
            }
            if (event.isComposing || event.key === 'ArrowLeft') {
                removeImage(boxLight);
                changeHashUrl('prev');
            }
            if (event.isComposing || event.key === 'ArrowRight') {
                removeImage(boxLight);
                changeHashUrl('next');
            }
        }

    };

    // Show Lightbox
    function showLightbox(hashUrl) {
        const boxLight = this.document.getElementById('lightbox');
        boxLight.dataset.isopen = true;
        document.body.classList.add('unscrollable');
        addImage(boxLight, hashUrl, false);
    }
    function hiddenLightbox(boxLight) {
        boxLight.dataset.isopen = false;
        document.body.classList.remove('unscrollable');
        history.replaceState(null, document.title, location.pathname + location.search)
    }

    // Image
    function addImage(boxLight, hashUrl) {
        const img = document.querySelector('.target[data-target="' + hashUrl + '"]').children[0];

        boxLight.appendChild(img.cloneNode());
    }

    function changeHashUrl(type) {
        isChangingImage = true;
        const target = selectTargetPhoto(type);

        const newHashUrl = '#photo_' + target;
        window.location.hash = newHashUrl;

        setTimeout(() => {
            isChangingImage = false;
        }, 100);
    }

    function removeImage(boxLight) {
        boxLight.querySelector('img').remove();
    }

    function selectTargetPhoto(type) {
        const hashUrl = window.location.hash;
        const current = parseInt(hashUrl.split('_')[1]);
        const lengthList = this.document.querySelectorAll('#thumbs a').length - 1;

        if (type === "next") {
            const next = current + 1;
            return (next > lengthList) ? 0 : next;
        } else {
            const prev = current - 1;
            return (prev < 0) ? lengthList : prev;
        }
    }
})