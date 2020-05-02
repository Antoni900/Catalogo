$('.toggle').click(function(){
    $('.formulario').animate({
        height: "toggle",
        'padding-top': 'toggle',
        'padding-bottom': 'toggle',
        opacity: 'toggle'
    }, "slow");

    if ($(this).text().trim() === 'Crear cuenta') {
        $(this).text('Iniciar sesión')
    } else {
        $(this).text('Crear cuenta')
    }
});
