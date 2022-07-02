const d = document;

const $nameInput = d.getElementById('nameInput'); 
const $apellidoInput = d.getElementById('apellidoInput'); 
const $correoInput = d.getElementById('correoInput'); 
const $passInput = d.getElementById('passInput'); 
const $pass2Input = d.getElementById('pass2Input'); 
const $btnForm = d.getElementById('btnForm'); 

$btnForm.disabled = true
let msgEqualsPass = false;
$pass2Input.addEventListener('keypress',()=>{
    msgEqualsPass = true;
    if($pass2Input.value == $passInput.value){
        msgEqualsPass = false;
        console.log('Iguales');
    }
})

