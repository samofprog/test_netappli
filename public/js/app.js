$(function () {
    $("#netappli_form").submit((e) => {
        let error = false
        const name = $('#name')[0]
        const subject = $('#subject')[0]
        const message = $('#message')[0]
        if (!name || !name.value) {
            error = true;
            $('#name').addClass('netappli_error')
            $('#name + .netappli_error').html('Le nom est obligatoire !')
        }
        if (!subject || !subject.value) {
            error = true;
            $('#subject').addClass('netappli_error')
            $('#subject + .netappli_error').html('Le sujet est obligatoire')
        }
        if (!message || !message.value) {
            error = true;
            $('#message').addClass('netappli_error')
            $('#message + .netappli_error').html('Le message est obligatoire')
        }
        if (error) {
            e.preventDefault();

        }
    })
    $("input").click(function (e) {
        $(e.target).removeClass('netappli_error')
        $(`#${e.target.id} + .netappli_error`).html('')

    })
    $("textarea").click(function (e) {
        $(e.target).removeClass('netappli_error')
        $(`#${e.target.id} + .netappli_error`).html('')
    })
})
