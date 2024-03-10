$('.testimonials-container').owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:5000,
    margin:10,
    nav:true,
    navText: ["<i class='bx bx-left-arrow-alt' ></i>",
             "<i class='bx bx-right-arrow-alt' ></i>"],
    responsive:{
        0:{
            items:1
        },
        1080:{
            items:2
        }
    }
})