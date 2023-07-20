var swiper = new Swiper('.swiper', {
    effect: 'coverflow1',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: '1',
    centeredSlides:true,
    loop: true,
    autoplay:true,
    speed:800,
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows : true,
    },
    pagination: {
      el: '.swiper-pagination',
    },

    
    navigation: {
     nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
     },
    
  });
