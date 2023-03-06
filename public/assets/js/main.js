particlesJS.load('particles', 'assets/js/particles.json');
particlesJS.load('particles2', 'assets/js/particles2.json');
let loader = document.getElementById("loader")
window.addEventListener("load",()=>{
    loader.classList.add('fade')
})
let toTop = document.querySelector(".to-top")
window.addEventListener("scroll",()=>{
    if(window.scrollY >= '800' ) {
        toTop.classList.add("show")
    } 
    else  toTop.classList.remove("show")
})
toTop.addEventListener("click",()=>window.scrollTo(0,0))