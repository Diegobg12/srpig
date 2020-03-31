let button = $('.menu-toggle')

button.click(function() {
  $('.burger-menu').toggleClass('fa-times')

  $('.menu-main-navigation-container').slideToggle()
})


let product= $('.single-product').children(':first');

product.addClass('hola')
