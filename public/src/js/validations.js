const MessageRequiredInput = (str = null) => {
  if (str != null) {
    const stuppercase = (str).toUpperCase();
    return `El campo "${stuppercase}" es obligatorio, ¡POR FAVOR! verifique todos aquellos que esten señalados con un (*)`;
  } else {
    return `¡POR FAVOR! Llene todos aquellos que esten señalados con un (*)`;
  } 
} 

function inputCheckedRequired(name) {
  let verificador = true;
  let checkedInput = document.querySelector(`input[name=${name}]:checked`);
  // nameInput = document.querySelector(`input[name=${name}]`);
    if(!checkedInput){
      //js/config/messageAlert.js
      toastr["warning"](MessageRequiredInput(), 'VERIFICAR');
      verificador = false;
      return verificador;
    }
    if(verificador== true){
      return verificador;
    }
  
}

function validatedInputTypeText(){
 let inputString = document.querySelectorAll("input.text");
 let areaString = document.querySelectorAll("textarea.text");
 const expNum = /[0-9]/;
let validacion = true;

  for (let i = 0; i < inputString.length; i++) {
    //VALIDAR CAMPOS SOLO TIPO STRING
    if (expNum.test(inputString[i].value)) {
      let inputName = inputString[i].getAttribute('data-name');
      toastr["info"](`El formato de caracteres del campo ${inputName} no es valido`, 'SOLO TEXTO');
      
      validacion = false;
      return validacion;
    }
  }

  for (let i = 0; i < areaString.length; i++) {
    //VALIDAR CAMPOS SOLO TIPO STRING
    if (expNum.test(areaString[i].value)) {
      let inputName = areaString[i].getAttribute('data-name');
      toastr["info"](`El formato de caracteres del campo ${inputName} no es valido`, 'SOLO TEXTO');
      
      validacion = false;
      return validacion;
    }
  }

  if(validacion == true){
    return validacion;
  }
}

function validatedInputRequired(){
 let inputRequired = document.querySelectorAll("input.required"),
 areaRequired = document.querySelectorAll("textarea.required"),
 selectRequired = document.querySelectorAll("select.required");
 let validacion = true;
  for (let i = 0; i < inputRequired.length; i++) {
    //VALIDAR CAMPOS OBLIGATORIOS
    if (!inputRequired[i].value) {
      let inputName = inputRequired[i].getAttribute('data-name');
      toastr["warning"](MessageRequiredInput(inputName), 'VERIFICAR');
      validacion = false;
      return validacion;
    }
  }
  
  for (let i = 0; i < areaRequired.length; i++) {
    //VALIDAR CAMPOS OBLIGATORIOS
    if (!areaRequired[i].value) {
      let inputName = areaRequired[i].getAttribute('data-name');
      toastr["warning"](MessageRequiredInput(inputName), 'VERIFICAR');
      validacion = false;
      return validacion;
    }
  }

  for (let i = 0; i < selectRequired.length; i++) {
    //VALIDAR CAMPOS OBLIGATORIOS
    if (!selectRequired[i].value) {
      let inputName = selectRequired[i].getAttribute('data-name');
      toastr["warning"](MessageRequiredInput(inputName), 'VERIFICAR');
      validacion = false;
      return validacion;
    }
  }

  if(validacion == true){
    return validacion;
  }
}

function validatedInputEmail(){
  const inputMail = document.querySelectorAll("input[type=email]"),
  $expCorreo = /^\w+([\.-]?\w+)*@(?:|hotmail|outlook|yahoo|live|gmail)\.(?:|com|ec)+$/;
  let validacion = true;
  for (let i = 0; i < inputMail.length; i++) {
    if (!$expCorreo.test(inputMail[i].value)) {
      toastr["info"](`Introduzca una dirección de correo electrónico válida (hotmail, outlook, yahoo, live, gmail)`, 'INVALIDO');
      
      validacion = false;
      return validacion;
    }
  }

  if(validacion == true){
    return validacion;
  }
}

function validatedInputTypeNumber(){
  const inputNumber = document.querySelectorAll("input.num");
  
  let validacion = true;
  for (let i = 0; i < inputNumber.length; i++) {
    //VALIDAR CAMPOS SOLO TIPO NUMBER
    if (isNaN(inputNumber[i].value) == true) {
      let inputName = inputNumber[i].getAttribute('data-name');
      toastr["info"](`El formato de caracteres del campo ${inputName} no es valido`, 'SOLO NUMEROS');
      
      validacion = false;
      return validacion;
    }
    
  }
  if(validacion == true){
    return validacion;
  }
}

//confirmacion para eliminar
function actionDelete() {
  $('.formDelete').submit(function(e){
    e.preventDefault();
    confirmDeleteAlert(e.target);    
   });
}

//remover estilos de error
function removeStyleErrorFormatOne(typeElement) {
  let el = document.querySelectorAll(typeElement);
  for (let i = 0; i < el.length; i++) {
    if(!el[i].classList.contains('ignore')){
      el[i].onfocus = ()=>elementApplyStyle(el[i]);
    }
  }
}
function elementApplyStyle(el){
  if (el) {
    el.classList.remove('border-danger');
  }
  if(el.parentElement.children[0]){
    el.parentElement.children[0].classList.remove('text-danger');
    // el.parentElement.children[0].classList.add('text-secondary');
  }
  if(el.parentElement.children[2]){
    el.parentElement.children[2].classList.remove('text-danger');
    el.parentElement.children[2].textContent = "";
  }
}

//agregar estilos de error
function addStyleErrorInput(typeElement,sms) {
  let el = document.querySelectorAll(typeElement);
  for (let i = 0; i < el.length; i++) {
    if(!el[i].classList.contains('ignore')){
      el[i].classList.add('border-danger');
      el[i].parentElement.children[0].classList.add('text-danger');
      el[i].parentElement.children[0].classList.remove('text-secondary');
      el[i].parentElement.children[2].classList.add('text-danger');
      el[i].parentElement.children[2].textContent = sms;
    }
  }
}

function removeStyleErrorInput(typeElement) {
  let el = document.querySelectorAll(typeElement);
  for (let i = 0; i < el.length; i++) {
    if(!el[i].classList.contains('ignore')){
      el[i].classList.remove('border-danger');
      if(el[i].parentElement.children[0]){
        el[i].parentElement.children[0].classList.remove('text-danger');
        el[i].parentElement.children[0].classList.add('text-secondary');
      }
      if (el[i].parentElement.children[2]) {
        el[i].parentElement.children[2].classList.remove('text-danger');
        el[i].parentElement.children[2].textContent = "";
      }
    }
  }
}


function removeStyleErrorFormatInputOptions(typeElement) {
  let el = document.querySelectorAll(typeElement);
  for (let i = 0; i < el.length; i++) {
    el[i].onchange = ()=>elementApplyStyleInputOptions(el[i]);
  }
}

function elementApplyStyleInputOptions(el) {
  if(el.parentElement.parentElement.parentElement.children[0]){
    el.parentElement.parentElement.parentElement.children[0].classList.remove('text-danger');
    el.parentElement.parentElement.parentElement.children[0].classList.add('text-secondary');
  }
  if (el.parentElement.parentElement.parentElement.children[2]) {
    el.parentElement.parentElement.parentElement.children[2].classList.remove('text-danger');
    el.parentElement.parentElement.parentElement.children[2].textContent = "";
  }
}

