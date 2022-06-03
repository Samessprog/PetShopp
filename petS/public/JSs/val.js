
console.log('XD')
valRegister = document.getElementById('valRegister')

let checkBox = false;
let DataCheckBox = document.getElementById('dataCheckBox')

DataCheckBox.addEventListener('click', (() => {
    checkBox = true

}))

valRegister.addEventListener('click', validateRegister)

let erroCount = 0;

function validateRegister() {
    let login = document.getElementById('login').value
    
    if (login === null || login === '' || login === NaN || login === undefined){
        console.log(login + "XD")    
        let loginError = document.getElementById('loginError')
        loginError.classList.add('font-size-20', 'pl-10','color-red')
        loginError.textContent = "login error"


    }    
    
  

  


}



