const menu = document.querySelector('#menu')
const navToggleMenu = document.querySelector('.nav__toggle-menu')
const links = document.querySelectorAll('.links')

const lenis = new Lenis({
    lerp: 0.09,
    wheelMultiplier: 0.7
})

lenis.on('scroll', ScrollTrigger.update)

gsap.ticker.add((time)=>{
lenis.raf(time * 1000)
})

gsap.ticker.lagSmoothing(0)


navToggleMenu.addEventListener('click', () => {
    if (menu.classList.contains('open')) {
        menu.classList.remove('open') 
        navToggleMenu.classList.remove('active')
        lenis.start()
            console.log(lenis)
    }
    else {
        menu.classList.add('open')
        navToggleMenu.classList.add('active')
        lenis.stop()
    }
})

Array.from(links).forEach(e => {
    e.addEventListener('click', () => {
        if (menu.classList.contains('open')) {
            menu.classList.remove('open') 
            navToggleMenu.classList.remove('active')
        }
        else {
            menu.classList.add('open')
            navToggleMenu.classList.add('active')
        }      
    })
})

let html = document.querySelector("html")
document.querySelector(".nav__toggle-menu").onclick = function(){
html.classList.toggle("unscroll")
}

