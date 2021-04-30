$("#header").vegas({
    transition: 'flash2',
    animation: 'random',
    timer: false,
    shuffle: true,
    slides: [
        { src: "/assets/images/slider1.jpg" },
        { src: "/assets/images/slider4.jpg" },
        { src: "/assets/images/slider2.jpg" }
    ]
});

AOS.init();

 $("#ex1").modal({
  fadeDuration: 100
});