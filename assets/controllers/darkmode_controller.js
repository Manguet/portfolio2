import { Controller } from '@hotwired/stimulus';

export default class extends Controller {

    connect() {
        $(this.element).on('click', function () {

            let body = $(document.body);

            if (body.hasClass('dark')) {
                body.removeClass('dark')
            } else {
                body.addClass('dark')
            }
        })
    }
}
