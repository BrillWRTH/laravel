const password = document.getElementById('password');
const showPassword = document.getElementById('showPassword');

showPassword.addEventListener('click', function () {

    if (password.type === 'password') {
        password.type = 'text';
    } else {
        password.type = 'password';
    }

});
