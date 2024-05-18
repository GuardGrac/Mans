gsap.defaults({ease: "power2"});
gsap.set(".batch", {y: 50}); 
ScrollTrigger.batch(".batch", {
    interval: 0.3,
    onEnter: batch => gsap.to(batch, { opacity: 1, y: '0%', stagger: 0.15, overwrite: true }),
    onLeave: batch => gsap.set(batch, { opacity: 0, y: '-70%', overwrite: true }),
    onEnterBack: batch => gsap.to(batch, { opacity: 1, y: '0%', stagger: 0.15, overwrite: true }),
    onLeaveBack: batch => gsap.set(batch, { opacity: 0, y: '70%', overwrite: true }),
    start: "top 100%",
    end: "bottom 0%"
});

ScrollTrigger.batch(".footerbatch", {
    interval: 0.3,
    onEnter: batch => gsap.to(batch, { opacity: 1, y: '0%', stagger: 0.15, overwrite: true }),
    onLeave: batch => gsap.to(batch, { opacity: 0, y: '-70%', overwrite: true }),
    onEnterBack: batch => gsap.to(batch, { opacity: 1, y: '0%', stagger: 0.15, overwrite: true }),
    onLeaveBack: batch => gsap.to(batch, { opacity: 0, y: '70%', overwrite: true }),
    start: "top 100%",
    end: "bottom 0%"
});