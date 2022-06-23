import $, {Cash} from "cash-dom";
import "./tabs.scss";

class TabView {
    tabButtons: Cash;
    tabContent: Cash;
    constructor(element: Element) {
        this.tabButtons = $(element).find(".tab-button");
        this.tabContent = $(element).find(".tab-content");
        this.tabButtons.on('click',this.tabClick);
        if(this.tabButtons && this.tabButtons.length > 0) {
            const tab = this.tabButtons[0];
            if(tab && tab.dataset && tab.dataset.tabname) {
                this.showTab(tab.dataset.tabname);
            }
        }
    }

    private showTab=(tabname: string): void => {
        this.tabContent.each(index => {
            const tab = $(this.tabContent[index]);
            if(tab.data("tabname") === tabname) {
                tab.removeClass("hideTab");
            } else {
                tab.addClass("hideTab");
            }
        })

        this.tabButtons.each(index => {
            const button = $(this.tabButtons[index]);
            if(button.data("tabname") === tabname) {
                button.addClass("active");
            } else {
                button.removeClass("active");
            }
        })
    }

    private tabClick=(event: Event): void => {
        const target = event.target as HTMLElement;
        if(target === null) {
            return;
        }
        const tabname = target.dataset.tabname;
        if(tabname) {
            this.showTab(tabname);
        }
    }
}

function pageTabsInit() {
    $(".tab-container").each((index: number, element : any) => new TabView(element));
}

export { pageTabsInit as setupPageTabs }