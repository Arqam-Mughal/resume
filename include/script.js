gsap.to("#nav",{
  // y:30
  backgroundColor:"red",
  duration:0.5,
  // delay:1
  height:"95px",
  scrollTrigger:{
    trigger:"nav",
    scroller:"body",
    markers : true,
    start:"top -10%",
    end: "top -11%",
    // scrub:true
    scrub:2            // you can gave its value from 1 to 5 or also gave true in place of it.
  }
})