import { Controller } from '@hotwired/stimulus';

export default class extends Controller {

    connect() {

        $(this.element).on('click', function () {

            let currentProject = $(this).data('id');

            $('#project-' + currentProject).addClass('hidden');

            let nextData = currentProject + 1;
            if (parseInt(currentProject) >= 3) {
                nextData = 1;
            }

            $(this).data('id', nextData);

            $('#project-' + nextData).removeClass('hidden')
        })
    }
}
