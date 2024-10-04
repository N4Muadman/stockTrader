function clickMenu(element){
    var menuid = element.id;
    var menu = document.getElementById(menuid);
    var submeu = document.getElementById('submenu-'+menuid);

    var menus = document.getElementsByClassName('menu-item');
    for (var i = 0; i < menus.length; i++) {
        menus[i].classList.remove('active');
    }
    menu.classList.add('active');

    var submenus = document.getElementsByClassName('submenu');
    for (var i = 0; i < submenus.length; i++) {
        submenus[i].style.setProperty('display', 'none', 'important');
    }

    submeu.style.setProperty('display', 'block', 'important');
}
function dialogformlogin(element){
    var id = element.getAttribute('data-id');
    formLogin = document.getElementById('form-'+id);
    title = document.getElementById('title-'+id);


    var formLogins = document.querySelectorAll('[id^="title-"]');
    formLogins.forEach(function(sub) {
        sub.classList.remove('login-active');
    });
    title.classList.add('login-active')


    var formLogins = document.querySelectorAll('[id^="form-"]');
    formLogins.forEach(function(sub) {
        sub.style.display = 'none';
    });
    formLogin.style.display = 'block';

}
