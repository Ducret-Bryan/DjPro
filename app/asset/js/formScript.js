window.addEventListener('load', function () {
    const submit = this.document.querySelector('button[type=submit]');
    submit.addEventListener('click', (event) => {
        event.preventDefault();
        fetchForm();
    })

    async function fetchForm() {
        const form = this.document.querySelector('form');
        const dataForm = new FormData(form);

        try {
            const response = await this.fetch('?action=contact', {
                method: "POST",
                body: dataForm
            })
            const dataResponse = await response.text();
            createMessage(form, dataResponse);
        } catch (error) {
            console.error("Erreur :", error);
        }
    }

    function createMessage(form, data) {
        const message = JSON.parse(data);
        const errorMessage = document.querySelector('.errorForm');
        const successMessage = document.querySelector('.successForm');
        const isSuccess = message[0];
        console.log('message', message)
        console.log('errorMessage', errorMessage)
        console.log('successMessage', successMessage)
        console.log('isSuccess', isSuccess)
        console.log('isSuccess && successMessage', (isSuccess && successMessage))
        console.log('!isSuccess && errorMessage', (!isSuccess && errorMessage))

        if (isSuccess && successMessage) {
            successMessage.innerHTML = message[1];
        } else if (!isSuccess && errorMessage) {
            errorMessage.innerHTML = message[1];
        } else {
            const div = document.createElement('div');
            div.className = (message[0]) ? "successForm" : "errorForm";
            div.innerHTML = message[1];

            form.insertAdjacentElement('beforebegin', div)
        }


    }
})