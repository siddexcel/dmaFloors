// JavaScript Document
function include(file) {
    let script = document.createElement('script');
    script.src = file;
    script.type = 'text/javascript';
    script.defer = true;
 
    document.getElementsByTagName('head').item(0).appendChild(script);
}
include ('menu.js');
include ('custom.js');
include ('https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js');
include ('gsap-animations.js');