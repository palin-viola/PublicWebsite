import $ from "cash-dom";

class PageScroll {
    constructor(element: Element) {
        window.addEventListener("scroll", () => {
            if (window.scrollY > 100) {
                $(".scrollUp").show();
            } else {
                $(".scrollUp").hide();
            }
        });
        $(element).on('click',this.scrollClick);
    }

    private scrollClick=(event: Event): void => {
        const target = event.target as HTMLImageElement;
            if(target === null) {
                return;
            }
        window.scroll(0, 0);
    }
}

function pageScrollInit() {
    $(".scrollUp").each((index: number, element : any) => new PageScroll(element));
}

export { pageScrollInit as setupPageScroll }