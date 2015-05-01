jQuery("#main-navigation>li").mouseover(
    function () {

        var largeurParent = jQuery(this).width();
        var demiParent = largeurParent/2;
        var largeurSubnav = jQuery(this).find(".subnav").width();

        // Calcule de la margin left pour le subnav du dernier li de la main liste
        var diffLargeur = largeurSubnav - largeurParent +2;
        var margLast = "-"+diffLargeur+"px";
        margLast = margLast.toString();

        // Nombre de sous listes par élément parent
        var nbList = jQuery(this).find(".colonne").length;

        if(nbList == 1 || nbList == 2)
        {
            // Alignement sur le li parent
            jQuery(this).find('.subnav').css('margin-left', '0px');

            // Si dernier li de la main liste => alignement sur le coté droit
            jQuery("#main-navigation li .subnav").last().css('margin-left', margLast);
        }else{
            /* Calcul du décalage de la subnav selon sa largeur + 70px
             * Pour centrer, enlever le +70
             * */
            var newMarginLeft = largeurSubnav/2 - demiParent +70;
            var newVal = "-"+newMarginLeft + "px";
            newVal = newVal.toString();
            jQuery(this).find('.subnav').css('margin-left', newVal);

            // Si premier li de la main liste => alignement sur le coté gauche
            jQuery("#main-navigation li .subnav").first().css('margin-left', '0px');
            // Si dernier li de la main liste => alignement sur le coté droit
            jQuery("#main-navigation li .subnav").last().css('margin-left', margLast);

        }
    }
    );

// Apparition et disparition des subnav en fondu
jQuery("#main-navigation>li").hover(
    function () {
        jQuery(this).children('.subnav').css({
            opacity: 0.0,
            visibility: "visible"
        }).animate({
            opacity: 1.0
        }, 400);
    },
    function () {
        jQuery(this).children('.subnav').css({
            opacity: 1.0,
            visibility: "hidden"
        }).animate({
            opacity: 0.0
        }, 400);
    }
    );


/////////// GESTION DES CLASSES ////////////


/*jQuery(function(){
    var test = jQuery("#main>li").length;
    for(var i=1;i<4;i++){
        var nomClassTotal = ".sousmenu"+ i + ">.subnav,"+".sousmenu"+ i;
        nomClassTotal = nomClassTotal.toString();

        var nomClass = ".sousmenu"+i;
        nomClass = nomClass.toString();

        var activeClass = nomClass + "Active";
        activeClass = activeClass.toString();

        jQuery(nomClassTotal).mouseover(
        function () {
            jQuery(nomClass).addClass(activeClass);
        });
        jQuery(nomClassTotal).mouseout(
        function () {
            jQuery(nomClass).removeClass(activeClass);
        }
    );
    }
});*/
jQuery(".sousmenu1>.subnav,.sousmenu1").mouseover(
    function () {
        jQuery(".sousmenu1").addClass('sousmenu1Active');
    });
jQuery(".sousmenu1>.subnav,.sousmenu1").mouseout(
    function () {
        jQuery(".sousmenu1").removeClass('sousmenu1Active');
    }
    );

jQuery(".sousmenu2>.subnav,.sousmenu2").mouseover(
    function () {
        jQuery(".sousmenu2").addClass('sousmenu2Active');
    });
jQuery(".sousmenu2>.subnav,.sousmenu2").mouseout(
    function () {
        jQuery(".sousmenu2").removeClass('sousmenu2Active');
    }
    );

jQuery(".sousmenu3>.subnav,.sousmenu3").mouseover(
    function () {
        jQuery(".sousmenu3").addClass('sousmenu3Active');
    });
jQuery(".sousmenu3>.subnav,.sousmenu3").mouseout(
    function () {
        jQuery(".sousmenu3").removeClass('sousmenu3Active');
    }
    );

jQuery(".sousmenu4>.subnav,.sousmenu4").mouseover(
    function () {
        jQuery(".sousmenu4").addClass('sousmenu4Active');
    });
jQuery(".sousmenu4>.subnav,.sousmenu4").mouseout(
    function () {
        jQuery(".sousmenu4").removeClass('sousmenu4Active');
    }
    );
