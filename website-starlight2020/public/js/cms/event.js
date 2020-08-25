var timelineSwiper = new Swiper(".timeline .swiper-container", {
  direction: 'vertical',
  speed: 1600,
  height: 1000,
  navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
  },
  pagination: {
      el: '.swiper-pagination',
      clickable: true,
      renderBullet: function (index, className) {
          var year = document.querySelectorAll('.swiper-slide')[index].getAttribute('data-year');
          return '<span class="' + className + '">' + year + '</span>';
      }
  }
});