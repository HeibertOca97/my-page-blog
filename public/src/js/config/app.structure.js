const widthElementDefault = 800;
let widthNavBarDefault = 0;
const $box_warning_connection = document.querySelector("#box-warning-connection");
const $btn_warning_hide = document.querySelector("#btn-warning-network");

function setMaxWidth(params) {
  widthNavBarDefault = params;
}
function getMaxWidth() {
  return widthNavBarDefault;
}

function applyStyleNavBar(...objectValue){
  const {0:transValue, 1:opaValue, 2:widthEl, 3:zValue,4:dValue} = objectValue;
  const nav_bar = document.querySelector("#nav");
  const box_cap = document.querySelector("#box-doc");

  nav_bar.style.right = `${0}%`;
  nav_bar.style.transform = `translateX(${transValue}%)`;
  nav_bar.style.opacity = `${opaValue}`;
  nav_bar.style.width = `${widthEl}%`;

  box_cap.style.zIndex = `${zValue}`;

  if (dValue == true) {
    box_cap.style.display = "block";
  } else {
    box_cap.style.display = "none";
  }
}

function validatedStyleNavBar(name){
  switch (name) {
    case "ico-bar":
      applyStyleNavBar(0, 1,getMaxWidth(),50,true);
    break;
    case "ico-cancel":
      applyStyleNavBar(100, 0, getMaxWidth(), -1, false);
    break;
    case "box-doc":
      applyStyleNavBar(100, 0, getMaxWidth(), -1), false;
    break;
  }
}

function applyEventNavBarMenu(el){
  document.addEventListener("click",e => {
    if(e.target.matches(`#${el}`)){
      validatedStyleNavBar(el);
    }
  });
}


function actionDefaultNavBar(){
  const elements = ["ico-bar","ico-cancel","box-doc"];

  for (let i = 0; i < elements.length; i++) {
    applyEventNavBarMenu(elements[i]); 
  }
}

function moveElementLinkOption1(box1ClassName, box2ClassName){
  const box1_content_link = document.querySelector(box1ClassName);
  const box2_content_link = document.querySelector(box2ClassName);

  const num = box1_content_link.children.length;
  
  for (let i = 0; i < num; i++) {
    box2_content_link.appendChild(box1_content_link.firstElementChild);   
    box2_content_link.children[i].classList.replace("link-default","link2-default");
    box2_content_link.children[i].classList.replace("link-active-route","link2-active-route");
  }
}

function moveElementLinkOption2(box1ClassName, box2ClassName){
  const box1_content_link = document.querySelector(box1ClassName);
  const box2_content_link = document.querySelector(box2ClassName);

  const num = box1_content_link.children.length;
  
  for (let i = 0; i < num; i++) {
    box2_content_link.appendChild(box1_content_link.firstElementChild);   
    box2_content_link.children[i].classList.replace("link2-default","link-default");
    box2_content_link.children[i].classList.replace("link2-active-route","link-active-route");
  }
}

function toogleAddElementEmpty(value = null){
  const heightHeader = document.querySelector(".box-nav-superior").clientHeight;
  const el = document.querySelector("#box-vacio");
  el.style.height = value == null ? `${heightHeader}px` : value;
}

/**********************
  FUNCIONALIDAD PRINCIPAL- EJECUTA LAS FUNCIONALIDADES DEPENDIENDO DE LA RESOLUCION DE LA VENTANA
*************************/
function styleBarNavMenuForDefault(){
  if (window.innerWidth > widthElementDefault) {
    setMaxWidth(50);
    moveElementLinkOption1(".nav-box-link","#box-bar-link-inf");
    toogleAddElementEmpty(0);
    applyStyleNavBar(100, 0, getMaxWidth(), 1, false);
    
  } else {     
    moveElementLinkOption2("#box-bar-link-inf",".nav-box-link");
    toogleAddElementEmpty();

    if(window.innerWidth > (widthElementDefault/2)){
      setMaxWidth(50);
    }else{
      setMaxWidth(70);
    }
  }
}
/**********************
  FUNCIONALIDAD - VISTA BARRA INFERIOR MENU ORDENADOR
*************************/
function applyEventScrollNavBarMenu(){
  const navBar_inferior = document.querySelector("#nav-bar-inferior");
  if(window.scrollY > 55.14){
    navBar_inferior.style.position = "fixed";
    navBar_inferior.style.top ="0px";
    navBar_inferior.style.left ="0px";
    navBar_inferior.style.width ="100%";
    navBar_inferior.style.boxShadow = "0px 2px 8px rgba(204, 204, 204, 0.637)";
  }else{
    navBar_inferior.style.position = "static";
    navBar_inferior.style.top ="0px";
    navBar_inferior.style.left ="0px";
    navBar_inferior.style.borderBottom="1px solid rgba(223, 223, 223, 0.849)";
    navBar_inferior.style.boxShadow = "0px 0px 0px transparent";
  }
}
/**********************
  FUNCIONALIDAD - VERIFICACION DE CONEXION A INTERNET
*************************/
var clearFunction;
function verifyConnectionNetwork(){
  if(navigator.onLine) {
    clearFunction = setTimeout(() => {
      verifyConnectionNetwork();
    }, 3000);
    console.log("Conexion existente");
    applyEffectBoxWarning();
  } else {
    clearTimeout(clearFunction);
    verifyErrorConnectionNetwork();
  }
}

function verifyErrorConnectionNetwork(){
  if(!navigator.onLine){
    clearFunction = setTimeout(()=>{
      verifyErrorConnectionNetwork();
    },3000);
    console.log("Sin conexion");
    applyEffectBoxWarning(0);
  }else{
    clearTimeout(clearFunction);
    verifyConnectionNetwork();
  }
}
function applyEffectBoxWarning(value = null){
  const height = $box_warning_connection.clientHeight;
  $box_warning_connection.style.transform = value == null ? `translateY(${-height}px)` : `translateY(0px)`;
}


window.addEventListener("resize", styleBarNavMenuForDefault);
document.addEventListener("DOMContentLoaded", styleBarNavMenuForDefault);
document.addEventListener("DOMContentLoaded", actionDefaultNavBar);
window.addEventListener("scroll", applyEventScrollNavBarMenu);
document.addEventListener('DOMContentLoaded', verifyConnectionNetwork);
$btn_warning_hide.addEventListener("click",()=>applyEffectBoxWarning());


