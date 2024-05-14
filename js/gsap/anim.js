console.clear(); // Start with a clean console on refesh
gsap.defaults({ease: "none"});
const tl = gsap.timeline( {repeat:-1, repeatDelay: 1} )
.to('.mouse-anim',{
    opacity: 0.1,
    y:5,
});

const scrollButton = document.querySelector('#scroll-button');
const sectionCases = document.querySelector('#section_case');
scrollButton.addEventListener('click', () => {
console.warn(sectionCases);
gsap.to(window, {
    duration: 1.5,
    scrollTo: sectionCases,
    ease: "power2"
});
});