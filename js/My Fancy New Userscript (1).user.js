// ==UserScript==
// @name         My Fancy New Userscript
// @namespace    http://your.homepage/
// @version      0.1
// @description  enter something useful
// @author       You
// @match        http://tampermonkey.net/index.php?version=3.10.60&ext=dhdg&updated=true
// @grant        none
// ==/UserScript==

function addJQuery(callback) {
    var script = document.createElement("script");
    script.setAttribute("src", "localhost/PasswordBox/js/jquery.js");
    script.addEventListener('load', function() {
        var script = document.createElement("script");
        script.textContent = "window.jQ=jQuery.noConflict(true);(" + callback.toString() + ")();";
        document.body.appendChild(script);
    }, false);
    document.body.appendChild(script);
}
function main(){
    $(document).ready(function()
                      {
                          if(window.location.pathname == "https://accounts.google.com/ServiceLogin?service=mail")
                              alert("hi");
                      });
}
// load jQuery and execute the main function
addJQuery(main);