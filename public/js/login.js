window.addEventListener('DOMContentLoaded', function(){
    let btnNavLogin = document.getElementById('nav-login');
    let btnNavSignUp = document.getElementById('nav-signup');
    let login = document.getElementById('login-container');
    let signUp = document.getElementById('signup-container');

    let formLogin = document.getElementById('form-login');

    //ajustes del nav
    btnNavLogin.addEventListener('click',()=>{
        login.style.display = 'block';
        signUp.style.display = 'none';
    });
    btnNavSignUp.addEventListener('click',()=>{
        login.style.display = 'none';
        signUp.style.display = 'block';
    });

});