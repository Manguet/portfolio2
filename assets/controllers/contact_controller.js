import { Controller } from '@hotwired/stimulus';

export default class extends Controller {

    connect() {
        $(this.element).on('click', function () {

            $('#contact-modal').toggle('hidden-modal')
        })
    }
}
