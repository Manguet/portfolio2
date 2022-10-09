import { Controller } from '@hotwired/stimulus';

export default class extends Controller {

    connect() {
        const title = $(this.element).text();
        let nHTML   = '';

        for(let letter of title) {
            nHTML += "<span class='hoverTitle'>"+letter+"</span>";
        }

       $(this.element).html(nHTML);
    }
}
