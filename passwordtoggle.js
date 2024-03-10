document.getElementById('togglePassword').addEventListener('click', function (e) {
    // toggle the type attribute
    const password = document.getElementById('loginPassword');
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    
    // toggle the eye icon
    this.innerHTML = type === 'password' ? "<i class='bx bx-show'></i>" : "<i class='bx bx-hide'></i>";
});


// Password Toggle for Registration
document.getElementById('toggleRegisterPassword').addEventListener('click', function (e) {
    const registerPassword = document.getElementById('registerPassword');
    const type = registerPassword.getAttribute('type') === 'password' ? 'text' : 'password';
    registerPassword.setAttribute('type', type);
    this.innerHTML = type === 'password' ? "<i class='bx bx-show'></i>" : "<i class='bx bx-hide'></i>";
});

document.getElementById('toggleRepeatPassword').addEventListener('click', function (e) {
    const repeatPassword = document.getElementById('repeatPassword');
    const type = repeatPassword.getAttribute('type') === 'password' ? 'text' : 'password';
    repeatPassword.setAttribute('type', type);
    this.innerHTML = type === 'password' ? "<i class='bx bx-show'></i>" : "<i class='bx bx-hide'></i>";
});