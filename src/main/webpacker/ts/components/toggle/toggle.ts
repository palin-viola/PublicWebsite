import $, {Cash} from "cash-dom";
import "./toggle.scss";

function toggleInit (className: string) {
    className = "." + className;
    $(className + ' ul li h3').attr('data-before', '+');
    $(className + ' ul li').on("click",function (event) {
        const liParent = event.target.parentElement;
        const isVisible = liParent.classList.contains("active");
        if (isVisible) {
            $(liParent).removeClass('active');
        } else {
            $(liParent).addClass('active');
        }
    });
}

export { toggleInit as setupToggleDisplay }