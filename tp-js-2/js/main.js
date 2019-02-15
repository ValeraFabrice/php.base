$(document).ready(function() {
    var texts = [
        'Bienvenue sur notre site',
        'Des pizzas',
        'Encore des pizzas'
    ];

    // Compteur de départ
    var i = 0;

    // On répète une fonction toutes les x millisecondes
    setInterval(function() {
        if (i >= texts.length) {
            i = 0;
        }

        // console.log(texts[i++]);
        $('h1').html(texts[i++]);
    }, 2000);
});


