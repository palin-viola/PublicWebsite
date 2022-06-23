import {setupMobileMenu} from "./components/mobilemenu/mobileMenu";
import {setupToggleDisplay} from "./components/toggle/toggle";
import {setupPageTabs} from "./components/pagetabs/tabs";
import {setupImagePopupButton} from "./components/pagepopup/popup";
import {setupFormValidation} from "./components/formvalidation/formvalidation";
import {setupPageScroll} from "./components/pagescroll/pagescroll";

setupMobileMenu();
setupToggleDisplay("vc_toggle");
setupPageTabs();
setupImagePopupButton();
setupFormValidation();
setupPageScroll();