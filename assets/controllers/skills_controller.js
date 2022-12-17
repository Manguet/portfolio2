import { Controller } from '@hotwired/stimulus';

export default class extends Controller {

    connect() {
        let h2 = $('h2');

        h2.on('click', function () {

            h2.each(function () {
                $(this).removeClass('active')
            })

            $(this).addClass('active')

            $('#clear-skills').addClass('clear-skills');

            if ($(this).attr('id') === 'hard') {

                $('.hard').removeClass('hidden')
                $('.soft').addClass('hidden')
                $('.other').addClass('hidden')
            }

            if ($(this).attr('id') === 'soft') {
                $('.hard').addClass('hidden')
                $('.soft').removeClass('hidden')
                $('.otheer').addClass('hidden')
            }

            if ($(this).attr('id') === 'other') {
                $('.hard').addClass('hidden')
                $('.soft').addClass('hidden')
                $('.other').removeClass('hidden')
            }

            setTimeout(function () {
                $('#clear-skills').removeClass('clear-skills');
            }, 500)

        })
    }
}
