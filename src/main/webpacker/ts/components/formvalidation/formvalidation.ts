import $, {Cash} from "cash-dom";

class FormValidation {
    myForm: Cash;
    constructor(element: HTMLFormElement) {
        this.myForm = $(element).find(".needs-validation");
        $(element).on('click',this.submitClick);
    }

    private submitClick=(event: Event): void => {
        'use strict'
        const forms = document.querySelectorAll('.needs-validation');

        // const myForm = document.getElementById("form") as HTMLFormElement;
        // const formFields = myForm.querySelectorAll('input:not([type=\'hidden\']), select, textarea');


        const myForm = document.getElementsByClassName('needs-validation') as HTMLCollectionOf<HTMLFormElement>;
        // let formFields: any;
        // formFields = myForm.querySelectorAll('input:not([type=\'hidden\']), select, textarea');

        Array.from(myForm).forEach(formFields => {
            for (let i = 0; i < formFields.elements.length; i++) {
                console.log("box: "+myForm[i].name);
            }
        });


        // const boxes = Array.from(document.getElementsByClassName('needs-validation') as HTMLCollectionOf<HTMLFormElement>);
        //
        // if(boxes) {
        //         for (let i = 0; i < boxes.length; i++) {
        //             console.log("box: "+boxes[i].id);
        //         }
        //     }
        //
        // boxes.forEach(box => {
        //     console.log(box.elements.item(0));
        // });

        //Extract Each Element Value
        // if(formFields) {
        //     for (let i = 0; i < myForm.elements.length; i++) {
        //         console.log(formFields[i].id);
        //     }
        // }

    }
}

function formValidationInit() {
    $(".submit-btn").each((index: number, element : any) => new FormValidation(element));
}

export { formValidationInit as setupFormValidation }