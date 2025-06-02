let form = document.querySelector('form')


form.addEventListener('submit', function (event) {
    event.preventDefault();
    console.log('Envoi du form detecté !')

    let email = document.querySelector('#email')
    let error = document.querySelector('.message-error')
    let err = document.createElement('li')
    let mess = document.querySelectorAll("li")
    // enlever tous les messages d'erreur
    mess.forEach(element => {
        element.remove();
    });
    
    let pseudo = document.querySelector('#pseudo')
    let errpseudo = document.createElement('li')
    // pseudo au dessus de 6 caractere
    if (pseudo.value.length < 3) {
        error.classList.add('visible')
        
        errpseudo.innerText = 'pseudo incorrect'
        document.querySelector('#test').appendChild(errpseudo)
        pseudo.classList.add('erreur')
        pseudo.classList.remove('success')
    } else {
        
        pseudo.classList.remove('erreur')
        pseudo.classList.add('success')
    }
    // Juste verification email + localstorage
    
    if (email.value == '') {
        email.classList.add('erreur')
        email.classList.remove('success')
        
        error.classList.add('visible')
        err.innerText = 'Email invalide'
        document.querySelector('#test').appendChild(err)
    } else {
        email.classList.add('success')
        email.classList.remove('erreur')
    }




    let password = document.querySelector('#password')
    let password2 = document.querySelector('#password2')
    let passCheck = new RegExp("(?=.*[a-z])(?=.*[A-Z])(?=.*\\d)(?=.*[-+_!@#$%^&*., ?])")



    let errpassword = document.createElement('li')

    // Si le mdp n'a pas 8 caractère et doit passer le test du regex et que ce soit les memes mdp
    if (password.value == password2.value && password.value.length > 8 && passCheck.test(password.value) == true) {
        password.classList.remove('erreur')
        password2.classList.remove('erreur')
        password.classList.add('success')
        password2.classList.add('success')
        

    } else {
        error.classList.add('visible')
        
        errpassword.innerText = 'mot de passe pas conforme ou pas identique'
        document.querySelector('#test').appendChild(errpassword)
        
        password.classList.add('erreur')
        password2.classList.add('erreur')
        password.classList.remove('success')
        password2.classList.remove('success')

    }
//   message de fin de reussite
    let succes = document.querySelector('.message-success' )
    succes.classList.remove( 'visible' )

    if(
    pseudo.classList.contains('success' ) &&
    email.classList.contains('success' ) &&
    password.classList.contains("success") &&
    password2.classList.contains( 'success')
    ) {
    succes.classList.add('visible')
    }

    form.submit();
    
})




