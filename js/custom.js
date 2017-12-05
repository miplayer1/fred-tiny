// Affichage des travaux

function boucle()
{
    // sélectionner l'item actif
    var itemActif =  document.querySelector('.display');

    // on cache l'item actif en lui enlevant la classe
    itemActif.classList.remove("display");

    var itemSuivant = itemActif.nextElementSibling;

    if (itemSuivant)
    {
        // s'il y a un item qui suit
        itemSuivant.classList.add("display");
    }
    else
    {
        // on est au bout
        // revenir au début
        document.querySelector('.tagline ul li').classList.add("display");
    }
}

window.setInterval(boucle, 1500);
