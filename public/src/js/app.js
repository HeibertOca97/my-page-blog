/**********************
  FUNCIONALIDAD - EFECTO DE LA CARD
*************************/
function applyEffectCardContent(){
  const box_contenido = document.querySelectorAll(".box-contenido");
  if(box_contenido){
    for (let i = 0; i < box_contenido.length; i++) {
      box_contenido[i].addEventListener("mouseenter",e=>{
        e.target.children[0].children[0].classList.add("animate-icon");    
      });
      
      box_contenido[i].addEventListener("mouseleave",e=>{
        e.target.children[0].children[0].classList.remove("animate-icon");    
      }); 
    }
  }
}

/********************
 * VALIDACION DEL FORM CONTACT
 * *********************/
function sendFormDataContact(){
  const fr = document.querySelector("#fr-contact");
  if(fr){
    fr.addEventListener("submit", e =>{
      e.preventDefault();
      if(validatedInputTypeText() && validatedInputRequired() && validatedInputEmail()){
        e.target.submit();
      }
    });
  }
}


(()=>{
  applyEffectCardContent();
  sendFormDataContact();
})();