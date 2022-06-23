import $, {Cash} from "cash-dom";

class ImagePopupButton {
    constructor(element: Element) {
        $(element).on('click',this.imageClick);
    }

    private imageClick=(event: Event): void => {
        const target = event.target as HTMLImageElement;
            if(target === null) {
                return;
            }
        const imageSrc = target.src;
        const imageCaption = target.alt;
        if(imageSrc && imageCaption) {
            this.showImage(imageSrc, imageCaption);
        }
    }

    private showImage=(imagename: string, imagecaption: string): void => {
        const modal = document.getElementById("myModal") as HTMLElement;
        const captionText = document.getElementById("caption");
        const span = document.getElementsByClassName("close")[0];
        const modalImg = document.getElementById("modalImg") as HTMLImageElement;

        if(modal) {
            console.log("test3:" + imagename);
            modal.style.display = "block";
            modalImg.src = imagename;
            // @ts-ignore
            captionText.innerHTML = imagecaption;
            $(modal).on('click',this.closeModal);
            $(span).on('click',this.closeModal);
        }
    }
    private closeModal=(event: Event): void => {
        const modal = document.getElementById("myModal") as HTMLElement;
        modal.style.display = "none";
    }
}

function imagePopupButtonInit() {
    $(".image-button").each((index: number, element : any) => new ImagePopupButton(element));
}

export { imagePopupButtonInit as setupImagePopupButton }