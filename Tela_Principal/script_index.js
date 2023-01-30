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
function trocaShow()
{
    let trocacadastro = document.querySelector('.cadastro');
    let trocalogin = document.querySelector('.login');
    if(trocacadastro.classList.contains('troca-cadastro'))
    {
        trocacadastro.classList.remove('troca-cadastro');
        trocalogin.classList.remove('troca-login');
    }
    else
    {
        trocacadastro.classList.add('troca-cadastro');
        trocalogin.classList.add('troca-login');
    }
}