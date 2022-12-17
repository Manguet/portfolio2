import { Controller } from '@hotwired/stimulus';

export default class extends Controller {

    connect() {

        $(document).on('click', '#next', function () {

            let current = $('.current');
            current.addClass('hidden')

            let next = $(this).data('next')

            let nextStep = $('#' + next)

            nextStep
                .removeClass('hidden')
                .addClass('current')

            current.removeClass('current')

            let newImg = nextStep.data('src');
            $('#learn-img').css('background-image', "url('/images/" + newImg + ".jpg')")

            if (parseInt(nextStep.attr('id')) === 4) {
                $('#next').data('next', 1);
                $('#previous').data('next', 4);
            } else {
                $('#next').data('next', parseInt(nextStep.attr('id')) + 1);

                let newPosition = (parseInt(nextStep.attr('id'))) -1;
                if (newPosition < 1) {
                    newPosition = 4;
                }
                $('#previous').data('next', newPosition);
            }
        })

        $(document).on('click', '#previous', function () {

            let current = $('.current');
            current.addClass('hidden')

            let previous = $(this).data('next')

            let previousStep = $('#' + previous)

            previousStep
                .removeClass('hidden')
                .addClass('current')

            current.removeClass('current')

            let newImg = previousStep.data('src');
            $('#learn-img').css('background-image', "url('/images/" + newImg + ".jpg')")

            if (parseInt(previousStep.attr('id')) < 1) {
                previousStep.attr('id', 4)
            }
            if (parseInt(previousStep.attr('id')) === 1) {
                $('#previous').data('next', 4);
                $('#next').data('next', 1);
            } else {
                $('#previous').data('next', (parseInt(previousStep.attr('id')) - 1));

                let newPosition = (parseInt(previousStep.attr('id'))) + 1;
                if (newPosition > 4) {
                    newPosition = 1;
                }
                $('#next').data('next', newPosition);

            }
        })
    }
}
