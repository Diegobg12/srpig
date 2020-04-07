let button = $('.menu-toggle')

button.click(function() {
  $('.burger-menu').toggleClass('fa-times')

  $('.menu-main-navigation-container').slideToggle()
})


// Add active class to the current button (highlight it)
var header = document.getElementById('myDIV');
var btns = header.getElementsByClassName('btn');
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener('click', function() {
    var current = document.getElementsByClassName('active');
    current[0].className = current[0].className.replace(' active', '');
    this.className += ' active';
    var maps = header.getElementsByClassName('map');
    let mapId = this.id;
    for (var i = 0; i < maps.length; i++) {
      maps[i].classList.remove('show'); 
    }
    maps[mapId].classList.add('show')
  });
  
}

let product = $('.product')
$('.add-cart').hide();


// Product animation
// Sub menu animation
if ($(window).width() > 768) {
  product.hover(function() {
    let agotado = $(this).hasClass('outofstock')
    if(agotado === false){
      $(this).find('a').removeAttr('href');
      $(this).find('.add-cart').slideToggle();
    }else{
      $(this).find('a').removeAttr('href');

    }
    })
}
