$(document).ready(function () {
    /*var texts = [
        'Bienvenue sur notre site',
        'Des pizzas',
        'Encore des pizzas'
    ];

    // Compteur de départ
    var i = 0;

    // On répéte une fonction toutes les X millisecondes
    setInterval(function() {
        if (i >= texts.length) {
            i = 0;
        }

        // console.log(texts[i++]);
        $('h1').html(texts[i++]);
    }, 2000);*/
    var texts = [
        'Bienvenue sur notre site',
        'Des pizzas',
        'Encore des pizzas'
    ];
    
    var countText = 1;
    
    var slideText = setInterval(function () {
        $('h1').fadeOut(1000, function () {
            if (countText >= texts.length) {
                countText = 0;
            }
    
            var text = texts[countText++];
            $('h1').html(text);
            $('h1').fadeIn();
        });
    }, 2000);
});

$('.pizza img').click(function () {
    var pizza = $(this).parent();

    $('.pizza').find('img').show();
    $('.pizza').find('div').hide();

    pizza.find('img').fadeOut(200, function () {
        pizza.find('div').show();
    });
});

$('.choosePizza').click(function () {
    $('#pizzaClick').html(
        'Vous avez choisi la pizza ' + $(this).parent().find('h2').html() +
        ' <img width="150" class="img-fluid" src="' + $(this).parent().parent().find('img').attr('src') + '" />'
    );
});

$('a.nav-link[href^="#"]').click(function(event) {
    event.preventDefault();

    var target_offset = $(this.hash).offset() ? $(this.hash).offset().top : 0;
    $('html, body').animate({scrollTop: target_offset - 50}, 500);
    $('a.nav-link[href^="#"]').parent().removeClass('active');
    $(this).parent().addClass('active');
});

$(window).scroll(function () {
    if ($(window).scrollTop() > 400) {
        $('.navbar').addClass('fixed-top');
        $('body').css('padding-top', '80px');
    } else {
        $('.navbar').removeClass('fixed-top');
        $('body').css('padding-top', '0');
    }
});

function random(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);

    return Math.floor(Math.random() * (max - min + 1)) + min;
}
