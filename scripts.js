$(function() {
    //Aqui vai todo nosso código de javascript.

    $('nav.mobile').click(function() {
        //o que vai acontecer se clicar na nav.mobile!
        var listaMenu = $('nav.mobile ul');

        if(listaMenu.is(':hidden') == true){
            var icone = $('.botao-menu-mobile i');
            icone.removeClass('fa-solid fa-bars');
            icone.addClass('fa-solid fa-rectangle-xmark')
            listaMenu.slideToggle();
        }
        else {
            var icone = $('.botao-menu-mobile i');
            icone.removeClass('fa-solid fa-rectangle-xmark');
            icone.addClass('fa-solid fa-bars')
            listaMenu.slideToggle();
        }
    })

})
