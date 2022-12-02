$(document).ready(function () {
    $('.customer-testomonial-slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        autoplay:false,
        autoplaySpeed: 2000,
        arrows: false,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    slidesToScroll: 1,
                    dots: true
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    slidesToScroll: 1,
                    dots: true
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
});

var rightJS = {
    init: function(){
      rightJS.Tags = document.querySelectorAll('.rightJS');
      for(var i = 0; i < rightJS.Tags.length; i++){
        rightJS.Tags[i].style.overflow = 'hidden';
      }
      rightJS.Tags = document.querySelectorAll('.rightJS div');
      for(var i = 0; i < rightJS.Tags.length; i++){
        rightJS.Tags[i].style.position = 'relative';
        rightJS.Tags[i].style.right = '-'+rightJS.Tags[i].parentElement.offsetWidth+'px';
      }
      rightJS.loop();
    },
    loop: function(){
      for(var i = 0; i < rightJS.Tags.length; i++){
        var x = parseFloat(rightJS.Tags[i].style.right);
        x ++;
        var W = rightJS.Tags[i].parentElement.offsetWidth;
        var w = rightJS.Tags[i].offsetWidth;
        if((x/100) * W  > w) x = -W;
        if (rightJS.Tags[i].parentElement.parentElement.querySelector(':hover') !== rightJS.Tags[i].parentElement) rightJS.Tags[i].style.right = x + 'px';
      } 
      requestAnimationFrame(this.loop.bind(this));
    }
  };
  window.addEventListener('load',rightJS.init);
  
 
  
  $(document).ready(function () {
    var rightJQ = {
      init: function(){
        $('.rightJQ').css({
          overflow: 'hidden'
        });
        $('.rightJQ').on('mouseover',function(){
          $('div', this).stop();
        });
        $('.rightJQ').on('mouseout',function(){
          $('div', this).animate({
            right: '100%'
          }, 16000, 'linear' );
        });
        rightJQ.loop();
      },
      loop: function(){
        $('.rightJQ div').css({
          position: 'relative',
          right: '-100%'
        }).animate({
          right: '100%'
        }, 16000, 'linear', rightJQ.loop);
      }
    };
    rightJQ.init();
  });
  