function menuShow()
{
    let menuMobile = document.querySelector('.mobile-menu');
    if(menuMobile.classList.contains('open'))
    {
        menuMobile.classList.remove('open');
        document.querySelector('.icon').src = "Tela_Principal/imagens/menu-white.svg";
    }
    else
    {
        menuMobile.classList.add('open');
        document.querySelector('.icon').src = "Tela_Principal/imagens/close-white.svg";
    }
}
function closeShow()
{
    let menuMobile = document.querySelector('.mobile-menu');
    if(menuMobile.classList.contains('open'))
    {
        menuMobile.classList.remove('open');
        document.querySelector('.icon').src = "Tela_Principal/imagens/menu-white.svg";
    }
}