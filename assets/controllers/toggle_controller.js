import { Controller } from '@hotwired/stimulus';

export default class extends Controller {

    connect() {

        const menu = $(this.element);

        menu.on('click', function () {
            $('#nav').toggle('.open')
        })
    }
}
