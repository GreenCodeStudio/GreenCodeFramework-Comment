import {FormManager} from "../../../Core/js/form";
import {Ajax} from "../../../Core/js/ajax";
import {pageManager} from "../../../Core/js/pageManager";

export class show{
    constructor(page, data) {
        this.page = page;
        this.data = data;
        console.log(data)
        let form = new FormManager(page.querySelector('form'));

        form.submit = async newData => {
            await Ajax.Comment.insert(this.data.objectType, this.data.objectId, newData);
            pageManager.goto('/Comment/show/' + this.data.objectType + '/' + this.data.objectId);
        }
    }
}
