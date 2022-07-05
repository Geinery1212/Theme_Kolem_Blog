const btn_menu = document.querySelector('#btn-menu');
const menu = document.querySelector('#menu');
btn_menu.addEventListener('click', function(){
    if(menu.style.height != 'auto'){
        menu.style.height = 'auto';
    }else{
        menu.style.height = '0'
    }
    menu.classList.toggle('show');
});
const submenu_btn = document.querySelectorAll(".submenu-btn");
for(let i=0; i<submenu_btn.length; i++){
    submenu_btn[i].addEventListener('click', function(){
        if(window.innerWidth < 1024){
            const submenu = this.nextElementSibling;
            const height = submenu.scrollHeight;
            if(submenu.classList.contains('scroll')){
                submenu.classList.remove('scroll');
                submenu.removeAttribute('style');
            }else{
                submenu.classList.add('scroll');
                submenu.style.height = height + 'px';
            }
        }
    });
}
