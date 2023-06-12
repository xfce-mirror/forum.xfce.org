/**
 * 
 * @param {string} selector CSS Selector
 * @returns {HTMLElement|NodeListOf<HTMLElement>}
 */
function qs(selector) {
    var res = document.querySelectorAll(selector);
    if (res.length > 1) return res;

    return res[0];
}

qs("#xfce-header ul").onclick =
    /**
     * @param {Event} e 
     */
    function (e) {
        /**
         * @type {HTMLUListElement}
         */
        var ul = e.target;
        var style = ul.parentElement.querySelector("style");
        if (style == null)
        {
            style = document.createElement("style");
            style.innerText = `
            @media screen and (max-width: 640px) {
                #xfce-header li 
                {
                    float: none !important;
                    display: block;
                }
            }
            `;
            ul.parentElement.appendChild(style);
        }
        else 
        {
            style.remove();    
        }
    };

qs("#brdmenu ul").onclick =
    /**
     * @param {Event} e 
     */
    function (e) {
        /**
         * @type {HTMLUListElement}
         */
        var ul = e.target;
        var style = ul.parentElement.querySelector("style");
        if (style == null)
        {
            style = document.createElement("style");
            style.innerText = `
            @media screen and (max-width: 640px) {
                #brdmenu li 
                {
                    float: none !important;
                    display: block;
                }
            }
            `;
            ul.parentElement.appendChild(style);
        }
        else 
        {
            style.remove();    
        }
    };