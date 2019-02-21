$(document).ready(function () {
    $('.slider').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1
    });

    $('.show__content').hover(
        // mouseenter
        function () {
            // On va chercher le btn dans le show__content qui est survolé
            // this représente le show__content qui est survolé
            $(this).find('.btn').css({ opacity: 1 });
        },
        // mouseleave
        function () {
            $(this).find('.btn').css({ opacity: 0 });
        }
    );

    $('.show__content .btn').click(function () {
        // Affiche la vidéo
        $('#video').fadeIn();
        // Affiche le bouton "Fermer la vidéo"
        $('#hideVideo').show();
        // Cache le slider
        $('.slider').hide();

        // get(0) permet de récupérer l'élément en JavaScript Vanilla
        // comme document.getElementById('video')
        // this fait référence au bouton qui est cliqué
        $('#video').get(0).src = $(this).attr('data-video');
        // Permet de lancer la vidéo
        $('#video').get(0).play();
    });

    $('#hideVideo').click(function () {
        // Cache la vidéo
        $('#video').hide();
        // Cache le bouton
        $('#hideVideo').hide();
        // $(this).hide();
        // On affiche le slider
        $('.slider').fadeIn();

        // On supprime la vidéo
        $('#video').get(0).src = null;
    });

    $('#onlyMovies').click(function (event) {
        // Annule le comportement par défaut
        // Par exemple, redirection avec un lien
        event.preventDefault();
        // on affiche les films
        $('#movies').fadeIn();
        // on cache les séries
        $('#shows').fadeOut();
    });

    $('#onlyShows').click(function () {
        // on affiche les séries
        $('#shows').fadeIn();
        // on cache les films
        $('#movies').fadeOut();
    });

    $('.allMoviesShows').click(function () {
        $('#shows').fadeIn();
        $('#movies').fadeIn();
    });
});
