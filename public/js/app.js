$(function () {
    $("#netappli_form").submit((e) => {
        let error = false
        const name = $('#name')[0]
        const subject = $('#subject')[0]
        const message = $('#message')[0]
        if (!name || !name.value) {
            error = true;
            $('#name + .netappli_error').html('Le nom est obligatoire !')
        }
        if (!subject || !subject.value) {
            error = true;
            $('#subject + .netappli_error').html('Le sujet est obligatoire')
        }
        if (!message || !message.value) {
            error = true;
            $('#message + .netappli_error').html('Le message est obligatoire')
        }
        if (error) {
            e.preventDefault();

        }
    })
})
