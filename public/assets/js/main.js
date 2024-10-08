function clickMenu(element){
    var menuid = element.id;
    var menu = document.getElementById(menuid);
    var icon = document.getElementById('icon-'+menuid);
    var submenu = document.getElementById('submenu-'+menuid);
    var currentDisplay = window.getComputedStyle(submenu).getPropertyValue('display');

    var menus = document.getElementsByClassName('menu-item');
    for (var i = 0; i < menus.length; i++) {
        menus[i].classList.remove('active');
    }
    menu.classList.add('active');

    var submenus = document.getElementsByClassName('submenu');
    for (var i = 0; i < submenus.length; i++) {
        submenus[i].style.setProperty('display', 'none', 'important');
        submenus[i].classList.remove('show');
    }

    var icons = document.getElementsByClassName('icon');
    for (var i = 0; i < icons.length; i++) {
        icons[i].classList.remove('fa-chevron-down');
        icons[i].classList.add('fa-chevron-up');
    }

    if (currentDisplay === 'block') {
        submenu.style.setProperty('display', 'none', 'important');
        icon.classList.remove('fa-chevron-down');
        icon.classList.add('fa-chevron-up');
        submenu.classList.remove('show');
    } else {
        submenu.style.setProperty('display', 'block', 'important');
        icon.classList.remove('fa-chevron-up');
        icon.classList.add('fa-chevron-down');
        submenu.classList.add('show');
    }
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
setTimeout(function(){
    const alert = document.getElementsByClassName("alert")[0];
    if(alert){
        alert.classList.add("d-none");
    }
}, 3000 );
function toggleSidebar(){
    menuId = document.getElementById("dropdown-menu-mobile");
    menuId.classList.toggle("d-block");
    menuId.classList.toggle("d-none");
}
